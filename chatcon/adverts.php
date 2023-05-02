<?php 
 session_start();
    // // header('Location: login.php');

    // //database connection
    // $conn = mysqli_connect('localhost','bonfas','@oluoch123','chatcondb');
    // //check connection errors
    // if(!$conn):
    //     echo '<div class="conn-error">Connection Error: </div>' . mysqli_error($conn);
    // endif;

    // $sql = 'SELECT username FROM user ORDER BY username DESC LIMIT 1';

    // $result = mysqli_query($conn, $sql);

    // $usernames = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // mysqli_free_result($result);
    // mysqli_close($conn);


?>
<html>
    <head>
        <title>Business Adverts Page</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .logout{
                padding: 1.2rem 4rem;
                /* width: 100%; */
                display: flex;
                align-items: center;
                justify-content: space-between;
                /* background-color: #011d13; */
                box-shadow: 0 2rem 4rem 0 rgba(0,0,0,0.1);
            }
            .logout h2{
                font-size: 2.4rem;
                font-weight: 500;
                color: #01010f;
                text-transform: capitalize;
            }
            .logout a{
                font-size: 1.8rem;
                color: #000b0d;
                font-weight: 300;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php include('templates/header.php'); ?>
        <div class="logout">
            <?php if(isset($_SESSION['id'])&& usset($_SESSION['username'])){?>
                <h2>Welcome <?=$SESSION['username'] ?></h2>
            <?php }else{
                header("Location: login2.php");
                exit;
            }?>
            <a href="logout.php">Logout</a>
            <?php include('templates/logout2.php'); ?>
        </div>
        <div class="ads-container">
            <div class="ads-header">
                <h2>Connect With All Your Solution Providers <br /> From your Region. Happy Business</h2>
            </div>

            <div class="ads-cards">
                <div class="ads-card">
                   <div class="ads-card-img">
                       <img src="./img/img1.jpg" alt="ads image">
                   </div>
                    <div class="heading">
                        <h3>Business Name</h3>
                        <div class="diacolor"></div>
                    </div>
                    <div class="ads-desc">
                        <div class="img-icon">
                            
                        </div>
                        <div class="ads-details">
                            <div class="right">
                                <h4>Business Owner:</h4>
                                <span>/>Bonfas Oluoch</span>
                                <h4>Business Location:</h4>
                                <span>/>Kutus Kerugoya</span>
                                <h4>Connections</h4>
                                <span>/>300 Customers</span>
                            </div>
                            <div class="left">
                                <h4>Business Quality:</h4>
                                <span>/>High Quality &mdash; Affordable</span>
                                <h4>Discount Availability:</h4>
                                <span>/>Vary Monthly</span>
                                <h4>Pricing</h4>
                                <span>/>200/- - 1000/- +free delivery(300m<sup>2</sup>)</span>

                            </div>
                        </div>
                    </div>
                    <div class="ads-btn">
                        <a href="#">Call Or Chat</a>
                        <a href="#">View More</a>
                    </div>
                </div>
                <div class="ads-card">
                   <div class="ads-card-img">
                       <img src="./img/img3.jpg" alt="ads image">
                   </div>
                    <div class="heading">
                        <h3>Business Name</h3>
                        <div class="diacolor"></div>
                    </div>
                    <div class="ads-desc">
                        <div class="img-icon">
                            
                        </div>
                        <div class="ads-details">
                            <div class="right">
                                <h4>Business Owner:</h4>
                                <span>/>Bonfas Oluoch</span>
                                <h4>Business Location:</h4>
                                <span>/>Kutus Kerugoya</span>
                                <h4>Connections</h4>
                                <span>/>300 Customers</span>
                            </div>
                            <div class="left">
                                <h4>Business Quality:</h4>
                                <span>/>High Quality &mdash; Affordable</span>
                                <h4>Discount Availability:</h4>
                                <span>/>Vary Monthly</span>
                                <h4>Pricing</h4>
                                <span>/>200/- - 1000/- +free delivery(300m<sup>2</sup>)</span>

                            </div>
                        </div>
                    </div>
                    <div class="ads-btn">
                        <a href="#">Call Or Chat</a>
                        <a href="#">View More</a>
                    </div>
                </div>
                <div class="ads-card">
                   <div class="ads-card-img">
                       <img src="./img/img4.jpg" alt="ads image">
                   </div>
                    <div class="heading">
                        <h3>Business Name</h3>
                        <div class="diacolor"></div>
                    </div>
                    <div class="ads-desc">
                        <div class="img-icon">
                            
                        </div>
                        <div class="ads-details">
                            <div class="right">
                                <h4>Business Owner:</h4>
                                <span>/>Bonfas Oluoch</span>
                                <h4>Business Location:</h4>
                                <span>/>Kutus Kerugoya</span>
                                <h4>Connections</h4>
                                <span>/>300 Customers</span>
                            </div>
                            <div class="left">
                                <h4>Business Quality:</h4>
                                <span>/>High Quality &mdash; Affordable</span>
                                <h4>Discount Availability:</h4>
                                <span>/>Vary Monthly</span>
                                <h4>Pricing</h4>
                                <span>/>200/- - 1000/- +free delivery(300m<sup>2</sup>)</span>

                            </div>
                        </div>
                    </div>
                    <div class="ads-btn">
                        <a href="#">Call Or Chat</a>
                        <a href="#">View More</a>
                    </div>
                </div>
                <div class="ads-card">
                   <div class="ads-card-img">
                       <img src="./img/img2.jpg" alt="ads image">
                   </div>
                    <div class="heading">
                        <h3>Business Name</h3>
                        <div class="diacolor"></div>
                    </div>
                    <div class="ads-desc">
                        <div class="img-icon">
                            
                        </div>
                        <div class="ads-details">
                            <div class="right">
                                <h4>Business Owner:</h4>
                                <span>/>Bonfas Oluoch</span>
                                <h4>Business Location:</h4>
                                <span>/>Kutus Kerugoya</span>
                                <h4>Connections</h4>
                                <span>/>300 Customers</span>
                            </div>
                            <div class="left">
                                <h4>Business Quality:</h4>
                                <span>/>High Quality &mdash; Affordable</span>
                                <h4>Discount Availability:</h4>
                                <span>/>Vary Monthly</span>
                                <h4>Pricing</h4>
                                <span>/>200/- - 1000/- +free delivery(300m<sup>2</sup>)</span>

                            </div>
                        </div>
                    </div>
                    <div class="ads-btn">
                        <a href="#">Call Or Chat</a>
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>

            <div class="cta">
                <?php include('templates/addadvert.php'); ?>
            </div>
        </div>

        <?php include('templates/footer.php'); ?>
        <?php include('templates/copyright.php'); ?>
    </body>
</html>