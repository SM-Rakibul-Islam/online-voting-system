<?php
session_start();

include "auth.php";
include "connection.php";

if (isset($_POST['cpass'])) {
    $currentpass = md5($_POST['cpassword']);
    $newpass = md5($_POST['npassword']);
    $cnewpass = md5($_POST['cnpassword']);

    $sql = mysqli_query($con, 'SELECT password FROM loginusers WHERE username="' . $_SESSION['SESS_NAME'] . '" ');
    $row = mysqli_fetch_assoc($sql);
    $pass = $row['password'];

    if ($currentpass != $pass) {
        $error = "<center><h2><font color='#FF0000'>আপনি ভুল 'বর্তমান পাসওয়ার্ড' টাইপ করেছেন!</h2></center></font>";
        include "change_pass.php";
    } else if ($currentpass == $pass && $newpass == $cnewpass) {
        $sql1 = mysqli_query($con, 'UPDATE loginusers SET password="' . md5($_POST['npassword']) . '" WHERE username="' . $_SESSION['SESS_NAME'] . '" ');
        $error = "<center><h2><font color='green'>আপনার পাসওয়ার্ড পরিবর্তন হয়েছে!</h2></center></font>";
        include "change_pass.php";
    } else {
        $error = "<center><h2><font color='#FF0000'>অভিন্ন পাসওয়ার্ড দিন!</h2></center></font>";
        include "change_pass.php";
    }
} else {
    $error = "<center><h2><font color='#FF0000'>ত্রুটির কারণে পাসওয়ার্ড পরিবর্তন করা সম্ভব হচ্ছেনা। আবার চেষ্টা করুন!</h2></center></font>";
    include "change_pass.php";
}
