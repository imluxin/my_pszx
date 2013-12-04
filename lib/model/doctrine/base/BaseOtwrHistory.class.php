<?php

/**
 * BaseOtwrHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $bh_id
 * @property integer $user_id
 * @property integer $gid
 * @property string $description
 * 
 * @method integer     getBhId()        Returns the current record's "bh_id" value
 * @method integer     getUserId()      Returns the current record's "user_id" value
 * @method integer     getGid()         Returns the current record's "gid" value
 * @method string      getDescription() Returns the current record's "description" value
 * @method OtwrHistory setBhId()        Sets the current record's "bh_id" value
 * @method OtwrHistory setUserId()      Sets the current record's "user_id" value
 * @method OtwrHistory setGid()         Sets the current record's "gid" value
 * @method OtwrHistory setDescription() Sets the current record's "description" value
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOtwrHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('otwr_history');
        $this->hasColumn('bh_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('gid', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'string', 255, array(
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
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}