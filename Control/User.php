<?php
/**
 * 用户处理控制器
 *
 * @author soone fengyue15#163.com
 */
class Control_User extends N8_Core_Control
{
	public function login()
	{
		if($_SESSION['user_name'] && $_SESSION['user_id'])
			header('index.php');

		$this->render(array('tplDir' => $this->conf->get('view->rDir')));
	}

	/**
	 * 默认action 
	 * 
	 * @access public
	 * @return void
	 */
	public function index()
	{
		//$db = new N8_Dblayer_Dblayer();
		//$db->setDs($this->conf->get('db->0->type'), $this->conf->get('db->0->option'));

		//var_dump($db->setSql(1, 
		//				array('table' => 'test', 
		//				'key' => array('id', 'uid'), 
		//				'value' => array('1,2,', '4,5'))));
		//var_dump($db->setSql(2, 
		//				array('table' => 'test', 
		//				'key' => array('id', 'uid'), 
		//				'where' => array('and' => array('a' => 1, 'b' => array(1,2,3)), 'or' => array('c' => 3, 'd' => array('test', 'hah'))),
		//				'limit' => array(0, 100),
		//				'order' => array('asc' => array('id', 'uid'), 'desc' => array('x')))
		//				));
		//var_dump($db->setSql(2, 
		//				array('table' => 'test', 
		//				'key' => array('id', 'uid'), 
		//				'where' => array('and' => array('a' => 1, 'b' => array(1,2,3))),
		//				'limit' => array(0, 100))));
		//var_dump($db->setSql(2, 
		//				array('table' => 'test', 
		//				'key' => array('id', 'uid'), 
		//				'where' => array('or' => array('a' => 1, 'b' => array(1,2,3))),
		//				'limit' => array(0, 100))));
		//var_dump($db->setSql(3, 
		//				array('table' => 'test', 
		//				'key' => array('id', 'uid'), 
		//				'value' => array('1,2,', '4,5'))));
		//var_dump($db->setSql(4, 
		//				array('table' => 'test', 
		//				'where' => array('or' => array('a' => 1, 'b' => array(1,2,3))),
		//				)));
		$this->render(array('a' => 'xxxxxx'));
	}

	/**
	 * 供应商处理 
	 * 
	 * @access public
	 * @return void
	 */
	public function supplier()
	{
		if($this->req['post']['submit'])
		{
			var_dump($this->req['post']);
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir')));
	}
}
