<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Reponse</title>
	</head>
		<body>
			<?php
			 	echo $_POST['prenom'].' '. $_POST['nom'];
			
			echo '<ul>';
			for($i =1;$i<=$_POST['nombre']; $i++) {
			echo '<li>' . $i .'</li>';
			}
			echo '</ul>';

			echo 'table 1';
			echo '<table border="3">';
			for($i =1;$i<=$_POST['nombre']; $i++){
			echo '<tr>'.'<td>' . $i . '</td>'.'</tr>';
			}
			echo '</table>';
			echo '</br>';

			?>


			<?php
			echo 'table 2';
			echo '<table border="1">';
			$x=0;
			for($i=1;$i<=$_POST['nombre']; $i++){
			    $t=$i-1;
			   	echo '<tr>';
				for($t=1;$t<=$_POST['nombre']; $t++){
					$x=$x+1;	
						echo'<td>' . $x .'</td>';		
						} 		
				echo '</tr>';
				}	
			echo '</table>';
			echo '</br>';
			?>	

			<?php
			echo 'table 3';
			echo '<table border="1">';
			$compter=1;
			for($ligne=1;$ligne<=$_POST['nombre']; $ligne++){
			  	echo '<tr>';
				for($col=1;$col<=$_POST['nombre']; $col++){
					echo'<td>' . $compter++.'</td>';	

						} 		
				echo '</tr>';
				}	
			echo '</table>';
			echo '</br>';
			?>		
			<?php
			echo 'table 4';
			echo '<table border="1">';
			
			for($ligne=1;$ligne<=$_POST['nombre']; $ligne++){
			  	echo '<tr>';
				for($col=1;$col<=$_POST['nombre']; $col++){
					echo'<td>' .(($ligne-1)*$_POST['nombre']+$col).'</td>';	

						} 		
				echo '</tr>';
				}	
			echo '</table>';
			echo '</br>';
			?>					


			<?php
			echo 'exemple mathieu';
			for($i=1;$i<=3; $i++){
				for($j=1;$j<=3;$j++){
					echo $i. ','. $j .'</br>';
				}
			}

		?>

		<?php
		echo 'exemple paire/impaire';
		echo'</br>';
		echo '<table border="1">';
			for($i =1;$i<=$_POST['nombre']; $i++){
				if(is_int($i/2)){
			echo '<tr style="background:red;"><td>' . $i . '</td></tr>';
			}
			 else {
			 	echo '<tr style="background:#ccc;"><td>' . $i . '</td></tr>';
			 }
			}
			echo '</table>';
			echo '</br>';

			?>


			<?php
			/*-----*/
			echo 'exemple +++CORRECTION+++++paire/impaire';
			echo'</br>';
			echo '<table border="1">';
				for($i =1;$i<=$_POST['nombre']; $i++){
					echo '<tr style="background:#';
					if(is_int($i/2)){ //Nombre pair
				echo 'ccc';
				}
				 else {//Nombre impair
				 	echo 'eee';
				 }
				 echo ';">
				 <td>' . $i . '</td>'.'</tr>';
				}
				echo '</table>';
				echo '</br>';
				?>

			<?php //colonne,ligne
			echo 'exercice ligne/colonne';
			echo'</br>';
			echo '<table border="1">';
			$compter=1;
				for($i=1; $i<=$_POST['ligne'];$i++){
					echo '<tr>';
					for($j=1;$j<=$_POST['colonne'];$j++ ){
					echo '<td>' . $compter++ . '</td>';
					}echo '</tr>';
				}
			echo '</table>';
			echo '</br>';
			?>
				


	</body>
			</html>		