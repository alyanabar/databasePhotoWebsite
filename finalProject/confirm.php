<?php 
session_start();
  $pageTitle = "Alexa Leya Photography";
  include('inc/header.php');
  include('inc/functions.php');
  require_once("inc/open_db.php");

  if(isset($_POST['confirm'])){
      echo $_POST;
    add_scheduledItems($db, $_SESSION['current_user'], $_POST['event_type'], $_POST['availDate']);
    unset($_POST['confirm']);
  }
?>
<h2>Confirmation</h2>
<p>Your event type and date has been scheduled!</p>
<form action='gallery.php'> 
    <input type="submit" value="Back to Gallery">
</form>
<?php include('inc/footer.php') ?>
