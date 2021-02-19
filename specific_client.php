<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Two | Display specific client</title>
</head>
<body>

<form method="POST"> 
    <label  for="client_id">Enter client ID to view more details</label>
    <input name="client_id" type="text">
    <input type="submit" name="specific_client" class="button" value="View Client" />       
</form> 

<!-- Php Code for execution -->
<?php 
include '../db_connection.php'; // database interface file
include 'client_logic_app.php'; //application logic file 
?>
    
</body>
</html>