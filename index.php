<?php
include_once('connection.php');
if(isset($POST['submit']))
{
    $name =$_POST['name'];
    $email=$_POST['email'];
    $add  =$_POST['address'];
    $adm  =$_POST['admission'];
   if(mysql_query("insert into students_record(name,email,address,joining_date) values ('$name','$email','$add','$adm')"))
   {
       echo "submitted";
   }
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
        <meta charset ="UTF-8">
        <title>webbase_sql</title>
</head>

<body>
        <form action="" method="post">
        <p>Name:<br/> <input type="text" name="name" id=""/></p>
        <p>Email:<br/> <input type="text" name="email" id=""/></p>
        <p>Address:<br/> <input type="text" name="address" id=""/></p>
        <p>Admission_Date:<br/> <input type="text" name="admission" id=""/></p>
        <p> <input type="submit" name="submit" value="Submit"/> </p>
</body>


</html>