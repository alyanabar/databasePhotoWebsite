<?php 
  $pageTitle = "Alexa Leya Photography";
  include('inc/header.php');
  include('inc/functions.php');
  require_once("inc/open_db.php");
?>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php" id="current_page">Gallery</a></li>
        <li><a href="pre_schedule.php">Schedule</a></li>
    </ul>
</nav>
<main></main>
<?php include('inc/footer.php') ?>