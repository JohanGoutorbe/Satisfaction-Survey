<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="favicon.png">
	<title>Enquête de satisfaction | Office Center</title>
	<?php
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
		$url = "https";
	else
		$url = "http";
	$url .= "://";
	$url .= $_SERVER['HTTP_HOST'];
	$url .= $_SERVER['REQUEST_URI'];

	$components = parse_url($url);
	parse_str($components['query'], $results);
	$inter = $results['inter'];
	$tech = $results['tech'];
	$date = $results['date'];

	//http://localhost/chantier_application/?inter=120185&tech=charles&date=2022-11-22
	?>
</head>
<body>
	<div class="container">
		<div class="form">
			<h1 class="h1">Veuillez évaluer le service d'Office Center</h1><br>
			<p>Nous mettons tout en œuvre pour améliorer Office Center.<br>Faites-nous part de votre expérience avec cette page.</p><br>
			<form method="post" action="send.php/?inter=<?php echo $inter; ?>&tech=<?php echo $tech; ?>&date=<?php echo $date; ?>">
				<div class="form-group">
					<div class="choice1">
						<p class="question">Comment évaluez-vous la qualité de l'intervention ?</p>
						<?php $var1_1 = 1; $var1_2 = 2; $var1_3 = 3; $var1_4 = 4; $var1_5 = 5; ?>
						<div class="input-group1">
							<div class="input">
								<input type="radio" name="choice1" id="rateChoice0" value="<?php echo $var1_1; ?>">
								<label for="rateChoice0">Déplorable !</label>
							</div>
							<div class="input">
								<input type="radio" name="choice1" id="rateChoice1" value="<?php echo $var1_2; ?>">
								<label for="rateChoice1">Mauvais</label>
							</div>
							<div class="input">
								<input type="radio" name="choice1" id="rateChoice2" value="<?php echo $var1_3; ?>">
								<label for="rateChoice2">Moyen</label>
							</div>
							<div class="input">
								<input type="radio" name="choice1" id="rateChoice3" value="<?php echo $var1_4; ?>">
								<label for="rateChoice3">Satisfaisant</label>
							</div>
							<div class="input">
								<input type="radio" name="choice1" id="rateChoice4" value="<?php echo $var1_5; ?>">
								<label for="rateChoice4">Excellent !</label>
							</div>
						</div><br>
							<textarea type="text" name="comment1" class="comment1" autocomplete="off" placeholder="Développer votre choix ! (facultatif)" value="0"></textarea><br/>
					</div><br><br>

					<div class="choice2">
						<p class="question">Comment évaluez-vous la prestation du technicien ?</p>
						<?php $var2_1 = 1; $var2_2 = 2; $var2_3 = 3; $var2_4 = 4; $var2_5 = 5; ?>
						<div class="input-group2">
							<div class="input">
								<input type="radio" name="choice2" id="rateChoice5" value="<?php echo $var2_1; ?>">
								<label for="rateChoice5">Déplorable !</label>
							</div>
							<div class="input">
								<input type="radio" name="choice2" id="rateChoice6" value="<?php echo $var2_2; ?>">
								<label for="rateChoice6">Mauvais</label>
							</div>
							<div class="input">
								<input type="radio" name="choice2" id="rateChoice7" value="<?php echo $var2_3; ?>">
								<label for="rateChoice7">Moyen</label>
							</div>
							<div class="input">
								<input type="radio" name="choice2" id="rateChoice8" value="<?php echo $var2_4; ?>">
								<label for="rateChoice8">Satisfaisant</label>
							</div>
							<div class="input">
								<input type="radio" name="choice2" id="rateChoice9" value="<?php echo $var2_5; ?>">
								<label for="rateChoice9">Excellent !</label>
							</div>
						</div><br>
						<textarea type="text" name="comment2" class="comment2" autocomplete="off" placeholder="Développer votre choix ! (facultatif)" value="0"></textarea>
					</div><br><br>
					<div class="button">
						<button class="btn" id="btn" >Envoyer la réponse</button>
					</div>
				</div>

			</form>
			<br><br><p>Si vous avez besoin d'un support technique, veuillez <a href="https://www.officecenter.fr/#intervention" target="_blank">nous contacter</a>.</p>
		</div>
	</div>
	<?php
	$interid = '<script type="text/javascript">document.write(interid);</script>';
	$techname = '<script type="text/javascript">document.write(techname);</script>';
	$interdt = '<script type="text/javascript">document.write(interdt);</script>';
	?>
</body>
</html>