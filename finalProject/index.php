<?php 
session_start();
  $pageTitle = "Alexa Leya Photography";
  include('inc/header.php');
  include('inc/functions.php');
  require_once("inc/open_db.php");
?>
<nav>
    <ul>
        <li><a href="index.php" id="current_page">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="schedule.php">Schedule</a></li>
    </ul>
</nav>
<aside><img src="img/alexa.jpg" alt="alexa"></aside>
<main>
    <?php
    if(isset($_SESSION['current_user'])) {
        ?>
        <form action="login_files/logout.php"> 
            <input type="submit" value="Logout">
        </form>
    <?php
    } else {
    ?>
        <form action="login_files/login_start.php">
            <input type="submit" value="Login">
        </form>
    <?php 
    }
    ?>
    <section>
    <h2>Welcome!</h2>
    <p>
        My name is Alexa and this is my photography website! I am happy you came to visit my page! 
        On my site, you can see some of my work under the gallery tab and if interested, 
        you can schedule photo session with me in the schedule tab. My work includes 
        business head shots, editorial/themed, family portraits, graduation/senior photos, 
        baby showers, and weddings.
    </p>
    <h3>Covid info</h3>
    <p>
        During session, I will be wearing a face mask at all times. Please keep number of people
        limited if session is indoors. Mostly asking for outdoor sessions to keep everyone's safety
        a priority.
    </p>
    <h3>FAQ's </h3>
    <ul>
        <li>How long can sessions be?</li>
        <p>--Any length of time as long as scheduled in appropriate time</p>
        <li>How much does it cost?</li>
        <p>--Depends on event but typically...</p>
        <li>Do you do wedding videos?</li>
        <p>--Yes! Along with advertisement videos and reels</p>
    </ul>
    </section>
</main>
<?php include('inc/footer.php') ?>
