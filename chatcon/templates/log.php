<?php 
    $conn = mysqli_connect('localhost', 'bonfas','@oluoch123', 'chatcondb');
    if(!$conn){
        die("Connection Error: Failed TO connect To the database");
    }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = '$username' && 'password' = '$password'";
        $result = mysqli_query($conn, $query);
        if($result){
            $fetch = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            // if($count > 0){
                // $_SESSION['user_id'] = $fetch['user_id'];
                // echo "Login successfully";
                header('Location: adverts.php');
                // return $fetch['username'];
            // }else{
            //     echo "
            //     <script> alert('Invalid Username and Password');
            //     </script>
            // ";
            // }
        }else{
            die(mysqli_error($conn));
        }
    }



?>