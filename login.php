<?php
    include 'include/context.php';
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
    <div class="center">
        <form action="set.php" method="post" autocomplete="off">
            <input type="password" name="key" placeholder="Keyphrase" required>
            <input type="submit" value="Login">
        </form>
    </div>
</div>

<? include 'include/footer.php'; ?>
