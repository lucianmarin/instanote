<?php
    include 'include/context.php';

    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    if ($auth and $id) {
        $posts = restore();
        $posts = without($posts, $id);
        store($posts);
    }

    redirect();
?>
