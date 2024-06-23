<?php
    $user="valor";
    $password="valor";
    $edad = intval($_POST['edad'] ?? '');
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $user=(!empty($_POST['user']) && $_POST['user'] == 'luis') ? $_POST['user'] :"requerido o incorrecto";
            $password=(!empty($_POST['password']) && $_POST['password'] == 'mendoza') ? $_POST['password'] : "requerido o incorrecto";
            $edad = (!empty($edad) && $edad >= 18 ) ? $edad :0;
    
            if($user=="requerido o incorrecto"){
                echo "El usuario es incorrecto verfique el campo nuevamente";
            }
            elseif($password=="requerido o incorrecto"){
                echo "La contraseña es incorrecta verifique el campo nuevamente";
            }
            elseif($edad== 0){
                echo "No estas apto para ver el contenido del sitio";
            }            
            else{
                echo "Ok: ". htmlspecialchars($user)."<br>";
                echo "Tu edad es: " . htmlspecialchars((string)$edad) ."<br>";
                echo "Eres apto para entrar al contenido del sitio"."<br>";                
            }
        }