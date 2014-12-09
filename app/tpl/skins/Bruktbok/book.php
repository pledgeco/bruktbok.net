<?php include_once 'languages/en.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo lang('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="css/mypage-style.css" />
</head>

<body>
<style>

a:link {
color:white;
}

a:visited {
color:white;
}

a:hover {
color:white;
}

a:active {
color:white;
}


#page{
	/* The main container div */
	width:620px;
	margin:100px auto 0;
	margin-top:30px;
}

h1{
	font-family:Corbel,'Myriad Pro',Arial, Helvetica, sans-serif;
	background:url('images/heading.png') no-repeat center top;
	text-indent:-9999px;
	overflow:hidden;
	height:90px;
}

#searchForm{
	/* The search form. */
	background-color:#4C5A65;
	padding:50px 50px 30px;
	margin:80px 0;
	position:relative;

	-moz-border-radius:16px;
	-webkit-border-radius:16px;
	border-radius:16px;
}

fieldset{
	border:none;
}

#searchInputContainer{
	/* This div contains the transparent search box */
	width:420px;
	height:36px;
	background:url("images/searchBox.png") no-repeat;
	float:left;
	margin-right:12px;
}

#s{
	/* The search text box. */
	
	border:none;
	color:#888888;
	background:url("images/searchBox.png") no-repeat;
	
	float:left;
	font-family:Arial,Helvetica,sans-serif;
	font-size:15px;
	height:36px;
	line-height:20px;
	margin-right:12px;
	outline:medium none;
	padding:0 0 0 35px;
	text-shadow:1px 1px 0 white;
	width:385px;
}

/* The UL that contains the search type icons */

.icons{
	list-style:none;
	margin:10px 0 0 335px;
	height:19px;
	position:relative;
}

.icons li{
	background:url("images/icons.png") no-repeat;
	float:left;
	height:19px;
	text-indent:-9999px;
	cursor:pointer;
	margin-right:5px;
}

/* Styling each icon */

li.web{ width:15px;}
li.web.active,
li.web:hover{ background-position:left bottom;}

li.images{ width:22px; background-position:-18px 0;}
li.images.active,
li.images:hover{ background-position:-18px bottom;}

li.news{ width:14px; background-position:-44px 0;}
li.news.active,
li.news:hover{ background-position:-44px bottom;}

li.videos{ width:17px; background-position:right 0;}
li.videos.active,
li.videos:hover{ background-position:right bottom;}

span.arrow{
	/* The little arrow that moves below the icons */
	
	width:11px;
	height:6px;
	margin:21px 0 0 5px;
	position:absolute;
	background:url('images/arrow.png') no-repeat;
	left:0;
}


/* The submit button */


#submitButton{
	background:url('images/buttons.png') no-repeat;
	width:83px;
	height:36px;
	text-indent:-9999px;
	overflow:hidden;
	text-transform:uppercase;
	border:none;
	cursor:pointer;
	margin-top:2px;
}

#submitButton:hover{
	background-position:left bottom;
}


/* The Search tutorialzine.com / Search the Web radio buttons */


#searchInContainer{
	float:left;
	margin-top:10px;
	width:330px;
}

label{
	color:#DDDDDD;
	cursor:pointer;
	font-size:11px;
	position:relative;
	right:-2px;
	top:-2px;
	margin-right:10px;
	white-space:nowrap;
	/*float:left;*/
}

input[type=radio]{
	cursor:pointer;
	/*float:left;*/
}


/* Styling the search results */


.pageContainer{
	/* Holds each page with search results. Has an inset bottom border. */
	border-bottom:1px solid #5e7481;
	margin-bottom:50px;
	
	/* Adding a dark bottom border with box shadow */
	
	-moz-box-shadow:0 1px 0 #798e9c;
	-webkit-box-shadow:0 1px 0 #798e9c;
	box-shadow:0 1px 0 #798e9c;
}


p.notFound{
	text-align:center;
	padding:0 0 40px;
}


/* Web & news results */


.webResult{ text-shadow:1px 1px 0 #586a75;margin-bottom:50px;}
.webResult h2{ 
	background-color:#5D6F7B;
	font-size:18px;
	font-weight:normal;
	padding:8px 20px;
	
	/* Applying CSS3 rounded corners */
	-moz-border-radius:18px;
	-webkit-border-radius:18px;
	border-radius:18px;
}
.webResult h2 b{ color:#fff; }
.webResult h2 a{ color:#eee;border:none;}
.webResult p{ line-height:1.5;padding:15px 20px;}
.webResult p b{ color:white;}
.webResult > a{ margin-left:20px;}


/* Image & video search results */


.imageResult{
	float:left;
	height:180px;
	margin:0 0 20px 40px;
	text-align:center;
	width:152px;
	overflow:hidden;
}
.imageResult images{ display:block;border:none;}
.imageResult a.pic{
	border:1px solid #fff;
	outline:1px solid #777;
	display:block;
	margin:0 auto 15px;
}

/* The show more button */

#more{
	width:83px;
	height:24px;
	background:url('images/more.png') no-repeat;
	cursor:pointer;
	margin:40px auto;
}

#more:hover{
	background-position:left bottom;
}



/* Giving Credit */

p.credit{
	margin:20px 0;
	text-align:center;
}

p.credit a{
	background-color:#4B5A64;
	border:1px solid;
	border-color:#3D4D57 #788E9B #788E9B #3D4D57;
	color:#c0d0d8;
	font-size:10px;
	padding:4px 8px;
	text-shadow:1px 1px 0 #38464F;
}

p.credit a:hover{
	background-color:#38464f;
	border-color:#38464f #788E9B #788E9B #38464f;
}

.clear{
	clear:both;
}
</style>

    <div id="header"> <!--her er header definert-->
    	<div class="wrapper"> <!--er en klasse som definerer en bredde på midtseksjonen vår-->
		
		
            <a id="logo" href="/"><?php echo lang('title'); ?></a>
			<?php include_once 'includes/menu-loggedin.php'; ?>
		</div>
	</div>
</div>

	<div class="wrapper"><!--definerer bredden-->

	
	
	
	
	<div class="round-box" style="margin-top:20px; margin-bottom:15px;"><h2 style="margin-bottom:21px; font-size:21px;">
	Guide to Information Technology</h2>
	 <form id="searchForm" method="post" style="margin-top:1px; margin-bottom:10px;">
     <img src="/images/no_image.png" style="float:right; width:230px;">    
	 <strong style="font-size:19px;">Book title</strong><br />
	 <text style="font-size:14px; color:#d6d6d6;"> Guide to Information Technology</text><br /><br />
		  
		   <strong style="font-size:19px;">Author</strong><br />
		   <text style="font-size:14px; color:#d6d6d6;"> Olav Dalland</text><br /><br />
		    <strong style="font-size:19px;">ISBN number</strong><br />
<text style="font-size:14px; color:#d6d6d6;"> 93884774</text><br /><br />
<strong style="font-size:19px;">Price</strong><br />
<text style="font-size:14px; color:#d6d6d6;"> $40</text><br /><br />
<strong style="font-size:19px;">Status</strong><br />
<text style="font-size:14px; color:#d6d6d6;"> Not sold</text><br /><br />

<strong style="font-size:19px;">Contact the seller</strong><br />
<text style="font-size:14px; color:#d6d6d6;"><a href="#" data-reveal-id="myModal">Click here »</a> </text><br /><br />

    </form>

		
	</div>
	
	
	
	
	
	</div>
		
	<?php include_once 'includes/contact-seller.php'; ?>

</body>
</html>
