<?php
Class Racun
{
	public function stampajRacun()
	{
		if(isset($_POST['submit'],$_POST['andol'],$_POST['aspirin'],$_POST['vc']))
		{
			$andolCena=500;
			$aspirinCena=600;
			$vitaminCCena=450;
			$andol = $_POST['andol'];
			$aspirin = $_POST['aspirin'];
			$VitaminC = $_POST['vc'];
			
				if(is_numeric($andol) && is_numeric($aspirin) && is_numeric($VitaminC))
				{
					if($andol!==0 && $aspirin!==0 && $VitaminC!==0)
					{
						$sve=$andol+$aspirin+$VitaminC;
						if($sve!==0)
						{
							$ukupno = $andol*$andolCena+$aspirin*$aspirinCena+$VitaminC*$vitaminCCena;
							$porez = $ukupno-($ukupno/100)*8;
							echo date(DATE_RFC2822)."<br>";
							echo "Narucili ste ukuptno ".$sve." proizvoda<br>";
							echo "Andol: ".$andol."<br>Aspirin: ".$aspirin."<br>VitaminC: ".$VitaminC."<br>";
							echo "Vas ukupan racun je:".$ukupno." RSD<br>";
							echo "Vas racun sa uracunatim porezom je: ".$porez." RSD<br>";
							if(isset($_POST['select']) && $_POST['select']==1)
							{
								echo "Hvala!";
							}
							else
							{
								echo "Hvala dodjite nam opet";
							}
						}
						else
						{
							echo "Niste nista narucili";
						}
					}	
				}
				else
				{
					echo "Moguce je unositi samo brojeve";
				}
		}
		else
		{
			echo "Unesite sta zelite da narucite";
		}
	}
}
?>

