<?php 
// display clients query
$client_query = "SELECT * FROM clients";

$record_counter = 0;

if(isset($_POST['clients_button'])){

    echo "<table border='1'>"; // create tabler
    echo "<tr><th> Title  </th><th> First Name </th><th> Last Name </th><th>Postal Adress</th><th>Email_address</th></tr>"; // table headings
    foreach ($conn->query($client_query) as $row) {
        // table table cells 
        echo "<tr>"; // row start 

            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['postal_address'] . "</td>";
            echo "<td>" . $row['email_address'] . "</td>";
            $record_counter++;

        echo "</tr>"; // row end 
    }
    echo "</table>"; // table end 

    echo "<p>The are <b><u>$record_counter</u></b> client records in the table</p>"; // display records
}
?>