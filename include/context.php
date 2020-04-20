<?php
	# create auth.php with $password m5 string
	include 'include/auth.php';

	# set timezone for generating ids
	date_default_timezone_set('Europe/Bucharest');

	$self = $_SERVER['PHP_SELF'];
	$auth = False;
	if (!empty($_COOKIE['auth']) and $_COOKIE['auth'] === $password) {
		$auth = True;
	}

	function get_notes() {
		return json_decode(file_get_contents('data/notes.json'), true);
	}

	function put_notes($notes) {
		copy('data/notes.json', 'data/backup.json');
		krsort($notes);
		file_put_contents('data/notes.json', json_encode(
			$notes, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
		));
	}

	function ago($past) {
		$time = time() - $past;
		$time = ($time < 1) ? 1 : $time;
		$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
		);
		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = round($time / $unit);
			return $numberOfUnits.' '.$text.(($numberOfUnits > 1) ? 's' : '');
		}
	}

	function redirect($loc = '') {
		if ($loc) {
			header('Location: '.$loc);
		} else {
			$ref = $_SERVER['HTTP_REFERER'];
			$r = empty($ref) ? '/' : $ref;
			header('Location: '.$r);
		}
		exit;
	}
?>
