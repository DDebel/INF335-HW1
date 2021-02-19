<?php

if (isset($_POST['client_id'])) { 


$x = $_POST['client_id'];

if( $x < 0 ) {
    echo "<h2>ID's cannot be negative :)</h2>"; // check if id is negative

} else if (empty($x)) {
    echo "Please enter an ID"; // check for empty field
} else {

    // check if user is in database or not
    $select = $conn->prepare("SELECT id FROM clients WHERE id = $x"); // prepare query with the entered id
    $select->execute(['id']); // run the id row 

        if ($select->rowCount() > 0) { // if any row is found execute the if

        echo "<h2>User with ID <u>$x</u>     Found: </h2>";
        
        // query for retrieving the specified id
        $client_query_specific = "SELECT id, title, first_name, last_name FROM clients WHERE id = $x";

        echo "<table border='1'>"; // create tabler
        echo "<tr><th>  id  </th><th> Title </th><th> First Name </th><th> Last Name </th></tr>"; // table headings

        // get current clients
        foreach ($conn->query($client_query_specific) as $row) {

        // table cells 
        echo "<tr>"; // row start 

        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";

        echo "</tr>"; // row end 
        }
        echo "</table>"; // table end 
        
        } else { // if 0 rows were found, display no user
            echo "<h2>There is no user with id $x</h2>";
        }
    } 
}
?>