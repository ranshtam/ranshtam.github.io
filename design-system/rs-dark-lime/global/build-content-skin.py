G = 'body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338)'
C = G + ' :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive)'
L = ['030a0bb', '0981f5a', 'c07af1d', '2a4baa8']
rules = [
    '@font-face{font-family:"Nostela FS";font-weight:500;font-style:normal;font-display:swap;src:url(https://ranshtam.com/wp-content/uploads/fonts/Nostela_Fs-Medium.woff2) format("woff2")}',
    C + ' :is(h1,h2){font-family:"Nostela FS",Talent,sans-serif!important;font-weight:500!important;letter-spacing:0!important}',
    C + ' h1{font-size:clamp(28px,3.200vw,46px)!important;line-height:1.14!important}',
    'body.single-post .elementor-location-single h1{font-size:clamp(24px,2.300vw,34px)!important;line-height:1.22!important}',
    C + ' h2{font-size:clamp(21px,1.900vw,28px)!important;line-height:1.24!important}',
    '@media (max-width:767px){' + C + ' h1{font-size:clamp(24px,7vw,30px)!important}' + 'body.single-post .elementor-location-single h1{font-size:clamp(20px,5.600vw,24px)!important}' + C + ' h2{font-size:clamp(19px,5.400vw,23px)!important}}',
    '/* rs-skin: RS Dark Lime over blog, posts, projects and legal pages */',
    G + '{background:#101400!important}',
    C + '{color:#c9cdbb}',
    C + ' :is(h1,h2,h3,h4,h5,h6,.elementor-heading-title:not(span)){color:#fff!important}',
    C + ' :is(p,li,td,dd,dt,figcaption,.elementor-widget-text-editor){color:#c9cdbb!important}',
    C + ' :is(strong,b,th){color:#fff!important}',
    C + ' p.elementor-heading-title{color:#c9cdbb!important}',
    C + ' .elementor-widget-theme-post-content a:not([class*="button"]):not([class*="btn"]):not([class*="cta"]),' + C + ' .elementor-widget-text-editor a:not([class*="button"]):not([class*="btn"]):not([class*="cta"]){color:#CAFC01!important;text-decoration-color:rgba(202,252,1,.45)!important}',
    C + ' :is(th,thead td){background:rgba(255,255,255,.07)!important;border-color:rgba(255,255,255,.14)!important}',
    C + ' td{background:transparent!important;border-color:rgba(255,255,255,.12)!important}',
    C + ' tr:nth-child(even) td{background:rgba(255,255,255,.03)!important}',
    C + ' table{border-color:rgba(255,255,255,.14)!important}',
    C + ' :is(code,pre,kbd){background:rgba(255,255,255,.08)!important;color:#eaff7a!important;border-color:rgba(255,255,255,.14)!important}',
    C + ' :is(.rs-note,blockquote){background:linear-gradient(180deg,rgba(202,252,1,.09),rgba(202,252,1,.03))!important;border-color:rgba(202,252,1,.4)!important;color:#dfe3d2!important}',
    C + ' :is(.rs-note,blockquote) :is(p,li,span){color:#dfe3d2!important}',
    C + ' [class*="copy-box"]{color:#fff!important;border-color:rgba(255,255,255,.16)!important}',
    C + ' hr{border-color:rgba(255,255,255,.14)!important;background:rgba(255,255,255,.14)!important}',
    C + ' .elementor-widget-divider .elementor-divider-separator{border-color:rgba(255,255,255,.14)!important}',
    ','.join(C + ' .elementor-element-' + i for i in L) + '{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.14)!important}',
    C + ' .elementor-element-32f5c7f3{border-color:rgba(255,255,255,.16)!important}',
    C + ' .elementor-widget-theme-post-content [style*="background"]:not(a){background:rgba(255,255,255,.06)!important}',
    C + ' .elementor-widget-theme-post-content [style*="color"]:not(a){color:inherit!important}',
    C + ' .elementor-widget-button a.elementor-button[class]:not(.rs-x){transition:background .2s,border-color .2s,color .2s}',
    C + ' a.elementor-button[href*="/category/"]{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.26)!important}',
    C + ' a.elementor-button[href*="/category/"] span{color:#fff!important}',
]
css = '\n'.join(rules) + '\n'
open('skin2.css', 'w', encoding='utf8').write(css)
print('skin2 bytes', len(css))
