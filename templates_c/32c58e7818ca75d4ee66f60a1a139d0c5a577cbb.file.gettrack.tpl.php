<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 10:10:26
         compiled from "./templates/gettrack.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20849714252161bd2a90519-81686798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c58e7818ca75d4ee66f60a1a139d0c5a577cbb' => 
    array (
      0 => './templates/gettrack.tpl',
      1 => 1377069871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20849714252161bd2a90519-81686798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'result' => 0,
    'info' => 0,
    'powered' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52161bd2bea9d3_75311780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52161bd2bea9d3_75311780')) {function content_52161bd2bea9d3_75311780($_smarty_tpl) {?><div>
	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

</div>
<?php if (count($_smarty_tpl->tpl_vars['result']->value)!=0){?>
<table width="98%" border="1" align="center" cellspacing="0" cellpadding="1">
	<tbody>
		<tr class="TH_tr">
			<td width="150" height="25" bgcolor="#E6E6E6" align="center"><strong>日期时间</strong></td>
			<td width="350" bgcolor="#E6E6E6" align="center" ><strong>服务地点</strong></td>
			<td bgcolor="#E6E6E6" align="center"><strong>详细内容</strong></td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
		<tr align="center">
			<td align="center"><?php echo $_smarty_tpl->tpl_vars['info']->value['time'];?>
</td>
			<td align="left"><?php echo $_smarty_tpl->tpl_vars['info']->value['location'];?>
</td>
			<td align="left"><?php echo $_smarty_tpl->tpl_vars['info']->value['desc'];?>
</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php }else{ ?>
<div>
<ul>
	 <li>对不起，查不到你的订单</li>
	 <li>请正确填写你的运单号</li>
	 <li>查询时请核对网上信息与发单上是否一致</li>
	 <li>如果在此系统中没有查询到我的货物,请与快递公司工作人员联系</li>
</ul>
<div>
<?php }?>
<br />
<div>
	<?php echo $_smarty_tpl->tpl_vars['powered']->value;?>

</div>
<?php }} ?>