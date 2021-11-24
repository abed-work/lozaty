@extends('layouts.layout')

@section('body')
    
    <div id="bc">
        <style> 
            #footer {
                display:none; 
            }
            .lp { 
                height: 202px;
                width: 100%;
                top: 50%;
                margin-top: -101px; 
                position:absolute; 
                left:0px; 
                background: scroll no-repeat center center/contain; 
            }
            .l1 {
                background-image: URL('https://www.lozaty.com/s/i/l1.png'); 
                left: -100%; 
                z-index: 7; 
            } 
            .l2 {
                background-image: URL('https://www.lozaty.com/s/i/l2.png'); 
                left: -100%; 
                z-index: 8; 
            } 
            .l3 { 
                background-image: URL('https://www.lozaty.com/s/i/l3.png'); 
                left: -100%; 
                z-index: 9; 
            } 
            .l4 {   
                background-image: URL('https://www.lozaty.com/s/i/l4.png'); 
                left: 100%; 
                z-index: 10;
            } 
            .l5 { 
                background-image: URL('https://www.lozaty.com/s/i/l5.png'); 
                left: 100%; 
                z-index: 8; 
            } 
            .l6 {
                background-image: URL('https://www.lozaty.com/s/i/l6.png');
                left: 100%;
                z-index: 7; 
            } 
            @media all and (max-width:768px){
                .lp {
                    height: 202px;
                    width: 100%; 
                    top: 50%; 
                    margin-top: -101px; 
                    position:absolute; 
                    left:50%; 
                    background: scroll no-repeat center center/contain; 
                    right: auto; 
                    opacity: 0; 
                    transform: translateX(-50%); 
                } 
                .l1 { 
                    background-image: URL('https://www.lozaty.com/s/i/l1_M.png'); 
                } 
                .l2 { 
                    background-image: URL('https://www.lozaty.com/s/i/l2_M.png'); 
                } 
                .l3 { 
                    background-image: URL('https://www.lozaty.com/s/i/l3_M.png'); 
                } 
                .l4 { 
                    background-image: URL('https://www.lozaty.com/s/i/l4_M.png'); 
                } 
                .l5 { 
                    background-image: URL('https://www.lozaty.com/s/i/l5_M.png'); 
                } 
                .l6 { 
                    background-image: URL('https://www.lozaty.com/s/i/l6_M.png'); }
                } 
            </style>
        
        <div id="header" style="background: URL('https://www.lozaty.com/s/i/bg.jpg') scroll repeat center center/cover;">
            <div class="pa w100 flipHoriz" style="left: 0px; top: 0px; max-width: 600px; height: 240px; background: URL('https://www.lozaty.com/s/i/hbgl.png') scroll no-repeat left top/contain;"></div>
            <div class=ov style="background: rgba(255,255,255,0.2);"></div>
            <div style="min-height:100vh;" class=m_ph70>
                <div class="tbl_nm" style="height:100vh;">
                    <div class=row_nm style="height: 124px;">
                    <div class="col_nm c fs0"></div>
                    </div>
                    <div class="row_nm m_h" style="">
                    <div class="col_nm c fs0">
                        <div style="height: 30px;"></div>
                    </div>
                    </div>
                    <div class="row_nm m_h" style="height: 70px;">
                    <div class="col_nm c fs0" style="background: URL('https://www.beacdn.com/apps/WeDxZ5KVJN/config/nNOLzo2vKm/images/c_3gca37864af64.png') scroll no-repeat center center/contain;"></div>
                    </div>
                    <div class="row_nm m_h" style="height: 30px;">
                    <div class="col_nm c fs0"></div>
                    </div>
                    <div class=row_nm>
                    <div class="col_nm c fs0">
                        <div class=m_h style="min-height: 202px;position:static;">
                            <div class="lp des l1"></div>
                            <div class="lp des l2"></div>
                            <div class="lp des l3"></div>
                            <div class="lp des l4"></div>
                            <div class="lp des l5"></div>
                            <div class="lp des l6"></div>
                        </div>
                        <div class="h m_sb" style="position:static;">
                            <div class="lp mob l1"></div>
                            <div class="lp mob l2"></div>
                            <div class="lp mob l3"></div>
                            <div class="lp mob l4"></div>
                            <div class="lp mob l5"></div>
                            <div class="lp mob l6"></div>
                        </div>
                    </div>
                    </div>
                    <div class="row_nm m_h">
                    <div class="col_nm c fs0">
                        <div style="height: 30px;"></div>
                    </div>
                    </div>
                    <div class=row_nm style="height: 100px;">
                    <div class="col_nm c fs0"></div>
                    </div>
                </div>
            </div>
            <div class="ov trans" style="top: auto;"><div class="flexi c m_mt80" style="line-height: 40px; color:#fff; font-family: "Roboto"; font-weight: 400; font-size: 14px;"> &copy; 2021 LOZATY. All Rights Reserved </div>
            <div style="background: #81729C; height: 4px;"></div>
        </div>
        </div>
    </div>
@endsection