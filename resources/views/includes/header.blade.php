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
</div> <img src="https://www.lozaty.com/s/i/w2.png" style="position: absolute; left: -1000%;">
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
			<a href="{{route('home')}}">
				<div class="ov trans"></div>
			</a>
		</div>
		<div class="mt80 fs0 c gnd">
			<div class="g_nm w80" style="direction: ltr;">
				<div class="g_nm w50 fs14 milos">
					<a href="{{route('home')}}">
						<div class="mb ez-f" id=home_b><i><img src="{{asset('images/home.svg')}}" /></i>{{__('Home')}}</div>
					</a>
				</div>
				<div class="g_nm w50 fs14 milos">
					<div class="mb ez-f" id=discover_b_m><i><img src="{{asset('images/flavors.svg')}}" /></i>Discover Lozaty</div>
				</div>
				<div class="g_nm w50 fs14 milos">
					<a href="{{route('videos')}}">
						<div class="mb ez-f" id=videos_b><i><img src="{{asset('images/videos.svg')}}" /></i>Videos</div>
					</a>
				</div>
				<div class="g_nm w50 fs14 milos">
					<a href="{{route('global-presence')}}">
						<div class="mb ez-f" id=gp_b><i><img src="{{asset('images/loc.svg')}}" /></i>Global Presence</div>
					</a>
				</div>
				<div class="g_nm w50 fs14 milos">
					<a href="{{route('contact')}}">
						<div class="mb ez-f" id=contact_b><i><img src="{{asset('images/contact.svg')}}" /></i>Contact Us</div>
					</a>
				</div>
				<div class="g_nm w50 fs14 kilos fh">
					<a href="{{route('discover')}}/overview">
						<div class="mb ez-f" id=contact_b><i><img src="{{asset('images/flavors.svg')}}" /></i>Overview</div>
					</a>
				</div>
				<div class="g_nm w50 fs14 kilos fh">
					<a href="{{route('discover')}}">
						<div class="mb ez-f" id=contact_b><i><img src="{{asset('images/flavors.svg')}}" /></i>Composits</div>
					</a>
				</div>
				<div class="g_nm w50 fs14 kilos fh">
					<a href="{{route('discover')}}">
						<div class="mb ez-f" id=contact_b><i><img src="{{asset('images/flavors.svg')}}" /></i>Flavors</div>
					</a>
				</div>
			</div>
			<div class="c pv40 mt20 soc" style="padding-bottom:0px; font-size: 13px; color: #ddd;"> <a href={{route('language',['locale'=>'en'])}}>English</a>&emsp;|&emsp;<a href={{route('language',['locale'=>'ar'])}} style="font-family: 'ge_ss_twomedium';">عربي</a>
				<div class=mt15>
					<a href="https://fb.com/LozatyArabia" target="_blank">
						<div class="c hicon dark ml5"><i class="fa fa-facebook"></i></div> /LozatyArabia </a>
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
			background: URL('/images/logo.png') scroll no-repeat left center/contain;
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
							<div class="c hicon"><i class="fa fa-envelope"></i></div> <a href="mailto:lozaty@lozaty.com"><span class=ml5>lozaty@lozaty.com</span></a>
							<!--<div class="c hicon ml20 m_m_h fh"><i class="fa fa-clock-o"></i></div><span class="ml5 m_m_h fh">Mom-Sat 8.00- 18.00</span>--><span class="headfoa ml15">
                         <a href="https://fb.com/LozatyArabia" target="_blank">
                            <div class="c hicon dark ml5"><i class="fa fa-facebook"></i></div>
                            /LozatyArabia
                         </a>
                      </span> </div>
						<div class="col r headfoa"><a href={{route('language',['locale'=>'en'])}}>English</a>&emsp;|&emsp;<a href={{route('language',['locale'=>'ar'])}} style="font-family: 'ge_ss_twomedium';">عربي</a></div>
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
							<a href="{{route('home')}}">
								<div class="ov trans"></div>
							</a>
							<div class="ov trans h m_sib pointer m_toggle" style="z-index: 999; left: auto; font-size: 0px; line-height: 50px;"><img src="{{asset('images/menu.svg')}}" style="width: 30px;" /></div>
						</div>
						<div class="col r m_h">
							<a href="{{route('home')}}">
								<div class="mb ez-f" id=home_b><i><img src="{{asset('images/home.svg')}}" /></i>{{__('Home')}}</div>
							</a>
							<div class="mb ez-f mbA" id=discover_b> <a href="{{route('discover')}}"><i><img src="{{asset('images/flavors.svg')}}" /></i>Discover Lozaty</a>
								<div class="subM ez-f">
									<a href="{{route('discover')}}">
										<div class="subMb"><span class="mdi mdi-circle-medium"></span>Overview</div>
									</a>
									<a href="{{route('discover')}}">
										<div class="subMb"><span class="mdi mdi-circle-medium"></span>Composits</div>
									</a>
									<a href="{{route('discover')}}">
										<div class="subMb"><span class="mdi mdi-circle-medium"></span>Flavors</div>
									</a>
								</div>
							</div>
							<a href="{{route('videos')}}">
								<div class="mb ez-f" id=videos_b><i><img src="{{asset('images/videos.svg')}}" /></i>Videos</div>
							</a>
							<a href="{{route('global-presence')}}">
								<div class="mb ez-f" id=global-presence_b><i><img src="{{asset('images/loc.svg')}}" /></i>Global Presence</div>
							</a>
							<a href="{{route('contact')}}">
								<div class="mb ez-f" id=contact_b><i><img src="{{asset('images/contact.svg')}}" /></i>Contact Us</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>