<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱天使守护团</title>
  
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Index/main.css" rel="stylesheet">	
  <link href="/Public/Css/Login/login.css" rel="stylesheet">
  <link href="/Public/Css/bootstrapValidator.css" rel="stylesheet">
</head>

<body>


<div class="main_panel">

	<div class="login_logo">
		<img style="width:100px"src="/Public/Img/tab.png" />
		<p style="font-family: '微软雅黑';font-size: 20px;color:#ccc">瓷爱，欢迎您</p>
	</div>
	<div class="login_panel">
		
		<p></p>
			<form class="form-horizontal register_form" id="registerForm" role="form" action="<?php echo U('Home/Login/subRegister');?>">
			  	<div class="form-group">
					<p><b>帐号</b></p>
					<input type="text" class="form-control " placeholder="请输入您的帐号" name="username" />
				</div>
				
				<div class="form-group">
			   		<p><b>密码</b></p>
			   		<input type="password" class="form-control password" placeholder="请输入您的密码" name="password" />
				</div>

				<div class="form-group">
				    <p>再输一遍</p>
				      <input type="password" class="form-control" id="inputPassword3" placeholder="请输入您的密码" name="password2" />
				 </div>

				 <div class="form-group">
				    <p>手机号</p>
				      <input type="text" class="form-control" id="inputPassword3" placeholder="请输入您的手机号" name="phoneNumber">
				 </div>


				 <div class="form-group">
				      <button type="submit" class="btn btn-warning" style="width:100%">注册</button>
				  </div>

			</form>
	</div>
	<p class="super_link"><a href="<?php echo U('Home/Index/main');?>">首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Home/Login/login');?>">登录</a></p>
</div>

	<script src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
	<script src="/Public/Js/bstraplang/zh_CN.js"></script>
	<script src="/Public/Js/bootstrapValidator.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	      $('#registerForm')
	        .bootstrapValidator({
	        	live:'disabled', 
	            message: 'message',
	            feedbackIcons: {
	                valid: 'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
	            },
	            fields: {
	                username: {
	                    message: 'usernamemessage',
	                    validators: {
	                        notEmpty: {
	                            message: '帐号不能为空'
	                        },
	                        stringLength: {
	                            min: 6,
	                            max: 16,
	                            message: '帐号长度必须为6~16位'
	                        },
	                        /*remote: {
	                            url: 'remote.php',
	                            message: 'The username is not available'
	                        },*/
	                        regexp: {
	                            regexp: /^[a-zA-Z0-9_]+$/,
	                            message: '帐号必须为字母数字或下划线'
	                        }
	                    }
	                },
	                password: {

	                    validators: {
	                        notEmpty: {
	                            message: '密码不能为空'
	                        },
	                        identical: {
		                        field: 'password2',
		                        message: '两次密码不一致'
	                    	},
	                    }
	                },
	                password2:{
	                	validators:{
	                		notEmpty:{
	                			message:'亲不要粗心~'
	                		},
	                		identical: {
		                        field: 'password',
		                        message: '两次密码不一致'
	                    		},
	                	}
	                },
	                phoneNumber: {
		                validators: {
		                    notEmpty: {
		                    	message:'亲，手机号必须要填的哦~'
		                    },
		                    digits: {},
		                    regexp:{
		                    	regexp: /^[0-9]{11}$/,
		                    	message:'手机号必须为11位'
		                    }

	                	}
		            }

	            }
	            
	        })
	        .on('success.form.bv', function(e) {
                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);
                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');
                    // Use Ajax to submit form data

                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        alert(result);
                        if(result=="注册成功")
                            window.location.href="/index.php/Home/Index/main.html";
                    });
            });

	    });
	</script>
</body>
</html>