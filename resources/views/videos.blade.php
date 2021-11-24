<!DOCTYPE html>
<html lang="en">

<head>
	<meta property="og:url" content="https://www.lozaty.com" />
	<meta property="og:title" content="Lozaty - لوزتي" />
	<meta property="og:type" content="Company" />
	<meta property="og:site_name" content="Lozaty - لوزتي" />
	<meta property="fb:admins" content="592515154" />
	<meta property="og:description" content="Lozaty" />
	<meta property="og:image" content="https://www.lozaty.com/s/i/logo.png" />
	<meta name="language" content="english">
	<meta rel="publisher" content="Lozaty - لوزتي" />
	<meta rel="author" content="Lozaty - لوزتي" />
	<meta name="title" content="Lozaty - لوزتي">
	<meta name="description" content="Lozaty" />
	<meta name="Keywords" content="lozaty" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,target-densitydpi=device-dpi">
	<title>Lozaty - لوزتي</title>
	<link rel="icon" type="image/x-icon" href="https://www.lozaty.com/favicon.ico" />
	<link href="https://www.lozaty.com/s/c/c.css" rel="stylesheet" type="text/css" />
	<link href="https://www.lozaty.com/s/c/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
</head>

<body>
	<div style="position:fixed; overflow:hidden; top:-1px; left:-1px; height:0px; width:0px;">
		<style>
		.pageTit h3 {
			font-size: 30px;
			text-transform: capitalize;
			font-weight: 700;
		}
		
		.breadcrumb {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			padding: .75rem 1rem;
			margin-bottom: 1rem;
			list-style: none;
			background-color: #e9ecef;
			border-radius: .25rem;
			background: transparent;
			padding: 0;
		}
		
		.justify-content-center {
			-webkit-box-pack: center!important;
			-ms-flex-pack: center!important;
			justify-content: center!important;
		}
		
		.breadcrumb li a {
			color: #444;
			-webkit-transition: all 0.24s ease-in-out;
			transition: all 0.24s ease-in-out;
		}
		
		.breadcrumb li.active {
			color: #90c438;
		}
		
		.breadcrumb-item+.breadcrumb-item::before {
			display: inline-block;
			padding-right: .5rem;
			padding-left: .5rem;
			color: #6c757d;
			content: "/";
		}
		
		.hicon {
			border: 1px solid #fff;
			border-radius: 100%;
			font-size: 13px;
			line-height: 23px;
			width: 25px;
			height: 25px;
			display: inline-block;
		}
		
		.hicon.dark {
			border-color: rgba(255, 255, 255, 0.8);
		}
		
		.head.active {
			position: fixed;
			top: 0px;
			background: #9281B2;
		}
		
		.head.active .headtop {
			display: none;
		}
		
		.mb,
		.mbc {
			font-family: 'Roboto';
			font-weight: 700;
			display: inline-block;
			margin-left: 25px;
			font-size: 15px;
			cursor: pointer;
			color: rgba(0, 0, 0, 0.7);
			color: #444;
			font-size: 16px;
		}
		
		.mb:hover,
		.mbc {
			color: #000;
		}
		
		.headtop {
			color: #fff;
		}
		
		#footer {
			background: #f9f9f9;
			padding-top: 60px;
			font-family: 'Roboto';
			font-size: 16px;
		}
		
		#footer strong {
			font-size: 25px;
			color: #555;
		}
		
		#footer address {
			margin-bottom: 1rem;
			font-style: normal;
			line-height: inherit;
			font-size: 16px;
		}
		
		.footer-titil {
			font-size: 20px;
			text-transform: uppercase;
			font-weight: 700;
			margin: 0 0 20px;
		}
		
		p {
			font-size: 16px;
			margin: 0 0 15px;
			padding: 0 0 0px;
		}
		
		.headfoa a {
			color: #fff;
		}
		
		#footer a {
			color: #666;
		}
		
		#footer a.foa {
			display: block;
			text-decoration: underline;
			padding: 3px 0;
			color: #666;
			-webkit-transition: all 0.24s ease-in-out;
			transition: all 0.24s ease-in-out;
		}
		
		#footer a.foa:hover {
			color: #90c438;
			padding-left: 10px;
		}
		
		#footer .hicon.dark {
			border-color: #888;
		}
		
		.tit {
			font-size: 46px;
			font-weight: bold;
			line-height: 50px;
			color: #34434a;
		}
		
		.sep {
			width: 60px;
			height: 3px;
			background: #ddd;
		}
		
		.txt {
			font-size: 18px;
			line-height: 25px;
			color: #657177;
		}
		
		.btn {
			line-height: 60px;
			background: #927fb3;
			padding: 0px 40px;
			color: #fff;
			font-size: 14px;
			border-radius: 30px;
			cursor: pointer;
		}
		
		@media all and (max-width: 480px) {
			.tit {
				font-size: 40px;
				line-height: 50px;
			}
			.txt {
				font-size: 17px;
				line-height: 34px;
			}
		}
		
		#header::before {
			content: '';
			background: #9180B1;
			opacity: 0.2;
			position: absolute;
			left: 0;
			right: 0;
			bottom: 0;
			top: 0;
		}
		
		.sub_tit {
			font-size: 20px;
			font-weight: 400;
			color: #927fb3;
		}
		
		.tit {
			font-size: 30px;
			font-weight: bold;
			line-height: 50px;
			color: #34434a;
		}
		
		.sep {
			width: 60px;
			height: 3px;
			background: #ddd;
		}
		
		.txt {
			font-size: 16px;
			line-height: 25px;
			color: #000;
		}
		
		.btn {
			line-height: 60px;
			background: #927fb3;
			padding: 0px 40px;
			color: #fff;
			font-size: 14px;
			border-radius: 30px;
			cursor: pointer;
		}
		
		.btn:hover {
			box-shadow: 0px 8px 15px rgba(0, 0, 0, .3);
		}
		
		.abt_img {
			height: 285px;
		}
		
		.colSep {
			min-width: 80px;
			width: 80px;
		}
		
		.flavors_img {
			height: 200px;
			display: inline-block;
			width: 65%;
		}
		
		.entry_steps {
			width: 26px;
			height: 26px;
			line-height: 26px;
			border-radius: 100%;
			background: #927fb3;
			font-size: 14px;
			color: #fff;
			margin- {
				$langs['right']
			}
			: 30px;
		}
		
		.flavors_tit {
			font-size: 20px;
			color: #333;
			font-weight: bold;
		}
		
		.flavors_txt {
			font-size: 14px;
			color: #657177;
			font-weight: 400;
			line-height: 24px;
		}
		
		@media all and (max-width: 480px) {
			.tit {
				font-size: 24px;
				line-height: 30px;
			}
			.txt {
				font-size: 14px;
				line-height: 34px;
			}
		}
		</style>
		<h1>Lozaty - لوزتي - Lozaty - lozaty</h1></div><img src="https://www.lozaty.com/s/i/w2.png" style="position: absolute; left: -1000%;">
	<div class=loader style="position:fixed; width:100%; height:100%; background:rgba(255,255,255,0.4); z-index:9999;"></div>
	<div class=bcbc style="overflow:hidden; min-height:100vh; z-index:1;">
		<style>
		.m_v_m {
			display: none;
		}
		
		.m_v_m.opened {
			display: block;
			height: 100vh;
			overflow: overlay;
		}
		
		.m_v_m .mb,
		.m_v_m .mbc {
			display: block;
			text-align: center;
			line-height: 20px;
			margin-left: 0px;
			margin-bottom: 60px;
		}
		
		.gnd i {
			line-height: 20px !Important;
		}
		
		.soc .hicon,
		.soc a {
			border-color: #fff;
			color: #fff;
		}
		</style>
		<div class="m_v_m pf" style="background: rgba(255,255,255,0.98); background: #9280B3; z-index: 99999; left:0; top: 0; right: 0; bottom: 0;">
			<div class="ov trans h m_sib pointer m_toggle" style="z-index: 999; left: auto; right:20px; top:10px; font-size: 40px; line-height: 50px; bottom: auto; height:50px;"><span class="mdi mdi-close"></span></div>
			<div class="logoH" style="margin-top: 90px; background-position: center center; padding-bottom: 20px;">
				<a href="https://www.lozaty.com/">
					<div class="ov trans"></div>
				</a>
			</div>
			<div class="mt80 fs0 c gnd">
				<div class="g_nm w80" style="direction: ltr;">
					<div class="g_nm w50 fs14 milos">
						<a href="https://www.lozaty.com/">
							<div class="mb ez-f" id=home_b><i><img src="https://www.lozaty.com/home.svg" /></i>Home</div>
						</a>
					</div>
					<div class="g_nm w50 fs14 milos">
						<div class="mb ez-f" id=discover_b_m><i><img src="https://www.lozaty.com/flavors.svg" /></i>Discover Lozaty</div>
					</div>
					<div class="g_nm w50 fs14 milos">
						<a href="https://www.lozaty.com/videos">
							<div class="mb ez-f" id=videos_b><i><img src="https://www.lozaty.com/videos.svg" /></i>Videos</div>
						</a>
					</div>
					<div class="g_nm w50 fs14 milos">
						<a href="https://www.lozaty.com/global-presence">
							<div class="mb ez-f" id=gp_b><i><img src="https://www.lozaty.com/loc.svg" /></i>Global Presence</div>
						</a>
					</div>
					<div class="g_nm w50 fs14 milos">
						<a href="https://www.lozaty.com/contact">
							<div class="mb ez-f" id=contact_b><i><img src="https://www.lozaty.com/contact.svg" /></i>Contact Us</div>
						</a>
					</div>
					<div class="g_nm w50 fs14 kilos fh">
						<a href="https://www.lozaty.com/discover/overview">
							<div class="mb ez-f" id=contact_b><i><img src="https://www.lozaty.com/flavors.svg" /></i>Overview</div>
						</a>
					</div>
					<div class="g_nm w50 fs14 kilos fh">
						<a href="https://www.lozaty.com/discover/composition">
							<div class="mb ez-f" id=contact_b><i><img src="https://www.lozaty.com/flavors.svg" /></i>Composits</div>
						</a>
					</div>
					<div class="g_nm w50 fs14 kilos fh">
						<a href="https://www.lozaty.com/discover/flavors">
							<div class="mb ez-f" id=contact_b><i><img src="https://www.lozaty.com/flavors.svg" /></i>Flavors</div>
						</a>
					</div>
				</div>
				<div class="c pv40 mt20 soc" style="padding-bottom:0px; font-size: 13px; color: #ddd;"><a href="https://www.lozaty.com/?lang=en">English</a>&emsp;|&emsp;<a href="https://www.lozaty.com/?lang=ar" style="font-family: 'ge_ss_twomedium';">عربي</a>
					<div class=mt15>
						<a href="https://fb.com/LozatyArabia" target="_blank">
							<div class="c hicon dark ml5"><i class="fa fa-facebook"></i></div> /LozatyArabia</a>
					</div>
				</div>
			</div>
		</div>
		<div class="m_v_b" style="min-height: 100vh;">
			<style>
			body {
				/*background: URL('https://www.lozaty.com/s/i/bg.jpg') scroll repeat center center/cover;*/
			}
			
			.logoH {
				background: URL('https://www.lozaty.com/s/i/logo.png') scroll no-repeat left center/contain;
				min-width: 200px;
				height: 45px;
			}
			
			.mb i,
			.mbc i {
				display: block;
				text-align: center;
			}
			
			.mb i img,
			.mbc i img {
				width: 100%;
				max-width: 40px;
			}
			
			.mb,
			.mbc {
				letter-spacing: -0.5px;
				font-weight: normal;
				font-size: 14px;
				color: rgba(255, 255, 255, 0.7);
				text-align: center;
				margin-left: 25px;
				margin-right: auto;
			}
			
			.mb:hover,
			.mbc:hover {
				color: rgba(255, 255, 255, 1);
			}
			
			.mbc {
				cursor: default;
				color: rgba(255, 255, 255, 1);
			}
			</style>
			<div class="pa head" style="direction: ltr; left: 0; right: 0; top: 0px; z-index: 9999;">
				<div style="padding: 3px 0px; line-height: 35px; height: 41px; z-index: 9999;" class="oh headtop m_h">
					<div class="flexi">
						<div class="tbl">
							<div class="col l headfoa" style="direction: ltr;">
								<div class="c hicon"><i class="fa fa-envelope"></i></div><a href="mailto:lozaty@lozaty.com"><span class=ml5>lozaty@lozaty.com</span></a>
								<!--<div class="c hicon ml20 m_m_h fh"><i class="fa fa-clock-o"></i></div><span class="ml5 m_m_h fh">Mom-Sat 8.00- 18.00</span>--><span class="headfoa ml15"><a href="https://fb.com/LozatyArabia" target="_blank"><div class="c hicon dark ml5"><i class="fa fa-facebook"></i></div> /LozatyArabia</a></span></div>
							<div class="col r headfoa"><a href="https://www.lozaty.com/?lang=en">English</a>&emsp;|&emsp;<a href="https://www.lozaty.com/?lang=ar" style="font-family: 'ge_ss_twomedium';">عربي</a></div>
						</div>
					</div>
				</div>
				<style>
				.subM {
					position: absolute;
					top: 100%;
					margin-top: 0px;
					background: #9281B2;
					border-bottom: 5px solid rgba(0, 0, 0, 0.2);
					padding-top: 5px;
					left: 0px;
					right: 0px;
					opacity: 0;
					text-align: left;
				}
				
				.subM a {
					color: #fff;
					padding: 0px 10px;
					display: block;
					line-height: 25px;
					letter-spacing: -1px;
				}
				
				.subM a:hover {
					background: rgba(0, 0, 0, 0.1);
				}
				
				.mb,
				.mbc {
					padding: 0px 10px;
					padding-top: 5px;
				}
				
				.mb a {
					color: #fff;
				}
				
				.mbA {
					border-radius: 15px 15px 0px 0px;
				}
				
				.mbA:hover {
					background: #9281B2;
				}
				
				.mbA:hover .subM {
					opacity: 1;
				}
				
				.subM span {
					margin-right: 3px;
				}
				</style>
				<div class="flexi">
					<div class=pv20>
						<div class="tbl" style="direction: ltr;">
							<div class="col l logoH">
								<a href="https://www.lozaty.com/">
									<div class="ov trans"></div>
								</a>
								<div class="ov trans h m_sib pointer m_toggle" style="z-index: 999; left: auto; font-size: 0px; line-height: 50px;"><img src="https://www.lozaty.com/s/i/menu.svg" style="width: 30px;" /></div>
							</div>
							<div class="col r m_h">
								<a href="https://www.lozaty.com/">
									<div class="mb ez-f" id=home_b><i><img src="https://www.lozaty.com/home.svg" /></i>Home</div>
								</a>
								<div class="mb ez-f mbA" id=discover_b><a href="https://www.lozaty.com/discover"><i><img src="https://www.lozaty.com/flavors.svg" /></i>Discover Lozaty</a>
									<div class="subM ez-f">
										<a href="https://www.lozaty.com/discover/overview">
											<div class="subMb"><span class="mdi mdi-circle-medium"></span>Overview</div>
										</a>
										<a href="https://www.lozaty.com/discover/composition">
											<div class="subMb"><span class="mdi mdi-circle-medium"></span>Composits</div>
										</a>
										<a href="https://www.lozaty.com/discover/flavors">
											<div class="subMb"><span class="mdi mdi-circle-medium"></span>Flavors</div>
										</a>
									</div>
								</div>
								<a href="https://www.lozaty.com/videos">
									<div class="mb ez-f" id=videos_b><i><img src="https://www.lozaty.com/videos.svg" /></i>Videos</div>
								</a>
								<a href="https://www.lozaty.com/global-presence">
									<div class="mb ez-f" id=global-presence_b><i><img src="https://www.lozaty.com/loc.svg" /></i>Global Presence</div>
								</a>
								<a href="https://www.lozaty.com/contact">
									<div class="mb ez-f" id=contact_b><i><img src="https://www.lozaty.com/contact.svg" /></i>Contact Us</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="bc">
				<style></style>
				<style>
				.vImg {
					padding-bottom: 60%;
					background-position: center center;
					background-size: cover;
				}
				
				.vImg:before {
					position: absolute;
					content: " ";
					top: 50%;
					left: 50%;
					height: 50px;
					width: 50px;
					margin-left: -25px;
					margin-top: -25px;
					background: URL('https://www.beacdn.com/play_button.png') scroll no-repeat center center/contain;
				}
				
				.vTit {
					margin-top: 5px;
					font-weight: bold;
					line-height: 20px;
					height: 40px;
					overflow: hidden;
					text-overflow: ellipsis;
					color: #000;
					text-transform: uppercase;
					font-size: 1rem;
				}
				</style>
				<div id="header" style="background: URL('https://www.lozaty.com/s/i/bg.jpg') scroll repeat center center/cover; direction: ltr; padding: 100px 0px; padding-top: 141px;">
					<div class="pa w100 flipHoriz" style="left: 0px; top: 0px; max-width: 600px; height: 240px; background: URL('https://www.lozaty.com/s/i/hbgl.png') scroll no-repeat left top/contain;"></div>
					<div class=ov style="background: rgba(255,255,255,0.2);"></div><span class=fh><div class=pageTit><h3>Videos</h3></div><nav aria-label="breadcrumb"><ol class="breadcrumb site-breadcumb-1 justify-content-center"><li class="breadcrumb-item"><a href="https://www.lozaty.com/">Home</a></li><li class="breadcrumb-item active" aria-current="page">Videos</li></ol></nav></span></div>
				<div style="background: #81729C; height: 4px;"></div>
				<div class=pv50>
					<div class=flexi style="direction: ltr;">
						<div class="g w80 m_w100 l">
							<div class="tit">Videos</div>
							<div class="sep g_nm"></div>
							<div class="mt50 m_mt20 c">
								<div class=tbl style="direction: ltr;">
									<div class=row>
										<div class="col c vt">
											<iframe frameborder="0" id="ifex" data-id="7C3hrEdXaXM" src="https://www.youtube.com/embed/7C3hrEdXaXM?autoplay=1&amp;modestbranding=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;color=blue&amp;vq=hd720&amp;enablejsapi=1" height="450" scrolling="no" width="100%"></iframe>
										</div>
									</div>
								</div>
								<div class="sTxt mt40 fs0 l" style="margin:-5px;">
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="rD5xlDGN3Os">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/rD5xlDGN3Os/mqdefault.jpg');"></div>
											<div class=vTit>Video 1</div>
										</div>
									</div>
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="c7mUHNTAPmc">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/c7mUHNTAPmc/mqdefault.jpg');"></div>
											<div class=vTit>Video 2</div>
										</div>
									</div>
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="GDBFkaoQ1tA">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/GDBFkaoQ1tA/mqdefault.jpg');"></div>
											<div class=vTit>Video 3</div>
										</div>
									</div>
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="sY2XGfk0D9Y">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/sY2XGfk0D9Y/mqdefault.jpg');"></div>
											<div class=vTit>Video 4</div>
										</div>
									</div>
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="dxlh1BbO3XQ">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/dxlh1BbO3XQ/mqdefault.jpg');"></div>
											<div class=vTit>Video 5</div>
										</div>
									</div>
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="9r5j3GR0RQQ">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/9r5j3GR0RQQ/mqdefault.jpg');"></div>
											<div class=vTit>Video 6</div>
										</div>
									</div>
									<div class="g_nm w33 md_w50 m_w100">
										<div style="margin:5px;" class="vBox pointer" vid="7C3hrEdXaXM">
											<div class="vImg" style="background-image: URL('https://i.ytimg.com/vi/7C3hrEdXaXM/mqdefault.jpg');"></div>
											<div class=vTit>Video 7</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style></style>
		</div>
	</div>

	
</body>

</html>