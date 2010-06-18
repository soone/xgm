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

			$set['cu_atime'] = date('Y-m-d H:i:s');
			$set['cu_sex'] = $this->req['post']['sex'];
			//插入定卡客户表
			$rs = $this->db->create(array(
				'table' => 'xgm_carduser',
				'key' => array_keys($set),
				'value' => array(implode(',',array_values($set))),
				'replace' => 1
			));
			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请重试');
				
			$oset['cu_id'] = $this->db->getLastInsertId();
			$oset['cu_name'] = $this->req['post']['cname'];
			
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
			$oset['co_order'] = date('YmdHis') . sprintf('%04s', mt_rand(1, 8000));

			$this->req['post']['nums'] ? $oset['co_totalnums'] = $this->req['post']['nums'] : '';
			$this->req['post']['omoney'] ? $oset['co_total'] = $this->req['post']['omoney'] : '';
			$this->req['post']['emoney'] ? $oset['co_ava'] = $this->req['post']['emoney'] : '';
			$this->req['post']['invoctext'] ? $oset['co_invoice'] = $this->req['post']['invoctext'] : '';
			$this->req['post']['mark'] ? $oset['co_mark'] = $this->req['post']['mark'] : '';
			if(!$oset)
				N8_Helper_Helper::showMessage('操作失败，数据缺少');

			$oset['co_ctime'] = $set['cu_atime'];
			$rs = $this->db->create(array(
				'table' => 'xgm_cardorder',
				'key' => array_keys($oset),
				'value' => array(implode(',', array_values($oset)))
			));

			if($rs === false)
			{
				N8_Helper_Helper::showMessage('操作失败，请重试');
			}

			//插入卡号
			$arrCard = explode(',', $this->req['post']['cards']);
			$cardCounts = count($arrCard);
			for($i = 0; $i < $cardCounts; $i++)
			{
				if(!$arrCard[$i]) continue;
				$cset[] = $this->req['post']['ciid'] . ',' . $this->db->getLastInsertId() . ',' . $arrCard[$i] . ',' . $set['cu_atime'] . ',2020-01-01,' . $this->req['post']['cmoney'] . ',' . $this->req['post']['cmoney'] . ',' . $oset['co_order'];
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
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=card&action=orderlist');

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
}
