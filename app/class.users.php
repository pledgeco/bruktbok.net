<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class users implements iUsers
{
	
	/*-------------------------------Authenticate-------------------------------------*/ 
	
	final public function isLogged()
	{
		if(isset($_SESSION['user']['id']))
		{
			return true;
		}
		
		return false;
	}
	
	/*-------------------------------Checking of submitted data-------------------------------------*/ 
	
	final public function validName($username) 	
	{
		if(strlen($username) <= 25 && ctype_alnum($username)) 		
	 	{ 			
	 		return true; 		
	 	} 		 		
	 	
	 	return false; 	
	} 	 	
		 
	final public function validEmail($email) 	
	{ 		
		return preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $email); 	
	} 	 	
	
	final public function validSecKey($seckey)
	{
		if(is_numeric($seckey) && strlen($seckey) == 4)
		{
			return true;
		}
		
		return false;
	}
	
	final public function nameTaken($username) 	
	{ 		
	 	global $engine; 		
	 	
		if($engine->num_rows("SELECT * FROM users WHERE username = '" . $username . "' LIMIT 1") > 0)
		{
			return true;
		} 	
		
		return false;
	} 
	
	final public function emailTaken($email)
	{
		global $engine;
		
		if($engine->num_rows("SELECT * FROM users WHERE mail = '" . $email . "' LIMIT 1") > 0)
		{
			return true;
		}
		
		return false;
	}
		
	final public function userValidation($username, $password)
	{ 		
		global $engine; 
		if($engine->num_rows("SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1") > 0)
		{
			return true;
		} 	
		 
		return false;
	} 	 	
	
	/*-------------------------------Stuff related to bans-------------------------------------*/ 
	
	final public function isBanned($value)
	{
		global $engine;
		if($engine->num_rows("SELECT * FROM bans WHERE value = '" . $value . "' LIMIT 1") > 0)
		{
			return true;
		}
			
		return false;
	}
	
	final public function getReason($value)
	{
		global $engine;
		return $engine->result("SELECT reason FROM bans WHERE value = '" . $value . "' LIMIT 1");
	}
	
	final public function hasClones($ip)
	{
		global $engine;
		if($engine->num_rows("SELECT * FROM users WHERE ip_reg = '" . $_SERVER['REMOTE_ADDR'] . "'") == 6)
		{
			return true;
		}
		
		return false;
	}
	
        /*-------------------------------Login or Register user-------------------------------------*/
       
        final public function register()
        {
                global $core, $template, $_CONFIG;
               
                if(isset($_POST['register']))
                {
                        unset($template->form->error);
                       
                        $template->form->setData();
                               
                        if($this->validName($template->form->reg_username))
                        {
                                if(!$this->nameTaken($template->form->reg_username))
                                {
                                        if($this->validEmail($template->form->reg_email))
                                        {
                                                if(!$this->emailTaken($template->form->reg_email))
                                                {
                                                        if(strlen($template->form->reg_password) > 6)
                                                        {
                                                                if($template->form->reg_password == $template->form->reg_rep_password)
                                                                {
                                                                        if(isset($template->form->reg_seckey))
                                                                        {
                                                                                if($this->validSecKey($template->form->reg_seckey))
                                                                                {
                                                                                        //Continue
                                                                                }
                                                                                else
                                                                                {
                                                                                        $template->form->error = 'Secret key must only have 4 numbers';
                                                                                        return;
                                                                                }
                                                                        }
                                                                        if($this->isBanned($_SERVER['REMOTE_ADDR']) == false)
                                                                        {
                                                                                if(!$this->hasClones($_SERVER['REMOTE_ADDR']))
                                                                                {
                                                                                    if (@$_POST['captcha'] == $_SESSION['security_number'])
                                                                                    {
                                                                                        if(!isset($template->form->reg_gender)) { $template->form->reg_gender = 'M'; }
                                                                                        if(!isset($template->form->reg_figure)) { $template->form->reg_figure = $_CONFIG['hotel']['figure']; }
                                                                               
                                                                                        $this->addUser($template->form->reg_username, $core->hashed($template->form->reg_password), $template->form->reg_email, 1, $template->form->reg_figure, $template->form->reg_gender, $core->hashed($template->form->reg_key));
                                                       
                                                                                        $this->turnOn($template->form->reg_username);
 
                                                                                        if (isset($_POST['ref']))
                                                                                        {
                                                                                                $ref_by = mysql_fetch_array(mysql_query("SELECT id, username FROM users WHERE username = '" . mysql_real_escape_string($_POST['ref']) . "'"));
                                                                                                if ($ref_by)
                                                                                                {
                                                                                                        mysql_query("UPDATE users SET ref_by = '" . mysql_real_escape_string($ref_by['username']) . "' WHERE username = '" . mysql_real_escape_string($template->form->reg_username) . "'");
                                                                                                        mysql_query("UPDATE users SET num_refs = num_refs + 1 WHERE id = {$ref_by['id']}");
                                                                                                }
                                                                                        }
                                                                       
                                                                                        header('Location: ' . $_CONFIG['hotel']['url'] . '/velkommen');
                                                                                        exit;
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        $template->form->error = 'Feil captcha-kode.';
                                                                                    }
                                                                                }
                                                                                else
                                                                                {
                                                                                        $template->form->error = 'Beklager men du har nådd maks antall brukere.';
                                                                                }
                                                                        }
                                                                        else
                                                                        {
                                                                                $template->form->error = 'Du er bannet fra Habin. Om du mener dette er feil send en e-post til viphabbiz@gmail.com<br />';
                                                                                return;
                                                                        }
                                                                }
                                                                else   
                                                                {
                                                                        $template->form->error = 'Passordene du har skrevet inn er ikke de samme!';
                                                                        return;
                                                                }
 
                                                        }
                                                        else
                                                        {
                                                                $template->form->error = 'Passordet må inneholde minst 6 tegn.';
                                                                return;
                                                        }
                                                }
                                                else
                                                {
                                                        $template->form->error = 'E-post: <b>' . $template->form->reg_email . '</b> er allerede registrert';
                                                        return;
                                                }
                                        }
                                        else
                                        {
                                                $template->form->error = 'E-posten er ikke gyldig';
                                                return;
                                        }
                                }
                                else
                                {
                                        $template->form->error = 'Brukernavnet er allerede i bruk';
                                        return;
                                }
                        }
                        else
                        {
                                $template->form->error = 'Brukernavnet er ikke gyldig';
                                return;
                        }
                }
        }   	
	
	final public function login()
	{
		global $template, $_CONFIG, $core;
		
		if(isset($_POST['login']))
		{
			$template->form->setData();
			unset($template->form->error);
			
			if($this->nameTaken($template->form->log_username))
			{
				if($this->isBanned($template->form->log_username) == false || $this->isBanned($_SERVER['REMOTE_ADDR']) == false)
				{
					if($this->userValidation($template->form->log_username, $core->hashed($template->form->log_password)))
					{
						$this->turnOn($template->form->log_username);
						$this->updateUser($_SESSION['user']['id'], 'ip_last', $_SERVER['REMOTE_ADDR']);
						$template->form->unsetData();
						header('Location: ' . $_CONFIG['hotel']['url'] . '/me');
						exit;
					}
					else
					{
						$template->form->error = 'Enten s&aring; har du skrevet feil brukernavn eller passord.';
						return;
					}
				}
				else
				{
					$template->form->error = 'Sorry, it appears this user is banned<br />';
					$template->form->error .= 'Reason: ' . $this->getReason($template->form->log_username);
					return;
				}
			}
			else
			{
				$template->form->error = 'Username does not exist';
				return;
			}
		}
	}
	
	final public function loginHK()
	{
		global $template, $_CONFIG, $core;
		
		if(isset($_POST['login']))
		{	
			$template->form->setData();
			unset($template->form->error);
			
			if(isset($template->form->username) && isset($template->form->password))
			{
				if($this->nameTaken($template->form->username)) 
				{	 
					if($this->userValidation($template->form->username, $core->hashed($template->form->password)))
					{
						if(($this->getInfo($_SESSION['user']['id'], 'rank')) >= 4)
						{
							$_SESSION["in_hk"] = true;
							header("Location:".$_CONFIG['hotel']['url']."/ase/dash");
							exit;
						}
						else
						{
							$template->form->error = 'Incorrect access level.';
							return;
						}
					}
					else
					{
						$template->form->error = 'Incorrect password.';
						return;
					}		
				}
				else
				{
					$template->form->error = 'User does not exist.';
					return;
				}
			}
	
			$template->form->unsetData();
		}
	}	
	
	final public function help()
	{
		global $template, $_CONFIG;
		$template->form->setData();
		
		if(isset($template->form->help))
		{
			$to = $_CONFIG['hotel']['email'];
 			$subject = "Help from RevCMS user - " . $this->getInfo($_SESSION['user']['id'], 'username');
 			$body = $template->form->question;
 				
 			if (mail($to, $subject, $body))
 			{
 				$template->form->error = 'Message successfully sent! We will answer you shortly!';
 			} 
 			else 
 			{
  				 $template->form->error = 'Message delivery failed.';
 			}
		}
	}

	/*-------------------------------Account settings-------------------------------------*/ 
	
	final public function updateAccount()
	{
		global $template, $_CONFIG, $core, $engine;
		
		if(isset($_POST['account']))
		{
		
			if(isset($_POST['acc_motto']) && strlen($_POST['acc_motto']) < 30 && $_POST['acc_motto'] != $this->getInfo($_SESSION['user']['id'], 'motto'))
			{
				$this->updateUser($_SESSION['user']['id'], 'motto', $engine->secure($_POST['acc_motto']));
				header('Location: '.$_CONFIG['hotel']['url'].'/account');
				exit;
			}
			else
			{
				$template->form->error = 'Motto is invalid.';
			}
			
			if(isset($_POST['acc_email']) && $_POST['acc_email'] != $this->getInfo($_SESSION['user']['id'], 'mail'))
			{
				if($this->validEmail($_POST['acc_email']))
				{
					$this->updateUser($_SESSION['user']['id'], 'mail', $engine->secure($_POST['acc_email']));
					header('Location: '.$_CONFIG['hotel']['url'].'/account');
					exit;
				}
				else
				{
					$template->form->error = 'Email is not valid';
					return;
				}
			}
			
			if(!empty($_POST['acc_old_password']) && !empty($_POST['acc_new_password']))
			{
				if($this->userValidation($this->getInfo($_SESSION['user']['id'], 'username'), $core->hashed($_POST['acc_old_password'])))
				{
					if(strlen($_POST['acc_new_password']) >= 8)
					{
						$this->updateUser($_SESSION['user']['id'], 'password', $core->hashed($_POST['acc_new_password']));
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
						exit;
					}
					else
					{
						$template->form->error = 'New password is too short';
						return;
					}
				}
				else
				{
					$template->form->error = 'Current password is wrong';
					return;
				}
			}
		}		
	}
		
		
	final public function turnOn($k)
	{	
		$j = $this->getID($k);
		$this->createSSO($j);
		$_SESSION['user']['id'] = $j;	
		$this->cacheUser($j);	
		unset($j);
	}
	
	/*-------------------------------Loggin forgotten-------------------------------------*/ 	
	
	final public function forgotten()
	{
		
		
		if(isset($_POST['loleneu4']))
		{
		
			
			
			if($this->nameTaken($template->formr->for_usednnanrname))
			{
				if(strlen($template->form->forr_password) > 55555)
				{
					if($this->getdInfo($this->getdID($template->form->for_username), 'fyend4wf') == $core->hashed($template->form->for_bfdbekey))
					{
						
					}
					else
					{
						$template->form->error = 'Secret key is incorrect';
						return;
					}
				}
				else
				{
					$template->form->error = 'Password must have more than 6 characters.';
					return;
				}
			}
			else
			{
				$template->form->error = 'Username does not exist';
				return;
			}
		}
	}
	
	/*-------------------------------Create SSO auth_ticket-------------------------------------*/ 
	
	final public function createSSO($k) 	
	{ 	 	
		$sessionKey = 'Bruktbok-'.rand(9,999).'/'.substr(sha1(time()).'/'.rand(9,9999999).'/'.rand(9,9999999).'/'.rand(9,9999999),0,33);
		
		$this->updateUser($k, 'auth_ticket', $sessionKey);
		
		unset($sessionKey);
	} 	 
		
	/*-------------------------------Adding/Updating/Deleting users-------------------------------------*/ 
	
	final public function addUser($username, $password, $email, $motto, $credits, $pixels, $rank, $figure, $gender, $seckey) 	
	{ 		
		global $engine; 		 		 		 		
		$sessionKey = 'Bruktbok-'.rand(9,999).'/'.substr(sha1(time()).'/'.rand(9,9999999).'/'.rand(9,9999999).'/'.rand(9,9999999),0,33);
		$engine->query("INSERT INTO users (username, password, mail, rank, ip_last, ip_reg, account_created, last_online) VALUES('" . $username . "', '" . $password . "', '" . $email . "', '1',  '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . time() . "', '" . time() . "')"); 	
		unset($sessionKey);	
		 			 
	}	 		 	
		 
	final public function deleteUser($k) 	
	{ 		
		global $engine; 		 		
	 	$engine->query("DELETE FROM users WHERE id = '" . $k . "' LIMIT 1"); 		
	 	$engine->query("DELETE FROM items WHERE userid = '" . $k . "' LIMIT 1"); 		
		$engine->query("DELETE FROM rooms WHERE ownerid = '" . $k . "' LIMIT 1"); 	
	} 	
	  	
	final public function updateUser($k, $key, $value) 	
	{ 		
	 	global $engine; 		 		
	 	$engine->query("UPDATE users SET " . $key . " = '" . $engine->secure($value) . "' WHERE id = '" . $k . "' LIMIT 1");
	 	$_SESSION['user'][$key] = $engine->secure($value);		
	} 
	
	/*-------------------------------Handling user information-------------------------------------*/ 	 
	
	final public function cacheUser($k)
	{
		global $engine; 		 	
		$userInfo = $engine->fetch_assoc("SELECT username, rank, motto, mail, ip_last FROM users WHERE id = '" . $k . "' LIMIT 1");
		
		foreach($userInfo as $key => $value)
		{
			$this->setInfo($key, $value);
		}
	}	
	
	final public function setInfo($key, $value)
	{
		global $engine;
		$_SESSION['user'][$key] = $engine->secure($value);
	}

	final public function getInfo($k, $key)
	{
		global $engine;
		if(!isset($_SESSION['user'][$key]))
		{
			$value = $engine->result("SELECT $key FROM users WHERE id = '" . $engine->secure($k) . "' LIMIT 1"); 
			if($value != null)
			{			
				$this->setInfo($key, $value);
			}
		}
			
		return $_SESSION['user'][$key];
	}
	
	
	
	/*-------------------------------Get user ID or Username-------------------------------------*/ 
	
	final public function getID($k) 	
	{ 		
		global $engine; 		
		return $engine->result("SELECT id FROM users WHERE username = '" . $engine->secure($k) . "' LIMIT 1"); 	
	} 		
	
	final public function getUsername($k)
	{
		global $engine;
		return $this->getInfo($_SESSION['user']['id'], 'username');
	}
	
}
?>