<?php
$string = "";
$toggle = "";


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//Basic Logic
	$toggle = $_POST['toggle'];
	
	if($toggle == "or")
	{
		$operator = ",";
	}
	if($toggle == "and")
	{
		$operator = "|";
	}
	
	/*-----------------------------------------------------------------
	LOOKING TO SHORTEN/CLEAN UP THIS SECTION. ANY FEEDBACK APPRECIATED.
	-----------------------------------------------------------------*/
	//Region
	if(isset($_POST['doNotKanto']))
	{
		$string .= "!kanto" . $operator;
	}
	if(isset($_POST['doNotJohto']))
	{
		$string .= "!johto" . $operator;
	}
	if(isset($_POST['doNotHoenn']))
	{
		$string .= "!hoenn" . $operator;
	}
	if(isset($_POST['doNotSinnoh']))
	{
		$string .= "!sinnoh" . $operator;
	}
	if(isset($_POST['doNotUnova']))
	{
		$string .= "!unova" . $operator;
	}
	//Tier
	if(isset($_POST['doNotMythical']))
	{
		$string .= "!mythical" . $operator;
	}
	if(isset($_POST['doNotLegendary']))
	{
		$string .= "!legendary" . $operator;
	}
	//Special
	if(isset($_POST['doNotShiny']))
	{
		$string .= "!shiny" . $operator;
	}
	if(isset($_POST['doNotLucky']))
	{
		$string .= "!lucky" . $operator;
	}
	if(isset($_POST['doNotCostume']))
	{
		$string .= "!costume" . $operator;
	}
	//Evolve
	if(isset($_POST['doNotEvolve']))
	{
		$string .= "!evolve" . $operator;
	}
	if(isset($_POST['doNotItem']))
	{
		$string .= "!item" . $operator;
	}
	//IV
	if(isset($_POST['doNot0star']))
	{
		$string .= "!0*" . $operator;
	}
	if(isset($_POST['doNot1star']))
	{
		$string .= "!1*" . $operator;
	}
	if(isset($_POST['doNot2star']))
	{
		$string .= "!2*" . $operator;
	}
	if(isset($_POST['doNot3star']))
	{
		$string .= "!3*" . $operator;
	}
	if(isset($_POST['doNot4star']))
	{
		$string .= "!4*" . $operator;
	}
	//Misc.
	if(isset($_POST['doNotAlola']))
	{
		$string .= "!alola" . $operator;
	}
	if(isset($_POST['doNotDefender']))
	{
		$string .= "!defender" . $operator;
	}
	if(isset($_POST['doNotShadow']))
	{
		$string .= "!shadow" . $operator;
	}
	if(isset($_POST['doNotPurified']))
	{
		$string .= "!purified" . $operator;
	}
	if(isset($_POST['doNotTraded']))
	{
		$string .= "!traded" . $operator;
	}
	if(isset($_POST['doNotHatched']))
	{
		$string .= "!hatched" . $operator;
	}
	if(isset($_POST['doNotEggsonly']))
	{
		$string .= "!eggsonly" . $operator;
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
			<select type="radio" name="toggle">
				<option value="and" <?php if($toggle == "and"){echo "selected";}?>>AND</option>
				<option value="or" <?php if($toggle == "or"){echo "selected";}?>>OR</option>
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
			<?php /*
			<div class="do">
				<p>I <u><b>DO</b></u> WANT TO SEE</p>
				<div class="do generic">
					<input type="checkbox" name="mythical">Mythical</input><br>
					<input type="checkbox" name="legendary">Legendary</input><br>
					<input type="checkbox" name="shiny">Shiny</input><br>
					<input type="checkbox" name="lucky">Lucky</input><br>
				</div>
				<input type="checkbox" name="costume">Costume</input><br>
				<!--input type="checkbox" name="item">Item</input-->
				<!--input type="checkbox" name="evolve">Evolve</input-->
				<input type="checkbox" name="alola">Alola</input><br>
				<input type="checkbox" name="defender">Defender</input><br>
				<input type="checkbox" name="shadow">Shadow</input><br>
				<input type="checkbox" name="purified">Purified</input><br>
				<input type="checkbox" name="traded">Traded</input><br>
				<input type="checkbox" name="hatched">Hatched</input><br>
				<input type="checkbox" name="eggsonly">Baby</input><br>
				
				<div class="do iv">
					<input type="checkbox" name="0star">0*</input><br>
					<input type="checkbox" name="1star">1*</input><br>
					<input type="checkbox" name="2star">2*</input><br>
					<input type="checkbox" name="3star">3*</input><br>
					<input type="checkbox" name="4star">4*</input><br>
				</div>
				
				<input type="text" name="numbers"></input>
			</div>*/ ?>
			<input type="submit">
		</form> 	
		<textarea readonly><?php echo $string;?></textarea>
	</body>
</html>