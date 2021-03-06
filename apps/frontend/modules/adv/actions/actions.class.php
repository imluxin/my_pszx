<?php

/**
 * adv actions.
 *
 * @package    symfonymodel
 * @subpackage adv
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class advActions extends sfActions
{
	/*  public function executeIndex(sfWebRequest $request)
	 {
	  
	 $this->advs = Doctrine_Core::getTable('Adv')
	 ->createQuery('a')
	 ->execute();
	 }

	 public function executeNew(sfWebRequest $request)
	 {
	 $this->myuser = $this->getUser()->getGuardUser();
	 $this->form = new AdvForm();
	 }

	 public function executeCreate(sfWebRequest $request)
	 {
	 $this->forward404Unless($request->isMethod(sfRequest::POST));

	 $this->form = new AdvForm();

	 $this->processForm($request, $this->form);

	 $this->setTemplate('new');
	 }
	 public function executeDelete(sfWebRequest $request)
	 {
	 $request->checkCSRFProtection();

	 $this->forward404Unless($adv = Doctrine_Core::getTable('Adv')->find(array($request->getParameter('id'))), sprintf('Object adv does not exist (%s).', $request->getParameter('id')));
	 $adv->delete();

	 $this->redirect('adv/index');
	 }
	 */

	public function executeEdit(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();
		$this->forward404Unless($adv = Doctrine_Core::getTable('Adv')->find(array($request->getParameter('id'))), sprintf('Object adv does not exist (%s).', $request->getParameter('id')));
		$this->adv = $adv;
		$this->form = new AdvForm($adv);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($adv = Doctrine_Core::getTable('Adv')->find(array($request->getParameter('id'))), sprintf('Object adv does not exist (%s).', $request->getParameter('id')));
		$this->form = new AdvForm($adv);
		$this->adv = $adv;
		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}


	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$adv = $form->save();

			$this->redirect('adv/edit?id='.$adv->getId());
		}
	}
}
