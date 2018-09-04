<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Experiments</title>
		
		<style>
			body {
				background-color: linen;
			}
			
			.left {
				width: 25%;
				background-color: green;
				float: left;
				height: 120px;
			}
			
			.center {
				text-align: center;
				color: red;
				background-color: blue;
				width: 75%;
				float: right;
				line-height: 120px;
				height: 120px;
				overflow: auto;
			}
			
			#main {
				float: center;
				text-align: center;
				width: 80%;
				line-height: 14px;
				height: 200px;
				background-color: yellow;
				color: blue;
				margin: auto;
				overflow: auto;
			}
		</style>
	</head>
	<body>
		<div>
			<div class="left">
				<h1>Left</h1>
			</div>
			<div class="center">
				<?php
					echo "The page is working.";
				?>
			</div>
		</div>
		
		<div id="main">
			<div>
				<?php
					echo "This is the main body of the page";
					echo "<br>";
					echo "This is another line of text";
				?>
			</div>
		</div>
	</body>
</html>
