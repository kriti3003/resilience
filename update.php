<?php
require 'core/init.php';
error_reporting(0);
if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Resilience</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
    <link rel="stylesheet" href="css/home.css" />

</head>
<body>

<div id="page">
    <header>
        <a title="asset" href="home.php">
            <div class="logo">
                <img src="images/logo.jpg" height="66px" weight="66px" />
                <span id="title">Resilience</span>
            </div>
        </a>

        <nav>


            <label for="email">Welcome <?php echo $user_data['first_name']; ?> </label>

            <input type="image" src="images/icons/home.png" title="home" value="Home" style="margin-left:10px;"/>
            <a href="profile.php"><input type="image" src="images/icons/user.png" title="Profile" value="settings " style="margin-left:10px;"/></a>
            <a href="logout.php"><input type="image" src="images/icons/logout.png" title="Logout" value="Sign Out" style="margin-left:10px;"/></a>


        </nav>


    </header>
    <?php $id=$_GET['id'];
    $asset_data=asset_data($con,$id);?>

    <div class="content-center">
        <div id="topic"><h3><?php echo $asset_data['title'];?></h3></div>



        <?php
            if(isset($_POST['update'])===true and empty($_POST['update'])=== false){
                $update_data = array(

                    'title'     => $_POST['title'],
                    'category'  => $_POST['category'],
                    'quantity'  => $_POST['quantity'],
                    'price'  => $_POST['price'],
                    'details'   => $_POST['details']
                );


                update_assets($con,$update_data,$id);
                header('Location:home.php');
                exit();

            }



        ?>

    </div>

</div>
</body>
</html>
