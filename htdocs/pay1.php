<?php
	$dbhost = "182.50.133.51";
	$dbuser = "studDB18A";
	$dbpass = "stud18aDB1!";
	$dbname= "studDB18A";
	
		$connection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
		
		if(mysqli_connect_errno()){
			die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ") "
			);
		}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>EasyBuy</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="screen" href="includes/style.css">
        <script src="includes/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="includes/style.css">
    </head>

    <body>
        <aside class="side-menu">
            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i><span class="menu-link">HOME</span></a></li>
                <li><a href="resize.html"><i class="fas fa-tshirt"></i><span class="menu-link">RESIZE</span></a></li>
                <li><a href="order.html"><i class="fas fa-truck"></i><span class="menu-link">ORDER</span></a></li>
                <li><a href="pay1.php" class="active"><i class="far fa-credit-card"></i><span class="menu-link">PAY</span></a></li>
                <li><a class="menu_link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </aside>
        <div class="header">
            <span class="namePage">Pay</span>
            <div class="user-area">
                <ul class="user-menu">
                    <li><a class="menu_link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                    <li>|</li>
                    <li><a class="menu_link" href="#"><span class="user-name">Guy Chriqui</span></a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <form action="payment.php" method="get=">
                <h2>
                    <div id="barco">
                        <p class="inp"><label for="barc"> <span class="text-input">Please enter the barcode number:</span><br>
                         <select name="barcode" type="text">
<option value="1234">1234 - Polo Shirt</option>
<option value="23456">23456 - Yellow Shirt</option>
<option value="34567">34567 - Blue Shirt</option>
<option value="45678">45678 - Green Shirt</option>
<option value="22222">22222 - Shirt Jeans</option>
<option value="33333">33333 - Black Jacket</option>
<option value="55555">55555 - White Jacket</option>
<option value="66666">66666 - Blue Scarf</option>
<option value="77777">77777 - Black Shirt</option>
<option value="56567">56567 - Black Belt</option>
                    </select></label></p>
                        <input type="submit" value="Search">

                    </div>
                </h2>
            </form>
        </div>

    </body>

    </html>
