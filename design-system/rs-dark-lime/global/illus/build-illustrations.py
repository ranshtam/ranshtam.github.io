S='stroke="#4a4e3c" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"'
T='stroke="#4a4e3c" stroke-width="1.6" stroke-linecap="round"'
D='stroke="#101400" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"'
L='fill="#CAFC00" stroke="#101400" stroke-width="2"'
BASE='<path d="M40 262H470" stroke="#8b907a" stroke-width="2" stroke-dasharray="2 7" stroke-linecap="round"/>'
def svg(css,body):
    return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 300" fill="none"><style>*{transform-box:fill-box}@media (prefers-reduced-motion:reduce){*{animation:none!important}}'+css+'</style>'+BASE+body+'</svg>'
SP='.sp{animation:sp 1.3s linear infinite}@keyframes sp{0%{transform:translateX(12px);opacity:0}30%{opacity:.6}100%{transform:translateX(-14px);opacity:0}}'
out={}
# ---- maintenance 1: security
out['m-security']=svg(
 '.pu{transform-origin:center;animation:pu 3.2s ease-in-out infinite}@keyframes pu{0%,55%,100%{transform:scale(1)}70%{transform:scale(1.12)}}'
 '.th{animation:th 3.2s ease-in infinite}@keyframes th{0%{transform:translateX(-46px);opacity:0}20%{opacity:1}55%{transform:translateX(0);opacity:1}70%,100%{transform:translateX(-8px);opacity:0}}'
 '.th2{animation-delay:.5s}.rg{transform-origin:center;animation:rg 3.2s ease-out infinite}@keyframes rg{0%,55%{transform:scale(.7);opacity:0}65%{opacity:.7}100%{transform:scale(1.25);opacity:0}}',
 '<path class="rg" d="M255 34l86 32v70c0 62-40 104-86 122-46-18-86-60-86-122V66z" stroke="#CAFC00" stroke-width="3"/>'
 '<path d="M255 50l70 26v60c0 52-33 87-70 102-37-15-70-50-70-102V76z" fill="#fff" %s/>'%S+
 '<path d="M255 72l48 18v46c0 37-23 62-48 74" %s/>'%T+
 '<circle class="pu" cx="255" cy="142" r="30" %s/>'%L+
 '<path d="M242 142l9 9 18-19" %s/>'%D+
 '<g class="th"><path d="M92 112h44M124 102l12 10-12 10" %s/><circle cx="84" cy="112" r="5" fill="#101400"/></g>'%D+
 '<g class="th th2"><path d="M84 176h44M116 166l12 10-12 10" %s/><circle cx="76" cy="176" r="5" fill="#101400"/></g>'%D+
 '<rect x="372" y="150" width="64" height="52" rx="9" fill="#fff" %s/><path d="M386 150v-14a18 18 0 0 1 36 0v14" %s/><circle cx="404" cy="172" r="6" %s/><path d="M404 178v10" %s/>'%(S,S,L,D)+
 '<path d="M372 226h64M384 240h40" %s/>'%T)
