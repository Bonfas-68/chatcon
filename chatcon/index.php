<?php 

    //database connection
    $conn = mysqli_connect('localhost','bonfas','@oluoch123','chatcondb');
    //check connection errors
    if(!$conn):
        echo '<div class="conn-error">Connection Error: </div>' . mysqli_error($conn);
    endif;

    $sql = 'SELECT blog_author, blog_title, blog_content, created_at FROM blogs ORDER BY created_at DESC';

    $result = mysqli_query($conn, $sql);

    $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ChatCon &mdash; Talks  and Bizness connect platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include('templates/header.php'); ?>

    <!-- Sub Header -->
    <?php include('templates/sub_header.php'); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="blog-container">
            <?php foreach ($blogs as $blog):?>
                <div class="blog-card">
                    <h2 class="title"><?php echo htmlspecialchars($blog['blog_title']); ?></h2>
                    <p>Author: <em><?php echo htmlspecialchars($blog['blog_author']); ?></em></p>
                    <p>Created On: <em><?php echo htmlspecialchars($blog['created_at']); ?></em></p>
                    <p class="content"><?php echo htmlspecialchars($blog['blog_content']); ?></p>
                    <div class="bottom-bg"></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="advert-container">
            <div class="advert-card">
                <a href="">
                    <img src="" alt="">    
                    <h3 class="ad-title">Advert 1</h3>
                    <p class="ad-description">Description of the advert: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, explicabo.</p>
                </a>
                <div class="ad-connect">
                    <a href="#">Connect</a><a href="#">View</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('templates/footer.php'); ?>
    <!-- Copyright -->
    <?php include('templates/copyright.php'); ?>


</body>
</html>