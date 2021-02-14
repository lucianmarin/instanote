<?php
	include 'include/context.php';

	$q = isset($_GET['q']) ? $_GET['q'] : '';
	$notes = get_notes();
	$results = array();
	$limit = 24;

	if ($q) {
		foreach ($notes as $id => $note) {
			$content = sprintf(
				"%s %s %s %s",
				$note['url'], $note['title'], $note['quote'], $note['note']
			);
			if (strpos(strtolower($content), strtolower($q))) {
				$results[$id] = $note;
			}
		}
		$label = count($results) . ' search results';
	} else {
		$results = $notes;
		$label = $limit . ' recent notes';
	}

	$results = array_slice($results, 0, $limit, true);
?>

<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
		<form class="search" action="/search.php" method="get" autocomplete="off">
			<input name="q" type="text" value="<?= $q ?>" placeholder="Keywords" autofocus onfocus="this.selectionStart = this.selectionEnd = this.value.length" />
		</form>
		<?php foreach ($results as $id => $note): ?>
			<?php include 'include/compact.php'; ?>
		<?php endforeach; ?>
		<div class="status"><?= $label ?></div>
	</div>
</div>

<?php include 'include/footer.php'; ?>
