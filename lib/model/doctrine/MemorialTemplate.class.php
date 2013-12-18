<?php

/**
 * MemorialTemplate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class MemorialTemplate extends BaseMemorialTemplate
{
	public function getNameWithPrice()
	{
		return $this->getName().' ('.$this->getPrice().'金币)';
	}
	
	public function getPicture($field, $full = false)
	{
		$image = $this->_get($field);
		$match = preg_match('^(http|https)://^', $image);
		if ($match){
			return $image;
		}else {
			if ($full){
				return '/uploads/memorial/template/'.$image;
			}
			else {
				return $image;
			}
		}
	}
}