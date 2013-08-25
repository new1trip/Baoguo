<?php /* Smarty version Smarty-3.1.14, created on 2013-08-24 05:56:39
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123692329952161b3244d979-99314615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1377338194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123692329952161b3244d979-99314615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52161b324cd3e1_04141311',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52161b324cd3e1_04141311')) {function content_52161b324cd3e1_04141311($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
<!--     <meta charset="utf-8"> -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - 澳洲邮政-Australia Post-包裹查询</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="澳洲包裹网集成了墨尔本各大快递公司的查询系统，方便您的查询">
    <meta name="keywords" content="airmail 查询,澳洲邮政,邮政追踪,澳洲邮政查询,Australia Post">
    <meta name="author" content="HAO ZHAO">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>

 <body>
    <div class="container">

       <div class="masthead">
       	<div class="scrollable">
					<header>
						
						<a class="back-button linkbut" href="javascript:history.back(-1)"></a>
						<a href="index.html" class="home-button linkbuthome"></a>	
						<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - 澳洲包裹网</h1>
						<div class="line"></div>
					</header>
			    </div>
		   	 <div class="navbar">
		          <div class="navbar-inner">
			            <div class="container">
			              <ul class="nav">
			                <li><a href="track.php">包裹查询</a></li>
			                <li><a href="postage_calculator.php">计算运费</a></li>
			                <li><a href="contact.php">联系我们</a></li>
			                <li><a href="http://thenexttrains.com/" target="_blank">墨尔本Metro Trains Timetable</a></li>
			              </ul>
			            </div>
				  </div>
			  </div><!-- /.navbar -->
       </div>
      <div class="row-fluid">
        <div class="span12">
<?php }} ?>