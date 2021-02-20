<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Four | Delete Client</title>
</head>
<body>
<form method="POST" action="delete_logic.php"> 
    <h1>Delete client from database</h1>

    <label for="client_id">Enter client ID to delete</label>
    <input name="client_id" type="text">
    <input type="submit" name="delete_client" class="button" value="Delete Client" />       
</form>
<!-- Php Code for execution -->
<?php 
include '../db_connection.php'; // database interface file
include 'delete_logic.php'; //application logic file 
?>
</body>
</html>