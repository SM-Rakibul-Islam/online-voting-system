<?php
session_start();
$captcha = "";
include "connection.php";
if (isset($_POST['submit'])) {

    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
    }
    if (!$captcha) {
        $error = "<center><h3><font color='#FF0000'>ক্যাপচা চেক করুন!</h3></center>";
        include 'register.php';
        exit();
    }

    $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
    $responseKeys = json_decode($response, true);
    if (intval($responseKeys["success"]) !== 1) {
        $error = "<center><h3><font color='#FF0000'>আপনি একজন স্প্যামার!</h3></center>";
    }

    $sq = mysqli_query($con, 'SELECT username FROM loginusers WHERE username="' . $_POST['username'] . '"');
    $exist = mysqli_num_rows($sq);

    if ($exist == 1) {
        $nam = "<center><h2><font color='#FF0000'>আপনি পূর্বেই রেজিস্ট্রেশন করেছেন!</h2></center></font>";
        unset($username);
        include 'register.php';
        exit();
    }
    $sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,username)
         VALUES("' . $_POST['firstname'] . '","' . $_POST['lastname'] . '","' . $_POST['username'] . '")');

    if (!$sql) {
        die(mysqli_error($con));
    }
    $sql2 = mysqli_query($con, 'INSERT INTO loginusers(username,password)
         VALUES("' . $_POST['username'] . '","' . md5($_POST['password']) . '")');
    if (!$sql2) {
        die(mysqli_error($con));
    } else {
        echo "<center><h2><font color='#FF0000'>আপনার রেজিস্ট্রেশন সম্পন্ন হয়েছে!</h2> <br> <a href= 'login.php'>লগইন করতে এখানে ক্লিক করুন</a></center>";
    }
} else {
    $error = "<center><h2><font color='#FF0000'>যান্ত্রিক ত্রুটির কারণে আপনার রেজিস্ট্রেশন সম্পন হয়নি!</h2></center>";
    include "register.php";
}
