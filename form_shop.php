<form method="post" action="process_order.php">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br>

  <label for="address">Address:</label>
  <textarea id="address" name="address" required></textarea><br>

  <label for="payment">Payment method:</label>
  <select id="payment" name="payment" required>
    <option value="credit_card">Credit card</option>
    <option value="paypal">PayPal</option>
  </select><br>

  <input type="submit" value="Place Order">
</form>
