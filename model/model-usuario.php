<?php
include_once("db.php");

class Usuario
{
    
    public function Insertar ($name,$password,$correo,$rol)
    {
        $consult = "INSERT INTO usuarios(NombreUsuario, password, Correo, rol) VALUES ('$name','$password','$correo','$rol')";
        $error = mysqli_query($conexion,$consult);
        if(!$error){
            die("Error");
        }
    }
}