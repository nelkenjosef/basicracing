<?php

// no direct access to this file
defined('_JEXEC') or die('Restricted access');

// import necessary classes
jimport('joomla.application.component.controller');

// get an instance of the controller with prefix
$controller = JControllerLegacy::getInstance('BasicRacing', 'car');

// perform the request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// redirect if set by the controller
$controller->redirect();
