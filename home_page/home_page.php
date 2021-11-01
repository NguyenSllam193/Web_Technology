<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />


    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php
    $conn = mysqli_connect('localhost','root','','web');

    $id = '1';

    $sql = "SELECT p.po_title, p.po_image, p.po_create, u.us_fullname
            FROM posts p, users u
            WHERE p.us_id = u.us_id
            AND u.us_id = $id; ";

    $res = mysqli_query($conn, $sql);
    ?>

    <nav>
        <div class="nav-right">
            <div class="search-box">
                <img src="images/search.png">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon online" style="display: none;" onclick="settingsMenuToggle();">
                <img src="images/profile-pic.png">
            </div>
        </div>

        <div class="nav-left">
            <img src="images/logo.png" class="logo">
            <ul>
                <li>
                    <img src="images/notification.png">
                </li>
                <li>
                    <img src="images/inbox.png">
                </li>
                <li>
                    <img src="images/video.png">
                </li>
            </ul>
        </div>


        <div class="settings-menu">
            <div id="dark-btn">
                <span></span>
            </div>
            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <a href="#">See Your Profile</a>
                    </div>
                </div>
                <hr>
                <div class="user-profile">
                    <img src="images/feedback.png">
                    <div>
                        <p>Give Feedback</p>
                        <a href="#">Help us to improve the new design</a>
                    </div>
                </div>
                <hr>

                <div class="settings-links">
                    <img src="images/setting.png" class="settings-icon">
                    <a href="#">Settings & Privacy</a>
                    <img src="images/arrow.png" width="10px">
                </div>
                <div class="settings-links">
                    <img src="images/help.png" class="settings-icon">
                    <a href="#">Help & Support</a>
                    <img src="images/arrow.png" width="10px">
                </div>
                <div class="settings-links">
                    <img src="images/display.png" class="settings-icon">
                    <a href="#">Display & Accessibility</a>
                    <img src="images/arrow.png" width="10px">
                </div>
                <div class="settings-links">
                    <img src="images/logout.png" class="settings-icon">
                    <a href="#">Logout</a>
                    <img src="images/arrow.png" width="10px">
                </div>
            </div>
        </div>

    </nav>

    <div class="container">

        <div class="main-content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="write-post-container">
                    <div class="post-input-container">
                        <textarea rows="2" id="post" name="post" placeholder="   What's on your mind?"></textarea>
                        <div class="add-post-links as">
                            <img src="images/photo.png">
                            <input type="file" name="hinhanh">
                        </div>

                    </div>
                    <div class="test" style="margin-top: 40px;">
                    <button type="submit" name="submit" class="btn btn-success" style="padding: 10px 20px; background : blue; border-radius:10px; color:white;">POST</button>
                    </div>                    
            </form>
        </div>

        <!-- POST -->


        <?php
              if(mysqli_num_rows($res)>0)
              {
              while($row = mysqli_fetch_assoc($res)){
              $title = $row['po_title'];
              $img = $row['po_image'];
              $name = $row['us_fullname'];
              $date = $row['po_create'];
              ?>

        <div class="post-container">

            <div class="post-row">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p><?php echo $name;?></p>
                        <span><?php echo $date;?></span>
                    </div>
                </div>

                <ul class="about"> <i class="fa fa-ellipsis-v"></i>
                        <li><a class="dropdown-item" href="#">Xóa</a></li>
                        <li><a class="dropdown-item" href="#">Chỉnh sửa</a></li>
              </ul>
                

            </div>

            <p class="post-text"> <?php echo $title;?> </p>
            <img src="images/<?php echo $img;?>" class="post-img">
            <div class="post-row">
                <div class="activity-icons">
                    <div>
                        <i class="fas fa-heart" style="margin-right: 5px; color: red;"></i>
                        120
                    </div>
                    <div>
                        <i class="fas fa-comments" style="margin-right: 5px;"></i>
                        19
                    </div>
                    <div>
                        <i class="fas fa-share" style="margin-right: 5px;"></i>
                        1
                    </div>
                </div>
                <div class="post-profile-icon">
                    <img src="images/profile-pic.png">
                    <i class="fas fa fa-caret-down"></i>
                </div>
            </div>
        </div>
        <?php  
                }
                } 
                ?>

    </div>

    <div class="right-sidebar">

        <div class="info_user">
            <div style="
					display:flex; 
					justify-content:space-between;
					margin-bottom: 20px;">
                <h4>Info User</h4>
                <i class="fas fa-ellipsis-h"></i>
            </div>

            <img style="
					margin-left: 25%;
					border-radius: 50%;" src="./images/profile-pic.png" alt="">
        </div>

        <div class="sidebar-title">
            <h4>Events</h4>
            <a href="#">See All</a>
        </div>
        <div class="event">
            <div class="left-event">
                <h3>18</h3>
                <span>March</span>
            </div>
            <div class="right-event">
                <h4>Social Media</h4>
                <p>
                    <i class="fa fa-map-marker"></i>
                    Willson Tech Park
                </p>
                <a href="#">More Info</a>
            </div>
        </div>
        <div class="event">
            <div class="left-event">
                <h3>22</h3>
                <span>June</span>
            </div>
            <div class="right-event">
                <h4>Mobile Marketing</h4>
                <p>
                    <i class="fa fa-map-marker"></i>
                    Willson Tech Park
                </p>
                <a href="#">More Info</a>
            </div>
        </div>
    </div>
    </div>

    <div class="footer">
    </div>

    <script src="js/script.js"></script>
</body>

</html>

<?php

if(isset($_POST['submit'])){

$text = $_POST['post'];
$img = $_FILES['hinhanh']['name'];

if ($text == ""){
    ?>
    <script language="javascript">

        alert("Bạn chưa nhập gì");

    </script>
    <?php
} else{
    $target_dir = "images/";
    $target_file = $target_dir . basename($img);
    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);

    $sql_1 = " INSERT INTO posts
    VALUES (NULL,'$text','$img','$id', NULL)";

    $res_1 = mysqli_query($conn, $sql_1);

        if($res_1>0){
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
        }
    } 
}
?>