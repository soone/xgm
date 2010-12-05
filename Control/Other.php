<?php
/**
 * 司机和车牌处理控制器
 *
 * @author soone fengyue15#163.com
 */
class Control_Other extends N8_Core_Control
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

	public function scman()
	{
		if($this->req['post']['submit'])
		{
			if($this->req['post']['sj'])
			{
				$this->db->Create(array(
					'table' => 'xgm_sender',
					'key' => array('s_sender', 's_addtime'),
					'value' => array($this->req['post']['sj'] . ',{{now()}}')
				));
			}
			
			if($this->req['post']['cp'])
			{
				$this->db->Create(array(
					'table' => 'xgm_car',
					'key' => array('car_no', 'car_addtime'),
					'value' => array($this->req['post']['cp'] . ',{{now()}}')
				));
			}

			N8_Helper_Helper::showMessage('添加成功', 'index.php?control=other&action=scman');
		}

		$sjInfo = $this->db->get(array(
			'table' => 'xgm_sender',
			'key' => array('s_id', 's_sender', 's_status', 's_addtime'),
			'order' => array('desc' => array('s_addtime'), 'asc' => array('s_status'))
		));

		$cpInfo = $this->db->get(array(
			'table' => 'xgm_car',
			'key' => array('car_id', 'car_no', 'car_status', 'car_addtime'),
			'order' => array('desc' => array('car_addtime'), 'asc' => array('car_status'))
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'sjInfo' => $sjInfo,
							'cpInfo' => $cpInfo,
		));
	}

	public function scedit()
	{
		if($this->req['get']['type'] == 'sj')
		{
			$this->req['get']['name'] ? $set['s_sender'] = $this->req['get']['name'] : '';
			$this->req['get']['status'] ? $set['s_status'] = $this->req['get']['status'] : '';

			$this->db->set(array(
				'table' => 'xgm_sender',
				'key' => array_keys($set),
				'value' => array_values($set),
				'where' => array('and' => array('s_id' => $this->req['get']['id']))
			));
		}

		if($this->req['get']['type'] == 'cp')
		{
			$this->req['get']['name'] ? $set['car_no'] = $this->req['get']['name'] : '';
			$this->req['get']['status'] ? $set['car_status'] = $this->req['get']['status'] : '';

			$this->db->set(array(
				'table' => 'xgm_car',
				'key' => array_keys($set),
				'value' => array_values($set),
				'where' => array('and' => array('car_id' => $this->req['get']['id']))
			));
		}

		N8_Helper_Helper::showMessage('修改成功', $_SERVER['HTTP_REFERER']);
	}
}
