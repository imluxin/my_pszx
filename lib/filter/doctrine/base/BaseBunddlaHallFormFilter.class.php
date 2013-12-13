<?php

/**
 * BunddlaHall filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBunddlaHallFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'   => new sfWidgetFormFilterInput(),
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hp_img'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'images'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zhuozi'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_rejected' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_approved' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'last_modify' => new sfWidgetFormFilterInput(),
      'view'        => new sfWidgetFormFilterInput(),
      'xh'          => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'user_name'   => new sfValidatorPass(array('required' => false)),
      'name'        => new sfValidatorPass(array('required' => false)),
      'hp_img'      => new sfValidatorPass(array('required' => false)),
      'images'      => new sfValidatorPass(array('required' => false)),
      'zhuozi'      => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'is_rejected' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_approved' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_modify' => new sfValidatorPass(array('required' => false)),
      'view'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'xh'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('bunddla_hall_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BunddlaHall';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'user_id'     => 'ForeignKey',
      'user_name'   => 'Text',
      'name'        => 'Text',
      'hp_img'      => 'Text',
      'images'      => 'Text',
      'zhuozi'      => 'Text',
      'description' => 'Text',
      'is_rejected' => 'Boolean',
      'is_approved' => 'Boolean',
      'last_modify' => 'Text',
      'view'        => 'Number',
      'xh'          => 'Number',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
