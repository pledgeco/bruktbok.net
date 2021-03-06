<?php include_once 'languages/en.php'; ?>

<style>
input[type="text"], .focus input[type="email"], .focus textarea, .focus input[type="password"] {
    border: 1px solid #DADADA;
    color: #888;
    height: 30px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 55%;
    font-size: 12px;
    line-height:15px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.focus textarea{
    padding: 5px 3px 3px 5px;
}

input[type="password"] {
    border: 1px solid #DADADA;
    color: #888;
    height: 30px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 55%;
    font-size: 12px;
    line-height:15px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

input[type="button"]{
    border: 1px solid #484848;
    color: #FFF;
    height: 35px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
  
    font-size: 12px;
    line-height:15px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	margin-top:11px;
	background-color:#484848;
	margin-bottom:-2px;
}

input[type="button"]:hover{
    border: 1px solid #242424;
    color: #FFF;
    height: 35px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    
    font-size: 12px;
    line-height:15px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	margin-top:11px;
	background-color:#242424;
	margin-bottom:-2px;
}



input[type="submit"]{
    border: 1px solid #80af11;
    color: #FFF;
    height: 35px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 30%;
    font-size: 12px;
    line-height:15px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	margin-top:11px;
	background-color:#80af11;
	margin-bottom:-2px;
}

input[type="submit"]:hover{
    border: 1px solid #9ed814;
    color: #FFF;
    height: 35px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 30%;
    font-size: 12px;
    line-height:15px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	margin-top:11px;
	background-color:#9ed814;
	margin-bottom:-2px;
}

	.error-alert {
		padding: 8px 35px 8px 14px;
		margin-bottom: 18px;
		color: #c09853;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
		border: 1px solid #fbeed5;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		color: #b94a48;
		background-color: #f2dede;
		border-color: #eed3d7;
		width:120px;
		
		}

		.login-right-content {
		float:right;
		margin-right:-20px;
		margin-top:20px;
		}

</style>

 <div id="myModal" class="reveal-modal">
     <div class="login-right-content">
	 <?php echo lang('newuser'); ?><br />
	 
	 <input type="button" onclick="location.href='register';" value="<?php echo lang('login-register'); ?>" style="width:100%; height:50px; font-size:14px;"/><br /><br />
	 
	 </div>
	 <h2><?php echo lang('login-header'); ?></h2>
	 
	
    <div class="loginoptions">
		<form action="index" method="post">
			<div class="input-area" style="float:left; margin-top:-88px;""><br />
			
				<input type="text" class="text" name="log_username" placeholder="<?php echo lang('login-username'); ?>" maxlength="100" "/>
				
				<input type="password" class="text" name="log_password" placeholder="<?php echo lang('login-password'); ?>" maxlength="100"/>
				
				
			</div>
			<br /><br /><br />
			<input type="submit" name="login" class="loginsubmit submit-button button-link button-content" value="<?php echo lang('login-submit'); ?>"/>
		</form><br />
		<?php if(isset($template->form->error)) { echo '<b><div class="error-alert">'.$template->form->error.'</div></b>'; } ?>
	</div>
     <a class="close-reveal-modal">&#215;</a>
</div>