@extends('layouts.layout')

@section('body')
<div id="header" style="background: URL('/images/bg.jpg') scroll repeat center center/cover; direction: ltr; padding: 100px 0px; padding-top: 141px;">
	<div class="pa w100 flipHoriz" style="left: 0px; top: 0px; max-width: 600px; height: 240px; background: URL('/images/hbgl.png') scroll no-repeat left top/contain;"></div>
	<div class=ov style="background: rgba(255,255,255,0.2);"></div><span class=fh><div class=pageTit><h3>Videos</h3></div><nav aria-label="breadcrumb"><ol class="breadcrumb site-breadcumb-1 justify-content-center"><li class="breadcrumb-item"><a href="https://www.lozaty.com/">Home</a></li><li class="breadcrumb-item active" aria-current="page">Videos</li></ol></nav></span></div>
<div style="background: #81729C; height: 4px;"></div>
<section style="background: #fff; padding: 50px 0px;">
	<div class="flexi" style="direction: ltr;">
		<div class="tit">{{__('Contact Us')}}</div>
		<div class="g_nm sep mt20"></div>
		<br>
		<div class="txt mt10 c g_nm w50 m_w100">
			<div class="tbl">
				<div class="row">
					<div class="col w40 vt c fh">
						<div class="mt50 m_mt0"><font class="fa fa-phone contact_icons"></font>
							<div class="mt10 contact_info">000000000000000</div>
							<div class="mt5 contact_txt">Customer Service</div>
						</div>
						<div class="mt50 m_mt0"><font class="fa fa-map-marker contact_icons"></font>
							<div class="mt10 contact_info">Address 12345</div>
							<div class="mt5 contact_txt">Address</div>
						</div>
					</div>
					<div class="col w50 vt">
						<div class="main_tit m_mt60 l m_c">{{__('Contact Us')}}</div>
						<div class="main_txt l m_c"></div>
						<div class="mt30">
							<form id="contForm" action="/send-mail" method="POST" >
								@csrf
								<div class="tbl">
									<div class="row">
										<div class="col w50">
											<div class="frm2">
												<input class="rinput ez-f" type="text" name="Name" id="Name" value="" title="Name" placeholder="{{(Config::get('app.locale') == 'en'?'Name..':'الاسم')}}" required>
											</div>
										</div>
										<div class="col" style="min-width: 10px; width: 10px;"></div>
										<div class="col w50 l">
											<div class="frm2 m_mt10">
												<input class="rinput ez-f" type="Email" name="Email" id="Email" value="" title="Email Address" placeholder="{{(Config::get('app.locale') == 'en'?'Email Address..':'البريد الالكتروني')}}" required>
											</div>
										</div>
									</div>
								</div>
								<div class="frm2 mt10">
									<input class="rinput ez-f" type="Subject" name="Subject" id="Subject" value="" title="Subject" placeholder="{{(Config::get('app.locale') == 'en'?'Subject..':'الموضوع')}}" required>
								</div>
								<div class="frm2 mt10" style="">
									<textarea class="rinput ez-f" name="Message" id="Message" placeholder="{{(Config::get('app.locale') == 'en'?'Message..':'الرسالة')}}" style="color: #606060; height: 140px; font-size: 15px; padding: 10px; line-height: 20px; background: transparent; outline: none; display: block; margin-top: 10px; resize: none;" required></textarea>
								</div>
								<div class="mt10 l m_l">
									<button id="submit" type="submit" class="pointer c_btn_primary ez-f" data-action="Send" data-loading="Loading...">{{(Config::get('app.locale') == 'en'?'Send':'ارسل')}}</button>
								</div>
								@if(session('success'))
									<div class="success">{{session('success')}}</div>
								@endif
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<style> 
.success{
	background-color: rgb(45 135 0 / 70%);
	color: #fff;
	padding: 5px;
	margin: 5px 0;
}

#map { height: 400px; background: #ededed; } .main_tit { font-size: 20px; color: #3e3e3e; line-height: 45px; font-weight: bold; top: 10px; } .main_txt { font-size: 18px; color: #666; top: 10px; } .frm2 { background: transparent; border: none; color: #180c68; width: 100%; } .rinput::placeholder { color: rgba(0,0,0,.3); } .rinput { border: 1px rgba(0,0,0,.2) solid; border-radius: 3px; line-height: 45px; padding: 0px 10px; color: #180c68; font-size: 14px;height: 45px; width: 100%; } .rinput:focus { border-color: rgb(24, 10, 106); } .c_btn_primary { color: #fff; background: #81729C; border: none; font-size: 13px; line-height: 45px; width: 100%; border-radius: 3px; } .contact_icons { font-size: 50px; color: #81729C; } .contact_info { font-size: 19px; color: #3e3e3e; font-weight: bold; } .contact_txt { font-size: 15px; color: rgba(0,0,0,.4); } #submit:hover, #submit:focus { background: rgba(24, 10, 106, 0.7); } .ln { left: -80px; } @media all and (max-width: 768px) { .ln { left: 0; } } </style>
@endsection
