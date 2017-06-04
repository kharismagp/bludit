<?php defined('BLUDIT') or die('Bludit CMS.');

// ============================================================================
// Check role
// ============================================================================

// ============================================================================
// Functions
// ============================================================================

function printTable($title, $array) {
	echo '<h2>'.$title.'</h2>';
	echo '
		<table class="uk-table uk-table-striped">
		<thead>
			<tr>
			<th class="uk-width-1-5"></th>
			<th class="uk-width-3-5"></th>
			</tr>
		</thead>
		<tbody>
	';

	foreach($array as $key=>$value) {
		if($value===false) { $value = 'false'; }
		elseif($value===true) { $value = 'true'; }
		echo '<tr>';
		echo '<td>'.$key.'</td>';
		echo '<td>'.Sanitize::html($value).'</td>';
		echo '</tr>';
	}

	echo '
		</tbody>
		</table>
	';
}

// ============================================================================
// Main before POST
// ============================================================================

// ============================================================================
// POST Method
// ============================================================================

// ============================================================================
// Main after POST
// ============================================================================
