<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("header.php"); ?>


<html>
	<head>
		<title>PHP Output</title>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
	</head>
	<div id="main">
		<body>
			<div id="navigation">
			</div>
			<div id="page">
				<div id="box">
					<div id="textbox">
						<p>
							<?php 

							$query = ("SELECT data FROM content WHERE id = 1");
							$result = $connection->query($query);					
							if (!$result) {
								die("Database query failed.");
							} 

							while($row = $result->fetch_row()) {
								printf("%s \n", $row[0]);
							}
														
							if (isset($_POST['getnewcard'])) {
								$query = ("SELECT data FROM content WHERE id = 3");
								$result = $connection->query($query);					
								if (!$result) {
									die("Database query failed.");
								} 

								while($row = $result->fetch_row()) {
									printf("%s \n", $row[0]);
								}
							}

							?>
						</p>
					</div>
					<form action="welcome.html.php" method="post">
						<input type="submit" name="getnewcard" value="New Card" />
					</form>
				</div>
			</div>
		</body>
	</div>
</html>

<?php include("footer.php"); ?>
