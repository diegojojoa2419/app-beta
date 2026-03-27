<?php
include('../config/database.php');
// get data

$f_name  =$_POST ['fname' ]; 
$L_name  =$_POST ['lname' ];
$E_mail  =$_POST ['email' ];
$M_phone =$_POST ['mphone'];
$p_sswd  =$_POST ['password'];
$enc_pass = password_hash($p_sword, PASSWORD_BCRYPT);
// Query to insert into SQL. 
$checkEmail = "SELECT * FROM USERS WHERE email = '$e_mail'";
$resultEmail = pg_query($local_conn, $checkEmail);

if (pg_num_rows($resultEmail) > 0) {
    echo "Error: el email ya está registrado";
    exit;
}

 $checkPhone = "SELECT * FROM USERS WHERE mobile_phone = '$m_phone'";
$resultPhone = pg_query($local_conn, $checkPhone);

if (pg_num_rows($resultPhone) > 0) {
    echo "Error: el número de teléfono ya está registrado";
    exit;
}
$sql="INSERT INTO users (firstname,lastname,email,mobile_phone,password)
values('$f_name', '$L_name','$E_mail', '$M_phone','$enc_pass')";

//Execute query
 pg_query($local_conn, "BEGIN");

// Ejecutar INSERT
$result = pg_query($local_conn, $sql);

if (!$result) {
    pg_query($local_conn, "ROLLBACK");
    echo "Error al registrar usuario";
    exit;
}

// Guardar cambios
pg_query($local_conn, "COMMIT");

echo "Usuario registrado correctamente";
 
?>