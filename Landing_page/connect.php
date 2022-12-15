<?php
    $firstname = $_POST['firstname'];
     $Middlename = $_POST['Middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    // Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registeration(firstname,Middlename, lastname,gender,course, email, password, number) values(?,?, ?,?,?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $firstname,$Middlename, $lastname,$gender,$course, $email, $password, $number);
        $execval = $stmt->execute();
        
         
        echo $execval;
        echo "<script type='text/javascript'> alert('Register Successfully'); 
                window.location='index.html';</script>";
        exit();

        $stmt->close();
        $conn->close();
    }
?>