# ---- maintenance 2: updates
out['m-updates']=svg(
 '.ro{transform-origin:center;animation:ro 3.6s cubic-bezier(.5,0,.2,1) infinite}@keyframes ro{0%,15%{transform:rotate(0)}70%,100%{transform:rotate(360deg)}}'
 '.pb{transform-origin:left center;animation:pb 3.6s ease-in-out infinite}@keyframes pb{0%,10%{transform:scaleX(.08)}65%,90%{transform:scaleX(1)}100%{transform:scaleX(.08)}}'
 '.c1,.c2,.c3{transform-origin:center;animation:ck 3.6s ease-out infinite}.c1{animation-delay:.5s}.c2{animation-delay:1.1s}.c3{animation-delay:1.7s}@keyframes ck{0%,5%{transform:scale(0)}18%{transform:scale(1.25)}26%,82%{transform:scale(1)}92%,100%{transform:scale(0)}}',
 '<rect x="96" y="52" width="232" height="210" rx="14" fill="#fff" %s/><path d="M96 82h232" %s/><circle cx="114" cy="67" r="3" fill="#8b907a"/><circle cx="126" cy="67" r="3" fill="#8b907a"/><circle cx="138" cy="67" r="3" fill="#8b907a"/>'%(S,S)+
 ''.join('<rect x="116" y="%d" width="26" height="26" rx="6" fill="#ECEEE2" %s/><path d="M154 %dh96M154 %dh62" %s/><circle class="c%d" cx="298" cy="%d" r="10" %s/><path class="c%d" d="M293 %dl4 4 7-8" stroke="#101400" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'%(y,S,y+8,y+19,T,i+1,y+13,L,i+1,y+13) for i,y in enumerate([100,138,176]))+
 '<rect x="116" y="224" width="192" height="14" rx="7" fill="#ECEEE2" %s/><rect class="pb" x="119" y="227" width="186" height="8" rx="4" fill="#CAFC00"/>'%S+
 '<circle cx="402" cy="150" r="50" fill="#fff" %s/>'%S+
 '<g class="ro"><path d="M372 150a30 30 0 0 1 52-20" %s/><path d="M426 114v18h-18" %s/><path d="M432 150a30 30 0 0 1-52 20" %s/><path d="M378 186v-18h18" %s/></g>'%(D,D,D,D)+
 '<circle cx="402" cy="150" r="7" %s/>'%L+
 '<path d="M366 226h72M380 240h44" %s/>'%T)
# ---- maintenance 3: speed
out['m-speed']=svg(SP+
 '.nd{transform-origin:0% 100%;animation:nd 3.6s cubic-bezier(.5,0,.2,1) infinite}@keyframes nd{0%{transform:rotate(-110deg)}45%,72%{transform:rotate(0)}100%{transform:rotate(-110deg)}}'
 '.zp{animation:zp 3.6s ease-in-out infinite}@keyframes zp{0%,30%,60%,100%{opacity:1}45%{opacity:.15}}'
 '.ar{stroke-dasharray:150;animation:ar 3.6s cubic-bezier(.5,0,.2,1) infinite}@keyframes ar{0%{stroke-dashoffset:150}45%,72%{stroke-dashoffset:0}100%{stroke-dashoffset:150}}',
 '<path d="M150 232a110 110 0 0 1 220 0" fill="#fff" %s/><path d="M150 232h220" %s/>'%(S,S)+
 '<path class="ar" d="M312 138a110 110 0 0 1 58 94" stroke="#CAFC00" stroke-width="14" stroke-linecap="round"/>'
 '<path d="M312 138a110 110 0 0 1 58 94" stroke="#101400" stroke-width="1.6" stroke-dasharray="1 9" stroke-linecap="round"/>'
 '<path d="M168 232h12M340 232h12M260 140v12M196 168l9 9M324 168l-9 9M172 196l11 5M348 196l-11 5" %s/>'%T+
 '<path class="nd" d="M260 232l62-54" stroke="#101400" stroke-width="4" stroke-linecap="round"/><circle cx="260" cy="232" r="11" fill="#101400"/><circle cx="260" cy="232" r="4" fill="#CAFC00"/>'
 '<path class="sp" d="M118 120h-52M126 150h-70M116 180h-40" %s/>'%T+
 '<path class="zp" d="M418 92l-14 30h20l-14 30" %s/>'%D+
 '<rect x="392" y="196" width="60" height="36" rx="8" fill="#fff" %s/><path d="M404 214h14" %s/><circle cx="436" cy="214" r="6" %s/>'%(S,T,L))
