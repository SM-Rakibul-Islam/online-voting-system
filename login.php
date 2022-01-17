<?php include "header.php";
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['SESS_NAME']) != "") {
	header("Location: vote.php");
}
?>

<!--Spacing from top-->
<br>


<center>
	<legend>
		<h1>ভোট প্রদান করতে লগইন করুন</h1>
	</legend>
</center>


<?php global $nam;
echo $nam; ?>
<?php global $error;
echo $error; ?>

<!--Spacing between legend and login boxes-->
<br>


<center>
	<form action="login_action.php" method="post" id="myform">
	<!--USERNAME INPUT-->
	<font color='black' size='5'>জাতীয় পরিচয়পত্র নং :
		<input type="text" name="username" value="" style="border: 2px solid green; border-radius: 10px; height: 25px">
		<br>
		<br>
	<!--PASSWORD INPUT-->
	<font color='black' size='5' style = " margin-left: 5rem">পাসওয়ার্ড :
		<input type="password" name="password" value="" style="border: 2px solid green; border-radius: 10px; height: 25px">
		<br>
		<br>
	<!--LOGIN BUTTON-->
		<input class='button button1' type="submit" name="login" value="লগইন" style = " margin-left: 6rem">
	</form>
</center>

<!--VALIDATION THROUGH JAVASCRIPT if any field is empty and 
to notify voter about the min-max length for USERNAME and PASSWORD-->
<script type="text/javascript">
	var frmvalidator = new Validator("myform");
	frmvalidator.addValidation("username", "req", "দয়া করে জাতীয় পরিচয়পত্র নং লিখুন!");
	frmvalidator.addValidation("username", "maxlen=17", "জাতীয় পরিচয়পত্র নং ১৭ সংখ্যার বেশি হতে পারবে না!");
	frmvalidator.addValidation("password", "req", "দয়া করে পাসওয়ার্ড লিখুন!");
	frmvalidator.addValidation("password", "minlen=5", "পাসওয়ার্ড ৫ অক্ষরের কম হতে পারবে না!");
</script>

<!--This break spacing is for footer to get a perfect bottom allignment-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include "footer.php"; ?>