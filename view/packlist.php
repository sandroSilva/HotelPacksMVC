<?php

header("Content-type: application/xml; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

echo '<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<packs>'."\n";
	foreach ($packs as $title_pack => $pack) {
		echo '<pack title_pack="'.$pack->title_pack.'" date_pack="'.$pack->date_pack.'" amount_pack="'.$pack->amount_pack.'"/>'."\n";
	}	
echo '</packs>';
?>