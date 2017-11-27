<?php
include "acesso.php";
// $acesso = new Acesso;
// $acesso->conectar();

// session_start();
// session_name("adm");

// if(isset($_SESSION['validacao']))
// {
//   if($_SESSION['validacao'] != 1 || !isset($_SESSION['codigo']))
//     header("Location:login.php");
// }
// else
// {
//   header("Location:login.php"); 
// }


if(isset($_GET['status']))
  $status = $_GET['status'];



?>


<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Socilicatões</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,300italic">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up-clone="true" data-md-stick-up-offset="157px" data-lg-stick-up-offset="157px" class="rd-navbar rd-navbar-default">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand--><a href="index.html" class="rd-navbar-brand"><!-- <span class="text-thin text-primary">[</span>
                  <div class="brand-name"><span class="text-ubold text-river-bed">Oi</span><span class="text-thin"> Lindo</span></div><span class="text-thin text-primary">]</span> -->
               
            
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="130.000000pt" height="45.000000pt" viewBox="0 0 200.000000 66.000000"
             preserveAspectRatio="xMidYMid meet"><defs><style>.cls-1{fill:#496178;}</style></defs>
            <path class="cls-1" d="M140.05,16.47A16.08,16.08,0,1,1,124,32.55,16,16,0,0,1,140.05,16.47Zm0,27.56a11.48,11.48,0,1,0-11.48-11.49A11.49,11.49,0,0,0,140.05,44Z"/>
            <path class="cls-1" d="M97.49,33.65l-9-9.1v21.5a2.3,2.3,0,0,1-4.6,0V19a2.28,2.28,0,0,1,2.3-2.3c.92,0,1.38.27,2.3,1.19L99.69,29.34,110.9,17.94c.92-.92,1.38-1.19,2.3-1.19a2.28,2.28,0,0,1,2.3,2.3v27a2.3,2.3,0,0,1-4.59,0V24.56l-8.82,9.1c-.92.92-1.38,1.19-2.3,1.19S98.41,34.57,97.49,33.65Z"/>
            <path class="cls-1" d="M186.31,32.09a8.29,8.29,0,0,1,4.59,7.35,8.78,8.78,0,0,1-8.73,8.73H166.56a2.27,2.27,0,0,1-2.3-2.29V19.23a2.27,2.27,0,0,1,2.3-2.3h14.7A8.78,8.78,0,0,1,190,25.66,7.33,7.33,0,0,1,186.31,32.09ZM180.7,30c2.57,0,4.69-1.65,4.69-4.23a4.48,4.48,0,0,0-4.69-4.41H168.85V30Zm-11.85,4.41v9.37h12.77a4.69,4.69,0,1,0,0-9.37Z"/>
            <path class="cls-1" d="M88.93,59.06a3.49,3.49,0,0,1-1,.87,2.59,2.59,0,0,1-1.26.3A2.51,2.51,0,0,1,84.42,59a4.88,4.88,0,0,1-.61-2.61,4.81,4.81,0,0,1,.62-2.61,2.49,2.49,0,0,1,2.27-1.19,2.59,2.59,0,0,1,1.26.3,3.49,3.49,0,0,1,1,.87l-.4.34a3.11,3.11,0,0,0-.8-.72,2,2,0,0,0-1-.24q-2.35,0-2.35,3.25t2.35,3.25a2,2,0,0,0,1-.24,3.43,3.43,0,0,0,.8-.72Z"/>
            <path class="cls-1" d="M94.74,57.62q0,2.61-2.11,2.61t-2.12-2.61q0-2.62,2.12-2.62T94.74,57.62Zm-.51,0a2.87,2.87,0,0,0-.31-1.48,1.66,1.66,0,0,0-2.59,0,3.81,3.81,0,0,0,0,3,1.39,1.39,0,0,0,1.29.62,1.4,1.4,0,0,0,1.3-.62A2.84,2.84,0,0,0,94.23,57.62Z"/>
            <path class="cls-1" d="M100.54,60.13H100V57.29A2.19,2.19,0,0,0,99.73,56a1.41,1.41,0,0,0-1.2-.49,1.48,1.48,0,0,0-1,.36,1.14,1.14,0,0,0-.41.89v3.37h-.51V55.06h.51v.55A1.77,1.77,0,0,1,98.53,55q2,0,2,2.29Z"/>
            <path class="cls-1" d="M106.13,58.71a1.32,1.32,0,0,1-.59,1.13,2.07,2.07,0,0,1-1.26.38,2.39,2.39,0,0,1-1.3-.33,1.54,1.54,0,0,1-.73-1.1l.5-.09q.19,1,1.54,1a1.66,1.66,0,0,0,.9-.23.86.86,0,0,0,.44-.77c0-.41-.28-.7-.83-.88l-1.54-.42a1.15,1.15,0,0,1-.83-1.11,1.13,1.13,0,0,1,.54-1,2.06,2.06,0,0,1,1.14-.3,1.84,1.84,0,0,1,1.82,1l-.46.22a1.38,1.38,0,0,0-1.37-.73c-.78,0-1.17.26-1.17.79,0,.34.28.59.83.75l1.54.43A1.28,1.28,0,0,1,106.13,58.71Z"/>
            <path class="cls-1" d="M111.77,60.13h-.51v-.5a1.91,1.91,0,0,1-1.42.56q-2,0-2-2.29V55.06h.51V57.9a2.23,2.23,0,0,0,.31,1.3,1.4,1.4,0,0,0,1.21.49,1.56,1.56,0,0,0,.93-.32,1,1,0,0,0,.49-.84V55.06h.51Z"/>
            <path class="cls-1" d="M114.85,60.13q-1,0-1-1.19v-6.2h.51v6.2c0,.45.17.68.51.68Z"/>
            <path class="cls-1" d="M118.25,55.47h-.84v3.47a.72.72,0,0,0,.16.56.86.86,0,0,0,.54.12v.51h-.19q-1,0-1-1.19V55.47h-.73v-.4h.73V53.5h.51v1.57h.84Z"/>
            <path class="cls-1" d="M124.06,57.62q0,2.61-2.11,2.61t-2.12-2.61Q119.84,55,122,55T124.06,57.62Zm-.51,0a2.88,2.88,0,0,0-.31-1.48,1.66,1.66,0,0,0-2.59,0,3.81,3.81,0,0,0,0,3,1.66,1.66,0,0,0,2.59,0A2.85,2.85,0,0,0,123.56,57.62Z"/>
            <path class="cls-1" d="M128.82,55.19l-.25.48a1.87,1.87,0,0,0-.71-.16,1.5,1.5,0,0,0-1,.37,1.12,1.12,0,0,0-.43.89v3.37h-.51V55.06h.51v.59a1.67,1.67,0,0,1,1.43-.66A2.37,2.37,0,0,1,128.82,55.19Z"/>
            <path class="cls-1" d="M131.22,53.12a.38.38,0,0,1-.65.27.38.38,0,0,1,.54-.54A.37.37,0,0,1,131.22,53.12Zm-.13,7h-.51V55.06h.51Z"/>
            <path class="cls-1" d="M137,60.07l-.47.14-.2-.51a2.41,2.41,0,0,1-1.52.53,2,2,0,0,1-1.26-.38A1.38,1.38,0,0,1,133,58.7a1.35,1.35,0,0,1,.52-1.11,1.87,1.87,0,0,1,1.19-.37h.74a1.13,1.13,0,0,0,.85-.25v-.49a.85.85,0,0,0-.39-.71,1.35,1.35,0,0,0-.79-.25,1.25,1.25,0,0,0-1.38.84l-.49-.15a2,2,0,0,1,3-.81,1.3,1.3,0,0,1,.53,1v3.14Zm-.69-1V57.54a1.49,1.49,0,0,1-.72.16h-.87a1.35,1.35,0,0,0-.83.24.88.88,0,0,0-.36.75.92.92,0,0,0,.39.78,1.5,1.5,0,0,0,.88.24A2,2,0,0,0,136.32,59.06Z"/>
            <path class="cls-1" d="M146.89,53.26h-4V56h3.55v.5h-3.55v3.59h-.54V52.73h4.49Z"/>
            <path class="cls-1" d="M149.4,53.12a.38.38,0,0,1-.65.27.38.38,0,0,1,0-.54.38.38,0,0,1,.54,0A.37.37,0,0,1,149.4,53.12Zm-.13,7h-.51V55.06h.51Z"/>
            <path class="cls-1" d="M155.42,60.13h-.51V57.29A2.21,2.21,0,0,0,154.6,56a1.41,1.41,0,0,0-1.2-.49,1.49,1.49,0,0,0-1,.36,1.14,1.14,0,0,0-.41.89v3.37h-.51V55.06H152v.55a1.77,1.77,0,0,1,1.43-.62q2,0,2,2.29Z"/>
            <path class="cls-1" d="M161.15,60.07l-.47.14-.2-.51a2.4,2.4,0,0,1-1.52.53,2,2,0,0,1-1.26-.38,1.38,1.38,0,0,1-.53-1.15,1.35,1.35,0,0,1,.52-1.11,1.87,1.87,0,0,1,1.19-.37h.74a1.13,1.13,0,0,0,.85-.25v-.49a.85.85,0,0,0-.39-.71,1.35,1.35,0,0,0-.79-.25,1.25,1.25,0,0,0-1.38.84l-.49-.15a2,2,0,0,1,3-.81,1.3,1.3,0,0,1,.53,1v3.14Zm-.69-1V57.54a1.49,1.49,0,0,1-.72.16h-.87a1.35,1.35,0,0,0-.83.24.88.88,0,0,0-.36.75.92.92,0,0,0,.39.78,1.5,1.5,0,0,0,.88.24A2,2,0,0,0,160.46,59.06Z"/>
            <path class="cls-1" d="M167,60.13h-.51V57.29a2.2,2.2,0,0,0-.31-1.29,1.41,1.41,0,0,0-1.2-.49,1.48,1.48,0,0,0-1,.36,1.14,1.14,0,0,0-.41.89v3.37H163V55.06h.51v.55a1.77,1.77,0,0,1,1.43-.62q2,0,2,2.29Z"/>
            <path class="cls-1" d="M172.64,59.43a2.53,2.53,0,0,1-.76.61,2.16,2.16,0,0,1-.92.17,2.05,2.05,0,0,1-1.72-.77,2.94,2.94,0,0,1-.54-1.84,3,3,0,0,1,.54-1.85A2.05,2.05,0,0,1,171,55a2.09,2.09,0,0,1,.92.18,2.69,2.69,0,0,1,.76.6l-.37.34a1.72,1.72,0,0,0-1.31-.65,1.5,1.5,0,0,0-1.35.66,3.2,3.2,0,0,0,0,3,1.51,1.51,0,0,0,1.35.65,1.71,1.71,0,0,0,1.31-.65Z"/>
            <path class="cls-1" d="M178.33,57.31v.42h-3.57q0,2,1.74,2a1.54,1.54,0,0,0,1.3-.56l.4.32a2,2,0,0,1-1.7.75q-2.27,0-2.27-2.61T176.39,55a1.74,1.74,0,0,1,1.49.69A2.67,2.67,0,0,1,178.33,57.31Zm-.52-.09q0-1.72-1.42-1.72t-1.62,1.72Z"/>
            <path class="cls-1" d="M180.89,53.12a.38.38,0,1,1-.11-.27A.37.37,0,0,1,180.89,53.12Zm-.13,7h-.51V55.06h.51Z"/>
            <path class="cls-1" d="M185.85,55.19l-.25.48a1.87,1.87,0,0,0-.71-.16,1.5,1.5,0,0,0-1,.37,1.12,1.12,0,0,0-.43.89v3.37H183V55.06h.51v.59a1.67,1.67,0,0,1,1.43-.66A2.37,2.37,0,0,1,185.85,55.19Z"/>
            <path class="cls-1" d="M190.84,60.07l-.47.14-.2-.51a2.4,2.4,0,0,1-1.53.53,2,2,0,0,1-1.26-.38,1.38,1.38,0,0,1-.53-1.15,1.35,1.35,0,0,1,.52-1.11,1.87,1.87,0,0,1,1.19-.37h.74a1.13,1.13,0,0,0,.85-.25v-.49a.85.85,0,0,0-.39-.71,1.35,1.35,0,0,0-.79-.25c-.75,0-1.21.28-1.38.84l-.49-.15a2,2,0,0,1,3-.81,1.3,1.3,0,0,1,.53,1v3.14Zm-.69-1V57.54a1.5,1.5,0,0,1-.72.16h-.87a1.35,1.35,0,0,0-.83.24.88.88,0,0,0-.36.75.92.92,0,0,0,.39.78,1.5,1.5,0,0,0,.88.24A2,2,0,0,0,190.15,59.06Z"/>
            <path class="cls-1" d="M35.28,0A32.26,32.26,0,0,0,15.06,7.09,13.14,13.14,0,0,0,5.3,5.6a7.26,7.26,0,0,0-5,3.94h0c-.38.71-.42,1.14-.07.89A4.14,4.14,0,0,1,2.58,9.36a.54.54,0,0,0,.2,0C4.42,9.24,5.87,10,8,11.51a14,14,0,0,1,1.52,1.31A32.41,32.41,0,1,0,35.28,0ZM20.37,6.72h0a12.75,12.75,0,0,1,9.44,4.66,9.08,9.08,0,0,1,2.05,4.14A12,12,0,0,0,21.16,7.94a7.88,7.88,0,0,0-3.85.92l-.18-.19A30.26,30.26,0,0,1,19.89,6.8,1.76,1.76,0,0,1,20.37,6.72Zm-6,10.65-.31.3c-.1-.27-.22-.53-.34-.79.1-.09.31-.3.64-.57.13.26.24.52.34.77l-.32.28h0Zm5.4,30.89c7.46,3.47,15.28,2.88,21.82.94C48.85,47,54.86,42.65,59,38.85c-4.27,4.34-10.58,9.49-18.28,11.93-7.87,2.5-15.38,2.16-21.71-1-3.48-1.74-8-6.92-9.88-13.47a19.62,19.62,0,0,1,1.91-15.95,18,18,0,0,1,1.63-2.29c.09.26.17.52.24.79a13.63,13.63,0,0,0-1.21,1.75C4.25,32.09,13.38,45.28,19.76,48.25ZM17,9c-.27.15-.54.31-.8.48l-.05-.05.71-.58ZM63.27,34.58l.41-.46C60.16,38.87,51.62,49,40.4,52.77c-8,2.7-15.61,2.32-22-1.08-3.41-1.81-7.91-7.24-9.9-14.1a22.46,22.46,0,0,1,1.82-17.67,15.67,15.67,0,0,1,2-3c.11.26.21.52.31.78a28.45,28.45,0,0,0-1.79,2.49A19.92,19.92,0,0,0,8.86,36.39c1.92,6.65,6.5,11.91,10,13.67a26.07,26.07,0,0,0,11.73,2.69,33.77,33.77,0,0,0,10.22-1.67C51.6,47.67,59.67,39,63.27,34.58ZM13.34,12.67q.29.33.54.67-.33.24-.64.51c-.16-.21-.33-.43-.5-.65C12.93,13,13.13,12.84,13.34,12.67Zm.25-.2q.35-.28.72-.53c.2.23.4.46.59.7l-.76.51C14,12.92,13.78,12.7,13.59,12.47Zm.18-.54.27-.26,0,0Zm.8-.17q.44-.29.89-.54c.22.24.42.5.62.76-.3.15-.61.32-.91.5C15,12.23,14.78,12,14.57,11.76Zm-.22-.23-.08-.08q.37-.35.76-.68l.21.21C14.94,11.16,14.64,11.34,14.35,11.53ZM12,13.9l.07-.08.41-.4c.18.21.34.42.5.64-.21.18-.41.37-.6.56-.15-.21-.29-.41-.45-.6Zm.1,2.71A16,16,0,0,0,10,19.77,22.76,22.76,0,0,0,8.17,37.68c2,7,6.58,12.45,10.06,14.3a25.15,25.15,0,0,0,11.9,2.9,32.43,32.43,0,0,0,10.38-1.8c11.49-3.88,20.17-14.32,23.6-19-2.94,5-11.24,17.19-24.06,20.5-6.28,1.62-14.5,2.92-22.42-1.47-3-1.67-7.08-6.33-9.43-13-2.57-7.28-2.14-14.67,1.22-20.8a16.57,16.57,0,0,1,2.31-3.52C11.87,16.07,12,16.34,12.13,16.61Zm.45-1.74c.2-.2.4-.39.61-.57.18.26.35.51.5.77-.26.21-.47.41-.63.55C12.91,15.37,12.75,15.12,12.58,14.87Zm.85-.77c.21-.17.42-.34.64-.51.19.26.36.53.52.79l-.66.49Q13.7,14.49,13.43,14.1Zm.9-.7c.25-.18.51-.35.78-.51q.29.39.55.8c-.29.17-.55.34-.8.51C14.68,13.94,14.51,13.67,14.32,13.4Zm1-.68c.3-.17.6-.34.9-.49.19.27.37.54.53.82-.31.15-.61.31-.89.47C15.75,13.26,15.56,13,15.37,12.73Zm1.19-.62c.31-.14.63-.28.95-.39.16.27.32.55.46.84-.3.12-.6.24-.88.37C16.92,12.64,16.74,12.37,16.56,12.11Zm1.25-.5c.3-.1.59-.2.89-.28.16.27.3.55.44.84-.3.08-.59.18-.88.28C18.13,12.16,18,11.88,17.81,11.6ZM19,11.25a11.66,11.66,0,0,1,3-.32,10.89,10.89,0,0,1,7.74,3.22c-1.46-1.37-3.54-2.34-7.06-2.44a11.89,11.89,0,0,0-3.26.37C19.32,11.8,19.18,11.52,19,11.25Zm3-.63a12,12,0,0,0-3.18.35c-.19-.31-.38-.61-.59-.9a11.2,11.2,0,0,1,3.33-.41A11.36,11.36,0,0,1,31,15.09,10.94,10.94,0,0,0,22,10.62Zm-3.5.43c-.3.08-.6.18-.9.28-.18-.29-.38-.58-.59-.85.3-.12.6-.22.91-.32C18.16,10.44,18.36,10.74,18.54,11Zm-1.21.39c-.33.12-.64.26-1,.41q-.3-.4-.62-.78c.33-.17.66-.33,1-.47C17,10.87,17.15,11.15,17.33,11.44Zm-1.8-.61-.25-.26q.43-.35.88-.66c.13.14.26.28.38.43C16.2,10.49,15.86,10.65,15.53,10.83Zm.38-1.17,0,0-.39.28ZM6.76,24.26a30.82,30.82,0,0,1,2.1-5.64v0c.08-.18.17-.34.26-.52A34.08,34.08,0,0,1,11.22,15l.34.54a16.77,16.77,0,0,0-2.42,3.66c-3.39,6.21-3.83,13.68-1.24,21,2.38,6.74,6.52,11.46,9.57,13.16a24.58,24.58,0,0,0,12.15,3,42,42,0,0,0,10.51-1.53C53,51.56,61.32,39.42,64.32,34.33,61.6,40,53.88,53.3,39.83,56.24c-6.55,1.37-14.7,3.07-22.66-1.59-3-1.78-7.15-6.75-9.52-13.85A29.74,29.74,0,0,1,6.76,24.26Zm6.45-8.35c.16-.15.37-.34.63-.56q.19.34.36.67c-.3.24-.51.44-.64.56C13.46,16.35,13.34,16.13,13.22,15.91Zm.87-.76.66-.5c.13.23.25.45.37.67-.25.17-.46.34-.66.49C14.34,15.6,14.22,15.38,14.09,15.16Zm.92-.68q.37-.26.8-.51.2.33.39.68c-.29.17-.57.34-.82.51C15.27,14.93,15.14,14.7,15,14.48Zm1.07-.67c.28-.16.57-.32.88-.47.13.23.26.47.37.71-.31.14-.59.29-.87.44C16.35,14.26,16.22,14,16.08,13.8Zm1.17-.6c.28-.13.56-.25.86-.36.12.25.23.49.33.74-.28.1-.55.21-.81.34C17.5,13.67,17.38,13.43,17.25,13.2Zm1.16-.47c.28-.1.58-.19.88-.28.11.25.22.5.32.75-.3.08-.59.17-.87.27Q18.59,13.1,18.41,12.73Zm1.19-.36A11.46,11.46,0,0,1,22.71,12c3.56.1,5.6,1.12,7,2.53-1.24-1.05-3-1.73-6.41-1.82H23a12.66,12.66,0,0,0-3.08.39C19.81,12.87,19.71,12.61,19.6,12.37Zm2-3a11.47,11.47,0,0,0-3.54.46c-.18-.24-.36-.47-.56-.69a7.6,7.6,0,0,1,3.4-.85h.23a11.72,11.72,0,0,1,10.32,7.08A11.67,11.67,0,0,0,21.62,9.33Zm-3.86.56q-.46.14-.91.32c-.13-.16-.27-.33-.42-.48.26-.17.53-.33.8-.48C17.41,9.46,17.59,9.67,17.76,9.89ZM7.25,41.37a32.92,32.92,0,0,1-1.34-6.75,33,33,0,0,0,1.43,6.27c2.4,7.18,6.58,12.22,9.67,14A23,23,0,0,0,28.92,58a53.37,53.37,0,0,0,11-1.47C54,53.61,61.73,40.46,64.54,34.61,62.4,40.32,55.48,54.81,39.6,58c-7,1.4-15.13,2.15-23.11-2.8C12.76,52.88,9.13,47.45,7.25,41.37Zm7.69-24.5q-.15-.37-.34-.76c.19-.15.41-.32.66-.49.12.26.23.51.34.75Q15.26,16.61,14.94,16.87Zm.92-.68c-.1-.24-.21-.49-.34-.74.25-.17.53-.34.82-.51.12.24.24.49.34.74C16.4,15.84,16.13,16,15.86,16.19Zm1.1-.67c-.11-.25-.22-.5-.34-.74.27-.15.56-.3.86-.44.11.25.22.5.32.76C17.51,15.22,17.23,15.36,17,15.51ZM18.08,15c-.1-.25-.21-.51-.32-.76l.79-.32q.15.38.28.77Zm1.05-.42c-.09-.26-.18-.52-.27-.77q.42-.15.86-.27c.09.25.18.51.26.77Q19.55,14.38,19.13,14.54Zm1.16-.36c-.08-.25-.17-.51-.26-.76a12.21,12.21,0,0,1,3.29-.36c3.35.09,5.07.73,6.26,1.79a11.38,11.38,0,0,0-5.47-1.13A13.62,13.62,0,0,0,20.29,14.18ZM11.41,10.5h0C8.5,8.47,6.25,8,4.27,8.24a10.72,10.72,0,0,1,7.66,1.71Zm-.22.24-.47.53-.43-.32C7.52,9,5.68,8.48,4.06,8.59,6,8.3,8.28,8.7,11.2,10.73Zm5.05,44.68.07,0a26,26,0,0,0,14.12,3.9,46.83,46.83,0,0,0,9.22-1.05C56.39,55,63.26,39.19,65.09,34a34.13,34.13,0,0,1-3.77,10.8c-3.18,5.72-9.61,13-22.19,15.14C31.52,61.26,24.84,61.07,17,56,16.77,55.79,16.51,55.61,16.25,55.42ZM65.16,31.79c-1.36-1.08-7.61-5.88-14.55-5.88-6.47,0-10.49,3.29-13.84,6.44s-6.48,7.27-11.89,7.27A12.79,12.79,0,0,1,11.81,27.1,12.8,12.8,0,0,1,24.87,14.58c2.6,0,4.19.28,5.46,1.32a.6.6,0,0,0,.14.15,4.13,4.13,0,0,1,1.23,2.26c.14.41.36,0,.48-.76h0a8.06,8.06,0,0,0-2.13-6.39,13.11,13.11,0,0,0-9.51-4.76,29.9,29.9,0,0,1,44.6,25.38ZM5.38,5.9A12.83,12.83,0,0,1,14.8,7.3l-.69.59a11.92,11.92,0,0,0-12.73.49A7.49,7.49,0,0,1,5.38,5.9ZM2.2,8.19a11.72,11.72,0,0,1,11.65-.08l-.78.72A11.67,11.67,0,0,0,2.2,8.19Zm.56.1A11.37,11.37,0,0,1,12.83,9l-.68.67A10.84,10.84,0,0,0,2.77,8.29Zm6.32,3A11.41,11.41,0,0,0,4,8.91c1.59-.13,3.35.37,6.1,2.29l.41.3-.45.54Q9.6,11.63,9.08,11.26ZM35.28,62.32A29.76,29.76,0,0,1,19.2,57.63,25.9,25.9,0,0,0,32.06,61a42.44,42.44,0,0,0,7.12-.68c12.75-2.17,19.25-9.56,22.46-15.37a34.53,34.53,0,0,0,3.23-8.25A29.9,29.9,0,0,1,35.28,62.32Z"/></svg>


                  </a>
              </div>
              <div class="rd-navbar-aside">
                <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
                <div class="rd-navbar-aside-content">
                  <ul class="block-wrap-list">
                    <li class="block-wrap">
                      <div class="unit unit-sm-horizontal unit-align-center unit-middle unit-spacing-sm">
                        <div class="unit-left">
                          <figure><img src="images/icon-clock-32x32.png" alt="" width="32" height="32"/>
                          </figure>
                        </div>
                        <div class="unit-body">
                          <address class="contact-info"><span class="text-bold text-gray-base">Segunda à Sexta</span><span>Das 8:30 às 18:00</span></address>
                        </div>
                      </div>
                    </li>
                    <li class="block-wrap">
                      <div class="unit unit-sm-horizontal unit-align-center unit-middle unit-spacing-sm">
                        <div class="unit-left">
                          <figure><img src="images/icon-map-marker-25x33.png" alt="" width="25" height="33"/>
                          </figure>
                        </div>
                        <div class="unit-body">
                          <address class="contact-info"><a href="#"><span class="text-bold text-gray-base">Av. Carlos Gomes 141/1004</span><span>Porto Alegre, RS</span></a></address>
                        </div>
                      </div>
                    </li>
                    <li class="block-wrap">
                      <div class="unit unit-sm-horizontal unit-align-center unit-middle unit-spacing-sm">
                        <div class="unit-left">
                          <figure><img src="images/icon-phone-28x29.png" alt="" width="28" height="29"/>
                          </figure>
                        </div>
                        <div class="unit-body">
                          <address class="contact-info"><span class="text-bold"><a href="callto:#" class="text-gray-base">(51)&nbsp;40615001</a></span><span><a href="mailto:#">contato@contato.com</a></span></address>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="bg-athens-gray bg-wrap">
                    <div class="block-container">
                      <div class="block-left">
                        <p class="rd-navbar-fixed--hidden small">Texto introdutorio</p>
                      </div>
                      <div class="block-right">
                        <ul class="list-inline">
                          <li><a href="#" class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-facebook"></a></li>
                          <!-- <li><a href="#" class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-twitter"></a></li>
                          <li><a href="#" class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-google-plus"></a></li> -->
                          <li><a href="https://www.linkedin.com/company/19563913/" class="icon icon-xxs icon-circle icon-dark icon-alto-filled fa-linkedin"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <!--       <div class="rd-navbar-nav-wrap rd-navbar-nav-dark">
                <div class="rd-navbar-nav-wrap-inner"> -->
                  <!-- RD Navbar Search-->
                  <!--  <div class="rd-navbar-search">
                  </div> -->
                  <!-- RD Navbar Nav-->
                 <!--  <ul class="rd-navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="listaposts.php">Posts</a>
                      <ul class="rd-navbar-dropdown">
                          <li><a href="cadastroPost.php">Novo Post</a></li>
                      </ul>
                    </li>
                    <li><a href="listacategorias.php">Categorias</a>
                      <ul class="rd-navbar-dropdown">
                          <li><a href="cadastraCategorias.php">Nova Categoria</a></li>
                      </ul>
                    </li>
                    <li><a href="listatags.php">Tags</a>
                    <ul class="rd-navbar-dropdown">
                          <li><a href="cadastraTags.php">Nova Tag</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
          </nav>
        </div>
      </header>

      <!-- mensagens de alertas -->
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
      <?php if(isset($status))
      {

            switch ($status) {
              case '1':
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>Sucesso!</strong> Solicitacao deletado com sucesso!
                      </div>";
                break;
                case '2':
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>Sucesso!</strong> Solicitacao cadastrado com sucesso!
                      </div>";
                break;
                case '3':
                echo "<div class='alert alert-success alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>Sucesso!</strong> Solicitacao salvo com sucesso!
                      </div>";
                break;
              case '0':
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>Erro!</strong> Algum erro aconteceu ao deletar a solicitacao!
                      </div>";
                break;
            }
          }
      ?>
      </div>
    </div>


<div class="row" style="text-align: center; margin-top: 20px;"><h3>Solicitacao</h3></div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="cell-xs-12 offset-top-38">
      <div class="table-mobile">
        <table class="table table-athens-gray table-hover">
          <thead>
            <tr>
              <th>Código</th>
              <th>Título</th>
              <th>Autor</th>
              <th>Categoria</th>
              <th>Data</th>
              <th class="col-md-1"><a href="cadastroPost.php"><button class="btn btn-sm btn-curious-blue-outline btn-icon">Novo</button></a></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $acesso->listaSolicitacoes(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
