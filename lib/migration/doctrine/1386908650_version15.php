<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version15 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('bunddla_hall', 'view', 'integer', '8', array(
             'default' => '0',
             ));
        $this->addColumn('bunddla_hall', 'xh', 'integer', '8', array(
             'default' => '0',
             ));
        $this->addColumn('memorial', 'view', 'integer', '8', array(
             'default' => '0',
             ));
        $this->addColumn('memorial', 'xh', 'integer', '8', array(
             'default' => '0',
             ));
    }

    public function down()
    {
        $this->removeColumn('bunddla_hall', 'view');
        $this->removeColumn('bunddla_hall', 'xh');
        $this->removeColumn('memorial', 'view');
        $this->removeColumn('memorial', 'xh');
    }
}