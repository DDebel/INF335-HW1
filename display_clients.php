<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise One | Display Clients</title>
</head>
<body>
<!--Form for displaying clients-->
<form method="POST"> 
    <input type="submit" name="clients_button" class="button" value="View Clients" />       
</form> 

<!-- Php Code for execution -->
<?php 
    include '../db_connection.php'; // database interface file
    include 'display_logic.php'; //application logic file 
?>

</body>
</html>