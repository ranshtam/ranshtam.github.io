import json,re,sys
BASE=sys.argv[1] if len(sys.argv)>1 else 'https://ranshtam.com/wp-content/uploads/'
cards=json.load(open('../home/projects.json',encoding='utf8'))
CK='<svg viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
def dom(u): return re.sub(r'^https?://(www\.)?','',u).strip('/').split('/')[0].lower()
FEAT=[4,5,20,29,38,39]
order=[c for n in FEAT for c in cards if c['n']==n]
pj=''.join('<a class="rs-pj" href="%s" target="_blank" rel="noopener" data-rv style="--d:%d"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>%s</u></span><img src="%srs-pm-%02d-d.webp" alt="%s" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="%srs-pm-%02d-m.webp" alt="%s" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>%s</b><i>%s</i></span></a>'%(c['url'],i%4,dom(c['url']),BASE,c['n'],'האתר של '+c['name'].replace('"','&quot;')+' במחשב',BASE,c['n'],'האתר של '+c['name'].replace('"','&quot;')+' בטלפון',c['name'],dom(c['url'])) for i,c in enumerate(order))
nst=sum(1 for c in cards if c['store'])
box='<span class="rs-i3 rs-i3--box"><span class="o"><i class="c1"></i><i class="c2"></i><i class="c3"></i><i class="c4"></i><i class="c5"></i><i class="c6"></i></span></span>'
coin='<span class="rs-i3 rs-i3--coin"><span class="o"><i class="m m1"></i><i class="m m2"></i><i class="m m3"></i><i class="cf"></i><i class="cb"></i></span></span>'
def svc(icon,title,p,pts,tags):
    return '<article class="rs-svc"><div class="rs-svc__ic" aria-hidden="true">%s</div><h3>%s</h3><p>%s</p><ul>%s</ul><div class="rs-svc__tags">%s</div></article>'%(icon,title,p,''.join('<li>%s%s</li>'%(CK,t) for t in pts),''.join('<span>%s</span>'%t for t in tags))
