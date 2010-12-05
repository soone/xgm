<?php
/**
 * 统计控制器
 *
 * @author soone(fengyue15#163.com)
 */
class Control_Stat extends N8_Core_Control
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
			'where' => array('and' => array('now()' => '{{DATE_ADD(gl_edate, INTERVAL -5 MONTH)}}'), 'oper' => array('now()' => '>'))
		));
		$this->view->Assign(array('expnums' => $expNums[0][0]));
	}

	public function scard()
	{
		if($this->req['get']['ctype'] || $this->req['get']['buyname'] || $this->req['get']['exp'] || $this->req['get']['cvalue'] || $this->req['get']['cstatus'] != '')
		{
			$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
			$perNum = 30;
			$start = ($page-1)*$perNum;
			$cWhere = array(
				'table' => 'xgm_cardlib',
				'key' => array('count(*)'),
			);
			$dWhere = array(
				'table' => 'xgm_cardlib',
				'key' => array('ci_id', 'co_id', 'cl_num', 'cl_state', 'cl_otime', 'cl_expire', 'ci_money', 'co_order'),
				'limit' => array($start, $perNum)
			);

			$theOrInfo = array();

			if($this->req['get']['buyname'])
			{
				$cOrder = $this->db->get(array(
					'table' => 'xgm_cardorder',
					'key' => array('co_id', 'co_order', 'cu_name', 'cview_name'),
					'where' => array('and' => array('cu_name' => $this->req['get']['buyname']))
				));

				for($i = 0, $j = count($cOrder); $i < $j; $i++)
				{
					$cOrderId[] = $cOrder[$i][0];
					$theOrInfo[$cOrder[$i][0]] = $cOrder[$i];
				}

				$and['co_id'] = $cOrderId;
			}

			$this->req['get']['exp'] ? $and['cl_expire'] = array($this->req['get']['exp'] . ' 00:00:00', $this->req['get']['exp'] . ' 23:59:59') : '';
			$this->req['get']['cvalue'] ? $and['ci_money'] = $this->req['get']['cvalue'] : '';

			$this->req['get']['cstatus'] || $this->req['get']['cstatus'] === 0 ? $and['cl_state'] = $this->req['get']['cstatus'] : '';
			if($and)
			{
				$cWhere['where']['and'] = $and;
				$dWhere['where']['and'] = $and;
				$cWhere['where']['oper']['cl_expire'] = array('>=', '<=');
				$dWhere['where']['oper']['cl_expire'] = array('>=', '<=');
			}

			$allNums = $this->db->get($cWhere);
			$data = $this->db->get($dWhere);

			$cardInfoArr = array();
			for($i = 0, $l = sizeof($data); $i < $l; $i++)
			{
				if(!array_key_exists($data[$i][1], $theOrInfo))
				{
					$cOrderInfo = $this->db->get(array(
						'table' => 'xgm_cardorder',
						'key' => array('co_id', 'co_order', 'cu_name', 'cview_name'),
						'where' => array('and' => array('co_id' => $data[$i][1])),
						'limit' => array(0, 1)
					));

					$theOrInfo[$data[$i][1]] = $cOrderInfo[0];
				}

				if(!array_key_exists($data[$i][0], $cardInfoArr))
				{
					$cInfoName = $this->db->get(array(
						'table' => 'xgm_cardinfo',
						'key' => array('ci_name'),
						'where' => array('and' => array('ci_id' => $data[$i][0])),
						'limit' => array(0, 1)
					));

					$cardInfoArr[$data[$i][0]] = $cInfoName[0][0];
				}

				$myData[] = array(
							$theOrInfo[$data[$i][1]][1], 
							$data[$i][2], 
							$cardInfoArr[$data[$i][0]],
							$theOrInfo[$data[$i][1]][3],
							$theOrInfo[$data[$i][1]][2],
							$data[$i][4],
							$data[$i][5],
							$data[$i][3]);
			}

			$page =	N8_Helper_Helper::setPage(array(
						'allNums' => $allNums[0][0], 
						'curPage' => $page,
						'perNum' => $perNum));
		}

        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
        					'cardlist' => $myData,
        					'page' => $page
        ));
	}

	public function tc()
	{
		//查供应商
		$supplier = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name')
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
			'sp' => $supplier,
		));
	}
}
