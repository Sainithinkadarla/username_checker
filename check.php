<?php 

header('Content-Type: application/json');

$server ="localhost";
$username = "admin";
$password = "yourpass";
$dbanme = "test_project";

$conn = new mysqli($server, $username, $password, $dbanme);

if ($conn -> connect_error){
    error_log("Connection failed: " .$conn->connect_error);
    echo json_encode(["error" => "database connection failed"]);
    exit();
}

$username_input = $_POST['username'];
$username_input = "sai";
// echo $username_input;
if (empty($username_input)){
    echo json_encode(['error' => "username cannot be empty", 'available' => false]);
    $conn->close();
    exit();
}

$sql = "select count(*) as count from logins where username = ?";
$stmt = $conn ->prepare($sql);

$stmt-bind_param('s', $username_input);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$count = $row['count'];

$response = [];

if ($count > 0){
    $response["available"] = false;
    echo "not available, taken";
}
else{
    $response["available"] = true;
}


echo json_encode($response);

$stmt->close();
$conn->close();
?>
