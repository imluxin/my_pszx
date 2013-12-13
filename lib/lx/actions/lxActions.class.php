<?php 

class lxActions extends sfActions
{
  var $t;
  
//   public function preExecute()
//   {
//       $this->t = $this->getContext()->getI18N();
      
//       if (sfContext::getInstance()->getActionName() != 'search'){
//       	$this->getUser()->setFlash('keyword', null);
//       	$this->getUser()->setFlash('search_cat', null);
//       }
      
//       return parent::preExecute();
//   }

  	public function flashSuccess()
  	{
		$this->getUser()->setFlash('success', '创建/更新成功!');
	}

  	public function flashAddSuccess()
  	{
		$this->getUser()->setFlash('success', '创建成功!');
	}

  	public function flashEditSuccess()
  	{
		$this->getUser()->setFlash('success', '更新成功!');
	}

  	public function flashDelSuccess()
  	{
		$this->getUser()->setFlash('success', '删除成功!');
	}


  
}