<?php

/**
 * Memorial
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    symfonymodel
 * @subpackage model
 * @author     Mia
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Memorial extends BaseMemorial
{
	
	static public function getFileDir()
	{
		return sfConfig::get('sf_upload_dir') . '/memorial';
	}

	public function getPublicFileLocation1()
	{
		return str_replace(sfConfig::get('sf_web_dir'), '', self::getFileDir()) . '/' . $this->getDiePhotoOne();
	}
	public function getPublicFileLocation2()
	{
		return str_replace(sfConfig::get('sf_web_dir'), '', self::getFileDir()) . '/' . $this->getDiePhotoTwo();
	}
	
	public function getPicture($field, $full = false)
	{
		$image = $this->get($field);
		$match = preg_match('^(http|https)://^', $image);
		if ($match){
			return $image;
		}else {
			if ($full){
				return '/uploads/memorial/'.$image;
			}
			else {
				return $image;
			}
		}
	}
    
    public function getUniqueName($field)
    {
    	$path = $this->_get($field);
    	return substr($path, 0, 10);
    }

	public function getThumbnail($field, $w = 75, $h = 90)
	{
		if (!file_exists(sfConfig::get('sf_upload_dir').'/memorial') ||
		!file_exists(sfConfig::get('sf_upload_dir').'/memorial/thumbs/'.$this->getUniqueName($field))){
			mkdir(sfConfig::get('sf_upload_dir').'/memorial/thumbs/'.$this->getUniqueName($field), 0777, true);
		}
	
		$savepath = sfConfig::get('sf_upload_dir').'/memorial/thumbs/'.$this->getUniqueName($field).'/'.$w.'-'.$h.'.jpg';
	
		if (file_exists($savepath)){
			return '/'.strstr($savepath, 'uploads');
		}
		$image = $this->getPicture($field, false);
		$image_path = sfConfig::get('sf_upload_dir').'/memorial/'.$image;
	
		if (is_file($image_path)){
			$thumber = new sfImage($image_path);
			
			$thumber->thumbnail($w, $h, 'center');
			$thumber->saveAs($savepath);
			return '/'.strstr($savepath, 'uploads');
		}else{
			return ' ';
		}
	}

	public function save( Doctrine_Connection $conn = null ) {
		$user = sfContext::getInstance()->getUser()->getGuardUser();

		if($user) {
			$this->setLastModify($user->getUsername());
		} else {
			$this->setLastModify(' ');
		}

		return parent::save( $conn );
	}
	
	public function delete(Doctrine_Connection $conn = null) {
		if($this->getDiePhotoOne() != '')
		unlink(sfConfig::get('sf_upload_dir').'/memorial/'.$this->getDiePhotoOne());

		if($this->getDiePhotoTwo() != '')
		unlink(sfConfig::get('sf_upload_dir').'/memorial/'.$this->getDiePhotoTwo());
			

		return parent::delete($conn);
	}
}