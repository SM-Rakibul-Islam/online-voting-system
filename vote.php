<?php
if (!isset($_SESSION)) {
    session_start();
}
include "auth.php";
include "header_voter.php";
?>

<br>

<center>
    <h1> স্বাগতম </h1>
    <h2> আপনার জাতীয় পরিচয়পত্র নং : <?php echo $_SESSION['SESS_NAME']; ?></h2>
    <h3> নিচের অপশন থেকে আপনার পছন্দের প্রার্থীকে বাছাই করে সংশ্লিষ্ট প্রতীকে ভোট দিন </h3>
    

    <h1 style="color: #FF6600"> আপনার পছন্দের প্রতীক নির্বাচন করুন </h1>
</center>



<form action="submit_vote.php" name="vote" method="post" id="myform">
    <center>
        <font size='10'> 
            <input type="radio" name="cast" value="Boat" style = " margin-left: 3.6rem"> 
            নৌকা
            <img src="Images/boat.jpeg" alt="Bangladesh Election Commission" height="50"> 
            <br>
            <input type="radio" name="cast" value="Paddy" style = " margin-left: 6.2rem"> 
            ধানের শীষ
            <img src="Images/BNP.png" alt="Bangladesh Election Commission" height="50"> 
            <br>
            <input type="radio" name="cast" value="Plough" style = " margin-left: 1.5rem"> 
            লাঙ্গল
            <img src="Images/NP.jpg" alt="Bangladesh Election Commission" height="50"> 
            <br>
            <input type="radio" name="cast" value="Sickle"> 
            কাস্তে
            <img src="Images/Kaste.png" alt="Bangladesh Election Commission" height="50"> 
            <br>
            <input type="radio" name="cast" value="Hammer" style = " margin-left:.8rem"> 
            হাতুড়ি
            <img src="Images/Haturi.png" alt="Bangladesh Election Commission" height="50"> 
            <br>
        </font>
    </center><br>
    
    <?php global $msg;
    echo $msg; ?>
    <?php global $error;
    echo $error; ?>

    <center>
        <input class="button button1" type="submit" value="ভোট দিন" name="submit" />
    </center>
</form>