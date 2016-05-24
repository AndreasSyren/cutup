<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Den färdiga dikten</title>
	<?php require("header.php"); ?>
</head>
<body>
	<div class="row">
  		<div class="large-12 columns"><h1>Cut-up maskinen</h1>
		<div class="content">
  			<blockquote>
  		<?php
			$texten = $_POST['texten'];
      $texten = strip_tags($texten );
			if (empty($_POST['texten']))
     		{$texten = "Ingenting?";}
   			
			$texten2 = preg_split("/[\s,]+/", $texten);

			shuffle($texten2);	

			foreach ($texten2 as $text)
{
    		//$text = ucfirst($text);             
			//$text = ucfirst(strtolower($text));
    		$newtext = wordwrap($text, 70, "<br />\n",true);
    		echo  $newtext."\n";	
}
?>
			<p>
  			<?php
  				$namnet = $_POST['namnet'];	
          $namnet = strip_tags($namnet );
  				if (empty($_POST["namnet"]))
     			{$namnet = "Namnlös";}
   				
  				echo "<br />"."<cite>"."// "."C U T - U P  MASKINEN "."med gästskribenten ".$namnet."</cite>";
  			?>
  			</p>
  			</blockquote>
  			<a href="./" class="button small radius">Pröva igen</a>
			</div>
		</div>
	</div>




<?php
//require("functions2.php");
//	checkUser();
?>
	
	<?php require("footer.php"); ?>
</body>
</html>
