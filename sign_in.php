<!DOCTYPE html>

<!--INDEX.HTML-->

<html>

<head>
  <title>Create Account</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="src/style.css" />

</head>

<body>
  <div>
    <table>
      <td>
        <form id="loginForm" action="" onsubmit="processForm()">
          <fieldset>
            <legend>Login</legend>
            <table>
              <tr>
                <td>Username:</td>
                <td><input type="text" name="username" size="30"/></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="text" name="password" size="30"/></td>
              </tr>
              <tr>
                <td align="center" colspan="2"><input type="submit" value="Submit"/></td>
              </tr>
              <tr>
                <td align="center" colspan="2"><a href="create_account.php">Create account</a></td>
              </tr>
            </table>
          </<fieldset>
        </form>
    </table>
  </div>

  <script text="text/javascript" src="js/sign_in.js"></script>
</body>


</html>
