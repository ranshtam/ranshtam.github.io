/**
 * RS Global Header & Footer (RS Dark Lime), 2026-11-27.
 * Prints the new header before the Elementor header location and the new footer + WhatsApp button
 * after the Elementor footer location, and hides the old ones with CSS.
 * The homepage is a canvas page that already carries its own header and footer, so it is skipped.
 * To roll back: deactivate this snippet. Nothing else was changed.
 */
/* WP Rocket "Remove Unused CSS" strips inline <style> blocks and serves CSS it stored earlier; keep ours. */
add_filter( 'rocket_rucss_inline_content_exclusions', function ( $list ) {
	$list   = (array) $list;
	$list[] = '.rs-hd{';
	$list[] = '.rs-ft{';
	$list[] = '.rs-waf{';
	return $list;
} );
function rs_global_chrome_skip() {
	if ( is_admin() || is_front_page() ) {
		return true;
	}
	if ( isset( $_GET['elementor-preview'] ) || isset( $_GET['elementor_library'] ) ) {
		return true;
	}
	return false;
}
add_action( 'elementor/theme/before_do_header', function () {
	if ( rs_global_chrome_skip() ) {
		return;
	}
	echo <<<'RS_HTML_9X'
<div class="rs-hd rs-hd--g" dir="rtl">
  <style>
    .rs-hd{--tal:Talent,"Segoe UI",Arial,sans-serif;position:fixed;top:0;left:0;right:0;z-index:9990;padding:14px 20px 0;pointer-events:none;font-family:var(--tal);transition:transform .5s cubic-bezier(.2,.8,.2,1)}
    .rs-hd *{box-sizing:border-box;margin:0}
    .rs-hd.is-hide{transform:translateY(-130%)}
    body.admin-bar .rs-hd{top:32px}
    @media screen and (max-width:782px){body.admin-bar .rs-hd{top:46px}}
    .rs-hd a.rs-hd__skip{position:absolute;top:-80px;inset-inline-start:20px;padding:10px 16px;border-radius:10px;background:#CAFC01;color:#101400;font-weight:600;font-size:15px;text-decoration:none;pointer-events:auto;z-index:3}
    .rs-hd a.rs-hd__skip:focus{top:14px}
    .rs-hd__bar{position:relative;z-index:2;pointer-events:auto;max-width:1240px;height:64px;margin:0 auto;padding:0 11px 0 11px;padding-inline-start:24px;display:flex;align-items:center;gap:22px;border-radius:999px;background:rgba(16,20,0,.62);border:1px solid rgba(255,255,255,.17);-webkit-backdrop-filter:blur(18px) saturate(1.3);backdrop-filter:blur(18px) saturate(1.3);box-shadow:inset 0 1px 0 rgba(255,255,255,.12),0 10px 30px rgba(0,0,0,.28);transition:max-width .55s cubic-bezier(.2,.8,.2,1),height .4s,background .4s,border-color .4s,box-shadow .4s}
    .rs-hd.is-stuck .rs-hd__bar{max-width:940px;height:56px;background:rgba(16,20,0,.86);border-color:rgba(255,255,255,.16);box-shadow:inset 0 1px 0 rgba(255,255,255,.12),0 16px 40px rgba(0,0,0,.45)}
    .rs-hd p{margin:0!important;padding:0!important;display:contents}
    .rs-hd__bar>*{align-self:center;margin-top:0!important;margin-bottom:0!important}
    .rs-hd a.rs-hd__logo{flex:none;display:block;line-height:0}
    .rs-hd__logo img{display:block;width:auto;height:19px;transition:height .4s}
    .rs-hd.is-stuck .rs-hd__logo img{height:16px}
    .rs-hd__nav{flex:1;display:flex;justify-content:center}
    .rs-hd__nav ul{position:relative;display:flex;align-items:center;gap:2px;list-style:none;padding:0}
    .rs-hd .rs-hd__nav a,.rs-hd .rs-hd__nav a:visited{display:block;padding:10px 15px;border-radius:999px;font-size:15px;font-weight:600;line-height:1.2;color:rgba(255,255,255,.76);text-decoration:none;transition:color .25s,background .25s}
    .rs-hd .rs-hd__nav a:hover,.rs-hd .rs-hd__nav a:focus{color:#fff;background:rgba(255,255,255,.07)}
    .rs-hd .rs-hd__nav a.is-act{color:#CAFC01}
    .rs-hd__ind{position:absolute;bottom:2px;left:0;width:0;height:2px;border-radius:2px;background:#CAFC01;box-shadow:0 0 10px rgba(202,252,1,.7);opacity:0;transition:left .45s cubic-bezier(.2,.8,.2,1),width .45s cubic-bezier(.2,.8,.2,1),opacity .3s;pointer-events:none}
    .rs-hd a.rs-hd__cta,.rs-hd a.rs-hd__cta:hover,.rs-hd a.rs-hd__cta:focus,.rs-hd a.rs-hd__cta:visited{flex:none;display:inline-flex;align-items:center;gap:8px;height:42px;padding:0 20px;border-radius:999px;background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000);color:#101400;font-family:var(--tal);font-weight:600;font-size:15px;text-decoration:none;white-space:nowrap;box-shadow:0 2px 0 #7f9d00,0 8px 18px rgba(202,252,1,.2),inset 0 1px 0 rgba(255,255,255,.6);transition:transform .15s,box-shadow .15s,height .4s;position:relative;top:-1px;line-height:1}
    .rs-hd a.rs-hd__cta:hover{transform:translateY(-1px);box-shadow:0 3px 0 #7f9d00,0 12px 22px rgba(202,252,1,.3),inset 0 1px 0 rgba(255,255,255,.6)}
    .rs-hd a.rs-hd__cta:active{transform:translateY(2px);box-shadow:0 0 0 #7f9d00,0 4px 10px rgba(202,252,1,.2),inset 0 1px 0 rgba(255,255,255,.6)}
    .rs-hd.is-stuck a.rs-hd__cta{height:38px}
    .rs-hd button.rs-hd__brg{display:none;flex:none;position:relative;width:42px;height:42px;padding:0;border-radius:50%;border:1px solid rgba(255,255,255,.2);background:rgba(255,255,255,.06);cursor:pointer;-webkit-appearance:none;appearance:none}
    .rs-hd button.rs-hd__brg:hover,.rs-hd button.rs-hd__brg:focus{background:rgba(255,255,255,.12);border-color:rgba(255,255,255,.3)}
    .rs-hd__brg i{position:absolute;left:12px;right:12px;height:2px;border-radius:2px;background:#fff;transition:transform .35s cubic-bezier(.2,.8,.2,1),top .35s,opacity .2s}
    .rs-hd__brg i:nth-child(1){top:15px}.rs-hd__brg i:nth-child(2){top:20px}.rs-hd__brg i:nth-child(3){top:25px}
    .rs-hd.is-open .rs-hd__brg i:nth-child(1){top:20px;transform:rotate(45deg)}
    .rs-hd.is-open .rs-hd__brg i:nth-child(2){opacity:0}
    .rs-hd.is-open .rs-hd__brg i:nth-child(3){top:20px;transform:rotate(-45deg)}
    .rs-hd__panel{position:fixed;inset:0;z-index:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px;padding:90px 24px 40px;background:rgba(12,15,0,.94);-webkit-backdrop-filter:blur(22px);backdrop-filter:blur(22px);opacity:0;visibility:hidden;pointer-events:none;transition:opacity .35s,visibility .35s}
    .rs-hd.is-open .rs-hd__panel{opacity:1;visibility:visible;pointer-events:auto}
    .rs-hd .rs-hd__panel a.rs-hd__pl,.rs-hd .rs-hd__panel a.rs-hd__pl:visited{display:block;padding:12px 20px;font-family:"Nostela FS",var(--tal);font-weight:900;font-size:28px;line-height:1.2;color:#fff;text-decoration:none;opacity:0;transform:translateY(16px);transition:opacity .4s,transform .4s cubic-bezier(.2,.8,.2,1),color .2s;transition-delay:calc(var(--i)*50ms)}
    .rs-hd.is-open .rs-hd__panel a.rs-hd__pl{opacity:1;transform:none}
    .rs-hd .rs-hd__panel a.rs-hd__pl:hover,.rs-hd .rs-hd__panel a.rs-hd__pl.is-act{color:#CAFC01}
    .rs-hd .rs-hd__panel a.rs-hd__cta{height:52px;padding:0 30px;font-size:17px;margin-top:22px}
    .rs-b__sec,.rs-audit,.rs-leak,.rs-ct{scroll-margin-top:70px}
    @media (max-width:980px){
      .rs-hd{padding:10px 12px 0}
      .rs-hd__bar{height:56px;padding:0 7px;padding-inline-start:18px;gap:10px}
      .rs-hd.is-stuck .rs-hd__bar{height:52px}
      .rs-hd__logo img{height:15px}
      .rs-hd.is-stuck .rs-hd__logo img{height:14px}
      .rs-hd__nav{display:none}
      .rs-hd__sp{flex:1}
      .rs-hd__bar a.rs-hd__cta{height:40px;padding:0 15px;font-size:14px}
      .rs-hd.is-stuck .rs-hd__bar a.rs-hd__cta{height:38px}
      .rs-hd button.rs-hd__brg{display:block}
      .rs-hero .rs-hero__in{padding-top:88px}
    }
    @media (min-width:981px){.rs-hd__sp{display:none}.rs-hd__panel{display:none}}
    @media (prefers-reduced-motion:reduce){.rs-hd,.rs-hd *{transition:none!important}}
    .rs-hd--g .rs-hd__bar{background:rgba(16,20,0,.93)}
    .rs-hd-sp{height:92px;background:#101400}
    #form,#reviews,#packages,#content{scroll-margin-top:96px}
    .elementor-location-header{display:none!important}
    @media (max-width:980px){.rs-hd-sp{height:76px}}
  </style>
  <a class="rs-hd__skip" href="https://ranshtam.com/#content">דלג לתוכן</a>
  <div class="rs-hd__bar">
    <a class="rs-hd__logo" href="https://ranshtam.com/" aria-label="רן שטם, לדף הבית"><img class="skip-lazy no-lazyload" data-no-lazy="1" loading="eager" decoding="async" src="https://ranshtam.com/wp-content/uploads/logo_1-rev1-scaled-e1752612693101-768x101.png" alt="RANSHTAM" width="768" height="101"></a>
    <nav class="rs-hd__nav" aria-label="ניווט ראשי"><ul>
      <li><a href="https://ranshtam.com/#services" data-s="services">שירותים</a></li>
      <li><a href="https://ranshtam.com/#reviews" data-s="reviews">ביקורות</a></li>
      <li><a href="https://ranshtam.com/projects/" data-s="projects">פרויקטים</a></li>
      <li><a href="https://ranshtam.com/#process" data-s="process">תהליך</a></li>
      <li><a href="https://ranshtam.com/#about" data-s="about">קצת עלי</a></li>
      <li class="rs-hd__ind" aria-hidden="true"></li>
    </ul></nav>
    <span class="rs-hd__sp"></span>
    <a class="rs-hd__cta" href="https://ranshtam.com/#contact" data-s="form">לתיאום שיחה</a>
    <button type="button" class="rs-hd__brg" aria-label="תפריט" aria-expanded="false" aria-controls="rs-hd-panel"><i></i><i></i><i></i></button>
  </div>
  <div class="rs-hd__panel" id="rs-hd-panel">
    <a class="rs-hd__pl" style="--i:0" href="https://ranshtam.com/#services" data-s="services">שירותים</a>
    <a class="rs-hd__pl" style="--i:1" href="https://ranshtam.com/#reviews" data-s="reviews">ביקורות</a>
    <a class="rs-hd__pl" style="--i:2" href="https://ranshtam.com/projects/" data-s="projects">פרויקטים</a>
    <a class="rs-hd__pl" style="--i:3" href="https://ranshtam.com/#process" data-s="process">תהליך</a>
    <a class="rs-hd__pl" style="--i:4" href="https://ranshtam.com/#about" data-s="about">קצת עלי</a>
    <a class="rs-hd__cta" href="https://ranshtam.com/#contact" data-s="form">לתיאום שיחה</a>
  </div>
  <script nowprocket data-nowprocket="1">
  (function(){
    var s=document.currentScript, hd=(s?s.closest:0)?s.closest('.rs-hd'):null;
    if(!hd)hd=document.querySelector('.rs-hd');
    if(!hd)return; if(hd.dataset.rsInit)return; hd.dataset.rsInit='1';
    var ids=['services','reviews','projects','process','about'], links=[].slice.call(hd.querySelectorAll('a[data-s]')), navA=[].slice.call(hd.querySelectorAll('.rs-hd__nav a[data-s]')), ind=hd.querySelector('.rs-hd__ind'), brg=hd.querySelector('.rs-hd__brg'), lastY=window.pageYOffset, raf=0, lock=0, act='', gAct=location.pathname.indexOf('/projects')===0?'projects':'';
    function el(id){return document.getElementById(id);}
    function setAct(id){
      if(id===act)return; act=id;
      links.forEach(function(a){a.classList.toggle('is-act',a.getAttribute('data-s')===id);});
      var cur=null; navA.forEach(function(a){if(a.getAttribute('data-s')===id)cur=a;});
      if(cur){ind.style.left=(cur.offsetLeft+15)+'px';ind.style.width=Math.max(0,cur.offsetWidth-30)+'px';ind.style.opacity='1';}else{ind.style.opacity='0';}
    }
    function close(){hd.classList.remove('is-open');brg.setAttribute('aria-expanded','false');document.documentElement.style.overflow='';}
    function tick(){
      raf=0; var y=window.pageYOffset, vh=window.innerHeight, hide=hd.classList.contains('is-hide'), open=hd.classList.contains('is-open'), i, e, r, cur='', lk, pin=false;
      hd.classList.toggle('is-stuck',y>40);
      lk=document.querySelector('.rs-leak'); if(lk){r=lk.getBoundingClientRect();if(r.top<=8){if(r.bottom>=vh-8)pin=true;}}
      if(Date.now()>lock){if(y>lastY+6){if(y>260)hide=true;}else if(y<lastY-6){hide=false;}}else{hide=false;}
      if(y<120)hide=false; if(pin)hide=true; if(open)hide=false;
      hd.classList.toggle('is-hide',hide); lastY=y;
      for(i=0;i<ids.length;i++){e=el(ids[i]);if(e){if(e.getBoundingClientRect().top<=vh*.42)cur=ids[i];}}
      e=el('check'); if(e){if(e.getBoundingClientRect().top<=vh*.42)cur='check';}
      if(!cur)cur=gAct;
      setAct(cur);
    }
    function req(){if(!raf)raf=requestAnimationFrame(tick);}
    window.addEventListener('scroll',req,{passive:true}); window.addEventListener('resize',function(){act='~';req();});
    links.forEach(function(a){a.addEventListener('click',function(ev){
      var t=el(a.getAttribute('data-s')); if(!t)return; ev.preventDefault(); close(); lock=Date.now()+1400;
      var red=window.matchMedia?window.matchMedia('(prefers-reduced-motion: reduce)').matches:false;
      t.scrollIntoView({behavior:red?'auto':'smooth',block:'start'});
    });});
    brg.addEventListener('click',function(){var o=!hd.classList.contains('is-open');hd.classList.toggle('is-open',o);brg.setAttribute('aria-expanded',o?'true':'false');document.documentElement.style.overflow=o?'hidden':'';if(o)hd.classList.remove('is-hide');});
    document.addEventListener('keydown',function(e){if(e.key==='Escape')close();});
    tick();
  })();
  </script>
</div>
<div class="rs-hd-sp" aria-hidden="true"></div>
RS_HTML_9X;
}, 5 );
add_action( 'elementor/theme/after_do_footer', function () {
	if ( rs_global_chrome_skip() ) {
		return;
	}
	echo <<<'RS_HTML_9X'
<footer class="rs-ft" aria-label="תחתית האתר">
  <style>
    .rs-ft{--nos:"Nostela FS",Talent,Arial,sans-serif;--tal:Talent,"Segoe UI",Arial,sans-serif;position:relative;direction:rtl;text-align:right;background:#0b0e02;color:#fff;font-family:var(--tal);padding:72px 0 28px;border-top:1px solid rgba(255,255,255,.1)}
    .rs-ft *{box-sizing:border-box}
    .rs-ft p:empty{display:none}
    .rs-ft__in{max-width:1240px;margin:0 auto;padding:0 24px}
    .rs-ft__top{display:grid;grid-template-columns:minmax(0,1.5fr) repeat(3,minmax(0,1fr));gap:48px}
    .rs-ft__logo{display:block;width:190px;height:auto;margin-bottom:18px}
    .rs-ft .rs-ft__d{font-size:15.5px;line-height:1.7;color:#a9af98;margin:0;max-width:340px}
    .rs-ft a.rs-ft__cta,.rs-ft a.rs-ft__cta:hover,.rs-ft a.rs-ft__cta:visited{display:inline-flex;align-items:center;gap:9px;height:46px;margin-top:22px;padding:0 22px;border-radius:999px;background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000);color:#101400;font-weight:600;font-size:15px;text-decoration:none;box-shadow:0 3px 0 #7f9d00,0 12px 24px rgba(202,252,1,.2),inset 0 1px 0 rgba(255,255,255,.6);transition:transform .15s}
    .rs-ft a.rs-ft__cta:hover{transform:translateY(-2px)}
    .rs-ft .rs-ft__t{font-size:13px;font-weight:600;letter-spacing:.04em;color:#CAFC01;margin:4px 0 16px;padding:0}
    .rs-ft__l{list-style:none;margin:0;padding:0;display:grid;gap:11px}
    .rs-ft .rs-ft__l a,.rs-ft .rs-ft__l a:visited{color:#dfe3d2;text-decoration:none;font-size:15.5px;transition:color .2s}
    .rs-ft .rs-ft__l a:hover{color:#CAFC01}
    .rs-ft .rs-ft__l span{color:#a9af98;font-size:15.5px}
    .rs-ft__bot{display:flex;flex-wrap:wrap;justify-content:space-between;gap:12px 24px;margin-top:56px;padding-top:22px;border-top:1px solid rgba(255,255,255,.1);font-size:13.5px;color:#8d927e}
    .rs-ft__bot nav{display:flex;flex-wrap:wrap;gap:8px 20px}
    .rs-ft .rs-ft__bot a,.rs-ft .rs-ft__bot a:visited{color:#8d927e;text-decoration:none;transition:color .2s}
    .rs-ft .rs-ft__bot a:hover{color:#CAFC01}
    @media (max-width:980px){
      .rs-ft{padding:52px 0 96px}
      .rs-ft__in{padding:0 20px}
      .rs-ft__top{grid-template-columns:repeat(2,minmax(0,1fr));gap:34px 20px}
      .rs-ft__brand{grid-column:1/-1}
      .rs-ft__bot{margin-top:40px;flex-direction:column}
    }
    .elementor-location-footer{display:none!important}
  </style>
  <div class="rs-ft__in">
    <div class="rs-ft__top">
      <div class="rs-ft__brand"><img class="rs-ft__logo" src="https://ranshtam.com/wp-content/uploads/logo_1-rev1-scaled-e1752612693101-768x101.png" alt="RANSHTAM" width="768" height="101" loading="lazy" decoding="async"><p class="rs-ft__d">חנויות אינטרנטיות בווקומרס שנבנות כדי למכור, ושיפור המרות לחנויות קיימות.</p><a class="rs-ft__cta" href="https://ranshtam.com/#contact">לתיאום שיחה</a></div>
      <div><p class="rs-ft__t">ניווט</p><ul class="rs-ft__l"><li><a href="https://ranshtam.com/#services">שירותים</a></li><li><a href="https://ranshtam.com/#reviews">ביקורות</a></li><li><a href="https://ranshtam.com/projects/">פרויקטים</a></li><li><a href="https://ranshtam.com/#process">תהליך העבודה</a></li><li><a href="https://ranshtam.com/#about">קצת עלי</a></li><li><a href="https://ranshtam.com/blog/">מאמרים</a></li></ul></div>
      <div><p class="rs-ft__t">שירותים</p><ul class="rs-ft__l"><li><a href="https://ranshtam.com/woocommerce-store/">חנויות ווקומרס</a></li><li><a href="https://ranshtam.com/#services">שיפור המרות</a></li><li><a href="https://ranshtam.com/#check">בדיקת חנות חינם</a></li><li><a href="https://ranshtam.com/wp-maintenance/">תחזוקת אתר וורדפרס</a></li><li><a href="https://ranshtam.com/wordpress-plugin-development/">פיתוח תוספים לוורדפרס</a></li></ul></div>
      <div><p class="rs-ft__t">יצירת קשר</p><ul class="rs-ft__l"><li><a href="mailto:@@MAIL@@" dir="ltr">@@MAIL@@</a></li><li><a href="tel:0527460037" dir="ltr">052-7460037</a></li><li><a href="https://wa.me/972527460037" target="_blank" rel="noopener">שיחה בוואטסאפ</a></li><li><span>הרצליה</span></li></ul></div>
    </div>
    <div class="rs-ft__bot"><span>© 2026 כל הזכויות שמורות לרן שטם בניית אתרים</span><nav aria-label="קישורים משפטיים"><a href="https://ranshtam.com/privacy-policy/">מדיניות פרטיות</a><a href="https://ranshtam.com/terms/">תקנון האתר</a><a href="https://ranshtam.com/terms/#tr-cancel">ביטול עסקה</a><a href="https://ranshtam.com/accessibility/">הצהרת נגישות</a></nav></div>
  </div>
</footer>
<div class="rs-waf" dir="rtl">
  <style>
    .rs-waf{position:fixed;right:18px;bottom:calc(18px + env(safe-area-inset-bottom,0px));z-index:9980;display:flex;flex-direction:row;align-items:center;gap:10px;font-family:Talent,"Segoe UI",Arial,sans-serif;transition:opacity .3s,transform .3s cubic-bezier(.2,.8,.2,1)}
    .rs-waf *{box-sizing:border-box}
    .rs-waf p{display:contents;margin:0}
    .rs-waf.is-off{opacity:0;transform:translateY(16px) scale(.9);pointer-events:none}
    .rs-waf a.rs-waf__btn,.rs-waf a.rs-waf__btn:hover,.rs-waf a.rs-waf__btn:visited{position:relative;flex:none;display:grid;place-items:center;width:56px;height:56px;border-radius:50%;background:linear-gradient(180deg,#3fe07a,#25d366 55%,#1fb858);color:#fff;text-decoration:none;box-shadow:0 4px 0 #128c3f,0 14px 26px rgba(0,0,0,.45),inset 0 1px 0 rgba(255,255,255,.45);transition:transform .15s,box-shadow .15s;animation:rs-waf-in .6s cubic-bezier(.2,.9,.3,1.4) 1.2s both}
    .rs-waf a.rs-waf__btn:hover{transform:translateY(-2px);box-shadow:0 6px 0 #128c3f,0 18px 30px rgba(0,0,0,.5),inset 0 1px 0 rgba(255,255,255,.45)}
    .rs-waf a.rs-waf__btn:active{transform:translateY(3px);box-shadow:0 1px 0 #128c3f,0 6px 12px rgba(0,0,0,.4),inset 0 1px 0 rgba(255,255,255,.45)}
    .rs-waf__btn svg{width:30px;height:30px}
    .rs-waf__btn::after{content:"";position:absolute;inset:0;border-radius:50%;border:2px solid rgba(37,211,102,.7);opacity:0;animation:rs-waf-ring 3.2s ease-out 2.4s 3}
    @keyframes rs-waf-in{from{opacity:0;transform:scale(.4)}}
    @keyframes rs-waf-ring{0%{opacity:.8;transform:scale(1)}70%,100%{opacity:0;transform:scale(1.7)}}
    .rs-waf__bub{display:flex;align-items:center;gap:6px;padding:9px 8px 9px 14px;border-radius:14px;background:linear-gradient(180deg,#1f2410,#161a0a);border:1px solid rgba(255,255,255,.16);box-shadow:0 14px 30px rgba(0,0,0,.5);opacity:0;transform:translateX(-10px);pointer-events:none;transition:opacity .35s,transform .4s cubic-bezier(.2,.8,.2,1)}
    .rs-waf__bub.is-on{opacity:1;transform:none;pointer-events:auto}
    .rs-waf a.rs-waf__txt,.rs-waf a.rs-waf__txt:hover,.rs-waf a.rs-waf__txt:visited{color:#fff;font-size:14.5px;font-weight:600;text-decoration:none;white-space:nowrap}
    .rs-waf button.rs-waf__x,.rs-waf button.rs-waf__x:hover,.rs-waf button.rs-waf__x:focus{display:grid;place-items:center;width:24px;height:24px;margin:0;padding:0;border:0!important;border-radius:50%!important;background:rgba(255,255,255,.08)!important;color:#c9cdbb!important;font-size:16px;line-height:1;cursor:pointer;box-shadow:none!important}
    @media (max-width:980px){
      .rs-waf{right:14px;bottom:calc(14px + env(safe-area-inset-bottom,0px))}
      .rs-waf a.rs-waf__btn{width:52px;height:52px}
      .rs-waf__btn svg{width:28px;height:28px}
    }
    @media (prefers-reduced-motion:reduce){.rs-waf a.rs-waf__btn,.rs-waf__btn::after{animation:none}}
  </style>
  <a class="rs-waf__btn" href="https://wa.me/972527460037?text=%D7%94%D7%99%D7%99%2C%20%D7%94%D7%92%D7%A2%D7%AA%D7%99%20%D7%93%D7%A8%D7%9A%20%D7%94%D7%90%D7%AA%D7%A8%20%D7%95%D7%90%D7%A9%D7%9E%D7%97%20%D7%9C%D7%A9%D7%9E%D7%95%D7%A2%20%D7%A4%D7%A8%D7%98%D7%99%D7%9D%20%D7%9C%D7%92%D7%91%D7%99" target="_blank" rel="noopener" aria-label="שליחת הודעה בוואטסאפ"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.3-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2c0 1.3.9 2.5 1 2.7.1.2 1.8 2.8 4.4 3.9 1.6.7 2.3.8 3.1.6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2-.1-.1-.2-.2-.5-.3z"/></svg></a><div class="rs-waf__bub"><a class="rs-waf__txt" href="https://wa.me/972527460037?text=%D7%94%D7%99%D7%99%2C%20%D7%94%D7%92%D7%A2%D7%AA%D7%99%20%D7%93%D7%A8%D7%9A%20%D7%94%D7%90%D7%AA%D7%A8%20%D7%95%D7%90%D7%A9%D7%9E%D7%97%20%D7%9C%D7%A9%D7%9E%D7%95%D7%A2%20%D7%A4%D7%A8%D7%98%D7%99%D7%9D%20%D7%9C%D7%92%D7%91%D7%99" target="_blank" rel="noopener">יש שאלה? כתבו לי כאן</a><button type="button" class="rs-waf__x" aria-label="סגירת ההודעה">&times;</button></div><script nowprocket data-nowprocket="1">
  (function(){
    var s=document.currentScript, w=(s?s.closest:0)?s.closest('.rs-waf'):null;
    if(!w){var all=document.querySelectorAll('.rs-waf');w=all[all.length-1];}
    if(!w)return; if(w.dataset.rsInit)return; w.dataset.rsInit='1';
    var bub=w.querySelector('.rs-waf__bub'), x=w.querySelector('.rs-waf__x'), seen=false;
    try{seen=sessionStorage.getItem('rsWafSeen')==='1';}catch(e){}
    function close(){bub.classList.remove('is-on');try{sessionStorage.setItem('rsWafSeen','1');}catch(e){}}
    if(!seen){setTimeout(function(){if(!w.classList.contains('is-off'))bub.classList.add('is-on');setTimeout(close,9000);},6000);}
    x.addEventListener('click',close);
    /* Small screens: step aside while a form is on screen, so the button never covers a field. */
    if('IntersectionObserver' in window){
      var vis=0, small=window.matchMedia('(max-width:980px)');
      var io=new IntersectionObserver(function(en){en.forEach(function(e){vis+=e.isIntersecting?1:-1;});if(vis<0)vis=0;w.classList.toggle('is-off',small.matches?vis>0:false);},{threshold:.15});
      [].forEach.call(document.querySelectorAll('.rs-audit__form,.rs-ct__form,form.elementor-form'),function(el){io.observe(el);});
    }
  })();
  </script>
</div>
RS_HTML_9X;
}, 50 );
