import re
P = 'body:is(.page-id-25384,.page-id-25949,.page-id-25919)'
R = P + ' [data-elementor-type="wp-page"]'


def ids(l, suf=''):
    return ','.join('%s .elementor-element-%s%s' % (R, i, suf) for i in l)


light = ['3402f10', 'db7b0c8', '32fc803', 'd69d525', '50f9955']
rules = [
    '/* rs-skin: RS Dark Lime over the Elementor service pages */',
    P + '{background:#101400!important}',
    R + '{color:#c9cdbb;background:radial-gradient(900px 520px at 50% 0,rgba(202,252,1,.07),rgba(202,252,1,0) 70%)}',
    R + ' :is(h1,h2,h3,h4,h5,h6,.elementor-heading-title,.elementor-icon-box-title,.elementor-icon-box-title a,.elementor-tab-title,.elementor-toggle-title){color:#fff!important}',
    R + ' :is(p,li,.elementor-icon-list-text,.elementor-icon-box-description,.elementor-widget-text-editor,.elementor-tab-content){color:#c9cdbb!important}',
    R + ' .ph-mark{color:#CAFC01!important;z-index:auto!important}',
    R + ' .ph-mark::before{z-index:0!important;height:4px!important;bottom:-4px!important;border-radius:4px;box-shadow:0 0 14px rgba(202,252,1,.7)}',
    R + ' :is(.ph-h2,.ph-line){color:#fff!important}',
    R + ' .ph-line.ph-3{color:#9aa08a!important}',
    ids(light) + '{background:linear-gradient(180deg,rgba(255,255,255,.07),rgba(255,255,255,.025))!important;border:1px solid rgba(255,255,255,.12)!important;box-shadow:0 22px 50px rgba(0,0,0,.35),inset 0 1px 0 rgba(255,255,255,.1)!important;transition:border-color .3s,transform .3s}',
    ids(light[:4], ':hover') + '{border-color:rgba(202,252,1,.45)!important}',
    R + ' .elementor-element-90debad{background:linear-gradient(180deg,#1b210b,#12160a)!important;border:1px solid rgba(202,252,1,.45)!important;box-shadow:0 30px 70px rgba(0,0,0,.5),0 0 0 4px rgba(202,252,1,.06),inset 0 1px 0 rgba(255,255,255,.12)!important}',
    R + ' .elementor-element-d28cf11 :is(.elementor-heading-title,p,span){color:#101400!important}',
    R + ' .elementor-widget-icon-list{border-color:rgba(255,255,255,.14)!important}',
    R + ' .elementor-icon-list-item:not(:last-child)::after{border-color:rgba(255,255,255,.12)!important}',
    R + ' .elementor-element-ddf114a a.elementor-button{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.26)!important;color:#fff!important}',
    R + ' .elementor-element-ddf114a a.elementor-button :is(span,svg){color:#fff!important;fill:#fff!important}',
    R + ' .elementor-element-ddf114a a.elementor-button:hover{border-color:rgba(202,252,1,.6)!important;background:rgba(255,255,255,.09)!important}',
    R + ' .elementor-element-c1ab087 a.elementor-button{background:transparent!important;border:1px solid rgba(202,252,1,.6)!important;color:#CAFC01!important}',
    R + ' .elementor-element-c1ab087 a.elementor-button :is(span,svg){color:#CAFC01!important;fill:#CAFC01!important}',
    R + ' .elementor-element-c1ab087 a.elementor-button:hover{background:#CAFC01!important}',
    R + ' .elementor-element-c1ab087 a.elementor-button:hover :is(span,svg){color:#101400!important;fill:#101400!important}',
    R + ' .elementor-toggle-item{background:linear-gradient(180deg,rgba(255,255,255,.055),rgba(255,255,255,.02))!important;border-color:rgba(255,255,255,.12)!important;transition:border-color .3s}',
    R + ' .elementor-toggle-item:has(.elementor-tab-title.elementor-active){border-color:rgba(202,252,1,.4)!important}',
    R + ' .elementor-toggle-icon{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.22)!important;color:#fff!important}',
    R + ' .elementor-toggle-icon :is(svg,i){fill:#fff!important;color:#fff!important}',
    R + ' .elementor-tab-title.elementor-active .elementor-toggle-icon{background:#CAFC01!important;border-color:#CAFC01!important}',
    R + ' .elementor-tab-title.elementor-active .elementor-toggle-icon :is(svg,i){fill:#101400!important;color:#101400!important}',
    R + ' .elementor-tab-title a{color:#fff!important}',
    # ---- radar: lime lines on dark, calmer sweep
    R + ' .rs-radar{--rs-radar-line:#CAFC01!important;--rs-radar-size:min(120%,820px)!important;opacity:.5}',
    R + ' .rs-radar svg{stroke:rgba(202,252,1,.16)!important}',
    R + ' .rs-radar__sweep{opacity:.32}',
    R + ' .rs-radar__blip{box-shadow:0 0 10px rgba(202,252,1,.9)!important}',
    # ---- icons: 3D lime tiles like the homepage
    R + ' .elementor-icon-box-icon .elementor-icon{width:60px!important;height:60px!important;padding:0!important;display:grid!important;place-items:center;border-radius:17px!important;background:linear-gradient(180deg,#eaff7a,#CAFC01 55%,#b4e000)!important;box-shadow:0 6px 0 #7f9d00,0 18px 30px rgba(202,252,1,.2),inset 0 1px 0 rgba(255,255,255,.65)!important;transform:rotate(-7deg);transition:transform .45s cubic-bezier(.2,.9,.3,1.5),box-shadow .3s}',
    R + ' .elementor-icon-box-icon .elementor-icon svg{width:26px!important;height:26px!important;fill:#101400!important}',
    R + ' .elementor-icon-box-icon .elementor-icon i{color:#101400!important;font-size:26px!important}',
    R + ' .elementor-icon-box-icon{margin-bottom:22px!important}',
    ids(light[:4]) + '{overflow:hidden;transition:transform .35s cubic-bezier(.2,.8,.2,1),border-color .3s,box-shadow .3s!important}',
    ids(light[:4], ':hover') + '{transform:translateY(-6px);box-shadow:0 30px 60px rgba(0,0,0,.45),0 0 0 4px rgba(202,252,1,.05),inset 0 1px 0 rgba(255,255,255,.12)!important}',
    ids(light[:4], ':hover .elementor-icon-box-icon .elementor-icon') + '{transform:rotate(0deg) translateY(-3px) scale(1.06);box-shadow:0 8px 0 #7f9d00,0 22px 36px rgba(202,252,1,.32),inset 0 1px 0 rgba(255,255,255,.65)!important}',
    # ---- pricing
    ids(['50f9955', '90debad']) + '{border-radius:28px!important;transition:transform .35s cubic-bezier(.2,.8,.2,1),box-shadow .3s,border-color .3s!important}',
    ids(['50f9955'], ':hover') + '{transform:translateY(-6px);border-color:rgba(255,255,255,.26)!important}',
    R + ' .elementor-element-90debad{background:radial-gradient(120% 70% at 50% 0,rgba(202,252,1,.16),rgba(202,252,1,0) 62%),linear-gradient(180deg,#1b210b,#12160a)!important;border:1px solid rgba(202,252,1,.6)!important;box-shadow:0 34px 80px rgba(0,0,0,.55),0 0 60px rgba(202,252,1,.12),0 0 0 5px rgba(202,252,1,.07),inset 0 1px 0 rgba(255,255,255,.16)!important}',
    R + ' .elementor-element-90debad:hover{transform:translateY(-8px);box-shadow:0 40px 90px rgba(0,0,0,.6),0 0 80px rgba(202,252,1,.2),0 0 0 5px rgba(202,252,1,.1),inset 0 1px 0 rgba(255,255,255,.16)!important}',
    R + ' :is(.elementor-element-50f92a8,.elementor-element-0d59b33){align-items:baseline!important}',
    R + ' :is(.elementor-element-50f92a8,.elementor-element-0d59b33) > .elementor-widget:first-child .elementor-heading-title{font-family:"Nostela FS",Talent,sans-serif!important;font-weight:900!important;font-size:clamp(44px,4.4vw,66px)!important;line-height:1!important;letter-spacing:-.01em}',
    R + ' .elementor-element-0d59b33 > .elementor-widget:first-child .elementor-heading-title{color:#CAFC01!important;text-shadow:0 0 34px rgba(202,252,1,.35)}',
    R + ' :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-icon{flex:none;display:grid!important;place-items:center;width:22px!important;height:22px!important;border-radius:7px;background:rgba(202,252,1,.14);box-shadow:inset 0 0 0 1px rgba(202,252,1,.4)}',
    R + ' .elementor-element-90debad .elementor-icon-list-icon{background:linear-gradient(180deg,#eaff7a,#b4e000);box-shadow:0 2px 0 #7f9d00}',
    R + ' :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-icon svg{width:11px!important;height:11px!important;fill:#CAFC01!important}',
    R + ' .elementor-element-90debad .elementor-icon-list-icon svg{fill:#101400!important}',
    R + ' :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-item{padding-block:9px!important;gap:6px}',
    R + ' :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-text{color:#e3e6d8!important}',
    R + ' .elementor-element-90debad a.elementor-button{background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000)!important;box-shadow:0 5px 0 #7f9d00,0 16px 30px rgba(202,252,1,.26),inset 0 1px 0 rgba(255,255,255,.6)!important;transition:transform .15s,box-shadow .15s!important}',
    R + ' .elementor-element-90debad a.elementor-button:hover{transform:translateY(-2px);box-shadow:0 7px 0 #7f9d00,0 20px 36px rgba(202,252,1,.34),inset 0 1px 0 rgba(255,255,255,.6)!important}',
    R + ' .elementor-element-90debad a.elementor-button:active{transform:translateY(4px);box-shadow:0 1px 0 #7f9d00,0 6px 14px rgba(202,252,1,.2)!important}',
    R + ' .elementor-element-d28cf11{box-shadow:0 3px 0 #7f9d00,0 10px 20px rgba(202,252,1,.25)}',
    '@media (prefers-reduced-motion:reduce){' + R + ' .elementor-icon-box-icon .elementor-icon,' + ids(light) + ',' + R + ' .elementor-element-90debad{transition:none!important;transform:none!important}}',
]
ti = [l.strip().replace('.rs-b #reviews ', R + ' #reviews ') for l in open('ti-rules.txt', encoding='utf8').read().split('\n') if l.strip()]
css = '\n'.join(rules + ti) + '\n'
open('skin.css', 'w', encoding='utf8').write(css)
print('skin bytes', len(css))
