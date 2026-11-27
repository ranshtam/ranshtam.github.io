import re,json
H='../hero14/'
mail=open(H+'.mail.txt').read().strip()
ROOT='https://ranshtam.com/'
def absol(s):
    s=s.replace('href="#projects"','href="%sprojects/"'%ROOT)
    return re.sub(r'href="#([a-z]+)"',lambda m:'href="%s#%s"'%(ROOT,m.group(1)),s)
# ---- header
h=open(H+'header.html',encoding='utf8').read()
def rep(s,a,b,n=1):
    assert s.count(a)==n,(a[:60],s.count(a)); return s.replace(a,b)
h=rep(h,'<div class="rs-hd" dir="rtl">','<div class="rs-hd rs-hd--g" dir="rtl">')
h=rep(h,'<a class="rs-hd__skip" href="#services">','<a class="rs-hd__skip" href="#content">')
h=rep(h,'href="#check" data-s="check"','href="%s#contact" data-s="form"'%ROOT,2)
h=absol(h)
h=rep(h,'</style>','''  .rs-hd--g .rs-hd__bar{background:rgba(16,20,0,.93)}
    .rs-hd-sp{height:92px;background:#101400}
    #form,#reviews,#packages,#content{scroll-margin-top:96px}
    .elementor-location-header{display:none!important}
    @media (max-width:980px){.rs-hd-sp{height:76px}}
  </style>''')
h=rep(h,"lastY=window.pageYOffset, raf=0, lock=0, act='';","lastY=window.pageYOffset, raf=0, lock=0, act='', gAct=location.pathname.indexOf('/projects')===0?'projects':'';")
h=rep(h,"      setAct(cur);\n    }","      if(!cur)cur=gAct;\n      setAct(cur);\n    }")
h=h.rstrip()+'\n<div class="rs-hd-sp" aria-hidden="true"></div>\n'
open('g-header.html','w',encoding='utf8').write(h)
# ---- footer + whatsapp
f=open(H+'footer.tpl.html',encoding='utf8').read().replace('@@MAIL@@',mail)
f=absol(f)
f=rep(f,'</style>','  .elementor-location-footer{display:none!important}\n  </style>')
w=open(H+'wa.html',encoding='utf8').read()
open('g-footer.html','w',encoding='utf8').write(f.rstrip()+'\n'+w)
for n in ['g-header.html','g-footer.html']:
    t=open(n,encoding='utf8').read(); assert 'RS_HTML_9X' not in t; print(n,len(t),'local anchors left:',re.findall(r'href="#[a-z]*"',t))
# ---- php snippet
php='''/**
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
@@HEADER@@
RS_HTML_9X;
}, 5 );
add_action( 'elementor/theme/after_do_footer', function () {
	if ( rs_global_chrome_skip() ) {
		return;
	}
	echo <<<'RS_HTML_9X'
@@FOOTER@@
RS_HTML_9X;
}, 50 );
'''.replace('@@HEADER@@',open('g-header.html',encoding='utf8').read().rstrip()).replace('@@FOOTER@@',open('g-footer.html',encoding='utf8').read().rstrip())
open('snippet.php','w',encoding='utf8').write(php); print('snippet',len(php))
