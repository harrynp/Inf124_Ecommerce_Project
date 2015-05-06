<!DOCTYPE html>

<!--INDEX.HTML-->

<html>

<head>
  <title>Bros Game Shop</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="src/style.css" />
  <script type="text/javascript" src="js/rotate.js"></script>
  <script type="text/javascript" src="js/menu.js"></script>
</head>

<body onload="startRotation()">
  <div>
    <table>
      <!--#include virtual="common/logo.php"-->
      <tr>
        <td>
          <h3>Welcome to Bros Game Shop!</h3>
          <p class="Description">We offer only the best video games at a unbeatable price.</p>
          <p class="Description">Our goal here at Bros Game Shop is to make sure you leave </p>
          <p class="Description">with a game that you would be satisfied with.</p>
          <br/>
          <?php
            echo "Current time: ".date("jS \of F, Y \a\\t H:i:s\n")
          ?>
          <p class="Description">Please contact us as (310)555-5555</p>
          <p class="Description">We are located at 100 Bren Events Center Drive Irvine, CA 92697-1500</p>
        </td>
        <td>
          <a id="rotation_link" href=""><img id="rotation" src="" alt="Video Games" width="300px" height="400px" /></a>
        </td>
        <td>
        </td>
      </tr>
      <!--#include virtual="common/footer.php"-->
    </table>
  </div>
</body>


</html>
