<?php

/**
 * pages actions.
 *
 * @package    symfonymodel
 * @subpackage pages
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pagesActions extends sfActions
{

	public function executeNew(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();
		$this->form = new PagesForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();

		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new PagesForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($memorial = Doctrine_Core::getTable('Pages')->find(array($request->getParameter('id'))), sprintf('Object memorial does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->memorial = $memorial;
		$this->form = new PagesForm($memorial);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($page = Doctrine_Core::getTable('Pages')->find(array($request->getParameter('id'))), sprintf('Object memorial does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->page = $page;
		$this->form = new PagesForm($page);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$memorial = $form->save();
			
			$this->redirect('pages/edit?id='.$memorial->getId());
		}
	}

	public function executeView(sfWebRequest $request)
	{
		$this->forward404Unless($page = Doctrine_Core::getTable('Pages')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->p = $page;
	}
}
