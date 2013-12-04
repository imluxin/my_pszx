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
		
	}
}
