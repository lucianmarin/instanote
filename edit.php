<?php
	include 'include/context.php';

	if (!$auth) { redirect(); }

	$notes = get_notes();
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$new = null;

	if ($id) {
		$new = $notes[$id];
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$note['url'] = $_POST['url'];
		$note['title'] = $_POST['title'];
		$note['quote'] = $_POST['quote'];
		$note['note'] = $_POST['note'];

		$id = $_POST['id'] ? $_POST['id'] : time();
		$path = '/note.php?id='.$id;

		$notes[$id] = $note;
		put_notes($notes);

		header('Location: '.$path);
		exit;
	}
?>

<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>

<script>
	function bodyLoad() {
		var desc = document.getElementById('desc');
		var note = document.getElementById('note');
		expand(desc);
		expand(note);
	}
</script>

<div class="main">
	<div class="center">
		<form action="<?= $self ?>" method="post" autocomplete="off">
			<input type="url" name="url" placeholder="URL" value="<?= $new['url'] ?>" required />
			<input type="text" name="title" placeholder="Title" value="<?= $new['title'] ?>" required />
			<textarea id="desc" name="quote" placeholder="Quote" rows="4" cols="80" oninput="expand(this)" onkeydown="prevent(event)"><?= $new['quote'] ?></textarea>
			<textarea id="note" class="last" name="note" placeholder="Note" rows="1" cols="80" oninput="expand(this)" onkeydown="prevent(event)"><?= $new['note'] ?></textarea>
			<input type="hidden" name="id" value="<?= $id ?>" />
			<input type="submit" value="<?php if ($id): ?>Update<?php else: ?>Publish<?php endif; ?>" />
		</form>
	</div>
</div>

<?php include 'include/footer.php'; ?>
