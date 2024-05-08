
<?php 
require 'core/init.php';

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
<style>
    html, body{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    /*font-family:'Open Sans', sans-serif;*/
    background-color: #FFF0F5;
    font-size: 14px;
    font-weight: 300;
    color: #39383A;
    margin: 0;
    padding: 0;
    line-height: 1.5;
    min-height: 100%;
    height: 100%;
    display: block;
}
    .box {
    text-align: center;
    background: linear-gradient(180deg,#bdcae2, #cdc9da, #dec6d3,#ecc4cb);
    padding: 20px;
    border: 0px solid #39383A;
    cursor: pointer;
    width: 300px;
    height: 350px;
    margin: 10px;
    transition: transform 0.3s ease-in-out;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 20px; /* Adjust the border-radius for round corners */
  }
  .box-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
    height: 45%;
    background: #EFECE9;
  }
  .box img {
    width: 100%;
    height: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    object-fit:fill;
  }
  header{
    background-color: #E3C1B4;
  }
    </style>
</head>
<body>

    <div id="page">
        <header>
            <a title="asset" href="home.php">
                <div class="logo">
                    <img src="images/logo.jpg" height="66px" weight="66px" />
            </a>

            <span id="title">Resilience</span>
    </div>
            <nav>
                    <label for="email">Welcome <?php echo $user_data['first_name']; ?> </label>

                <input type="image" src="images/icons/home.jpg" title="home" value="Home" style="margin-left:10px; width: 60px; height: 50px;"/>
                <a href="profile.php"><input type="image" src="images/icons/user.jpg" title="Profile" value="settings " style="margin-left:10px; width: 60px; height: 50px;"/></a>
                <a href="logout.php"><input type="image" src="images/icons/logout.jpg" title="Logout" value="Sign Out" style="margin-left:10px; width: 60px; height: 50px;"/></a>

            </nav>

        </header>

        <div class="content-center">
            <div id="topic">Learn how to become less anxious</div> <br> <br>
            <br> <br>
            <div class="box-container">
        <!-- Journal Box -->
        <div class="box" onclick="openJournalPage('journal.html')">
            <h2>Tranquil Talks</h2>
            <img id="imgjournal" src="https://i.pinimg.com/564x/1b/b7/ea/1bb7ea9b59a7322607950037d38e2921.jpg" 
                alt="Journal Image" height: 380px>
        </div>
        <!-- function to open a new page without a new tab-->
        <script>
            function openJournalPage(){
                window.location.href = 'journal.html';
            }
            </script>


        <!-- Quiz Box -->
        <div class="box" onclick="openQuizPage()">
            <h2>Quiz</h2>
            <img id="imgquiz" src="https://i.pinimg.com/564x/42/5b/df/425bdf2bf3c78d3c91e05648c375fa56.jpg" alt="Quiz Image" height: 380px>
        </div>
        
        <script>
            function openQuizPage() {
                window.location.href = 'quiz.html';
            }
        </script>
        

        <!-- Yoga Poses Box -->
        <div class="box" onclick="openPage('chat.html')">
            <h2>Meditopia</h2>
            <img id="imgyoga" src="https://i.pinimg.com/564x/44/d8/a2/44d8a283bf54eb6ca16931fc0f71e16c.jpg" alt="Yoga Poses Image" height: 380px>
        </div>
        <script>
            function openPage(){
                window.location.href = 'chat.html';
            }
        </script>
    </div>
    <br>  <br>  <br>  <br>
    <h3>
            Why is mental health important?
     </h3>
     <p style="font-size: 18px; margin-bottom: 15px; padding-bottom: 50px; color: #2E2E2E; padding-left: 20px">
  Mental health is paramount as it directly influences our overall well-being and quality of life. 
  It encompasses our emotional, psychological, and social well-being, affecting how we think, feel, and act. 
  Prioritizing mental health fosters resilience, enables effective coping mechanisms, and enhances our ability to navigate life's challenges.
   It promotes healthy relationships, boosts productivity, and facilitates personal growth and fulfillment. 
   By addressing mental health needs, individuals can lead happier, more fulfilling lives, contributing positively to their communities and society at large. 
   Therefore, recognizing and supporting mental health is crucial for fostering a thriving and inclusive society.
   <br> <br> <br>
</p>
            

        </div>
        
    </div>
</body>
</html>
