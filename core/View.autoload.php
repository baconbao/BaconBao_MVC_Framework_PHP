<?php

class View
{
    public function render($filename, $render_without_header_and_footer = false)
    {
		require_once VIEWS_PATH . $filename . '.php';
    }
}