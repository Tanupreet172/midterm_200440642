<?php

  require_once('../_config.php');

  // Our database connection
  require_once('_utilities/_connect.php');
  $conn = connect();

  // deleting our row in the comicbooks table
  $sql = "DELETE FROM comicbooks WHERE id = {$_GET['id']}";
  $res = mysqli_query($conn, $sql);

  session_start();

  if ($res) {
    // We were successful
    $_SESSION['notification'] = "The new comicbooks was deleted successfully.";
  } else {
    // We failed
    $_SESSION['notification'] = "There was an error deleting the comicbooks: " . mysqli_error($conn) . "<br>SQL: {$sql}";
  }

  header("Location: ".BASE_PATH."/notification.php");
  exit;

?>