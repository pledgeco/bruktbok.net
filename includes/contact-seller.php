<?php include_once 'languages/en.php'; ?>

<style>
input[type="textarea"] {
    border: 1px solid #DADADA;
    color: #888;
    height: 100px;
	text-align:left;
	line-height:100px;
    padding: 3px 3px 3px 5px;
    width: 70%;
    font-size: 12px;

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
    
	 <h2>Contact the seller</h2>
	 
	
    <div class="loginoptions">
		<form action="index" method="post">
			<div class="input-area" style="float:left; margin-top:10px;""><br />
			
			
				<textarea name="Message" rows="10" cols="40" id="Message" style="resize: none; border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);"></textarea>
				
				
			</div>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<input type="submit" onclick="location.href='register';" value="Send"/>
		</form><br />
		<?php if(isset($template->form->error)) { echo '<b><div class="error-alert">'.$template->form->error.'</div></b>'; } ?>
	</div>
     <a class="close-reveal-modal">&#215;</a>
</div>