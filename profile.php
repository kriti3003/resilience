<?php require 'core/init.php';

if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

} else {

if(isset($_GET['first_name'])=== true and empty($_GET['first_name'])===false){
    $first_name= $_GET['first_name'];



}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
<style>
    header{
    background-color: #E3C1B4;
  }
  .profile #report{

margin:15% 35% 0px 35%;
font-size: 16px;
font-weight: bold;
text-align: center;
padding: 5px;
color: black;
border: 1px solid #deacaa;
border-radius: 2px;
cursor: pointer;
}
.profile #report:hover{
    background-color: #deacaa;
    color: white;
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


            <label for="email"> <?php echo $user_data['first_name']; ?>'s Profile </label>

            <a href="settings.php"><input type="image" src="images/icons/settings.jpg" title="Settings" style="margin-left:10px; width: 60px; height: 50px;"></a>
           <input type="image" src="images/icons/home.jpg" title="home" value="Home" style="margin-left:10px; width: 60px; height: 50px;"/>
            <a href="profile.php"><input type="image" src="images/icons/user.jpg" title="Profile" value="settings " style="margin-left:10px; width: 60px; height: 50px;"/></a>
            <a href="logout.php"><input type="image" src="images/icons/logout.jpg" title="Logout" value="Sign Out" style="margin-left:10px; width: 60px; height: 50px;"/></a>




        </nav>
    </header>

    <?php

    $id = $user_data['id'];
    $total=total($con,$id);


    ?>


    <div class="profile">
        <br><br>
       <center><h1>USER PROFILE</h1></center>
        <br><br>

         <div class="content">
                    <h2>First Name :</h2>
                <br>
                    <h2>Last Name :</h2>
                <br>
                    <h2>Email :</h2>
                <br>
                    <h2>Total Assets :</h2>

        </div>


            <div class="content" >
                    <h2><?php echo $user_data['first_name'];?></h2>
                <br>

                <h2><?php echo $user_data['last_name'];?></h2>
                <br>

                <h2><?php echo $user_data['email'];?></h2>
                <br>

                <h2><?php echo $total; ?></h2>

            </div>

        <a href="settings.php"><div id="report">Edit Profile</div></a>





    </div>



    <hr />


</div>



</body>
</html>



<?php }?>
