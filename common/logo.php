<!-- logo.html -->
<tr>
  <td rowspan="2" colspan="2">
    <img src="images/logo.jpg" alt="Bros Game Shop"/>
  </td>
  <td><a href="sign_in.php">Sign in</a></td>
</tr>
<tr>
  <td><a href="create_account.php">Create account</a></td>
</tr>
<tr>
  <!-- <td><a href="index.php">Home</a></td>
  <td><a href="shop.php">Shop</a></td> -->
  <td align="center">
    <div id="mainMenu" onmouseout="hide()" onload="hide()">
      <ul class="Links">
        <li><a href="index.php" onmouseover="show('m1')">Home</a></li>
      </ul>
    </div>
  </td>
  <td>
    <div id="mainMenu" onmouseout="hide()" onload="hide()">
      <ul class="Links">
        <li>
          <a href="shop.php" onmouseover="show('m2')">Shop</a>
          <div id="m2" onmouseover="show('m2')">
            <a href="3ds.php">3DS Games</a>
            <a href="ps4.php">PS4 Games</a>
          </div>
        </li>
      </ul>
    </div>
  </td>
  <!-- <td><a href="cart.php">Cart</a></td> -->
  <td></td>
</tr>
