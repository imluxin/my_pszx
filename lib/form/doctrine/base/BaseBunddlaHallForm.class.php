<?php

/**
 * BunddlaHall form base class.
 *
 * @method BunddlaHall getObject() Returns the current form's model object
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBunddlaHallForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'user_name'   => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'hp_img'      => new sfWidgetFormInputText(),
      'images'      => new sfWidgetFormInputText(),
      'zhuozi'      => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'is_rejected' => new sfWidgetFormInputCheckbox(),
      'is_approved' => new sfWidgetFormInputCheckbox(),
      'last_modify' => new sfWidgetFormInputText(),
      'view'        => new sfWidgetFormInputText(),
      'xh'          => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'user_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'hp_img'      => new sfValidatorString(array('max_length' => 255)),
      'images'      => new sfValidatorString(array('max_length' => 255)),
      'zhuozi'      => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorPass(),
      'is_rejected' => new sfValidatorBoolean(array('required' => false)),
      'is_approved' => new sfValidatorBoolean(array('required' => false)),
      'last_modify' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'view'        => new sfValidatorInteger(array('required' => false)),
      'xh'          => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('bunddla_hall[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BunddlaHall';
  }

}
