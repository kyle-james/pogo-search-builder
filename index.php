<?php
$string = "";
$doToggle = "";
$doNotToggle = "";
$doOperator = "";
$doNotOperator = "";


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//Basic Logic
	$doToggle = $_POST['doToggle'];
	
	if($doToggle == "or")
	{
		$doOperator = ",";
	}
	if($doToggle == "and")
	{
		$doOperator = "|";
	}
	
	
	$doNotToggle = $_POST['doNotToggle'];
	
	if($doNotToggle == "or")
	{
		$doNotOperator = ",";
	}
	if($doNotToggle == "and")
	{
		$doNotOperator = "|";
	}
	
	/*-----------------------------------------------------------------
	LOOKING TO SHORTEN/CLEAN UP THIS SECTION. ANY FEEDBACK APPRECIATED.
	-----------------------------------------------------------------*/
	//These are for 'doNot', the categories that don't want to be seen.
	//Region
	if(isset($_POST['doNotKanto']))
	{
		$string .= "!kanto" . $doNotOperator;
	}
	if(isset($_POST['doNotJohto']))
	{
		$string .= "!johto" . $doNotOperator;
	}
	if(isset($_POST['doNotHoenn']))
	{
		$string .= "!hoenn" . $doNotOperator;
	}
	if(isset($_POST['doNotSinnoh']))
	{
		$string .= "!sinnoh" . $doNotOperator;
	}
	if(isset($_POST['doNotUnova']))
	{
		$string .= "!unova" . $doNotOperator;
	}
	//Tier
	if(isset($_POST['doNotMythical']))
	{
		$string .= "!mythical" . $doNotOperator;
	}
	if(isset($_POST['doNotLegendary']))
	{
		$string .= "!legendary" . $doNotOperator;
	}
	//Special
	if(isset($_POST['doNotShiny']))
	{
		$string .= "!shiny" . $doNotOperator;
	}
	if(isset($_POST['doNotLucky']))
	{
		$string .= "!lucky" . $doNotOperator;
	}
	if(isset($_POST['doNotCostume']))
	{
		$string .= "!costume" . $doNotOperator;
	}
	//Evolve
	if(isset($_POST['doNotEvolve']))
	{
		$string .= "!evolve" . $doNotOperator;
	}
	if(isset($_POST['doNotItem']))
	{
		$string .= "!item" . $doNotOperator;
	}
	//IV
	if(isset($_POST['doNot0star']))
	{
		$string .= "!0*" . $doNotOperator;
	}
	if(isset($_POST['doNot1star']))
	{
		$string .= "!1*" . $doNotOperator;
	}
	if(isset($_POST['doNot2star']))
	{
		$string .= "!2*" . $doNotOperator;
	}
	if(isset($_POST['doNot3star']))
	{
		$string .= "!3*" . $doNotOperator;
	}
	if(isset($_POST['doNot4star']))
	{
		$string .= "!4*" . $doNotOperator;
	}
	//Misc.
	if(isset($_POST['doNotAlola']))
	{
		$string .= "!alola" . $doNotOperator;
	}
	if(isset($_POST['doNotDefender']))
	{
		$string .= "!defender" . $doNotOperator;
	}
	if(isset($_POST['doNotShadow']))
	{
		$string .= "!shadow" . $doNotOperator;
	}
	if(isset($_POST['doNotPurified']))
	{
		$string .= "!purified" . $doNotOperator;
	}
	if(isset($_POST['doNotTraded']))
	{
		$string .= "!traded" . $doNotOperator;
	}
	if(isset($_POST['doNotHatched']))
	{
		$string .= "!hatched" . $doNotOperator;
	}
	if(isset($_POST['doNotEggsonly']))
	{
		$string .= "!eggsonly" . $doNotOperator;
	}
	//These are for 'do', the categories that do want to be seen.
	//Region
	if(isset($_POST['doKanto']))
	{
		$string .= "kanto" . $doOperator;
	}
	if(isset($_POST['doJohto']))
	{
		$string .= "johto" . $doOperator;
	}
	if(isset($_POST['doHoenn']))
	{
		$string .= "hoenn" . $doOperator;
	}
	if(isset($_POST['doSinnoh']))
	{
		$string .= "sinnoh" . $doOperator;
	}
	if(isset($_POST['doUnova']))
	{
		$string .= "unova" . $doOperator;
	}
	//Tier
	if(isset($_POST['doMythical']))
	{
		$string .= "mythical" . $doOperator;
	}
	if(isset($_POST['doLegendary']))
	{
		$string .= "legendary" . $doOperator;
	}
	//Special
	if(isset($_POST['doShiny']))
	{
		$string .= "shiny" . $doOperator;
	}
	if(isset($_POST['doLucky']))
	{
		$string .= "lucky" . $doOperator;
	}
	if(isset($_POST['doCostume']))
	{
		$string .= "costume" . $doOperator;
	}
	//Evolve
	if(isset($_POST['doEvolve']))
	{
		$string .= "evolve" . $doOperator;
	}
	if(isset($_POST['doItem']))
	{
		$string .= "item" . $doOperator;
	}
	//IV
	if(isset($_POST['do0star']))
	{
		$string .= "0*" . $doOperator;
	}
	if(isset($_POST['do1star']))
	{
		$string .= "1*" . $doOperator;
	}
	if(isset($_POST['do2star']))
	{
		$string .= "2*" . $doOperator;
	}
	if(isset($_POST['do3star']))
	{
		$string .= "3*" . $doOperator;
	}
	if(isset($_POST['do4star']))
	{
		$string .= "4*" . $doOperator;
	}
	//Misc.
	if(isset($_POST['doAlola']))
	{
		$string .= "alola" . $doOperator;
	}
	if(isset($_POST['doDefender']))
	{
		$string .= "defender" . $doOperator;
	}
	if(isset($_POST['doShadow']))
	{
		$string .= "shadow" . $doOperator;
	}
	if(isset($_POST['doPurified']))
	{
		$string .= "purified" . $doOperator;
	}
	if(isset($_POST['doTraded']))
	{
		$string .= "traded" . $doOperator;
	}
	if(isset($_POST['doHatched']))
	{
		$string .= "hatched" . $doOperator;
	}
	if(isset($_POST['doEggsonly']))
	{
		$string .= "eggsonly" . $doOperator;
	}
}

