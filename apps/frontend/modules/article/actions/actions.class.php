<?php

/**
 * article actions.
 *
 * @package    symfonymodel
 * @subpackage article
 * @author     Mia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articleActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();
		
		$this->category = Doctrine_Core::getTable("ArticleCategory")->findAll();

		$search_query = '';
		$search_url = '';
		
		$page= $request->getParameter('page',1);        //默认第1页
		$q = Doctrine_Core::getTable('Article')->createQuery();//->getListOnPage($page,6); //第页显示n条
		$q->Where('is_approved=1 AND is_rejected=0')->orderBy('created_at DESC');
		
		
		$this->category_id = $request->getParameter('category');
		
		if($this->category_id != '') {
			$q->andWhere('category_id=?',$this->category_id);
			$search_url .= '&category='.$this->category_id;
		}
		
		$this->search_url .= urlencode($search_url);
		
		//分页
		$this->pg= new sfDoctrinePager('Article',6);
		$this->pg->setQuery($q);
		$this->pg->setPage($page);
		$this->pg->init();

		$this->result = $this->pg->getResults();
		
		$this->recommend = Doctrine_Core::getTable('Article')->createQuery()
								->where('is_homepage = ?', true)
								->andWhere('is_rejected = ?', false)
								->andWhere('is_approved = ?', true)
								->orderBy('rand()')->limit(3)
								->execute();
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();

		$this->form = new ArticleForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();

		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new ArticleForm();

		$this->processForm($request, $this->form,$this->myuser);

		$this->setTemplate('new');
	}

	public function executeDetails(sfWebRequest $request) {
		$this->forward404Unless($request->getParameter('id'));
		$this->id = $request->getParameter('id');
		$this->myuser = $this->getUser()->getGuardUser();
		
		$this->article = Doctrine_Core::getTable('Article')->findOneById($this->id);
		$this->all = Doctrine_Core::getTable('Article')->createQuery()
						->where('user_id = ?', $this->article->getUserId())
						->andWhere('id != ?', $this->id)
						->execute();
		if(!$this->article)
		$this->redirect('article/index');

		$comments_query = Doctrine_Core::getTable('Comment')->createQuery('a')
		->where('a.article_id=',$this->id)
		->orderBy('a.created_at DESC');

		$this->comments = $comments_query->execute();

		$this->form = new CommentForm();
		$this->form->getWidget('article_id')->setDefault($this->id);
	}

	public function executeComment(sfWebRequest $request) {
		if(!$request->isMethod(sfRequest::POST)) {
			return $this->renderText("-1");
		}
		$this->myuser = $this->getUser()->getGuardUser();
		
		$this->form = new CommentForm();
		$this->processComment($request, $this->form);
	}
	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($article = Doctrine_Core::getTable('Article')->find(array($request->getParameter('id'))), sprintf('Object article does not exist (%s).', $request->getParameter('id')));
		$this->form = new ArticleForm($article);
		
		$this->article = $article;
		$this->myuser = $this->getUser()->getGuardUser();
		$this->article_page = $request->getParameter('article_page',1);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($article = Doctrine_Core::getTable('Article')->find(array($request->getParameter('id'))), sprintf('Object article does not exist (%s).', $request->getParameter('id')));
		$this->form = new ArticleForm($article);
		$this->article = $article;
		$this->myuser = $this->getUser()->getGuardUser();
		$article_page = $request->getParameter('article_page');
		$this->processEditForm($request, $this->form,$article_page);

		$this->setTemplate('edit');
	}
	/*

	public function executeDelete(sfWebRequest $request)
	{
	$request->checkCSRFProtection();

	$this->forward404Unless($article = Doctrine_Core::getTable('Article')->find(array($request->getParameter('id'))), sprintf('Object article does not exist (%s).', $request->getParameter('id')));
	$article->delete();

	$this->redirect('article/index');
	}*/

	protected function processForm(sfWebRequest $request, sfForm $form,$myuser)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$form->getObject()->setSfGuardUser($myuser);
			$article = $form->save();
			
			$article->setUserId($myuser->getId());
			$article->setUserName($myuser->getUsername());
			$article->save();
			$this->redirect('article/edit?id='.$article->getId());
		}
	}
	
	protected function processEditForm(sfWebRequest $request, sfForm $form, $article_page = 1)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$article = $form->save();

			$this->redirect('manager/article?article_page='.$article_page);
		}
	}

	protected function processComment(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$comment = $form->save();
				
			$this->redirect('article/details?id='.$request->getParameter('aid'));
		}
	}
}
