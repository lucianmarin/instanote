<?php
    include 'include/context.php';

    $q = isset($_GET['q']) ? $_GET['q'] : '';
    $posts = restore();
    $results = array();

    if ($q) {
        foreach ($posts as $post) {
            $content = sprintf("%s %s %s %s", $post['url'], $post['title'], $post['quote'], $post['note']);
            if (strpos(strtolower($content), strtolower($q))) {
                array_push($results, $post);
            }
        }
        $count = count($results);
        $label = 'results';
        $results = array_slice($results, 0, 5, true);
    } else {
        foreach (array_rand($posts, 5) as $key) {
            array_push($results, $posts[$key]);
        }
        $count = 5;
        $label = 'random';
    }
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
    <div class="center">
        <form class="search" action="/search.php" method="get" autocomplete="off">
            <input name="q" type="text" value="<?= $q ?>" placeholder="Keywords" autofocus onfocus="this.selectionStart = this.selectionEnd = this.value.length" />
        </form>
        <? foreach ($results as $post): ?>
            <? include 'include/item.php'; ?>
        <? endforeach; ?>
        <div class="info"><?= $count.' '.$label ?></div>
    </div>
</div>

<? include 'include/footer.php'; ?>
