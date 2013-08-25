<?php /* Smarty version Smarty-3.1.14, created on 2013-08-24 05:47:17
         compiled from "./templates/calculator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92436280252164dd6dbf1a8-29452081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade93d4fd698a0682375a707e886f187e2c1f712' => 
    array (
      0 => './templates/calculator.tpl',
      1 => 1377337637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92436280252164dd6dbf1a8-29452081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52164dd7299124_00409939',
  'variables' => 
  array (
    'price' => 0,
    'pageup' => 0,
    'pagedown' => 0,
    'pageconfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52164dd7299124_00409939')) {function content_52164dd7299124_00409939($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/ezapp916/public_html/baoguo.com.au/libs/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <!-- Example row of columns -->
      		<div class="accordion" id="price">
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#price" href="#airMail"><h4><img src="../assets/img/ap_airmail.jpg" />Australia Post Air Mail</h4></a>
			     </div>
			    <div id="airMail" class="accordion-body collapse">
			      <div class="accordion-inner">
					<table class="table table-hover">
						  <thead>
					          <tr>
					        	<th>Price Range</th>
					            <th>Australia Post Air Mail Price  <img src="../assets/img/alert.jpeg" alt="expect delivery day" id="airMail_edd" rel="tooltip" title="预计送达时间6-10个工作日"   width="20px"/></th>
					            <th>Our Air Mail Price</th>
					            <th>您节省了</th>
					           </tr>
					        </thead>
					      <tbody id="Air1">  
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['price'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['price']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['name'] = 'price';
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] = (int)19;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total']);
?>
					       	<tr class="success">
					        	<td><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['weightRange'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostAirPrice'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourAirPrice'];?>
</td>								<td>AU$<?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostAirPrice'])." - ".((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourAirPrice']),'format'=>"%.2f"),$_smarty_tpl);?>
</td>
					       	</tr>
							<?php endfor; endif; ?>
						  </tbody>
						   <tbody id="Air2" style="display:none">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['price'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['price']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['name'] = 'price';
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = (int)19;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total']);
?>
					       	<tr class="success">
					        	<td><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['weightRange'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostAirPrice'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourAirPrice'];?>
</td>								<td>AU$<?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostAirPrice'])." - ".((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourAirPrice']),'format'=>"%.2f"),$_smarty_tpl);?>
</td>
					       	</tr>
							<?php endfor; endif; ?>
						  </tbody>
						  <tbody><tr>
							<a class="btn btn-info btn-lg" href="javascript:;" onclick="toggle('Air1', 'Air2')">0-10kg</a>
							<a class="btn btn-info btn-lg" href="javascript:;" onclick="toggle('Air2', 'Air1')">10-20kg<a href="javascript:;">
						  </tr></tbody>
					</table>
				     </div>
				    </div>
				  </div>
				  
			<div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#price" href="#express"><h4><img src="../assets/img/ap-express-courier.jpg" alt="ap-express-courier" width="" height="" />Australia Post Express Courier International</h4></a>
			    </div>
			    <div id="express" class="accordion-body collapse">
			      <div class="accordion-inner">
      					<table class="table table-hover">
						  <thead>
					          <tr>
					        	<th>Price Range</th>
					            <th>AuPost Express Courier International Price<img src="../assets/img/alert.jpeg" alt="expect delivery day" id="exp_edd" rel="tooltip" title="预计送达时间4-6个工作日"   width="20px"/></th>
					            <th>Our Express Price</th>
					            <th>您节省了</th>
					          </tr>
					        </thead>
					     
							<tbody id="AuPost1">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['price'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['price']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['name'] = 'price';
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] = (int)19;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total']);
?>
							<tr class="warning">
						 		<td><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['weightRange'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostExpPrice'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourExpPrice'];?>
</td>								<td>AU$<?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostExpPrice'])." - ".((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourExpPrice']),'format'=>"%.2f"),$_smarty_tpl);?>
</td>		
						 	</tr>
							<?php endfor; endif; ?>
							</tbody>
							<tbody id="AuPost2" style="display:none">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['price'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['price']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['name'] = 'price';
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = (int)19;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['price']['total']);
?>
							<tr class="warning">
						 		<td><?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['weightRange'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostExpPrice'];?>
</td>
					        	<td>AU$<?php echo $_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourExpPrice'];?>
</td>								<td>AU$<?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ausPostExpPrice'])." - ".((string)$_smarty_tpl->tpl_vars['price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['price']['index']]['ourExpPrice']),'format'=>"%.2f"),$_smarty_tpl);?>
</td>		
						 	</tr>
							<?php endfor; endif; ?>
							</tbody>
							<tbody><tr>
							<a class="btn btn-info btn-lg" href="javascript:;" onclick="toggle('AuPost1', 'AuPost2')">0-10kg</a>	
							<a class="btn btn-info btn-lg" href="javascript:;" onclick="toggle('AuPost2', 'AuPost1')">10kg-20kg<a href="javascript:;">
						  </tr></tbody>
					</table>
				 <?php echo $_smarty_tpl->tpl_vars['pageup']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pagedown']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageconfig']->value;?>


			 </div>
    </div>
  </div>
</div>
	
    <script language="javascript">
	$(document).ready(function()
	{
		$('#airMail_edd').tooltip({
		  'selector': '',
		  'placement': 'bottom'
		});
        $('#exp_edd').tooltip({
		  'selector': '',
		  'placement': 'bottom'
		});
	});
	function toggle(showid, hideid) {
		$('#'+showid).show();
		$('#'+hideid).hide();
	}
	</script>
   	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>