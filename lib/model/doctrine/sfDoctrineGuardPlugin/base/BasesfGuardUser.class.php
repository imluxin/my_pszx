<?php

/**
 * BasesfGuardUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $photo
 * @property integer $coins
 * @property integer $gender
 * @property string $city
 * @property string $province
 * @property string $phone
 * @property timestamp $birthday
 * @property string $algorithm
 * @property string $salt
 * @property string $password
 * @property boolean $is_active
 * @property boolean $is_super_admin
 * @property string $last_modify
 * @property timestamp $last_login
 * @property Doctrine_Collection $Groups
 * @property Doctrine_Collection $Permissions
 * @property Doctrine_Collection $sfGuardUserPermission
 * @property Doctrine_Collection $sfGuardUserGroup
 * @property sfGuardRememberKey $RememberKeys
 * @property sfGuardForgotPassword $ForgotPassword
 * @property Doctrine_Collection $BunddlaHall
 * @property Doctrine_Collection $BunddlaHallHistory
 * @property Doctrine_Collection $Temple
 * @property Doctrine_Collection $TempleHistory
 * @property Doctrine_Collection $Memorial
 * @property Doctrine_Collection $MemorialHistory
 * @property Doctrine_Collection $Oblation
 * @property Doctrine_Collection $Article
 * @property Doctrine_Collection $Comment
 * @property Doctrine_Collection $BankAccount
 * @property Doctrine_Collection $DealList
 * @property Doctrine_Collection $FileUpload
 * 
 * @method string                getFirstName()             Returns the current record's "first_name" value
 * @method string                getLastName()              Returns the current record's "last_name" value
 * @method string                getEmailAddress()          Returns the current record's "email_address" value
 * @method string                getUsername()              Returns the current record's "username" value
 * @method string                getPhoto()                 Returns the current record's "photo" value
 * @method integer               getCoins()                 Returns the current record's "coins" value
 * @method integer               getGender()                Returns the current record's "gender" value
 * @method string                getCity()                  Returns the current record's "city" value
 * @method string                getProvince()              Returns the current record's "province" value
 * @method string                getPhone()                 Returns the current record's "phone" value
 * @method timestamp             getBirthday()              Returns the current record's "birthday" value
 * @method string                getAlgorithm()             Returns the current record's "algorithm" value
 * @method string                getSalt()                  Returns the current record's "salt" value
 * @method string                getPassword()              Returns the current record's "password" value
 * @method boolean               getIsActive()              Returns the current record's "is_active" value
 * @method boolean               getIsSuperAdmin()          Returns the current record's "is_super_admin" value
 * @method string                getLastModify()            Returns the current record's "last_modify" value
 * @method timestamp             getLastLogin()             Returns the current record's "last_login" value
 * @method Doctrine_Collection   getGroups()                Returns the current record's "Groups" collection
 * @method Doctrine_Collection   getPermissions()           Returns the current record's "Permissions" collection
 * @method Doctrine_Collection   getSfGuardUserPermission() Returns the current record's "sfGuardUserPermission" collection
 * @method Doctrine_Collection   getSfGuardUserGroup()      Returns the current record's "sfGuardUserGroup" collection
 * @method sfGuardRememberKey    getRememberKeys()          Returns the current record's "RememberKeys" value
 * @method sfGuardForgotPassword getForgotPassword()        Returns the current record's "ForgotPassword" value
 * @method Doctrine_Collection   getBunddlaHall()           Returns the current record's "BunddlaHall" collection
 * @method Doctrine_Collection   getBunddlaHallHistory()    Returns the current record's "BunddlaHallHistory" collection
 * @method Doctrine_Collection   getTemple()                Returns the current record's "Temple" collection
 * @method Doctrine_Collection   getTempleHistory()         Returns the current record's "TempleHistory" collection
 * @method Doctrine_Collection   getMemorial()              Returns the current record's "Memorial" collection
 * @method Doctrine_Collection   getMemorialHistory()       Returns the current record's "MemorialHistory" collection
 * @method Doctrine_Collection   getOblation()              Returns the current record's "Oblation" collection
 * @method Doctrine_Collection   getArticle()               Returns the current record's "Article" collection
 * @method Doctrine_Collection   getComment()               Returns the current record's "Comment" collection
 * @method Doctrine_Collection   getBankAccount()           Returns the current record's "BankAccount" collection
 * @method Doctrine_Collection   getDealList()              Returns the current record's "DealList" collection
 * @method Doctrine_Collection   getFileUpload()            Returns the current record's "FileUpload" collection
 * @method sfGuardUser           setFirstName()             Sets the current record's "first_name" value
 * @method sfGuardUser           setLastName()              Sets the current record's "last_name" value
 * @method sfGuardUser           setEmailAddress()          Sets the current record's "email_address" value
 * @method sfGuardUser           setUsername()              Sets the current record's "username" value
 * @method sfGuardUser           setPhoto()                 Sets the current record's "photo" value
 * @method sfGuardUser           setCoins()                 Sets the current record's "coins" value
 * @method sfGuardUser           setGender()                Sets the current record's "gender" value
 * @method sfGuardUser           setCity()                  Sets the current record's "city" value
 * @method sfGuardUser           setProvince()              Sets the current record's "province" value
 * @method sfGuardUser           setPhone()                 Sets the current record's "phone" value
 * @method sfGuardUser           setBirthday()              Sets the current record's "birthday" value
 * @method sfGuardUser           setAlgorithm()             Sets the current record's "algorithm" value
 * @method sfGuardUser           setSalt()                  Sets the current record's "salt" value
 * @method sfGuardUser           setPassword()              Sets the current record's "password" value
 * @method sfGuardUser           setIsActive()              Sets the current record's "is_active" value
 * @method sfGuardUser           setIsSuperAdmin()          Sets the current record's "is_super_admin" value
 * @method sfGuardUser           setLastModify()            Sets the current record's "last_modify" value
 * @method sfGuardUser           setLastLogin()             Sets the current record's "last_login" value
 * @method sfGuardUser           setGroups()                Sets the current record's "Groups" collection
 * @method sfGuardUser           setPermissions()           Sets the current record's "Permissions" collection
 * @method sfGuardUser           setSfGuardUserPermission() Sets the current record's "sfGuardUserPermission" collection
 * @method sfGuardUser           setSfGuardUserGroup()      Sets the current record's "sfGuardUserGroup" collection
 * @method sfGuardUser           setRememberKeys()          Sets the current record's "RememberKeys" value
 * @method sfGuardUser           setForgotPassword()        Sets the current record's "ForgotPassword" value
 * @method sfGuardUser           setBunddlaHall()           Sets the current record's "BunddlaHall" collection
 * @method sfGuardUser           setBunddlaHallHistory()    Sets the current record's "BunddlaHallHistory" collection
 * @method sfGuardUser           setTemple()                Sets the current record's "Temple" collection
 * @method sfGuardUser           setTempleHistory()         Sets the current record's "TempleHistory" collection
 * @method sfGuardUser           setMemorial()              Sets the current record's "Memorial" collection
 * @method sfGuardUser           setMemorialHistory()       Sets the current record's "MemorialHistory" collection
 * @method sfGuardUser           setOblation()              Sets the current record's "Oblation" collection
 * @method sfGuardUser           setArticle()               Sets the current record's "Article" collection
 * @method sfGuardUser           setComment()               Sets the current record's "Comment" collection
 * @method sfGuardUser           setBankAccount()           Sets the current record's "BankAccount" collection
 * @method sfGuardUser           setDealList()              Sets the current record's "DealList" collection
 * @method sfGuardUser           setFileUpload()            Sets the current record's "FileUpload" collection
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user');
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('email_address', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('username', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 128,
             ));
        $this->hasColumn('photo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('coins', 'integer', null, array(
             'type' => 'integer',
             'default' => 300,
             ));
        $this->hasColumn('gender', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('city', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('province', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('birthday', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('algorithm', 'string', 128, array(
             'type' => 'string',
             'default' => 'sha1',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('salt', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('password', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('is_super_admin', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('last_modify', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('last_login', 'timestamp', null, array(
             'type' => 'timestamp',
             ));


        $this->index('is_active_idx', array(
             'fields' => 
             array(
              0 => 'is_active',
             ),
             ));
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfGuardGroup as Groups', array(
             'refClass' => 'sfGuardUserGroup',
             'local' => 'user_id',
             'foreign' => 'group_id'));

        $this->hasMany('sfGuardPermission as Permissions', array(
             'refClass' => 'sfGuardUserPermission',
             'local' => 'user_id',
             'foreign' => 'permission_id'));

        $this->hasMany('sfGuardUserPermission', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('sfGuardUserGroup', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasOne('sfGuardRememberKey as RememberKeys', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasOne('sfGuardForgotPassword as ForgotPassword', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('BunddlaHall', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('BunddlaHallHistory', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Temple', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('TempleHistory', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Memorial', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('MemorialHistory', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Oblation', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Article', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Comment', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('BankAccount', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('DealList', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('FileUpload', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}