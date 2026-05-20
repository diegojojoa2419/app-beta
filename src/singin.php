<?php
//dtabase connection
require('../config/database,php');

// get data from login from 
$e_mail = $POST['email'];
$p_sswd = $POST['passwd'];
$enc_pass = md5[$p_sswd];
//Query
$sql_login = "
select 
u.* 
from 
users u
where
u.email = '$e_mail' and
u.password ='$enc_pass'
";

//execute query
$res = pg_query($sql_login);
if($res){
   $num = pg_num_rows($res);
   if($num > 0){
  header('refresh:0;url=home.php');
   }else{
  echo "<script>alert('Email or password not found.')</script>";
  header('refresh:0;url=signin.html.');
   }
}else{
echo "Query error !!!.";

}
?>