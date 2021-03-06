<?php

/**
 * BaseBunddlaHall
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $user_name
 * @property string $name
 * @property string $hp_img
 * @property string $images
 * @property string $zhuozi
 * @property text $description
 * @property boolean $is_rejected
 * @property boolean $is_approved
 * @property string $last_modify
 * @property integer $view
 * @property integer $xh
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $BunddlaHallHistory
 * 
 * @method integer             getUserId()             Returns the current record's "user_id" value
 * @method string              getUserName()           Returns the current record's "user_name" value
 * @method string              getName()               Returns the current record's "name" value
 * @method string              getHpImg()              Returns the current record's "hp_img" value
 * @method string              getImages()             Returns the current record's "images" value
 * @method string              getZhuozi()             Returns the current record's "zhuozi" value
 * @method text                getDescription()        Returns the current record's "description" value
 * @method boolean             getIsRejected()         Returns the current record's "is_rejected" value
 * @method boolean             getIsApproved()         Returns the current record's "is_approved" value
 * @method string              getLastModify()         Returns the current record's "last_modify" value
 * @method integer             getView()               Returns the current record's "view" value
 * @method integer             getXh()                 Returns the current record's "xh" value
 * @method sfGuardUser         getSfGuardUser()        Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getBunddlaHallHistory() Returns the current record's "BunddlaHallHistory" collection
 * @method BunddlaHall         setUserId()             Sets the current record's "user_id" value
 * @method BunddlaHall         setUserName()           Sets the current record's "user_name" value
 * @method BunddlaHall         setName()               Sets the current record's "name" value
 * @method BunddlaHall         setHpImg()              Sets the current record's "hp_img" value
 * @method BunddlaHall         setImages()             Sets the current record's "images" value
 * @method BunddlaHall         setZhuozi()             Sets the current record's "zhuozi" value
 * @method BunddlaHall         setDescription()        Sets the current record's "description" value
 * @method BunddlaHall         setIsRejected()         Sets the current record's "is_rejected" value
 * @method BunddlaHall         setIsApproved()         Sets the current record's "is_approved" value
 * @method BunddlaHall         setLastModify()         Sets the current record's "last_modify" value
 * @method BunddlaHall         setView()               Sets the current record's "view" value
 * @method BunddlaHall         setXh()                 Sets the current record's "xh" value
 * @method BunddlaHall         setSfGuardUser()        Sets the current record's "sfGuardUser" value
 * @method BunddlaHall         setBunddlaHallHistory() Sets the current record's "BunddlaHallHistory" collection
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBunddlaHall extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bunddla_hall');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('hp_img', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('images', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('zhuozi', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('is_rejected', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('is_approved', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('last_modify', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('view', 'integer', null, array(
             'type' => 'integer',
             'default' => '0',
             ));
        $this->hasColumn('xh', 'integer', null, array(
             'type' => 'integer',
             'default' => '0',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('BunddlaHallHistory', array(
             'local' => 'id',
             'foreign' => 'bh_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}