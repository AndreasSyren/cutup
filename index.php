<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulär</title>
    <?php require("header.php"); ?>
    
    <?php
	/*		
			if ( isset($_GET['inlogg'])) {
				
			$inlogg = $_GET['inlogg'];

			if ($inlogg == "false") {
				echo "<p class='warning'>Inloggningen misslyckades</p>";
			
	}
			}
			*/
		?>
</head>
<body>
	<div class="row">
  		<div class="large-12 columns"><h1>Cut-up maskinen</h1>
			<form action="kontroll2.php" method="post">
				<fieldset>
    				<legend>Skriv in ord i formuläret</legend>
					<div class="row form">
						<div class="large-12 columns">
							<label>DITT NAMN
								<input type="text" placeholder="Skriv in ditt namn..." name="namnet"/> 
							</label> 
						</div> 
					</div>
					<div class="row form">
						<div class="large-12 columns">
							<label>Ord, meningar, artiklar eller vad du känner för.
								<textarea placeholder="Stoppa in lite ord...tryck sen på Cut-up:)" name="texten"></textarea>
							</label> 
						</div> 
					</div>  
					<input type="submit" value="Cut-up" class="small radius button">
				</fieldset>
			</form>
  		</div>
	</div>
<?php require("footer.php"); ?>
</body>
</html>