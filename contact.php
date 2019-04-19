<?php 
	function generatePhoneNumbers($amount = 5) {
		$result = [];
		for ($i = 0; $i < $amount; $i++) {
			$result[] = "+370 6" . rand(1000000, 9999999);
	    }
	    return $result;
	}
	$phones = generatePhoneNumbers();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Contact The Best</h1>
		<?php include 'nav.php'; ?>
	</header>
	<main>
		<ul class="members">
			<?php
				foreach ($phones as $phone) {
					echo "<li>{$phone}</li>";
				}
			?>
		</ul>
	</main>
	<footer>
		&copy; 2019 The Best Team
	</footer>
</body>
</html>