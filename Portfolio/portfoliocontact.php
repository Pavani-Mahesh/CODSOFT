<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','portfolio') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $sql = "INSERT INTO `customer` (`name`, `email`, `subject`, `message`)  VALUES ('$name','$email','$subject','$message')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>