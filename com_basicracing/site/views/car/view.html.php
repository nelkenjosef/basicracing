<?php

// no direct access to this file
defined('_JEXEC') or die('Restricted access');

// import necessary classes
jimport('joomla.application.component.view');

class BasicRacingViewCar extends JViewLegacy
{
	function display($tpl = null)
	{
		// assign data to the view
		$this->item = 'Car';

		// display the view
		parent::display($tpl);
	}
}