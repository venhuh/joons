<?php
//보람그룹 회사 템플릿
?>
<!doctype html>
<html lang="ko" id="jsmobile">
<head>
<meta charset="utf-8">
<title><?=$name?> 모바일명함</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#37517e">
<link rel="stylesheet" media="screen" type="text/css" href="//mypr.kr/z2/t1/box/box7/css/style.css?_T_=1649050604">
<link rel="stylesheet" href="/service/all/css/boram/style.css?ver=1" type="text/css" />
<link rel="stylesheet" href="/service/all/css/js/bootstrap.min.css">
<link rel="stylesheet" href="/biz/all/css2/bootstrap-side-modals.css"> <!-- ? -->
<link red="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" red="stylesheet">
<!--
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" href="/m/boram/img/boramcon.png" />
<link rel="apple-touch-icon-precomposed" href="/m/boram/img/boramcon.png" />
<link rel="shortcut icon" href="/m/boram/img/boramcon.png" />
<meta property="og:url" content="http://mypr.kr/boram/<?=$no?>">
<meta property="og:title" content="BORAM Mobile">
<meta property="og:description" content="<?=$name?>의 모바일 명함입니다.">
<meta property="og:image" content="/m/boram/img/boramcon.png">
<!--
변경해야 할 부분들(아래)
/boram/
.vcf
http://mypr.kr/service/template/C0003.php
-->
<script><!-- 문자(SMS) 전달하기 -->
function goSmsAdver(){originMsg="<?=$company?> <?=$position?> ∙ <?=$dept?> <?=$name?>의 모바일명함입니다. \n\nhttp://mypr.kr/boram/<?=$no?>\n\n반갑습니다!";bodyMsg=encodeURIComponent(originMsg);var a=navigator.userAgent.toLowerCase();a.match("android")?location.href="sms:?body="+bodyMsg:(a.match("iphone")||a.match("ipad"))&&confirm("\uc544\uc774\ud3f0\uc778\uacbd\uc6b0 \ucd08\uae30\uc804\ud654\ubc88\ud638\ub97c \uc9c0\uc6b0\uace0\n\n\uc804\ud654\ubc88\ud638\ub97c \ub2e4\uc2dc \uc120\ud0dd\ud558\uc154\uc57c\ud569\ub2c8\ub2e4.\n\n\ubb38\uc790\ub85c \uc804\uc1a1\ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?")&&
(location.href="sms:000000000&body="+bodyMsg)};
</script>	
</head>
<body width="100%" bgcolor="#16202b" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">    

<!-- 전체 시작 -->
<div style="background:#16202b;">
	<div id="hackerc" class="hackerc" style="background:#26303a;">
		<main id="main" class="main content hfeed">
			<div class="bs-canvas-overlay bs-canvas-anim bg-dark position-fixed w-100 h-100"></div> <!-- 좌측 어둡게 -->

<!-- Header -->
<div style="background:#37517e; padding:10px;">
	<div style="float:left; width:50%; padding:6px 0 6px 2px;" onclick="location.href='index.php'"><img src="/biz/all/img/logo/logo_white.png" width="74%"></div>
	<div style="float:left; width:50%; padding:6px 0 6px 2px; text-align:right;" data-toggle="canvas" data-target="#sidemenu1" aria-expanded="false" aria-controls="bs-canvas-left" href="#" role="button"><img src="/m/img/notice/menu.png" width="18%"></div>
	<div style="clear:both;"></div>				
</div>

<!-- 명함 시작 -->
<div style="width:100%; max-width:522px; margin-bottom:28px; box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0;">
	<div style="width:100%;">
		<!-- 명함 좌측 시작 -->
		<div style="float:left; width:44%;">
			<!-- 명함 좌 / 로고 -->
			<div style="padding:14px 15px 10px 5px; text-align:center;">
				<img src="/boram/all/img/2022/logo_boram.png" width="90%">
			</div>
			<!-- 명함 좌 / 인물or랜덤 -->		
			<div style="text-align:center; vertical-align:bottom;">
<?if($photo_yn != "Y") {?>
					<iframe src="/boram/all2/img/rand/card/index.php" class="iframe100" style="width:100%; text-align:left" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
<?} else {?>
<img src="/service/photo/<?=$no?>.png" style="width:32vw; padding:10px 0px 0px 20px; text-align:left">
<?}?>
			</div>
			</div>
			<!-- 명함 우측 시작 -->		
			<div style="float:left; width:55%; font-size:0.800em; padding:10px 0 5px 10px; color:#626262;">
				<!-- 지점 / 직급-->
				<div style="margin-top:8px;"><?=$position?> ㅣ <?=$dept?></div>
				<!-- 이름 / QR코드 -->
				<div style="width:100%;">
					<div style="float:left; width:70%; font-size:1.867em; letter-spacing:14px; font-weight:bold; margin-top:8px;" data-toggle="modal" class="clickable" data-target="#open_who" data-dismiss="modal"><?=$name?></div>
					<div style="float:left; width:29%; text-align:right; margin-top:2px;" data-toggle="modal" class="clickable" data-target="#open_qr" data-dismiss="modal"><img src="https://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=https://mypr.kr/boram/<?=$no?>" width="100%"></div>
					<div style="clear:both;"></div>
				</div>
				<div style="font-size:1.333em; margin-top:14px; font-weight:bold;" onclick="location.href='tel:<?=$mobile?>'"><?=$mobile?></div>
				<div  data-toggle="modal" data-target="#footer_map"><?=$address1?><br><?=$address2?></div>
				<div style="letter-spacing:-0.4px;"><font color="red"">T.</font> <?=$tel?>&nbsp;&nbsp;&nbsp;<font color="red"">F.</font>  <?=$fax?></div>
				<div style="color:#7b7b7b; font-style:italic;"><?=$email?></div>
			</div>	
		<div style="clear:both;"></div>
	</div>
</div>

<!-- Center Menu Start -->
<div class="container" style="width:100%; padding:0">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" style="font-size:0.867em;">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu1"><font color="#555555">BORAM</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2"><font color="#555555">회사소개</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3"><font color="#555555">동영상</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4"><font color="#555555">상담신청</font></a>
    </li>
  </ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<!-- menu 1 funeral -->
		<div id="menu1" class="tab-pane active" style="width:100%" style="padding:12px">
<center>
			<table width="98%" border="0" topmargin="0" leftmargin="0" style="margin-top:18px; font-size:0.933em;">
				<tr>
					<td width="25%" align="center" style="padding:0"><a href="/boram/all2/web/funeral.php" data-toggle="modal" data-target="#menu_funeral"><img src="/m/boram/img/menu2/m1.png" width="60%" style="background-color: #ffffff; opacity: 0.9;"></a></td>
					<td width="25%" align="center" style="padding:0"><a href="/boram/all2/web/travel.php" data-toggle="modal" data-target="#menu_travel"><img src="/m/boram/img/menu2/m2.png" width="56%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
					<td width="25%" align="center" style="padding:0"><a href="/boram/all2/web/wed.php" data-toggle="modal" data-target="#menu_wed"><img src="/m/boram/img/menu2/m3.png" width="58%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
					<td width="25%" align="center" style="padding:0;"><a href="/boram/all2/web/mall.php" data-toggle="modal" data-target="#menu_member"><img src="/m/boram/img/menu2/m4.png" width="50%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
				</tr>
				<tr>
					<td width="25%" align="center" style="padding:0"><a href="/boram/all2/web/funeral.php" data-toggle="modal" data-target="#menu_funeral">장 례</a></td>
					<td width="25%" align="center" style="padding:0"><a href="/boram/all2/web/travel.php" data-toggle="modal" data-target="#menu_travel">여 행</a></td>
					<td width="25%" align="center" style="padding:0"><a href="/boram/all2/web/wed.php" data-toggle="modal" data-target="#menu_wed">웨 딩</a></td>
					<td width="25%" align="center" style="padding:0;"><a href="/boram/all2/web/mall.php" data-toggle="modal" data-target="#menu_member">보람몰</a></td>
				</tr>
			</table>
			<div style="height:2px; margin:2px 0 12px 0"></div>
  		<table width="98%" border="0" topmargin="0" leftmargin="0" style="font-size:0.933em;">
	     	<tr>
  	    	<td width="25%" align="center" style=""><a href="/boram/all2/web/member.php" data-toggle="modal" data-target="#menu_ckmem"><img src="/m/boram/img/menu2/m5.png" width="50%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
 					<td width="25%" align="center" style=""><a href="/boram/all2/web/service.php" data-toggle="modal" data-target="#menu_more"><img src="/m/boram/img/menu2/m6.png" width="56%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
	 				<td width="25%" align="center" style=""><a href="/boram/all2/web/cs.php" data-toggle="modal" data-target="#menu_cs"><img src="/m/boram/img/menu2/m7.png" width="56%" style="background-color: #ffffff; opacity: 1.0;"></a></td>
			 		<td width="25%" align="center"><a href="tel:1577-1009"><img src="/m/boram/img/menu2/m8.png" width="56%" style="background-color: #ffffff; opacity: 1.0;"></a></td>
				</tr>
	     	<tr>
  	    	<td width="25%" align="center" style=""><a href="/boram/all2/web/member.php" data-toggle="modal" data-target="#menu_ckmem">계약조회</a></td>
 					<td width="25%" align="center" style=""><a href="/boram/all2/web/service.php" data-toggle="modal" data-target="#menu_more">부가서비스</a></td>
	 				<td width="25%" align="center" style=""><a href="/boram/all2/web/cs.php" data-toggle="modal" data-target="#menu_cs">고객센터</a></td> 
			 		<td width="25%" align="center"><a href="tel:1577-1009">긴급행사</a></td>
				</tr>
	    </table>
