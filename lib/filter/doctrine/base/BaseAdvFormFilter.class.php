<?php

/**
 * Adv filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'block'      => new sfWidgetFormFilterInput(),
      'title'      => new sfWidgetFormFilterInput(),
      'start_date' => new sfWidgetFormFilterInput(),
      'end_date'   => new sfWidgetFormFilterInput(),
      'url'        => new sfWidgetFormFilterInput(),
      'images'     => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'block'      => new sfValidatorPass(array('required' => false)),
      'title'      => new sfValidatorPass(array('required' => false)),
      'start_date' => new sfValidatorPass(array('required' => false)),
      'end_date'   => new sfValidatorPass(array('required' => false)),
      'url'        => new sfValidatorPass(array('required' => false)),
      'images'     => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('adv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Adv';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'block'      => 'Text',
      'title'      => 'Text',
      'start_date' => 'Text',
      'end_date'   => 'Text',
      'url'        => 'Text',
      'images'     => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
