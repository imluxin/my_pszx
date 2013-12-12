<?php

/**
 * Pages form.
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PagesForm extends BasePagesForm
{
  public function configure()
  {
  	unset($this['title']);
		
// 		$this->getWidget('title')->setAttribute('size', '67');
// 		$this->validatorSchema['title'] = new sfValidatorString(array(),array(
// 			'required'=>'请输入帖子标题。'
// 		));
		
		$this->widgetSchema['content'] = new sfWidgetFormTextareaTinyMCE(array(
		  'label'  => '内容 : ',
		  'width'  => 630,
		  'height' => 350,
		  'config' => 'theme_advanced_disable: "anchor,image,cleanup,help",forced_root_block:false',
		));
  }
}
