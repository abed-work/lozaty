@extends('layouts.layout')

@section('body')
<div id="header" style="background: URL('/images/bg.jpg') scroll repeat center center/cover; direction: ltr; padding: 100px 0px; padding-top: 141px;">
    <div class="pa w100 flipHoriz" style="left: 0px; top: 0px; max-width: 600px; height: 240px; background: URL('/images/hbgl.png') scroll no-repeat left top/contain;"></div>
    <div class=ov style="background: rgba(255,255,255,0.2);"></div><span class=fh><div class=pageTit><h3>Discover Lozaty</h3></div><nav aria-label="breadcrumb"><ol class="breadcrumb site-breadcumb-1 justify-content-center"><li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li><li class="breadcrumb-item active" aria-current="page">Discover Lozaty</li></ol></nav></span></div>
<div style="background: #81729C; height: 4px;"></div>
<div class=pv50>
    <div class="flexi" style="direction: ltr;">
        <div class="g w80 m_w100 l overviewC">
            <div class=tit>{{__('Lozaty Overview')}}</div>
            <div class="g_nm sep mt10"></div>
            <div class="txt mt20 l">
                <p>
                   <div style="white-space: pre-wrap;font-size:16px;font-family:Calibri;font-weight:bold;color:#0d0d0d">{{$overview[0]->description}}</div>
                </p>
            </div>
        </div>
        <div class="g w80 m_w100 mt30 l compositionC">
            <div class=tit>Composition</div>
            <div class="g_nm sep mt10"></div>
            <div class="txt mt20 l">
                <p style="margin-top: 10pt; margin-bottom: 0pt; margin-left: 0.25in;"><span style="font-size:16px;"><span style="line-height:90%"><span style="unicode-bidi:embed"><span style="word-break:normal"><span style="font-family:Arial"></span></span>
                    <div style="white-space: pre-wrap;font-size:16px;font-family:Calibri;color:#0d0d0d">{{$composition[0]->description}}</div>
                </p>
                <div class="O1" style="margin-top:5.0pt; margin-bottom:0pt; margin-left:.75in; text-align:left">&nbsp;</div>
                <div class="O1" style="margin-top:5.0pt; margin-bottom:0pt; margin-left:.75in; text-align:left">&nbsp;</div>
                <div class="O1" style="margin-top: 5pt; margin-bottom: 0pt; text-align: left;">
                    <table border="0" cellpadding="1" cellspacing="1" style="width:100%;">
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><img alt="" src="https://www.beacdn.com/apps/WeDxZ5KVJN/wOp8mj6QKl/B4MLAaLyXm/images/3gf9913186557(600xa).png" style="width: 200px;" /></td>
                                <td style="text-align: center;"><img alt="" src="https://www.beacdn.com/apps/WeDxZ5KVJN/wOp8mj6QKl/B4MLAaLyXm/images/3g8e8dab8e539(600xa).png" style="width: 140px;" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="g w80 m_w100 mt30 l flavorsC">
            <div class="tit">Discover Lozaty Flavors</div>
            <div class="sep mt20 g_nm"></div>
            <div class="mt20 m_mt10 c">
                <div class=tbl>
                    <div class=row>
                        @foreach ($flavors as $flavor)
                            <div class="col w33 flavorC pointer">
                                <div class="flavors_img m_mt30" data-i="{{asset('storage/images/'.$flavor->main_image)}}" style="background: URL('storage/images/{{$flavor->pop_image}}') no-repeat center center/contain;"></div>
                                <div class=mt10>
                                    <div class=flavors_tit>{{$flavor->title}}</div>
                                    <div class="flavors_txt mt20 fh"></div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="tbl mt40 m_mt10">
                    <div class=row></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection