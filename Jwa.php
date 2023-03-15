<!DOCTYPE html>
<html>
<head>
	<title>Lottery Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Lottery Website</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Welcome to the Lottery Website</h2>
		<p>Enter your name below for a chance to win:</p>
		<form>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name"><br><br>
			<input type="submit" value="Submit">
		</form>
		<div id="tickets-sold">
			<h3>Tickets Sold:</h3>
			<p id="ticket-number"></p>
			<h3>Prize:</h3>
			<p id="prize"></p>
		</div>
	</main>
	<footer>
		<p>&copy; 2023 Lottery Website</p>
	</footer>
	<script src="script.js"></script>
</body>
</html>
