<div id=footer>
    <div class="pa w100 flipHoriz" style="bottom: 0px; right: 0px; max-width: 400px; height: 200px; background: URL('https://www.lozaty.com/s/i/fbgr.png') scroll no-repeat right bottom/contain;"></div>
    <div class=ov style="background: rgba(255,255,255,0.2);"></div>
    <div class="flexi l">
    <div class=pv20>
        <div class="tbl" style="direction: ltr;">
            <div class="col l" style="background: URL('https://www.lozaty.com/s/i/logo.png') scroll no-repeat left center/contain; min-width: 200px; height: 45px;"></div>
            <div class="col r"></div>
        </div>
    </div>
    <div class="mt20">
        <div class="tbl" style="direction: ltr;">
            <div class="col l w33 vt m_mt10">
                <div class="footer-titil"> {{__('About Lozaty')}} </div>
                <p>
                <p><span style="language:en-US"><span style="unicode-bidi:embed"><span style="word-break:normal"><span style="punctuation-wrap:hanging"><span style="font-size:16.0pt"><span style="font-family:Calibri"><span style="color:#0d0d0d"><span style="language:en-US"><span style="font-weight:bold">{{__('Lozaty refreshing lozenges are food supplements used for immediate relief of sore throat and/ or nasal congestion associated with respiratory conditions')}}</span></span></span></span></span></span></span></span></span></p>
                </p>
            </div>
            <div class="col colSep20"></div>
            <div class="col w33 l vt m_mt10 fh">
                <div class="footer-titil"> Where To Buy </div>
                <p><a href="https://www.lozaty.com/where-to-buy" class=foa><b>Saudi Arabia</b></a><a href="https://www.lozaty.com/where-to-buy" class=foa><b>Lebanon</b></a><a href="https://www.lozaty.com/where-to-buy" class=foa><b>Jordan</b></a><a href="https://www.lozaty.com/where-to-buy" class=foa><b>Iraq</b></a></p>
            </div>
            <div class="col colSep20"></div>
            <div class="col w33 l vt m_mt10">
                <a href="https://fb.com/LozatyArabia" target="_blank">
                <div class="c hicon dark ml5"><i class="fa fa-facebook"></i></div>
                /LozatyArabia
                </a>
                <br><br>
                <a href="https://www.lozaty.com/?lang=ar" style="font-family: 'ge_ss_twomedium';">
                <div class="c hicon dark ml5" style="border: none; font-size: 16px;"><i class="fa fa-globe"></i></div>
                عربي
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="flexi l mt30">
    <address><br><strong><a href="mailto:lozaty@lozaty.com">lozaty@lozaty.com</a></strong></address>
    </div>
    <div class="flexi c m_mt80" style="line-height: 40px; color:#000; font-family: "Roboto"; font-weight: 400; font-size: 14px;"> &copy; 2021 Lozaty - لوزتي. All Rights Reserved 
</div>
</div>
</div></div>
<div class=ding></div>
<div id=gwf_full_slider style="position:fixed; top:0px; left:0px; background:rgba(146,129,178,0.7); width:100%; height:100%; z-index:9999999; display:none;" onclick="$('#gwf_full_slider').fadeOut(function(){ $('#gwf_full_slider').empty(); });"></div>

