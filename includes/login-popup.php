<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

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

input[type="button"] {
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

input[type="button"]:hover {
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
</style>

 <div id="myModal" class="reveal-modal">
     <h2>Logg inn</h2><br />
     <?php
        if (isset($_GET['error'])) {
            echo '<p class="error" style="color:red;">Feil e-post eller passord!</p><br />';
        }
        ?> 
		 <form action="includes/process_login.php" method="post" name="login_form">                      
            E-post <br /><input type="text" placeholder="E-post" name="email" size="35"/> 
        
            <br />Passord <br /><input type="password" placeholder="Passord"
                             name="password" 
                             id="password"/><i style="color:#aeaead; font-size: 14px;"> </i><br />
           <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form><br />
       <p>Har du ikke en bruker?<br /> Vennligst registrer deg <a href="register.php" style="color:#242424; font-weight: bold;">HER.</a></p>
       
     <a class="close-reveal-modal">&#215;</a>
</div>