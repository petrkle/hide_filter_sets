<?php

class hide_filter_sets extends rcube_plugin
{
	function init()
	{
		$rcmail = rcube::get_instance();
		if ($rcmail->output->type == 'html') {
			$this->include_stylesheet('hide_filter_sets.css');
		}
	}
}