# ---- maintenance 4: support
out['m-support']=svg(
 '.d1,.d2,.d3{transform-origin:center;animation:dt 1.4s ease-in-out infinite}.d2{animation-delay:.18s}.d3{animation-delay:.36s}@keyframes dt{0%,60%,100%{transform:translateY(0)}30%{transform:translateY(-7px)}}'
 '.b2{transform-origin:100% 100%;animation:b2 4s cubic-bezier(.2,.9,.3,1.2) infinite}@keyframes b2{0%,12%{transform:scale(0);opacity:0}24%,88%{transform:scale(1);opacity:1}100%{transform:scale(0);opacity:0}}'
 '.hd{transform-origin:center;animation:hd 4s ease-in-out infinite}@keyframes hd{0%,100%{transform:rotate(-5deg)}50%{transform:rotate(5deg)}}',
 '<path d="M92 66h170a16 16 0 0 1 16 16v52a16 16 0 0 1-16 16H138l-24 22v-22H92a16 16 0 0 1-16-16V82a16 16 0 0 1 16-16z" fill="#fff" %s/><path d="M100 96h126M100 116h84" %s/>'%(S,T)+
 '<g class="b2"><path d="M246 168h150a16 16 0 0 1 16 16v44a16 16 0 0 1-16 16h-22v20l-24-20H246a16 16 0 0 1-16-16v-44a16 16 0 0 1 16-16z" %s/>'%L+
 '<circle class="d1" cx="292" cy="206" r="6" fill="#101400"/><circle class="d2" cx="320" cy="206" r="6" fill="#101400"/><circle class="d3" cx="348" cy="206" r="6" fill="#101400"/></g>'
 '<g class="hd"><path d="M356 112a34 34 0 0 1 68 0" %s/><rect x="346" y="108" width="16" height="30" rx="7" fill="#fff" %s/><rect x="418" y="108" width="16" height="30" rx="7" fill="#fff" %s/><path d="M426 138c0 12-10 16-24 16" %s/><circle cx="398" cy="154" r="5" %s/></g>'%(S,S,S,S,L)+
 '<circle cx="110" cy="214" r="26" fill="#fff" %s/><path d="M110 200v15l10 7" %s/>'%(S,D)+
 '<path d="M150 204h44M150 222h28" %s/>'%T)
# ---- plugin 1: snippets -> one plugin
out['p-snippets']=svg(
 '.fl{stroke-dasharray:6 8;animation:fl 1.2s linear infinite}@keyframes fl{to{stroke-dashoffset:-28}}'
 '.s1,.s2,.s3{transform-origin:center;animation:sh 3.4s ease-in-out infinite}.s2{animation-delay:.25s}.s3{animation-delay:.5s}@keyframes sh{0%,100%{transform:translate(0,0)}50%{transform:translate(4px,-5px)}}'
 '.tg{transform-origin:center;animation:tg 3.4s ease-in-out infinite}@keyframes tg{0%,35%{transform:translateX(0)}50%,85%{transform:translateX(22px)}100%{transform:translateX(0)}}'
 '.pk{transform-origin:center bottom;animation:pk 3.4s ease-in-out infinite}@keyframes pk{0%,40%,100%{transform:scale(1)}52%{transform:scale(1.04)}}',
 '<g class="s1" transform="rotate(-12 110 110)"><rect x="62" y="74" width="96" height="66" rx="8" fill="#fff" %s/><path d="M76 96l-8 9 8 9M94 96l8 9-8 9M116 100h26M116 114h16" %s/></g>'%(S,T)+
 '<g class="s2" transform="rotate(9 128 170)"><rect x="80" y="136" width="96" height="66" rx="8" fill="#ECEEE2" %s/><path d="M94 158l-8 9 8 9M112 158l8 9-8 9M134 162h26M134 176h16" %s/></g>'%(S,T)+
 '<g class="s3" transform="rotate(-5 104 226)"><rect x="56" y="196" width="96" height="60" rx="8" fill="#fff" %s/><path d="M70 216l-8 9 8 9M88 216l8 9-8 9M110 220h26M110 234h16" %s/></g>'%(S,T)+
 '<path class="fl" d="M196 160h76" %s/><path d="M262 148l14 12-14 12" %s/>'%(D,D)+
 '<g class="pk"><rect x="304" y="70" width="150" height="192" rx="14" fill="#fff" %s/><path d="M304 114h150" %s/>'%(S,S)+
 '<rect x="320" y="84" width="20" height="20" rx="5" %s/><path d="M350 94h60" %s/>'%(L,T)+
 '<path d="M322 140h70M322 158h48" %s/><rect x="408" y="138" width="34" height="18" rx="9" fill="#ECEEE2" %s/><circle class="tg" cx="417" cy="147" r="6" %s/>'%(T,S,L)+
 '<path d="M322 190h70M322 208h48" %s/><rect x="408" y="188" width="34" height="18" rx="9" %s/><circle cx="433" cy="197" r="6" fill="#101400"/>'%(T,L)+
 '<rect x="322" y="228" width="114" height="18" rx="9" fill="#ECEEE2" %s/></g>'%S)
