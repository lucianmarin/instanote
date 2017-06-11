<?php
    include 'include/context.php';

	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$posts = restore();
	$length = count($posts);
	$found = false;

    foreach ($posts as $key => $item) {
	    if ($item['created'] == $id) {
		    $post = $item;
		    $found = true;
		    if ($key != 0) {
			    $next = $posts[$key - 1];
		    }
		    if ($key + 1 != $length) {
			    $previous = $posts[$key + 1];
		    }
	    }
    }

    if (!$found) {
	    $post = $posts[0];
    }
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
		<? include 'include/item.php'; ?>
		<div class="content">
			<div class="meta">
				<? if (isset($previous)): ?>
			        <a class="link" href="/note.php?id=<?= $previous['created'] ?>">
				        previously
				    </a>
				<? endif; ?>
				<? if (isset($previous) and isset($next)): ?>
					<b>&frasl;</b>
				<? endif; ?>
				<? if (isset($next)): ?>
			        <a class="link" href="/note.php?id=<?= $next['created'] ?>">
				        up next
				    </a>
				<? endif; ?>
			</div>
		</div>
	</div>
</div>

<? include 'include/footer.php'; ?>
