<?php
/**
 * 物品处理控制器
 *
 * @author soone fengyue15#163.com
 */
class Control_Good extends N8_Core_Control
{
	public $db;
	public function __init()
	{
		$this->db = new N8_Dblayer_Dblayer();
		$this->db->setDs($this->conf->get('db->0->type'), $this->conf->get('db->0->option'));
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

			//取得公司名称
			$supplier = $this->db->get(array(
				'table' => 'xgm_supplier',
				'key' => array('sp_name'),
				'where' => array('and' => array('sp_id' => $this->req['post']['sp_id'])),
				'limit' => array(0, 1)
			));

			if($supplier === false)
				N8_Helper_Helper::showMessage('目前无供货商资料，请先填写供货商资料', 'index.php?action=supplier');

			if(!$this->req['post']['giid'])//增加
			{
				//插入goodin
				$inrs = $this->db->create(array(
					'table' => 'xgm_goodin',
					'key' => array('sp_id', 'gl_edate', 'gl_inprice', 'gl_adprice', 'gl_nums', 'gl_order', 'sp_name', 'gl_date', 'gl_state', 'gl_leaves', 'gl_name'),
					'value' => array($this->req['post']['sp_id'] . ',' . $this->req['post']['expirdate'] . ',' . $this->req['post']['oprice'] . ',' . $this->req['post']['adprice'] . ',' . $this->req['post']['nums'] . ',' . $this->req['post']['order'] . ',' . $supplier[0][0] . ',{{now()}},' . $this->req['post']['state'] . ',' . $this->req['post']['nums'] . ',' . $this->req['post']['goodname'])
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
				$this->req['post']['sp_id'] ? $inSet['sp_id'] = $this->req['post']['sp_id'] : '';
				$this->req['post']['adprice'] ? $inSet['gl_adprice'] = $this->req['post']['adprice'] : '';
				$this->req['post']['expirdate'] ? $inSet['gl_edate'] = $this->req['post']['expirdate'] : '';
				$this->req['post']['order'] ? $inSet['gl_order'] = $this->req['post']['order'] : '';
				$inSet['sp_name'] = $supplier[0][0];
				$inSet['gl_leaves'] = $inSet['gl_nums']-($inNums[0][0]-$inNums[0][1]);

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
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
		$perNum = 30;
		$start = ($page-1)*$perNum;
		$allNums = $this->db->get(array(
			'table' => 'xgm_inorder',
			'key' => array('count(*)'),
		));

		$data = $this->db->get(array(
			'table' => 'xgm_inorder',
			'key' => array('io_id', 'io_no', 'io_date', 'io_total', 'io_mark'),
			'limit' => array($start, $perNum),
			'order' => array('desc' => array('io_id'))
		));

		$page =	N8_Helper_Helper::setPage(array(
					'allNums' => $allNums[0][0], 
					'curPage' => $page,
					'perNum' => $perNum));

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
							'iolist' => $data,
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
					'key' => array('io_no', 'io_date', 'io_total', 'io_mark'),
					'value' => array($this->req['post']['io_no'], $this->req['post']['io_date'], $this->req['post']['io_total'], $this->req['post']['io_mark']),
					'where' => array('and' => array('io_id' => $this->req['post']['ioid']))
				));
			}
			else//增加
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_inorder',
					'key' => array('io_no', 'io_date', 'io_total', 'io_mark', 'io_adate'),
					'value' => array($this->req['post']['io_no'] . ',' . $this->req['post']['io_date'] . ',' . $this->req['post']['io_total'] . ',' . $this->req['post']['io_mark'] . ',' . '{{now()}}')
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

		$this->render(array('tplDir' => $this->conf->get('view->rDir'),
			'info' => $info[0]
		));
	}

	public function liblist()
	{
		//显示库存列表
		$page = $this->req['get']['page'] ? $this->req['get']['page'] : 1;
        $perNum = 30;
        $start = ($page-1)*$perNum;
        $allNums = $this->db->get(array(
        	'table' => 'xgm_goodlib',
        	'key' => array('count(1)'),
			'where' => array('and' => array('gl_leaves' => 0), 'oper' => array('gl_leaves' => '>'))
        ));

        $data = $this->db->get(array(
        	'table' => 'xgm_goodlib',
        	'key' => array('gl_id', 'gl_name', 'gl_per', 'gl_mprice', 'gl_leaves', 'gl_mark', 'gl_isspec'),
        	'limit' => array($start, $perNum),
        ));
                                                                                
        $page =	N8_Helper_Helper::setPage(array(
        			'allNums' => $allNums[0][0], 
        			'curPage' => $page,
        			'perNum' => $perNum));

		$pInfo = 0;
		if($this->req['cookie']['pInfo'])
			$pInfo = 1;
                                                                                
        $this->render(array('tplDir' => $this->conf->get('view->rDir'),
        					'liblist' => $data,
							'pInfo' => $pInfo,
        					'page' => $page
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
				'where' => array('and' => array('ou_email' => $this->req['post']['email'])),
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

				$set['ou_address'] = $cInfo[0][1];
			}
			else
			{
				$rs = $this->db->create(array(
					'table' => 'xgm_orderuser',
					'key' => array_keys($set),
					'value' => array(implode(',', array_values($set)))
				));
			}

			if($rs === false)
				N8_Helper_Helper::showMessage('操作失败，请稍候再试');
			else
			{
				if(!$total = $this->req['post']['total'])
					$total = 0;
				
				$set['total'] = $total;
				$set['otype'] = $this->req['post']['otype'];
				setcookie('pInfo', json_encode($set), $_SERVER['REQUEST_TIME']+7200);
				N8_Helper_Helper::showMessage(NULL, 'index.php?control=good&action=liblist');
			}
		}

		//设置cookie
		if($this->req['get']['clnum'] && $this->req['get']['clid'] && $this->req['get']['balance'])
		{
			setcookie('cardInfo', json_encode(array('no' => $this->req['get']['clnum'], 'id' => $this->req['get']['clid'], 'balance' => $this->req['get']['balance'])), $_SERVER['REQUEST_TIME']+7200);
		}

        $this->render(array('tplDir' => $this->conf->get('view->rDir')));
	}

	public function getpinfo()
	{
		$pInfo = $this->db->get(array(
			'table' => 'xgm_orderuser',
			'key' => array('ou_truename', 'ou_pinyin', 'ou_email', 'ou_tel', 'ou_total'),
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
		//处理收货人信息

		//处理货物的cookie

		//处理卡的cookie

		//生成订单号保存订单信息

		//显示订单号
	}
}
