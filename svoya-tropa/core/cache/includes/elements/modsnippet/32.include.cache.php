<?php
$page = $modx->getObject('modResource', $id);
$pagetitle = $page->get('pagetitle');
$content = $page->get('content');

$out = "<a href='$content' target='_blank'>$pagetitle</a>";
return $out;
return;
