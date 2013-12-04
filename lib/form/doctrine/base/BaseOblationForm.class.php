<?php

/**
 * Oblation form base class.
 *
 * @method Oblation getObject() Returns the current form's model object
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOblationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'user_name'   => new sfWidgetFormInputText(),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OblationCategory'), 'add_empty' => false)),
      'name'        => new sfWidgetFormInputText(),
      'price'       => new sfWidgetFormInputText(),
      'times'       => new sfWidgetFormInputText(),
      'images'      => new sfWidgetFormInputText(),
      'position'    => new sfWidgetFormTextarea(),
      'can_modify'  => new sfWidgetFormInputCheckbox(),
      'is_rejected' => new sfWidgetFormInputCheckbox(),
      'is_approved' => new sfWidgetFormInputCheckbox(),
      'last_modify' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'user_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OblationCategory'))),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'price'       => new sfValidatorInteger(array('required' => false)),
      'times'       => new sfValidatorInteger(array('required' => false)),
      'images'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'position'    => new sfValidatorString(array('max_length' => 266, 'required' => false)),
      'can_modify'  => new sfValidatorBoolean(array('required' => false)),
      'is_rejected' => new sfValidatorBoolean(array('required' => false)),
      'is_approved' => new sfValidatorBoolean(array('required' => false)),
      'last_modify' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('oblation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Oblation';
  }

}
