<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello World!"; ?></h1>
				<p class='description'>Thanks for creating a <span class="blue">PHP Starter Application</span>.</p> 
				<?php
				$hello="Hello World?!";
				print ($hello);
				?>
			</td>
		</tr>
	</table>
</body>
</html>
