<?php
include('../config/database.php');
// get data

$f_name  =$_POST ['fname' ]; 
$L_name  =$_POST ['lname' ];
$E_mail  =$_POST ['email' ];
$M_phone =$_POST ['mphone'];
$p_sswd  =$_POST ['passwd'];

// Query to insert into SQL. 

$sql="INSERT INTO users (firstname,lastname,email,mobile_phone,password)
values('$f_name', '$L_name','$E_mail', '$M_phone', '$p_sswd')";

//Execute query
pg_query($sql);