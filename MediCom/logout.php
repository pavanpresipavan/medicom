<?php
session_abort();
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
    }
    if($_SERVER['REQUEST_METHOD']=='GET')
        {
            $c=$_GET['c'];
            if($c==0) {
            $uri .= $_SERVER['HTTP_HOST'];
            header('Location: '.$uri.'/MediCom/doc.php');
            exit;
            }else{
                $uri .= $_SERVER['HTTP_HOST'];
                header('Location: '.$uri.'/MediCom/login.php');
                exit;
            }
        }
?>
