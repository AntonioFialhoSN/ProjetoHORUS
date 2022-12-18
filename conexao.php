<?php
    if (isset($_POST['nome'])){
        $servername = "192.168.0.38:3306";
        $username = "root1";
        $password = "root";
        $dbname = "teste2";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $text = $_POST['texto'];
        $sql = "insert into teste2.cadastro (nome, email, texto) values ("." '". $nome ."'".", "." '". $email ."'".", "."'".$text."'".");";
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($conn->query($sql) === TRUE) {
            echo "<div style='background: green; color: white; margin: auto; padding= 10px; font-size: 20px'>New record created successfully</div>";
        } else {
            echo "<div style='background: red color: white; margin: auto; padding= 10px; font-size: 20px'>Error: </div>" . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>
    <div> Your message was sent, click here <a href="index.html" target="_self" class="interno"> Home page </a> </div>
</body>
</html>