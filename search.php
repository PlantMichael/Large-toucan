<!--
	the discount situation is pretty nasty. need filtering and displaying of discounts
	need to make sure links are happy little campers everywhere on earth
	daily deals needs to get its shit together but again the deals situation is fucked
	dont talk to me about the next
	sql injection prevention
-->

<html lang="en-US" class=" ilpng idc0_350"><head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="icon" href="squid.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
	<title>Large Toucan</title>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="true"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"></head>
<body>
<main>
<?php echo $html = file_get_contents('header.html')?>
    <div id="searchWrapper">
		<form>
		<div id="filters">
			<div><h3>Filter by:</h3>
				<div id="activeFilters">
					<div class="activeFilters"><div>Car<img src="img/x.svg"></div></div>
				</div>
			</div>
			<hr>
			<div><h4>Department</h4>
				<div>Produce</div>
				<div>Dairy</div>
				<div>Meat</div>
				<div>Bakery</div>
				<div>Packaged Goods</div>
				<div>Home Goods</div>
			</div>
			<hr>
			<div><h4>Price Range</h4>
				<div>< $5</div>
				<div>$5 - $10</div>
				<div>$10 - $25</div>
				<div>$25 - $50</div>
				<div>$50 <</div>
				<div id="filterPriceContainer"><form action="/search.php" id="filterPrice" method="get">
					From<input type="text" name="min" placeholder="$0"></input>
					To <input type="text" name="max" placeholder="$100"></input>
					<input type="submit" value="Go" id="filterPriceSubmit"></input>
				</form></div>
			</div>
			<hr>
			<div><h4>In Stock</h4>
				<div>In Stock</div>
				<div>Limited</div>
				<div>Out of Stock</div>
			</div>
			<hr>
			<div><h4>Discount</h4>
				<div>dude idk what we're putting in here</div>

			</div>
		</div>
		</form>
		<div id="resultContainer">
			<div id ="searchHeader">
				Showing results for "Bees":
			</div>
			<div id="results">
				<div class="resultBox">
					<p class="resultName">PEANUT</p>
					<p class="resultLocation">Nuts | Aisle A4</p>
					<p class="resultPrice">$2.00 <s>$1.99</s></p>
					<hr>
					<div class="resultStock"><p>In Stock</p><p class="resultLimited">Only 1 left!</p></div>
				</div>
				<div class="resultBox">
					<p class="resultName">jeff probst</p>
					<p class="resultLocation">I Hate You | Aisle H311</p>
					<p class="resultPrice">$0.00</p>
					<hr>
					<div class="resultStock"><p>Out of Stock!</p></div>
				</div>
				<div class="resultBox">
					<p class="resultName">PEANUT 2</p>
					<p class="resultLocation">Packaged | Aisle A4</p>
					<p class="resultPrice">$400.00 <s>$300.00</s></p>
					<hr>
					<div class="resultStock"><p>In Stock</p></div>
				</div>
				<div class="resultBox">
					<p class="resultName">dish soap</p>
					<p class="resultLocation">Nuts | Aisle Q9</p>
					<p class="resultPrice">$3.29</p>
					<hr>
					<div class="resultStock"><p>In Stock</p><p class="resultLimited">Only 3200 left!</p></div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $html = file_get_contents('footer.html')?>
</main>


</body>

<script src="search.js">
</html>