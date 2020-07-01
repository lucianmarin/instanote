<?php
	include 'include/context.php';

	$posts = get_notes();

	if (isset($_GET['p']) and abs($_GET['p'])) {
		$page = abs($_GET['p']);
	} else {
		$page = 1;
	}
	$limit = 5;
	$offset = $limit * ($page - 1);
	$count = count($posts);
	$pages = ceil($count / $limit);

	$posts = array_slice($posts, $offset, $limit, true);
?>

<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
		<?php foreach ($posts as $id => $note): ?>
			<?php include 'include/item.php'; ?>
		<?php endforeach; ?>

		<div class="entry">
			<div class="pages">
				<?php foreach (range(1, $pages) as $number): ?>
					<a class="<?php if ($number == $page): ?>selected<?php endif; ?>" href="/?p=<?= $number ?>"><?= $number ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<?php include 'include/footer.php'; ?>
