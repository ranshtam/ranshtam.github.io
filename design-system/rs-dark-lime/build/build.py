import re,sys
BASE=sys.argv[1] if len(sys.argv)>1 else 'https://ranshtam.com/wp-content/uploads/'
s=open('../hero7/rs-hero-v12-wp.html',encoding='utf8').read()
def sub1(pat,rep,s,flags=re.S):
    s2,c=re.subn(pat,lambda m:rep,s,count=1,flags=flags); assert c==1,pat; return s2
# tag
tag='למקסם את המכירות מהאתר שלך, 24/7'
s=sub1(r'<p class="rs-hero__tag" aria-label="[^"]*">','<p class="rs-hero__tag" aria-label="%s">'%tag,s)
s=sub1(r'<span class="rs-tag__slot" aria-hidden="true">.*?</span></span>','<span class="rs-tag__slot" aria-hidden="true"><span>למקסם את המכירות מהאתר שלך</span></span><span class="rs-247" aria-hidden="true">24/7</span>',s)
# h1
i=[0]
def line(words):
    out=[]
    for w in words:
        ls=''.join('<span class="rs-l" style="--i:%d">%s</span>'%(i[0]+k,ch) for k,ch in enumerate(w)); i[0]+=len(w); out.append('<span class="rs-w">%s</span>'%ls)
    return ' '.join(out)
h1='<h1 class="rs-h1" aria-label="חנויות אינטרנטיות שמוכרות ולא רק נראות טוב."><span class="l1" aria-hidden="true">%s</span> <span class="l2" aria-hidden="true">%s</span></h1>'%(line(['חנויות','אינטרנטיות','שמוכרות']),line(['ולא','רק','נראות','טוב.']))
s=sub1(r'<h1 class="rs-h1".*?</h1>',h1,s)
# stage
B,D,G=' is-b','',' is-g'
rows=[['14','01','15','13'],['02','18','03','09'],['10','19','06','16'],['20','17','05','08']]
n=[0]
def tile(k):
    n[0]+=1
    return '<div class="rs-tile" style="--n:%d"><img src="%srs-w480-%s.webp" alt="" width="480" height="270" decoding="async"></div>'%(n[0],BASE,k)
