<?php
require_once('config.php');

?>


<html>
<head>
    <title><b> User Registration Form</b></title>
</head>
<body>
<div>
    <?php

        if(isset($_POST['create']))
        {
            $firstname  = $_POST['firstname'];
            $lastname   = $_POST['lastname'];
            $email      = $_POST['email'];
            $phonenumber= $_POST['phonenumber'];
            $password   = $_POST['password'];
            $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES (?,?,?,?,?)"   ;
            $stmtinsert = $db->prepare($sql); 
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);

            if($result)
            {
                echo 'Sucessfully Saved';
            }
            else{
                echo 'Not Saved';
            }

            //echo $firstname. " " . $lastname . " " . $email . " " . $phonenumber . " " . $password ; 
        }

    ?>

</div>


<div>
    <form action="registration.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up form with correct values.</p> 
             <label for="firstname"><b>First Name</b></label>   
            <input type="text" name="firstname" required>
            <br>
            <br>

            <label for="lastname"><b>Last Name</b></label>   
            <input type="text" name="lastname" required>
            <br>
            <br>

            <label for="email"><b>Email Address</b></label>   
            <input type="email" name="email" required>
            <br>
            <br>

            <label for="phonenumber"><b>Phone Number</b></label>   
            <input type="text" name="phonenumber" required>
            <br>
            <br>

            <label for="password"><b>Password</b></label>   
            <input type="password" name="password" required>
            <br>
            <br>

            <input type="submit" name="create" value="Sign Up">        
            <br>
            <br>
        </div> 
    </form>
</div>


</body>
</html>