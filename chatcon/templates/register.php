<!-- <?php 
    if(isset($_POST['signup'])):
        $user_name  = $_POST['full-name'];
        $user_email = $_POST['email'];
        $user_phone = $_POST['tel'];
        $user_location = $_POST['location']; 
        $password = $_POST['password'];
        $re_enter_password = $_POST['re_enter_password'];
        $username = $_POST['username'];

        // Connection to the database
        $conn = mysqli_connect('localhost', 'bonfas','@oluoch123','chatcondb');

        if(!$conn){
            echo '<script>alert("Connection Error: ")</script>'. mysqli_error($conn);
        }
        else{
            $sql = $conn->prepare("INSERT INTO user(user_name,user_email,user_phone,user_location, password,re_enter_password, username) VALUES(?,?,?,?,?,?,?)");

            $sql->bind_param("ssissss",$user_name, $user_email,$user_phone, $user_location,$password, $re_enter_password, $username);

            if($password == $re_enter_password){
                $sql->execute();
                echo '<script>alert("Registration Successfull!! :)")';
                // header('Location: login.php');
                $sql.close();
                $conn.close();
            }else{
                echo 'Error password';
            }

            
        }
    endif; 

?> 