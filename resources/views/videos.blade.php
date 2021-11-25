@extends('layouts.layout')

@section('body')


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

<div id="header" style="background: URL('images/bg.jpg') scroll repeat center center/cover; direction: ltr; padding: 100px 0px; padding-top: 141px;">
	<div class="pa w100 flipHoriz" style="left: 0px; top: 0px; max-width: 600px; height: 240px; background: URL('/images/hbgl.png') scroll no-repeat left top/contain;"></div>
	<div class=ov style="background: rgba(255,255,255,0.2);"></div><span class=fh><div class=pageTit><h3>Videos</h3></div><nav aria-label="breadcrumb"><ol class="breadcrumb site-breadcumb-1 justify-content-center"><li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li><li class="breadcrumb-item active" aria-current="page">Videos</li></ol></nav></span></div>
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
@endsection