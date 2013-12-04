<?php

/**
 * Article form base class.
 *
 * @method Article getObject() Returns the current form's model object
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArticleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'user_name'   => new sfWidgetFormInputText(),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleCategory'), 'add_empty' => false)),
      'title'       => new sfWidgetFormInputText(),
      'img_one'     => new sfWidgetFormInputText(),
      'title_one'   => new sfWidgetFormInputText(),
      'img_two'     => new sfWidgetFormInputText(),
      'title_two'   => new sfWidgetFormInputText(),
      'img_three'   => new sfWidgetFormInputText(),
      'title_three' => new sfWidgetFormInputText(),
      'content'     => new sfWidgetFormInputText(),
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
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleCategory'))),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'img_one'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_one'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img_two'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_two'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img_three'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_three' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content'     => new sfValidatorPass(),
      'is_rejected' => new sfValidatorBoolean(array('required' => false)),
      'is_approved' => new sfValidatorBoolean(array('required' => false)),
      'last_modify' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('article[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Article';
  }

}
