<?php defined('SYSPATH') OR die('No direct script access!'); 

class Kohana_Breadcrumbs_Item {
	
	public $url = false;
	
	public $name = '';
	
	public $active = false;
	
	public function __construct($urls, $name, $url = NULL, $active = false)
	{
		if(empty($name))
		{
			throw new Kohana_Exception('Breadcrumbs: The breadcrumb name could not be empty!');
		}
		$this->name = $name;
		if($urls && $url !== false)
		{
			if(empty($url))
			{
				$url = $name;
			}
			$this->set_url($url);
		}
		$this->active = $active;
		
	}
	
	protected function set_url($url)
	{
		$this->url = url::site($url);
	}
	
}