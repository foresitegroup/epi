<?php
$PageTitle = "Contact Us";
include "header.php";
?>

<div id="header-image-sub" style="background: url(images/header-contact.jpg) top left no-repeat;">
  <img src="images/header-text-contact.png" alt="keep your absorbents out of landfills and incineration" style="position: absolute; right: 50px;">
</div>

<div id="content">
  <?php
  if (isset($_POST['submit'])) {
    $SendTo = "info@environmentalpartnershipsinc.com";
    $Subject = "Contact From Website";
    $From = "From: Contact Form <contactform@environmentalpartnershipsinc.com>\r\n";
    $From .= "Reply-To: " . $_POST['email'] . "\r\n";

    $Message = $_POST['name'] . "\n";
    if (!empty($_POST['company'])) $Message .= $_POST['company'] . "\n";
    if (!empty($_POST['email'])) $Message .= $_POST['email'] . "\n";
    if (!empty($_POST['phone'])) $Message .= $_POST['phone'] . "\n";

    $Message .= "\n";

    if (!empty($_POST['comment'])) $Message .= "Details of services needed:\n" . $_POST['comment'] . "\n";

    $Message = stripslashes($Message);

    mail($SendTo, $Subject, $Message, $From);
    //echo "<pre>".$Message."</pre>";

    echo "
    <img src=\"images/contact-exterior.jpg\" alt=\"\" class=\"right\" style=\"margin: 25px 12px 25px 20px;\">
    <h1>Your information has been sent!</h1>
    Thank you for your interest in Environmental Partnerships.<br>You will be contacted soon.<br>
    <br>
    If you need immediate service, please call 763-784-5500 or 877-SORBENT (767-2368).
    <div style=\"clear: both;\"></div>
    ";
  } else {
  ?>

  <div style="float: left; width: 500px;">
    <strong>Contact Us</strong><br>
    Please contact Environmental Partnerships to get started with your recycling program.  Call 763-784-5500 or 877-SORBENT (767-2368) for an estimate or use the form below.<br>
    <br>
    <br>

    <script type="text/javascript">
      <!--
      function checkform (form) {
        if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false; }
        if (form.email.value == "") { alert('Email required.'); form.email.focus(); return false; }
        if (form.phone.value == "") { alert('Phone required.'); form.phone.focus(); return false; }
        return true;
      }
      //-->
    </script>

    <form action="contact.php" method="POST" onSubmit="return checkform(this)" style="width: 480px;">
      <div>
        <div style="float: left; width: 70px;"><strong>Name</strong></div>
        <input type="text" name="name" style="width: 400px;"><br>
        <br>

        <div style="float: left; width: 70px;"><strong>Company</strong></div>
        <input type="text" name="company" style="width: 400px;"><br>
        <br>

        <div style="float: left; width: 70px;"><strong>Email</strong></div>
        <input type="text" name="email" style="width: 400px;"><br>
        <br>

        <div style="float: left; width: 70px;"><strong>Phone</strong></div>
        <input type="text" name="phone" style="width: 400px;"><br>
        <br>

        <strong>Details of services needed</strong><br>
        <textarea name="comment" rows="8" cols="30" style="width: 470px; height: 150px;"></textarea><br>
        <br>

        <input type="submit" name="submit" value="Submit" style="display: block; margin: 0 auto; font-weight: bold;">
      </div>
    </form>

    <br><br>

    <strong>Mailing Address</strong><br>
    Environmental Partnerships, Inc.<br>
    10041 Flanders Court NE<br>
    Minneapolis, MN 55449-5933<br>
    <?php email("info@environmentalpartnershipsinc.com"); ?>
  </div>

  <div style="float: right; width: 300px;">
    <strong>Area of Service</strong><br>
    <img src="images/states.jpg" alt="">

    <img src="images/contact-exterior.jpg" alt="" class="right" style="float: none; margin: 215px 0 0 0; width: 265px;"><br><br>
  </div>

  <div style="clear: both;"></div>
  <?php } ?>
</div> <!-- END content -->

<?php include "footer.php"; ?>