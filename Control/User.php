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
		$this->dbLayer = new N8_Dblayer_Dblayer();
		$this->db = $this->dbLayer->setDs($this->conf->get('db->0->type'), $this->conf->get('db->0->option'));
		if(!$vExt = $this->conf->get('view->extend'))
		{
			require_once N8_ROOT . './Core/View.php';
			$vExt = 'N8_Core_View';
		}

		$cView = new $vExt();
		//创建视图实例
		$this->view = $cView->createView($this->conf->get('view'));
		$expNums = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('count(*)'),
			'where' => array('and' => array('now()' => '{{DATE_ADD(gl_edate, INTERVAL -3 MONTH)}}'), 'oper' => array('now()' => '>'))
		));
		$this->view->Assign(array('expnums' => $expNums[0][0]));
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
		//				'value' => array('1,2,', '4,5', '{{id+1}},4'))));
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
		//				'value' => array('{{now()}}','{{num+1}}'))));
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
		$this->req['post']['address'] . ',' . $this->req['post']['libaddr'] . ',' . $this->req['post']['website'] . ',' . $this->req['post']['email'] . ',' . $this->req['post']['bname'] . ',' . $this->req['post']['bno'] . ',' . $this->req['post']['product'] . ',{{now()}}'))
			);

			var_dump($this->db->getSql());

			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
			else
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=user&action=suplist');
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
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
		$perNum = 30;
		$start = ($page-1)*$perNum;
		$allNums = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('count(*)'),
		));

		$data = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name', 'sp_conner1', 'sp_c1tel1', 'sp_c1tel2', 'sp_conner2', 'sp_c2tel1', 'sp_c2tel2', 'sp_manager', 'sp_manmobile'),
			'limit' => array($start, $perNum)
		));

		$page =	N8_Helper_Helper::setPage(array(
					'allNums' => $allNums[0][0], 
					'curPage' => $page,
					'perNum' => $perNum));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'slist' => $data,
							'page' => $page
		));
	}

	/**
	 * 修改供应商界面 
	 * 
	 * @access public
	 * @return void
	 */
	public function supedit()
	{
		$data = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_name', 'sp_conner1', 'sp_conner2', 'sp_c1tel1', 'sp_c1tel2', 'sp_c2tel1',
				'sp_c2tel2', 'sp_manager', 'sp_manmobile', 'sp_manmsn', 'sp_manqq', 'sp_mantaobao',
				'sp_office', 'sp_svn', 'sp_website', 'sp_email', 'sp_bankno', 'sp_bankname', 'sp_product', 'sp_time'),
			'where' => array('and' => array('sp_id' => $this->req['get']['spid'])),
			'limit' => array(0, 1)
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'info' => $data[0],
							'spid' => $this->req['get']['spid'],
							'tpl' => 'User_supplier.tpl',
							'edit' => 1
		));
	}

	public function supdoedit()
	{
		$this->req['post']['comname'] ? $set['sp_name'] = $this->req['post']['comname'] : '';
		$this->req['post']['cname1'] ? $set['sp_conner1'] = $this->req['post']['cname1'] : '';
		$this->req['post']['cname2'] ? $set['sp_conner2'] = $this->req['post']['cname2'] : '';
		$this->req['post']['cname1tel1'] ? $set['sp_c1tel1'] = $this->req['post']['cname1tel1'] : '';
		$this->req['post']['cname1tel2'] ? $set['sp_c1tel2'] = $this->req['post']['cname1tel2'] : '';
		$this->req['post']['cname2tel1'] ? $set['sp_c2tel1'] = $this->req['post']['cname2tel1'] : '';
		$this->req['post']['cname2tel2'] ? $set['sp_c2tel2'] = $this->req['post']['cname2tel2'] : '';
		$this->req['post']['manager'] ? $set['sp_manager'] = $this->req['post']['manager'] : '';
		$this->req['post']['mtel'] ? $set['sp_manmobile'] = $this->req['post']['mtel'] : '';
		$this->req['post']['mmsn'] ? $set['sp_manmsn'] = $this->req['post']['mmsn'] : '';
		$this->req['post']['mqq'] ? $set['sp_manqq'] = $this->req['post']['mqq'] : '';
		$this->req['post']['mtaobao'] ? $set['sp_mantaobao'] = $this->req['post']['mtaobao'] : '';
		$this->req['post']['address'] ? $set['sp_office'] = $this->req['post']['address'] : '';
		$this->req['post']['libaddr'] ? $set['sp_svn'] = $this->req['post']['libaddr'] : '';
		$this->req['post']['website'] ? $set['sp_website'] = $this->req['post']['website'] : '';
		$this->req['post']['email'] ? $set['sp_email'] = $this->req['post']['email'] : '';
		$this->req['post']['bname'] ? $set['sp_bankname'] = $this->req['post']['bname'] : '';
		$this->req['post']['bno'] ? $set['sp_bankno'] = $this->req['post']['bno'] : '';
		$this->req['post']['product'] ? $set['sp_product'] = $this->req['post']['product'] : '';
		if($set)
		{
			$rs = $this->db->set(array(
				'table' => 'xgm_supplier',
				'key' => array_keys($set),
				'value' => array_values($set),
				'where' => array('and' => array('sp_id' => $this->req['post']['spid'])),
				));

			if($rs === false)
			{
				//数据库出错
			}
		}
		N8_Helper_Helper::showMessage('操作成功', 'index.php?control=user&action=suplist');
	}

	public function cardface()
	{
		$edit = 0;
		if($this->req['post']['submit'])
		{
			if(!$this->req['post']['cviewid'])
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_cardview',
					'key' => array('cview_name', 'cview_desc', 'cview_date'),
					'value' => array($this->req['post']['facename'] . ',' . $this->req['post']['facemark'] . ',{{now()}}')
				));
			}
			else
			{
				$this->req['post']['facename'] ? $set['cview_name'] = $this->req['post']['facename'] : '';
				$this->req['post']['facemark'] ? $set['cview_desc'] = $this->req['post']['facemark'] : '';
				if($set)
				{
					$rs = $this->db->set(array(
						'table' => 'xgm_cardview',
						'key' => array_keys($set),
						'value' => array_values($set),
						'where' => array('and' => array('cview_id' => $this->req['post']['cviewid'])),
					));
				}
			}

			if($rs === false)
			{
				
			}
			else
			{
				N8_Helper_Helper::showMessage('操作成功', 'index.php?action=cardface');
			}
		}

		//查看列表
		$data = $this->db->get(array(
			'table' => 'xgm_cardview',
			'key' => array('cview_id', 'cview_name', 'cview_desc', 'cview_date'),
		));

		if($this->req['get']['cviewid'])
		{
			$sizeData = sizeof($data);
			for($i = 0; $i < $sizeData; $i++)
			{
				if($data[$i][0] == $this->req['get']['cviewid'])
					$cData = $data[$i];
			}

			$edit = 1;
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
				'cData' => $cData,
				'data' => $data,
				'cviewid' => $this->req['get']['cviewid'],
				'edit' => $edit
		));
	}

	public function delcf()
	{
		$rs = $this->db->del(array(
			'table' => 'xgm_cardview',
			'where' => array('and' => array('cview_id' => $this->req['get']['cviewid'])),
		));

		if($rs === false)
		{
			
		}
		else
		{
			N8_Helper_Helper::showMessage('操作成功', 'index.php?action=cardface');
		}
	}

	public function gcarddef()
	{
		$edit = 0;
		
		if($this->req['post']['submit'])
		{
			$cviewInfo = unserialize($this->req['post']['cviewinfo']);
			if(!$this->req['post']['ciid'])
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_cardinfo',
					'key' => array('ci_name', 'ci_money', 'ci_date', 'ci_type', 'ci_desc', 'ci_mark'),
					'value' => array($this->req['post']['ciname'] . ',' . $this->req['post']['cimoney'] . ',{{now()}},' . $this->req['post']['citype'] . ',' . $this->req['post']['cidesc'] . ',' . $this->req['post']['cimark'])
				));
			}
			else
			{
				$this->req['post']['ciname'] ? $set['ci_name'] = $this->req['post']['ciname'] : '';
				$this->req['post']['cimoney'] ? $set['ci_money'] = $this->req['post']['cimoney'] : '';
				$this->req['post']['citype'] ? $set['ci_type'] = $this->req['post']['citype'] : '';
				$this->req['post']['cidesc'] ? $set['ci_desc'] = $this->req['post']['cidesc'] : '';
				$this->req['post']['cimark'] ? $set['ci_mark'] = $this->req['post']['cimark'] : '';
				if($set)
				{
					$rs = $this->db->set(array(
						'table' => 'xgm_cardinfo',
						'key' => array_keys($set),
						'value' => array_values($set),
						'where' => array('and' => array('ci_id' => $this->req['post']['ciid'])),
					));
				}
			}
			
			if($rs === false)
			{
				if($this->db->getErrno() == '23000')
					N8_Helper_Helper::showMessage('卡名称已经存在');
				else
					N8_Helper_Helper::showMessage('插入失败，请稍候再试');
			}
			else
			{
				N8_Helper_Helper::showMessage('操作成功', 'index.php?action=gcarddef');
			}
		}

		if($this->req['get']['ciid'])
		{
			$data = $this->db->get(array(
				'table' => 'xgm_cardinfo',
				'key' => array('ci_id', 'ci_name', 'ci_money', 'cview_id', 'cview_name', 'ci_type', 'ci_desc', 'ci_mark'),
				'where' => array('and' => array('ci_id' => $this->req['get']['ciid'])),
				'limit' => array(0, 1)
			));

			$edit = 1;
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
				'data' => $data[0],
				'ciid' => $this->req['get']['ciid'],
				'edit' => $edit,
		));
	}

	public function gcardlist()
	{
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
		$perNum = 30;
		$start = ($page-1)*$perNum;
		$allNums = $this->db->get(array(
			'table' => 'xgm_cardinfo',
			'key' => array('count(*)'),
		));

		$data = $this->db->get(array(
			'table' => 'xgm_cardinfo',
			'key' => array('ci_id', 'ci_name', 'ci_money', 'cview_name', 'ci_date', 'ci_type', 'ci_desc', 'ci_mark'),
			'limit' => array($start, $perNum)
		));

		$page =	N8_Helper_Helper::setPage(array(
					'allNums' => $allNums[0][0], 
					'curPage' => $page,
					'perNum' => $perNum));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'data' => $data,
							'page' => $page
		));
	}
}
