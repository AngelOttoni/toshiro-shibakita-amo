<html>

<head>
<title>Example PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.85.248.238";
$username = "root";
$password = "Password123";
$database = "mydatabase";

// Create connection.


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$value_rand1 =  rand(1, 999);
$value_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO data (ClientID, First Name, Last Name, Address, City, Host) VALUES ('$value_rand1' , '$value_rand2', '$value_rand2', '$value_rand2', '$value_rand2','$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
