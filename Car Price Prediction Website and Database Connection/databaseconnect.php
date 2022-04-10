<?php
    $name = $_POST['name'];
    $contactnumber = $_POST['contactnumber'];
    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];

    //Database connection

    $conn = new mysqli('localhost', 'root', '','carwebsite')
    if($conn->connect_error){
        die('There has been a connection error : '.$conn->connect_error);

    }else{
        $stmt = $conn->prepare("insert into registrationdetails(name, contactnumber, emailaddress, password) 
        values(?, ?, ?, ?)");
        $stmt ->bind_param("siss", $name, $contactnumber, $emailaddress, $password);
        $stmt->execute();
        echo "You have successfully registered onto Vehicle Appraiser";
        $stmt ->close();
        $conn->close();
    
    }

?>


    
    
      