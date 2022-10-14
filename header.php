<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CryptoWise Investment</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
	<link href="css/fontawesome-free-5.15.4-web" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="tradingview-widget-container" style="width: 100%; height: 74px;">
		<iframe scrolling="no" allowtransparency="true" style="box-sizing: border-box; height: 74px; width: 100%;" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22description%22%3A%22Amazon%22%2C%22proName%22%3A%22NASDAQ%3AAMZN%22%7D%2C%7B%22description%22%3A%22Facebook%22%2C%22proName%22%3A%22NASDAQ%3AFB%22%7D%2C%7B%22description%22%3A%22Alphabet%22%2C%22proName%22%3A%22NASDAQ%3AGOOGL%22%7D%2C%7B%22description%22%3A%22Apple%22%2C%22proName%22%3A%22NASDAQ%3AAAPL%22%7D%2C%7B%22description%22%3A%22Mircosoft%22%2C%22proName%22%3A%22NASDAQ%3AMSFT%22%7D%2C%7B%22description%22%3A%22BTC%2FUSD%22%2C%22proName%22%3A%22COINBASE%3ABTCUSD%22%7D%2C%7B%22description%22%3A%22%20%5CtAlibaba%20Group%20Holding%22%2C%22proName%22%3A%22%20%5CtNYSE%3ABABA%22%7D%2C%7B%22description%22%3A%22%20%5CtBerkshire%20Hathaway%22%2C%22proName%22%3A%22%20%5CtNYSE%3ABRK.B%22%7D%2C%7B%22description%22%3A%22%20%5CtJPMorgan%20Chase%22%2C%22proName%22%3A%22%20%5CtNYSE%3AJPM%22%7D%2C%7B%22description%22%3A%22ETH%2FUSD%22%2C%22proName%22%3A%22KRAKEN%3AETHUSD%22%7D%2C%7B%22description%22%3A%22%20%5CtJohnson%20%26%20Johnson%22%2C%22proName%22%3A%22%20%5CtNYSE%3AJNJ%22%7D%2C%7B%22description%22%3A%22%20%5CtExxon%20Mobil%22%2C%22proName%22%3A%22%20%5CtNYSE%3AXOM%22%7D%2C%7B%22description%22%3A%22%20%5CtRoyal%20Dutch%20Shell%22%2C%22proName%22%3A%22%20%5CtNYSE%3ARDS.A%22%7D%2C%7B%22description%22%3A%22%20%5CtBank%20of%20America%22%2C%22proName%22%3A%22%20%5CtNYSE%3ABAC%22%7D%2C%7B%22description%22%3A%22XRP%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3AXRPUSD%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22compact%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A74%2C%22utm_source%22%3A%22orientfinancetrusts.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D" frameborder="0">
			
		</iframe>
	</div>
	<section class="header">
	<nav>
    	<ul class="menu">
        	<li class="logo"><a href="index.php"><img src="assets/crypto0.svg" alt="Home"></a></li>
        	<li class="item"><a href="index.php">Home</a></li>
        	<li class="item"><a href="#">Training</a></li>
        	<li class="item has-submenu">
            	<a tabindex="0">Bitcoin</a>
            	<ul class="submenu">
                	<li class="subitem"><a href="#">Buy Crypto</a></li>
                	<li class="subitem"><a href="#">Start Mining</a></li>
                	<li class="subitem"><a href="#">Lending</a></li>
                	<li class="subitem"><a href="#">Exchange</a></li>
            </ul>
        </li>
        <li class="item has-submenu">
            <a tabindex="0">Invest</a>
            <ul class="submenu">
                <li class="subitem"><a href="#">Investment Focus</a></li>
                <li class="subitem"><a href="#">Investors</a></li>
                <li class="subitem"><a href="#">Pricing</a></li>
                <li class="subitem"><a href="#">Premium</a>
            </ul>
        </li>
        <li class="item has-submenu">
            <a tabindex="0">Company</a>
            <ul class="submenu">
                <li class="subitem"><a href="#">About Us</a></li>
                <li class="subitem"><a href="#">Mission</a></li>
                <li class="subitem"><a href="#">Vision</a></li>
                <li class="subitem"><a href="#">Our Team</a>
                <li class="subitem"><a href="#">Contact</a>
            </ul>
        </li>
        <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='Dashboard.php'>Dashboard</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a href='login.php'>Log in</a></li>";
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                }
        ?>
        <!--<li class="item button"><a href="login.php">Log In</a></li>
        <li class="item button secondary"><a href="signup.php">Sign Up</a></li>-->
        <li class="toggle"><a href="#"><i class="fa fa-bars"></i></a></li>
    </ul>
</nav>
<div id="google_translate_element"></div>
<?php
if (isset($_SESSION["useruid"])) {
echo "<p> Welcome ".$_SESSION["useruid"]. "</P>";
}
?>
<div class="textbox">
    <div>
	<h2>Start Bitcoin Trading with Us <br><span>CRYPTO WISE INVESTMENT</span></h2>
	<h4>With crypto wise investment, <br> buying, selling and trading Bitcion is earsier, <br>Join us on crypto trading and investing.
	</h4>
	<a href="#">Learn More</a>
    </div>
</div>
</section>