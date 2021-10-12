<?php
    include "sesion.php";
    include "VerificarAdministradorLaboratorista.php";
    //conectamos con la base de datos
    include_once "conexion.php";
    //verificaos que previamente se hayan ingresado constantes 
    $sql="SELECT*FROM tb_constantes AS c JOIN tb_usuario AS u WHERE c.id_usu=u.ID_usu AND u.doc_usu ='".$_SESSION['usu']."' ORDER BY  ID_const DESC LIMIT 1";
    //echo $sql;
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_array($result);
    if (!$result)
    {
            header('Location: NuevoEnsayo.php?resultado=0'); 

    }
    else
    {
        if(is_null($row))
        {
             header('Location: NuevoEnsayo.php?resultado=1'); 
        
        }
        else
        {
            //RECUPERAMOS VARIABLES- CAMBIAMOS FORMATO DECIMAL
            $id_const=$row[0];
            $localizacion =$_POST['Localizacion']; 
            $pesoInicial=str_replace(',','.',$_POST['PesoInicial']);
            $pesoFinal=str_replace(',','.',$_POST['PesoFinal']);
            $pesoHumedo=str_replace(',','.',$_POST['PesoHumedo']);
            $humedad=str_replace(',','.',$_POST['Humedad']);
            $foto1=$_FILES['foto1']['name'];
            $foto2=$_FILES['foto2']['name'];
            if ($foto1=="" && $foto2=="")
            {
                //conectamos con la base de datos
                //include_once "conexion.php";
                //insertamos datos 
                $fotos="";//se le da un nombre único
                $sql=" SELECT calculo ($id_const,'$localizacion', $pesoInicial, $pesoFinal, $pesoHumedo, $humedad,'$fotos')";
                echo $sql;
                $result=$link->query($sql);
                if (!$result)
                {
                    header('Location: NuevoEnsayo.php?resultado=0'); 
                }
                else
                {
                    $row=mysqli_fetch_array($result);
                    //echo "hola1";
                    header('Location: NuevoEnsayo.php?resultado='.$row[0].'& id_const='.$id_const.''); 
                }   
            }
            else
            {
                //comprobar tipo de imagen y  huardar su ubicacion
                $tipo1=$_FILES['foto1']['type'];
                $temp1=$_FILES['foto1']['tmp_name'];
                $tipo2=$_FILES['foto2']['type'];
                $temp2=$_FILES['foto2']['tmp_name'];
                if(!strpos($tipo1,'jpeg') || !strpos($tipo2,'jpeg'))
                {
                    header('Location: NuevoEnsayo.php?resultado=2');
                }
                else
                {
                    //conectamos con la base de datos
                    //include_once "conexion.php";
                    //insertamos datos
                    $fotos1=$_SESSION['usu']."-".$foto1;
                    $fotos2=$_SESSION['usu']."-".$foto2; 
                    $fotos=$_SESSION['usu']."-".$foto1."-".$foto2;//se le da un nombre único
                    $sql=" SELECT calculo ($id_const,'$localizacion', $pesoInicial, $pesoFinal, $pesoHumedo, $humedad,'$fotos')";
                    echo $sql;
                    $result=$link->query($sql);
                    if (!$result)
                    {
                        //header('Location: NuevoEnsayo.php?resultado=0'); 
                    }
                    else
                    {
                        move_uploaded_file($temp1,'fotos/'.$fotos1);
                        move_uploaded_file($temp2,'fotos/'.$fotos2);
                        $row=mysqli_fetch_array($result);
                        header('Location: NuevoEnsayo.php?resultado='.$row[0].'& id_const='.$id_const.''); 
                    }
                }
            }

        }
    }
?>