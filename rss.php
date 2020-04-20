<?php
	header("Content-type: application/rss+xml");
	echo '<?xml version="1.0" encoding="utf-8" ?>';
	include 'include/context.php';
	$notes = get_notes();
	$notes = array_slice($notes, 0, 10, true);
	$last_id = array_keys($notes)[0];
?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title>Lucian Marin</title>
		<description>Notes by Lucian Marin</description>
		<link>https://lucianmarin.com/</link>
		<language>en-us</language>
		<pubDate><?= date('r', $last_id) ?></pubDate>
		<lastBuildDate><?= date('r', $last_id) ?></lastBuildDate>
<? foreach ($notes as $id => $note): ?>
		<item>
			<title><?= $note['title'] ?></title>
			<description><?= $note['quote'] ?></description>
			<link><?= $note['url'] ?></link>
			<pubDate><?= date('r', $id) ?></pubDate>
			<guid>https://lucianmarin.com/note.php?id=<?= $id ?></guid>
		</item>
<? endforeach; ?>
	</channel>
</rss>
