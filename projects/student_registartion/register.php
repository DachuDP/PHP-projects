<?php
    if(isset($_POST['btnsubmit'])){
        $roll = $_POST['roll'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $con = mysqli_connect("localhost", "root", "", "college", 3307);
        
        if(!$con){
            die("Connection Failed:".mysqli_connect_error());
        }
        // echo "Connected sucsessfully";

        $sql = "INsert into studentre(rollno, name, age, email, course) values(?,?,?,?,?)";
        $ps=$con->prepare($sql);
        $ps->bind_param("isiss",$roll,$name,$age,$email,$course);
        if($ps->execute()){
            echo "<script>alert('Student Registered Successfully!'); window.location.href='view.php';</script>";
        }else{
            echo "Error: ". $ps->error;
        }
    }


?>



<!-- mysql query
CREATE table studentre(
    rollno int PRIMARY KEY,
    name varchar(50),
    age int,
    email varchar(100),
    course varchar(5)

); -->