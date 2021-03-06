<?php

/**
 * BaseMemorial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $user_name
 * @property integer $category_id
 * @property string $m_name
 * @property boolean $is_secret
 * @property boolean $is_single
 * @property string $die_name_one
 * @property string $die_province_one
 * @property string $die_city_one
 * @property string $die_birth_one
 * @property string $die_die_one
 * @property string $die_nickname_one
 * @property string $die_photo_one
 * @property string $die_name_two
 * @property string $die_province_two
 * @property string $die_city_two
 * @property string $die_birth_two
 * @property string $die_die_two
 * @property string $die_nickname_two
 * @property string $die_photo_two
 * @property text $description
 * @property boolean $is_rejected
 * @property boolean $is_approved
 * @property string $last_modify
 * @property integer $template_id
 * @property integer $view
 * @property integer $xh
 * @property sfGuardUser $sfGuardUser
 * @property MemorialCategory $MemorialCategory
 * @property MemorialTemplate $MemorialTemplate
 * @property Doctrine_Collection $MemorialMessage
 * @property Doctrine_Collection $MemorialHistory
 * 
 * @method integer             getUserId()           Returns the current record's "user_id" value
 * @method string              getUserName()         Returns the current record's "user_name" value
 * @method integer             getCategoryId()       Returns the current record's "category_id" value
 * @method string              getMName()            Returns the current record's "m_name" value
 * @method boolean             getIsSecret()         Returns the current record's "is_secret" value
 * @method boolean             getIsSingle()         Returns the current record's "is_single" value
 * @method string              getDieNameOne()       Returns the current record's "die_name_one" value
 * @method string              getDieProvinceOne()   Returns the current record's "die_province_one" value
 * @method string              getDieCityOne()       Returns the current record's "die_city_one" value
 * @method string              getDieBirthOne()      Returns the current record's "die_birth_one" value
 * @method string              getDieDieOne()        Returns the current record's "die_die_one" value
 * @method string              getDieNicknameOne()   Returns the current record's "die_nickname_one" value
 * @method string              getDiePhotoOne()      Returns the current record's "die_photo_one" value
 * @method string              getDieNameTwo()       Returns the current record's "die_name_two" value
 * @method string              getDieProvinceTwo()   Returns the current record's "die_province_two" value
 * @method string              getDieCityTwo()       Returns the current record's "die_city_two" value
 * @method string              getDieBirthTwo()      Returns the current record's "die_birth_two" value
 * @method string              getDieDieTwo()        Returns the current record's "die_die_two" value
 * @method string              getDieNicknameTwo()   Returns the current record's "die_nickname_two" value
 * @method string              getDiePhotoTwo()      Returns the current record's "die_photo_two" value
 * @method text                getDescription()      Returns the current record's "description" value
 * @method boolean             getIsRejected()       Returns the current record's "is_rejected" value
 * @method boolean             getIsApproved()       Returns the current record's "is_approved" value
 * @method string              getLastModify()       Returns the current record's "last_modify" value
 * @method integer             getTemplateId()       Returns the current record's "template_id" value
 * @method integer             getView()             Returns the current record's "view" value
 * @method integer             getXh()               Returns the current record's "xh" value
 * @method sfGuardUser         getSfGuardUser()      Returns the current record's "sfGuardUser" value
 * @method MemorialCategory    getMemorialCategory() Returns the current record's "MemorialCategory" value
 * @method MemorialTemplate    getMemorialTemplate() Returns the current record's "MemorialTemplate" value
 * @method Doctrine_Collection getMemorialMessage()  Returns the current record's "MemorialMessage" collection
 * @method Doctrine_Collection getMemorialHistory()  Returns the current record's "MemorialHistory" collection
 * @method Memorial            setUserId()           Sets the current record's "user_id" value
 * @method Memorial            setUserName()         Sets the current record's "user_name" value
 * @method Memorial            setCategoryId()       Sets the current record's "category_id" value
 * @method Memorial            setMName()            Sets the current record's "m_name" value
 * @method Memorial            setIsSecret()         Sets the current record's "is_secret" value
 * @method Memorial            setIsSingle()         Sets the current record's "is_single" value
 * @method Memorial            setDieNameOne()       Sets the current record's "die_name_one" value
 * @method Memorial            setDieProvinceOne()   Sets the current record's "die_province_one" value
 * @method Memorial            setDieCityOne()       Sets the current record's "die_city_one" value
 * @method Memorial            setDieBirthOne()      Sets the current record's "die_birth_one" value
 * @method Memorial            setDieDieOne()        Sets the current record's "die_die_one" value
 * @method Memorial            setDieNicknameOne()   Sets the current record's "die_nickname_one" value
 * @method Memorial            setDiePhotoOne()      Sets the current record's "die_photo_one" value
 * @method Memorial            setDieNameTwo()       Sets the current record's "die_name_two" value
 * @method Memorial            setDieProvinceTwo()   Sets the current record's "die_province_two" value
 * @method Memorial            setDieCityTwo()       Sets the current record's "die_city_two" value
 * @method Memorial            setDieBirthTwo()      Sets the current record's "die_birth_two" value
 * @method Memorial            setDieDieTwo()        Sets the current record's "die_die_two" value
 * @method Memorial            setDieNicknameTwo()   Sets the current record's "die_nickname_two" value
 * @method Memorial            setDiePhotoTwo()      Sets the current record's "die_photo_two" value
 * @method Memorial            setDescription()      Sets the current record's "description" value
 * @method Memorial            setIsRejected()       Sets the current record's "is_rejected" value
 * @method Memorial            setIsApproved()       Sets the current record's "is_approved" value
 * @method Memorial            setLastModify()       Sets the current record's "last_modify" value
 * @method Memorial            setTemplateId()       Sets the current record's "template_id" value
 * @method Memorial            setView()             Sets the current record's "view" value
 * @method Memorial            setXh()               Sets the current record's "xh" value
 * @method Memorial            setSfGuardUser()      Sets the current record's "sfGuardUser" value
 * @method Memorial            setMemorialCategory() Sets the current record's "MemorialCategory" value
 * @method Memorial            setMemorialTemplate() Sets the current record's "MemorialTemplate" value
 * @method Memorial            setMemorialMessage()  Sets the current record's "MemorialMessage" collection
 * @method Memorial            setMemorialHistory()  Sets the current record's "MemorialHistory" collection
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMemorial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('memorial');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('m_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_secret', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('is_single', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('die_name_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_province_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_city_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_birth_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_die_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_nickname_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_photo_one', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_name_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_province_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_city_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_birth_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_die_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_nickname_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('die_photo_two', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'text', null, array(
             'type' => 'text',
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
        $this->hasColumn('template_id', 'integer', null, array(
             'type' => 'integer',
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

        $this->hasOne('MemorialCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('MemorialTemplate', array(
             'local' => 'template_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('MemorialMessage', array(
             'local' => 'id',
             'foreign' => 'memorial_id'));

        $this->hasMany('MemorialHistory', array(
             'local' => 'id',
             'foreign' => 'm_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}