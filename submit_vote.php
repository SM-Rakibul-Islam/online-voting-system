<?php
include "connection.php";
session_start();

if (empty($_POST['cast'])) {
    $error = "<center><h2><font color='#FF0000'>প্রতীক নির্বাচন করুন!</h2></center>";
    include "vote.php";
    exit();
}

$cast = $_POST['cast'];
$sess = $_SESSION['SESS_NAME'];
$sql = mysqli_query($con, 'SELECT * FROM voters WHERE username="' . $_SESSION['SESS_NAME'] . '" AND status="VOTED"');

if (mysqli_num_rows($sql) > 0) {
    $msg = "<center><h2><font color='#FF0000'>আপনি পূর্বে একবার ভোট দিয়েছেন!</h2></center>";
    include 'vote.php';
    exit();
} else {
    $sql1 = mysqli_query($con, 'UPDATE vote_results SET votecount = votecount + 1 WHERE symbol_name = "' . $_POST['cast'] . '"');
    $sql2 = mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE username="' . $_SESSION['SESS_NAME'] . '"');
    $sql3 = mysqli_query($con, 'UPDATE voters SET voted= "' . $_POST['cast'] . '" WHERE username="' . $_SESSION['SESS_NAME'] . '"');
    if (!$sql1 || !$sql2) {
        die("Error on mysql query" . mysqli_error());
    } else {
        $msg = "<center><h2><font color='#FF0000'> অভিনন্দন! আপনার ভোট সম্পন্ন হয়েছে! </h2></center>";
        include 'vote.php';
        exit();
    }
}
