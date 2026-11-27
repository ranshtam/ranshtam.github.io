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
    R + ' .ph-mark{color:#CAFC01!important;background:none!important;box-shadow:none!important}',
    R + ' :is(.ph-h2,.ph-line){color:#fff!important}',
    R + ' .ph-line.ph-3{color:#9aa08a!important}',
    ids(light) + '{background:linear-gradient(180deg,rgba(255,255,255,.07),rgba(255,255,255,.025))!important;border:1px solid rgba(255,255,255,.12)!important;box-shadow:0 22px 50px rgba(0,0,0,.35),inset 0 1px 0 rgba(255,255,255,.1)!important;transition:border-color .3s,transform .3s}',
    ids(light[:4], ':hover') + '{border-color:rgba(202,252,1,.45)!important}',
    R + ' .elementor-element-90debad{background:linear-gradient(180deg,#1b210b,#12160a)!important;border:1px solid rgba(202,252,1,.45)!important;box-shadow:0 30px 70px rgba(0,0,0,.5),0 0 0 4px rgba(202,252,1,.06),inset 0 1px 0 rgba(255,255,255,.12)!important}',
    R + ' .elementor-element-d28cf11 :is(.elementor-heading-title,p,span){color:#101400!important}',
    R + ' .elementor-icon-box-icon .elementor-icon{background:rgba(202,252,1,.12)!important;box-shadow:inset 0 0 0 1px rgba(202,252,1,.4)!important}',
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
]
ti = [l.strip().replace('.rs-b #reviews ', R + ' #reviews ') for l in open('ti-rules.txt', encoding='utf8').read().split('\n') if l.strip()]
css = '\n'.join(rules + ti) + '\n'
open('skin.css', 'w', encoding='utf8').write(css)
print('skin bytes', len(css))
