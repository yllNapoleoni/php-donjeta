<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      background: linear-gradient(135deg, #e0e7ff 0%, #f4f4f4 100%);
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .payment-container {
      background: #fff;
      max-width: 400px;
      width: 100%;
      padding: 36px 28px;
      border-radius: 18px;
      box-shadow: 0 6px 32px rgba(0,0,0,0.10);
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    h2 {
      text-align: center;
      margin-bottom: 28px;
      color: #1a237e;
      font-weight: 600;
      letter-spacing: 1px;
    }
    form {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    label {
      align-self: flex-start;
      margin-bottom: 6px;
      color: #333;
      font-size: 1em;
      font-weight: 500;
    }
    input[type="text"], input[type="number"], input[type="email"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #bdbdbd;
      border-radius: 8px;
      font-size: 1em;
      background: #f8fafc;
      transition: border 0.2s;
    }
    input[type="text"]:focus, input[type="number"]:focus, input[type="email"]:focus {
      border: 1.5px solid #1976d2;
      outline: none;
      background: #fff;
    }
    .pay-btn {
      width: 100%;
      padding: 14px;
      background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
      color: #fff;
      border: none;
      border-radius: 24px;
      font-size: 1.15em;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s, box-shadow 0.2s;
      box-shadow: 0 2px 8px rgba(25, 118, 210, 0.08);
      margin-top: 8px;
      letter-spacing: 0.5px;
    }
    .pay-btn:hover {
      background: linear-gradient(90deg, #1565c0 0%, #1976d2 100%);
      box-shadow: 0 4px 16px rgba(25, 118, 210, 0.12);
    }
    .success-message {
      color: #388e3c;
      font-size: 1.2em;
      font-weight: 600;
      margin-top: 18px;
      text-align: center;
      display: none;
    }
  </style>
</head>
<body>
  <header style="position: absolute; top: 24px; left: 0; width: 100%; text-align: center;">
    <h1 style="margin: 0; color: #1a237e; font-size: 2.1em; font-weight: 700; letter-spacing: 2px;">Skillfocus</h1>
  </header>
  <div class="payment-container">
    <h2>Payment Details</h2>
    <form id="paymentForm">
      <label for="name">Cardholder Name</label>
      <input type="text" id="name" name="name" required>

      <label for="card">Card Number</label>
      <input type="text" id="card" name="card" maxlength="19" placeholder="1234 5678 9012 3456" required>

      <label for="expiry">Expiry Date</label>
      <input type="text" id="expiry" name="expiry" maxlength="5" placeholder="MM/YY" required>

      <label for="cvv">CVV</label>
      <input type="number" id="cvv" name="cvv" maxlength="4" placeholder="123" required>

      <label for="email">Email (for receipt)</label>
      <input type="email" id="email" name="email" required>

      <button type="submit" class="pay-btn">Pay Now</button>
      <div class="success-message" id="successMessage">Payment Successful!</div>
    </form>
    <button type="button" class="pay-btn" style="margin-top:16px;background:linear-gradient(90deg,#757575 0%,#bdbdbd 100%);" onclick="window.location.href='pricing.php'">Back</button>
  </div>
  <script>
    document.getElementById('paymentForm').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('successMessage').style.display = 'block';
    });
  </script>
</body>
</html>
