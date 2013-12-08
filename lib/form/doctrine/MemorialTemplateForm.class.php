<?php

/**
 * MemorialTemplate form.
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MemorialTemplateForm extends BaseMemorialTemplateForm
{
  public function configure()
  {
  	unset($this['created_at'], $this['updated_at']);
  	
  	$this->configureImages('jng_path', '纪念馆图片', 'memorial/template');
  	$this->configureImages('lw_path', '灵位图片', 'memorial/template');
  	$this->configureImages('gm_path', '公墓图片', 'memorial/template');
  	
  	$this->widgetSchema->setLabels(array(
  								'name' => '纪念馆名称',
  								'price' => '价格',
  								'is_free' => '是否免费?',
  								'lw_name' => '灵位名称',
  								'gm_name' => '公墓名称'
  							));
  }
}
