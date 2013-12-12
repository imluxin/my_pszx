<?php

/**
 * Pages filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePagesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'   => new sfWidgetFormFilterInput(),
      'content' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'   => new sfValidatorPass(array('required' => false)),
      'content' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pages_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pages';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'title'   => 'Text',
      'content' => 'Text',
    );
  }
}
