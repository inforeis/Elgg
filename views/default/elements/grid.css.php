<?php
/**
 * CSS grid
 *
 * @package Elgg.Core
 * @subpackage UI
 *
 * To work around subpixel rounding discrepancies, apply .elgg-col-last to
 * the last column
 * @todo we need broswer-specific test cases for this
 * @todo this should go away as soon as Opera switches to Webkit
 */
?>

/* ***************************************
	Grid
*************************************** */

/*<style>/**/

.elgg-col {
	float: left;
}
.elgg-col-alt {
	float: right;
}
.elgg-col-1of1 {
	float: none;
}
.elgg-col-1of2 {
	width: 50%;
}
.elgg-col-1of3 {
	width: 33.33%;
}
.elgg-col-2of3 {
	width: 66.66%;
}
.elgg-col-1of4 {
	width: 25%;
}
.elgg-col-3of4 {
	width: 75%;
}
.elgg-col-1of5 {
	width: 20%;
}
.elgg-col-2of5 {
	width: 40%;
}
.elgg-col-3of5 {
	width: 60%;
}
.elgg-col-4of5 {
	width: 80%;
}
.elgg-col-1of6 {
	width: 16.66%;
}
.elgg-col-5of6 {
	width: 83.33%;
}

@media (max-width: 820px) {
	/***** CUSTOM INDEX ******/
	.elgg-col-1of2 {
		float: none;
		width: 100%;
	}
	/***** WIDGETS ******/
	.elgg-col-1of3,
	.elgg-col-2of3 {
		float: none;
		min-height: 0 !important;
		width: 100%;
	}
}
