<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Three | Insert Client</title>
</head>
<body>

<form method="POST" name="insert_client_form" action="insert_logic.php"> 
    <h1>Insert client in database</h1>

    <label  for="">Enter client ID</label>
    <input name="client_id" type="text">
    <br>    <br>
    <label  for="">Enter client Title</label>
    <input name="client_title" type="text">
    <br>    <br>
    <label  for="">Enter client First Name</label>
    <input name="client_first_name" type="text">
    <br>    <br>
    <label  for="">Enter client Last Name </label>
    <input name="client_last_name" type="text">
    <br>    <br>
    <label  for="">Enter client Postal_address </label>
    <input name="client_postal_address" type="text">
    <br>    <br>
    <label  for="">Enter client Email_address </label>
    <input name="client_email_address" type="text">
    <br>    <br>
    <input type="submit" name="insert_client" class="button" value="Submit" />       
</form> 

<!-- Php Code for execution -->
<?php 
    include '../db_connection.php'; // database interface file
    include 'insert_logic.php'; //application logic file 
?>

</body>
</html>