
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hola</title>
	<style type="text/css">
  		
		body{background-image: url("https://i.pinimg.com/originals/20/43/14/204314074cdff584f32a03e5aac3ebb9.gif"); background-position: center; background-repeat: no-repeat; background-size: cover; box-sizing: border-box; font-family: Arial;}

		p { font-family: sans-serif; font-weight: 900; font-style: italic; text-align:center; text-align:center; }

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
			border-radius: 25px;
		}

		input[type=text]{
			padding: 10px;
			width: 380px;
			font-weight: bolder;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
			border-radius: 15px;
			font-weight: bolder;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
			font-weight: bolder;
			text-align:center;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 17px;
			padding: 10px;
			text-align:center;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<form action="hola.php" method="post">
		<?php


			$command = escapeshellcmd('python test.py');
			$output = shell_exec($command);
			echo $output;

			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];

				$campos = array();

				if($nombre == ""){
					array_push($campos, "El campo esta vacío");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Hola ", $nombre;
				} 
				echo "</div>";
			}

		?>


        <td><img src="https://previews.123rf.com/images/enterline/enterline1612/enterline161200952/66554365-the-word-test-written-in-tile-letters-isolated-on-a-white-background-.jpg" width="403" height="203" align="middle" ></td>


		<p>
		Ingrese su nombre<br/>
		<input type="text" name="nombre">
		</p>

		<p><input type="submit" value="Enviar"></p> 
		<p> Desarrollado por Agustin Barrios </p>
	</form>
		
</body>
</html>