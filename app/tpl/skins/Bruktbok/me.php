<?php include_once 'languages/en.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo lang('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="css/mypage-style.css" />
</head>

<body>
    <div id="header"> <!--her er header definert-->
    	<div class="wrapper"> <!--er en klasse som definerer en bredde på midtseksjonen vår-->
		
		
            <a id="logo" href="/"><?php echo lang('title'); ?></a>
			<?php include_once 'includes/menu-loggedin.php'; ?>
		</div>
	</div>
</div>

	<div class="wrapper"><!--definerer bredden-->
	<div class="round-box" style="width:340px; float:right; overflow:hidden; display:inline; margin-top:0px; font-size:14px;">
	<h2 style="margin-bottom:16px;"><?php echo lang('your-acc'); ?></h2>
	
	  <?php echo lang('userid'); ?>: {id} <br />
	  <?php echo lang('me-username'); ?>: {username} <br />
	  <?php echo lang('me-email'); ?>: {email} <br />
	  <?php echo lang('me-password'); ?> <br /><br />
	  <font style="color:#d6d6d6; font-size:14px; margin-top:30px;"><?php echo lang('me-accountsettings'); ?></font>
	
	</div>
	
	
	
	<div class="round-box" style="margin-top:20px; margin-bottom:15px; width:500px;"><h2 style="margin-bottom:21px; font-size:21px;">
	<?php echo lang('mypage'); ?></h2>
	<a href="sell" id="button-sell"></a> <!--knapp for å selge bøker-->
		<a href="search" id="button-search"></a> <!--knapp for å finne bøker-->
	<br /> <br /><br /><br /><br>

	<h4 style="margin-bottom:5px; font-size:18px;"><?php echo lang('me-homearea-title'); ?></h4> <!--Overskrift hjemområde-->
		<p style="color:#d6d6d6;"><?php echo lang('me-homearea-desc'); ?></p> <!--definerer farge på teksten-->
			<br />
			
	<h4 style="margin-bottom:5px; font-size:18px;"><?php echo lang('me-wanttosell'); ?></h4> <!--under-header-->
		<p style="color:#d6d6d6;"><?php echo lang('me-wanttosell-desc'); ?></p> <br />

	<h3 style="margin-bottom:5px; font-size:18px;"><?php echo lang('me-find'); ?></h3><!--under-header-->
		<p style="color:#d6d6d6;"><?php echo lang('me-find-desc'); ?>
			</p>	
	</div>
	
	<div class="round-box" style="margin-top:-316px; width:340px; float:right; margin-bottom:20px;"><h2 style="margin-bottom:15px; font-size:21px;"><?php echo lang('me-mybooks'); ?></h2>
	<font style="font-size:14px;"><?php echo lang('me-mybooks-desc'); ?></font><br /><br />
	  <div class="round-box" style="width:320px; background-color:#4C5A65; padding:11px; color:#f0eeee; font-size:16px; line-height: 90%; margin-bottom:14px;">
	
	 <h3 style="color:white; font-size:16px; margin-bottom:-9px;"><?php echo lang('me-booktitle'); ?></h3><br /> <text style="font-size:14px; color:#d6d6d6">Metode- og oppgaveskriving for studenter</text><br />
	 <br /> <h3 style="color:white; font-size:16px; margin-bottom:-9px;"><?php echo lang('me-author'); ?></h3><br /><text style="font-size:14px; color:#d6d6d6;"> Olav Dalland</text><br /><br />
	  
	 <h3 style="color:white; font-size:16px; margin-bottom:-9px;"><?php echo lang('me-status'); ?></h3><br /><text style="font-size:14px; color:#d6d6d6;"> Not sold</text><br />
	 
	</div>
	<div class="round-box" style="width:320px; background-color:#4C5A65; padding:11px; color:#f0eeee; font-size:16px; line-height: 90%; margin-bottom:14px;">
	
	 <h3 style="color:white; font-size:16px; margin-bottom:-9px;"><?php echo lang('me-booktitle'); ?></h3><br /> <text style="font-size:14px; color:#d6d6d6">Metode- og oppgaveskriving for studenter</text><br />
	 <br /> <h3 style="color:white; font-size:16px; margin-bottom:-9px;"><?php echo lang('me-author'); ?></h3><br /><text style="font-size:14px; color:#d6d6d6;"> Olav Dalland</text><br /><br />
	  
	 <h3 style="color:white; font-size:16px; margin-bottom:-9px;"><?php echo lang('me-status'); ?></h3><br /><text style="font-size:14px; color:#d6d6d6;"> Not sold</text><br />
	 
	</div>
	
	
	</div>
		
			<!--design strek-->
				
	

		
		
	
	
	
</div><!--stenger wrapperen-->

</body>
</html>