th=''.join('<div class="rs-wall__r">'+''.join(tile(k) for k in r)+'</div>' for r in rows)
stage='<div class="rs-hero__stage"><div class="rs-hero__glow"></div><div class="rs-wall" aria-hidden="true">'+th+'</div><img class="rs-hero__me skip-lazy no-lazyload" data-no-lazy="1" data-skip-lazy="1" loading="eager" src="'+BASE+'rs-ran-hero2-860.webp" srcset="'+BASE+'rs-ran-hero2-520.webp 520w, '+BASE+'rs-ran-hero2-860.webp 860w" sizes="(max-width:900px) 250px, 420px" alt="רן שטם, בונה חנויות אינטרנטיות" width="860" height="1438" fetchpriority="high"></div>'
s=sub1(r'<div class="rs-hero__stage">.*?</canvas>\s*</div>',stage,s)
# css: drop ring rules, add overrides
s=re.sub(r'\n\s*\.rs-ring[^\n]*','',s)
css='''
    .rs-hero__in{grid-template-columns:minmax(0,1.72fr) minmax(0,1fr);gap:0}
    .rs-hero h1{font-size:clamp(28px,3.2vw,46px)}
    .rs-hero h1 .l1{white-space:nowrap}
    .rs-hero__sub{max-width:520px}
    .rs-tag__slot span{white-space:nowrap}
    .rs-hero__sub .rs-em,.rs-hero__sub .rs-x{color:#fff;font-weight:600}
    .rs-hero__sub .rs-fix{color:#CAFC01;font-weight:600}
    .rs-hero .rs-hero__tag{padding:0 7px 0 15px;gap:12px}
    .rs-247{position:relative;direction:ltr;padding-right:13px;margin-inline-start:1px;color:#CAFC01;font-family:var(--tal);font-weight:600;font-size:13.5px;letter-spacing:.06em;font-variant-numeric:tabular-nums}
    .rs-247::after{content:"";position:absolute;right:0;top:50%;width:1px;height:14px;margin-top:-7px;background:rgba(255,255,255,.22)}
    .rs-hero__stage{cursor:default;-webkit-user-select:auto;user-select:auto}
    .rs-hero__glow{position:absolute;left:46%;top:50%;width:1040px;height:900px;z-index:0;pointer-events:none;transform:translate(-50%,-52%);translate:calc(var(--mx)*8px) calc(var(--my)*5px);background:radial-gradient(closest-side,rgba(202,252,1,.32) 0,rgba(202,252,1,.17) 34%,rgba(202,252,1,.05) 64%,rgba(202,252,1,0) 100%);filter:blur(36px);animation:rs-fade 1.8s .1s backwards}
    .rs-hero__me{left:auto;right:-3%;transform:none;filter:none;animation-name:rs-rise2}
    @keyframes rs-rise2{from{opacity:0;transform:translateY(48px)}}
    .rs-wall{--tw:240px;--th:135px;--tg:24px;position:absolute;top:-34px;right:-406px;width:calc(var(--tw)*4.55 + var(--tg)*3);z-index:1;direction:ltr;display:flex;flex-direction:column;gap:var(--tg);translate:calc(var(--mx)*10px) calc(var(--my)*6px - 26px*var(--p,0));-webkit-mask-image:linear-gradient(to right,transparent 0,#000 9%,#000 56%,rgba(0,0,0,.42) 68%,rgba(0,0,0,.12) 80%,transparent 93%),linear-gradient(to bottom,transparent 0,#000 15%,#000 84%,transparent 100%);-webkit-mask-composite:source-in;mask-image:linear-gradient(to right,transparent 0,#000 9%,#000 56%,rgba(0,0,0,.42) 68%,rgba(0,0,0,.12) 80%,transparent 93%),linear-gradient(to bottom,transparent 0,#000 15%,#000 84%,transparent 100%);mask-composite:intersect}
    .rs-wall__r{display:flex;gap:var(--tg)}
    .rs-wall__r:nth-child(even){margin-left:calc(var(--tw)*.55)}
    .rs-tile{position:relative;flex:none;width:var(--tw);height:var(--th);border-radius:14px;overflow:hidden;background:#1c2208;border:1px solid rgba(255,255,255,.1);cursor:pointer;animation:rs-tile-in 1s calc(.25s + var(--n)*.05s) cubic-bezier(.16,.84,.3,1) backwards;transition:transform .5s cubic-bezier(.2,.8,.2,1),border-color .4s,box-shadow .4s}
    .rs-tile img{display:block;width:100%;height:100%;object-fit:cover;object-position:50% 0;filter:brightness(.6) saturate(.9);transition:filter .45s}
    .rs-wall.has-on .rs-tile img{filter:brightness(.4) saturate(.8)}
    .rs-wall .rs-tile.is-on{z-index:3;transform:translateY(-5px) scale(1.1);border-color:rgba(255,255,255,.55);box-shadow:0 26px 60px rgba(0,0,0,.6),0 0 0 1px rgba(202,252,1,.35)}
    .rs-wall .rs-tile.is-on img{filter:none}
    @keyframes rs-tile-in{from{opacity:0;transform:translateY(34px) scale(.9)}}
    @media (prefers-reduced-motion:reduce){.rs-hero .rs-tile{animation:none!important}}
    @media (max-width:980px){
      .rs-hero__in{grid-template-columns:1fr;gap:4px}
      .rs-hero h1{font-size:clamp(26px,7.9vw,38px)}
      .rs-hero h1 .l1{white-space:normal}
      .rs-hero__glow{left:50%;width:560px;height:560px;filter:blur(26px)}
      .rs-hero__me{left:50%;right:auto;transform:translateX(-46%);animation-name:rs-rise}
      .rs-wall{--tw:150px;--th:84px;--tg:14px;top:26px;right:auto;left:50%;margin-left:calc((var(--tw)*4.55 + var(--tg)*3)/-2);-webkit-mask-image:linear-gradient(to right,transparent 22%,#000 30%,#000 70%,transparent 78%),linear-gradient(to bottom,transparent 0,#000 12%,#000 80%,transparent 100%);mask-image:linear-gradient(to right,transparent 22%,#000 30%,#000 70%,transparent 78%),linear-gradient(to bottom,transparent 0,#000 12%,#000 80%,transparent 100%)}
      .rs-tile{border-radius:9px}
    }
  </style>'''
