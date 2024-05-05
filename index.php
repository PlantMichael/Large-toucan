<!--TODO:
context nav to signup/signin when you mess w the nest, see your page, etc
if we really feel like getting crazy get a pfp thing up and running. db extension shouldnt be too hard
depts should just return search with their department. if we have time we can make them custom pages but we wont so
our story page. idk i'll make some stuff up
make the search results page good god what is wrong with you
link all the bars + buttons to their actual things
-->

<!DOCTYPE html>

<?php
include '../../config/config.inc';
?>

<html lang="en-US">
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="icon" href="squid.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<title>Large Toucan</title>
</head>
<body>
<main>
<?php echo $html = file_get_contents('header.html')?>
	<div id="deptNav">
		<div><a href="catalog.php">Produce</a></div>
		<div><a href="catalog.php">Dairy</a></div>
		<div><a href="catalog.php">Meat</a></div>
		<div><a href="catalog.php">Bakery</a></div>
		<div><a href="catalog.php">Packaged Goods</a></div>
		<div><a href="catalog.php">Home Goods</a></div>
	</div>
	<div id="splash">
	<div id="splashGradient">
		<div id="splashContent">
			<p>We're not just Food Guys.<br>We're Family Guys.</p>
			<a href="/catalog.php">Explore ➤</a>
		</div>
		</div>
	</div>
	<div id="deals">
		<div id="dailyDealsHeader">
			<div>Daily Deals</div>
			<div id="dealsViewAll"><a href="deals.php">View all ➤</a></div>
		</div>
		<hr id ="dealsSeperator">
		<div id="dealsContainer">


		<?php
		// Create connection

		$conn = new mysqli($servername, $username, $password, $dbname);
		$x = 1;
		// Check connection
		if ($conn->connect_error or $x = 1) { //if there is a connection error so be it. congrats the only deal is peanut
									//this is terrible for a grocery store, but for a fake project, ensures there's SOMETHING
			for ($i = 0; $i < 10; $i++) {
				echo "<div class=\"dealBox\">
				<a href=\"catalog.php\">
				<div class=\"dealPic\"><img src=\"img/peanut.jpg\"></div>
				<hr>
				<div class=\"dealItemName\">peanuts</div>
				<div class=\"dealPrice\">$1.99 <s>$2.00</s></div>
				</a>
				</div>";
			}
		}
		else {

		}

		$conn->close();
		?>


			<!--this is your template for a deal. deals ought to be loaded w php. flexbox handles it,
				so in a just world you should be able to put in one million peanuts if you really wanna.
			<div class="dealBox">
				<a href="catalog.php">
				<div class="dealPic"><img src="img/peanut.jpg"></div>
				<hr>
				<div class="dealItemName">peanuts</div>
				<div class="dealPrice">$1.99 <s>$2.00</s></div>
				</a>
			</div>
			end of template-->
		</div>
	</div>
	<?php echo $html = file_get_contents('footer.html')?>
</main>
</body>
</html>

<!--
Resources:
	google fonts: https://fonts.google.com/
	fontawesome: https://fontawesome.com/
	stupid bird im using as a pfp: https://unsplash.com/@andreusphoto/
	filter to convert svg colors: https://codepen.io/sosuke/pen/Pjoqqp/
-->