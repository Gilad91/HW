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
if ($_GET['barcode'] == 12345) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  PoloShirt = PoloShirt + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 23456) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  YellowShirt = YellowShirt + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 34567) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  BlueShirt = BlueShirt + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 45678) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  GreenShirt = GreenShirt + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 22222) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  ShortJeans = ShortJeans + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 33333) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  BlackJacket = BlackJacket + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 55555) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  WhiteJacket = WhiteJacket + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 66666) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  BlueScarf = BlueScarf + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 77777) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  BlackShirt = BlackShirt + 1 WHERE ID =  1 ";}
if ($_GET['barcode'] == 56567) {
     $sql = "UPDATE  `studDB18A`.`tb_221_cart` SET  BlackBelt = BlackBelt + 1 WHERE ID =  1 ";
}

 if ($connection->query($sql) === TRUE) { "Record updated successfully"; } else { echo "Error updating record: " . $connection->error; } 

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>EasyBuy</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="screen" href="includes/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="includes/style.css">
        <script src="includes/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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
            <h2>
                <div id="cart">
                    <p class="crt"> Your item has been added to the cart </p>
                    <div onclick="addAnotherItem()" id="items">
                        <section id="plus">
                            <i id="plus-icon" class="fas fa-plus-circle"></i>
                        </section>
                        <section id="itm">
                            <span> Add <br> </span>
                            <span> another<br> </span>
                            <span> item </span>
                        </section>

                    </div>
                    <div onclick="goToPayment()" id="items2">
                        <section id="itm2">
                            <span> Go to <br> </span>
                            <span> Payment </span>
                        </section>


                    </div>
                </div>
            </h2>
        </div>


    </body>

    </html>
