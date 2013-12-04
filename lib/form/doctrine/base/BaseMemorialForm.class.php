<?php

/**
 * Memorial form base class.
 *
 * @method Memorial getObject() Returns the current form's model object
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMemorialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'user_name'        => new sfWidgetFormInputText(),
      'category_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MemorialCategory'), 'add_empty' => false)),
      'm_name'           => new sfWidgetFormInputText(),
      'is_secret'        => new sfWidgetFormInputCheckbox(),
      'is_single'        => new sfWidgetFormInputCheckbox(),
      'die_name_one'     => new sfWidgetFormInputText(),
      'die_province_one' => new sfWidgetFormInputText(),
      'die_city_one'     => new sfWidgetFormInputText(),
      'die_birth_one'    => new sfWidgetFormInputText(),
      'die_die_one'      => new sfWidgetFormInputText(),
      'die_nickname_one' => new sfWidgetFormInputText(),
      'die_photo_one'    => new sfWidgetFormInputText(),
      'die_name_two'     => new sfWidgetFormInputText(),
      'die_province_two' => new sfWidgetFormInputText(),
      'die_city_two'     => new sfWidgetFormInputText(),
      'die_birth_two'    => new sfWidgetFormInputText(),
      'die_die_two'      => new sfWidgetFormInputText(),
      'die_nickname_two' => new sfWidgetFormInputText(),
      'die_photo_two'    => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormInputText(),
      'is_rejected'      => new sfWidgetFormInputCheckbox(),
      'is_approved'      => new sfWidgetFormInputCheckbox(),
      'last_modify'      => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'user_name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MemorialCategory'))),
      'm_name'           => new sfValidatorString(array('max_length' => 255)),
      'is_secret'        => new sfValidatorBoolean(array('required' => false)),
      'is_single'        => new sfValidatorBoolean(array('required' => false)),
      'die_name_one'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_province_one' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_city_one'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_birth_one'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_die_one'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_nickname_one' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_photo_one'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_name_two'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_province_two' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_city_two'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_birth_two'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_die_two'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_nickname_two' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'die_photo_two'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'is_rejected'      => new sfValidatorBoolean(array('required' => false)),
      'is_approved'      => new sfValidatorBoolean(array('required' => false)),
      'last_modify'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('memorial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Memorial';
  }

}
