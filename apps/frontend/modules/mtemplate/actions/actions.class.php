<?php

/**
 * memorial actions.
 *
 * @package    symfonymodel
 * @subpackage memorial
 * @author     Mia
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mtemplateActions extends lxActions
{

	public function executeNew(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();
		$this->form = new MemorialTemplateForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->myuser = $this->getUser()->getGuardUser();

		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new MemorialTemplateForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($memorial = Doctrine_Core::getTable('MemorialTemplate')->find(array($request->getParameter('id'))), sprintf('Object memorial does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->memorial = $memorial;
		$this->form = new MemorialTemplateForm($memorial);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($memorial = Doctrine_Core::getTable('MemorialTemplate')->find(array($request->getParameter('id'))), sprintf('Object memorial does not exist (%s).', $request->getParameter('id')));
		$this->myuser = $this->getUser()->getGuardUser();
		$this->memorial = $memorial;
		$this->form = new MemorialTemplateForm($memorial);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$memorial = $form->save();
			$this->flashSuccess();
			//$this->redirect('mtemplate/edit?id='.$memorial->getId());
			$this->redirect('manager/mtemplate');
		}
	}

}
