<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version8 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('memorial_template', 'lw_name', 'string', '255', array(
             'notnull' => '1',
             ));
        $this->addColumn('memorial_template', 'gm_name', 'string', '255', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('memorial_template', 'lw_name');
        $this->removeColumn('memorial_template', 'gm_name');
    }
}