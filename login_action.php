<?php
session_start();
include "connection.php";

if (isset($_POST['login'])) {
    $sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE username="' . $_POST['username'] . '"  AND password="' . md5($_POST['password']) . '" AND status="ACTIVE "');

    if (mysqli_num_rows($sql) > 0) {
        $member = mysqli_fetch_assoc($sql);
        $_SESSION['SESS_NAME'] = $member['username'];

        header("location: vote.php");
    }
// THIS ERROR WILL BE TRIGGERED IF USERNAME OR PASSWORD IS WRONG
    else {
        $error = "<center><h4><font color='#FF0000'>জাতীয় পরিচয়পত্র নং অথবা পাসওয়ার্ড ভুল হয়েছে!</h4></center></font>";
        include "login.php";
    }
}
// NOT SURE WHEN THIS ERROR WILL BE TRIGGERED
else {
    $error = "<center><h4><font color='#FF0000'>জাতীয় পরিচয়পত্র নং অথবা পাসওয়ার্ড ভুল ডেটাবেজে নাই!</h4></center></font>";
    include "login.php";
}
