<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME']) != "") 
{
    header("Location: vote.php");
}
?>

<!--This break spacing is for  a perfect top allignment-->
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


<?php global $msg;
echo $msg; ?>

<p>
    <center>
    <font color='#FF6600' size='20'>অনলাইন ভোটিং পরিষেবায় আপনাকে স্বাগতম 
</p>

<p>
    <font color='black' size='5'>পছন্দের প্রার্থীকে ভোট দিতে প্রথমে রেজিস্ট্রেশন করুন, এরপর লগইন করুন
    </center>
</p>


<!--This break spacing is for footer to get a perfect bottom allignment-->

<br>
<br>
<br>
<br>
<br>

<?php include "footer.php"; ?>