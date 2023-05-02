<?php
    //Database connection
    include('config/db_connect.php');

    $title = $email = $ingredients = '';//declaring empty variable at once
    // USING GET METHOD
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }
    // USING POST METHOD
    $errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');//creating empty errors
    if(isset($_POST['submit'])){
        //check email
        if(empty($_POST['email'])){
            $errors['email'] =  "email is required";
        }else{
            $email = $_POST['email'];
            //check if the entered email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] =  'email must be a valid email address';
            }
            // echo htmlspecialchars($_POST['email']);
        }
        //check title
        if(empty($_POST['title'])){
            $errors['title'] = "Title is required";
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letter and space only';
            }
            // echo htmlspecialchars($_POST['title']);
        }

        //check ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = "At least one ingredient is required";
        }else{
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'Ingredients must be a comma separated list';
            }
            // echo htmlspecialchars($_POST['ingredients']);
        }

        // Check for existence of the errors in the error array 
        //Using array_filter()
        if(array_filter($errors)){
            // You can add something if errors are there i.e some popups to alert user
        }else{
            //add and save data to the database
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            $sql = "INSERT INTO pizzas(email, title, ingredients) VALUES('$email','$title','$ingredients')";

            if(mysqli_query($conn, $sql)){
                //success
                //redirect user to the home page index.php if there is no errors
                header('Location: index.php');
            }else{
                echo 'query error' . mysqli_error($conn);
            }
            
        }
    }

?>

<!DOCTYPE html>
<html>
    
    <?php include('templates/header.php'); ?>

    <section class="container">
        <h4>Add a Pizza</h4>
        <form class="white" action="add.php" method="POST">
            <div class="form-control">
                <label for="email">Enter Email:</label>
                <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
                <div class="red-text"><?php  echo $errors['email']; ?></div>
            </div>
            <div class="form-control">
                <label for="pizza-title">Pizza Title:</label>
                <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($title); ?>">
                <div class="red-text"><?php  echo $errors['title']; ?></div>
            </div>
            <div class="form-control">
                <label for="ingredients">Ingredients (coma separated):</label>
                <input type="text" name="ingredients" id="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
                <div class="red-text"><?php  echo $errors['ingredients']; ?></div>
            </div>
            <input type="submit" name='submit' value="submit">
            
        </form>
    </section>

    <?php include('templates/footer.php'); ?>
    
</html>