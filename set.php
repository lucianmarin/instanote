<?php
	include "include/context.php";

	$expire = time() + (3600 * 24 * 365);

	if (isset($_POST['key']) and md5($_POST['key']) === $password) {
		setcookie('auth', $password, $expire, '/');
		redirect('/');
	}

	if (isset($_GET['dark']) and $_GET['dark'] === "on") {
		setcookie('dark', 'on', $expire, '/');
	}

	if (isset($_GET['logout'])) {
		setcookie('auth', '', 1, '/');
	}

	if (isset($_GET['clear'])) {
		setcookie('dark', '', 1, '/');
	}

	redirect();
?>