</center>	    
		<!-- Banner -->
		<center>
		<div style="margin-top:21px">
			<div style="border:5px solid #d1d5f7"></div>
			<iframe width="100%" height="300" src="https://www.youtube.com/embed/0Tf8utB2UUY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<!-- Event -->
		<div style="border:5px solid #d1d5f7"></div>		
			<div style="margin-top:0"><a href="/boram/all2/web/mall.php" data-toggle="modal" data-target="#menu_member"><img src="http://mypr.kr/m/boram/img/pt/brm_01b.jpg" width="100%"></a></div>
		<!-- Main Slide -->
		<div id="demo" class="carousel slide" data-ride="carousel" style="background:#282b55; margin-top:10px">
  		<div class="carousel-inner" style="background:#282b55;">
	    	<div class="carousel-item active"><a href="/boram/all2/web/br_1st.php" data-toggle="modal" data-target="#br_1st"><img src="http://mypr.kr/m/boram/img/pt/brbn_01.jpg" width="100%"></a></div>
		    <div class="carousel-item"><a href="/boram/all2/web/br_1st.php" data-toggle="modal" data-target="#br_1st"><img src="http://mypr.kr/m/boram/img/pt/brbn_02.jpg" width="100%"></a></div>
  		  <div class="carousel-item"><a href="http://mypr.kr/m/boram/all/br_1st.php" data-toggle="modal" data-target="#br_1st"><img src="http://mypr.kr/m/boram/img/pt/brbn_03.jpg" width="100%"></a></div>
    		<div class="carousel-item"><a href="http://mypr.kr/m/boram/all/br_1st.php" data-toggle="modal" data-target="#br_1st"><img src="http://mypr.kr/m/boram/img/pt/brbn_04.jpg" width="100%"></a></div>
		    <div class="carousel-item"><a href="http://mypr.kr/m/boram/all/br_1st.php" data-toggle="modal" data-target="#br_1st"><img src="http://mypr.kr/m/boram/img/pt/brbn_05.jpg" width="100%"></a></div>
  		  <div class="carousel-item"><a href="http://mypr.kr/m/boram/all/br_1st.php" data-toggle="modal" data-target="#br_1st"><img src="http://mypr.kr/m/boram/img/pt/brbn_06.jpg" width="100%"></a></div>
	  	</div>  
	  	<a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
		  <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
			</div>
<!-- Copyright -->
<div id="" style="color:#303030; margin-top:34px">
	<div style="padding-top:10px; text-align:center; margin-top:20px">
		<a href="/m/all/notice/copyright.php" data-toggle="modal" data-target="#js_lab">
		<div style="font-size:0.733em; color:#7a8eb5; line-height:160%;"><font color="#ccc">Copyright @ JS MOBILE<br>Allright Reserved</font><br></a></div>
	</div>
</div>
</div>

<!-- menu 2 -->
		<div id="menu2" class="tab-pane fade active" style="width:100%" style="padding:12px">
			<table width="100%" border="0" topmargin="0" leftmargin="0" style="margin-top:12px">
				<tr>
					<td width="25%" align="center"><a href="/boram/all2/web/group.php" data-toggle="modal" data-target="#menu_group"><img src="/m/boram/img/menu2/c1.png" width="56%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
					<td width="25%" align="center"><a href="/boram/all2/web/subs.php" data-toggle="modal" data-target="#menu_subs"><img src="/m/boram/img/menu2/c2.png" width="56%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
					<td width="25%" align="center"><a href="/boram/all2/web/good.php" data-toggle="modal" data-target="#menu_good"><img src="/m/boram/img/menu2/c3.png" width="56%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
					<td width="25%" align="center"><a href="/boram/all2/web/ad.php" data-toggle="modal" data-target="#menu_ad"><img src="/m/boram/img/menu2/c4.png" width="56%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
				</tr>
				<tr>
					<td width="25%" align="center"><a href="/boram/all2/web/group.php" data-toggle="modal" data-target="#menu_group">그룹소개</a></td>
					<td width="25%" align="center"><a href="/boram/all2/web/subs.php" data-toggle="modal" data-target="#menu_subs">그룹계열사</a></td>
					<td width="25%" align="center"><a href="/boram/all2/web/good.php" data-toggle="modal" data-target="#menu_good">사회공헌</a></td>
					<td width="25%" align="center"><a href="/boram/all2/web/ad.php" data-toggle="modal" data-target="#menu_ad">홍보센터</a></td>
				</tr>
			</table>
			<table width="100%" border="0" topmargin="0" leftmargin="0" style="padding-top:20px;">
		  	<tr>
					<td width="25%" align="center"><a href="/boram/all2/web/job.php" data-toggle="modal" data-target="#menu_job"><img src="/m/boram/img/menu2/c5.png" width="76%" style="background-color: #ffffff; opacity: 0.8;"></a></td>
					<td width="75%" align="center">
					  <div style="width:94%; text-align:center; background:#ddeffd; padding:8px 10px 12px 12px; line-height:220%; border-radius: 0.5em; margin-top:15px">
						<font color="#343434" size="4">보람그룹 공식 SNS 채널</font><br>
						  <a href="https://blog.naver.com/boramsangjo_group" target="_new"><img src="http://mypr.kr/m/img/sns3/blog.png" width="12%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
						  <a href="http://www.facebook.com/boram.since1991" target="_new"><img src="http://mypr.kr/m/img/sns3/fb.png" width="12%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
						  <a href="instagram://user?username=boramgroup"><img src="http://mypr.kr/m/img/sns3/insta.png" width="12%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				  		<a href="http://m.post.naver.com/my.nhn?memberNo=49080789"><img src="http://mypr.kr/m/img/sns3/post.png" width="12%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				  		<a href="http://www.youtube.com/c/보람상조Group" target="_new"><img src="http://mypr.kr/m/img/sns3//utv.png" width="12%"></a>
					  </div>	
					</td>
			  </tr>
			</table>
		</div>
		<!-- menu 3 -->
		<div id="menu3" class="tab-pane fade">
			<center>
			  <div style="margin-top:0; width:100%; text-align:center">
  				<a href="http://www.youtube.com/c/보람상조Group" target="_new"><img src="http://mypr.kr/m/boram/img/brtube2.jpg" width="100%"></a>
			  </div>
  			<div style="width:70%; border-radius:12px; background:#fefeb5; padding:5px; line-height:180%; border:1px solid orange; text-align:center; margin-top:25px">
					<a href="https://www.youtube.com/c/%EB%B3%B4%EB%9E%8C%EC%83%81%EC%A1%B0Group" target="_new"><font size="3">보람그룹 YouTUBE에서 보기</font></a>
			  </div>
  			<div style="height:140px"></div>
			</center>
		</div>
		<!-- menu 4 -->
		<div id="menu4" class="tab-pane fade">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:12px">
	  		<tr>
					<td width="50%" valign="top" align="center">
			  		<div style="width:100%; background:#fff; padding:0 0 0 10px; height:190px; margin-top:2px">
							<iframe style="width:90%; height:150px; right:0px; border:1px solid #fff; text-align:right" class="iframe1" src="/boram/all2/img/rand/cs/index.php"></iframe><br>
					  </div>
					</td>
					<td width="50%" valign="top" style="margin-bottom:0">
				  	<div style="text-align:center">
		  			 <div style="width:96%; text-align:center; padding:0 10px 16px 0; color:black; font-size:1.000em"><?=$dept?><br><?=$position?><br><font color="#555555" style="font-size:1.400em; letter-spacing:12px"><b><?=$name?></b></font></div>
							 <table width="90%" border="0" cellpadding="0" cellspacing="0">
								 <tr>
									 <td width="5%" style=""></td>
										<td width="45%"><a href="tel:010.6340.3716" target="_new"><img src="http://mypr.kr/js/img/icon/js_call.png" width="50%"></a></td>
										<td width="45%"><a href="#" target="_new"><img src="http://mypr.kr/js/img/icon/js_sms.png" width="50%" onclick="window.location.href='sms:<?=$mobile?>?body=모바일명함을 보고 연락드립니다. 상담을 신청합니다.'"></a></td>
										<td width="5%"></td>
									</tr>
									<tr>
										<td width="5%"></td>
										<td width="45%" height="35" style="color:black; font-size:1.000em">전화상담</td>
										<td width="45%" height="35" style="color:black; font-size:1.000em">문자상담</td>
										<td width="5%"></td>
									</tr>
							 </table>
							</div>			
						</div>
					 </td>
				 </tr>
			 </table>
				<center>
					<div style="width:92%; background:#eee; padding:10px; margin-top:5px"><a class="btncode" data-clipboard-text="<?=$code?>"><font size="3" color="#303a99">보람그룹 사번:</font> <font size="5" color="#303a99"><b><?=$code?></b></font></a><br>
						<font size="3" color="blue">사번을 클릭하면 복사됩니다.</font></div></center>
			   		<div style="height:140px"></div>
					</div>
	</div>
