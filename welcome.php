<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Atlantic Shop</title>

	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<header>
		<h1>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Atlantic Shop is currently under development. Your password is 256-bit securely encrypted. If you have any problem please contact an Administrator or crete a Support Ticket on the Menu.</h1>
	</header>
	<main>
		<nav class="menu">
      <div class="menu__item" id="home">
        <a href="#home" class="item__name">Home</a>
        </div>
			<div class="menu__item" id="account">
				<a href="#account" class="item__name">User Panel</a>
				<div class="item__sub-menu">
					<a href="#" class="sub-menu__item">Account Information</a>
					<a href="#" class="sub-menu__item">Deposit Money</a>
					<a href="#" class="sub-menu__item">My Purchases</a>
          <a href="#" class="sub-menu__item">Invite Codes</a>
          <a href="#" class="sub-menu__item">Messages</a>
				</div>
			</div>
			</div>
			<div class="menu__item" id="buy">
				<a href="#buy" class="item__name">Buy</a>
				<div class="item__sub-menu">
					<a href="#" class="sub-menu__item">Cards</a>
					<a href="#" class="sub-menu__item">Tools</a>
          <a href="#" class="sub-menu__item">Documents</a>
				</div>
			</div>
      <div class="menu__item" id="selling">
        <a href="#selling" class="item__name">Selling Request</a>
        </div>
        <div class="menu__item" id="rules">
          <a href="#rules" class="item__name">Rules</a>
          <div class="menu__item" id="support">
            <a href="#support" class="item__name">Support</a>
            <div class="menu__item" id="logout">
              <a href="#logout" class="item__name">Logout</a>
              </div>
            </div>
          </div>
			</div>
		</nav>
		<section class="content">
			<h2>News</h2>
			<p>
			 Tools data uploaded by Robot on: 09/10/19
			</p>
			<p>
				Documents data uploaded by Robot on: 09/10/19
			</p>
		</section>
	</main>
</body>
</html>
