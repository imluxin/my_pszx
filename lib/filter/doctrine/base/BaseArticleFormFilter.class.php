<?php

/**
 * Article filter form base class.
 *
 * @package    symfonymodel
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArticleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'   => new sfWidgetFormFilterInput(),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleCategory'), 'add_empty' => true)),
      'title'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'img_one'     => new sfWidgetFormFilterInput(),
      'title_one'   => new sfWidgetFormFilterInput(),
      'img_two'     => new sfWidgetFormFilterInput(),
      'title_two'   => new sfWidgetFormFilterInput(),
      'img_three'   => new sfWidgetFormFilterInput(),
      'title_three' => new sfWidgetFormFilterInput(),
      'content'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_rejected' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_approved' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_homepage' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'last_modify' => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'user_name'   => new sfValidatorPass(array('required' => false)),
      'category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ArticleCategory'), 'column' => 'id')),
      'title'       => new sfValidatorPass(array('required' => false)),
      'img_one'     => new sfValidatorPass(array('required' => false)),
      'title_one'   => new sfValidatorPass(array('required' => false)),
      'img_two'     => new sfValidatorPass(array('required' => false)),
      'title_two'   => new sfValidatorPass(array('required' => false)),
      'img_three'   => new sfValidatorPass(array('required' => false)),
      'title_three' => new sfValidatorPass(array('required' => false)),
      'content'     => new sfValidatorPass(array('required' => false)),
      'is_rejected' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_approved' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_homepage' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_modify' => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('article_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Article';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'user_id'     => 'ForeignKey',
      'user_name'   => 'Text',
      'category_id' => 'ForeignKey',
      'title'       => 'Text',
      'img_one'     => 'Text',
      'title_one'   => 'Text',
      'img_two'     => 'Text',
      'title_two'   => 'Text',
      'img_three'   => 'Text',
      'title_three' => 'Text',
      'content'     => 'Text',
      'is_rejected' => 'Boolean',
      'is_approved' => 'Boolean',
      'is_homepage' => 'Boolean',
      'last_modify' => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
