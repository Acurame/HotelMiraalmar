<?php
include_once("../model/model-usuario.php");



class controllerUsuario{
    public function InsertarCuenta(){
        if(isset($_POST['save'])){
            $name =  $_POST['name'];
            $passwd = $_POST['passwd'];
            $mail = $_POST['mail'];
            $state = $_POST['state'];
            Insertar($name,$passwd,$mail,$state);
        }
    }
}