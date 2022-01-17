<?php
if (!isset($_SESSION)) 
{
    session_start();
}
include "auth.php";
include "header_voter.php";
?>

<!--Spacing from top-->
<br>

<center>
    <legend>
        <h1> পাসওয়ার্ড পরিবর্তন করুন </h1>
    </legend>
</center>

<!--Spacing between legend and change password boxes-->

<h4 style="color:#e60808;"><?php global $nam; echo $nam;?></h4>
<h4 style="color:#e60808;"><?php global $error; echo $error;?></h4>

<div>
<center>
    <form action="change_pass_action.php" method="post" id="myform">
        <!--CURRENT PASSWORD INPUT-->
        <font color='black' size='5'>বর্তমান পাসওয়ার্ড :
        <input type="password" name="cpassword" value="" style="border: 2px solid green; border-radius: 10px; height: 25px">
        <br>
        <br>
        <!--NEW PASSWORD INPUT-->
        <font color='black' size='5' style = " margin-left: 1rem">নতুন পাসওয়ার্ড :
        <input type="password" name="npassword" value="" style="border: 2px solid green; border-radius: 10px; height: 25px">
        <br>
        <br>
        <!--CONFIRM PASSWORD INPUT-->
        <font color='black' size='5' style = " margin-left: -5.5rem">নতুন পাসওয়ার্ড নিশ্চিত করুন :
        <input type="password" name="cnpassword" value="" style="border: 2px solid green; border-radius: 10px; height: 25px">
        <br>
        <br>
        <input class="button button1" type="submit" name="cpass" value="পরিবর্তন" style = " margin-left: 6rem">
    </form>
</center>
</div>


<!--VALIDATION THROUGH JAVASCRIPT if any field is empty and 
to notify voter about the min length for PASSWORD-->
<script type="text/javascript">
    var frmvalidator = new Validator("myform");
    frmvalidator.addValidation("cpassword", "req", "দয়া করে বর্তমান পাসওয়ার্ড টাইপ করুন!");
    frmvalidator.addValidation("cpassword", "minlen=5", "পাসওয়ার্ড ৫ অক্ষরের কম হতে পারবে না!");
    frmvalidator.addValidation("npassword", "minlen=5", "দয়া করে নতুন পাসওয়ার্ড টাইপ করুন!");
    frmvalidator.addValidation("npassword", "mainlen=5", "পাসওয়ার্ড ৫ অক্ষরের কম হতে পারবে না!");
    frmvalidator.addValidation("cnpassword", "req", "দয়া করে নতুন পাসওয়ার্ড নিশ্চিত করুন!");
    frmvalidator.addValidation("cnpassword", "minlen=5", "পাসওয়ার্ড ৫ অক্ষরের কম হতে পারবে না!");
</script>