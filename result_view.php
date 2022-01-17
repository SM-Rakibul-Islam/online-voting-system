<?php
if (!isset($_SESSION)) {
    session_start();
}
include "auth.php";
include "header_voter.php";
?>

<center>
	<h1 style="color: black"> এখন পর্যন্ত ভোটের ফলাফল </h1>
</center>

<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM vote_results');

if (mysqli_num_rows($member) == 0) {
    echo '<font color="red"> কোন ফলাফল পাওয়া যায়নি! </font>';
} else {
    echo '<center><table><tr bgcolor="#FF6600">
	<td width="90px"> অনুক্রম </td>
	<td width="150px"> দলের নাম </td>
	<td width="150px"> প্রতীক </td>
	<td width="90px"> ভোট সংখ্যা </td>
	</tr>';

    $count = 0;
    $symbol = array("নৌকা", "ধানের শীষ", "লাঙ্গল", "কাস্তে", "হাতুড়ি");
    $name = array("আওয়ামীলীগ", "বিএনপি", "জাতীয় পার্টি", "সমাজতান্ত্রিক দল", "ওয়ার্কারস পার্টি");
    $i = 0;
    while ($mb = mysqli_fetch_object($member)) {
        $id = $mb->serial;
        $vote = $mb->votecount;
        $count = $count + $vote;
        echo '<tr bgcolor="#4CAF50">';
        echo '<td>' . $id . '</td>';
        echo '<td>' . $name[$i] . '</td>';
        echo '<td>' . $symbol[$i] . '</td>';
        echo '<td>' . $vote . '</td>';
        echo "</tr>";
        $i++;
    }

    echo '</table></center>';
}
?>

<center>
	<br>
	<h1 style="color: black"> এখন পর্যন্ত মোট প্রদত্ত ভোটের সংখ্যা <?php echo $count; ?> টি</h1>
</center>