# ---- plugin 2: fits exactly (sliders)
out['p-fit']=svg(
 '.k1{animation:k1 3.8s ease-in-out infinite}@keyframes k1{0%,100%{transform:translateX(0)}45%,70%{transform:translateX(70px)}}'
 '.k2{animation:k2 3.8s ease-in-out infinite}@keyframes k2{0%,100%{transform:translateX(0)}45%,70%{transform:translateX(-56px)}}'
 '.k3{animation:k3 3.8s ease-in-out infinite}@keyframes k3{0%,100%{transform:translateX(0)}45%,70%{transform:translateX(40px)}}'
 '.rn{stroke-dasharray:232;animation:rn 3.8s ease-in-out infinite}@keyframes rn{0%,100%{stroke-dashoffset:60}45%,70%{stroke-dashoffset:0}}'
 '.ok{transform-origin:center;animation:ok 3.8s ease-out infinite}@keyframes ok{0%,40%{transform:scale(0)}52%{transform:scale(1.2)}58%,74%{transform:scale(1)}84%,100%{transform:scale(0)}}',
 '<rect x="70" y="56" width="250" height="206" rx="14" fill="#fff" %s/><path d="M70 90h250" %s/><circle cx="88" cy="73" r="3" fill="#8b907a"/><circle cx="100" cy="73" r="3" fill="#8b907a"/><circle cx="112" cy="73" r="3" fill="#8b907a"/><path d="M230 73h70" %s/>'%(S,S,T)+
 '<path d="M96 118h44" %s/><path d="M96 138h198" stroke="#4a4e3c" stroke-width="5" stroke-linecap="round" opacity=".3"/><circle class="k1" cx="150" cy="138" r="11" %s/>'%(T,L)+
 '<path d="M96 170h60" %s/><path d="M96 190h198" stroke="#4a4e3c" stroke-width="5" stroke-linecap="round" opacity=".3"/><circle class="k2" cx="250" cy="190" r="11" %s/>'%(T,L)+
 '<path d="M96 222h36" %s/><path d="M96 240h198" stroke="#4a4e3c" stroke-width="5" stroke-linecap="round" opacity=".3"/><circle class="k3" cx="170" cy="240" r="11" %s/>'%(T,L)+
 '<circle cx="402" cy="150" r="46" fill="#fff" %s/><circle cx="402" cy="150" r="37" stroke="#4a4e3c" stroke-width="7" opacity=".18"/>'%S+
 '<circle class="rn" cx="402" cy="150" r="37" stroke="#CAFC00" stroke-width="7" stroke-linecap="round" transform="rotate(-90 402 150)"/>'
 '<circle cx="402" cy="150" r="37" stroke="#101400" stroke-width="1.2" opacity=".5"/>'
 '<path class="ok" d="M388 150l10 10 18-20" %s/>'%D+
 '<path d="M366 226h72M380 240h44" %s/>'%T)
# ---- plugin 3: integrations
out['p-connect']=svg(
 '.fl{stroke-dasharray:5 8;animation:fl 1.1s linear infinite}@keyframes fl{to{stroke-dashoffset:-26}}.fr{animation-direction:reverse}'
 '.hb{transform-origin:center;animation:hb 2.6s ease-in-out infinite}@keyframes hb{0%,100%{transform:scale(1)}50%{transform:scale(1.07)}}'
 '.n1,.n2,.n3,.n4{transform-origin:center;animation:nn 2.6s ease-in-out infinite}.n2{animation-delay:.3s}.n3{animation-delay:.6s}.n4{animation-delay:.9s}@keyframes nn{0%,100%{transform:translateY(0)}50%{transform:translateY(-4px)}}',
 '<path class="fl" d="M138 96l76 42" %s/><path class="fl fr" d="M372 96l-76 42" %s/><path class="fl fr" d="M138 222l76-42" %s/><path class="fl" d="M372 222l-76-42" %s/>'%(D,D,D,D)+
 '<g class="hb"><circle cx="255" cy="159" r="52" fill="#fff" %s/><circle cx="255" cy="159" r="36" %s/>'%(S,L)+
 '<path d="M246 140v12M264 140v12M240 152h30v8a15 15 0 0 1-30 0zM255 175v10" %s/></g>'%D+
 '<g class="n1"><rect x="76" y="56" width="68" height="60" rx="12" fill="#fff" %s/><rect x="90" y="74" width="40" height="26" rx="4" %s/><path d="M90 83h40" %s/></g>'%(S,S,T)+
 '<g class="n2"><rect x="366" y="56" width="68" height="60" rx="12" fill="#fff" %s/><path d="M382 74h36v20h-20l-10 8v-8h-6z" %s/><path d="M390 84h20" %s/></g>'%(S,S,T)+
 '<g class="n3"><rect x="76" y="202" width="68" height="60" rx="12" fill="#fff" %s/><path d="M96 216h22l8 8v24H96z" %s/><path d="M102 232h18M102 240h12" %s/></g>'%(S,S,T)+
 '<g class="n4"><rect x="366" y="202" width="68" height="60" rx="12" fill="#fff" %s/><circle cx="400" cy="232" r="14" %s/><path d="M400 224v8l6 5" %s/></g>'%(S,S,T))
