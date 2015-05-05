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
        <form id="feedbackForm" onsubmit="validateFeedBackForm()"
        action = "scripts/processFeedback.php" method = "post">
          <fieldset>
            <legend>Feedback</legend>
            <table>
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
                <td>Phone Number:</td>
                <td><input type="text" name="phone" size="30"/></td>
              </tr>
              <tr>
                <td>Subject:</td>
                <td><input type="text" name="subject" size="30"/></td>
              </tr>
              <tr>
                <td>Comments:</td>
                <td><textarea type="text" name="message" rows="6" cols="32"></textarea></td>
              </tr>
              <tr>
                <td colspan="2">Please check here if you wish to recieve a reply:
                  <input type="checkbox" name="reply" value="yes" /></td>
              <tr>
                <td colspan="2" align="center"><input type="submit" value="Send Feedback"/> <input type="reset" value="Reset Form" /></td>
              </tr>
            </table>
          </fieldset>
        </form>
    </table>
  </div>

  <script text="text/javascript" src="js/feedback.js"></script>
</body>


</html>
