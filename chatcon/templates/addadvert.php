<?php
if(isset($_POST['upload'])){
    $conn = mysqli_connect('localhost','bonfas','@oluoch123','chatcondb');
    if(!$conn){
        die("Connection Error: Failed To Connect To database");
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $bs_name = $_POST['bs_name'];
        $sloghan = $_POST['sloghan'];
        $message = $_POST['message'];
        $products = $_POST['products'];
        $price = $_POST['price'];
        $name = $_POST['name'];
        
        // if($_FILES['$image']['error'] === 4){
        //     $image = $_POST['image'];
        //     echo "<script> alert('Image Not Found') </script>";
        // }else{
        //     $fileName = $_FILES['$image']['name'];
        //     $fileSize = $_FILES['$image']['size'];
        //     $tmpName = $_FILES['$image']['tmp_name'];


        //     $validImageExtension = ['JPG','jpeg','PNG'];
        //     $imageExtension = explode('.',$fileName);
        //     $imageExtension = strtolower(end($imageExtension));

        //     if(!in_array($imageExtension, $validImageExtension)){
        //         echo '<script> alert("Error") </script>';
        //     }else if($fileSize > 10000){
        //         echo '<script> alert("Image Size Too BIg") </script>';
        //     }else{
        //         $newImageName = uniqid();
        //         $newImageName .= '.'.$imageExtention;
                
        //         move_uploaded_file($tmpName,'img/'.$newImageName);

                $query = "INSERT INTO adverts VALUES('','$username','$email','$location','$bs_name','$sloghan','$message','$products','$price','$name')";

                mysqli_query($conn, $query);
                
                echo '<script> alert("Successfully Uploaded")';
                
                header('Location: adverts.php');
            // }
        // }

    }
    /*  */
}



?>

<div class="adds-container">
    <div class="adds-header">
        <h2>Add Businessto Connect To many Customer</h2>
        <p>Get your business span from your local area to the furthest as the customers connect to your services.</p>
    </div>

    <div class="adds-article">
        <form action="" method="post">
            <div class="form-control">
                <label for="username">Your UserName:</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-control">
                <label for="email">Your Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-control">
                <label for="location">Business Location:</label>
                <input type="text" name="location" id="location">
            </div>
            <div class="form-control">
                <label for="bs_name">Business Name:</label>
                <input type="text" name="bs_name" id="bs_name">
            </div>
            <div class="form-control">
                <label for="sloghan">Business Sloghan OR Philosophy:</label>
                <input type="text" name="sloghan" id="sloghan">
            </div>
            <div class="form-control">
                <label for="message">Business Message:</label>
                <textarea name="message" id="messsage" placeholder="Message to help customer understand your business..."></textarea>
            </div>
            <div class="form-control">
                <label for="name">Poster Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <!-- <div class="form-control">
                <label for="image">Business Poster:</label>
                <input type="file" accept=".JPG, .jpeg, .PNG" name="image" id="image">
            </div> -->
            <div class="form-control">
                <label for="products">Business Products / Services:</label>
                <input type="text"  name="products" id="products" placeholder="Design, Development, e.t.c">
            </div>
            <div class="form-control">
                <label for="price">Products/Services Pricing:</label>
                <input type="text"  name="price" id="price" placeholder="Design(200/=), Development(2000/=), e.t.c">
            </div>
            <input type="submit" value="Upload" name="upload">
        </form>
    </div>
</div>