</div>

<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 100px;
  right: 10px;
  z-index: 99;
  font-size: 16px;
  border: none;
  outline: none;
  background-color: #8d68a1;
  color: white;
  cursor: pointer;
  padding: 12px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!-- footer -->
<div class="footer-js">
	<div class="ft1" data-toggle="modal" data-target="#footer_call"><img src="/biz/all/img/menu2/call.png" width="70%"></div>
	<div class="ft1" data-toggle="modal" data-target="#footer_save"><img src="/biz/all/img/menu2/save.png" width="70%"></div>
	<div class="ft1" data-toggle="modal" data-target="#footer_send"><img src="/biz/all/img/menu2/send.png" width="70%"></div>
	<div class="ft1" data-toggle="modal" data-target="#footer_map"><img src="/biz/all/img/menu2/map.png" width="70%"></div>
	<div class="ft2" data-toggle="canvas" data-target="#sidemenu2" aria-expanded="false" aria-controls="bs-canvas-left" href="#" role="button"><img src="/biz/all/img/menu2/info.png" width="70%"></div>
	<div style="clear:both;"></div>
</div>

		</div>
	</div>
</div>


<!-- QR -->
<div class="modal fade" id="open_qr" style="margin-top:62px">
  <div class="modal-dialog modal-dialog-scrollable" style="width:96%; position:fixed; top:auto; right:auto; left:auto;">
	<div class="modal-content">
	  <div style="padding:5px; border-bottom:1px solid #ccc; margin-bottom:10px; background:#c3c8cc" alt="header">
  		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="90%"  style="padding:8px; font-size:1.267em; color:#303030"><b><?=$name?> 모바일명함 QR코드</b></div></td>
			<td width="10%" style=""><button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-bottom:0; margin-right:2px">&times;</button></td>
		  </tr>
		</table>
      </div>
      <div class="modal-body" style="margin-bottom:10px; text-align:center; color:#303030; width:100%">
				<div style="width:100%">
					<div style="float:left; width:39%; text-align:left;"><img src="/biz/all/img/qrcut.gif" width="150%"></div>
					<div style="float:left; width:10%; text-align:center">&nbsp;</div>
					<div style="float:left; width:49%; padding-top:28px; text-align:center"><img src="https://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=https://mypr.kr/boram/<?=$no?>" width="60%"></div>
				  <div style="clear:both;"></div>
				</div>
				<div style="text-align:left; padding:22px 8px 5px 8px; text-align:left; line-height:150%; color:black">휴대폰의 카메라를 실행 후 QR코드를 확인해 보세요.
				<font color="blue" size="4">휴대폰으로 <b>모바일명함</b></font>을 바로 실행할 수 있습니다.</div>
		</div>
	  <div style="padding:7px; border-top:1px solid #ccc; background:#c3c8cc">
		<table width="100%" border="0" topmargin="0" leftmargin="0">
		  <tr>
			<td width="80%" align="left"><div style="font-style:italic; padding-left:10px; color:#555; font-size:0.867em;">BORAM MOBILE</div></td>
			<td width="20%"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></td>
		  </tr>
		</table>
	  </div>
    </div>
  </div>
</div>


<!-- 공지사항 -->
<div class="modal modal-right fade" id="js_notice" tabindex="-1" role="dialog" aria-labelledby="right_edit" style="z-index:1080;">
  <div class="modal-dialog modal-sm" role="document" style="width:330px;">
    <div class="modal-content">
      <div class="modal-header" style="color:#303030; background:#eee; padding:17px 16px 12px 0" class="close" data-dismiss="modal">
					<div style="float:left; width:70%; text-align:left; padding-left:25px"><b>이용안내</b></div>
					<div style="float:left; width:30%">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true"><font color="#555">&times;</font></span>
		        </button>	
					</div>				
				<div style="clear:both;"></div>
      </div>
  <div class="scrollable">
	<iframe style="position:absolute; width:100%; top:0; left:0px; height:200vw" class="embed-responsive-item iframe1" src="//mypr.kr/biz/all/web/noitce.php" allowfullscreen frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=yes vspace=0></iframe>
  </div>
		<div data-dismiss="modal" style="height:100vw"></div>
      <div class="modal-footer modal-footer-fixed" data-dismiss="modal">
        <button type="button" class="btn btn-outline-secondary">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- 이용안내 -->
<div class="modal modal-right fade" id="js_mannual" tabindex="-1" role="dialog" aria-labelledby="right_edit" style="z-index:1080;">
  <div class="modal-dialog modal-sm" role="document" style="width:330px;">
    <div class="modal-content">
      <div class="modal-header" style="color:#303030; background:#eee; padding:17px 16px 12px 0" class="close" data-dismiss="modal">
					<div style="float:left; width:70%; text-align:left; padding-left:25px"><b>이용안내</b></div>
					<div style="float:left; width:30%">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true"><font color="#555">&times;</font></span>
		        </button>	
					</div>				
				<div style="clear:both;"></div>
      </div>
			<div style="width:100%; background:#fff; margin-top:0px; color:#303030; text-align:left; padding:15px;">
				<font size="4"><b>모바일명함 이용안내</b></font><br>메뉴를 모두 한번씩 클릭해 보시면 누구나 쉽게 바로 이용하실 수 있습니다.
			</div>
			<div style="width:100%; margin:10px 0 60px 0">
				<img src="/biz/all/img/guide/guide1.png" width="100%">
			</div>
			<div style="padding-top:20px; text-align:center; border-top:1px solid #ccc;">
				<a href="/m/all/notice/copyright.php" data-toggle="modal" data-target="#js_lab">
					<div style="font-size:0.800em; color:#7a8eb5; line-height:160%;">Copyright @ JS MOBILE<br>Allright Reserved</div></a></font><br>
			</div>
		<div data-dismiss="modal" style="height:100vw"></div>
      <div class="modal-footer modal-footer-fixed" data-dismiss="modal">
        <button type="button" class="btn btn-outline-secondary">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- QA -->
