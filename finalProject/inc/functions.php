<?php 
    
    function verify_login($db, $username, $password)
    {
      $query = "SELECT user_password FROM users WHERE username = :user";
      $statement = $db->prepare($query);
      $statement->bindValue(':user', $username);
      $statement->execute();
      $result = $statement->fetch();
      $statement->closeCursor();
      $hash = $result['user_password'];
      return password_verify($password, $hash);
    }
    
    function existing_username($db, $username)
    {
      $query = "SELECT COUNT(username) FROM users WHERE username = :username";
      $statement = $db->prepare($query);
      $statement->bindValue(':username', $username);
      $statement->execute();
      $exists = $statement->fetch();
      $statement->closeCursor();
      return $exists[0] == 1;
    }

    function addUser($db, $username, $password) {
      $query = "INSERT INTO users (username, user_password)
                VALUES (:username, :password)";
      $statement = $db->prepare($query);
      $statement->bindValue(':username', $username);
      $statement->bindValue(':password', $password);
      $success = $statement->execute();
      $statement->closeCursor();     
      return $success;
    }
    
     
    function validPassword($password){
      $valid_pattern = '/(?=^.{8,}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*$/';
      if (preg_match($valid_pattern, $password))
        return true;
      else
        return false;
    }
    
    function get_eventType($db){
      $query = 'SELECT * FROM event_type';
      $statement = $db->prepare($query);
      $statement->execute();
      $results = $statement->fetchAll(PDO::FETCH_ASSOC);
      $statement->closeCursor();
      return $results;
    }
    
    function get_availableDates($db){
      $query = 'SELECT * FROM available_dates';
      $statement = $db->prepare($query);
      $statement->execute();
      $results = $statement->fetchAll(PDO::FETCH_ASSOC);
      $statement->closeCursor();
      return $results;
    }
    
    function add_scheduledItems($db, $username, $eventName, $date) {
      $query = "INSERT INTO scheduled (username, eventName, photoDate) VALUES (:username, :eventName, :date)";
      $statement = $db->prepare($query);
      $statement->bindValue(':username', $username);
      $statement->bindValue(':eventName', $eventName);
      $statement->bindValue(':date', $date);
      $statement->execute();
      $statement->closeCursor();
    }

?>


