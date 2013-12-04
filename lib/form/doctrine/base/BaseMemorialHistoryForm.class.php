<?php

/**
 * MemorialHistory form base class.
 *
 * @method MemorialHistory getObject() Returns the current form's model object
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMemorialHistoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'm_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Memorial'), 'add_empty' => false)),
      'module'     => new sfWidgetFormInputText(),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'coins'      => new sfWidgetFormInputText(),
      'txt'        => new sfWidgetFormInputText(),
      'g_type'     => new sfWidgetFormInputText(),
      'point_x'    => new sfWidgetFormInputText(),
      'point_y'    => new sfWidgetFormInputText(),
      'scale_x'    => new sfWidgetFormInputText(),
      'scale_y'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'm_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Memorial'))),
      'module'     => new sfValidatorString(array('max_length' => 255)),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'coins'      => new sfValidatorInteger(array('required' => false)),
      'txt'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'g_type'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'point_x'    => new sfValidatorInteger(array('required' => false)),
      'point_y'    => new sfValidatorInteger(array('required' => false)),
      'scale_x'    => new sfValidatorPass(array('required' => false)),
      'scale_y'    => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('memorial_history[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MemorialHistory';
  }

}
