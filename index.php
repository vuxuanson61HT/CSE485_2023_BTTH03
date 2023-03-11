<?php
require $_SERVER['DOCUMENT_ROOT'].'/sendemail/Utils/MyEmailServer.php';
require $_SERVER['DOCUMENT_ROOT'].'/sendemail/Utils/EmailSender.php';
require 'vendor/autoload.php';


$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("","ĐIỂM DANH THỰC HÀNH BUỔI 3","Khương Minh Huy - 1951060754 xin phép điểm danh bài tt buổi 3");
