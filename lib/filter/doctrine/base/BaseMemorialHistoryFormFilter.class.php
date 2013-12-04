<?php

/**
 * MemorialHistory filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMemorialHistoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'm_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Memorial'), 'add_empty' => true)),
      'module'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'coins'      => new sfWidgetFormFilterInput(),
      'txt'        => new sfWidgetFormFilterInput(),
      'g_type'     => new sfWidgetFormFilterInput(),
      'point_x'    => new sfWidgetFormFilterInput(),
      'point_y'    => new sfWidgetFormFilterInput(),
      'scale_x'    => new sfWidgetFormFilterInput(),
      'scale_y'    => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'm_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Memorial'), 'column' => 'id')),
      'module'     => new sfValidatorPass(array('required' => false)),
      'user_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'coins'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'txt'        => new sfValidatorPass(array('required' => false)),
      'g_type'     => new sfValidatorPass(array('required' => false)),
      'point_x'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'point_y'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'scale_x'    => new sfValidatorPass(array('required' => false)),
      'scale_y'    => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('memorial_history_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemorialHistory';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'm_id'       => 'ForeignKey',
      'module'     => 'Text',
      'user_id'    => 'ForeignKey',
      'coins'      => 'Number',
      'txt'        => 'Text',
      'g_type'     => 'Text',
      'point_x'    => 'Number',
      'point_y'    => 'Number',
      'scale_x'    => 'Text',
      'scale_y'    => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
