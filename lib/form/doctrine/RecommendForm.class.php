<?php

/**
 * Recommend form.
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RecommendForm extends BaseRecommendForm
{
	public function configure()
	{
		unset(
		$this['r_type'],
		$this['created_at'],
		$this['updated_at']
		);
		
  		$this->configureImages('image', '上传图片', 'recommend');

// 		$this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
// 		    'file_src' => $this->getObject()->getPublicFileLocation(),
// 		    'is_image' => true,
// 		    'with_delete' => false,
// 		    'edit_mode' => !$this->isNew() && $this->getObject()->getImage()
// 		));

// 		$this->validatorSchema['image'] = new sfValidatorFile(array(
// 				    'mime_types' => 'web_images',
// 				    'path' => $this->getObject()->getFileDir(),
// 					'required' => false
// 		),array()
// 		);

		$this->widgetSchema->setLabels(array(
			//'r_type' => '广告位置：',
		  	'title' => '广告标题：',
			'start_date' => '开始日：',
			'end_date' => '结束日：',
			'url' => '链接网址：',
			'image' => '上传图片：',
		));
		
	}
}