<div class="modal modal-right fade" id="js_qa" tabindex="-1" role="dialog" aria-labelledby="right_edit" style="z-index:1080;">
  <div class="modal-dialog modal-sm" role="document" style="width:330px;">
    <div class="modal-content">

      <div class="modal-header" style="color:#303030; background:#ccc; padding:18px">
        <h5 class="modal-title" style="letter-spacing:2px; font-size:1.400em; color:#555" data-toggle="modal" data-target="#right_menu_bottom"><b>MyPR MOBILE</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<div style="width:100%; background:#fff; margin-top:0px; color:#303030; text-align:left; padding:20px; font-size:1.000em">
				모바일명함 상담/문의
			</div>
			<div style="width:100%; margin:30px 0 60px 0">
  <div class="scrollable">
	<iframe style="position:absolute; width:100%; top:0; left:0px; height:200vw" class="embed-responsive-item iframe1" src="//mypr.kr/biz/all/web/qa.php" allowfullscreen frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=yes vspace=0></iframe>
  </div>
			</div>
			<div style="padding-top:20px; text-align:center; border-top:1px solid #ccc;">
				<a href="/m/all/notice/copyright.php" data-toggle="modal" data-target="#js_lab">
					<div style="font-size:0.800em; color:#7a8eb5; line-height:160%;">Copyright @ JS MOBILE<br>Allright Reserved</div></a></font><br>
			</div>
		<div data-dismiss="modal" style="height:100vw"></div>
      <div class="modal-footer modal-footer-fixed" data-dismiss="modal">
        <button type="button" class="btn btn-outline-secondary">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- 문의하기 -->
<div class="modal modal-right fade" id="js_ask" tabindex="-1" role="dialog" aria-labelledby="right_edit" style="z-index:1080;">
  <div class="modal-dialog modal-sm" role="document" style="width:330px;">
    <div class="modal-content">

      <div class="modal-header" style="color:#303030; background:#ccc; padding:18px">
        <h5 class="modal-title" style="letter-spacing:2px; font-size:1.400em; color:#555" data-toggle="modal" data-target="#right_menu_bottom"><b>MyPR MOBILE</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<div style="width:100%; background:#fff; margin-top:0px; color:#303030; text-align:left; padding:20px; font-size:1.000em">
				모바일명함 상담/문의
			</div>
			<div style="width:100%; margin:30px 0 60px 0">
  <div class="scrollable">
	<iframe style="position:absolute; width:100%; top:0; left:0px; height:200vw" class="embed-responsive-item iframe1" src="//mypr.kr/biz/all/ask/form.php" allowfullscreen frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=yes vspace=0></iframe>
  </div>
			</div>
			<div style="padding-top:20px; text-align:center; border-top:1px solid #ccc;">
				<a href="/m/all/notice/copyright.php" data-toggle="modal" data-target="#js_lab">
					<div style="font-size:0.800em; color:#7a8eb5; line-height:160%;">Copyright @ JS MOBILE<br>Allright Reserved</div></a></font><br>
			</div>
		<div data-dismiss="modal" style="height:100vw"></div>
      <div class="modal-footer modal-footer-fixed" data-dismiss="modal">
        <button type="button" class="btn btn-outline-secondary">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- 인사말 -->
<div class="modal fade" id="open_who" class="bs-canvas bs-canvas-anim bs-canvas-right position-fixed bg-light h-100" style="margin-top:0px; z-index:1071;">
  <div class="modal-dialog modal-dialog-scrollable" style="width:96%; position:fixed; top:auto; right:auto; left:auto;">
	<div class="modal-content">
	  <div style="padding:5px; border-bottom:1px solid #ccc; margin-bottom:10px; background:#c3c8cc" alt="header">
  		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="90%"  style="padding:8px; font-size:1.267em; color:#303030"><b>인사말</b></div></td>
			<td width="10%" style=""><button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-bottom:0; margin-right:2px">&times;</button></td>
		  </tr>
		</table>
      </div>
      <div class="modal-body" style="margin-bottom:10px; text-align:center; color:#303030">
		  	<div style="padding-left:15px; text-align:left">안녕하세요? <b><?=$name?></b>의 모바일명함입니다.<br>
		  	반갑습니다!</div>
	    	<center>
				<div style="width:96%; margin:36px 0 10px 0; text-align:center; line-height:220%; font-size:0.867em;" data-dismiss="modal" aria-label="Close">
					<div style="width:25%; float:left; text-align:center" onclick="window.open('tel:<?=$mobile?>')"><img src="/biz/all/img/menu/call_mobile.png" width="60%"><br>휴대폰</div>
					<div style="width:25%; float:left; text-align:center" onclick="window.open('sms:<?=$mobile?>')"><img src="/biz/all/img/menu/call_sms.png" width="60%"><br>문자</div>
					<div style="width:25%; float:left; text-align:center" onclick="window.open('mailto:<?=$email?>')"><img src="/biz/all/img/menu/call_email.png" width="60%"><br>이메일</div>
					<div style="width:25%; float:left; text-align:center" onclick="window.open('tel:<?=$tel?>')"><img src="/biz/all/img/menu/call_tel.png" width="60%"><br>회사전화</div>
					<div style="clear:both;"></div>
				</div>
	    	</center>
		</div>
	  <div style="padding:7px; border-top:1px solid #ccc; background:#c3c8cc">
		<table width="100%" border="0" topmargin="0" leftmargin="0">
		  <tr>
			<td width="80%" align="left" height=""><div style="font-style:italic; padding-left:10px; color:#4A403A; font-size:0.800em" data-dismiss="modal">BORAM MOBILE</div>
			<td width="20%"><button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button></td>
		  </tr>
		</table>
	  </div>
    </div>
  </div>
</div>

		
<!-- Right 모바일명함? ==================================================== -->
<div id="sidemenu3" class="bs-canvas bs-canvas-anim bs-canvas-right position-fixed bg-light h-100" style="position: relative; z-index:1070; background:#fff;">
	<div style="background:#fff;">
		<table width="100%" border="0" style="background:#37517e;">
			<tr>
				<td width="70%" style="padding:14px 0 11px 20px; color:#f1f1f1; font-size:1.333em; letter-spacing:11px;">모바일명함</td>
				<td width="30%" style="padding:10px 20px 6px 0"><button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button></td>
			</tr>
		</table>
	</header>
	
		<table width="100%" border="0" topmargin="0" leftmargin="0" style="margin-top:10px; margin-bottom:12px; margin-left:7px; font-size:0.933em;">
		<tr>
			<td width="14%" height="44" align="center"><img src="/service/all/img/icon/megaphone.png" width="44%"></td>
			<td width="86%" height="44" data-toggle="modal" data-target="#js_notice">공지사항</td>
		</tr>				
		<tr>
			<td width="14%" height="44" align="center"><img src="/service/all/img/icon/guide.png" width="44%"></td>
		<td width="86%" height="44" data-toggle="modal" data-target="#js_mannual">이용안내</td>
		</tr>				
		<tr>
			<td width="14%" height="44" align="center"><img src="/service/all/img/icon/ask.png" width="44%"></td>
			<td width="86%" height="44" data-toggle="modal" data-target="#js_ask">문의하기</td>
		</tr>				
		<tr>
			<td width="14%" height="44" align="center"><img src="/service/all/img/icon/qa.png" width="44%"></td>
			<td width="86%" height="44" data-toggle="modal" data-target="#js_qa">Q & A</td>
		</tr>				
		<tr>
			<td width="14%" height="44" align="center"><img src="/service/all/img/icon/mypr.png" width="44%"></td>
			<td width="86%" height="44" onclick="location.href='/service/signin.php'">
				<div style="">
					<div style="float:left; width:60%; padding-top:8px;">모바일명함 만들기</div>
					<div style="float:left; width:39%; text-align:right; padding-right:20px;"><button type="button" class="btn bs-canvas-close btn-outline-secondary" aria-label="Close" style="font-size:0.933em;">Close</button></div>
					<div style="clear:both;"></div>
				</div>
			</td>
		</tr>				
	</table>
<div style="width:100%; border-top:1px solid #ccc;"></div>
	<!-- 외부 Close -->	
 <div style="height:100vw; background:#fff"><button type="button" class="btn bs-canvas-close btn-outline-dark" aria-label="Close" style="height:70vw; width:100%; border:1px solid #fff; background:#fff;"><img src="/service/all/img/mbz.png" width="50%"></div> 
	</div>    
</div>  

