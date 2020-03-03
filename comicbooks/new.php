<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<header>
  <h1 class="display-1">New Comicbooks</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/comicbooks/insert.php' method='post'>
	<div class='form-group'>
		<label>Title</label>
		<input class="form-control" type="text" name="Title">
	</div>

	<div class='form-group'>
		<label>Description</label>
		<input class="form-control" type="text" name="Description">
	</div>

	<div class='form-group'>
		<label>Year</label>
		<input class="form-control" type="number" name="Year">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>