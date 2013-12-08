<?php

/**
 * MemorialTemplate form base class.
 *
 * @method MemorialTemplate getObject() Returns the current form's model object
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMemorialTemplateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'price'      => new sfWidgetFormInputText(),
      'is_free'    => new sfWidgetFormInputCheckbox(),
      'jng_path'   => new sfWidgetFormInputText(),
      'lw_name'    => new sfWidgetFormInputText(),
      'lw_path'    => new sfWidgetFormInputText(),
      'gm_name'    => new sfWidgetFormInputText(),
      'gm_path'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'      => new sfValidatorInteger(array('required' => false)),
      'is_free'    => new sfValidatorBoolean(array('required' => false)),
      'jng_path'   => new sfValidatorString(array('max_length' => 255)),
      'lw_name'    => new sfValidatorString(array('max_length' => 255)),
      'lw_path'    => new sfValidatorString(array('max_length' => 255)),
      'gm_name'    => new sfValidatorString(array('max_length' => 255)),
      'gm_path'    => new sfValidatorString(array('max_length' => 255)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('memorial_template[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemorialTemplate';
  }

}
