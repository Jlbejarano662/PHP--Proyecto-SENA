<?php  
	if (isset($_POST['doc_usu']))//valida que no esté vacío el campo usuarios del formulario login
	{
		session_start(); //creando variable de sesion
		$_SESSION['usu']=$_REQUEST['doc_usu'];
		$rol=$_POST['rol'];
		$usu=$_POST['doc_usu'];//Por el método POST y el nombre del elemento
		$pass=$_POST['Contraseña'];
		//echo $rol;
		$sql="SELECT * FROM tb_usuario WHERE doc_usu ='".$usu."'"; //SENTENCIA DE CONSULTA PARA LA BASE DE DATOS

		include('Conexion.php');//hace la coneeción a la base de datos
		$result = $link->query($sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
		while ($row =mysqli_fetch_array($result)) //SE RECORRE TODOS LOS ELEMENTOS DEL DATASET 
			{  
				$rol_bd=$row[1];
				$usu_bd = $row[2];
				$pass_bd = $row[3];
				$estado=$row[9];
				break;
			}
		if($rol==$rol_bd)
		{	
			if($usu==$usu_bd)
			{
				if ($pass==$pass_bd)
				{
					if ($estado==1)//verifica que el usuario esté activado
					{
						header('Location: Desktop.php'); 
					}
					else
					{
						header('Location: index.php?error=4'); 
					}

				}
				else
				{
					header('Location: index.php?error=3'); //ENVIAR LAS VARIABLES POR URL
				}	
			}
			else
			{
				header('Location: index.php?error=2'); 
			}
		}
		else
		{
			header('Location: index.php?error=1'); 
		}
	}
	else
	{
		header('Location: index.php?error=0'); 
	}
?>
