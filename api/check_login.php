<?php 
session_start();
if(isset($_SESSION['user'])){
    echo json_encode(['success'=>1,'user'=>$_SESSION['user']],);
}else{
    echo 0;
}