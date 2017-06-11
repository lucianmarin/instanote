<?php
    include 'include/context.php';

    if (!$auth) { redirect(); }

    if (isset($_GET['id']) and $auth) {
	    $posts = restore();
	    $posts = without($posts, $_GET['id']);
	    store($posts);
    }

    redirect();
?>
