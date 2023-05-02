<?php 
    session_start();
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
    if( isset($_POST['username'])&& isset($_POST['password'])    ){ 
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        $data = "username=".$uname;

    }else if(empty($pass)){
            $em = "Password is required";
            header("Location: register2.php?error=$em");
            exit;
    }else if(empty($username)){
            $em = "Username is required";
            header("Location: register2.php?error=$em&$data");
            exit;
    }else{
        // $pass = password_hash($user_password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

            if($stmt->rowCount() == 1){
                $user = $stmt->fetch();
                $username = $user['username'];
                $user_name =$user['full-name'];
                $user_email = $user['email'];
                $user_phone = $user['tel'];
                $user_location = $user['location'];
                $password = $user['password'];
                $user_id = $user['user_id'];

                if($username === $uname){
                    if(password_very($pass, $password)){
                        echo "Logged In";
                        $_SESSION['id'] = $user_id;
                        $_SESSION['user_name'] = $user_name;
                        header("Location: ../adverts.php");
                    }else{
                        $em = "Incorrect username or Password";
                        header("Location: login2.php?error=$em");
                        exit;
                    }
                }else{
                $em = "Incorrect username or Password";
                header("Location: login2.php?error=$em&$data");
                exit;
                }
            }
        header("Location: register2.php?success=Your Account has been created successfully");
        exit;
    }
?>