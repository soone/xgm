<?php
/**
 * 售卡处理控制器
 *
 * @author soone fengyue15#163.com
 */
class Control_Card extends N8_Core_Control
{
	public $db;
	public function __init()
	{
		$this->db = new N8_Dblayer_Dblayer();
		$this->db->setDs($this->conf->get('db->0->type'), $this->conf->get('db->0->option'));
	}

	public function order()
	{
		$edit = 0;
		if($this->req['post']['submit'])
		{
			$this->req['post']['cname'] ? $set['cu_name'] = $this->req['post']['cname'] : '';
			$this->req['post']['cpinyin'] ? $set['cu_py'] = $this->req['post']['cpinyin'] : '';
			$this->req['post']['ccom'] ? $set['cu_company'] = $this->req['post']['ccom'] : '';
			$this->req['post']['tel1'] ? $set['cu_tel1'] = $this->req['post']['tel1'] : '';
			$this->req['post']['tel2'] ? $set['cu_tel2'] = $this->req['post']['tel2'] : '';
			$this->req['post']['email'] ? $set['cu_email'] = $this->req['post']['email'] : '';
			$this->req['post']['website'] ? $set['cu_website'] = $this->req['post']['website'] : '';
			$this->req['post']['msn'] ? $set['cu_msn'] = $this->req['post']['msn'] : '';
			$this->req['post']['qq'] ? $set['cu_qq'] = $this->req['post']['qq'] : '';
			$this->req['post']['taobao'] ? $set['cu_taobao'] = $this->req['post']['taobao'] : '';
			$this->req['post']['fetion'] ? $set['cu_fetion'] = $this->req['post']['fetion'] : '';
			$this->req['post']['bname'] ? $set['cu_bankname'] = $this->req['post']['bname'] : '';
			$this->req['post']['bno'] ? $set['cu_bank'] = $this->req['post']['bno'] : '';
			$this->req['post']['mark'] ? $set['cu_mark'] = $this->req['post']['mark'] : '';
			if(!$set)
				N8_Helper_Helper::showMessage('操作失败，数据缺少');

			$set['cu_atime'] = '{{now()}}';
			$set['cu_sex'] = $this->req['post']['sex'];
			//插入定卡客户表
			$urs = $this->db->get(array(
				'table' => 'xgm_carduser',
				'key' => array('cu_id'),
				'where' => array('and' => array('cu_name' => $set['cu_name'])),
				'limit' => array(0, 1)
			));

			if($urs)
			{
				$rs = $this->db->set(array(
					'table' => 'xgm_carduser',
					'key' => array_keys($set),
					'value' => array_values($set),
					'where' => array('and' => array('cu_id' => $urs[0][0])),
				));
				$oset['cu_id'] = $usr[0][0];
			}
			else
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_carduser',
					'key' => array_keys($set),
					'value' => array(implode(',',array_values($set))),
				));
				$oset['cu_id'] = $this->db->getLastInsertId();
			}

			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请重试');
	
			$oset['cu_name'] = $this->req['post']['cname'];

			//查看卡号是否存在了，存在的话就返回
			$arrCard = explode(',', $this->req['post']['cards']);
			$cdata = $this->db->get(array(
				'table' => 'xgm_cardlib',
				'key' => array('cl_num'),
				'where' => array('and' => array('cl_num' => $arrCard, 'ci_id' => $this->req['post']['ciid'])),
			));

			if($cdata)
			{
				$badCard = '';
				foreach($cdata as $v)
					$badCard .= '\\n' . $v[0];

				N8_Helper_Helper::showMessage('您选择的卡号有的已售出，请确认。\\n已售卡号：\\n' . $badCard);
			}
			
			//查卡资料
			$data = $this->db->get(array(
				'table' => 'xgm_cardinfo',
				'key' => array('*'),
				'where' => array('and' => array('ci_id' => $this->req['post']['ciid'])),
				'limit' => array(0, 1)
			));

			if($data === false)
				N8_Helper_Helper::showMessage('操作失败，请重试');

			$data[0]['cardNums'] = $this->req['post']['nums'];
			$oset['co_text'] = addslashes(serialize($data[0]));

			$this->req['post']['nums'] ? $oset['co_totalnums'] = $this->req['post']['nums'] : '';
			$this->req['post']['omoney'] ? $oset['co_total'] = $this->req['post']['omoney'] : '';
			$this->req['post']['emoney'] ? $oset['co_ava'] = sprintf('%.2f', $this->req['post']['emoney']) : '';
			$this->req['post']['invoctext'] ? $oset['co_invoice'] = $this->req['post']['invoctext'] : '';
			$this->req['post']['mark'] ? $oset['co_mark'] = $this->req['post']['mark'] : '';
			if(!$oset)
				N8_Helper_Helper::showMessage('操作失败，数据缺少');

			$oset['co_ctime'] = $set['cu_atime'];
			$oset['cview_name'] = $data[0][1];
			$oset['co_order'] = date('YmdHis') . sprintf('%04s', mt_rand(1, 8000));
			$rs = $this->db->create(array(
				'table' => 'xgm_cardorder',
				'key' => array_keys($oset),
				'value' => array(implode(',', array_values($oset)))
			));

			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请重试');

			//插入卡号
			$cardCounts = count($arrCard);
			for($i = 0; $i < $cardCounts; $i++)
			{
				if(!$arrCard[$i]) continue;
				$cset[] = $this->req['post']['ciid'] . ',' . $this->db->getLastInsertId() . ',' . $arrCard[$i] . ',' . $set['cu_atime'] . ',' . date('Y-m-d H:i:s', strtotime($this->req['post']['expdate'])) . ',' . $this->req['post']['cmoney'] . ',' . $this->req['post']['cmoney'] . ',' . $oset['co_order'];
			}

			if(!$cset)
				N8_Helper_Helper::showMessage('操作失败，数据缺少');

			$rs = $this->db->create(array(
					'table' => 'xgm_cardlib',
					'key' => array('ci_id', 'co_id', 'cl_num', 'cl_date', 'cl_expire', 'ci_money', 'ci_balance', 'co_order'),
					'value' => $cset
			));

			if($rs === false)
			{
				//记录日志
			}
			else
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=card&action=colist');

		}

		//查看礼品卡列表
		$data = $this->db->get(array(
			'table' => 'xgm_cardinfo',
			'key' => array('ci_id', 'ci_name', 'ci_money'),
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
				'cdata' => $data
		));
	}

	public function check()
	{
		$data = $this->db->get(array(
			'table' => 'xgm_carduser',
			'key' => array('*'),
			'where' => array('and' => array('cu_name' => $this->req['get']['cname'])),
			'limit' => array(0, 1)
		));

		if(!$data)
			echo 0;
		else
			echo json_encode($data[0]);
	}

	public function colist()
	{
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
		$perNum = 30;
		$start = ($page-1)*$perNum;
		$allNums = $this->db->get(array(
			'table' => 'xgm_cardorder',
			'key' => array('count(*)'),
		));

		$data = $this->db->get(array(
			'table' => 'xgm_cardorder',
			'key' => array('co_id', 'co_order', 'co_total', 'co_totalnums', 'co_ava', 'cview_name', 'co_invoice', 'co_ctime', 'cu_name', 'cu_id', 'co_status'),
			'limit' => array($start, $perNum),
			'order' => array('desc' => array('co_id'))
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

	public function cstatus()
	{
		$rs = $this->db->set(array(
			'table' => 'xgm_cardorder',
			'key' => array('co_status', 'co_stime'),
			'value' => array($this->req['get']['s'], '{{now()}}'),
			'where' => array('and' => array('co_id' => $this->req['get']['coid']))
		));

		if($rs === false)
			N8_Helper_Helper::showMessage('操作失败，请稍候再试');
		else
		{
			if($this->req['get']['s'] == 3)
			{
				$this->db->set(array(
					'table' => 'xgm_cardlib',
					'key' => array('cl_otime'),
					'value' => array('{{now()}}'),
					'where' => array('and' => array('co_id' => $this->req['get']['coid']))
				));
			}

			header('Location:' . $_SERVER['HTTP_REFERER']);
		}
	}

	public function minfo()
	{
		$data = $this->db->get(array(
			'table' => 'xgm_cardorder',
			'key' => array('*'),
			'where' => array('and' => array('co_id' => $this->req['get']['coid'])),
			'limit' => array(0, 1)
		));

		if(!$data)
			N8_Helper_Helper::showMessage('该订单不存在');

		$data[0][6] = unserialize($data[0][6]);

		$cardNum = $this->db->get(array(
			'table' => 'xgm_cardlib',
			'key' => array('cl_num'),
			'where' => array('and' => array('co_id' => $this->req['get']['coid'])),
		));
		if($cardNum)
		{
			$i = 0;
			foreach($cardNum as $cn)
			{
				$i++;
				$cNums .= $sp . $cn[0];
				$sp = ',';
				$br = '<br />';
				if($i == 10)
				{
					$cNums .= $br;
					$sp = $br = '';
					$i = 0;
				}
			}
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
				'data' => $data[0],
				'cNums' => $cNums,
				'refurl' => $_SERVER['HTTP_REFERER']
		));
	}

	public function search()
	{
		if($this->req['get']['submit'])
		{
			$card = $this->db->get(array(
				'table' => 'xgm_cardlib',
				'key' => array('*'),
				'where' => array('and' => array('cl_num' => $this->req['get']['cardno'])),
				'limit' => array(0, 1)
			));

			if($card)
			{
				$cType = $this->db->get(array(
					'table' => 'xgm_cardinfo',
					'key' => array('*'),
					'where' => array('and' => array('ci_id' => $card[0][0])),
					'limit' => array(0, 1)
				));

				$orders = $this->db->get(array(
					'table' => 'xgm_goodorder',
					'key' => array('go_id', 'go_order', 'go_date', 'go_sdate', 'go_status'),
					'where' => array('and' => array('cl_id' => $card[0][0])),

				));
			}
			else
			{
				N8_Helper_Helper::showMessage('对不起，卡号不存在');
			}
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
			'card' => $card[0],
			'cType' => $cType[0],
			'orders' => $orders,
			'eTime' => strtotime($card[0][7])
		));
	}
}
