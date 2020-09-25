<?php

class Conectar{
    public static function ejecutar($cmd)
    {
        //Conectar a la base de datos
        $conn = mysqli_connect('localhost','root','','humedadapp');

        //Comprobar si la conexion es correcta
        if(mysqli_connect_errno())
        {
            echo "La conexion a la base de datos ha fallado";
        }
        else{
            //consulta para configurar la codificacion de caracteres
            mysqli_query($conn,"SET NAMES 'utf8'");

            //Consulta select desde php
            $query = mysqli_query($conn, $cmd);
            return $query;
            // while($n = mysqli_fetch_assoc($query))
            // {
            // echo $n['id'].'<br>';
            // }
            
        }
    }
}



?>