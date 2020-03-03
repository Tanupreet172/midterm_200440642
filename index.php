<?php require_once('./_config.php') ?>

<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    <?php include_once('_partials/_header.php'); ?>
    <?php include_once('_partials/_footer.php'); ?>
    <?php include_once('_utilities/_connect.php'); ?>
    2: Fetch all the comicbooks rows from the database and display them in a table.

 <?php
 $conn = connect();
  $result = mysqli_query($conn, "SELECT * FROM comicbooks");// select all columns from countries

$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
var_dump($rows);
$result = mysqli_query($conn,$sql);
//var_dump($result);

// var_dump($rows);
?>
?>


    3: Create two links for each row that point to the edit.php and delete.php files. These links must provide a query parameter called 'id' with the row's id column's value.
-->


<header>
  <h1 class="display-1">Comicbooks</h1>
  <hr>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Title</th>
			<th>Description</th>
			<th>Year</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
  <?php
  
    //foreach to iterate over array items
    foreach($rows as $row){
     echo"<tr>";
     echo"<td>{$row['title']}</td>";
     echo"<td>{$row['description']}</td>";
     echo"<td>{$row['year']}</td>";
     echo"<td>";
     echo"<td><a href='./comicbooks/edit.php?id={$row['id']}'>edit</a></td>";
     echo"|";
     echo"<td><a href='./comicbooks/delete.php?id={$row['id']}'>delete</a></td>";

     echo"</td>";
     echo"<tr>";

    }
    
    ?>
  </tbody>
</table>