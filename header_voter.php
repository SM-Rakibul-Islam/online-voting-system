<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <title>ভোটার ড্যাশবোর্ড</title>
    <script src="jscript/validation.js" type="text/javascript"></script>
    <link href="https://fonts.maateen.me/bensen/font.css" rel="stylesheet">
<!--Inline CSS-->
    <style>
    @import url('https://fonts.maateen.me/bensen/font.css');
    body {
        margin: 0;
        font-family: 'BenSen', sans-serif;
        font-weight: bold;
    }

    .topnav {
        margin-top: -5px;
        overflow: hidden;
        background-color: #FF6600;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 15px 50px;
        text-decoration: none;
        font-size: 15px;
    }

    .topnav a:hover {
        background-color: white;
        color: black;
    }

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 10px;
    }

    .button1:hover{
        background-color: #FF6600;
        color: white;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }

    .button1{
        background-color: #4CAF50;
        color: white;
    }

    table
    {
        border-collapse: collapse;
        width: 50%;
    }

    th, td
    {
        padding: 8px;
        text-align: center;
        border-bottom: 3px solid white;
        color: white;
    }

    tr:hover
    {
        background-color:black;
    }

    </style>
</head>

<body style="background-image: url('Images/BG.png');">
    <span>
        <img src="Images/banner.png" alt="Bangladesh Election Commission" height="90" width = "100%">
    </span>

    <div class="topnav">
            <a href="vote.php">ভোট দিন</a>
            <a href="result_view.php">ভোটের ফলাফল</a>
            <a href="profile.php">প্রোফাইল</a>
            <a href="change_pass.php">পাসওয়ার্ড পরিবর্তন</a>
            <a href="logout.php">লগ আউট</a>
    </div>
    <marquee behavior="" direction=""><h1>ভোট আপনার, অধিকার আপনার</h1></marquee>
</body>

</html>
