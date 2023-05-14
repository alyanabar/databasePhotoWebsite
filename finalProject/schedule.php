<?php 
  $pageTitle = "Alexa Leya Photography";
  include('inc/header.php');
  include('inc/functions.php');
  require_once("inc/open_db.php");
  session_start();
  
  if(!isset($_SESSION['current_user'])) {
      echo "<script type='text/javascript'>alert('You must be logged in to view this page'); location='index.php'</script>";
  }

?>
<!-- need to have a events drop down bar, a list of available dates, and a confirm button -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="schedule.php" id="current_page">Schedule</a></li>
    </ul>
</nav>
<main>
    <form action="confirm.php" method="post"> 
        Please select the event type:<br>
    <select name="event_type"> 
        <?php
        $names = get_eventType($db);
        foreach($names as $name) {
            $thisname = $name['eventName'];
            echo "<option value='"$thisname"'>$thisname</option>";
        }
        ?>
    </select><br><br>
        Please select date of event: <br>
    <select name="availDate"> 
        <?php
        $dates = get_availableDates($db);
        foreach($dates as $date) {
            $thisdate = $date['availDate'];
            echo "<option value='$thisdate'>$thisdate</option>";
        }
        ?>
    </select><br><br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</main>
<?php include('inc/footer.php') ?>