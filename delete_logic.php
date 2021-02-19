<?php

// query to get specific columns for the table below
$client_query_specific = "SELECT id, title, first_name, last_name FROM clients";

echo "<table border='1'>"; // create tabler
echo "<tr><th>  id  </th><th> Title </th><th> First Name </th><th> Last Name </th></tr>"; // table headings

echo "<h2>Choose a client to delete</h2>"; 

$get_info = $conn->query($client_query_specific);

// Table to display client 
while($row = $get_info->fetch()) {
    echo "<tr>"; // row start 
        // table cells 
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";

    echo "</tr>"; // row end 
}
echo "</table>"; // table end 

// Delete client logic & validation
if (isset($_POST['delete_client'])) { 

    $id = $_POST['client_id']; // assign id value
    $sql = "SELECT id FROM clients"; // get all ids
    $clients_id = $conn->query($sql);

    if( $id < 0 ) {
        echo "<h2>ID's cannot be negative :)</h2>"; // check if id is negative
    } else {

        $select = $conn->prepare("SELECT id FROM clients WHERE id = $id"); // prepare query with the entered id
        $select->execute(['id']); // run the id row 
    
        if ($select->rowCount() > 0) { // if any row is found execute the if
            // delete client & message
            $sql = "DELETE FROM clients WHERE id = '$id'";
            $conn->exec($sql);
            echo "<h2>Client with $id has been deleted successfully</h2>";
        } else {
            echo "<h2>No user found with $id</h2>"; // Error message
        }
    } 
}
?>