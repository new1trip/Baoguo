<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 13:45:55
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90079516452164e53114a83-18491324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1377066315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90079516452164e53114a83-18491324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footscray' => 0,
    'laverton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52164e532566f1_83560894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52164e532566f1_83560894')) {function content_52164e532566f1_83560894($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <div class="span8">
    <form id="contact_form" action="processing.php" method="POST" class="well form-horizontal">
    	 <div class="control-group">
		    <label class="control-label" for="shop">澳洲邮政(Australia POST)代收点</label>
			    <div class="controls">
			    		<select id="shop" name="shop">
			    			<option value="" disabled="true" selected="">--选择离您最近的代收点--</option>	
							<option value="pointcook">Point Cook</option>
<!-- 							<option value="footscray">Footscray</option> -->
						</select>
			    </div>
		</div>
	    <div class="control-group">
		    <label class="control-label" for="name">姓名(Name)</label>
			    <div class="controls">
			    	<input type="text" id="name" placeholder="姓名" name="name">
			    </div>
		</div>
	    <div class="control-group">
		    <label class="control-label" for="phone">电话(可选)</label>
		    <div class="controls">
		    	<input  id="tel" name="phone" placeholder="电话">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="email">邮箱(Email)</label>
		    <div class="controls">
		    	<input type="email" id="email" name="email" placeholder="邮箱" >
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="message">Message</label>
		    <div class="controls">
		    	<textarea id="message" rows="10" name="message"></textarea>
		    </div>
		</div>
		
		 <div class="control-group">
			<div class="controls">
			<button type="submit" class="btn" data-loading-text="Submitting...">提交(Submit)</button>
			<button type="rest" class="btn">重置(Reset)</button>
			</div>
		 </div>
		 <div class="control-group"><div class="controls" id="submitMsg"></div></div>
  </form>
   </div>
   <div class="well span4">
    	<div id="footscray" class="shop" style="display:none">
    	<address> 
	    	<h4><strong>澳洲邮政代收点：<?php echo $_smarty_tpl->tpl_vars['footscray']->value['name'];?>
</strong></h4><br>
	    	地址(Address): <?php echo $_smarty_tpl->tpl_vars['footscray']->value['address'];?>
<br>
	    	电话(Phone):<br>Shop: <?php echo $_smarty_tpl->tpl_vars['footscray']->value['phone']['home'];?>
 / Mobile:<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['footscray']->value['phone']['mobile'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
<br>
	    	邮箱(Email)：<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['footscray']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['footscray']->value['email'];?>
</a>
    	</address>
    	<div id="footscray-map-canvas"></div>
    	</div>
    	<div id="pointcook" class="shop" style="display:none">
    	<address> 
	    	<h4><strong>澳洲邮政代收点：<?php echo $_smarty_tpl->tpl_vars['laverton']->value['name'];?>
</strong></h4><br>
	    	地址(Address): <?php echo $_smarty_tpl->tpl_vars['laverton']->value['address'];?>
<br>
	    	电话(Phone):<br>Alicia: <?php echo $_smarty_tpl->tpl_vars['laverton']->value['phone']['Alicia'];?>
 / Hao:<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['laverton']->value['phone']['Hao'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
<br>
	    	邮箱(Email)：<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['laverton']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['laverton']->value['email'];?>
</a>
    	</address>
    	<div id="map-canvas"></div>
    	</div>
    </div>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
	
    <script>  
		$('#shop').change(function(){
            $('.shop').hide();
            $('#' + $(this).val()).show();
        });
		$('#contact_form').ajaxForm({
			target: '#submitMsg',
			success: function(responseText, statusText, xhr, $form){
				
			}
		});
       $('#contact_form').validate({
			rules: {
				shop:{
					required: true
				},
				name: {
					minlength: 2,
					required: true,
					name: true
					},
				email: {
					required: true,
					email: true
					},
				message: {
					minlength: 2,
					required: true
				}
			},
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	});
	
	</script>
   
 	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>