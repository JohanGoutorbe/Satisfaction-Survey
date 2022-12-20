<?php

include("config.php");

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$url = "https";
else
	$url = "http";
$url .= "://";
$url .= $_SERVER['HTTP_HOST'];
$sturl = $url;
$url .= $_SERVER['REQUEST_URI'];

$components = parse_url($url);
parse_str($components['query'], $results);
$interid = $results['inter'];
$techname = $results['tech'];
$interdt = $results['date'];

if (isset($_POST['choice1'])==null && isset($_POST['choice2'])==null) { ?>
	<div class="block">
		<img src="x.png" class="img">
		<h1 class="h1bis">Veuillez remplir correctement le formulaire</h1>
		<a href="https://www.officecenter.fr/qualite/index.php?inter=<?php echo $interid; ?>&tech=<?php echo $techname; ?>&date=<?php echo $interdt; ?>"><button class="btn">Retour au formulaire</button></a>
	</div>
	<?php $db=null;
	die();
}elseif (isset($_POST['choice1'])==null) { ?>
	<div class="block">
		<img src="x.png" class="img">
		<h1 class="h1bis">Veuillez remplir correctement le formulaire</h1>
		<a href="https://www.officecenter.fr/qualite/index.php?inter=<?php echo $interid; ?>&tech=<?php echo $techname; ?>&date=<?php echo $interdt; ?>"><button class="btn">Retour au formulaire</button></a>
	</div>
	<?php $db=null;
	die();
}elseif (isset($_POST['choice2'])==null) { ?>
	<div class="block">
		<img src="x.png" class="img">
		<h1 class="h1bis">Veuillez remplir correctement le formulaire</h1>
		<a href="https://www.officecenter.fr/qualite/index.php?inter=<?php echo $interid; ?>&tech=<?php echo $techname; ?>&date=<?php echo $interdt; ?>"><button class="btn">Retour au formulaire</button></a>
	</div>
	<?php $db=null;
	die();
}

$reqinterid = $db->query('SELECT * FROM customersatisfaction WHERE inter_id = "'.$interid.'"');
$interidexist = $reqinterid->rowCount();

$choice1 = (int)$_POST['choice1'];

if (!empty($_POST['comment1'])) {
	$comment1 = htmlspecialchars($_POST['comment1']);

}else {
	$comment1 = "";
}

$choice2 = (int)$_POST['choice2'];

if (!empty($_POST['comment2'])) {
	$comment2 = htmlspecialchars($_POST['comment2']);
}else {
	$comment2 = "";
}

$dt = new \DateTime();
$newdt = $dt->format('d-m-Y');

if ($interidexist == 0) {
	$sql = $db->query('INSERT INTO customersatisfaction (inter_id, tech_name, answer1, answer2, comment1, comment2, survey_date, inter_date) VALUES ("'.$interid.'", "'.$techname.'", '.$choice1.', '.$choice2.', "'.$comment1.'", "'.$comment2.'", "'.$newdt.'", "'.$interdt.'")');
} else { 
	header('location: https://www.officecenter.fr/qualite/error.php');
	die();
}

sleep(0.5);
header('location: https://www.officecenter.fr/qualite/merci.php');