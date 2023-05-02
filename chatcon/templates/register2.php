<?php 
    ##Connection start
    $sName = 'localhost';
    $uName = 'bonfas';
    $pass = '@oluoch123';
    $db_name = 'chatcondb';

    try {
        $conn = new PDO("mysqli:host=$sName; dbname=$db_name",$uName, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOD_EXCEPTION);
    } catch (PDOException $e) {
        echo " Connection failed: ". $e->getMessage();
    }

    #end of connection
    if(isset($_POST['full-name'])&&
        isset($_POST['email'])&&
        isset($_POST['tel'])&&
        isset($_POST['location'])&&
        isset($_POST['password'])&&
        isset($_POST['re_enter_password'])&&
        isset($_POST['username'])
    ){

        $user_name  = $_POST['full-name'];
        $user_email = $_POST['email'];
        $user_phone = $_POST['tel'];
        $user_location = $_POST['location']; 
        $password = $_POST['password'];
        $re_enter_password = $_POST['re_enter_password'];
        $username = $_POST['username'];

        $data = "user_name=".$user_name."user_email=".$user_email."tel=".$user_phone."location=".$user_location."username=".$username;

        if(empty($user_name)){
            $em = "Full Name is required";
            header("Location: register2.php?error=$em&$data");
            exit;
        }else if(empty($user_email)){
            $em = "Email is required";
            header("Location: register2.php?error=$em&$data");
            exit;
        }
        else if(empty($user_phone)){
            $em = "Phone is required";
            header("Location: register2.php?error=$em&$data");
            exit;
        }
        else if(empty($user_location)){
            $em = "Location is required";
            header("Location: register2.php?error=$em&$data");
            exit;
        }
        else if(empty($user_password)){
            $em = "Password is required";
            // header("Location: register2.php?error=$em");
            header("Location: register2.php?error=$em");
            exit;
        }
        else if(empty($re_enter_password)){
            $em = "Similar password is required";
            header("Location: register2.php?error=$em");
            exit;
        }
        else if(empty($username)){
            $em = "Username is required";
            header("Location: register2.php?error=$em&$data");
            exit;
        }else{
            $pass = password_hash($user_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(user_name,user_email,user_phone,user_location, password,re_enter_password, username) VALUES(?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$user_name, $user_email, $user_phone, $user_location, $password,$re_enter_password, $username]);
            header("Location: register2.php?success=Your Account has been created successfully");
            exit;
        }
    }else{
        header("Location: register2.php?error=error");
        exit;
    }
?>