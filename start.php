<?php

function wlug_theme_init() {
	elgg_extend_view('css', 'wlug_theme/css');
}

register_elgg_event_handler('init', 'system', 'wlug_theme_init');