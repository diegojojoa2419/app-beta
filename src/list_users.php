<?php
    require("../config/database.php");
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <table border = "1" align ="center">
      <tr>
      <th>fullname</th>
       <th>E_mail</th>
       <th>movile_phone</th>
       <th>status</th>
       <th>photo</th>
       <th>Options</th>
      </tr>
    <tr>
    <td>Peter luza</td>
    <td>peter@mail.com</td>
    <td>300123</td>
    <td>active</td>
    <td><img src ="profile_photo/imagen_profile.png.png"width = "50" alt = "user photo"></td>
    <td>
       <a href = '#'>
       <img src = "icons/edit user.png" width = "50" alt = "edit user">
       </a>
       &nbsp; &nbsp;
       <a href = "#">
         <img src = "icons/delete.png" width = '50' alt = "delete user">
       </a>
    </td>
 </tr>
</table>
</body>
</html>