steps=[('שיחת היכרות','מבינים מה החנות צריכה, מי הקונים ומה צריך לקרות אחרי שמישהו נכנס לאתר.'),('אפיון ועיצוב','מבנה, תוכן ועיצוב שמותאמים לקהל שלך. מאשרים הכל לפני שנכתבת שורת קוד.'),('פיתוח ובדיקות','בנייה בוורדפרס ובווקומרס, ובדיקות של מהירות, מובייל ותהליך הרכישה כולו.'),('השקה וליווי','עולים לאוויר, ואני נשאר זמין לתחזוקה, עדכונים ושיפורים.')]
html='''<div class="rs-b" dir="rtl">
  <style>
    .rs-b{--nos:"Nostela FS",Talent,Arial,sans-serif;--tal:Talent,"Segoe UI",Arial,sans-serif;background:#101400;color:#fff;font-family:var(--tal)}
    .rs-b *{box-sizing:border-box;margin:0}
    .rs-b__sec{position:relative;padding:110px 0;border-top:1px solid rgba(255,255,255,.08)}
    .rs-b__in{max-width:1320px;margin:0 auto;padding:0 40px}
    .rs-b__head{max-width:760px;margin:0 auto 46px;text-align:center}
    .rs-b .rs-b__k{font-size:14px;font-weight:600;letter-spacing:.04em;color:#CAFC01;margin-bottom:14px}
    .rs-b h2.rs-b__h{font-family:var(--nos);font-weight:900;font-size:clamp(26px,2.9vw,42px);line-height:1.12;color:#fff;margin:0;padding:0}
    .rs-b h2.rs-b__h em{font-style:normal;color:#CAFC01}
    .rs-b p.rs-b__lead{font-size:clamp(16px,1.2vw,18px);line-height:1.65;color:#c9cdbb;margin-top:16px}
    .rs-b [data-rv]{opacity:0;transform:translateY(26px);transition:opacity .8s cubic-bezier(.2,.8,.2,1),transform .8s cubic-bezier(.2,.8,.2,1);transition-delay:calc(var(--d,0)*90ms)}
    .rs-b [data-rv].is-in{opacity:1;transform:none}
    .rs-svcs{display:grid;grid-template-columns:1fr 1fr;gap:22px}
    .rs-svc__more{display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:8px 16px;margin-top:26px;font-size:15.5px;color:#a9af98;text-align:center}
    .rs-b .rs-svc__more a,.rs-b .rs-svc__more a:visited{display:inline-flex;align-items:center;gap:7px;color:#fff;font-weight:600;text-decoration:none;border-bottom:1px solid rgba(202,252,1,.5);padding-bottom:2px;transition:color .2s,border-color .2s}
    .rs-b .rs-svc__more a:hover{color:#CAFC01;border-color:#CAFC01}
    .rs-svc__more svg{width:14px;height:14px;transition:transform .2s}
    .rs-svc__more a:hover svg{transform:translateX(-3px)}
    .rs-svc{position:relative;padding:40px 38px 34px;border-radius:26px;background:linear-gradient(180deg,rgba(255,255,255,.065),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.13);box-shadow:inset 0 1px 0 rgba(255,255,255,.1);overflow:hidden;transition:transform .35s cubic-bezier(.2,.8,.2,1),border-color .35s}
    .rs-svc:hover{transform:translateY(-6px);border-color:rgba(202,252,1,.4)}
    .rs-svc::before{content:"";position:absolute;inset-inline-end:-80px;top:-80px;width:260px;height:260px;border-radius:50%;background:radial-gradient(closest-side,rgba(202,252,1,.16),rgba(202,252,1,0));pointer-events:none}
    .rs-svc__ic{height:74px;margin-bottom:20px}
    .rs-b .rs-svc__ic .rs-i3{font-size:70px}
    .rs-b .rs-svc h3{font-family:var(--nos);font-weight:900;font-size:clamp(20px,1.7vw,25px);line-height:1.2;color:#fff}
    .rs-b .rs-svc p{font-size:16.5px;line-height:1.65;color:#c9cdbb;margin-top:12px}
    .rs-svc ul{list-style:none;padding:0;margin-top:20px;display:flex;flex-direction:column;gap:10px}
    .rs-svc li{display:flex;align-items:flex-start;gap:10px;font-size:15.5px;line-height:1.5;color:#fff}
    .rs-svc li svg{flex:none;width:17px;height:17px;margin-top:3px;color:#CAFC01}
    .rs-svc__tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:24px}
    .rs-svc__tags span{padding:6px 13px;border-radius:999px;border:1px solid rgba(255,255,255,.16);font-size:13px;color:#c9cdbb}
    .rs-rev__w{min-height:260px}
    .rs-b #reviews .ti-widget .ti-review-item .ti-inner{background:linear-gradient(180deg,rgba(255,255,255,.075),rgba(255,255,255,.03))!important;background-color:transparent!important;border:1px solid rgba(255,255,255,.14)!important;border-radius:20px!important;box-shadow:0 18px 40px rgba(0,0,0,.35),inset 0 1px 0 rgba(255,255,255,.1)!important}
    .rs-b #reviews .ti-widget .ti-review-item .ti-inner::before,.rs-b #reviews .ti-widget .ti-review-item .ti-inner::after{display:none!important}
    .rs-b #reviews .ti-widget .ti-name,.rs-b #reviews .ti-widget .ti-review-content,.rs-b #reviews .ti-widget .ti-review-text-container,.rs-b #reviews .ti-widget .ti-review-content *{color:#fff!important;font-family:var(--tal)!important}
    .rs-b #reviews .ti-widget .ti-date,.rs-b #reviews .ti-widget .ti-read-more,.rs-b #reviews .ti-widget .ti-read-more span{color:#a9af98!important;font-family:var(--tal)!important}
    .rs-b #reviews .ti-widget .ti-read-more span:hover{color:#CAFC01!important}
    .rs-b #reviews .ti-widget .ti-controls .ti-next,.rs-b #reviews .ti-widget .ti-controls .ti-prev{filter:invert(1);box-shadow:0 0 0 1px rgba(0,0,0,.25)!important}
    .rs-b #reviews .ti-widget .ti-review-item .ti-profile-img{display:none!important}
    .rs-pjs{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}
    .rs-pjm{display:flex;justify-content:center;margin-top:40px}
    .rs-b a.rs-pjm__b,.rs-b a.rs-pjm__b:hover,.rs-b a.rs-pjm__b:focus,.rs-b a.rs-pjm__b:visited{display:inline-flex;align-items:center;gap:10px;padding:14px 28px;border-radius:999px;border:1px solid rgba(255,255,255,.28);color:#fff;font-family:var(--tal);font-weight:600;font-size:16px;text-decoration:none;transition:background .25s,border-color .25s,transform .2s}
    .rs-b a.rs-pjm__b:hover{background:rgba(255,255,255,.08);border-color:rgba(202,252,1,.6);transform:translateY(-2px)}
    .rs-pjm__b svg{width:16px;height:16px;transition:transform .2s}
    .rs-b a.rs-pjm__b:hover svg{transform:translateX(-4px)}
    .rs-b a.rs-pj,.rs-b a.rs-pj:hover,.rs-b a.rs-pj:focus,.rs-b a.rs-pj:visited{position:relative;display:block;border-radius:18px;overflow:hidden;background:#0b0d04;border:1px solid rgba(255,255,255,.12);color:#fff;text-decoration:none;transition:transform .35s cubic-bezier(.2,.8,.2,1),border-color .35s,box-shadow .35s}
    .rs-b a.rs-pj:hover{transform:translateY(-6px);border-color:rgba(202,252,1,.5);box-shadow:0 24px 50px rgba(0,0,0,.5)}
    .rs-pj__img{position:relative;display:block;aspect-ratio:4/3;overflow:hidden;background:radial-gradient(90% 80% at 70% 20%,rgba(202,252,1,.1),rgba(202,252,1,0) 62%),linear-gradient(180deg,#161b08,#0e1104)}
    .rs-pj__br{position:absolute;top:9%;inset-inline-start:6%;width:86%;display:block;border-radius:8px;overflow:hidden;background:#1a1e0f;border:1px solid rgba(255,255,255,.16);box-shadow:0 18px 34px rgba(0,0,0,.5);transition:transform .6s cubic-bezier(.2,.8,.2,1)}
    .rs-pj__bar{display:flex;align-items:center;gap:4px;height:17px;padding:0 8px;direction:ltr;background:#20250f;border-bottom:1px solid rgba(255,255,255,.08)}
    .rs-pj__bar i{flex:none;width:5px;height:5px;border-radius:50%;background:rgba(255,255,255,.28)}
    .rs-pj__bar u{flex:1;min-width:0;margin-inline-start:6px;padding:0 8px;height:10px;line-height:10px;border-radius:5px;background:rgba(255,255,255,.07);color:rgba(255,255,255,.5);font-size:7px;text-decoration:none;text-align:center;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
    .rs-pj__br img{display:block;width:100%;height:auto;aspect-ratio:16/10;object-fit:cover;object-position:50% 0}
    .rs-pj__ph{position:absolute;bottom:6%;inset-inline-end:5%;width:23%;display:block;padding:3px;border-radius:13px;background:#0a0c03;border:1px solid rgba(255,255,255,.3);box-shadow:0 16px 30px rgba(0,0,0,.6),0 0 0 1px rgba(0,0,0,.6);transition:transform .6s cubic-bezier(.2,.8,.2,1)}
    .rs-pj__ph img{display:block;width:100%;height:auto;aspect-ratio:240/406;object-fit:cover;object-position:50% 0;border-radius:10px}
    .rs-pj:hover .rs-pj__br{transform:translate(4px,-3px)}
    .rs-pj:hover .rs-pj__ph{transform:translate(-5px,-7px)}
    .rs-pj__meta{display:block;padding:14px 16px 16px;border-top:1px solid rgba(255,255,255,.08)}
    .rs-pj__meta b{display:block;font-size:16px;font-weight:600;color:#fff;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
    .rs-pj__meta i{display:block;font-style:normal;font-size:13px;color:#9aa08a;direction:ltr;text-align:right;margin-top:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
    .rs-pj em{position:absolute;top:12px;inset-inline-start:12px;padding:4px 11px;border-radius:999px;background:#CAFC01;color:#101400;font-style:normal;font-weight:600;font-size:12.5px}
    .rs-jr{--p:0;--gap:112px;position:relative;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));column-gap:18px;padding-top:86px;padding-inline-end:150px}
    .rs-jr__fx{position:absolute;inset-inline:0;top:-10px;width:100%;height:80px;pointer-events:none;z-index:1}
    .rs-jr.is-fx .rs-jr__fill{opacity:0}
    .rs-jr__track{position:absolute;inset-inline:0;top:30px;height:2px;margin-top:-1px;border-radius:2px;background:rgba(255,255,255,.14)}
    .rs-jr__fill{position:absolute;inset-inline-start:0;top:-1px;height:4px;width:calc(var(--p)*100%);border-radius:4px;background:linear-gradient(90deg,#eaff7a,#CAFC01);box-shadow:0 0 16px rgba(202,252,1,.75)}
    .rs-jst{position:relative;grid-row:1;align-self:end}
    .rs-jst.is-b{grid-row:1;align-self:stretch}
    .rs-jst::before{content:"";position:absolute;left:50%;bottom:calc(var(--gap)/-2 - 8px);width:16px;height:16px;margin-left:-8px;border-radius:50%;background:#101400;border:2px solid rgba(255,255,255,.32);z-index:2;transition:background .4s,border-color .4s,box-shadow .4s,transform .4s cubic-bezier(.2,.9,.3,1.6)}
    .rs-jst::after{content:"";position:absolute;left:50%;bottom:calc(var(--gap)/-2);width:1px;height:calc(var(--gap)/2);margin-left:-.5px;background:linear-gradient(180deg,rgba(255,255,255,.22),rgba(255,255,255,0));transition:background .4s}
    .rs-jst.is-b::before{bottom:auto;top:calc(var(--gap)/-2 - 8px)}
    .rs-jst.is-b::after{bottom:auto;top:calc(var(--gap)/-2);background:linear-gradient(0deg,rgba(255,255,255,.22),rgba(255,255,255,0))}
    .rs-jst.is-on::before{background:#CAFC01;border-color:#CAFC01;box-shadow:0 0 0 6px rgba(202,252,1,.16),0 0 18px rgba(202,252,1,.8);transform:scale(1.15)}
    .rs-jst.is-on::after{background:linear-gradient(180deg,rgba(202,252,1,.7),rgba(202,252,1,0))}
    .rs-jst.is-b.is-on::after{background:linear-gradient(0deg,rgba(202,252,1,.7),rgba(202,252,1,0))}
    .rs-jst__c{position:relative;height:100%;overflow:hidden;padding:26px 24px 26px;border-radius:22px;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.1);opacity:.5;transform:translateY(10px);transition:opacity .5s,transform .6s cubic-bezier(.2,.8,.2,1),border-color .5s,background .5s,box-shadow .5s}
    .rs-jst.is-b .rs-jst__c{transform:translateY(-10px)}
    .rs-jst.is-on .rs-jst__c{opacity:1;transform:none;background:linear-gradient(180deg,rgba(255,255,255,.07),rgba(255,255,255,.025));border-color:rgba(202,252,1,.38);box-shadow:0 24px 50px rgba(0,0,0,.4),inset 0 1px 0 rgba(255,255,255,.1)}
    .rs-jst__n{position:absolute;top:16px;left:18px;font-family:var(--nos);font-weight:900;font-size:62px;line-height:1;color:transparent;-webkit-text-stroke:1px rgba(255,255,255,.14);direction:ltr;pointer-events:none;transition:color .6s,-webkit-text-stroke-color .6s}
    .rs-jst.is-on .rs-jst__n{color:rgba(202,252,1,.14);-webkit-text-stroke-color:rgba(202,252,1,.55)}
    .rs-jst__i{position:relative;display:block;width:60px;height:60px;margin-bottom:18px}
    .rs-jst__i svg{display:block;width:100%;height:100%;fill:none;stroke:rgba(255,255,255,.6);stroke-width:2;stroke-linecap:round;stroke-linejoin:round;overflow:visible}
    .rs-jst__i .d{stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset .9s cubic-bezier(.5,0,.2,1) var(--dl,0s),fill .5s 1.2s}
    .rs-jst.is-on .rs-jst__i .d{stroke-dashoffset:0}
    .rs-jst__i .a{stroke:#CAFC01}
    .rs-jst.is-on .rs-jst__i .f{fill:rgba(202,252,1,.9)}
    .rs-b .rs-jst h3{position:relative;font-family:var(--nos);font-weight:500;font-size:19px;color:#fff}
    .rs-b .rs-jst p{position:relative;font-size:15.5px;line-height:1.6;color:#c9cdbb;margin-top:10px}
    .rs-jr__end{position:absolute;inset-inline-end:0;top:30px;transform:translateY(-50%);padding:10px 18px;border-radius:999px;border:1px solid rgba(255,255,255,.22);background:#101400;color:rgba(255,255,255,.6);font-weight:600;font-size:15px;white-space:nowrap;z-index:3;transition:background .5s,color .5s,border-color .5s,box-shadow .5s}
    .rs-jr__end.is-on{background:#CAFC01;border-color:#CAFC01;color:#101400;box-shadow:0 0 0 6px rgba(202,252,1,.16),0 0 34px rgba(202,252,1,.6)}
    .rs-about{display:grid;grid-template-columns:minmax(0,.8fr) minmax(0,1.2fr);gap:64px;align-items:center}
    .rs-about__side{max-width:440px;justify-self:center;width:100%}
    .rs-about__img{position:relative;border-radius:26px;overflow:hidden;border:1px solid rgba(255,255,255,.14);aspect-ratio:4/5;width:100%;box-shadow:0 40px 80px rgba(0,0,0,.5)}
    .rs-about__img img{display:block;width:100%;height:100%;object-fit:cover;object-position:50% 50%}
    .rs-about__img::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(16,20,0,0) 60%,rgba(16,20,0,.55))}
    .rs-b .rs-about p{font-size:17px;line-height:1.75;color:#c9cdbb;margin-top:16px}
    .rs-b .rs-about p.rs-b__k{font-size:14px;line-height:1.4;color:#CAFC01;margin-top:0}
    .rs-stats{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));margin-top:34px;border-radius:20px;border:1px solid rgba(255,255,255,.12);background:linear-gradient(180deg,rgba(255,255,255,.05),rgba(255,255,255,.015));box-shadow:inset 0 1px 0 rgba(255,255,255,.08)}
    .rs-stat{padding:26px 20px;text-align:center;border-inline-start:1px solid rgba(255,255,255,.12)}
    .rs-stat:first-child{border-inline-start:0}
    .rs-stat b{display:flex;align-items:baseline;gap:3px;direction:ltr;justify-content:center;font-family:var(--nos);font-weight:900;font-size:clamp(34px,3.6vw,52px);line-height:1;color:#fff;font-variant-numeric:tabular-nums}
    .rs-stat b i{font-style:normal;color:#CAFC01;font-size:.62em}
    .rs-stat small{display:block;margin-top:10px;font-size:14.5px;color:#9aa08a}
    .rs-tools{list-style:none;display:flex;flex-wrap:wrap;justify-content:center;gap:8px;margin:22px 0 0;padding:0}
    .rs-tools li{padding:8px 15px;border-radius:999px;border:1px solid rgba(255,255,255,.14);background:rgba(255,255,255,.04);color:#dfe3d2;font-size:13.5px;font-weight:500;direction:ltr;transition:border-color .25s,color .25s,transform .25s}
    .rs-tools li:hover{border-color:rgba(202,252,1,.55);color:#CAFC01;transform:translateY(-2px)}
    .rs-b .rs-about p.rs-about__hi{font-size:19px;color:#fff;font-weight:600;margin-top:22px}
    @media (max-width:980px){
      .rs-b__sec{padding:64px 0}
      .rs-b__in{padding:0 16px}
      .rs-b__head{margin-bottom:30px}
      .rs-svcs{grid-template-columns:1fr;gap:16px}
      .rs-svc{padding:30px 22px 26px;border-radius:22px}
      .rs-pjs{grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
      .rs-pj__bar{height:12px;padding:0 6px;gap:3px}
      .rs-pj__bar i{width:4px;height:4px}
      .rs-pj__bar u{height:7px;line-height:7px;font-size:5px}
      .rs-pj__br{border-radius:6px}
      .rs-pj__ph{padding:2px;border-radius:9px}
      .rs-pj__ph img{border-radius:7px}
      .rs-pj__meta{padding:10px 12px 12px}
      .rs-pj__meta b{font-size:14.5px}
      .rs-pj__meta i{font-size:12px}
      .rs-pj em{top:8px;inset-inline-start:8px;font-size:11.5px;padding:3px 9px}
      .rs-jr{display:block;padding-top:0;padding-inline-end:0;padding-inline-start:44px;padding-bottom:64px}
      .rs-jr__fx{inset-inline:auto;inset-inline-start:-9px;top:0;width:50px;height:calc(100% - 22px)}
      .rs-jst__c{height:auto}
      .rs-jr__track{inset-inline:auto;inset-inline-start:15px;top:0;bottom:22px;width:2px;height:auto;margin:0}
      .rs-jr__fill{inset-inline-start:-1px;top:0;width:4px;height:calc(var(--p)*100%);background:linear-gradient(180deg,#eaff7a,#CAFC01)}
      .rs-jst,.rs-jst.is-b{margin-bottom:14px}
      .rs-jst::before,.rs-jst.is-b::before{left:auto;inset-inline-start:-36px;top:26px;bottom:auto;margin:0}
      .rs-jst::after,.rs-jst.is-b::after{display:none}
      .rs-jst__c,.rs-jst.is-b .rs-jst__c{padding:20px 18px;transform:translateX(-10px)}
      .rs-jst.is-on .rs-jst__c{transform:none}
      .rs-jst__n{font-size:54px;top:14px;left:16px}
      .rs-jst__i{width:50px;height:50px;margin-bottom:12px}
      .rs-jr__end{top:auto;bottom:0;inset-inline-end:auto;inset-inline-start:0;transform:none}
      .rs-about{grid-template-columns:1fr;gap:28px}
      .rs-about__side{max-width:320px}
      .rs-about__txt{text-align:center}
      .rs-stat{padding:20px 10px}
      .rs-stat b{justify-content:center;font-size:30px}
      .rs-stat small{font-size:12.5px}
      .rs-tools{justify-content:center}
      .rs-tools li{font-size:12.5px;padding:7px 12px}
    }
    @media (prefers-reduced-motion:reduce){.rs-b [data-rv]{opacity:1;transform:none;transition:none}.rs-b .rs-jst__c,.rs-b .rs-jst__i .d,.rs-b .rs-jst::before{transition:none}}
  </style>
  <section class="rs-b__sec" id="services" aria-label="שירותים לחנויות"><div class="rs-b__in">
    <div class="rs-b__head" data-rv><p class="rs-b__k">מה אני עושה</p><h2 class="rs-b__h">שני שירותים, מטרה אחת. <em>חנות שמוכרת.</em></h2></div>
    <div class="rs-svcs">@@svc1@@@@svc2@@</div>
    <div class="rs-svc__more" data-rv><span>צריכים אתר תדמית או דף נחיתה? גם את זה אני בונה.</span><a href="#contact">ספרו לי מה אתם צריכים<svg viewBox="0 0 16 16" aria-hidden="true"><path d="M13 8H3m4-4L3 8l4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
  </div></section>
  <section class="rs-b__sec" id="reviews" aria-label="ביקורות"><div class="rs-b__in">
    <div class="rs-b__head" data-rv><p class="rs-b__k">מה אומרים הלקוחות</p><h2 class="rs-b__h">לא עוד אתר שנראה טוב. <em>אתר שעובד בשבילך.</em></h2></div>
    <div class="rs-rev__w"><script defer async src="https://cdn.trustindex.io/loader.js?b78eacc81a23226b3d36c1aff4a"></script></div>
  </div></section>
  <section class="rs-b__sec" id="projects" aria-label="פרויקטים"><div class="rs-b__in">
    <div class="rs-b__head" data-rv><p class="rs-b__k">פרויקטים</p><h2 class="rs-b__h">חנויות <em>שבניתי.</em></h2></div>
    <div class="rs-pjs">@@pj@@</div>
    <div class="rs-pjm" data-rv><a class="rs-pjm__b" href="https://ranshtam.com/projects/">לכל הפרויקטים<svg viewBox="0 0 16 16" aria-hidden="true"><path d="M13 8H3m4-4L3 8l4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
  </div></section>
  <section class="rs-b__sec" id="process" aria-label="תהליך העבודה"><div class="rs-b__in">
    <div class="rs-b__head" data-rv><p class="rs-b__k">תהליך העבודה</p><h2 class="rs-b__h">מהשיחה הראשונה ועד <em>שהחנות באוויר.</em></h2><p class="rs-b__lead">ארבעה שלבים ברורים, בלי הפתעות בדרך. בכל רגע יודעים בדיוק איפה הפרויקט עומד.</p></div>
    <div class="rs-jr"><div class="rs-jr__track" aria-hidden="true"><span class="rs-jr__fill"></span></div><canvas class="rs-jr__fx" aria-hidden="true"></canvas>@@steps@@<div class="rs-jr__end">החנות באוויר</div></div>
  </div></section>
  <section class="rs-b__sec" id="about" aria-label="קצת עלי"><div class="rs-b__in"><div class="rs-about">
    <div class="rs-about__side" data-rv><div class="rs-about__img"><img src="@@base@@rs-ran-about.webp" alt="רן שטם" width="880" height="1100" loading="lazy" decoding="async"></div><ul class="rs-tools" aria-label="כלים שאני עובד איתם"><li>WooCommerce</li><li>Shopify</li><li>WordPress</li><li>Elementor</li><li>Figma</li><li>Google SEO</li><li>Automation</li><li>Cloud Hosting</li></ul></div>
    <div class="rs-about__txt" data-rv style="--d:1"><p class="rs-b__k">קצת עלי</p><h2 class="rs-b__h">היי, אני <em>רן שטם.</em></h2>
      <p class="rs-about__hi">אבא לשניים, ומפתח אתרים מאז קצת לפני הקורונה.</p>
      <p>התחלתי בקורס שהיה כישלון חרוץ, אבל פיתוח בוורדפרס תפס אותי ולא עזב. מאז אני עוסק בבניית אתרים, והיום אני מתמחה בבניית חנויות אינטרנטיות בווקומרס ובשיפור חנויות קיימות. חוויית קנייה נעימה, ממשק נקי ופתרונות טכנולוגיים שעובדים.</p>
      <p>אני עובד עם עסקים מכל הארץ ומחו״ל, וכל התהליך נעשה מרחוק, בלי קשר למיקום שלכם.</p>
      <p>מה שמניע אותי הוא השילוב בין טכנולוגיה לחיבור אנושי. המטרה היא לעזור לכם לממש את החזון העסקי, בצורה המקצועית והיעילה ביותר.</p>
      <div class="rs-stats"><div class="rs-stat"><b><i>+</i><span data-n="120">120</span></b><small>פרויקטים הושלמו</small></div><div class="rs-stat"><b><i>+</i><span data-n="8">8</span></b><small>שנות ניסיון</small></div></div>
    </div>
  </div></div></section>
  <script nowprocket data-nowprocket="1">
  (function(){
    var s=document.currentScript, root=(s?s.closest:0)?s.closest('.rs-b'):null;
    if(!root){var all=document.querySelectorAll('.rs-b');root=all[all.length-1];}
    if(!root)return; if(root.dataset.rsInit)return; root.dataset.rsInit='1';
    var rv=[].slice.call(root.querySelectorAll('[data-rv]'));
    if('IntersectionObserver' in window){var io=new IntersectionObserver(function(en){en.forEach(function(e){if(e.isIntersecting){e.target.classList.add('is-in');io.unobserve(e.target);}});},{threshold:.12});rv.forEach(function(el){io.observe(el);});}
    else{rv.forEach(function(el){el.classList.add('is-in');});}
    var stb=root.querySelector('.rs-stats');
    if(stb){if('IntersectionObserver' in window){var sio=new IntersectionObserver(function(en){if(!en[0].isIntersecting)return;sio.disconnect();if(window.matchMedia('(prefers-reduced-motion: reduce)').matches)return;[].forEach.call(stb.querySelectorAll('[data-n]'),function(el){var to=parseInt(el.getAttribute('data-n'),10),t0=0;function f(ts){if(!t0)t0=ts;var k=Math.min(1,(ts-t0)/1300);k=1-Math.pow(1-k,3);el.textContent=Math.round(to*k);if(k<1)requestAnimationFrame(f);}el.textContent='0';requestAnimationFrame(f);});},{threshold:.5});sio.observe(stb);}}
    var jr=root.querySelector('.rs-jr'), sts=[].slice.call(root.querySelectorAll('.rs-jst')), trk=root.querySelector('.rs-jr__track'), endp=root.querySelector('.rs-jr__end'), red=window.matchMedia?window.matchMedia('(prefers-reduced-motion: reduce)').matches:false, th=[], jraf=0, cv=root.querySelector('.rs-jr__fx'), cx=null, geo=null, vis=false, fraf=0, last=0, pv=0;
    if(cv){if(cv.getContext){if(!red){cx=cv.getContext('2d');jr.classList.add('is-fx');}}}
    function measure(){
      var t=trk.getBoundingClientRect(), vert=t.height>t.width; th=[];
      sts.forEach(function(el){var r=el.getBoundingClientRect();th.push(vert?(r.top+34-t.top)/Math.max(1,t.height):(t.right-(r.left+r.width/2))/Math.max(1,t.width));});
      if(cx){var c=cv.getBoundingClientRect(),d=Math.min(2,window.devicePixelRatio||1);cv.width=Math.round(c.width*d);cv.height=Math.round(c.height*d);geo={d:d,v:vert,x0:vert?(t.left+t.width/2-c.left):(t.right-c.left),y0:vert?(t.top-c.top):(t.top+t.height/2-c.top),len:vert?t.height:t.width,w:c.width,h:c.height};}
    }
    function jtick(){
      jraf=0; var r=jr.getBoundingClientRect(), vh=window.innerHeight, p=(vh*.8-r.top)/(r.height+vh*.1); p=p<0?0:p>1?1:p; if(red)p=1;
      jr.style.setProperty('--p',p.toFixed(4)); pv=p;
      sts.forEach(function(el,i){el.classList.toggle('is-on',p>=th[i]-.001);});
      endp.classList.toggle('is-on',p>=.985);
    }
    function px(t,o){return geo.v?geo.x0+o:geo.x0-t*geo.len;}
    function py(t,o){return geo.v?geo.y0+t*geo.len:geo.y0+o;}
    function seg(t0,t1,w,col){cx.beginPath();cx.moveTo(px(t0,0),py(t0,0));cx.lineTo(px(t1,0),py(t1,0));cx.lineWidth=w;cx.strokeStyle=col;cx.stroke();}
    function blob(t,r,a){
      var x=px(t,0),y=py(t,0),g=cx.createRadialGradient(x,y,0,x,y,r); g.addColorStop(0,'rgba(240,255,170,'+a.toFixed(3)+')'); g.addColorStop(1,'rgba(202,252,1,0)');
      cx.fillStyle=g; cx.beginPath(); cx.arc(x,y,r,0,6.2832); cx.fill();
    }
    function fx(ts){
      if(!vis){fraf=0;return;} fraf=requestAnimationFrame(fx);
      if(ts-last<30)return; last=ts; if(!geo)return;
      var p=pv,k,u,c,t0,t1,d,br=.85+.15*Math.sin(ts/900),half=70/geo.len;
      cx.setTransform(geo.d,0,0,geo.d,0,0); cx.clearRect(0,0,geo.w,geo.h); if(p<.004)return;
      cx.globalCompositeOperation='lighter'; cx.lineCap='round';
      seg(0,p,12,'rgba(202,252,1,'+(.06*br).toFixed(3)+')'); seg(0,p,6,'rgba(202,252,1,'+(.14*br).toFixed(3)+')'); seg(0,p,2,'rgba(202,252,1,.9)');
      u=(ts/2600)%1; c=u*(p+half*2)-half; t0=Math.max(0,c-half); t1=Math.min(p,c+half);
      if(t1>t0){
        var g=cx.createLinearGradient(px(c-half,0),py(c-half,0),px(c+half,0),py(c+half,0)); g.addColorStop(0,'rgba(240,255,170,0)'); g.addColorStop(.5,'rgba(250,255,210,.95)'); g.addColorStop(1,'rgba(240,255,170,0)');
        cx.beginPath(); cx.moveTo(px(t0,0),py(t0,0)); cx.lineTo(px(t1,0),py(t1,0)); cx.lineWidth=3; cx.strokeStyle=g; cx.stroke();
        if(c>0){if(c<p)blob(c,13,.3);}
      }
      for(k=0;k<th.length;k++){if(p>=th[k]){d=Math.abs(c-th[k])/half; if(d<1)blob(th[k],20,.4*(1-d));}}
      if(p<.985)blob(p,11,.6*br);
      cx.globalCompositeOperation='source-over';
    }
    if(cx){if('IntersectionObserver' in window){new IntersectionObserver(function(en){vis=en[0].isIntersecting;if(vis){if(!fraf)fraf=requestAnimationFrame(fx);}},{rootMargin:'80px'}).observe(jr);}else{vis=true;fraf=requestAnimationFrame(fx);}}
    function jreq(){if(!jraf)jraf=requestAnimationFrame(jtick);}
    measure(); jtick();
    window.addEventListener('scroll',jreq,{passive:true}); window.addEventListener('resize',function(){measure();jreq();}); window.addEventListener('load',function(){measure();jreq();});
    root.__jr={get:function(){return {p:parseFloat(jr.style.getPropertyValue('--p'))||0,on:root.querySelectorAll('.rs-jst.is-on').length,end:endp.classList.contains('is-on'),th:th};}};
    /* Trustindex holds its widget back until the visitor is 300px away. Start it on the first touch or scroll instead, so the reviews are ready on arrival. */
    function tiWarm(){
      try{
        if(typeof TrustindexWidget==='undefined')return false;
        var q=(window.tiElementToWaitForActivity||[]).splice(0).concat((window.tiElementToWaitForVisibility||[]).splice(0));
        if(!q.length)return (window.tiWidgetInstances||[]).length>0;
        q.forEach(function(t){if(typeof t.contentHtml==='string')t.contentHtml=t.contentHtml.replace('data-delay-load="1"','data-delay-load="0" data-lazy-load-disabled="1"');new TrustindexWidget(null,t);});
        return true;
      }catch(e){return true;}
    }
    function tiStart(){var n=0,iv=setInterval(function(){n++;if(tiWarm())clearInterval(iv);else if(n>60)clearInterval(iv);},350);}
    var tiEv=['touchstart','scroll','wheel','mousemove','keydown','click'],tiGo=false;
    function tiFirst(){if(tiGo)return;tiGo=true;tiEv.forEach(function(n){window.removeEventListener(n,tiFirst);});tiStart();}
    tiEv.forEach(function(n){window.addEventListener(n,tiFirst,{passive:true});});
    /* Trustindex: recompute columns once the widget appears (same fix the homepage uses) */
    if('MutationObserver' in window){var done=false,obs=new MutationObserver(function(){if(done)return;if(!document.querySelector('.ti-widget .ti-widget-container'))return;done=true;obs.disconnect();[300,1200,3000].forEach(function(ms){setTimeout(function(){var l=window.tiWidgetInstances||[];for(var i=0;i<l.length;i++){try{l[i].resize(true);}catch(e){}}},ms);});});obs.observe(root,{childList:true,subtree:true});}
  })();
  </script>
</div>
'''
ILL=['<svg viewBox="0 0 64 64" aria-hidden="true"><path class="d" pathLength="1" d="M8 14h30a6 6 0 0 1 6 6v12a6 6 0 0 1-6 6H22l-8 7v-7H8a0 0 0 0 1 0 0V20a6 6 0 0 1 6-6"/><path class="d a" pathLength="1" style="--dl:.35s" d="M50 30h4a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4h-2v6l-7-6H34a4 4 0 0 1-4-4v-1"/><path class="d a" pathLength="1" style="--dl:.6s" d="M17 23h18M17 30h11"/></svg>', '<svg viewBox="0 0 64 64" aria-hidden="true"><rect class="d" pathLength="1" x="8" y="10" width="48" height="44" rx="5"/><path class="d" pathLength="1" style="--dl:.25s" d="M8 21h48"/><path class="d a" pathLength="1" style="--dl:.45s" d="M15 29h16v18H15z"/><path class="d a" pathLength="1" style="--dl:.7s" d="M37 30h13M37 37h13M37 44h8"/></svg>', '<svg viewBox="0 0 64 64" aria-hidden="true"><path class="d" pathLength="1" d="M10 12h10v10H10zM10 28h10v10H10zM10 44h10v10H10z"/><path class="d" pathLength="1" style="--dl:.2s" d="M28 17h26M28 33h26M28 49h18"/><path class="d a" pathLength="1" style="--dl:.5s" d="M12 17l3 3 5-6"/><path class="d a" pathLength="1" style="--dl:.8s" d="M12 33l3 3 5-6"/><path class="d a" pathLength="1" style="--dl:1.1s" d="M12 49l3 3 5-6"/></svg>', '<svg viewBox="0 0 64 64" aria-hidden="true"><path class="d" pathLength="1" d="M10 26v26h44V26"/><path class="d" pathLength="1" style="--dl:.2s" d="M6 26l5-13h42l5 13a6.5 6.5 0 0 1-13 0 6.5 6.5 0 0 1-13 0 6.5 6.5 0 0 1-13 0 6.5 6.5 0 0 1-13 0z"/><path class="d" pathLength="1" style="--dl:.45s" d="M38 52V37h10v15"/><rect class="d a f" pathLength="1" style="--dl:.7s" x="15" y="35" width="17" height="10" rx="2"/></svg>']
rep={'svc1':svc(box,'בניית חנויות אינטרנטיות','בניית חנות אינטרנטית בווקומרס, מלאה עם סליקה, משלוחים וניהול מלאי. חנות שבנויה למכור ולהופיע בגוגל, ולא רק להיראות טוב.',['דפי מוצר שמניעים לרכישה','חנות מותאמת לקידום אורגני בגוגל','אוטומציות לנטישת עגלה, מיילים אוטומטיים וחיבור למערכות דיוור ו-CRM'],['חנות אינטרנטית','ווקומרס','איקומרס']),
'svc2':svc(coin,'שיפור המרות לחנות קיימת','חנות קיימת שלא מוכרת מספיק? שיפור המרות מתחיל בבדיקה של המקומות שבהם גולשים נוטשים. משם אני משפר את מבנה החנות, דפי המוצר ותהליך הרכישה, כדי לקבל יותר הזמנות מאותה תנועה בלי להגדיל תקציב פרסום.',['עלייה בכמות הרכישות ובאחוז ההמרה','הגדלת ערך סל הקנייה הממוצע','תהליך תשלום קצר וברור, שמעורר ביטחון'],['שיפור המרות','CRO','WooCommerce']),
'pj':pj,'base':BASE,'nst':str(nst),'nall':str(len(cards)),'steps':''.join('<div class="rs-jst%s" style="grid-column:%d"><div class="rs-jst__c"><span class="rs-jst__n" aria-hidden="true">0%d</span><span class="rs-jst__i">%s</span><h3>%s</h3><p>%s</p></div></div>'%(' is-b',i+1,i+1,ILL[i],t,d) for i,(t,d) in enumerate(steps))}
for k,v in rep.items(): html=html.replace('@@'+k+'@@',v)
html=html.replace('<article class="rs-svc">','<article class="rs-svc" data-rv>',1).replace('<article class="rs-svc">','<article class="rs-svc" data-rv style="--d:1">',1)
assert '&&' not in html and '@@' not in html
open('rest.html','w',encoding='utf8').write(html); print('rest.html',len(html))
