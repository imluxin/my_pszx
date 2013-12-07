<?php

/**
 * Project form base class.
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormDoctrine extends sfFormDoctrine
{
  public function setup()
  {
  }
  
  protected function configureImages($field, $label, $path)
  {	
    $this->widgetSchema[$field] = new sfWidgetFormInputFileEditable(array(
      'label'     => $label,
      'file_src'  => '/uploads/'.$path.'/'.$this->getObject()->{'get'.sfInflector::camelize($field)}(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% 是否删除?</div>',
    ));
     $this->validatorSchema[$field] = new sfValidatorFile(array(
      'required'   => $this->isNew(),
      'path'       => sfConfig::get('sf_upload_dir').'/'.$path,
      'mime_types' => 'web_images',
    ));
    $this->validatorSchema[$field.'_delete'] = new sfValidatorPass();
  }
}
