<?php

/**
 * BaseUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $group_id
 * 
 * @method integer   getUserId()   Returns the current record's "user_id" value
 * @method integer   getGroupId()  Returns the current record's "group_id" value
 * @method UserGroup setUserId()   Sets the current record's "user_id" value
 * @method UserGroup setGroupId()  Sets the current record's "group_id" value
 * 
 * @package    symfony12
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserGroup extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_group');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}