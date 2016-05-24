<?php
//$inlogg = "yes";
function checkUser ()
	{
		$texten = $_POST['texten'];
		$namnet = $_POST['namnet'];

		echo $texten ."<br />". $namnet;

		/*
		if ( $password =="123" && $user =="admin") {
			//echo "<h2>rätt lösenord</h2>";
			session_start();

			$_SESSION["words"] = "ja";
			
			header('Location: hemligt.php');
		}
		else
		{
			header('Location: inlamning.php?words=false');
			echo "<h2>det finns användare med det lösenordet</h2>";
		}
		*/

	}


/*
Funktionsbibliotek
*/

//Avsluta inte en inkluderad fil