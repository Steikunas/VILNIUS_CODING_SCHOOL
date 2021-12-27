<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyGuests";

try {
    if (!$_POST) {
        die('Netinkamas metodas');
    }

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email)
        VALUES(:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    $firstname = $_POST['vardas'];
    $lastname = $_POST['pavarde'];
    $email = $_POST['elpastas'];
    $stmt->execute();

    echo "New records created successfully";
} catch(PDOException $e) {
    echo "Error" . $e->getMessage();
}
/*
    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
*/
?>