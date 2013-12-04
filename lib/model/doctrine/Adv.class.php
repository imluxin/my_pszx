<?php

/**
 * Adv
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Adv extends BaseAdv
{
	static public function getFileDir() {
		return sfConfig::get('sf_upload_dir') . '/adv';
	}

	public function getPublicFileLocation() {
		return str_replace(sfConfig::get('sf_web_dir'), '', self::getFileDir()) . '/' . $this->getImages();
	}
}