<!-- Right1 로그인 ==================================================== -->
<div id="sidemenu1" class="bs-canvas bs-canvas-anim bs-canvas-right position-fixed bg-light h-100" style="position: relative; background:#fff; z-index:1060;">
	<div style="background:#fff">
			<header class="bs-canvas-header overflow-auto" style="background:#37517e;">
					<div class="modal-header" style="color:#eee; background:#37517e; padding:10px 16px 10px 0;" class="close" data-dismiss="modal">
						<div style="float:left; width:16%; text-align:center; padding-top:5px;" data-toggle="modal" class="clickable" data-target="#open_who" data-dismiss="modal"><img src="/biz/all/img/admin/iam.png" width="74%"></div>
						<div style="float:left; width:28%; text-align:left; font-size:0.867em;">
								<?if($user_id == "") {?>
								<input type="button" class="btn btn-outline-secondary" onclick="location.href='/service/signin.php'" value="로그인" style="font-size:1.133em; color:#f1f1f1;">
								<?} else {?>
								<input type="button" class="btn btn-outline-secondary" onclick="location.href='/service/signin.php?mode=signout'" value="로그아웃" style="font-size:1.133em; color:#f1f1f1">
								<?}?>					
						</div>
						<div style="float:left; width:28%; text-align:left; font-size:0.867em;">
								<?if($user_id != "") {?>
								<input type="button" class="btn btn-outline-secondary" style="font-size:1.133em; color:#a0ccfd" value="명함정보 수정" onclick="location.href='myinfo.php'">
								<?}?>										
						</div>			
						<div style="float:left; width:28%; padding:6px 5px 0 0">
								<button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
						</div>				
						<div style="clear:both;"></div>
				</div>
	</header>

