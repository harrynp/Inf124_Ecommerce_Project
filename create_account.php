<!DOCTYPE html>

<!--INDEX.HTML-->

<html>

<head>
  <title>Create Account</title>
  <!-- INSERT meta tag information -->
  <link rel="stylesheet" type="text/css" href="src/style.css" />

</head>

<body>
  <div>
    <table>
      <td>
        <form id="userForm" action="" onsubmit="processForm()">
          <fieldset>
            <table>
              <tr>
                <th colspan="2"><h1>Create account</h1></th>
              </tr>
              <tr>
                <td>First name:</td>
                <td><input type="text" name="first_name" size="30"/></td>
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
                <td>Username:</td>
                <td><input type="text" name="username" size="30"/></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="text" name="password" size="30"/></td>
              </tr>
              <tr>
                <td>Confirm password:</td>
                <td><input type="text" name="confirm_password" onkeyup="checkPassword(); return false;" size="30"/></td>
              </tr>
              <tr>
                <td align="center" colspan="2"><input type="submit" value="Submit"/></td>
              </tr>
            </table>
          </<fieldset>
        </form>
    </table>
  </div>

  <script text="text/javascript" src="js/create_account.js"></script>
</body>


</html>