s=sub1(r'\n\s*</style>',css,s)
s=re.sub(r'\n\s*\.rs-hero__disc\{[^\n]*','',s)
js='''<script nowprocket data-nowprocket="1">
  (function(){
    var s=document.currentScript, hero=(s?s.closest:0)?s.closest('.rs-hero'):null;
    if(!hero){var all=document.querySelectorAll('.rs-hero');hero=all[all.length-1];}
    if(!hero||hero.dataset.rsInit)return; hero.dataset.rsInit='1';
    var mm=window.matchMedia?function(q){return window.matchMedia(q).matches;}:function(){return false;};
    var reduce=mm('(prefers-reduced-motion: reduce)'), fine=reduce?false:mm('(hover:hover) and (pointer:fine)');
    var lastP=-1,tx=0,ty=0,mx=0,my=0,raf=0;
    function progress(){var b=hero.getBoundingClientRect();var p=Math.min(Math.max(-b.top/(b.height||1),0),1);if(Math.abs(p-lastP)>.002){lastP=p;hero.style.setProperty('--p',p.toFixed(3));}}
    function tick(){raf=0;mx+=(tx-mx)*.07;my+=(ty-my)*.07;hero.style.setProperty('--mx',mx.toFixed(3));hero.style.setProperty('--my',my.toFixed(3));if(Math.abs(tx-mx)+Math.abs(ty-my)>.003)raf=requestAnimationFrame(tick);}
    if(fine)hero.addEventListener('pointermove',function(e){var b=hero.getBoundingClientRect();tx=(e.clientX-b.left)/b.width*2-1;ty=(e.clientY-b.top)/b.height*2-1;if(!raf)raf=requestAnimationFrame(tick);});
    if(!reduce)window.addEventListener('scroll',progress,{passive:true});
    var wall=hero.querySelector('.rs-wall'), tiles=[].slice.call(hero.querySelectorAll('.rs-tile')), cur=null;
    function off(){if(!cur)return;cur.classList.remove('is-on');cur=null;wall.classList.remove('has-on');}
    function on(t){if(cur===t)return;off();cur=t;t.classList.add('is-on');wall.classList.add('has-on');}
    tiles.forEach(function(t){
      if(fine){t.addEventListener('pointerenter',function(){on(t);});t.addEventListener('pointerleave',function(){off();});}
      else{t.addEventListener('click',function(e){e.stopPropagation();if(cur===t){off();}else{on(t);}});}
    });
    if(!fine)document.addEventListener('click',function(){off();});
  })();
  </script>'''
s=sub1(r'<script nowprocket.*?</script>',js,s)
SUBP=[('אני בונה חנויות',''),('שקל לקנות בהן.','rs-em'),('ואם כבר יש לך חנות, אני מוצא איפה היא',''),('מפסידה מכירות','rs-x'),('ומתקן.','rs-fix')]
_i=[0]
def _grp(txt,cls):
    ws=[]
    for w in txt.split():
        ws.append('<span class="rs-wd" style="--i:%d">%s</span>'%(_i[0],w)); _i[0]+=1
    h=' '.join(ws)
    return ('<span class="%s">%s</span>'%(cls,h)) if cls else h
s=sub1(r'<p class="rs-hero__sub">.*?</p>','<p class="rs-hero__sub">'+' '.join(_grp(t,c) for t,c in SUBP)+'</p>',s)
s=sub1(r'\s*<p class="rs-hero__note">.*?</p>','',s)
s=open('header.html',encoding='utf8').read().rstrip()+'\n'+s.lstrip()
s=s.rstrip()+'\n'+open('leak.html',encoding='utf8').read()
s=s.rstrip()+'\n'+open('audit.html',encoding='utf8').read()
import subprocess as _sp
_sp.run(['python3','rest.py',BASE],check=True)
s=s.rstrip()+'\n'+open('rest.html',encoding='utf8').read()
s=s.rstrip()+'\n'+open('faq.html',encoding='utf8').read()
s=s.rstrip()+'\n'+open('contact.html',encoding='utf8').read()
s=s.rstrip()+'\n'+open('footer.tpl.html',encoding='utf8').read().replace('@@MAIL@@',open('.mail.txt').read().strip())
s=s.replace('href="#check" data-s="check"','href="#contact" data-s="contact"')
s=s.replace('href="https://ranshtam.com/#contact"','href="#contact"')
def _collapse(h):
    parts=re.split(r'(<style.*?</style>|<script.*?</script>)',h,flags=re.S)
    for i in range(0,len(parts),2): parts[i]=re.sub(r'>\s*\n\s*<','><',parts[i])
    return ''.join(parts)
s=_collapse(s)
s=re.sub(r'\n\s*\n+','\n',s)
assert '&&' not in s[s.index('<script'):]
open('rs-hero-v14-wp.html','w',encoding='utf8').write(s)
w=open('../hero7/wp-local.html',encoding='utf8').read(); head=w[:w.index('<section class="rs-hero"')]
open('wp-local.html','w',encoding='utf8').write(head+s+'</body></html>')
print('ok',len(s),'ring left:',s.count('rs-ring'),'disc:',s.count('rs-hero__disc'))
