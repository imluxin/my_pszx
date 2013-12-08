<?php

/**
 * MemorialTemplate filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMemorialTemplateFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(),
      'price'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_free'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'jng_path'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lw_name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lw_path'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gm_name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gm_path'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'price'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_free'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'jng_path'   => new sfValidatorPass(array('required' => false)),
      'lw_name'    => new sfValidatorPass(array('required' => false)),
      'lw_path'    => new sfValidatorPass(array('required' => false)),
      'gm_name'    => new sfValidatorPass(array('required' => false)),
      'gm_path'    => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('memorial_template_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemorialTemplate';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'price'      => 'Number',
      'is_free'    => 'Boolean',
      'jng_path'   => 'Text',
      'lw_name'    => 'Text',
      'lw_path'    => 'Text',
      'gm_name'    => 'Text',
      'gm_path'    => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
