<?php
    include 'include/context.php';

    if (!$auth) { redirect(); }

	$id = isset($_GET['id']) ? $_GET['id'] : 0;
    $new = null;
    $path = '';

    if ($id) {
	    foreach (restore() as $item) {
		    if ($item['created'] == $id) {
			    $new = $item;
		    }
	    }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' and $auth) {
        $post['url'] = stripslashes($_POST['url']);
        $post['title'] = stripslashes($_POST['title']);
        $post['quote'] = stripslashes($_POST['quote']);
    	$post['note'] = stripslashes($_POST['note']);
    	$post['created'] = time();

		$posts = restore();
    	$id = $_POST['id'];

    	if ($id) {
	    	$post['created'] = intval($id);
	    	$posts = without($posts, $id);
	    	$path = 'note.php?id='.$id;
    	}

        array_push($posts, $post);
        store($posts);

        header('Location: /'.$path);
        exit;
    }
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
	    <form action="<?= $self ?>" method="post" autocomplete="off">
	        <input type="url" name="url" placeholder="URL"
	        	value="<?= $new['url'] ?>" required />
	        <input type="text" name="title" placeholder="Title"
	        	value="<?= $new['title'] ?>" required />
	        <textarea name="quote" placeholder="Quote" rows="4" cols="80"
	        	oninput="expand(this)" onkeydown="prevent(event)"><?= $new['quote'] ?></textarea>
	        <textarea name="note" placeholder="Note" rows="1" cols="80"
	        	oninput="expand(this)" onkeydown="prevent(event)"
	        	class="last"><?= $new['note'] ?></textarea>
	        <input type="hidden" name="id" value="<?= $new['created'] ?>" />
	        <input type="submit" value="Publish" />
	    </form>
	</div>
</div>

<? include 'include/footer.php'; ?>
