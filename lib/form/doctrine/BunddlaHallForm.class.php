<?php

/**
 * BunddlaHall form.
 *
 * @package    symfonymodel
 * @subpackage form
 * @author     Mia
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BunddlaHallForm extends BaseBunddlaHallForm
{
	public function configure() {
		unset(
		$this['user_id'],
		$this['user_name'],
		$this['created_at'],
		$this['updated_at']
		);

		$this->widgetSchema['images'] = new sfWidgetFormInputFileEditable(array(
		    'file_src' => $this->getObject()->getPublicFileLocation(),
		    'is_image' => true,
		    'with_delete' => false,
		    'edit_mode' => !$this->isNew() && $this->getObject()->getImages(),
			));
				
		$this->validatorSchema['images'] = new sfValidatorFile(array(
					'required' => false,
				    'mime_types' => 'web_images',
				    'path' => $this->getObject()->getFileDir(),
					),array(
						//'required'=>'菩萨动画图片不能为空。'
					)
				);

		$this->configureImages('zhuozi', '桌子图片', 'buddha');
		$this->configureImages('hp_img', '展示图片', 'buddha');
				
		$this->widgetSchema['description'] = new sfWidgetFormTextarea();
		
		$this->validatorSchema['name'] = new sfValidatorString(
									array('required'=>true),
									array('required'=>'佛殿名称不能为空。')
									);
		$this->validatorSchema['description'] = new sfValidatorString(
									array('required'=>true),
									array('required'=>'佛殿介绍不能为空。')
									);
		$this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array('class'=>'ckeditor'));
		
		$this->widgetSchema->setLabels(array(
		  'name' => '佛殿名称：',
		  'images' => '佛殿动画图片：',
		  'description' => '佛殿介绍：'
		));
	}
}
