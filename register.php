<?php include "header.php";
if (!isset($_SESSION)) 
{
    session_start();
}
if (isset($_SESSION['SESS_NAME']) != "") 
{
    header("Location: vote.php");
}
?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<!--Spacing from top-->
<br>


<center>
    <legend>
        <h1> রেজিস্ট্রেশন করুন </h1>
    </legend>
</center>

<!--Spacing between legend and login boxes-->
<br>

<!--GLOBAL VARIABLE DECLAREATION-->
<?php global $nam;
echo $nam;?>
<?php global $error;
echo $error;?>


<div>
<center>
        <form action="reg_action.php" method="post" id="myform">
            <!--FIRST NAME INPUT-->
	        <font color='black' size='5'>নামের প্রথম অংশ :
            <input type="text" name="firstname" value="" style="border: 2px solid green; border-radius: 10px; height: 25px"/>
            <br>
            <br>
            <!--LAST NAME INPUT-->
	        <font color='black' size='5'>নামের শেষ অংশ :
            <input type="text" name="lastname" value="" style="border: 2px solid green; border-radius: 10px; height: 25px"/>
            <br>
            <br>
            <!--USERNAME INPUT-->
	        <font color='black' size='5'style = " margin-left: -2rem">জাতীয় পরিচয়পত্র নং :
            <input type="text" name="username" value="" style="border: 2px solid green; border-radius: 10px; height: 25px"/>
            <br>
            <br>
	        <!--PASSWORD INPUT-->
	        <font color='black' size='5' style = " margin-left: 2.8rem">পাসওয়ার্ড :
            <input type="password" name="password" value="" style="border: 2px solid green; border-radius: 10px; height: 25px"/>
            <br>
            <br>
            <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
            <br>
            <!--SUBMIT BUTTON-->
            <input class='button button1' type="submit" name="submit" value="রেজিস্টার" style = " margin-left: 6rem"/>
        </form>
    </font>
</center>
</div>


<!--VALIDATION THROUGH JAVASCRIPT if any field is empty and 
to notify voter about the min-max length for USERNAME and PASSWORD
FIRSTNAME and LASTNAME are limited upto 50 characters-->
<script type="text/javascript">
    var frmvalidator = new Validator("myform");
    frmvalidator.addValidation("firstname", "req", "দয়া করে নামের প্রথম অংশ লিখুন");
    frmvalidator.addValidation("firstname", "maxlen=30");
    frmvalidator.addValidation("lastname", "req", "দয়া করে নামের শেষ অংশ লিখুন");
    frmvalidator.addValidation("lastname", "maxlen=30");
    frmvalidator.addValidation("username", "req", "দয়া করে জাতীয় পরিচয়পত্র নং লিখুন");
    frmvalidator.addValidation("username", "maxlen=17", "জাতীয় পরিচয়পত্র নং ১৭ সংখ্যার বেশি হতে পারবে না!");
    frmvalidator.addValidation("password", "req", "দয়া করে পাসওয়ার্ড লিখুন");
    frmvalidator.addValidation("password", "minlen=5", "পাসওয়ার্ড ৫ অক্ষরের কম হতে পারবে না!");
</script>

<!--This break spacing is for footer to get a perfect allignment-->

<br>
<br>
<br>
<br>
<br>
<br>

<?php include "footer.php";?>
