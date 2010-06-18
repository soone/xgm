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
			if(!$this->req['post']['cviewid'])
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_cardview',
					'key' => array('cview_name', 'cview_desc', 'cview_date'),
					'value' => array($this->req['post']['facename'] . ',' . $this->req['post']['facemark'] . ',' . date('Y-m-d H:i:s'))
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

		//查看礼品卡列表
		$data = $this->db->get(array(
			'table' => 'xgm_cardinfo',
			'key' => array('ci_id', 'ci_name', 'ci_money'),
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
				'cdata' => $data
		));
	}
}
