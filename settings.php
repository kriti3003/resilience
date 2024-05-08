<?php require 'core/init.php';

if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

} else {  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Settings</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
<style>
header{
    background-color: #E3C1B4;
  }
</style>

</head>
<body>

<div id="page">
    <header>
        <a title="asset" href="">
            <div class="logo">
                <img src="images/logo.jpg" height="66px" weight="66px" />
                <span id="title">Resilience</span>
            </div>
        </a>

        <nav>


            <label for="email"> <?php echo $user_data['first_name']; ?></label>

            <a href="home.php"><input type="image" src="images/icons/home.jpg" title="Home" value="home " style="margin-left:10px; width: 60px; height: 50px;"/></a>
            <a href="profile.php"><input type="image" src="images/icons/user.jpg" title="Profile" value="settings " style="margin-left:10px; width: 60px; height: 50px;"/></a>
            <input type="image" src="images/icons/settings.jpg" title="Settings" style="margin-left:10px; width: 60px; height: 50px;">
            <a href="logout.php"><input type="image" src="images/icons/logout.jpg" title="Logout" value="Sign Out" style="margin-left:10px; width: 60px; height: 50px;"/></a>




        </nav>
    </header>

    <div class="assets">
        <?php


        if(empty($_POST['update'])===false) {

            $reuired_fields = array('first_name', 'last_name', 'password');
            foreach ($_POST as $key => $value) {
                if (empty($value) && in_array($key, $reuired_fields) === true) {
                    $errors[]='Fields marked with asterisk are required';
                    break 1;
                }
            }
        }
        ?>


        <div class="block">
            <br><br>
            <center><h2>Profile Settings</h2></center>

            <?php


            if (isset($_GET['success']) && empty($_GET['success'])) {
                echo '<center> updated successfully!!!! </center><br>';
                echo '<center><a href="logout.php">Log Again</a></center>';
            }else {

        if (empty($_POST['update']) === false and empty($errors)===true) {

                $update_user = array(

                    'first_name'=> $_POST['fname'],
                    'last_name'=> $_POST['lname'],
                    'password'=> $_POST['password']

                );


            $id = $user_data['id'];
            update_profile($con,$update_user,$id);
            header('Location:settings.php?success');
            exit();


            }else if(empty($errors)===false){

                echo '<center>'.output_errors($errors).'</center>';

            }


            ?>

        </div>


            <form action="" method="post" style="text-align: center;">

                <label for="">First Name*</label>
                <input id="text_input" type="text" name="fname" placeholder="First name"> <br><br>

                <label for="">Last Name*</label>
                <input id="text_input" type="text" name="lname" placeholder="Last name"><br><br>

                <label for="">Password*</label>
                <input id="text_input" type="password" name="password" placeholder="Password"><br><br>

                <input type="submit" name="update" value="Update" style="font-weight:bold;"> <input type="reset" name="reset" value="Reset" style="font-weight:bold;">


            </form>






            </div>

<?php } ?>

</div>



</body>
    </html>



<?php }?>
