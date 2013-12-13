<?php

/**
 *
 * contain all ajax action
 * @author Mia
 *
 */
class ajaxActions extends lxActions {

	public function executeTest(sfWebRequest $request) {
		exit;
	}

	/**************** manager: base_info **************************/
	public function executeUpdateUserName(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$username = $request->getParameter('username');

		$myuser = $this->getUser()->getGuardUser();
		$myuser->setUsername($username);
		$myuser->save();

		return $this->renderText($username);
	}

	public function executeUpdateName(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$name = $request->getParameter('name');

		$myuser = $this->getUser()->getGuardUser();
		$myuser->setFirstName($name);
		$myuser->save();

		return $this->renderText($name);
	}

	public function executeUpdatePhone(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$phone = $request->getParameter('phone');

		$myuser = $this->getUser()->getGuardUser();
		$myuser->setPhone($phone);
		$myuser->save();

		return $this->renderText($phone);
	}

	public function executeUpdateBirth(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$birth = $request->getParameter('birth');

		$myuser = $this->getUser()->getGuardUser();
		$myuser->setBirthday($birth);
		$myuser->save();

		return $this->renderText($birth);
	}

	public function executeUpdateAddress(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$province = $request->getParameter('province');
		$city = $request->getParameter('city');

		$myuser = $this->getUser()->getGuardUser();
		$myuser->setProvince($province);
		$myuser->setCity($city);
		$myuser->save();

		return $this->renderText('ok');
	}

	public function executeUpdatePassword(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));
		$password = $request->getParameter('password');

		if($password != '' && strlen($password) >= 6) {
			$myuser = $this->getUser()->getGuardUser();
			$myuser->setPassword($password);
			$myuser->save();

			return $this->renderText('ok');
		}
	}
	/**************** manager: base_info end**************************/

	/**************** manager: buddha **************************/
	public function executeDelBuddha(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$id = $request->getParameter('id');
		$buddha = Doctrine_Core::getTable('BunddlaHall')->findOneById($id);
		if($buddha) {
			$buddha->delete();
			$this->flashDelSuccess();
		}

		return $this->renderText(1);
	}
	/**************** manager: buddha end**************************/

	/**************** manager: temple **************************/
	public function executeDelTemple(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$id = $request->getParameter('id');
		$temple = Doctrine_Core::getTable('Temple')->findOneById($id);
		if($temple) {
			$temple->delete();
			$this->flashDelSuccess();
		}

		return $this->renderText(1);
	}
	/**************** manager: temple end**************************/

	/**************** manager: oblation **************************/
	public function executeDelOblation(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$id = $request->getParameter('id');
		$oblation = Doctrine_Core::getTable('Oblation')->findOneById($id);
		if($oblation) {
			$oblation->delete();
			$this->flashDelSuccess();
		}

		return $this->renderText(1);
	}
	/**************** manager: oblation end**************************/

	/**************** manager: oblation **************************/
	public function executeDelArticle(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$id = $request->getParameter('id');
		$article = Doctrine_Core::getTable('Article')->findOneById($id);
		if($article) {
			$article->delete();
			$this->flashDelSuccess();
		}

		return $this->renderText(1);
	}
	/**************** manager: oblation end**************************/

	/**************** manager: memorial **************************/
	public function executeDelMemorial(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$id = $request->getParameter('id');
		$memorial = Doctrine_Core::getTable('Memorial')->findOneById($id);
		if($memorial) {
			$memorial->delete();
			$this->flashDelSuccess();
		}

		return $this->renderText(1);
	}
	public function executeDelMtemplate(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$id = $request->getParameter('id');
		$res = Doctrine_Core::getTable('MemorialTemplate')->findOneById($id);
		if($res) {
			$res->delete();
			$this->flashDelSuccess();
		}

		return $this->renderText(1);
	}
	/**************** manager: memorial end**************************/

	public function executeEditCoins(sfWebRequest $request) {
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$coins = $request->getParameter('coins',0);
		$coins = (int)$coins;
		$uid = $request->getParameter('uid',0);
		$user = Doctrine_Core::getTable('sfGuardUser')->findOneById($uid);

		if(!is_integer($coins))
		return $this->renderText(-1);

		if($user) {
			$u_coins = $user->getCoins();
			
			$tmp = $coins + (int)$u_coins;
			
			$user->setCoins($tmp);
			$n = $request->getParameter('u');
			$user->setLastModify($n);
			$user->save();

			return $this->renderText(1);
		}

		return $this->renderText(0);
	}

	public function executeChangepermission(sfWebRequest $request) {
		//$this->forward404Unless($request->isMethod(sfRequest::POST));

		$p = $request->getParameter('permission');
		$uid = $request->getParameter('id',0);

		$user = Doctrine_Core::getTable('sfGuardUser')->findOneById($uid);

		$tmp = array();
		
		if($p == '1')
		$tmp = array(1,2,3);
		if($p == '2')
		$tmp = array(2,3);
		if($p == '3')
		$tmp = array(3);
		if($p == '-1')
		$tmp = array();
		
		if($user) {
			$up = Doctrine_Core::getTable('sfGuardUserPermission')->findByUserId($user->getId());
			foreach($up as $one) {
				$one->delete();
			}
			
			foreach($tmp as $one) {
				$up = new sfGuardUserPermission();
				$up->setUserId($user->getId());
				$up->setPermissionId($one);
				$up->save();
			}
			return $this->renderText(1);
		}

		return $this->renderText(0);
	}
	
	public function executeGetObls(sfWebRequest $request)
	{
		$cid = $request->getParameter('cid');
		
		if (empty($cid)) {
			return $this->renderText(json_encode(array('status'=>'ko', 'message'=>'没有获得相当祭品分类.')));
		}
		
		$obls = Doctrine_Core::getTable('Oblation')->createQuery()
						->where('category_id = ?', $cid)
						->andWhere('is_rejected = ?', false)
						->andWhere('is_approved = ?', true)
						->execute();
		
		if (count($obls) == '0') {
			return $this->renderText(json_encode(array('status'=>'ko', 'message'=>'当前分类下没有祭品.')));
		}
		
		$html = $this->getPartial('obls', array('obls' => $obls));
		
		return $this->renderText(json_encode(array('status'=>'ok',
												'message' => '成功获得祭品列表.',
												'html' => $html
											)));
		
		
	}
}