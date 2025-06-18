<?php $conn = new mysqli("localhost", "admin", "yourpass", "test_project"); if ($conn->connect_error) { die("ERROR: Unable to connect: " . $conn->connect_error); } echo 'Connected to the dfgdatabase.
'; $conn->close(); ?>
