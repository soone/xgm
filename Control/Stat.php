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
			'where' => array('and' => array('now()' => '{{DATE_ADD(gl_edate, INTERVAL -3 MONTH)}}'), 'oper' => array('now()' => '>'))
		));
		$this->view->Assign(array('expnums' => $expNums[0][0]));
	}

	public function gin()
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