<script src="https://www.beacdn.com/s/j/bea.js"> bea.add("/js/index.js", -2); </script>
<script src="https://www.youtube.com/iframe_api" id="iframe-demo"></script>
<script src="{{asset('/js/jquery-jvectormap-2.0.3.min.js')}}" id="iframe-demo"></script>
<script type="text/javascript">
pashi = 0;
flusha();
function looper(mo) {
	$('.l' + mo + '.mob').css({
		'left': '50%',
		'opacity': 0,
		'top': '50%',
		'margin-top': '-101px',
		'width': '20%'
	}).animate({
		'opacity': 1,
		'margin-top': '-101px',
		'width': '90%'
	}, {
		duration: 1550,
		easing: 'easeOut',
		complete: function() {
			$('.l' + mo + '.mob').animate({
				'left': '0%',
				'width': '0%'
			}, {
				duration: 650,
				easing: 'easeOut'
			});
			if(mo == 6) {
				looper(1)
			} else {
				mo++;
				looper(mo)
			}
		}
	})
}
looper(1);
$('.l1.des').animate({
	'left': '0px'
}, {
	duration: 1400
});
$('.l2.des').animate({
	'left': '0px'
}, {
	duration: 1000
});
$('.l3.des').animate({
	'left': '0px'
}, {
	duration: 600
});
$('.l4.des').animate({
	'left': '0px'
}, {
	duration: 600
});
$('.l5.des').animate({
	'left': '0px'
}, {
	duration: 1000
});
$('.l6.des').animate({
	'left': '0px'
}, {
	duration: 1400
});
var intrs = setInterval(function() {
	clearInterval(intrs);
	$('.l1.des').animate({
		'left': '-100%'
	}, {
		duration: 800
	});
	$('.l6.des').animate({
		'left': '100%'
	}, {
		duration: 800
	});
	setTimeout(function() {
		$('.l2.des').animate({
			'left': '-100%'
		}, {
			duration: 1100
		});
		$('.l5.des').animate({
			'left': '100%'
		}, {
			duration: 1100
		});
		setTimeout(function() {
			$('.l3.des').animate({
				'left': '-100%'
			}, {
				duration: 1400
			});
			$('.l4.des').animate({
				'left': '100%'
			}, {
				duration: 1400
			})
		}, 100)
	}, 50);
	setTimeout(function() {
		$('.l1.des').animate({
			'left': '0px'
		}, {
			duration: 1400
		});
		$('.l2.des').animate({
			'left': '0px'
		}, {
			duration: 1100
		});
		$('.l3.des').animate({
			'left': '0px'
		}, {
			duration: 800
		});
		$('.l4.des').animate({
			'left': '0px'
		}, {
			duration: 800
		});
		$('.l5.des').animate({
			'left': '0px'
		}, {
			duration: 1100
		});
		$('.l6.des').animate({
			'left': '0px'
		}, {
			duration: 1400
		})
	}, 1500);
	intrs = setInterval(function() {
		$('.l1.des').animate({
			'left': '-100%'
		}, {
			duration: 800
		});
		$('.l6.des').animate({
			'left': '100%'
		}, {
			duration: 800
		});
		setTimeout(function() {
			$('.l2.des').animate({
				'left': '-100%'
			}, {
				duration: 1100
			});
			$('.l5.des').animate({
				'left': '100%'
			}, {
				duration: 1100
			});
			setTimeout(function() {
				$('.l3.des').animate({
					'left': '-100%'
				}, {
					duration: 1400
				});
				$('.l4.des').animate({
					'left': '100%'
				}, {
					duration: 1400
				})
			}, 100)
		}, 50);
		setTimeout(function() {
			$('.l1.des').animate({
				'left': '0px'
			}, {
				duration: 1400
			});
			$('.l2.des').animate({
				'left': '0px'
			}, {
				duration: 1100
			});
			$('.l3.des').animate({
				'left': '0px'
			}, {
				duration: 800
			});
			$('.l4.des').animate({
				'left': '0px'
			}, {
				duration: 800
			});
			$('.l5.des').animate({
				'left': '0px'
			}, {
				duration: 1100
			});
			$('.l6.des').animate({
				'left': '0px'
			}, {
				duration: 1400
			})
		}, 1500)
	}, 6000)
}, 3000);
viewsec('home', 'home', '', ''); </script>
<script> 
    $(document).ready(function() {
        $(window).scroll(function() {
            var x = getScrollXY();
            if(x >= $('#header').outerHeight() - 89) $('.head').addClass('active');
            else $('.head').removeClass('active');
        });
        $('#discover_b_m').on('click touch', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if($('.kilos:first').hasClass('fh')) {
                $('.kilos').removeClass('fh');
                $('.milos').addClass('fh');
            } else {
                $('.kilos').addClass('fh');
                $('.milos').removeClass('fh');
            }
        });
        $(document).on('click touch', function(e) {
            if($(e.target).closest('.kilos').length == 0) {
                if(!$('.kilos:first').hasClass('fh')) {
                    e.preventDefault();
                    e.stopPropagation();
                    $('.kilos').addClass('fh');
                    $('.milos').removeClass('fh');
                }
            }
        });
    });
</script>
<script type="text/javascript">
	pashi = 1;
	flusha();
	$('.flavorC').on('click touch', function() {});
	$('.flavorC').on('click touch', function() {
		var i = $(this).find('.flavors_img:first').attr('data-i');
		var vForm = '<div style="position:absolute;top: 15%;left: 15%;right: 15%;bottom: 15%;background: URL(\'' + i + '\') scroll no-repeat center center/contain;"></div>';
		$('#gwf_full_slider').empty().html(vForm).fadeIn()
	});
	viewsec('discover', 'discover', 'discover', 'discover');
	</script>
	
	<script type="text/javascript">
		pashi = 1;
		flusha();
		$('.vBox').on('click touch', function() {
			var id = $(this).attr('vid');
			var vForm = '<div style=\"position:absolute;top: 15%;left: 15%;right: 15%;bottom: 15%;background:#000;\"><iframe allowfullscreen=""frameborder="0"height="100%"src="//www.youtube.com/embed/' + id + '?autoplay=1&amp;modestbranding=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;color=blue&amp;vq=hd720&amp;enablejsapi=1"class="preservear"style="width: 100%;height: 100%;position:absolute;left:0px;right:0px;top:0px;bottom:0px;"></iframe></div>';
			$('#gwf_full_slider').empty().html(vForm.split("[VID]").join(id)).fadeIn()
		});
		viewsec('videos', 'videos', 'videos', 'videos');
	</script>


<div id="exe" style="display:none;" ></div>