# ---- plugin 4: special store logic
out['p-logic']=svg(
 '.fl{stroke-dasharray:5 8;animation:fl 1.1s linear infinite}@keyframes fl{to{stroke-dashoffset:-26}}'
 '.gf{transform-origin:center bottom;animation:gf 3.4s cubic-bezier(.2,.9,.3,1.3) infinite}@keyframes gf{0%,30%{transform:scale(0)}45%,88%{transform:scale(1)}100%{transform:scale(0)}}'
 '.dm{transform-origin:center;animation:dm 3.4s ease-in-out infinite}@keyframes dm{0%,100%{transform:rotate(0)}18%{transform:rotate(90deg)}26%{transform:rotate(90deg)}}'
 '.wh{transform-origin:center;animation:wh 1.6s linear infinite}@keyframes wh{to{transform:rotate(360deg)}}'
 '.it{animation:it 3.4s ease-in-out infinite}@keyframes it{0%,100%{transform:translateY(0)}50%{transform:translateY(-4px)}}',
 '<path d="M62 96h28l26 106h112l20-78H104" fill="none" %s/><path d="M110 146h128M116 172h114" %s/>'%(S,T)+
 '<g class="it"><rect x="128" y="96" width="34" height="42" rx="5" fill="#fff" %s/><rect x="170" y="84" width="34" height="54" rx="5" fill="#ECEEE2" %s/></g>'%(S,S)+
 '<circle cx="136" cy="232" r="14" fill="#fff" %s/><path class="wh" d="M136 224v16M128 232h16" %s/><circle cx="212" cy="232" r="14" fill="#fff" %s/><path class="wh" d="M212 224v16M204 232h16" %s/>'%(S,T,S,T)+
 '<path class="fl" d="M268 150h44" %s/>'%D+
 '<g class="dm"><rect x="318" y="126" width="48" height="48" rx="8" transform="rotate(45 342 150)" fill="#fff" %s/></g><path d="M334 150h16M342 142v16" %s/>'%(S,D)+
 '<path class="fl" d="M378 150h20" %s/><path class="fl" d="M342 186v26" %s/>'%(D,D)+
 '<g class="gf"><rect x="404" y="128" width="54" height="48" rx="7" %s/><path d="M404 146h54M431 128v48" stroke="#101400" stroke-width="2"/><path d="M431 128c-6-14-22-10-16 0M431 128c6-14 22-10 16 0" %s/></g>'%(L,D)+
 '<rect x="306" y="216" width="72" height="30" rx="15" fill="#fff" %s/><path d="M322 231h22" %s/><circle cx="360" cy="231" r="6" %s/>'%(S,T,L))
for k,v in out.items():
    open(k+'.svg','w',encoding='utf8').write(v); print(k,len(v))
h='<body style="margin:0;background:#ECEEE2;display:grid;grid-template-columns:repeat(4,1fr);gap:18px;padding:24px">'+''.join('<div style="background:#fff;border-radius:22px;padding:26px;border:1px solid rgba(16,20,0,.08)"><img src="%s.svg" style="width:100%%;display:block"></div>'%k for k in out)+'</body>'
open('view.html','w').write(h)
