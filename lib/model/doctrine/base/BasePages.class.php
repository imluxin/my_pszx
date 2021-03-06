<?php

/**
 * BasePages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $content
 * 
 * @method string getTitle()   Returns the current record's "title" value
 * @method string getContent() Returns the current record's "content" value
 * @method Pages  setTitle()   Sets the current record's "title" value
 * @method Pages  setContent() Sets the current record's "content" value
 * 
 * @package    symfonymodel
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePages extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pages');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}