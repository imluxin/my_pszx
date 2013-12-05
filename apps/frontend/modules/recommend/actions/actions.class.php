<?php

/**
 * recommend actions.
 *
 * @package    symfonymodel
 * @subpackage recommend
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class recommendActions extends sfActions
{
	/*  public function executeIndex(sfWebRequest $request)
	 {
	 $this->recommends = Doctrine_Core::getTable('Recommend')
	 ->createQuery('a')
	 ->execute();
	 }

	 public function executeNew(sfWebRequest $request)
	 {
	 $this->form = new RecommendForm();
	 }

	 public function executeCreate(sfWebRequest $request)
	 {
	 $this->forward404Unless($request->isMethod(sfRequest::POST));

	 $this->form = new RecommendForm();

	 $this->processForm($request, $this->form);

	 $this->setTemplate('new');
	 }

	 public function executeDelete(sfWebRequest $request)
	 {
	 $request->checkCSRFProtection();

	 $this->forward404Unless($recommend = Doctrine_Core::getTable('Recommend')->find(array($request->getParameter('id'))), sprintf('Object recommend does not exist (%s).', $request->getParameter('id')));
	 $recommend->delete();

	 $this->redirect('recommend/index');
	 }

	 */
	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($recommend = Doctrine_Core::getTable('Recommend')->find(array($request->getParameter('id'))), sprintf('Object recommend does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->form = new RecommendForm($recommend);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($recommend = Doctrine_Core::getTable('Recommend')->find(array($request->getParameter('id'))), sprintf('Object recommend does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->form = new RecommendForm($recommend);
		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}
	
	public function executeSetup(sfWebRequest $request)
	{
		$c = new Payy();
		$c->setCol1('wfqg')->setCol2(true);
		$c->save();
		return sfView::NONE;
	}
	public function executeAdd(sfWebRequest $request)
	{
		$c = $request->getParameter('col', true);
		$tt = Doctrine_Core::getTable('Payy')->createQuery()->where('col1 = ?', 'wfqg')->fetchOne();
		$tt->setCol2($c);
		$tt->save();
		return sfView::NONE;
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$recommend = $form->save();

			$this->redirect('manager/adv');
		}
	}
}
