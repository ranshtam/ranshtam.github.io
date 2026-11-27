import re
P = 'body:is(.page-id-25384,.page-id-25949,.page-id-25919)'
R = P + ' [data-elementor-type="wp-page"]'


def ids(l, suf=''):
    return ','.join('%s .elementor-element-%s%s' % (R, i, suf) for i in l)


light = ['3402f10', 'db7b0c8', '32fc803', 'd69d525', '50f9955']
rules = [
    '@font-face{font-family:"Nostela FS";font-weight:500;font-style:normal;font-display:swap;src:url(https://ranshtam.com/wp-content/uploads/fonts/Nostela_Fs-Medium.woff2) format("woff2")}',
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
    # ---- hero: floating 3D lime tiles replace the radar (the four blips become the tiles)
    R + ' .rs-radar{inset:0!important;width:auto!important;height:auto!important;translate:none!important;aspect-ratio:auto!important;border-radius:0!important;overflow:visible!important;-webkit-mask-image:none!important;mask-image:none!important;background:radial-gradient(520px 300px at 50% 46%,rgba(202,252,1,.1),rgba(202,252,1,0) 70%)!important;opacity:1!important;pointer-events:none}',
    R + ' .rs-radar svg,' + R + ' .rs-radar__sweep,' + R + ' .rs-radar__blip::after{display:none!important}',
    R + ' .rs-radar__blip{display:block!important;position:absolute!important;width:var(--ts,68px)!important;height:var(--ts,68px)!important;margin:0!important;border-radius:calc(var(--ts,68px)*.28)!important;background:linear-gradient(180deg,#eaff7a,#CAFC01 55%,#b4e000)!important;box-shadow:0 calc(var(--ts,68px)*.1) 0 #7f9d00,0 22px 40px rgba(0,0,0,.45),0 0 44px rgba(202,252,1,.22),inset 0 1px 0 rgba(255,255,255,.65)!important;opacity:1!important;rotate:var(--tr,-8deg);animation:rs-tile-fl var(--td,6s) ease-in-out var(--tl,0s) infinite alternate!important}',
    R + ' .rs-radar__blip::before{content:"";position:absolute;inset:22%;background:center/contain no-repeat var(--ti)}',
    '@keyframes rs-tile-fl{from{translate:0 -9px}to{translate:0 9px}}',
    R + ' .rs-radar__blip:nth-of-type(1){left:13%!important;top:16%!important;--tr:-10deg;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M12 3l7 3v5c0 4.6-3 8.4-7 10-4-1.600-7-5.400-7-10V6l7-3z%27/%3E%3Cpath d=%27M9 12l2.200 2.200L15.200 10%27/%3E%3C/svg%3E")}',
    R + ' .rs-radar__blip:nth-of-type(2){left:81%!important;top:13%!important;--ts:58px;--tr:9deg;--td:7s;--tl:-2s;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M20 11a8 8 0 0 0-14.300-4M4 4v4h4%27/%3E%3Cpath d=%27M4 13a8 8 0 0 0 14.300 4M20 20v-4h-4%27/%3E%3C/svg%3E")}',
    R + ' .rs-radar__blip:nth-of-type(3){left:8%!important;top:64%!important;--ts:52px;--tr:7deg;--td:6.500s;--tl:-3.500s;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M13 2L4.500 13.500H11l-1 8.500 8.500-11.500H12l1-8.500z%27/%3E%3C/svg%3E")}',
    R + ' .rs-radar__blip:nth-of-type(4){left:86%!important;top:62%!important;--ts:64px;--tr:-6deg;--td:7.500s;--tl:-1s;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M20 12a8 8 0 0 1-11.700 7.100L4 20l1-4.200A8 8 0 1 1 20 12z%27/%3E%3Cpath d=%27M9 12h.010M12 12h.010M15 12h.010%27/%3E%3C/svg%3E")}',
    '@media (max-width:980px){' + R + ' .rs-radar__blip{--ts:38px!important}' + R + ' .rs-radar__blip:nth-of-type(1){left:5%!important;top:5%!important}' + R + ' .rs-radar__blip:nth-of-type(2){left:84%!important;top:4%!important}' + R + ' .rs-radar__blip:nth-of-type(3),' + R + ' .rs-radar__blip:nth-of-type(4){display:none!important}}',
    '@media (prefers-reduced-motion:reduce){' + R + ' .rs-radar__blip{animation:none!important}}',
    'body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(1){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M3 4h2.500l2.200 10.500h10.300l2-7.500H7%27/%3E%3Ccircle cx=%279.500%27 cy=%2719%27 r=%271.400%27/%3E%3Ccircle cx=%2717%27 cy=%2719%27 r=%271.400%27/%3E%3C/svg%3E")}',
    'body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(2){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Crect x=%273%27 y=%275.500%27 width=%2718%27 height=%2713%27 rx=%272.500%27/%3E%3Cpath d=%27M3 10h18M7 14.500h4%27/%3E%3C/svg%3E")}',
    'body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(3){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M12 3l8 4.200v9.600L12 21l-8-4.200V7.200L12 3z%27/%3E%3Cpath d=%27M4 7.200l8 4.200 8-4.200M12 11.400V21%27/%3E%3C/svg%3E")}',
    'body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(4){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M3.500 12.500V4.500h8l9 9-8 8-9-9z%27/%3E%3Ccircle cx=%278%27 cy=%279%27 r=%271.300%27/%3E%3C/svg%3E")}',
    'body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(1){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M8.500 7.500L4 12l4.500 4.500M15.500 7.500L20 12l-4.500 4.500M13.500 5l-3 14%27/%3E%3C/svg%3E")}',
    'body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(2){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M9 4.500h3a2 2 0 1 1 4 0h3.500v4.500a2 2 0 1 0 0 4v5.500H15a2 2 0 1 0-4 0H5.500V13a2 2 0 1 1 0-4V4.500H9z%27/%3E%3C/svg%3E")}',
    'body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(3){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M9 3v5M15 3v5M6.500 8h11v4a5.500 5.500 0 0 1-11 0V8zM12 17.500V21%27/%3E%3C/svg%3E")}',
    'body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(4){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Ccircle cx=%2712%27 cy=%2712%27 r=%273%27/%3E%3Cpath d=%27M12 3v2.500M12 18.500V21M3 12h2.500M18.500 12H21M5.600 5.600l1.800 1.800M16.600 16.600l1.800 1.800M5.600 18.400l1.800-1.800M16.600 7.400l1.800-1.800%27/%3E%3C/svg%3E")}',
    R + ' .elementor-element-bf453d1 a.elementor-button,' + R + ' .elementor-element-bf453d1 a.elementor-button:is(:hover,:focus,:active){background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000)!important;box-shadow:0 4px 0 #7f9d00,0 14px 26px rgba(202,252,1,.24),inset 0 1px 0 rgba(255,255,255,.6)!important}',
    R + ' .elementor-element-bf453d1 a.elementor-button :is(span,svg){color:#101400!important;fill:#101400!important}',
    # ---- pricing: shared row tracks so titles, prices, bullets and buttons line up across both cards
    '@media (min-width:768px){' + R + ' .elementor-element-15c55cd{display:grid!important;grid-template-columns:repeat(2,minmax(0,1fr))!important;grid-template-rows:repeat(6,auto)!important;align-items:stretch!important}' + R + ' :is(.elementor-element-50f9955,.elementor-element-90debad){display:grid!important;grid-row:span 6!important;grid-template-rows:subgrid!important;align-items:start!important;align-content:start!important;width:auto!important;max-width:none!important}' + R + ' .elementor-element-50f9955 > :nth-child(1){grid-row:2!important}' + R + ' .elementor-element-50f9955 > :nth-child(2){grid-row:3!important}' + R + ' .elementor-element-50f9955 > :nth-child(3){grid-row:4!important}' + R + ' .elementor-element-50f9955 > :nth-child(4){grid-row:5!important}' + R + ' .elementor-element-50f9955 > :nth-child(5){grid-row:6!important}' + R + ' .elementor-element-90debad > :nth-child(1){grid-row:1!important}' + R + ' .elementor-element-90debad > :nth-child(2){grid-row:2!important}' + R + ' .elementor-element-90debad > :nth-child(3){grid-row:3!important}' + R + ' .elementor-element-90debad > :nth-child(4){grid-row:4!important}' + R + ' .elementor-element-90debad > :nth-child(5){grid-row:5!important}' + R + ' .elementor-element-90debad > :nth-child(6){grid-row:6!important}' + R + ' .elementor-element-d28cf11{justify-self:start!important}' + R + ' :is(.elementor-element-50f9955,.elementor-element-90debad) > .elementor-widget-button{align-self:end!important}' + R + ' :is(.elementor-element-50f9955,.elementor-element-90debad) a.elementor-button{min-height:56px!important;box-sizing:border-box!important;display:flex!important;align-items:center;justify-content:center}}',
    # ---- headings in Nostela
    R + ' :is(h1,h2){font-family:"Nostela FS",Talent,sans-serif!important;font-weight:500!important;letter-spacing:0!important}',
    R + ' h1{font-size:clamp(34px,4vw,58px)!important;line-height:1.1!important}',
    R + ' h2{font-size:clamp(26px,2.800vw,40px)!important;line-height:1.16!important}',
    '@media (max-width:767px){' + R + ' h1{font-size:clamp(28px,8.400vw,34px)!important;line-height:1.14!important}' + R + ' h2{font-size:clamp(21px,6.200vw,26px)!important;line-height:1.2!important}}',
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
    R + ' :is(.elementor-element-50f92a8,.elementor-element-0d59b33) > .elementor-widget:first-child .elementor-heading-title{font-family:"Nostela FS",Talent,sans-serif!important;font-weight:500!important;font-size:clamp(40px,4vw,58px)!important;line-height:1!important;letter-spacing:-.01em}',
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
