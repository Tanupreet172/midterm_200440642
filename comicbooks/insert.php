<?php

  require_once('../_config.php');

  /*
    OBJECTIVE:
      1: Connect to the database and insert the values from the passed form
      data (you must include the _connect.php and use the connect function).
      
      2: Set a session variable called 'notification' with a success message (if the insert was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */
  include_once('_utilities/_connect.php');
  $conn = connect();

  $sql = "INSERT INTO comicbooks (
    Title,
    Description,
    Year

    
) VALUES (
    '{$_POST['Title']}',
    '{$_POST['Description']}',
    {$_POST['Year']}
    

)";
$res = mysqli_query($conn, $sql);
session_start();

if($res){
  // we are successful//isset($conn)?value:value; $_POST['name']??null;
  $_SESSION['notification']= "The new comic was created successfully.";
}
else{
  // we failed miserably
  $_SESSION['notification'] = "There was an error creating this comic:".mysqli_error($conn);
}

// redirect to the notifcation.php page
header("Location: ../notification.php");
exit;//die;
?>