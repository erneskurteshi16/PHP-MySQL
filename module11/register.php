<?php include("config.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['name'];
    $password=$_POST['name'];

    $hashed_password=password_hash($password,PASSWORD_BCRYPT);

    if(empty($name)||
    empty($surname)||
    empty($username)||
    empty($email)||
    empty($passowrd)){
        echo "You neeed to fill all data";
    }else{
        $sql="SELECT * FROM user_login where email='$email' OR username=$'username'";

        $temSQL=$conn->prepare($sql);
        $temSQL->execute();

        if($temSQL->rowCount()>0){
            echo "This username or email already exists";
            header("refresh:2; url=signup.php");
        }
        else{
            $sql="INSERT INTO user_login(name,surname,username,email,password) VALUES ('$name','$surname','$username','$email','hashed_password')";

            $insertSql=$conn->prepare($sql);
            $insertSql->execute();

            echo "New user is created successfully!";
            header("refresh:2; url=login.php");
        }
    }
}