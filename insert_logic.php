<?php

/*  Validation Functions  */

// Validate Integers
function validateInteger($int_param) {
   
    if( $int_param < 0 ) {
        echo "<h3>ID's cannot be negative :)</h3>" . '<br>'; // check if id is negative
    } else if (filter_var($int_param, FILTER_VALIDATE_INT) && !empty($int_param)) {

        $int_param = trim($int_param);
        $int_param = stripslashes($int_param);
        $int_param = htmlspecialchars($int_param);

        return $int_param;
    }  else {
        // error message
        return $integerErrorMessage = ""; // declare empty error message
    }
}

// Validate Strings
function validateString($string_param) {
    if(!empty($string_param) && is_string($string_param)) {
 
        $string_param = trim($string_param);
        $string_param = stripslashes($string_param);
        $string_param = htmlspecialchars($string_param);
        
        return $string_param;
    } else {
        // declare empty error message
        return $stringErrorMessage = "";
    }
}

// When button is clicked
if (isset($_POST['insert_client'])) { 

    // Message for the ID parameter
    $id = validateInteger($_POST['client_id']);

    // Add string values from String function

    $title = validateString($_POST['client_title']);
    $first_name = validateString($_POST['client_first_name']);
    $last_name = validateString($_POST['client_last_name']);
    $post_address = validateString($_POST['client_postal_address']);
    $email_address = validateString($_POST['client_email_address']);


    // check if both returns are empty & create user
    if (!empty($id) && !empty($title) && !empty($first_name) && !empty($last_name) && !empty($post_address) && !empty($email_address)) {

    echo "All good";

    $insert_query = "INSERT INTO clients (id, title, first_name, last_name, postal_address, email_address) 
    VALUES (?, ?, ?, ?, ?, ?)";
    
    $statement = $conn->prepare($insert_query);

    $statement->bindValue(1, $id);
    $statement->bindValue(2, $title);
    $statement->bindValue(3, $first_name);
    $statement->bindValue(4, $last_name);
    $statement->bindValue(5, $post_address);
    $statement->bindValue(6, $email_address);

    $statement->execute();

    // query for new person
    $client_query_specific = "SELECT * FROM clients WHERE clients.id = '$id'";

    echo "<h2>Client has been added</h2>";

    echo "<table border='1'>"; // create table
    // table headings
    echo "<tr><th> Id </th><th> Title  </th><th> First Name </th><th> Last Name </th><th>Postal Adress</th><th>Email_address</th></tr>"; 

    $get_info = $conn->query($client_query_specific);

    // Table to display new client 
    while($row = $get_info->fetch()) {
        echo "<tr>"; // row start 

            // table cells 
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['postal_address'] . "</td>";
            echo "<td>" . $row['email_address'] . "</td>";

        echo "</tr>"; // row end 
    }
    echo "</table>"; // table end             
    exit(); // exit 
    header('location: insert_client.php'); // redirect

    // if message or array are not empty, throw error messages
    } else {
        echo "ID $id is empty or wrong" . '<br>';
        echo "All fields after ID must be string & not empty!";
    }
}
?>