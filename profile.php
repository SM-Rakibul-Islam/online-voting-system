<?php
if (!isset($_SESSION)) {
    session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>

<br>

<center>
<h1> আপনার তথ্যাবলি </h1>
<h2 style ='margin-left: -.8rem'> আপনার জাতীয় পরিচয়পত্র নং : <?php echo $_SESSION['SESS_NAME']; ?></h2>

<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="' . $_SESSION['SESS_NAME'] . '" AND status = "VOTED"';

if ($result = mysqli_query($con, $query)) {
    if (mysqli_num_rows($result) > 0) {
        $sql = mysqli_query($con, 'SELECT * from voters WHERE username="' . $_SESSION['SESS_NAME'] . '"');
        $row = mysqli_fetch_assoc($sql);

        echo "<h2 style ='margin-left: 8.2rem'>আপনার নাম : " . $row['firstname'] . " " . $row['lastname'] . "</h2>";
        echo "<h2 style ='margin-left: -2.8rem'>আপনার ভোটিং স্ট্যাটাস : " . $row['status'] . " </h2>";

        if ($row['voted'] == 'Boat') {
            $choice = "নৌকা";
        } elseif ($row['voted'] == 'Paddy') {
            $choice = "ধানের শীষ";
        } elseif ($row['voted'] == 'Plough') {
            $choice = "লাঙ্গল";
        } elseif ($row['voted'] == 'Sickle') {
            $choice = "কাস্তে";
        } elseif ($row['voted'] == 'Hammer') {
            $choice = "হাতুড়ি";
        }

        echo "<h2>আপনি ভোট দিয়েছেন : \"" . $choice . "' প্রতীকে</h2>";
    } else {
        $sql = mysqli_query($con, 'SELECT * from voters WHERE username="' . $_SESSION['SESS_NAME'] . '"');
        $row = mysqli_fetch_assoc($sql);
        echo "<h2>আপনার নাম : " . $row['firstname'] . " " . $row['lastname'] . "</h2>";
        echo "<h2>আপনার ভোটিং স্ট্যাটাস : " . $row['status'] . " </h2>";
        echo "<h2><font color='#FF0000'>আপনি এখনও ভোট দেননি। দয়া করে ভোট দিন।</h2>";
    }
}
?>
</center>