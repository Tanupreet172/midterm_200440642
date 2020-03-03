<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>
<?php
$conn = connect();
$result = mysqli_query($conn, "SELECT * FROM comicbooks WHERE id = {$_GET['id']}");
  $row = mysqli_fetch_assoc($result);



?>
<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
	
    2: Select the row using the provided ID.
    3: Add the missing hidden field.
    4: Pre-populate the form with the values from the selected row.
    5: Ensure you're sending the form data to the update.php page.
-->

<header>
  <h1 class="display-1">Edit Comicbooks</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/comicbooks/update.php' method='post'>
	<div class='form-group'>
		<label>Title</label>
		<input class="form-control" type="text" name="title" value="<?= $row['title']?>">
	</div>

	<div class='form-group'>
		<label>Description</label>
		<input class="form-control" type="text" name="description" value="<?= $row['description']?>">
	</div>

	<div class='form-group'>
		<label>Year</label>
		<input class="form-control" type="number" name="year" value="<?= $row['year']?>">
	</div>

	<div class='form-group'>
		
		<input class="form-control" type="hidden" name="id" value="<?= $row['id']?>">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>