?>
<html>
	<head>
		<title>PoGo Search String Builder</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<h1>PoGo Search String Builder</h1>
		<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
			<p>I <u><b>DO NOT</b></u> WANT TO SEE:</p>
			<select type="radio" name="doNotToggle">
				<option value="and" <?php if($doNotToggle == "and"){echo "selected";}?>>AND</option>
				<option value="or" <?php if($doNotToggle == "or"){echo "selected";}?>>OR</option>
			</select>
			<div class="table">
				<div class="doNot">
					<div class="doNot region">
						<div class="row">
							<div class="col">
								<h3>Region</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotKanto">Kanto (GEN 1)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotJohto">Johto (GEN 2)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotHoenn">Hoenn (GEN 3)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotSinnoh">Sinnoh (GEN 4)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotUnova">Unova (GEN 5)</input>
							</div>	
						</div>
					</div>
					<div class="doNot tier">
						<div class="row">
							<div class="col">
								<h3>Tier</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotMythical">Mythical</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotLegendary">Legendary</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotEggsonly">Baby</input>
							</div>
						</div>
					</div>
					<div class="doNot special">
						<div class="row">
							<div class="col">
								<h3>Special</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotShiny">Shiny</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotLucky">Lucky</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotCostume">Costume</input>
							</div>
						</div>
					</div>
					<div class="doNot evolve">
						<div class="row">
							<div class="col">
								<h3>Evolve</h3>
							</div>
							<div class="col">
								<p><input type="checkbox" name="doNotItem">Item</input></p>
							</div>
							<div class="col">
								<p><input type="checkbox" name="doNotEvolve">Evolve</input></p>
							</div>
						</div>
					</div>			
					<div class="doNot iv">
						<div class="row">
							<div class="col">
								<h3>IV</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doNot0star">0*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNot1star">1*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNot2star">2*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNot3star">3*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNot4star">4*</input>
							</div>
						</div>
					</div>
					<div class="doNot misc">
						<div class="row">
							<div class="col">
								<h3>Misc</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotAlola">Alola</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotDefender">Defender</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotShadow">Shadow</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotSurified">Purified</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotTraded">Traded</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doNotHatched">Hatched</input>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p>I <u><b>DO</b></u> WANT TO SEE:</p>
			<select type="radio" name="doToggle">
				<option value="and" <?php if($doToggle == "and"){echo "selected";}?>>AND</option>
				<option value="or" <?php if($doToggle == "or"){echo "selected";}?>>OR</option>
			</select>
			<div class="table">
				<div class="do">
					<div class="do region">
						<div class="row">
							<div class="col">
								<h3>Region</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doKanto">Kanto (GEN 1)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doJohto">Johto (GEN 2)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doHoenn">Hoenn (GEN 3)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doSinnoh">Sinnoh (GEN 4)</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doUnova">Unova (GEN 5)</input>
							</div>	
						</div>
					</div>
					<div class="do tier">
						<div class="row">
							<div class="col">
								<h3>Tier</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doMythical">Mythical</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doLegendary">Legendary</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doEggsonly">Baby</input>
							</div>
						</div>
					</div>
					<div class="do special">
						<div class="row">
							<div class="col">
								<h3>Special</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doShiny">Shiny</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doLucky">Lucky</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doCostume">Costume</input>
							</div>
						</div>
					</div>
					<div class="do evolve">
						<div class="row">
							<div class="col">
								<h3>Evolve</h3>
							</div>
							<div class="col">
								<p><input type="checkbox" name="doItem">Item</input></p>
							</div>
							<div class="col">
								<p><input type="checkbox" name="doEvolve">Evolve</input></p>
							</div>
						</div>
					</div>			
					<div class="do iv">
						<div class="row">
							<div class="col">
								<h3>IV</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="do0star">0*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="do1star">1*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="do2star">2*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="do3star">3*</input>
							</div>
							<div class="col">
								<input type="checkbox" name="do4star">4*</input>
							</div>
						</div>
					</div>
					<div class="do misc">
						<div class="row">
							<div class="col">
								<h3>Misc</h3>
							</div>
							<div class="col">
								<input type="checkbox" name="doAlola">Alola</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doDefender">Defender</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doShadow">Shadow</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doSurified">Purified</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doTraded">Traded</input>
							</div>
							<div class="col">
								<input type="checkbox" name="doHatched">Hatched</input>
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="submit">
		</form> 	
		<textarea readonly><?php echo $string;?></textarea>
	</body>
</html>