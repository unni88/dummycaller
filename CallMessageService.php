<?php
/**
 * Created by PhpStorm.
 * User: Unni
 * Date: 1/3/16
 * Time: 9:31 PM
 */


/* require the user as the parameter */
if(isset($_GET['phonemessageid']) && intval($_GET['phonemessageid'])) {


    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "callingdb";
// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
    if ($conn->connect_error) {
        die("Web Service Offline.Connection failed: " . $conn->connect_error);
    }

    /* grab the posts from the db */
    $id = $_GET['phonemessageid'];
    $query="SELECT message FROM callmessages where id = ".$id;
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        header('Content-type: text/xml');
        while($row = $result->fetch_assoc()) {
            echo '<Response>';
            foreach($row as $rowEntry){
                echo ($rowEntry);
            }
            echo '</Response>';
        }
    } else {
        echo "This is a Dummy Call Service";
    }
    $conn->close();
}
