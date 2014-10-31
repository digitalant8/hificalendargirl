<?php include_once ('head.php'); ?>
<link href="css/form.css" rel="stylesheet" type="text/css" />
<!-- the page title -->
<title>Apply to be the HiFi Calendar Girl</title>

<?php 
include_once('page-header.php'); 
include_once ('nav.php'); 
?>



<!-- top row starts -->
<div id="top-row">
<!-- body starts -->
<div id="body-copy">
<img src="images/page-headers/09.jpg" />

<?php if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
	$message = "Name : " . $_POST['name'] . "\r\nEmail : " . $_POST['email'] . "\r\nSubject : " . $_POST['subject'] . "\r\nMessage : " . $_POST['message'];
	$x = mail ( "feedback@hificalendargirl.com" , "Email from website" , $message); 
	if ($x) {
		echo "<div class='confirm-msg'>Thank you for your email. We will get to you as soon as possible</div>";
	}
?>

<?php }?>
<h2>Reach Us</h2>

<a href="page-images/winners/tapashree.jpg" data-lightbox="page-image1" title="Hi-fi Calendar Girl 2014"><img class="page-images" src="page-images/winners/tapashree-t.jpg" alt="Hi-fi Calendar Girl 2014" /></a>

<strong><p>Ne Hi-fi
Positiv Television Pvt. Ltd.<br />
NETV Building<br />
A. K. Azad Road<br />
Rehabari, Guwahati-781008<br />
ASSAM, INDIA<br />
Ph: 8811087482 / 8811098490<br />
0361-2607071/74/75</p></strong>

<div id="reachus-form">
    <p>Please fill out this form to contact us and we will get back to you as soon as possble.</p>
	<form action="reach-us.php" method="post" name="reachus">
	<div class="form-row">
		<div class="form-label">Name</div>
        <div class="form-field"><input name="name" type="text" maxlength="50" /></div>
	</div>
    <div class="form-row">
    	<div class="form-label">Email</div>
        <div class="form-field"><input name="email" type="text" maxlength="50" /></div>
    </div>
    <div class="form-row">
    	<div class="form-label">Subject</div>
        <div class="form-field"><input name="subject" type="text" maxlength="70" /></div>
    </div>
    <div class="form-row">
    	<div class="form-label">Message</div>
        <div class="form-field"><textarea name="message"></textarea></div>
    </div>
    <div class="form-row">
		<div class="form-buttons">
        	<input name="reset" type="reset" value="Reset" />
            <input name="submit" type="submit" value="Submit" />
        </div>
    </div>
    </form>
</div>

</div>
<!-- body ends -->

<?php include_once('branding.php'); ?>

<div class="clear-both"></div>

</div>
<!-- top row ends -->
<?php include_once('footer.php'); ?>