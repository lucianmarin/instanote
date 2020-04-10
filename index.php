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

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
		<? foreach ($posts as $id => $note): ?>
			<? include 'include/item.php'; ?>
		<? endforeach; ?>
		<div class="content">
			<div class="pages">
				<? foreach (range(1, $pages) as $number): ?>
					<a class="<? if ($number == $page): ?>selected<? endif; ?>" href="/?p=<?= $number ?>"><?= $number ?></a>
				<? endforeach; ?>
			</div>
		</div>
	</div>
</div>

<? include 'include/footer.php'; ?>
