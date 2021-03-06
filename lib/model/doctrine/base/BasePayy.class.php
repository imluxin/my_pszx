<?php

/**
 * BasePayy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $col1
 * @property boolean $col2
 * 
 * @method string  getCol1() Returns the current record's "col1" value
 * @method boolean getCol2() Returns the current record's "col2" value
 * @method Payy    setCol1() Sets the current record's "col1" value
 * @method Payy    setCol2() Sets the current record's "col2" value
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePayy extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('payy');
        $this->hasColumn('col1', 'string', 10, array(
             'type' => 'string',
             'unique' => true,
             'length' => 10,
             ));
        $this->hasColumn('col2', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}