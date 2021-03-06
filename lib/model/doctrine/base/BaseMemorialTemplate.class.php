<?php

/**
 * BaseMemorialTemplate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $price
 * @property boolean $is_free
 * @property string $jng_path
 * @property string $lw_name
 * @property string $lw_path
 * @property string $gm_name
 * @property string $gm_path
 * @property Doctrine_Collection $Memorial
 * 
 * @method string              getName()     Returns the current record's "name" value
 * @method integer             getPrice()    Returns the current record's "price" value
 * @method boolean             getIsFree()   Returns the current record's "is_free" value
 * @method string              getJngPath()  Returns the current record's "jng_path" value
 * @method string              getLwName()   Returns the current record's "lw_name" value
 * @method string              getLwPath()   Returns the current record's "lw_path" value
 * @method string              getGmName()   Returns the current record's "gm_name" value
 * @method string              getGmPath()   Returns the current record's "gm_path" value
 * @method Doctrine_Collection getMemorial() Returns the current record's "Memorial" collection
 * @method MemorialTemplate    setName()     Sets the current record's "name" value
 * @method MemorialTemplate    setPrice()    Sets the current record's "price" value
 * @method MemorialTemplate    setIsFree()   Sets the current record's "is_free" value
 * @method MemorialTemplate    setJngPath()  Sets the current record's "jng_path" value
 * @method MemorialTemplate    setLwName()   Sets the current record's "lw_name" value
 * @method MemorialTemplate    setLwPath()   Sets the current record's "lw_path" value
 * @method MemorialTemplate    setGmName()   Sets the current record's "gm_name" value
 * @method MemorialTemplate    setGmPath()   Sets the current record's "gm_path" value
 * @method MemorialTemplate    setMemorial() Sets the current record's "Memorial" collection
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMemorialTemplate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('memorial_template');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('price', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => '0',
             ));
        $this->hasColumn('is_free', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('jng_path', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('lw_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('lw_path', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('gm_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('gm_path', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Memorial', array(
             'local' => 'id',
             'foreign' => 'template_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}