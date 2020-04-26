<?php
	include 'include/context.php';

	$notes = get_notes();
	$count = count($notes);
	$ids = array_keys($notes);
	$get_id = isset($_GET['id']) ? $_GET['id'] : null;
	$id = is_numeric($get_id) ? $get_id : $ids[0];
	$note = $notes[$id];

	foreach ($ids as $index => $key) {
		if ($key == $id and $index != 0) {
			$next_id = $ids[$index - 1];
		}
		if ($key == $id and $index != $count - 1) {
			$previous_id = $ids[$index + 1];
		}
	}
?>

<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
	<div class="content">
			<div class="meta">
				<?php if (isset($previous_id)): ?>
					<a href="/note.php?id=<?= $previous_id ?>">Previously</a>
				<?php endif; ?>
				<?php if (isset($previous_id) and isset($next_id)): ?>
					<b>&frasl;</b>
				<?php endif; ?>
				<?php if (isset($next_id)): ?>
					<a href="/note.php?id=<?= $next_id ?>">Up next</a>
				<?php endif; ?>
			</div>
		</div>
		<?php include 'include/item.php'; ?>
	</div>
</div>

<?php include 'include/footer.php'; ?>
