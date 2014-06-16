<?php

/**
 * @file
 * template.php
 */


function george_preprocess_page(&$vars) { 
	if (current_path() == "user") {
		$vars['theme_hook_suggestions'][] = 'page__test'; 
	} 
}