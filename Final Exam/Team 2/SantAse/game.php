<!DOCTYPE html>
<html>
	<head>
		<title>SantAse</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script type="text/javascript" src="JS/jquery.js"></script>
		<script type="text/javascript" src="JS/main.js"></script>
		<script type="text/javascript" src="JS/game.js"></script>

		<link rel="shortcut icon" type="image/png" href="images/favicon/favicon.ico">

		<link rel="stylesheet" type="text/css" href="CSS/reset.css">
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<link rel="stylesheet" type="text/css" href="CSS/game.css">
	</head>
	<body>
		<nav>
			<div class="middleNav">
				<div class="nav">
					<a href="index.php" class="disable-select">Home</a>
					<a href="rules.php" class="disable-select">Rules</a>
					<a href="contacts.php" class="disable-select">Contact</a>
				</div>
			</div>
		</nav>

		<div class="chatAndRoom">
			<div class="chat">
				<h2 class="disable-select">Chat</h2>

			 	<div class="messages disable-select">
				 	<div class="discussion disable-select"></div>
				 	<div class="sender disable-select">
					    <textarea placeholder="Type message here..."></textarea>
					   	<button id="send" class="disable-select">Send</button>
				   	</div>
	   		 	</div>
			</div>

			<div class="room">
				<h2 class="disable-select">Online Players</h2>

			 	<div class="container disable-select">
				 	<div class="list disable-select"></div>
				 	<div class="challenger disable-select">
						<button id="challenge" class="disable-select">Challenge Player</button>
					</div>
	   		 	</div>
			</div>
   		</div>
	</body>
</html>