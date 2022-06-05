
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">

    <title>Library</title>
</head>

<body>
<img src="logo.png" width="100%" height="100%" />
    <div class="example">
    <ul class="nav">
        <li><a href="http://localhost/kyau5/index.php">Home</a></li>
        <li><a href="#">Admin</a>
            <ul class="subs">
                <li><a href="#">HTML / CSS</a></li>
                <li><a href="#">JS / jQuery</a></li>
                <li><a href="#">PHP</a></li>
                
            </ul>
        </li>
        <li><a href="#">Students</a>
            <ul class="subs">
                <li><a href="#">PHP</a></li>
                <li><a href="#">MySQL</a></li>
                
            </ul>
        </li>
        <li><a href="http://localhost/kyau5/library.php">Library</a></li>
        <li><a href="#">Back</a></li>
		<?php
		if(isset($_SESSION['login']))
		{
			echo"<li><a href='Logout.php'>Logout</a></li>";
			echo"<li><a href='profile_update.php'>Logged in by : ".$_SESSION['user_name']."</a></li>";
		}
		else
		{
			echo"<li><a href='Login.php'>Login</a></li>";
		}
		?>
    </ul>
    <div style="clear:both"></div>
</div>

<section class="content_section">
        <div class="headtext">
            <h1>
                Welcome to Library
            </h1>
            <button>Chose your Favorite Book</button>
        </div>
    </section>
    
    <section id="gallery">
        <div class="gallery-text">
            <h2>The heart of town.</h2>
            <p>Go anywhere. Learn anything. Read every day. </p>
        </div>
        <br><br>
        <div class="imgages">
        
        <div><a href="https://www.pdfdrive.com/computer-hacking-a-beginners-guide-to-computer-hacking-how-to-hack-internet-skills-hacking-e33417975.html"><img style="width: 300px; height: 210px fit-content;" src="images/img222.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/python-programming-python-programming-for-beginners-python-programming-for-intermediates-e180663309.html/"><img style="width: 300px; height: 210px fit-content;" src="images/img13.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/python-data-analytics-data-analysis-and-science-using-pandas-matplotlib-and-the-python-programming-language-e158003322.html"><img style="width: 300px; height: 210px fit-content;" src="images/img111.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/javascript-javascript-for-beginners-learn-javascript-programming-with-ease-in-half-the-time-everything-about-the-language-coding-programming-and-web-pages-you-need-to-know-e158299863.html"><img style="width: 300px; height: 210px fit-content;" src="images/img10.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/learn-python-in-one-day-and-learn-it-well-python-for-beginners-with-hands-on-project-the-only-book-you-need-to-start-coding-in-python-immediately-e183833259.html"><img style="width: 300px; height: 210px fit-content;" src="images/img444.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/learn-c-programming-c-programming-language-tutorialspoint-e158140781.html"><img style="width: 300px; height: 210px fit-content;" src="images/img666.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/learn-to-program-with-c-learn-to-program-using-the-popular-c-programming-language-e166650744.html"><img style="width: 300px; height: 210px fit-content;" src="images/img777.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/c-programming-the-ultimate-way-to-learn-the-fundamentals-of-the-c-language-e187584209.html"><img style="width: 300px; height: 210px fit-content;" src="images/img888.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/learn-python-in-one-day-and-learn-it-well-python-for-beginners-with-hands-on-project-the-only-book-you-need-to-start-coding-in-python-immediately-e183833259.html"><img style="width: 300px; height: 210px fit-content;" src="images/img444.jpg" alt=""></div></a>
            <div><a href="https://www.pdfdrive.com/ethical-hacking-and-penetration-testing-guide-e18776556.html"><img style="width: 300px; height: 210px fit-content;" src="images/img555.jpg" alt=""></div></a>

        </div>
        
    </section>
    
</body>

</html>