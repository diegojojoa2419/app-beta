<?php
include('../config/database.php');
// get data

$f_name  =$_POST ['fname' ]; 
$L_name  =$_POST ['lname' ];
$E_mail  =$_POST ['email' ];
$M_phone =$_POST ['mphone'];
$p_sswd  =$_POST ['passwd'];
$enc_pass = md5($p_sswd);
// Query to insert into SQL. 

$sql="INSERT INTO users (firstname,lastname,email,mobile_phone,password)
values('$f_name', '$L_name','$E_mail', '$M_phone','$enc_pass')";
$res_local = pg_query($conn, $sql);

    if ($res_local) {
        // Si funciono en local, guardar en Supabase
        $res_supa = pg_query($supabase, $sql);

        if ($res_supa) {
            //echo "Usuario registrado correctamente en ambas bases de datos";
            echo "<script>alert('Listo. Usuario registrado')</script>";
            header('refresh:0;url=signin.html');
        } else {
            echo "Error: Se guardo en local pero fallo en Supabase";
        }
    } else {
        echo "Error: No se pudo registrar el usuario";
    }

    pg_close($conn);
    pg_close($supabase);
?>


