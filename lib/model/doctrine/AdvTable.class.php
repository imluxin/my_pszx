<?php

/**
 * AdvTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AdvTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AdvTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Adv');
    }
    
    public function getAdv($adv) {
    	$query = $this->createQuery();
		$query->whereIn('id',$adv);
		return $query->execute();
    }
}