<?php

/**
 * Memorial filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMemorialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'        => new sfWidgetFormFilterInput(),
      'category_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MemorialCategory'), 'add_empty' => true)),
      'm_name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_secret'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_single'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'die_name_one'     => new sfWidgetFormFilterInput(),
      'die_province_one' => new sfWidgetFormFilterInput(),
      'die_city_one'     => new sfWidgetFormFilterInput(),
      'die_birth_one'    => new sfWidgetFormFilterInput(),
      'die_die_one'      => new sfWidgetFormFilterInput(),
      'die_nickname_one' => new sfWidgetFormFilterInput(),
      'die_photo_one'    => new sfWidgetFormFilterInput(),
      'die_name_two'     => new sfWidgetFormFilterInput(),
      'die_province_two' => new sfWidgetFormFilterInput(),
      'die_city_two'     => new sfWidgetFormFilterInput(),
      'die_birth_two'    => new sfWidgetFormFilterInput(),
      'die_die_two'      => new sfWidgetFormFilterInput(),
      'die_nickname_two' => new sfWidgetFormFilterInput(),
      'die_photo_two'    => new sfWidgetFormFilterInput(),
      'description'      => new sfWidgetFormFilterInput(),
      'is_rejected'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_approved'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'last_modify'      => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'user_name'        => new sfValidatorPass(array('required' => false)),
      'category_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MemorialCategory'), 'column' => 'id')),
      'm_name'           => new sfValidatorPass(array('required' => false)),
      'is_secret'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_single'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'die_name_one'     => new sfValidatorPass(array('required' => false)),
      'die_province_one' => new sfValidatorPass(array('required' => false)),
      'die_city_one'     => new sfValidatorPass(array('required' => false)),
      'die_birth_one'    => new sfValidatorPass(array('required' => false)),
      'die_die_one'      => new sfValidatorPass(array('required' => false)),
      'die_nickname_one' => new sfValidatorPass(array('required' => false)),
      'die_photo_one'    => new sfValidatorPass(array('required' => false)),
      'die_name_two'     => new sfValidatorPass(array('required' => false)),
      'die_province_two' => new sfValidatorPass(array('required' => false)),
      'die_city_two'     => new sfValidatorPass(array('required' => false)),
      'die_birth_two'    => new sfValidatorPass(array('required' => false)),
      'die_die_two'      => new sfValidatorPass(array('required' => false)),
      'die_nickname_two' => new sfValidatorPass(array('required' => false)),
      'die_photo_two'    => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'is_rejected'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_approved'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_modify'      => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('memorial_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Memorial';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'user_id'          => 'ForeignKey',
      'user_name'        => 'Text',
      'category_id'      => 'ForeignKey',
      'm_name'           => 'Text',
      'is_secret'        => 'Boolean',
      'is_single'        => 'Boolean',
      'die_name_one'     => 'Text',
      'die_province_one' => 'Text',
      'die_city_one'     => 'Text',
      'die_birth_one'    => 'Text',
      'die_die_one'      => 'Text',
      'die_nickname_one' => 'Text',
      'die_photo_one'    => 'Text',
      'die_name_two'     => 'Text',
      'die_province_two' => 'Text',
      'die_city_two'     => 'Text',
      'die_birth_two'    => 'Text',
      'die_die_two'      => 'Text',
      'die_nickname_two' => 'Text',
      'die_photo_two'    => 'Text',
      'description'      => 'Text',
      'is_rejected'      => 'Boolean',
      'is_approved'      => 'Boolean',
      'last_modify'      => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
