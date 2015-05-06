<!DOCTYPE html>

<!--INDEX.HTML-->

<html>

<head>
  <title>Order</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="src/style.css" />

</head>

<body>
  <div>
    <table>
      <td>
        <form id="orderForm" onsubmit="processForm()"
          action= "scripts/processOrder.php" method = "post">
          <fieldset>
            <legend>Order</legend>
            <table>
              <tr>
                <td rowspan="2"><img src="images/product1.jpg" alt="Fire Emblem IF: Black Night Kingdom" width="100px" height="100px"/></td>
                <td>
                  <p>Buy:</p>
                  <input type="checkbox" name="product1" value="yes">
                </td>
              </tr>
              <tr>
                <td>
                  <p>Quantity (1-10):</p>
                  <input type="number" name="product1_quantity" min="1" max="10">
                </td>
              </tr>
              <tr>
                <td rowspan="2"><img src="images/product2.jpg" alt="Fire Emblem IF: White Night Kingdom" width="100px" height="100px"/></td>
                <td>
                  <p>Buy:</p>
                  <input type="checkbox" name="product2" value="yes">
                </td>
              </tr>
              <tr>
                <td>
                  <p>Quantity (1-10):</p>
                  <input type="number" name="product2_quantity" min="1" max="10">
                </td>
              </tr>
              <tr>
                <td>First name:</td>
                <td colspan="2"><input type="text" name="first_name" size="30"/></td>
              </tr>
              <tr>
                <td>Last name:</td>
                <td><input type="text" name="last_name" size="30"/></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><input type="text" name="email" size="30"/></td>
              </tr>
              <tr>
                <td>Address:</td>
                <td><input type="text" name="address" size="30"/></td>
              </tr>
              <tr>
                <td>Credit Card:</td>
                <td><input type="text" name="credit_card" size="16" maxlength="16"/></td>
              </tr>
              <tr>
                <td>CVC:</td>
                <td><input type="text" name="cvc" size="3" maxlength="3"/></td>
              </tr>
              <tr>
                <td align="center" colspan="2"><input type="submit" value="Submit"/></td>
              </tr>
            </table>
          </fieldset>
        </form>
    </table>
  </div>

  <script text="text/javascript" src="js/order.js"></script>
</body>


</html>
