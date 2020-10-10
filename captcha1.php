<?php
	session_start();
	
	if (!isset($_POST['captcha'])){
		
		$_SESSION['secure']= rand(1000,9999);
	}else{
		
		if($_SESSION['secure']== $_POST['captcha']){
			echo 'WELCOME CHILD';
			
		}else{
			echo 'incorrect';
			$_SESSION['secure']= rand(1000,9999);
		}
	}

?><br>
	<img src="captcha.php"/>
	


	<form action='captcha1.php' method='POST'>
	stop looking and start typing:<input name='captcha' type='text' size=10 >
	<input type='submit' value='submit'></input>
	
	</form>
	
	
	