<style>
.hit1	{	float:left; width:50%; padding:10px 0 5px 16px; color:#8b8a8a; }
.hit2	{	float:left; width:50%; padding:10px 16px 5px 0; text-align:right; }
</style>
	<!-- Right1 Body -->
	<div style="width:100%; background:#fff; font-size:0.933em; padding:10px 0 14px 0; margin-bottom:4px;">
		<div class="hit1">오늘 방문자</div>
		<div class="hit2"><font color="gray"><?=number_format($hittoday)?></font></div>	
		<div style="clear:both;"></div>
		<div class="hit1">어제 방문자</div>
		<div class="hit2"><font color="gray"><?=number_format($hityesterday)?></font></div>	
		<div style="clear:both;"></div>
		<div class="hit1">이달 방문자</div>
		<div class="hit2"><font color="gray"><?=number_format($hitmonth)?></font></div>	
		<div style="clear:both;"></div>
		<div class="hit1">누적 방문자</div>
		<div class="hit2"><font color="gray"><?=number_format($hit)?></font></div>	
		<div style="clear:both;"></div>
		<?if($user_id != "") {?>
		<div class="hit1">가입일자</div>
		<div class="hit2"><font color="gray"><?=$usefrdt?></font></div>	
		<div style="clear:both;"></div>
		<div class="hit1">잔여일자</div>
		<div class="hit2"><font color="gray"><?=get_jan_days($usetodt)?></font></div>	
		<div style="clear:both;"></div>
		<?}?>
	</div>
	
	<!-- 램덤 명언 			-->
	<div width="100%" style="padding:22px 10px 20px 10px; inline-block; vertical-align: top; background:#fff; border-top:1px solid #ccc;">
		<iframe style="width:100%; left:0; right:0px; height:auto; top:0; inline-block; vertical-align:top" src="//mypr.kr/biz/all/rand/namecard/" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe><br>
	</div>
	<!-- 외부 Close -->	
 <div style="height:100vw; background:#fff"><button type="button" class="btn bs-canvas-close btn-outline-dark" aria-label="Close" style="height:100vw; width:100%; border:1px solid #fff; background:#fff;"></div> 
	<div style="width:100%; background:#fff; height:100vw;">

	<!-- Footer -->			
	<div style="position:fixed; bottom:0; z-index:100; margin:0 auto; width:100%; max-width:480px; padding: 12px 0 0 0; margin-left:0; backgroud:#fff;">
		<table width="100%" border="0" topmargin="0" leftmargin="0" style="margin-bottom:12px; font-size:0.933em; background:#fff;">
			<tr>
				<td width="100%" height="44">
					<div style=""  data-toggle="canvas" data-target="#sidemenu3" aria-expanded="false" aria-controls="bs-canvas-left" href="#" role="button">
						<div style="float:left; width:67%; padding:8px 0 0 18px; color:gray;">모바일명함?</div>
						<div style="float:left; width:32%;"><button type="button" class="btn bs-canvas-close btn-outline-secondary" aria-label="Close" style="font-size:0.933em;">Close</button></div>
						<div style="clear:both;"></div>
					</div>
				</td>
			</tr>				
		</table>
	</div>    	

</div>    
</div>


<!-------------------------------------------- 기업/단체 콘텐츠 영역 -------------------------------------------->

<!-- Main_slide -->
<div class="modal" id="br_1st" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 장례 -->
<div class="modal" id="menu_funeral" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>
<!-- 웨딩 -->
<div class="modal" id="menu_travel" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 웨딩 -->
<div class="modal" id="menu_wed" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 보람몰 -->
<div class="modal" id="menu_member" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 계약조회 -->
<div class="modal" id="menu_ckmem" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 부가서비스 -->
<div class="modal" id="menu_more" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 고객센터 -->
<div class="modal" id="menu_cs" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<!-- 회사소개 -->
<div class="modal" id="menu_group" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<div class="modal" id="menu_subs" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
 
<div class="modal" id="menu_good" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<div class="modal" id="menu_ad" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div>  
<div class="modal" id="menu_job" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0px; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:0px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%;">
     </div>
    </div>
  </div>
</div> 

<!-- 연락하기 -->
<div class="modal modal-bottom fade" id="footer_call" tabindex="-1" role="dialog" aria-labelledby="bottom_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-top-left-radius: 1em; border-top-right-radius: 1em;">
			<div style="margin-top:5px" data-dismiss="modal" aria-label="Close">
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="width:79%; float:left; text-align:center">
						<img src="/biz/all/img/pin.png" width="15%"><br>
						<font style="font-size:1.267em; letter-spacing:4px;"><?=$name?></font>				
				</div>
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="clear:both;"></div>
			</div>
	    <div class="modal-body">
	    	<center>
				<div style="width:96%; margin:36px 0 40px 0; text-align:center; line-height:220%; font-size:0.867em;" data-dismiss="modal" aria-label="Close">
					<div style="width:25%; float:left; text-align:center" onclick="window.open('tel:<?=$mobile?>')"><img src="/biz/all/img/menu/call.png" width="70%"><br>휴대폰</div>		
					<div style="width:25%; float:left; text-align:center" onclick="window.open('sms:<?=$mobile?>')"><img src="/biz/all/img/menu/sms.png" width="70%"><br>문자</div>							
					<div style="width:25%; float:left; text-align:center" onclick="window.open('tel:<?=$tel?>')"><img src="/biz/all/img/menu/phone.png" width="70%"><br>회사전화</div>
					<div style="width:25%; float:left; text-align:center" onclick="window.open('mailto:<?=$email?>')"><img src="/biz/all/img/menu/email.png" width="70%"><br>이메일</div>
					<div style="clear:both;"></div>
				</div>
	    	</center>
      </div>
			<div style="width:100%; padding:10px; border-top:1px solid #f1f1f1; background:#37517e;">
					<div style="width:70%; float:left; text-align:left; font-style:italic; padding:10px 0 10px 7px; color:#ccc; font-size:0.800em" data-dismiss="modal">BORAM MOBILE</div>
					<div style="width:30%; float:left; text-align:right; padding:0 4px 0 4px;" data-dismiss="modal"><button type="button" class="btn btn-outline-secondary custom" style="color:#eee; font-size:0.867em;">닫기</button></div>
				<div style="clear:both;"></div>
			</div>


		</div>
  </div>
</div>


<!-- 저장하기 -->
<div class="modal modal-bottom fade" id="footer_save" tabindex="-1" role="dialog" aria-labelledby="bottom_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-top-left-radius: 1em; border-top-right-radius: 1em;">
			<div style="margin-top:5px" data-dismiss="modal" aria-label="Close">
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="width:79%; float:left; text-align:center;">
						<div><img src="/biz/all/img/pin.png" width="15%"></div>
						<font style="font-size:1.267em; letter-spacing:1px;">명함 저장하기</font>				
				</div>
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="clear:both;"></div>
			</div>
	    <div class="modal-body">
	      <center>
	 	 		<table width="96%" height="100%" border="0" topmargin="0" leftmargin="0" style="margin-top:10px; margin-bottom:34px; color:black; font-size:0.867em;">
				<tr>
				  <td align="center" valign="middle" width="33%" onclick="window.open('/service/tel/<?=$no?>.vcf')"><img src="/biz/all/img/menu/save.png" width="54%"></td>
				  <td align="center" valign="middle" width="33%"><a href="naversearchapp://addshortcut?url=http://mypr.kr/boram/<?=$no?>&icon=http://mypr.kr/service/img/com/boram/logocon_hnp.png&title=<?=$name?> 모바일명함&serviceCode=nstore&version=7"><img src="/biz/all/img/menu/add.png" width="54%"></a></td>
				  <!-- <a href="intent://addshortcut?url=http://mypr.kr/boram/<?=$no?>/&amp;icon=http://mypr.kr/m/boram/img/og/og_rb.png&amp;title=<?=$no?> 모바일명함&oq=%ED%8C%A8%EC%85%98%ED%92%80&amp;serviceCode=sports&amp;version=7#Intent;scheme=naversearchapp;action=android.intent.action.VIEW;category=android.intent.category.BROWSABLE;package=com.nhn.android.search;end" onclick="nclk(this,'fot.shorcut','','',event);" class="u_sc"><img src="/biz/all/img/menu/add.png" width="54%"></a></td>
				  <td align="center" valign="middle" width="33%"><!--<a href="/biz/all/main/save.php"  data-toggle="modal" class="clickable" data-target="#js_add" data-dismiss="modal"><img src="/biz/all/img/menu/add_home.png" width="48%"></a>-->&nbsp;</td>
	  	  </tr>
				<tr>
			  	<td align="center" valign="middle" width="33%" height="10"></td>
				  <td align="center" valign="middle" width="33%" height="10"></td> 
				  <td align="center" valign="middle" width="33%" height="10"></td>
		    </tr>
				<tr>
				  <td align="center" valign="middle" width="33%" style="line-height:130%; font-size:0.933em;">휴대폰에<br>연락처 저장</td>				
				  <td align="center" valign="middle" width="33%" style="line-height:130%; font-size:0.933em;">홈화면에<br>아이콘추가</td>
			  	<td align="center" valign="middle" width="33%" style="line-height:130%">&nbsp;</td> 
	  	  </tr>
		  </table>
      </center>      
      

      </div>
			<div style="width:100%; padding:10px; border-top:1px solid #f1f1f1; background:#37517e;">
					<div style="width:70%; float:left; text-align:left; font-style:italic; padding:10px 0 10px 7px; color:#ccc; font-size:0.800em" data-dismiss="modal">BORAM MOBILE</div>
					<div style="width:30%; float:left; text-align:right; padding:0 4px 0 4px;" data-dismiss="modal"><button type="button" class="btn btn-outline-secondary custom" style="color:#eee; font-size:0.867em;">닫기</button></div>
				<div style="clear:both;"></div>
			</div>
		</div>
  </div>
</div>

<!-- 전달하기 -->
<div class="modal modal-bottom fade" id="footer_send" tabindex="-1" role="dialog" aria-labelledby="bottom_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-top-left-radius: 1em; border-top-right-radius: 1em;">
			<div style="margin-top:5px" data-dismiss="modal" aria-label="Close">
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="width:79%; float:left; text-align:center; line-height:200%;">
						<img src="/biz/all/img/pin.png" width="15%"><br>
						<font style="font-size:1.200em; letter-spacing:1px;">모바일명함 전달/공유하기</font>				
				</div>
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="clear:both;"></div>
			</div>			
	    <div class="modal-body" style="width:100%;">
	    	<center>
				<div style="width:100%; margin:20px 0 5px 0; text-align:center">
					<div style="width:33%; float:left; text-align:center; padding-top:4px;"><a href="#a" onclick="goSmsAdver()"><img src="/biz/all/img/menu/sms.png" width="50%"></a></div>
					<div style="width:33%; float:left; text-align:center; padding-top:4px;"><a id="kakao-link-btn" href="javascript:;"><img src="/biz/all/img/menu/talk.png" width="50%"></a></div>
					<div style="width:33%; float:left; text-align:center;"><img src="https://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=https://mypr.kr/boram/<?=$no?>" width="56%" data-toggle="modal" class="clickable" data-target="#open_qr" data-dismiss="modal"></a></div>
					<div style="clear:both;"></div>
				</div>
				<div style="width:100%; margin:0 0 10px 0; text-align:center; font-size:0.867em;">
					<div style="width:33%; float:left; text-align:center">문자전달</a></div>
					<div style="width:33%; float:left; text-align:center">카톡전달</div>
					<div style="width:33%; float:left; text-align:center">명함QR</div>
					<div style="clear:both;"></div>
				</div>

      </div>
				<div style="width:100%; margin-top:30px; background:#eee; padding:18px; 0 2px 0; font-size:0.867em; border-top-left-radius: 1em; border-top-right-radius: 1em;">
					<input type="text" style="padding:4px;" id = "ShareUrl" value="http://mypr.kr/boram/<?=$no?>">
					<span class="btn-outline-secondary">&nbsp;&nbsp;<button OnClick="javascript:CopyUrlToClipboard()" class="btn btn-info" style="padding:2px 5px 2px 5px; margin-bottom:4px;">명함주소 복사</button></span>
				</div>
	    	</center>

			  <div style="width:100%; padding:10px 0 20px 0; text-align:center; background:#f1f1f1; padding-top:20px; border-top:1px solid green;">
<!--	    	<div style="text-align:center; margin-bottom:25px; padding:8px 0 8px 0; background:#ccc"><font style="font-size:1.133em; letter-spacing:1px; font-weight:none;">SNS 공유하기</font></div>-->
					<div style="width:20%; float:left; text-align:center"><a href="" onclick="window.open(url_combine_tw, '', 'scrollbars=no, width=600, height=600'); return false;"><img src="/biz/all/img/sns/twt.png" width="44%"></a></div>
					<div style="width:20%; float:left; text-align:center"><a href="" onclick="window.open(url_combine_fb, '', 'scrollbars=no, width=600, height=600'); return false;"><img src="/biz/all/img/sns/fb.png" width="44%"></a></div>
					<div style="width:20%; float:left; text-align:center"><a href="" onclick="window.open(url_combine_band, '', 'scrollbars=no, width=584, height=635'); return false;"><img src="/biz/all/img/sns/band.png" width="44%"></a></div>
					<div style="width:20%; float:left; text-align:center"><a href="" onclick="window.open(url_combine_ks, '', 'scrollbars=no, width=600, height=600'); return false;"><img src="/biz/all/img/sns/kas.png" width="44%"></a></div>
					<div style="width:20%; float:left; text-align:center"><a href="" onclick="window.open(url_combine_naver, '', 'scrollbars=no, width=600, height=600'); return false;"><img src="/biz/all/img/sns/naver.png" width="44%"></a></div>
					<div style="clear:both;"></div>
					<div style="width:20%; float:left; text-align:center; font-size:0.800em; margin-top:6px;"><a href="" onclick="window.open(url_combine_tw, '', 'scrollbars=no, width=600, height=600'); return false;"><font color="#595959">트위터</font></a></div>
					<div style="width:20%; float:left; text-align:center; font-size:0.800em; margin-top:6px;"><a href="" onclick="window.open(url_combine_fb, '', 'scrollbars=no, width=600, height=600'); return false;"><font color="#595959">페이스북</font></a></div>
					<div style="width:20%; float:left; text-align:center; font-size:0.800em; margin-top:6px;"><a href="" onclick="window.open(url_combine_band, '', 'scrollbars=no, width=584, height=635'); return false;"><font color="#595959">밴드</font></a></div>
					<div style="width:20%; float:left; text-align:center; font-size:0.800em; margin-top:6px;"><a href="" onclick="window.open(url_combine_ks, '', 'scrollbars=no, width=600, height=600'); return false;"><font color="#595959">카카오스토리</font></a></div>
					<div style="width:20%; float:left; text-align:center; font-size:0.800em; margin-top:6px;"><a href="" onclick="window.open(url_combine_naver, '', 'scrollbars=no, width=600, height=600'); return false;"><font color="#595959">네이버</font></a></div>
					<div style="clear:both;"></div>

				</div>      
			<div style="width:100%; padding:10px; border-top:1px solid #f1f1f1; background:#37517e;">			
					<div style="width:70%; float:left; text-align:left; font-style:italic; padding:10px 0 10px 7px; color:#ccc; font-size:0.800em" data-dismiss="modal">BORAM MOBILE</div>
					<div style="width:30%; float:left; text-align:right; padding:0 4px 0 4px;" data-dismiss="modal"><button type="button" class="btn btn-outline-secondary custom" style="color:#eee; font-size:0.867em;">닫기</button></div>
				<div style="clear:both;"></div>
			</div>
		</div>
  </div>
</div>

<!-- 오시는길 -->
<div class="modal modal-bottom fade" id="footer_map" tabindex="-1" role="dialog" aria-labelledby="bottom_modal" style="z-index:1061;">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-top-left-radius: 1em; border-top-right-radius: 1em;">
			<div style="margin-top:5px" data-dismiss="modal" aria-label="Close">
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="width:79%; float:left; text-align:center">
						<img src="/biz/all/img/pin.png" width="15%">
						<font style="font-size:1.400em; letter-spacing:1px;"><br><b>오시는 길</b></font>
				</div>
				<div style="width:10%; float:left">&nbsp;</div>
				<div style="clear:both;"></div>
			</div>
	    <div class="modal-body">
				<div style="text-align:center; padding:3px 0 4px 0; font-size:0.800em">지도를 클릭하면 위치정보를 확인하실 수 있습니다.</div>
					<center>
						<div style="width:96%; padding-top:1px">
<a href="https://map.kakao.com/?urlX=507061&urlY=1107800&urlLevel=2&map_type=TYPE_MAP&map_hybrid=false" target="_blank"><img width="100%" height="120" src="https://map2.daum.net/map/mapservice?FORMAT=PNG&SCALE=1.25&MX=507061&MY=1107800&S=0&IW=504&IH=310&LANG=0&COORDSTM=WCONGNAMUL&logo=kakao_logo" style="border:1px solid #ccc"></a><div class="hide" style="overflow:hidden;padding:7px 11px;border:1px solid #dfdfdf;border-color:rgba(0,0,0,.1);border-radius:0 0 2px 2px;background-color:#f9f9f9;width:98%;"><strong style="float: left;"><img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵"></strong><div style="float: right;position:relative"><a style="font-size:12px;text-decoration:none;float:left;height:15px;padding-top:1px;line-height:15px;color:#000" target="_blank" href="https://map.kakao.com/?urlX=507061&urlY=1107800&urlLevel=2&map_type=TYPE_MAP&map_hybrid=false">지도 크게 보기</a></div></div>
						</div>
						<div style="width:100%; height:100%; background:#fff; margin-bottom:30px">
							<div style="line-height:140%; padding:15px 0 3px 0; font-size:0.933em"><?=$address1?><br><?=$address2?></a></div>
							<div style="width:100%; margin:26px 0 5px 0; text-align:center">
								<div style="width:50%; float:left; text-align:center"><a id="navi" href="#" onclick="navi();"><img src="/biz/all/img/menu/knav.png" width="36%"/></a></div>
								<div style="width:50%; float:left; text-align:center"><a href="https://surl.tmap.co.kr/235a3eb2" target="_new"><img src="/biz/all/img/menu/tmap.png" width="36%"/></a></div>
								<div style="clear:both;"></div>
															</div>
							<div style="width:100%; margin:0 0 10px 0; text-align:center">
								<div style="width:50%; float:left; text-align:center; font-size:0.867em; line-height:130%;">카카오네비로<br>바로 길 안내</a></div>
								<div style="width:50%; float:left; text-align:center; font-size:0.867em; line-height:130%;">T맵으로<br>바로 길 안내</div>
								<div style="clear:both;"></div>
							</div>
					</div>
<!-- Map Location -->
<script type='text/javascript'>
  //<![CDATA[
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('c60aba4bc9b8c8a1659c760d4da2f86d');
    // 카카오 로그인 버튼을 생성합니다.
    function navi(){
        Kakao.Navi.start({
            name: "<?=$name?>",
            x: <?=$mapx?>,
            y: <?=$mapy?>,
            coordType: 'wgs84'
        });
    }
  //]]>
</script>
      </div>
			<div style="width:100%; padding:10px; border-top:1px solid #f1f1f1; background:#37517e;">
					<div style="width:70%; float:left; text-align:left; font-style:italic; padding:10px 0 10px 7px; color:#ccc; font-size:0.800em" data-dismiss="modal">BORAM MOBILE</div>
					<div style="width:30%; float:left; text-align:right; padding:0 4px 0 4px;" data-dismiss="modal"><button type="button" class="btn btn-outline-secondary custom" style="color:#eee; font-size:0.867em;">닫기</button></div>
				<div style="clear:both;"></div>
			</div>
		</div>
  </div>
</div>

<!-- 명함정보 -->
<div id="sidemenu2" class="bs-canvas bs-canvas-anim bs-canvas-right position-fixed bg-light h-100" style="position: relative; background:#fff; z-index:1060;">
<div style="background:#fff;">
	<header class="bs-canvas-header overflow-auto" style="height:58px; background:#37517e;">
		<table width="100%" border="0">
			<tr>
				<td width="50%" style="padding:14px 0 5px 20px; color:#f1f1f1; font-size:1.333em; letter-spacing:11px;"><?=$name?></td>
				<td width="50%" style="padding:10px 20px 6px 0"><button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button></td>
			</tr>
		</table>
	</header>

<style>
.mleft	{ float:left; width:20%; text-align:center; padding:8px; }
.mright	{ float:left; width:80%; padding:10px 0 0 0; font-size:1.000em; color:#252525; }
</style>

<div class="list-group">
	<div style="background:#fff; padding-top:4px;">
		<div class="mleft"><img src="/m/all/img/bt/company3.png" width="54%"></div>
		<div class="mright"><b><?=$company?></b></div>
		<div style="clear:both;"></div>
	</div>
<? if($code != "") { ?>	
	<div style="background:#fff;">
		<div class="mleft"><img src="/m/all/img/bt/idnumber.png" width="60%"></div>
		<div class="mright"><?=$code?></div>
		<div style="clear:both;"></div>
	</div>
<? } ?>
<? if($code != "") { ?>	
	<div style="background:#fff;">
		<div class="mleft"><img src="/m/all/img/bt/code.png" width="60%"></div>
		<div class="mright"><?=$dept?></div>
		<div style="clear:both;"></div>
	</div>
<? } ?>	
	<div style="background:#fff;" data-toggle="modal" class="clickable" data-target="#open_who" data-dismiss="modal">
		<div class="mleft"><img src="/m/all/img/bt/iam2.png" width="54%"></div>
		<div class="mright"><font size="4px" style="letter-spacing:4px" color="#4d4d4d"><b><?=$name?></b></font>&nbsp;&nbsp;<font color="#555"><?=$position?></font></div>
		<div style="clear:both;"></div>
	</div>
	<div style="background:#fff;" onclick="location.href='tel:<?=$mobile?>'">
		<div class="mleft"><img src="/m/all/img/bt/smartphone3.png" width="54%"></div>
		<div class="mright"><b><?=$mobile?></b></div>
		<div style="clear:both;"></div>
	</div>
	<div style="background:#fff;" onclick="location.href='mailto:<?=$email?>'">
		<div class="mleft"><img src="/m/all/img/bt/myemail.png" width="54%"></div>
		<div class="mright"><?=$email?></div>
		<div style="clear:both;"></div>
	</div>
	<div style="background:#fff;" onclick="location.href='tel:<?=$tel?>'">
		<div class="mleft"><img src="/m/all/img/bt/tel.png" width="54%"></div>
		<div class="mright"><?=$tel?></div>
		<div style="clear:both;"></div>
	</div>
	<div style="background:#fff;">
		<div class="mleft"><img src="/m/all/img/bt/fax.png" width="54%"></div>
		<div class="mright"><?=$fax?></div>
		<div style="clear:both;"></div>
	</div>
	<div style="background:#fff; padding:0;" data-toggle="modal" data-target="#footer_map">
		<div class="mleft"><img src="/m/all/img/bt/map_.png" width="64%"></div>
		<div class="mright"><?=$address1?><br><?=$address2?></div>
		<div style="clear:both;"></div>
	</div>
</div>

<div style="border-bottom:1px solid #eee;">&nbsp;</div>


			<div style="text-align:center; padding:5px;``">
					<iframe src="/service/all/img/land/jsbiz/index.php" class="iframe100" style="position: relative; display: block; border: none; height: 10vh; width:100%; text-align:center" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
			</div>


<div style="margin-top:20px;" data-toggle="canvas" data-target="#sidemenu3" aria-expanded="false" aria-controls="bs-canvas-left" href="#" role="button">
	<div style="float:left; width:67%; padding:8px 0 0 18px; color:gray;">모바일명함?</div>
	<div style="float:left; width:32%; text-align:right; padding-right:10px;"><button type="button" class="btn bs-canvas-close btn-outline-secondary" aria-label="Close" style="font-size:0.933em;">Close</button></div>
	<div style="clear:both;"></div>
</div>

	<!-- 외부 Close -->	
 <div style="height:100vw; background:#fff"><button type="button" class="btn bs-canvas-close btn-outline-dark" aria-label="Close" style="height:100vw; width:100%; border:1px solid #fff; background:#fff;"></div> 
	<div style="width:100%; background:#fff; height:100vw;">

	<!-- QR 
	<div style="width:100%; text-align:center; background:#fff; padding-top:4px; color:#8b8a8a; font-size:0.867em; line-height:130%;" data-toggle="modal" class="clickable" data-target="#open_qr" data-dismiss="modal">
		<img src="https://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=https://mypr.kr/boram/<?=$no?>" width="24%"><br><b><?=$name?></b> <?=$position?><br>모바일명함 QR코드
	</div>
-->
	<!-- Footer 
	<div style="position: -webkit-sticky; bottom:0; z-index:100; margin:0 auto; width:100%; max-width:480px; padding: 12px 0 0 0; margin-left:0; backgroud:#fff; ">

					</div>
 </div>
-->
</div>    
</div>    
  


<!-- Copyright -->
<div class="modal" id="js_lab" style="width:100%; text-align:center">
  <div class="modal-dialog modal-dialog-scrollable" style="padding-top:0; width:100%; position:fixed; top:0px; right:auto; left:auto; bottom:60px; margin-left:0; margin-right:0">
	<div class="modal-content" style="width:100%">
     </div>
    </div>
  </div>
</div>

		
<script>(function(on,ie_on,ie_off,all_on,all_off){function random_post(){if(((document.body.scrollTop||document.documentElement.scrollTop)+document.getElementById('hacker').offsetHeight>document.getElementById('hackerc_end').offsetTop-500)&&(on)){on=false;var url='https://hackerc.tistory.com'+location.pathname;jQuery.ajax({url:'/rss',dataType:'xml',success:function(feed){var rlist=new Array();jQuery(feed).find('item link').each(function(){rlist.push(jQuery(this).text())});if(url.indexOf()!=-1){rlist.splice(rlist.indexOf(url),1);}document.getElementById('random').setAttribute('href',rlist[Math.floor(Math.random()*rlist.length)]);}});ie_off?ie_off('onscroll',random_post)||ie_off('onload',random_post):all_off('scroll',random_post)||all_off('load',random_post);}}ie_on?ie_on('onscroll',random_post)||ie_on('onload',random_post):all_on('scroll',random_post)||all_on('load',random_post);}(true,window.attachEvent,window.detachEvent,window.addEventListener,window.removeEventListener));(function(){function window_load(){document.getElementById('hackerc').className='';}setTimeout(function(){window_load()},2000);window.attachEvent?window.attachEvent('onload',window_load):window.addEventListener('load',window_load);}());</script>            
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function($){
	var bsDefaults = {
			offset: false,
			overlay: true,
			width: '330px'		
		},
		bsMain = $('.bs-offset-main'),
		bsOverlay = $('.bs-canvas-overlay');	
	
	$('[data-toggle="canvas"][aria-expanded="false"]').on('click', function(){
		var canvas = $(this).data('target'),
			opts = $.extend({}, bsDefaults, $(canvas).data()),
			prop = $(canvas).hasClass('bs-canvas-right') ? 'margin-right' : 'margin-left';
		
		if(opts.width === '100%')
			opts.offset = false;
		
		$(canvas).css('width', opts.width);
		if(opts.offset && bsMain.length)			
			bsMain.css(prop, opts.width);		
		
		$(canvas + ' .bs-canvas-close').attr('aria-expanded', "true");
		$('[data-toggle="canvas"][data-target="' + canvas + '"]').attr('aria-expanded', "true");
		if(opts.overlay && bsOverlay.length)
			bsOverlay.addClass('show');
		return false;
	});			
	
	$('.bs-canvas-close, .bs-canvas-overlay').on('click', function(){
		var canvas, aria;
		if($(this).hasClass('bs-canvas-close')) {
			canvas = $(this).closest('.bs-canvas');
			aria = $(this).add($('[data-toggle="canvas"][data-target="#' + canvas.attr('id') + '"]'));
			if(bsMain.length)
				bsMain.css(($(canvas).hasClass('bs-canvas-right') ? 'margin-right' : 'margin-left'), '');	
		} else {
			canvas = $('.bs-canvas');
			aria = $('.bs-canvas-close, [data-toggle="canvas"]');
			if(bsMain.length)
				bsMain.css({'margin-left': '', 'margin-right': ''});
		}
		canvas.css('width', '');
		aria.attr('aria-expanded', "false");
		if(bsOverlay.length)	
			bsOverlay.removeClass('show');		
		return false;
	});
});
</script>

<!--BEGIN SCRIPT FOR DEMO ONLY. DON'T COPY.-->
<script>
jQuery(document).ready(function($){
	$('#cb-transition').change(function() {
		var chk = $(this).is(':checked');
		$(this).closest('.border').toggleClass('border-primary', chk).toggleClass('border-secondary', !chk)
		$('.bs-canvas-overlay, .bs-canvas-left, .bs-canvas-right, .bs-offset-main').toggleClass('bs-canvas-anim', chk);
		$('.custom-control-label').html(chk ? '<span class="text-primary">Transition is Enabled.</span>' : '<span class="text-secondary">Transition is Disabled.</span>');		
    });
	
	$('.btn-demo').click(function() {
		var target = $(this).data('target');
		$(target).data($(this).next().data());
		$('[data-toggle="canvas"][data-target="' + target +'"]').first().click();
	});
});
</script>
<!--END SCRIPT FOR DEMO ONLY. DON'T COPY.-->

<!-- Slide Menu 제어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- modal 팝업창 제어 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- sns / txt-copy & etc -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script src="/biz/all/css2/btn.js"></script>
<script src="/biz/all/css/jsall.js"></script>
<script>
function CopyUrlToClipboard()
{
var obShareUrl = document.getElementById("ShareUrl");
obShareUrl.value = window.document.location.href;  // 현재 URL 을 세팅해 줍니다.
	obShareUrl.select();  // 해당 값이 선택되도록 select() 합니다
	document.execCommand("copy"); // 클립보드에 복사합니다.
	obShareUrl.blur(); // 선택된 것을 다시 선택안된것으로 바꿈니다.
	alert("<?=$name?>의 모바일명함 주소가 클립보드에 복사되었습니다.\nhttp://mypr.kr/boram/<?=$no?>"); 
}
</script>


<!-- KaTalk Send -->
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
<script type='text/javascript'>
  //<![CDATA[
    // // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('c60aba4bc9b8c8a1659c760d4da2f86d');
    // // 카카오링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createDefaultButton({
      container: '#kakao-link-btn',
      objectType: 'location',
      address: '<?=$address1?><br><?=$address2?>',
      addressTitle: '<?=$company?>',
      content: {
        title: '<?=$company?>',
        description: '반갑습니다. <?=$name?>의 모바일명함입니다.',
        imageUrl: 'http://mypr.kr/m/boram/img/talk_br1.png',
        link: {
          mobileWebUrl: 'http://mypr.kr/boram/<?=$no?>',
          webUrl: 'http://mypr.kr/boram/<?=$no?>',
        }
      },
      buttons: [
        {
          title: '모바일명함 확인',
          link: {
            mobileWebUrl: 'http://mypr.kr/boram/<?=$no?>',
            webUrl: 'http://mypr.kr/boram/<?=$no?>'
          }
        }
      ]
    });
  //]]>
</script>

</body>
</html>
