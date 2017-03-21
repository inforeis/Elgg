<?php
/**
 * Update profile river view
 */

$item = $vars['item'];
/* @var ElggRiverItem $item */

$subject = $item->getSubjectEntity();

$subject_link = elgg_view('output/url', [
	'href' => $subject->getURL(),
	'text' => $subject->name,
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
]);

$string = elgg_echo('river:update:user:profile', [$subject_link]);

echo elgg_view('river/elements/layout', [
	'item' => $item,
	'summary' => $string,

	// truthy value to bypass responses rendering
	'responses' => ' ',
]);
