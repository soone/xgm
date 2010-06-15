<?php
/**
 * 用户处理控制器
 *
 * @author soone fengyue15#163.com
 */
class Control_User extends N8_Core_Control
{
	public $db;
	public function __init()
	{
		$this->db = new N8_Dblayer_Dblayer();
		$this->db->setDs($this->conf->get('db->0->type'), $this->conf->get('db->0->option'));
	}

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
			$rs = $this->db->create(array(
				'table' => 'xgm_supplier',
				'key' => array('sp_name', 'sp_conner1', 'sp_conner2', 'sp_c1tel1', 'sp_c1tel2', 'sp_c2tel1',
				'sp_c2tel2', 'sp_manager', 'sp_manmobile', 'sp_manmsn', 'sp_manqq', 'sp_mantaobao',
				'sp_office', 'sp_svn', 'sp_website', 'sp_email', 'sp_bankno', 'sp_bankname', 'sp_product', 'sp_time'
				),
				'value' => array($this->req['post']['comname'] . ',' . $this->req['post']['cname1'] . ',' . $this->req['post']['cname2'] . ',' . $this->req['post']['cname1tel1'] . ',' . $this->req['post']['cname1tel2'] . ',' .	$this->req['post']['cname2tel1'] . ',' .
				$this->req['post']['cname2tel2'] . ',' . $this->req['post']['manager'] . ',' . $this->req['post']['mtel'] . ',' . $this->req['post']['mmsn'] . ',' . $this->req['post']['mqq'] . ',' . $this->req['post']['mtaobao'] . ',' .
		$this->req['post']['address'] . ',' . $this->req['post']['libaddr'] . ',' . $this->req['post']['website'] . ',' . $this->req['post']['email'] . ',' . $this->req['post']['bname'] . ',' . $this->req['post']['bno'] . ',' . $this->req['post']['product'] . ',' . date('Y-m-d H:i:s'))
			));

			if($rs === false)
			{
				//数据库出错
			}
			else
			{
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=user&action=suplist');
			}
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir')));
	}

	/**
	 * 供应商列表 
	 * 
	 * @access public
	 * @return void
	 */
	public function suplist()
	{
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 0;
		$perNum = 30;
		$start = $page * $perNum;
		$data = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name', 'sp_conner1', 'sp_c1tel1', 'sp_c1tel2', 'sp_conner2', 'sp_c2tel1', 'sp_c2tel2', 'sp_manager', 'sp_manmobile'),
			'limit' => array($start, $perNum)
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'slist' => $data
		));
	}
}
