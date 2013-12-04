<?php

/**
 * OblationTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OblationTable extends Doctrine_Table
{
	/**
	 * Returns an instance of this class.
	 *
	 * @return object OblationTable
	 */
	public static function getInstance()
	{
		return Doctrine_Core::getTable('Oblation');
	}
	public function getListOnPage($page=1,$limit=18){
		$page = $page<=0?1:$page;
		return $this->createQuery()->offset(($page-1)*$limit)->limit($limit);
	}
}