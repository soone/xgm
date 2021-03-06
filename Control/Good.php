<?php
/**
 * 物品处理控制器
 *
 * @author soone(fengyue15#163.com)
 */
class Control_Good extends N8_Core_Control
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

	public function cate()
	{
		if($this->req['post']['submit'])
		{
			$this->req['post']['gcid'] ? $set['gc_pid'] = $this->req['post']['pid'] : '';
			$this->req['post']['mark'] ? $set['gc_mark'] = $this->req['post']['mark'] : '';

			if($this->req['post']['gcid'] > 0)
			{
				$rs = 1;
				if($set)
				{
					$rs = $this->db->set(array(
						'table' => 'xgm_goodcat',
						'key' => array_keys($set),
						'value' => array_values($set),
						'where' => array('and' => array('gc_id' => $this->req['post']['gcid']))
					));
				}
			}
			else
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_goodcat',
					'key' => array('gc_name', 'gc_time', 'gc_pid', 'gc_mark'),
					'value' => array($this->req['post']['catname'] . ',{{now()}},' . $this->req['post']['pid'] . ',' . $this->req['post']['mark'])
				));
			}

			if($rs === false)
			{
				if($this->db->getErrno() == 23000)
					$msg = '该分类名称已经存在';
				else
					$msg = '操作失败';

				N8_Helper_Helper::showMessage($msg, $_SERVER['HTTP_REFERER']);
			}
			else
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=good&action=cate');
		}

		$data = $this->db->get(array(
			'table' => 'xgm_goodcat',
			'key' => array('*'),
		));

		if($this->req['get']['gcid'] && $data)
		{
			foreach($data as $d)
			{
				if($d[0] == $this->req['get']['gcid'])
					$cur = $d;
			}
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
			'data' => $data,
			'cur' => $cur
		));
	}

	public function del()
	{
		//查看该分类下面是否有分类或者物品
		$rs = $this->db->get(array(
			'table' => 'xgm_goodcat',
			'key' => array('gc_id'),
			'where' => array('and' => array('gc_pid' => $this->req['get']['gcid'])),
			'limit' => array(0, 1)
		));

		if(!$rs)
		{
			$rs = $this->db->get(array(
				'table' => 'xgm_goodlib',
				'key' => array('gc_id'),
				'where' => array('and' => array('gc_id' => $this->req['get']['gcid'])),
				'limit' => array(0, 1)
			));
		}

		if($rs)
			N8_Helper_Helper::showMessage('该分类下存在二级分类或者物品，无法删除');

		//删除
		$rs = $this->db->del(array(
			'table' => 'xgm_goodcat',
			'where' => array('and' => array('gc_id' => $this->req['get']['gcid']))
		));

		if($rs === false)
			N8_Helper_Helper::showMessage('操作失败,请稍候再试');
		else
			N8_Helper_Helper::showMessage('操作成功', 'index.php?control=good&action=cate');
	}

	public function goodin()
	{
		if($this->req['post']['submit'])
		{
			$this->req['post']['shortname'] ? $set['gl_shortname'] = $this->req['post']['shortname'] : '';
			$this->req['post']['cate'] ? $set['gc_id'] = $this->req['post']['cate'] : '';
			$this->req['post']['proname'] ? $set['gl_brand'] = $this->req['post']['proname'] : '';
			$this->req['post']['factory'] ? $set['gl_from'] = $this->req['post']['factory'] : '';
			$this->req['post']['bz'] ? $set['gl_pack'] = $this->req['post']['bz'] : '';
			$this->req['post']['pername'] ? $set['gl_per'] = $this->req['post']['pername'] : '';
			$this->req['post']['myprice'] ? $set['gl_mprice'] = $this->req['post']['myprice'] : '';
			$this->req['post']['libwarn'] ? $set['gl_warn'] = $this->req['post']['libwarn'] : '';
			$this->req['post']['warntype'] ? $set['gl_warnper'] = $this->req['post']['warntype'] : '';
			$this->req['post']['mark'] ? $set['gl_mark'] = $this->req['post']['mark'] : '';
			$this->req['post']['type'] ? $set['gl_type'] = $this->req['post']['type'] : '';
			$this->req['post']['weight'] ? $set['gl_w'] = $this->req['post']['weight'] : '';
			$this->req['post']['netweight'] ? $set['gl_net'] = $this->req['post']['netweight'] : '';

			//取得供应商id
			$spId = $this->db->get(array(
				'table' => 'xgm_inorder',
				'key' => array('sp_id'),
				'where' => array('and' => array('io_no' => $this->req['post']['order'])),
				'limit' => array(0, 1)
			));

			if($spId === false)
				N8_Helper_Helper::showMessage('进货单号不存在');

			$supId = $spId[0][0];
			//取得公司名称
			$supplier = $this->db->get(array(
				'table' => 'xgm_supplier',
				'key' => array('sp_name'),
				'where' => array('and' => array('sp_id' => $supId)),
				'limit' => array(0, 1)
			));

			if($supplier === false)
				N8_Helper_Helper::showMessage('目前无供货商资料，请先填写供货商资料', 'index.php?action=supplier');

			if(!$this->req['post']['giid'])//增加
			{
				//插入goodin
				$inrs = $this->db->create(array(
					'table' => 'xgm_goodin',
					'key' => array('sp_id', 'gl_edate', 'gl_inprice', 'gl_adprice', 'gl_nums', 'gl_order', 'sp_name', 'gl_date', 'gl_state', 'gl_leaves', 'gl_name', 'gl_prodate'),
					'value' => array($supId . ',' . $this->req['post']['expirdate'] . ',' . $this->req['post']['oprice'] . ',' . $this->req['post']['adprice'] . ',' . $this->req['post']['nums'] . ',' . $this->req['post']['order'] . ',' . $supplier[0][0] . ',{{now()}},' . $this->req['post']['state'] . ',' . $this->req['post']['nums'] . ',' . $this->req['post']['goodname'] . ',' . $this->req['post']['createdate'])
				));

				if($inrs === false)
					N8_Helper_Helper::showMessage('操作失败，请稍候再试');

				//查看lib里面有没有这个商品
				$libdata = $this->db->get(array(
					'table' => 'xgm_goodlib',
					'key' => array('gl_id', 'gl_leaves'),
					'where' => array('and' => array('gl_name' => $this->req['post']['goodname'])),
					'limit' => array(0, 1)
				));

				if($libdata)//更新goodlib
				{
					$set['gl_leaves'] = $libdata[0][1] + $this->req['post']['nums'];
					if($set)
					{
						$librs = $this->db->set(array(
							'table' => 'xgm_goodlib',
							'key' => array_keys($set),
							'value' => array_values($set),
							'where' => array('and' => array('gl_id' => $libdata[0][0])),
						));
					}
				}
				else//插入
				{
					$set['gl_name'] = $this->req['post']['goodname'];
					$set['gl_leaves'] = $this->req['post']['nums'];
					$librs = $this->db->create(array(
						'table' => 'xgm_goodlib',
						'key' => array_keys($set),
						'value' => array(implode(',', array_values($set)))
					));
				}

				if($librs === false)
					N8_Helper_Helper::showMessage('操作失败，请稍候再试');

			}
			else//更新
			{
				$inNums = $this->db->get(array(
					'table' => 'xgm_goodin',
					'key' => array('gl_nums', 'gl_leaves'),
					'where' => array('and' => array('giid' => $this->req['post']['giid'])),
					'limit' => array(0, 1)
				));
				if($inNums === false)
					N8_Helper_Helper::showMessage('操作失败，请稍候再试');

				$this->req['post']['goodname'] ? $inSet['gl_name'] = $this->req['post']['goodname'] : '';
				$this->req['post']['nums'] ? $inSet['gl_nums'] = $this->req['post']['nums'] : '';
				$this->req['post']['oprice'] ? $inSet['gl_inprice'] = $this->req['post']['oprice'] : '';
				$this->req['post']['adprice'] ? $inSet['gl_adprice'] = $this->req['post']['adprice'] : '';
				$this->req['post']['expirdate'] ? $inSet['gl_edate'] = $this->req['post']['expirdate'] : '';
				$this->req['post']['order'] ? $inSet['gl_order'] = $this->req['post']['order'] : '';
				$inSet['sp_name'] = $supplier[0][0];
				$inSet['gl_leaves'] = $inSet['gl_nums']-($inNums[0][0]-$inNums[0][1]);
				$inSet['sp_id'] = $supId;

				$upinrs = $this->db->set(array(
					'table' => 'xgm_goodin',
					'key' => array_keys($inSet),
					'value' => array_values($inSet),
					'where' => array('and' => array('giid' => $this->req['post']['giid'])),
				));
				if($upinrs === false)
					N8_Helper_Helper::showMessage('操作失败，请稍候再试');

				$this->req['post']['goodname'] ? $set['gl_name'] = $this->req['post']['goodname'] : '';
				if($set)//更新goodlib
				{
					$set['gl_leaves'] = $inSet['gl_leaves'];
					$uplibrs = $this->db->set(array(
						'table' => 'xgm_goodlib',
						'key' => array_keys($set),
						'value' => array_values($set),
						'where' => array('and' => array('gl_name' => $this->req['post']['goodname'])),
					));

					if($uplibrs === false)
						N8_Helper_Helper::showMessage('操作失败，请稍候再试');
				}
			}
			N8_Helper_Helper::showMessage('操作成功', 'index.php?control=good&action=liblist');
		}

		//供货商列表
		$slist = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name'),
		));

		if(!$slist)
			N8_Helper_Helper::showMessage('目前无供货商资料，请先填写供货商资料', 'index.php?action=supplier');

		//进货订单列表
		$inolist = $this->db->get(array(
			'table' => 'xgm_inorder',
			'key' => array('io_id', 'io_no'),
			'order' => array('desc' => array('io_id')),
			'limit' => array(0, 1)
		));

		if(!$inolist)
			N8_Helper_Helper::showMessage('请先添加进货订单号', 'index.php?control=good&action=ioadd');
		
		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
			'slist' => $slist,
			'olist' => $inolist
		));
	}

	public function getlib()
	{
		$gdata = $this->db->get(array(
			'table' => 'xgm_goodlib',
			'key' => array('*'),
			'where' => array('and' => array('gl_name' => $this->req['get']['gn'])),
			'limit' => array(0, 1)
		));

		//查询分类
		$clist = $this->db->get(array(
			'table' => 'xgm_goodcat',
			'key' => array('gc_id', 'gc_name', 'gc_pid')
		));

		if(!$clist)
			N8_Helper_Helper::showMessage('请先添加分类', 'index.php?control=good&action=cate');
		else
			$r[1] = $clist;

		if(!$gdata)
			$r[0] = 0;
		else
			$r[0] = $gdata[0];

		echo json_encode($r);
	}

	public function inlist()
	{
		$sp = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name')
		));

		if($this->req['get']['sp_id'])
			$where['and']['sp_id'] = $this->req['get']['sp_id'];

		if($this->req['get']['sdate'])
		{
			if($this->req['get']['edate'])
			{
				$where['and']['io_date'][] = $this->req['get']['sdate'];
				$where['oper']['io_date'] = array('>=', '<=');
			}
			else
			{
				$where['and']['io_date'] = $this->req['get']['sdate'];
				$where['oper']['io_date'] = '>=';
			}
		}

		if($this->req['get']['edate'])
		{
			if($this->req['get']['sdate'])
				$where['and']['io_date'][] = $this->req['get']['edate'];
			else
			{
				$where['and']['io_date'] = $this->req['get']['edate'];
				$where['oper']['io_date'] = '<=';
			}
		}

		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
		$perNum = 30;
		$start = ($page-1)*$perNum;
		$allNums = $this->db->get(array(
			'table' => 'xgm_inorder',
			'key' => array('count(*)'),
		));

		$data = $this->db->get(array(
			'table' => 'xgm_inorder',
			'key' => array('io_id', 'io_no', 'io_date', 'io_total', 'io_mark', 'io_paytime'),
			'where' => $where,
			'limit' => array($start, $perNum),
			'order' => array('desc' => array('io_id'))
		));

		$page =	N8_Helper_Helper::setPage(array(
					'allNums' => $allNums[0][0], 
					'curPage' => $page,
					'perNum' => $perNum));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'iolist' => $data,
							'sp' => $sp,
							'page' => $page
		));
	}

	public function ioadd()
	{
		if($this->req['post']['submit'])
		{
			if($ioid = intval($this->req['post']['ioid']))//更新
			{
				$re = $this->db->set(array(
					'table' => 'xgm_inorder',
					'key' => array('io_no', 'io_date', 'io_total', 'io_mark', 'io_paytime', 'sp_id'),
					'value' => array($this->req['post']['io_no'], $this->req['post']['io_date'], $this->req['post']['io_total'], $this->req['post']['io_mark'], (!$this->req['post']['io_paytime'] ? '0000-00-00 00:00:00' : $this->req['post']['io_paytime']), $this->req['post']['sp_id']),
					'where' => array('and' => array('io_id' => $this->req['post']['ioid']))
				));
			}
			else//增加
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_inorder',
					'key' => array('io_no', 'io_date', 'io_total', 'io_mark', 'io_adate', 'sp_id'),
					'value' => array($this->req['post']['io_no'] . ',' . $this->req['post']['io_date'] . ',' . $this->req['post']['io_total'] . ',' . $this->req['post']['io_mark'] . ',' . '{{now()}}' . ',' . $this->req['post']['sp_id'])
				));
			}

			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
			else
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=good&action=inlist');
		}

		if($this->req['get']['ioid'])
		{
			$info = $this->db->get(array(
				'table' => 'xgm_inorder',
				'key' => array('*'),
				'where' => array('and' => array('io_id' => $this->req['get']['ioid'])),
				'limit' => array(0, 1)
			));
		}

		//供货商列表
		$slist = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name'),
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
			'info' => $info[0], 'slist' => $slist
		));
	}

	public function liblist()
	{
		//库存总价值余量
		$leaveMoney = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('sum(gl_leaves*gl_inprice)'),
			'where' => array('and' => array('gl_leaves' => 0), 'oper' => array('gl_leaves' => '>'))
		));

		//显示库存列表
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
        $perNum = 30;
        $start = ($page-1)*$perNum;
		$dsql = array(
        	'table' => 'xgm_goodlib',
        	'key' => array('gl_id', 'gl_name', 'gl_per', 'gl_mprice', 'gl_leaves', 'gl_mark', 'gl_isspec'),
        	'limit' => array($start, $perNum),
		);
		$where = array('gl_leaves' => 0);
		if($this->req['get']['cstype'])
		{
			$where['gc_id'] = $this->req['get']['cstype'];
			$dsql['where'] = array('and' => array('gc_id' => $this->req['get']['cstype']));
		}

        $allNums = $this->db->get(array(
        	'table' => 'xgm_goodlib',
        	'key' => array('count(1)'),
			'where' => array('and' => $where, 'oper' => array('gl_leaves' => '>'))
        ));

        $data = $this->db->get($dsql);
        $page =	N8_Helper_Helper::setPage(array(
        			'allNums' => $allNums[0][0], 
        			'curPage' => $page,
        			'perNum' => $perNum));

		$pInfo = 0;
		if($this->req['cookie']['pInfo'])
			$pInfo = 1;

		//读取分类列表
		$clist = $this->db->get(array(
			'table' => 'xgm_goodcat',
			'key' => array('gc_id', 'gc_name', 'gc_pid')
		));

		if($clist)
		{
			foreach($clist as $v)
			{
				if($v[2] == 0)
					$bigCate[] = $v;
				else
					$smallCate[$v[2]][] = $v;
			}
		}

        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
        					'liblist' => $data,
							'pInfo' => $pInfo,
        					'page' => $page,
							'bigcate' => $bigCate,
							'leaveMoney' => $leaveMoney[0][0],
							'smallcate' => json_encode($smallCate)
        ));
	}

	public function getcart()
	{
		//赠品列表
		$freeGood = $this->db->get(array(
			'table' => 'xgm_goodlib',
			'key' => array('gl_id', 'gl_name', 'gl_leaves'),
			'where' => array('and' => array('gl_mprice' => 0, 'gl_leaves' => 0), 'oper' => array('gl_leaves' => '>'))
		));

        $this->render(array(
			'tplDir' => $this->conf->get('view->rDir'),
			'fgood' => $freeGood));
	}

	public function order()
	{
		if($this->req['post']['submit'])
		{
			$this->req['post']['email'] ? $set['ou_email'] = $this->req['post']['email'] : '';
			$this->req['post']['truename'] ? $set['ou_truename'] = $this->req['post']['truename'] : '';
			$this->req['post']['pinname'] ? $set['ou_pinyin'] = $this->req['post']['pinname'] : '';
			$this->req['post']['mobile'] ? $set['ou_phone'] = $this->req['post']['mobile'] : '';
			$this->req['post']['phone'] ? $set['ou_tel'] = $this->req['post']['phone'] : '';
			//插入数据库
			$cInfo = $this->db->get(array(
				'table' => 'xgm_orderuser',
				'key' => array('ou_id', 'ou_address'),
				'where' => array('and' => array('ou_phone' => $this->req['post']['mobile'])),
				'limit' => array(0, 1)
			));

			if($cInfo)
			{
				$rs = $this->db->set(array(
					'table' => 'xgm_orderuser',
					'key' => array_keys($set),
					'value' => array_values($set),
					'where' => array('and' => array('ou_id' => $cInfo[0][0]))
				));

				$set['ou_id'] = $cInfo[0][0];
				$set['ou_address'] = $cInfo[0][1];
			}
			else
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_orderuser',
					'key' => array_keys($set),
					'value' => array(implode(',', array_values($set)))
				));
				$set['ou_id'] = $this->db->getLastInsertId();
			}

			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
			else
			{
				if(!$total = $this->req['post']['total'])
					$total = 0;

				$adr = $this->db->get(array(
					'table' => 'xgm_getaddress',
					'key' => array('*'),
					'where' => array('and' => array('ou_id' => $set['ou_id']))
				));
				
				$set['total'] = $total;
				$set['otype'] = $this->req['post']['otype'];
				$set['gadr'] = $adr;
				setcookie('pInfo', json_encode($set), $_SERVER['REQUEST_TIME']+7200);
				N8_Helper_Helper::showMessage(NULL, 'index.php?control=good&action=liblist');
			}
		}

		//设置cookie
		if($this->req['get']['clnum'] && $this->req['get']['clid'] && $this->req['get']['balance'])
		{
			setcookie('cardInfo', json_encode(array('no' => $this->req['get']['clnum'], 'id' => $this->req['get']['clid'], 'balance' => $this->req['get']['balance'])), $_SERVER['REQUEST_TIME']+7200);
		}

        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'ctype' => $this->req['get']['ctype']
		));
	}

	public function getpinfo()
	{
		$pInfo = $this->db->get(array(
			'table' => 'xgm_orderuser',
			'key' => array('ou_truename', 'ou_pinyin', 'ou_email', 'ou_tel', 'ou_total', 'ou_id'),
			'where' => array('and' => array('ou_phone' => $this->req['get']['ou_phone'])),
			'limit' => array(0, 1)
		));

		if($pInfo)
		{
			if($pInfo[0][4] >= 1000 && $pInfo[0][4] < 2000)
				$pInfo[0][4] = 1;
			elseif($pInfo[0][4] >= 2000 && $pInfo[0][4] < 3000)
				$pInfo[0][4] = 2;
			elseif($pInfo[0][4] >= 3000 && $pInfo[0][4] < 4000)
				$pInfo[0][4] = 3;
			elseif($pInfo[0][4] >= 4000 && $pInfo[0][4] < 5000)
				$pInfo[0][4] = 4;
			elseif($pInfo[0][4] >= 5000 && $pInfo[0][4] < 6000)
				$pInfo[0][4] = 5;
			elseif($pInfo[0][4] >= 6000 && $pInfo[0][4] < 7000)
				$pInfo[0][4] = 6;
			elseif($pInfo[0][4] >= 7000 && $pInfo[0][4] < 8000)
				$pInfo[0][4] = 7;
			elseif($pInfo[0][4] >= 8000 && $pInfo[0][4] < 9000)
				$pInfo[0][4] = 8;
			elseif($pInfo[0][4] >= 9000 && $pInfo[0][4] < 10000)
				$pInfo[0][4] = 9;
			elseif($pInfo[0][4] >= 10000)
				$pInfo[0][4] = 10;
			else
				$pInfo[0][4] = 0;

			echo json_encode($pInfo[0]);
		}
		else
			echo 0;
	}

	public function corder()
	{
		//处理订货人的cookie
		$orderPeople = $this->req['cookie']['pInfo'];
		if(!$orderPeople)
			N8_Helper_Helper::showMessage('订货人信息丢失');

		if($this->req['post']['oneAddress'] == 'new')
		{
			if(!$this->req['post']['addName'] || 
				!$this->req['post']['address'] ||
				(!$this->req['post']['addPho'] && 
				!$this->req['post']['addTel']))
				N8_Helper_Helper::showMessage('请选择或者填写送货人信息');
		}

		if(!$this->req['post']['sdate'])
			N8_Helper_Helper::showMessage('请填写配送日期');

		if(!$this->req['cookie']['shopCart'])
			N8_Helper_Helper::showMessage('购物车不能为空');

		if($this->req['post']['sn'] != $this->req['cookie']['sn'])
		{
			setcookie('sn', $this->req['post']['sn'], 1800);
			$oPe = json_decode(stripslashes($orderPeople), true);
			//处理收货人信息
			if($this->req['post']['oneAddress'] == 'new')
			{
				$this->db->create(array(
					'table' => 'xgm_getaddress',
					'key' => array('ou_id', 'ga_getter', 'ga_address', 'ga_phone', 'ga_tel'),
					'value' => array($oPe['ou_id'].','.$this->req['post']['addName'].','.$this->req['post']['address'].','.$this->req['post']['addPho'].','.$this->req['post']['addTel'])
				));

				$addInfo = json_encode(array($this->db->getLastInsertId(), $this->req['post']['addName'], $this->req['post']['address'], $this->req['post']['addPho'], $this->req['post']['addTel']));
			}
			else
			{
				$rs = $this->db->get(array(
					'table' => 'xgm_getaddress',
					'key' => array('ga_id', 'ga_getter', 'ga_address', 'ga_phone', 'ga_tel'),
					'where' => array('and' => array('ga_id' => $this->req['post']['oneAddress'])),
					'limit' => array(0, 1)
				));
				$addInfo = json_encode($rs[0]);
			}

			//生成订单号保存订单信息
			$fName = date('ymdHi');
			$f = $this->conf->get('tmp') . 'g_' . date('ymd');
			$fNo = 1;
			if(is_file($f))
			{
				$fNo = intval(file_get_contents($f))+1;
				$fp = @fopen($f, 'w');
				@fwrite($fp, $fNo);
				@fclose($fp);
			}
			else
			{
				$fp = @fopen($f, 'w');
				@fwrite($fp, $fNo);
				@fclose($fp);
			}

			$orderNo = $fName.sprintf('%03d', $fNo);
			$cuttax = $this->req['post']['cuttax'] ? $this->req['post']['cuttax'] : 0;
			$good = json_decode(stripslashes($this->req['cookie']['shopCart']), true);
			foreach($good as $eGood)
			{
				$goodArr .= $spe . $eGood[0] . ',' . $eGood[2];
				$spe = '|';
			}

			$cId = '';
			if($oPe['otype'] == 1 || $oPe['otype'] == 2)
			{
				$cardInfo = json_decode(stripslashes($this->req['cookie']['cardInfo']), true);
				$cId = $cardInfo['id'];
				if(!$cId)
					N8_Helper_Helper::showMessage('请先确认卡号');
			}

			$params = array(
				$oPe['ou_id'],//用户id
				$goodArr,//物品
				$orderNo,//订单号
				$oPe['otype'],//订单类型
				$cuttax,//折扣率
				$cId,//卡号id
				$this->req['post']['smark'],
				$this->req['post']['fmark'],
				$this->req['post']['gmark'],
				$this->req['post']['gtype'],
				$this->req['post']['omark'],
				$oPe['ou_phone'],
				$oPe['ou_truename'],
				$addInfo,
				$this->req['post']['extmoney'],
				$this->req['post']['sdate']
			);

			$oRs = $this->db->callProc('createOrder', $params);
			if(!$oRs)
				N8_Helper_Helper::showMessage('订单生成失败，请稍候再试');
			else
			{
				foreach($this->req['cookie'] as $k => $v)
				{
					if($k != 'sn') setcookie($k, NULL, $_SERVER['REQUEST_TIME']-7200);
				}

				N8_Helper_Helper::showMessage('订单生成成功，订单号：' . $orderNo, 'index.php?control=good&action=orderlist');
			}
		}
		else
		{
			foreach($this->req['cookie'] as $c)
			{
				if($c != 'sn') setcookie($c, NULL, $_SERVER['REQUEST_TIME']-7200);
			}

			N8_Helper_Helper::showMessage('index.php?control=good&action=orderlist');
		}
	}

	public function orderlist()
	{
		if($this->req['get']['otype'] || $this->req['get']['carno'] || $this->req['get']['cphone'] || $this->req['get']['cname'] || $this->req['get']['cdate'] || $this->req['get']['cstatus'] || $this->req['get']['sdate'] || $this->req['get']['ono'] || $this->req['get']['cstatus'] != '')
		{
			$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
			$perNum = 30;
			$start = ($page-1)*$perNum;
			$cWhere = array(
				'table' => 'xgm_goodorder',
				'key' => array('count(*)'),
			);
			$dWhere = array(
				'table' => 'xgm_goodorder',
				'key' => array('go_id', 'go_order', 'ou_truename', 'go_status', 'go_type', 'go_sdate', 'go_allprice', 'cl_id'),
				'limit' => array($start, $perNum),
				'order' => array('desc' => array('go_sdate'))
			);
			$this->req['get']['cphone'] ? $and['ou_phone'] = $this->req['get']['cphone'] : '';
			$this->req['get']['cname'] ? $and['ou_truename'] = $this->req['get']['cname'] : '';
			$this->req['get']['cdate'] ? $and['go_date'] = array($this->req['get']['cdate'] . ' 00:00:00', $this->req['get']['cdate'] . ' 23:59:59') : '';
			$this->req['get']['sdate'] ? $and['go_sdate'] = array($this->req['get']['sdate'] . ' 00:00:00', $this->req['get']['sdate'] . ' 23:59:59') : '';
			$this->req['get']['ono'] ? $and['go_order'] = $this->req['get']['ono'] : '';
			$this->req['get']['carno'] ? $and['car_no'] = $this->req['get']['carno'] : '';
			$this->req['get']['otype'] ? $and['go_type'] = $this->req['get']['otype'] : '';
			$this->req['get']['cstatus'] && $this->req['get']['cstatus'] != 100 ? $and['go_status'] = $this->req['get']['cstatus'] : '';
			if($and)
			{
				$cWhere['where']['and'] = $and;
				$dWhere['where']['and'] = $and;
				$cWhere['where']['oper']['go_date'] = array('>=', '<=');
				$dWhere['where']['oper']['go_date'] = array('>=', '<=');
				$cWhere['where']['oper']['go_sdate'] = array('>=', '<=');
				$dWhere['where']['oper']['go_sdate'] = array('>=', '<=');
			}

			$allNums = $this->db->get($cWhere);
			$data = $this->db->get($dWhere);
			for($i = 0, $l = sizeof($data); $i < $l; $i++)
			{
				$clNo = $this->db->get(array(
					'table' => 'xgm_cardlib',
					'key' => array('cl_num'),
					'where' => array('and' => array('cl_id' => $data[$i][7])),
					'limit' => array(0, 1)
				));

				$data[$i][8] = $clNo[0][0];
			}
			$page =	N8_Helper_Helper::setPage(array(
						'allNums' => $allNums[0][0], 
						'curPage' => $page,
						'perNum' => $perNum));
		}
        //车牌列表
		$carNo = $this->db->get(array(
			'table' => 'xgm_car',
			'key' => array('car_no'),
			'where' => array('and' => array('car_status' => 1))
		));
        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
        					'golist' => $data,
							'cNo' => $carNo,
        					'page' => $page
        ));
	}

	public function gout()
	{
		$oInfo = $this->db->get(array(
			'table' => 'xgm_goinfo',
			'key' => array('gl_id', 'gl_name', 'goi_nums'),
			'where' => array('and' => array('go_order' => $this->req['get']['go'])),
		));

		if($oInfo)
		{
			$goInfo = $subInfo = array();
			foreach($oInfo as $v)
			{
				$vInfo = $this->db->get(array(
					'table' => 'xgm_goodin',
					'key' => array('gi_id', 'gl_order', 'gl_leaves', 'gl_date', 'gl_edate', 'gl_prodate'),
					'where' => array('and' => array('gl_name' => $v[1], 'gl_state' => 1)),
					'order' => array('asc' => array('gl_date'))
				));

				$v[3] = $vInfo;
				$goInfo[] = $v;
				if(!isset($subInfo[$v[0]]['goiNum']))
					$subInfo[$v[0]]['goiNum'] = $v[2];

				$subInfo[$v[0]]['inInfo'] = $vInfo;
			}

			if($this->req['post']['submit'])
			{
				foreach($subInfo as $k => $v)
				{
					//$sum = array_sum($this->req['post']['yl'][$k]);
					//if($sum != $v['goiNum'])
					//{
					//	N8_Helper_Helper::showMessage('数量错误');
					//	break;
					//}

					$left = $v['goiNum'];
					foreach($v['inInfo'] as $ik => $iv)
					{
						//if($iv[2] < $this->req['post']['yl'][$k][$iv[0]])
						//{
						//	N8_Helper_Helper::showMessage('物品数量错误');
						//	break;
						//}

						if($iv[2] >= $left)
						{
							$goodArr .= $spe . $iv[0] . ',' . $left;
							$spe = '|';
							break;
						}
						else
						{
							$goodArr .= $spe . $iv[0] . ',' . $iv[2];
							$left = $left - $iv[2];
						}
					}
				}

				//调用存储过程
				$params = array(
					$this->req['get']['go'],//订单号
					$goodArr,//物品
					$this->req['post']['cp'],
					$this->req['post']['yc'],
					$this->req['post']['omark']
				);

				$oRs = $this->db->callProc('outOrder', $params);
				if($oRs)
					N8_Helper_Helper::showMessage('出库成功', 'index.php?control=good&action=orderlist');
				else
					N8_Helper_Helper::showMessage('出库失败');
			}

			$cpInfo = $this->db->get(array(
				'table' => 'xgm_car',
				'key' => array('car_id', 'car_no'),
				'where' => array('and' => array('car_status' => 1))
			));

			$orInfo = $this->db->get(array(
				'table' => 'xgm_goodorder',
				'key' => array('go_omark'),
				'where' => array('and' => array('go_order' => $this->req['get']['go'])),
				'limit' => array(0, 1)
			));

			$this->render(array('tplDir' => $this->conf->get('view->rDir'),
								'goInfo' => $goInfo,
								'cpInfo' => $cpInfo,
								'orderNo' => $this->req['get']['go'],
								'oMark' => $orInfo[0][0]
			));
		}
		else
			N8_Helper_Helper::showMessage('订单数据错误，请检查');
	}

	public function gochange()
	{
		if($this->req['get']['t'] == 2)
		{
			$rs = $this->db->set(array(
				'table' => 'xgm_goodorder',
				'key' => array('go_status'),
				'value' => array($this->req['get']['t']),
				'where' => array('and' => array('go_id' => $this->req['get']['id'], 'go_status' => '1'), 'oper' => array('go_status' => '<>'))
			));

			if($rs)
				N8_Helper_Helper::showMessage('操作成功', $_SERVER['HTTP_REFERER']);
			else
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
		}
		else
			N8_Helper_Helper::showMessage('请选择合法的操作');
	}

	public function backchange()
	{
		$oNo = $this->db->get(array(
			'table' => 'xgm_goodorder',
			'key' => array('go_order', 'go_id', 'go_status'),
			'where' => array('and' => array('go_id' => $this->req['get']['id'])),
			'limit' => array(0, 1)
		));

		if(!$oNo)
			N8_Helper_Helper::showMessage('配送单不存在');

		if($oNo[0][2] == 1)
		{
			$oRs = $this->db->callProc('wrongOrder', array(3, $oNo[0][0], NULL, NULL));
			if($oRs)
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=good&action=orderlist');
			else
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
		}

		$gInfo = $this->db->get(array(
			'table' => 'xgm_goinfo',
			'key' => array('gl_id', 'goi_nums', 'gl_name'),
			'where' => array('and' => array('go_order' => $oNo[0][0]))
		));

		if($this->req['post']['submit'])
		{
			if($this->req['post']['t'] == 2)//全部退货
				$oRs = $this->db->callProc('wrongOrder', array(2, $oNo[0][0], NULL, NULL));
			else if($this->req['post']['t'] == 1)//部分送达
			{
				foreach($gInfo as $v)
				{
					if($v[1] < $this->req['post']['oknum'][$v[0]])
						N8_Helper_Helper::showMessage('输入的送达数量大于配送单中的数量，请检查');

					$okNums .= $spe . $v[0] . ',' . intval($this->req['post']['oknum'][$v[0]]);
					$spe = '|';
				}

				//生成异常配送单号
 				$fName = date('ymdHi');
 				$f = $this->conf->get('tmp') . 'w_' . date('ymd');
 				$fNo = 1;
 				if(is_file($f))
 				{
					$fNo = intval(file_get_contents($f))+1;
					$fp = @fopen($f, 'w');
					@fwrite($fp, $fNo);
					@fclose($fp);
				}
				else
				{
					$fp = @fopen($f, 'w');
					@fwrite($fp, $fNo);
					@fclose($fp);
				}
	 
				$wrongNo = $fName.sprintf('%03d', $fNo);
				$oRs = $this->db->callProc('wrongOrder', array(1, $oNo[0][0], $wrongNo, $okNums));
			}

			if($oRs)
				N8_Helper_Helper::showMessage('操作成功', 'index.php?control=good&action=orderlist');
			else
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
		}

        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'id' => $oNo[0][1],
							'orderNo' => $oNo[0][0],
							'gInfo' => $gInfo
		));
	}

	public function toprint()
	{
		$this->render(array('tplDir' => $this->conf->get('view->rDir')));
	}

	public function toprint1()
	{
		if($this->req['get']['date'])
		{
			$oInfo = $this->db->get(array(
				'table' => 'xgm_goodorder',
				'key' => array('go_order', 'car_no', 'ou_phone', 
								'cl_id', 'go_mtype', 'go_mark', 
								'go_sendmoney', 'go_type', 'ou_truename',
								'ou_oneaddress', 'go_smark', 'go_fmark', 
								'go_date', 'go_oprice', 'go_omark'),
				'where' => array('and' => array('go_status' => 6, 'go_sdate' => $this->req['get']['date']))
			));

			if($oInfo)
			{
				$allOrder = $carOrder = $allCarGood = $allGood = $cars = array();
				foreach($oInfo as $k => $v)
				{
					$cInfo = $this->db->get(array(
						'table' => 'xgm_goinfo',
                        'key' => array('goi_nums', 'gl_name', 'gl_id'),
                        'where' => array('and' => array('go_order' => $v[0]))
					));
					$v[15] = $cInfo;
					$addInfo = json_decode($v[9], true);
					$v[16] = $addInfo[1];
					$v[17] = $addInfo[2];
					$v[18] = $addInfo[3];
					if($v[3] > 0)
					{
						$cardNum = $this->db->get(array(
							'table' => 'xgm_cardlib',
							'key' => array('cl_num', 'ci_id'),
							'where' => array('and' => array('cl_id' => $v[3])),
							'limit' => array(0, 1)
						));

						$cardName = $this->db->get(array(
							'table' => 'xgm_cardinfo',
							'key' => array('ci_name'),
							'where' => array('and' => array('ci_id' => $cardNum[0][1])),
							'limit' => array(0, 1)
						));
						$v[19] = $cardNum[0][0] . '(' . $cardName[0][0] . ')';
					}
					else
						$v[19] = $v[0];
					if(!in_array($v[1], $cars))
						$cars[] = $v[1];

					foreach($cInfo as $ck => $cv)
					{
						$gLibInfo = $this->db->get(array(
							'table' => 'xgm_goodlib',
							'key' => array('gl_shortname', 'gc_id'),
							'where' => array('and' => array('gl_id' => $cv[2])),
							'limit' => array(0, 1)
						));

						$glArr[] = array($gLibInfo[0][0], $cv[0]);
						$cateName = $this->db->get(array(
							'table' => 'xgm_goodcat',
							'key' => array('gc_name'),
							'where' => array('and' => array('gc_id' => $gLibInfo[0][1])),
							'limit' => array(0, 1)
						));
						$cv[] = $cateName[0][0];
						$cv[] = $gLibInfo[0][0];

						if(!isset($allGood[$cv[2]]))
							$allGood[$cv[2]] = $cv;
						else
							$allGood[$cv[2]][0] += $cv[0];

						if(!$allCarGood[$v[1]][$cv[2]])
							$allCarGood[$v[1]][$cv[2]] = $cv;
						else
							$allCarGood[$v[1]][$cv[2]][0] += $cv[0];
					}
					$v[20] = $glArr;
					$carOrder[$v[1]][] = $v;
					$allOrder[] = $v;
				}
				sort($allGood);
				foreach($allCarGood as $sK => $sV)
				{
					sort($allCarGood[$sK]);
				}

				$this->render(array('tplDir' => $this->conf->get('view->rDir'),
									'allOrder' => $allOrder,
									'allGood' => $allGood,
									'carOrder' => $carOrder,
									'allCarGood' => $allCarGood,
									'cars' => $cars
				));
			}
			else
				N8_Helper_Helper::showMessage('没有数据');
		}
		else
			N8_Helper_Helper::showMessage('没有数据');
	}

	public function wrongin()
	{
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
        $perNum = 30;
        $start = ($page-1)*$perNum;
        $allNums = $this->db->get(array(
        	'table' => 'xgm_goodexception',
        	'key' => array('count(*)'),
        ));
                                                                                
        $data = $this->db->get(array(
        	'table' => 'xgm_goodexception',
        	'key' => array('ge_id', 'go_order', 'ge_status', 'ge_type', 'ge_cdate', 'go_worder'),
        	'limit' => array($start, $perNum),
        	'order' => array('desc' => array('ge_id'))
        ));

        $page =	N8_Helper_Helper::setPage(array(
        			'allNums' => $allNums[0][0], 
        			'curPage' => $page,
        			'perNum' => $perNum));
                                                                                
        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
        					'gelist' => $data,
        					'page' => $page
        ));
	}

	public function gowrongin()
	{
		$orderCon = $this->db->get(array(
			'table' => 'xgm_goodorder',
			'key' => array('go_outinfomark'),
			'where' => array('and' => array(
				'go_order' => $this->req['get']['order'],
				'go_status' => 3)
			),
			'limit' => array(0, 1)
		));

		if(!$orderCon)
			N8_Helper_Helper::showMessage('数据出错');
		else
		{
			if($this->req['post']['submit'])
			{
				$keys = array_keys($this->req['post']['yl']);
				for($k = 0, $x = count($keys); $k < $x; $k++)
				{
					$bInfo[] = $keys[$k] . ',' . $this->req['post']['yl'][$keys[$k]];
				}

				$gRs = $this->db->callProc('goBackPro', array($this->req['get']['order'], implode('|', $bInfo)));
				if($gRs)
					N8_Helper_Helper::showMessage('回库成功', 'index.php?control=good&action=wrongin');
				else
					N8_Helper_Helper::showMessage('回库失败');
			}

			$wOrderNo = $this->db->get(array(
				'table' => 'xgm_goodexception',
				'key' => array('go_worder'),
				'where' => array('and' => array(
					'go_order' => $this->req['get']['order']
				),
				'limit' => array(0, 1))
			));
			if(!$wOrderNo)
				N8_Helper_Helper::showMessage('数据出错');
			else
			{
				$wGoInfo = $this->db->get(array(
					'table' => 'xgm_goinfo',
					'key' => array('gl_id'),
					'where' => array('and' => array(
						'go_order' => $wOrderNo[0][0]
					))
				));

				$wArr = array();
				for($i = 0, $j = count($wGoInfo); $i < $j; $i++)
				{
					$wArr[] = $wGoInfo[$i][0];
				}
			}

			$oInfo = explode('|', $orderCon[0][0]);
			for($i = 0, $j = count($oInfo); $i < $j; $i++)
			{
				$tempInfo = explode(',', $oInfo[$i]);
				if(in_array($tempInfo[0], $wArr))
					$orderInfo[] = $tempInfo;
			}

			$this->render(array('tplDir' => $this->conf->get('view->rDir'),
								'orderInfo' => $orderInfo,
								'order' => $this->req['get']['order']
			));
		}

	}

	public function ininfo()
	{
		$inInfo = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('*'),
			'where' => array('and' => array('gl_order' => $this->req['get']['order']))
		));

		if(!$inInfo)
			N8_Helper_Helper::showMessage('没有该资料，请检查');

		//查找供货商
		$sInfo = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_id', 'sp_name'),
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'inInfo' => $inInfo,
							'sInfo' => $sInfo,
							'order' => $this->req['get']['order']
		));
	}

	public function egin()
	{
		$ginfo = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('gl_leaves', 'gl_name'),
			'where' => array('and' => array('gi_id' => $this->req['post']['gid'])),
			'limit' => array(0, 1)
		));

		if(!$ginfo)
			N8_Helper_Helper::showMessage('没有该资料，请检查');

		$sp = $this->db->get(array(
			'table' => 'xgm_supplier',
			'key' => array('sp_name'),
			'where' => array('and' => array('sp_id' => $this->req['post']['sp'])),
			'limit' => array(0, 1)
		));
		$spName = $sp[0][0];

		$rsGin = $this->db->set(array(
			'table' => 'xgm_goodin',
			'key' => array('gl_nums', 'gl_leaves', 'gl_inprice', 'gl_adprice', 'gl_edate', 'gl_prodate', 'sp_id', 'sp_name'),
			'value' => array($this->req['post']['nums'], $this->req['post']['nums'], 
			$this->req['post']['inprice'], $this->req['post']['adprice'], 
			$this->req['post']['edate'], $this->req['post']['prodate'], 
			$this->req['post']['sp'], $spName),
			'where' => array('and' => array('gi_id' => $this->req['post']['gid']))
		));

		if($rsGin && $ginfo[0][0] != $this->req['post']['nums'])
		{
			$left = $this->req['post']['nums']-$ginfo[0][0];
			$rsLib = $this->db->set(array(
				'table' => 'xgm_goodlib',
				'key' => array('gl_leaves'),
				'value' => array('{{gl_leaves+'.$left.'}}'),
				'where' => array('and' => array('gl_name' => $ginfo[0][1]))
			));

		}

		if($rsGin)
			N8_Helper_Helper::showMessage('修改成功');
		else
			N8_Helper_Helper::showMessage('修改失败');
	}

	public function gindel()
	{
		$ginfo = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('gl_leaves', 'gl_name', 'gi_id'),
			'where' => array('and' => array('gl_name' => $this->req['get']['name'])),
			'limit' => array(0, 1)
		));

		if(!$ginfo)
			N8_Helper_Helper::showMessage('没有该资料，请检查');

		$rsGin = $this->db->set(array(
			'table' => 'xgm_goodin',
			'key' => array('gl_state'),
			'value' => array(0),
			'where' => array('and' => array('gi_id' => $ginfo[0][2]))
		));

		if($rsGin)
		{
			$rsLib = $this->db->get(array(
				'table' => 'xgm_goodlib',
				'key' => array('*'),
				'where' => array('and' => array('gl_name' => $ginfo[0][1]))
			));
			
			$rsLibGood = implode(',', $rsLib[0]) . "\n";
			//记录文本日志
			$fp = fopen($this->conf->get('log') . 'delLib.log', 'a+');
			fwrite($fp, $rsLibGood);
			fclose($fp);

			//删除库记录
			$this->db->del(array(
				'table' => 'xgm_goodlib',
				'where' => array('and' => array('gl_name' => $ginfo[0][1]))
			));

			N8_Helper_Helper::showMessage('删除成功', 'index.php?control=good&action=liblist');
		}
		else
			N8_Helper_Helper::showMessage('删除失败');
	}

	public function gedit()
	{
		$libInfo = $this->db->get(array(
			'table' => 'xgm_goodlib',
			'key' => array('*'),
			'where' => array('and' => array('gl_name' => $this->req['get']['name'])),
			'limit' => array(0, 1)
		));

		if(!$libInfo)
			N8_Helper_Helper::showMessage('没有该资料，请检查');

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'libInfo' => $libInfo[0],
							'gName' => $this->req['get']['name']
		));
	}

	public function ginlist()
	{
		$inOrderList = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('gl_order', 'gl_date', 'gl_inprice', 'sp_id', 'gl_prodate', 'gl_adprice', 'gl_edate', 'gl_leaves', 'gl_nums'),
			'where' => array('and' => array('gl_name' => $this->req['get']['name']))
		));

		if($inOrderList)//取供应商
		{
			for($i = 0, $j = sizeof($inOrderList); $i < $j; $i++)
			{
				$sp = $this->db->get(array(
					'table' => 'xgm_supplier',
					'key' => array('sp_name'),
					'where' => array('and' => array('sp_id' => $inOrderList[$i][3])),
					'limit' => array(0, 1)
				));
				if($sp)
					$inOrderList[$i][] = $sp[0][0];
			}
		}

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'inOrderList' => $inOrderList,
							'gName' => $this->req['get']['name']
		));
	}

	public function changecar()
	{
		$order = $this->db->get(array(
			'table' => 'xgm_goodorder',
			'key' => array('car_no'),
			'where' => array('and' => array('go_order' => $this->req['get']['oid'], 'go_status' => 6)),
			'limit' => array(0, 1)
		));

		if(!$order)
			N8_Helper_Helper::showMessage('数据错误');

		if($this->req['post']['submit'])
		{
			if(!$this->req['post']['cp'])
				N8_Helper_Helper::showMessage('请选择新的车牌');

			$carsName = $this->db->get(array(
				'table' => 'xgm_car',
				'key' => array('car_no'),
				'where' => array('and' => array('car_id' => $this->req['post']['cp'])),
				'limit' => array(0, 1)
			));

			$oRs = $this->db->set(array(
				'table' => 'xgm_goodorder',
				'key' => array('car_no', 'car_id'),
				'value' => array($carsName[0][0], $this->req['post']['cp']),
				'where' => array('and' => array('go_order' => $this->req['get']['oid'], 'go_status' => 6))
			));
			if(!$oRs)
				N8_Helper_Helper::showMessage('更新失败');
			else
				N8_Helper_Helper::showMessage('更新成功', 'index.php?control=good&action=orderlist&cstatus=6');
		}

		$cars = $this->db->get(array(
			'table' => 'xgm_car',
			'key' => array('car_id', 'car_no'),
			'where' => array('and' => array('car_status' => 1))
		));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'car' => $order[0][0],
							'cpInfo' => $cars,
							'oid' => $this->req['get']['oid']
		));
	}

	public function expgood()
	{
		$expGoods = $this->db->get(array(
			'table' => 'xgm_goodin',
			'key' => array('gl_name', 'gl_edate', 'gl_nums', 'gl_order', 'sp_name'),
			'where' => array('and' => array('now()' => '{{DATE_ADD(gl_edate, INTERVAL -5 MONTH)}}'), 'oper' => array('now()' => '>'))
		));
		$this->render(array('tplDir' => $this->conf->get('view->rDir'),	'liblist' => $expGoods,));
	}

	public function orderinfo()
	{
		$orderInfo = $this->db->get(array(
			'table' => 'xgm_goodorder',
			'key' => array('*'),
			'where' => array('and' => array('go_order' => $this->req['get']['go'])),
			'limit' => array(0, 1)
		));

		if($orderInfo)
		{
			$goInfo = $this->db->get(array(
				'table' => 'xgm_goinfo',
				'key' => array('gl_id', 'goi_nums', 'gl_name', 'goi_outinfo'),
				'where' => array('and' => array('go_order' => $this->req['get']['go']))
			));

			if($orderInfo[0][6])
			{
				$cardNo = $this->db->get(array(
					'table' => 'xgm_cardlib',
					'key' => array('cl_num'),
					'where' => array('and' => array('cl_id' => $orderInfo[0][6])),
					'limit' => array(0, 1)
				));
			}

			$orderInfo[0][17] = json_decode($orderInfo[0][17], true);

			$this->render(array('tplDir' => $this->conf->get('view->rDir'),
								'orderInfo' => $orderInfo[0],
								'goInfo' => $goInfo,
								'cardNo' => $cardNo[0][0]
			));
		}
		else
			N8_Helper_Helper::showMessage('对不起，找不到该资料');
	}
}
