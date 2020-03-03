<?php

  require_once('../_config.php');

    /*
    OBJECTIVE:
      1: Connect to the database and update the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the update was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */
  
  include_once('_utilities/_connect.php');
  $conn = connect();
  $sql = "UPDATE comicbooks SET
  title ='{$_POST['title']}',
  description ='{$_POST['description']}',
  year ={$_POST['year']}
 WHERE id ={$_POST['id']}";

$res = mysqli_query($conn, $sql);
session_start();
  
if ($res) {
  // We were successful
  echo "The comic was updated successfully.";
} else {
  // We failed
  echo "There was an error updating the comic. " . mysqli_error($conn);
}

// redirect to the notifcation.php page
header("Location: ../notification.php");
exit;//die;

?>