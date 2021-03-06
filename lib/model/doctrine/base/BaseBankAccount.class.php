<?php

/**
 * BaseBankAccount
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $account_to
 * @property string $account_from
 * @property string $name
 * @property string $bank
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer     getUserId()       Returns the current record's "user_id" value
 * @method string      getAccountTo()    Returns the current record's "account_to" value
 * @method string      getAccountFrom()  Returns the current record's "account_from" value
 * @method string      getName()         Returns the current record's "name" value
 * @method string      getBank()         Returns the current record's "bank" value
 * @method sfGuardUser getSfGuardUser()  Returns the current record's "sfGuardUser" value
 * @method BankAccount setUserId()       Sets the current record's "user_id" value
 * @method BankAccount setAccountTo()    Sets the current record's "account_to" value
 * @method BankAccount setAccountFrom()  Sets the current record's "account_from" value
 * @method BankAccount setName()         Sets the current record's "name" value
 * @method BankAccount setBank()         Sets the current record's "bank" value
 * @method BankAccount setSfGuardUser()  Sets the current record's "sfGuardUser" value
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBankAccount extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bank_account');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('account_to', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('account_from', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('bank', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
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

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}