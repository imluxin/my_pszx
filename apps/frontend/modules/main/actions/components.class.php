<?php

class mainComponents extends sfComponents {

	public function executeBuddha() {
		$this->buddhas = Doctrine_Core::getTable('BunddlaHall')->createQuery()
								->where('is_approved = 1 and is_rejected = 0')
								->orderBy('rand()')
								->limit(4)
								->execute();
	}

	public function executeTemple() {
		$this->temple = Doctrine_Core::getTable('Temple')->createQuery()
								->where('is_approved = 1 and is_rejected = 0')
								->orderBy('rand()')
								->limit(12)
								->execute()
								;
	}

	public function executeOblation() {
		$this->oblation = Doctrine_Core::getTable('Oblation')->createQuery()
								->where('is_approved = 1 and is_rejected = 0')
								->orderBy('rand()')
								->limit(8)
								->execute()
								;
	}

	public function executeMemorial() {
		$this->memorial = Doctrine_Core::getTable('Memorial')->createQuery()
								->where('is_approved = 1 and is_rejected = 0')
								->orderBy('rand()')
								->limit(10)
								->execute()
								;
	}

	public function executeFjzx(sfWebRequest $request) {
		$this->fjzxa1 = $this->getRecommendResult('宗教资讯A1');
		$this->fjzxa2 = $this->getRecommendResult('宗教资讯A2');
		
		$this->article = Doctrine_Core::getTable('Article')->getIndexArticle(1);
	}

	public function executeCsjz(sfWebRequest $request) {
		$this->csjza3 = $this->getRecommendResult('风水科学A3');
		$this->csjza4 = $this->getRecommendResult('风水科学A4');

		$this->article = Doctrine_Core::getTable('Article')->getIndexArticle(3);
	}
	
	public function executeZyjw(sfWebRequest $request) {
		$this->zyjwa5 = $this->getRecommendResult('追忆祭文A5');
		$this->zyjwa6 = $this->getRecommendResult('追忆祭文A6');
		
		$this->article = Doctrine_Core::getTable('Article')->getIndexArticle(5, array(), 10);
	}

	public function executeTchd(sfWebRequest $request) {
		$this->tchda7 = $this->getRecommendResult('健康养生A7');
		$this->tchda8 = $this->getRecommendResult('健康养生A8');
		
		$this->article = Doctrine_Core::getTable('Article')->getIndexArticle(4, array(), 18);
	}

	protected function getRecommendResult($type,$model='') 
	{			
		$query = Doctrine_Core::getTable('Recommend')->createQuery('r');
		$query->where("STR_TO_DATE(r.start_date, '%Y/%m/%d') <= DATE(now()) and STR_TO_DATE(r.end_date, '%Y/%m/%d') >= DATE(now())")
				->where('r.r_type=?',$type);
		$recommend = $query->execute();
				
		return $recommend;
	}
	
	public function executeObls(sfWebRequest $request)
	{
		$this->list = Doctrine_Core::getTable('Oblation')->createQuery()
						->where('is_rejected = ?', false)
						->andWhere('is_approved = ?', true)
						->execute();
		
			$this->cats_b = Doctrine_Core::getTable('OblationCategory')->createQuery()
								->whereIn('id', array(1, 2, 3, 4))
								->execute();
			
			$this->cats = Doctrine_Core::getTable('OblationCategory')->findAll();
	}
}
