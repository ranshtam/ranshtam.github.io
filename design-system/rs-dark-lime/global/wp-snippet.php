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
	$list[] = '.rs-ct{';
	$list[] = '.rs-b{';
	$list[] = 'rs-skin:';
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
add_action( 'wp_head', function () {
	if ( rs_global_chrome_skip() || ! is_page( array( 25384, 25949, 25919 ) ) ) {
		return;
	}
	echo <<<'RS_HTML_9X'
<style id="rs-skin">
@font-face{font-family:"Nostela FS";font-weight:500;font-style:normal;font-display:swap;src:url(https://ranshtam.com/wp-content/uploads/fonts/Nostela_Fs-Medium.woff2) format("woff2")}
/* rs-skin: RS Dark Lime over the Elementor service pages */
body:is(.page-id-25384,.page-id-25949,.page-id-25919){background:#101400!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"]{color:#c9cdbb;background:radial-gradient(900px 520px at 50% 0,rgba(202,252,1,.07),rgba(202,252,1,0) 70%)}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(h1,h2,h3,h4,h5,h6,.elementor-heading-title,.elementor-icon-box-title,.elementor-icon-box-title a,.elementor-tab-title,.elementor-toggle-title){color:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(p,li,.elementor-icon-list-text,.elementor-icon-box-description,.elementor-widget-text-editor,.elementor-tab-content){color:#c9cdbb!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .ph-mark{color:#CAFC01!important;z-index:auto!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .ph-mark::before{z-index:0!important;height:4px!important;bottom:-4px!important;border-radius:4px;box-shadow:0 0 14px rgba(202,252,1,.7)}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.ph-h2,.ph-line){color:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .ph-line.ph-3{color:#9aa08a!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-3402f10,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-db7b0c8,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-32fc803,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d69d525,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955{background:linear-gradient(180deg,rgba(255,255,255,.07),rgba(255,255,255,.025))!important;border:1px solid rgba(255,255,255,.12)!important;box-shadow:0 22px 50px rgba(0,0,0,.35),inset 0 1px 0 rgba(255,255,255,.1)!important;transition:border-color .3s,transform .3s}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-3402f10:hover,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-db7b0c8:hover,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-32fc803:hover,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d69d525:hover{border-color:rgba(202,252,1,.45)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad{background:linear-gradient(180deg,#1b210b,#12160a)!important;border:1px solid rgba(202,252,1,.45)!important;box-shadow:0 30px 70px rgba(0,0,0,.5),0 0 0 4px rgba(202,252,1,.06),inset 0 1px 0 rgba(255,255,255,.12)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d28cf11 :is(.elementor-heading-title,p,span){color:#101400!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-widget-icon-list{border-color:rgba(255,255,255,.14)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-list-item:not(:last-child)::after{border-color:rgba(255,255,255,.12)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-ddf114a a.elementor-button{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.26)!important;color:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-ddf114a a.elementor-button :is(span,svg){color:#fff!important;fill:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-ddf114a a.elementor-button:hover{border-color:rgba(202,252,1,.6)!important;background:rgba(255,255,255,.09)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-c1ab087 a.elementor-button{background:transparent!important;border:1px solid rgba(202,252,1,.6)!important;color:#CAFC01!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-c1ab087 a.elementor-button :is(span,svg){color:#CAFC01!important;fill:#CAFC01!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-c1ab087 a.elementor-button:hover{background:#CAFC01!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-c1ab087 a.elementor-button:hover :is(span,svg){color:#101400!important;fill:#101400!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-toggle-item{background:linear-gradient(180deg,rgba(255,255,255,.055),rgba(255,255,255,.02))!important;border-color:rgba(255,255,255,.12)!important;transition:border-color .3s}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-toggle-item:has(.elementor-tab-title.elementor-active){border-color:rgba(202,252,1,.4)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-toggle-icon{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.22)!important;color:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-toggle-icon :is(svg,i){fill:#fff!important;color:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-tab-title.elementor-active .elementor-toggle-icon{background:#CAFC01!important;border-color:#CAFC01!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-tab-title.elementor-active .elementor-toggle-icon :is(svg,i){fill:#101400!important;color:#101400!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-tab-title a{color:#fff!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar{inset:0!important;width:auto!important;height:auto!important;translate:none!important;aspect-ratio:auto!important;border-radius:0!important;overflow:visible!important;-webkit-mask-image:none!important;mask-image:none!important;background:radial-gradient(520px 300px at 50% 46%,rgba(202,252,1,.1),rgba(202,252,1,0) 70%)!important;opacity:1!important;pointer-events:none}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar svg,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__sweep,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip::after{display:none!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip{display:block!important;position:absolute!important;width:var(--ts,68px)!important;height:var(--ts,68px)!important;margin:0!important;border-radius:calc(var(--ts,68px)*.28)!important;background:linear-gradient(180deg,#eaff7a,#CAFC01 55%,#b4e000)!important;box-shadow:0 calc(var(--ts,68px)*.1) 0 #7f9d00,0 22px 40px rgba(0,0,0,.45),0 0 44px rgba(202,252,1,.22),inset 0 1px 0 rgba(255,255,255,.65)!important;opacity:1!important;rotate:var(--tr,-8deg);animation:rs-tile-fl var(--td,6s) ease-in-out var(--tl,0s) infinite alternate!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip::before{content:"";position:absolute;inset:22%;background:center/contain no-repeat var(--ti)}
@keyframes rs-tile-fl{from{translate:0 -9px}to{translate:0 9px}}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(1){left:13%!important;top:16%!important;--tr:-10deg;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M12 3l7 3v5c0 4.6-3 8.4-7 10-4-1.600-7-5.400-7-10V6l7-3z%27/%3E%3Cpath d=%27M9 12l2.200 2.200L15.200 10%27/%3E%3C/svg%3E")}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(2){left:81%!important;top:13%!important;--ts:58px;--tr:9deg;--td:7s;--tl:-2s;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M20 11a8 8 0 0 0-14.300-4M4 4v4h4%27/%3E%3Cpath d=%27M4 13a8 8 0 0 0 14.300 4M20 20v-4h-4%27/%3E%3C/svg%3E")}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(3){left:8%!important;top:64%!important;--ts:52px;--tr:7deg;--td:6.500s;--tl:-3.500s;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M13 2L4.500 13.500H11l-1 8.500 8.500-11.500H12l1-8.500z%27/%3E%3C/svg%3E")}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(4){left:86%!important;top:62%!important;--ts:64px;--tr:-6deg;--td:7.500s;--tl:-1s;--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M20 12a8 8 0 0 1-11.700 7.100L4 20l1-4.200A8 8 0 1 1 20 12z%27/%3E%3Cpath d=%27M9 12h.010M12 12h.010M15 12h.010%27/%3E%3C/svg%3E")}
@media (max-width:980px){body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip{--ts:38px!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(1){left:5%!important;top:5%!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(2){left:84%!important;top:4%!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(3),body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip:nth-of-type(4){display:none!important}}
@media (prefers-reduced-motion:reduce){body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .rs-radar__blip{animation:none!important}}
body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(1){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M3 4h2.500l2.200 10.500h10.300l2-7.500H7%27/%3E%3Ccircle cx=%279.500%27 cy=%2719%27 r=%271.400%27/%3E%3Ccircle cx=%2717%27 cy=%2719%27 r=%271.400%27/%3E%3C/svg%3E")}
body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(2){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Crect x=%273%27 y=%275.500%27 width=%2718%27 height=%2713%27 rx=%272.500%27/%3E%3Cpath d=%27M3 10h18M7 14.500h4%27/%3E%3C/svg%3E")}
body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(3){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M12 3l8 4.200v9.600L12 21l-8-4.200V7.200L12 3z%27/%3E%3Cpath d=%27M4 7.200l8 4.200 8-4.200M12 11.400V21%27/%3E%3C/svg%3E")}
body.page-id-25949 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(4){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M3.500 12.500V4.500h8l9 9-8 8-9-9z%27/%3E%3Ccircle cx=%278%27 cy=%279%27 r=%271.300%27/%3E%3C/svg%3E")}
body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(1){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M8.500 7.500L4 12l4.500 4.500M15.500 7.500L20 12l-4.500 4.500M13.500 5l-3 14%27/%3E%3C/svg%3E")}
body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(2){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M9 4.500h3a2 2 0 1 1 4 0h3.500v4.500a2 2 0 1 0 0 4v5.500H15a2 2 0 1 0-4 0H5.500V13a2 2 0 1 1 0-4V4.500H9z%27/%3E%3C/svg%3E")}
body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(3){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cpath d=%27M9 3v5M15 3v5M6.500 8h11v4a5.500 5.500 0 0 1-11 0V8zM12 17.500V21%27/%3E%3C/svg%3E")}
body.page-id-25919 [data-elementor-type="wp-page"] .rs-radar .rs-radar__blip:nth-of-type(4){--ti:url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27%23101400%27 stroke-width=%272.2%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Ccircle cx=%2712%27 cy=%2712%27 r=%273%27/%3E%3Cpath d=%27M12 3v2.500M12 18.500V21M3 12h2.500M18.500 12H21M5.600 5.600l1.800 1.800M16.600 16.600l1.800 1.800M5.600 18.400l1.800-1.800M16.600 7.400l1.800-1.800%27/%3E%3C/svg%3E")}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-bf453d1 a.elementor-button,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-bf453d1 a.elementor-button:is(:hover,:focus,:active){background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000)!important;box-shadow:0 4px 0 #7f9d00,0 14px 26px rgba(202,252,1,.24),inset 0 1px 0 rgba(255,255,255,.6)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-bf453d1 a.elementor-button :is(span,svg){color:#101400!important;fill:#101400!important}
@media (min-width:768px){body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-15c55cd{display:grid!important;grid-template-columns:repeat(2,minmax(0,1fr))!important;grid-template-rows:repeat(6,auto)!important;align-items:stretch!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad){display:grid!important;grid-row:span 6!important;grid-template-rows:subgrid!important;align-items:start!important;align-content:start!important;width:auto!important;max-width:none!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955 > :nth-child(1){grid-row:2!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955 > :nth-child(2){grid-row:3!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955 > :nth-child(3){grid-row:4!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955 > :nth-child(4){grid-row:5!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955 > :nth-child(5){grid-row:6!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad > :nth-child(1){grid-row:1!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad > :nth-child(2){grid-row:2!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad > :nth-child(3){grid-row:3!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad > :nth-child(4){grid-row:4!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad > :nth-child(5){grid-row:5!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad > :nth-child(6){grid-row:6!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d28cf11{justify-self:start!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) > .elementor-widget-button{align-self:end!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) a.elementor-button{min-height:56px!important;box-sizing:border-box!important;display:flex!important;align-items:center;justify-content:center}}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-list-icon svg{margin:0!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-icon{padding:0!important;margin-inline-end:8px!important;align-self:flex-start!important;margin-top:2px!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-item{align-items:flex-start!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon::after,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon::before{display:none!important;animation:none!important;content:none!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon{outline:none!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(h1,h2){font-family:"Nostela FS",Talent,sans-serif!important;font-weight:500!important;letter-spacing:0!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] h1{font-size:clamp(34px,4vw,58px)!important;line-height:1.1!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] h2{font-size:clamp(26px,2.800vw,40px)!important;line-height:1.16!important}
@media (max-width:767px){body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] h1{font-size:clamp(26px,7.6vw,31px)!important;line-height:1.15!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] h2{font-size:clamp(19px,5.4vw,22px)!important;line-height:1.25!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(h1,h2){text-wrap:balance}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .ph-line:is(.ph-1,.ph-2){font-size:clamp(23px,6.6vw,27px)!important;line-height:1.18!important}body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .ph-mark{font-size:inherit!important}}
body:not(.page-id-25384):is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f92a8,.elementor-element-0d59b33) > .elementor-widget:first-child:is(.elementor-element-a0e64a4,.elementor-element-54e1649) .elementor-heading-title{font-size:clamp(28px,2.5vw,36px)!important;line-height:1.1!important;white-space:nowrap!important}
body.page-id-25949 .elementor-element-33dd122{--hsw:min(560px,52vw);--hsh:calc(var(--hsw)*.625 + 18px);position:relative!important;padding-bottom:calc(var(--hsh) + 6px)!important;overflow:hidden}body:not(.page-id-25949) .rs-hs,.rs-b--in>.rs-hs{display:none}.rs-hs{position:absolute;left:0;right:0;bottom:40px;height:var(--hsh);perspective:1800px;pointer-events:none;opacity:0;transform:translateY(26px);transition:opacity .9s cubic-bezier(.2,.8,.2,1),transform .9s cubic-bezier(.2,.8,.2,1);direction:ltr}.rs-hs.is-in{opacity:1;transform:none}.rs-hs::before{content:"";position:absolute;left:50%;top:50%;width:calc(var(--hsw)*1.5);height:130%;transform:translate(-50%,-50%);background:radial-gradient(closest-side,rgba(202,252,1,.2),rgba(202,252,1,0));pointer-events:none}.rs-hs__b{position:absolute;bottom:0;left:50%;width:var(--hsw);margin-left:calc(var(--hsw)*-.5);border-radius:12px;overflow:hidden;background:#1a1e0f;border:1px solid rgba(255,255,255,.2);box-shadow:0 34px 80px rgba(0,0,0,.65),0 0 0 1px rgba(0,0,0,.4)}.rs-hs__b img{display:block;width:100%;height:auto;margin:0}.rs-hs__bar{display:flex;align-items:center;gap:5px;height:18px;padding:0 9px;background:#20250f;border-bottom:1px solid rgba(255,255,255,.08)}.rs-hs__bar i{width:5px;height:5px;border-radius:50%;background:rgba(255,255,255,.3)}.rs-hs__bar u{flex:1;margin-left:8px;height:10px;border-radius:5px;background:rgba(255,255,255,.07);font:500 7px/10px Talent,Arial,sans-serif;color:rgba(255,255,255,.55);text-align:center;text-decoration:none}.rs-hs__b--s1,.rs-hs__b--s2{width:calc(var(--hsw)*.8);margin-left:0;filter:brightness(.42) saturate(.8);box-shadow:0 24px 60px rgba(0,0,0,.6)}.rs-hs__b--s1::after,.rs-hs__b--s2::after{content:"";position:absolute;inset:0;background:rgba(16,20,0,.5);pointer-events:none}.rs-hs__b--s1{left:calc(50% - var(--hsw)*1.14);transform:rotateY(22deg);transform-origin:right center}.rs-hs__b--s2{left:calc(50% + var(--hsw)*.34);transform:rotateY(-22deg);transform-origin:left center}.rs-hs__ph{position:absolute;bottom:-12px;left:calc(50% - var(--hsw)*.58);width:calc(var(--hsw)*.19);border-radius:calc(var(--hsw)*.028);overflow:hidden;border:3px solid #0b0d04;outline:1px solid rgba(255,255,255,.28);box-shadow:0 22px 46px rgba(0,0,0,.7);background:#0b0d04}.rs-hs__ph img{display:block;width:100%;height:auto;margin:0}@media (max-width:767px){body.page-id-25949 .elementor-element-33dd122{--hsw:72vw;padding-bottom:calc(var(--hsh) + 40px)!important}.rs-hs{bottom:40px}.rs-hs__b{border-radius:8px}.rs-hs__bar{height:13px}.rs-hs__bar u{font-size:5px;height:8px;line-height:8px}}@media (prefers-reduced-motion:reduce){.rs-hs{transition:none}}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon{width:60px!important;height:60px!important;padding:0!important;display:grid!important;place-items:center;border-radius:17px!important;background:linear-gradient(180deg,#eaff7a,#CAFC01 55%,#b4e000)!important;box-shadow:0 6px 0 #7f9d00,0 18px 30px rgba(202,252,1,.2),inset 0 1px 0 rgba(255,255,255,.65)!important;transform:rotate(-7deg);transition:transform .45s cubic-bezier(.2,.9,.3,1.5),box-shadow .3s}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon svg{width:26px!important;height:26px!important;fill:#101400!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon i{color:#101400!important;font-size:26px!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon{margin-bottom:22px!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-3402f10,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-db7b0c8,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-32fc803,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d69d525{overflow:hidden;transition:transform .35s cubic-bezier(.2,.8,.2,1),border-color .3s,box-shadow .3s!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-3402f10:hover,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-db7b0c8:hover,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-32fc803:hover,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d69d525:hover{transform:translateY(-6px);box-shadow:0 30px 60px rgba(0,0,0,.45),0 0 0 4px rgba(202,252,1,.05),inset 0 1px 0 rgba(255,255,255,.12)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-3402f10:hover .elementor-icon-box-icon .elementor-icon,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-db7b0c8:hover .elementor-icon-box-icon .elementor-icon,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-32fc803:hover .elementor-icon-box-icon .elementor-icon,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d69d525:hover .elementor-icon-box-icon .elementor-icon{transform:rotate(0deg) translateY(-3px) scale(1.06);box-shadow:0 8px 0 #7f9d00,0 22px 36px rgba(202,252,1,.32),inset 0 1px 0 rgba(255,255,255,.65)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad{border-radius:28px!important;transition:transform .35s cubic-bezier(.2,.8,.2,1),box-shadow .3s,border-color .3s!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955:hover{transform:translateY(-6px);border-color:rgba(255,255,255,.26)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad{background:radial-gradient(120% 70% at 50% 0,rgba(202,252,1,.16),rgba(202,252,1,0) 62%),linear-gradient(180deg,#1b210b,#12160a)!important;border:1px solid rgba(202,252,1,.6)!important;box-shadow:0 34px 80px rgba(0,0,0,.55),0 0 60px rgba(202,252,1,.12),0 0 0 5px rgba(202,252,1,.07),inset 0 1px 0 rgba(255,255,255,.16)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad:hover{transform:translateY(-8px);box-shadow:0 40px 90px rgba(0,0,0,.6),0 0 80px rgba(202,252,1,.2),0 0 0 5px rgba(202,252,1,.1),inset 0 1px 0 rgba(255,255,255,.16)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f92a8,.elementor-element-0d59b33){align-items:baseline!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f92a8,.elementor-element-0d59b33) > .elementor-widget:first-child .elementor-heading-title{font-family:"Nostela FS",Talent,sans-serif!important;font-weight:500!important;font-size:clamp(40px,4vw,58px)!important;line-height:1!important;letter-spacing:-.01em}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-0d59b33 > .elementor-widget:first-child .elementor-heading-title{color:#CAFC01!important;text-shadow:0 0 34px rgba(202,252,1,.35)}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-icon{flex:none;display:grid!important;place-items:center;width:22px!important;height:22px!important;border-radius:7px;background:rgba(202,252,1,.14);box-shadow:inset 0 0 0 1px rgba(202,252,1,.4)}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad .elementor-icon-list-icon{background:linear-gradient(180deg,#eaff7a,#b4e000);box-shadow:0 2px 0 #7f9d00}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-icon svg{width:11px!important;height:11px!important;fill:#CAFC01!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad .elementor-icon-list-icon svg{fill:#101400!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-item{padding-block:9px!important;gap:6px}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] :is(.elementor-element-50f9955,.elementor-element-90debad) .elementor-icon-list-text{color:#e3e6d8!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad a.elementor-button{background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000)!important;box-shadow:0 5px 0 #7f9d00,0 16px 30px rgba(202,252,1,.26),inset 0 1px 0 rgba(255,255,255,.6)!important;transition:transform .15s,box-shadow .15s!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad a.elementor-button:hover{transform:translateY(-2px);box-shadow:0 7px 0 #7f9d00,0 20px 36px rgba(202,252,1,.34),inset 0 1px 0 rgba(255,255,255,.6)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad a.elementor-button:active{transform:translateY(4px);box-shadow:0 1px 0 #7f9d00,0 6px 14px rgba(202,252,1,.2)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d28cf11{box-shadow:0 3px 0 #7f9d00,0 10px 20px rgba(202,252,1,.25)}
@media (prefers-reduced-motion:reduce){body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-icon-box-icon .elementor-icon,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-3402f10,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-db7b0c8,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-32fc803,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-d69d525,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-50f9955,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] .elementor-element-90debad{transition:none!important;transform:none!important}}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-item .ti-inner{background:linear-gradient(180deg,rgba(255,255,255,.075),rgba(255,255,255,.03))!important;background-color:transparent!important;border:1px solid rgba(255,255,255,.14)!important;border-radius:20px!important;box-shadow:0 18px 40px rgba(0,0,0,.35),inset 0 1px 0 rgba(255,255,255,.1)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-item .ti-inner::before,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-item .ti-inner::after{display:none!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-name,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-content,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-text-container,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-content *{color:#fff!important;font-family:var(--tal)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-date,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-read-more,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-read-more span{color:#a9af98!important;font-family:var(--tal)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-read-more span:hover{color:#CAFC01!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-controls .ti-next,body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-controls .ti-prev{filter:invert(1);box-shadow:0 0 0 1px rgba(0,0,0,.25)!important}
body:is(.page-id-25384,.page-id-25949,.page-id-25919) [data-elementor-type="wp-page"] #reviews .ti-widget .ti-review-item .ti-profile-img{display:none!important}
</style>
RS_HTML_9X;
}, 99 );
add_action( 'wp_head', function () {
	if ( rs_global_chrome_skip() ) {
		return;
	}
	if ( ! ( is_singular( 'post' ) || is_post_type_archive( 'projects' ) || is_category() || is_tag() || is_search() || is_page( array( 24531, 24385, 24272, 21338 ) ) ) ) {
		return;
	}
	echo <<<'RS_HTML_9X'
<style id="rs-skin2">
@font-face{font-family:"Nostela FS";font-weight:500;font-style:normal;font-display:swap;src:url(https://ranshtam.com/wp-content/uploads/fonts/Nostela_Fs-Medium.woff2) format("woff2")}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(h1,h2){font-family:"Nostela FS",Talent,sans-serif!important;font-weight:500!important;letter-spacing:0!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) h1{font-size:clamp(28px,3.200vw,46px)!important;line-height:1.14!important}
body.single-post .elementor-location-single h1{font-size:clamp(24px,2.300vw,34px)!important;line-height:1.22!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) h2{font-size:clamp(21px,1.900vw,28px)!important;line-height:1.24!important}
@media (max-width:767px){body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) h1{font-size:clamp(23px,6.6vw,27px)!important;line-height:1.18!important}body.single-post .elementor-location-single h1{font-size:clamp(18px,5vw,20px)!important;line-height:1.3!important}body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) h2{font-size:clamp(17px,4.7vw,19px)!important;line-height:1.3!important}body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(h1,h2){text-wrap:balance}}
/* rs-skin: RS Dark Lime over blog, posts, projects and legal pages */
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338){background:#101400!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive){color:#c9cdbb}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(h1,h2,h3,h4,h5,h6,.elementor-heading-title:not(span)){color:#fff!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(p,li,td,dd,dt,figcaption,.elementor-widget-text-editor){color:#c9cdbb!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(strong,b,th){color:#fff!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) p.elementor-heading-title{color:#c9cdbb!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-widget-theme-post-content a:not([class*="button"]):not([class*="btn"]):not([class*="cta"]),body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-widget-text-editor a:not([class*="button"]):not([class*="btn"]):not([class*="cta"]){color:#CAFC01!important;text-decoration-color:rgba(202,252,1,.45)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(th,thead td){background:rgba(255,255,255,.07)!important;border-color:rgba(255,255,255,.14)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) td{background:transparent!important;border-color:rgba(255,255,255,.12)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) tr:nth-child(even) td{background:rgba(255,255,255,.03)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) table{border-color:rgba(255,255,255,.14)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(code,pre,kbd){background:rgba(255,255,255,.08)!important;color:#eaff7a!important;border-color:rgba(255,255,255,.14)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(.rs-note,blockquote){background:linear-gradient(180deg,rgba(202,252,1,.09),rgba(202,252,1,.03))!important;border-color:rgba(202,252,1,.4)!important;color:#dfe3d2!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) :is(.rs-note,blockquote) :is(p,li,span){color:#dfe3d2!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) [class*="copy-box"]{color:#fff!important;border-color:rgba(255,255,255,.16)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) hr{border-color:rgba(255,255,255,.14)!important;background:rgba(255,255,255,.14)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-widget-divider .elementor-divider-separator{border-color:rgba(255,255,255,.14)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-element-030a0bb,body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-element-0981f5a,body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-element-c07af1d,body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-element-2a4baa8{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.14)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-element-32f5c7f3{border-color:rgba(255,255,255,.16)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-widget-theme-post-content [style*="background"]:not(a){background:rgba(255,255,255,.06)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-widget-theme-post-content [style*="color"]:not(a){color:inherit!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) .elementor-widget-button a.elementor-button[class]:not(.rs-x){transition:background .2s,border-color .2s,color .2s}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) a.elementor-button[href*="/category/"]{background:rgba(255,255,255,.05)!important;border-color:rgba(255,255,255,.26)!important}
body:is(.single-post,.post-type-archive-projects,.category,.tag,.search,.page-id-24531,.page-id-24385,.page-id-24272,.page-id-21338) :is([data-elementor-type="wp-page"],.elementor-location-single,.elementor-location-archive) a.elementor-button[href*="/category/"] span{color:#fff!important}
</style>
RS_HTML_9X;
}, 99 );
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
add_action( 'elementor/theme/before_do_footer', function () {
	if ( rs_global_chrome_skip() || ! is_page( 25949 ) ) {
		return;
	}
	echo <<<'RS_HTML_9X'
<div class="rs-b rs-b--in" dir="rtl">
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
  .rs-b--in{background:transparent}.rs-b--in .rs-b__sec{border-top:0;padding:90px 0}.rs-b--in h2.rs-b__h{font-weight:500}.rs-b--in .rs-b__k{color:#fff}.rs-b--in .rs-b__k::before{content:"// ";color:#CAFC01}@media (max-width:767px){.rs-b--in .rs-b__sec{padding:56px 0}}</style>
  <section class="rs-b__sec" id="stores" aria-label="פרויקטים"><div class="rs-b__in">
    <div class="rs-b__head" data-rv><p class="rs-b__k">פרויקטים</p><h2 class="rs-b__h">חנויות <em>שבניתי.</em></h2></div>
    <div class="rs-pjs"><a class="rs-pj" href="https://rachelidrinks.co.il/" target="_blank" rel="noopener" data-rv style="--d:0"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>rachelidrinks.co.il</u></span><img src="https://ranshtam.com/wp-content/uploads/rs-pm-04-d.webp" alt="האתר של משקאות רחלי במחשב" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm-04-m.webp" alt="האתר של משקאות רחלי בטלפון" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>משקאות רחלי</b><i>rachelidrinks.co.il</i></span></a><a class="rs-pj" href="https://eskimoss.com/" target="_blank" rel="noopener" data-rv style="--d:1"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>eskimoss.com</u></span><img src="https://ranshtam.com/wp-content/uploads/rs-pm-05-d.webp" alt="האתר של eskimoss במחשב" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm-05-m.webp" alt="האתר של eskimoss בטלפון" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>eskimoss</b><i>eskimoss.com</i></span></a><a class="rs-pj" href="https://boimalca.co.il/" target="_blank" rel="noopener" data-rv style="--d:2"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>boimalca.co.il</u></span><img src="https://ranshtam.com/wp-content/uploads/rs-pm-20-d.webp" alt="האתר של בואי מלכה במחשב" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm-20-m.webp" alt="האתר של בואי מלכה בטלפון" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>בואי מלכה</b><i>boimalca.co.il</i></span></a><a class="rs-pj" href="http://photoizhar.co.il/" target="_blank" rel="noopener" data-rv style="--d:3"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>photoizhar.co.il</u></span><img src="https://ranshtam.com/wp-content/uploads/rs-pm-29-d.webp" alt="האתר של יזהר הצלם במחשב" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm-29-m.webp" alt="האתר של יזהר הצלם בטלפון" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>יזהר הצלם</b><i>photoizhar.co.il</i></span></a><a class="rs-pj" href="https://kedemcoffee.co.il/" target="_blank" rel="noopener" data-rv style="--d:0"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>kedemcoffee.co.il</u></span><img src="https://ranshtam.com/wp-content/uploads/rs-pm-38-d.webp" alt="האתר של קדם קפה במחשב" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm-38-m.webp" alt="האתר של קדם קפה בטלפון" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>קדם קפה</b><i>kedemcoffee.co.il</i></span></a><a class="rs-pj" href="https://romeo-gifts.co.il/" target="_blank" rel="noopener" data-rv style="--d:1"><span class="rs-pj__img"><span class="rs-pj__br"><span class="rs-pj__bar" aria-hidden="true"><i></i><i></i><i></i><u>romeo-gifts.co.il</u></span><img src="https://ranshtam.com/wp-content/uploads/rs-pm2-39-d.webp" alt="האתר של Romeo Gifts במחשב" width="720" height="450" loading="lazy" decoding="async"></span><span class="rs-pj__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm2-39-m.webp" alt="האתר של Romeo Gifts בטלפון" width="240" height="406" loading="lazy" decoding="async"></span></span><span class="rs-pj__meta"><b>Romeo Gifts</b><i>romeo-gifts.co.il</i></span></a></div>
    <div class="rs-pjm" data-rv><a class="rs-pjm__b" href="https://ranshtam.com/projects/">לכל הפרויקטים<svg viewBox="0 0 16 16" aria-hidden="true"><path d="M13 8H3m4-4L3 8l4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
  </div></section>
  <section class="rs-b__sec" id="how" aria-label="תהליך העבודה"><div class="rs-b__in">
    <div class="rs-b__head" data-rv><p class="rs-b__k">תהליך העבודה</p><h2 class="rs-b__h">מהשיחה הראשונה ועד <em>שהחנות באוויר.</em></h2><p class="rs-b__lead">ארבעה שלבים ברורים, בלי הפתעות בדרך. בכל רגע יודעים בדיוק איפה הפרויקט עומד.</p></div>
    <div class="rs-jr"><div class="rs-jr__track" aria-hidden="true"><span class="rs-jr__fill"></span></div><canvas class="rs-jr__fx" aria-hidden="true"></canvas><div class="rs-jst is-b" style="grid-column:1"><div class="rs-jst__c"><span class="rs-jst__n" aria-hidden="true">01</span><span class="rs-jst__i"><svg viewBox="0 0 64 64" aria-hidden="true"><path class="d" pathLength="1" d="M8 14h30a6 6 0 0 1 6 6v12a6 6 0 0 1-6 6H22l-8 7v-7H8a0 0 0 0 1 0 0V20a6 6 0 0 1 6-6"/><path class="d a" pathLength="1" style="--dl:.35s" d="M50 30h4a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4h-2v6l-7-6H34a4 4 0 0 1-4-4v-1"/><path class="d a" pathLength="1" style="--dl:.6s" d="M17 23h18M17 30h11"/></svg></span><h3>שיחת היכרות</h3><p>מבינים מה החנות צריכה, מי הקונים ומה צריך לקרות אחרי שמישהו נכנס לאתר.</p></div></div><div class="rs-jst is-b" style="grid-column:2"><div class="rs-jst__c"><span class="rs-jst__n" aria-hidden="true">02</span><span class="rs-jst__i"><svg viewBox="0 0 64 64" aria-hidden="true"><rect class="d" pathLength="1" x="8" y="10" width="48" height="44" rx="5"/><path class="d" pathLength="1" style="--dl:.25s" d="M8 21h48"/><path class="d a" pathLength="1" style="--dl:.45s" d="M15 29h16v18H15z"/><path class="d a" pathLength="1" style="--dl:.7s" d="M37 30h13M37 37h13M37 44h8"/></svg></span><h3>אפיון ועיצוב</h3><p>מבנה, תוכן ועיצוב שמותאמים לקהל שלך. מאשרים הכל לפני שנכתבת שורת קוד.</p></div></div><div class="rs-jst is-b" style="grid-column:3"><div class="rs-jst__c"><span class="rs-jst__n" aria-hidden="true">03</span><span class="rs-jst__i"><svg viewBox="0 0 64 64" aria-hidden="true"><path class="d" pathLength="1" d="M10 12h10v10H10zM10 28h10v10H10zM10 44h10v10H10z"/><path class="d" pathLength="1" style="--dl:.2s" d="M28 17h26M28 33h26M28 49h18"/><path class="d a" pathLength="1" style="--dl:.5s" d="M12 17l3 3 5-6"/><path class="d a" pathLength="1" style="--dl:.8s" d="M12 33l3 3 5-6"/><path class="d a" pathLength="1" style="--dl:1.1s" d="M12 49l3 3 5-6"/></svg></span><h3>פיתוח ובדיקות</h3><p>בנייה בוורדפרס ובווקומרס, ובדיקות של מהירות, מובייל ותהליך הרכישה כולו.</p></div></div><div class="rs-jst is-b" style="grid-column:4"><div class="rs-jst__c"><span class="rs-jst__n" aria-hidden="true">04</span><span class="rs-jst__i"><svg viewBox="0 0 64 64" aria-hidden="true"><path class="d" pathLength="1" d="M10 26v26h44V26"/><path class="d" pathLength="1" style="--dl:.2s" d="M6 26l5-13h42l5 13a6.5 6.5 0 0 1-13 0 6.5 6.5 0 0 1-13 0 6.5 6.5 0 0 1-13 0 6.5 6.5 0 0 1-13 0z"/><path class="d" pathLength="1" style="--dl:.45s" d="M38 52V37h10v15"/><rect class="d a f" pathLength="1" style="--dl:.7s" x="15" y="35" width="17" height="10" rx="2"/></svg></span><h3>השקה וליווי</h3><p>עולים לאוויר, ואני נשאר זמין לתחזוקה, עדכונים ושיפורים.</p></div></div><div class="rs-jr__end">החנות באוויר</div></div>
  </div></section>
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
<div class="rs-hs" aria-label="חנויות שבניתי"><div class="rs-hs__b rs-hs__b--s1"><div class="rs-hs__bar" aria-hidden="true"><i></i><i></i><i></i><u>eskimoss.com</u></div><img src="https://ranshtam.com/wp-content/uploads/rs-pm-05-d.webp" alt="האתר של eskimoss במחשב" width="720" height="450" decoding="async"></div><div class="rs-hs__b rs-hs__b--s2"><div class="rs-hs__bar" aria-hidden="true"><i></i><i></i><i></i><u>boimalca.co.il</u></div><img src="https://ranshtam.com/wp-content/uploads/rs-pm-20-d.webp" alt="האתר של בואי מלכה במחשב" width="720" height="450" decoding="async"></div><div class="rs-hs__b rs-hs__b--c"><div class="rs-hs__bar" aria-hidden="true"><i></i><i></i><i></i><u>kedemcoffee.co.il</u></div><img src="https://ranshtam.com/wp-content/uploads/rs-pm-38-d.webp" alt="האתר של קדם קפה במחשב" width="720" height="450" decoding="async"></div><div class="rs-hs__ph"><img src="https://ranshtam.com/wp-content/uploads/rs-pm-38-m.webp" alt="האתר של קדם קפה בטלפון" width="240" height="406" decoding="async"></div></div><script nowprocket data-nowprocket="1">(function(){var w=document.querySelector('.rs-b--in');if(!w)return;var pg=document.querySelector('[data-elementor-type="wp-page"]');if(!pg)return;var a=pg.querySelector('.elementor-element-fae5385'),b=pg.querySelector('.elementor-element-31bf569'),s=w.querySelector('#stores'),h=w.querySelector('#how');var hs=document.querySelector('.rs-hs'),he=pg.querySelector('.elementor-element-33dd122');if(hs){if(he){he.appendChild(hs);requestAnimationFrame(function(){requestAnimationFrame(function(){hs.classList.add('is-in');});});}}function wrap(sec){var d=document.createElement('div');d.className='rs-b rs-b--in';d.dir='rtl';d.appendChild(sec);return d;}if(a){if(s){a.parentNode.insertBefore(wrap(s),a);}}if(b){if(h){b.parentNode.insertBefore(wrap(h),b);}}})();</script>
RS_HTML_9X;
}, 4 );
add_action( 'elementor/theme/before_do_footer', function () {
	if ( rs_global_chrome_skip() || ! is_page( array( 25384, 25949, 25919 ) ) ) {
		return;
	}
	echo <<<'RS_HTML_9X'
<section class="rs-ct" id="contact" aria-label="יצירת קשר">
  <style>
    .rs-ct{--nos:"Nostela FS",Talent,Arial,sans-serif;--tal:Talent,"Segoe UI",Arial,sans-serif;position:relative;direction:rtl;text-align:right;overflow:hidden;overflow:clip;background:#101400;color:#fff;font-family:var(--tal);padding:120px 0 130px;scroll-margin-top:70px;border-top:1px solid rgba(255,255,255,.08)}
    .rs-ct *{box-sizing:border-box}
    .rs-ct__anchor{position:absolute;top:0;left:0;width:1px;height:1px;scroll-margin-top:70px}
    .rs-ct p:empty{display:none}
    .rs-ct form.rs-ct__form p{display:contents;margin:0}
    .rs-ct__glow{position:absolute;inset:auto auto -30% -10%;width:70%;height:90%;background:radial-gradient(closest-side,rgba(202,252,1,.13),rgba(202,252,1,0));pointer-events:none}
    .rs-ct__in{position:relative;max-width:1240px;margin:0 auto;padding:0 24px;display:grid;grid-template-columns:minmax(0,.85fr) minmax(0,1.15fr);gap:72px;align-items:center}
    .rs-ct__txt{opacity:0;transform:translateY(22px);transition:opacity .8s,transform .8s cubic-bezier(.2,.8,.2,1)}
    .rs-ct.is-in .rs-ct__txt{opacity:1;transform:none}
    .rs-ct .rs-ct__k{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:600;letter-spacing:.03em;color:#CAFC01;margin:0 0 18px}
    .rs-ct .rs-ct__k::before{content:"";width:7px;height:7px;border-radius:50%;background:#CAFC01;box-shadow:0 0 0 4px rgba(202,252,1,.18)}
    .rs-ct h2.rs-ct__h{font-family:var(--nos);font-weight:900;font-size:clamp(30px,3.6vw,52px);line-height:1.1;color:#fff;margin:0;padding:0}
    .rs-ct h2.rs-ct__h em{font-style:normal;color:#CAFC01;display:block}
    .rs-ct .rs-ct__p{font-size:18px;line-height:1.7;color:#c9cdbb;margin:22px 0 0;max-width:460px}
    .rs-ct__pts{list-style:none;margin:30px 0 0;padding:0;display:grid;gap:12px}
    .rs-ct__pts li{display:flex;align-items:center;gap:12px;font-size:16px;color:#fff}
    .rs-ct__pts li i{flex:none;display:grid;place-items:center;width:26px;height:26px;border-radius:8px;background:linear-gradient(180deg,#e6ff5c,#b4e000);color:#101400;box-shadow:0 3px 0 #7f9d00,0 8px 16px rgba(202,252,1,.22),inset 0 1px 0 rgba(255,255,255,.6)}
    .rs-ct__pts li i svg{width:14px;height:14px}
    .rs-ct__alt{display:flex;flex-wrap:wrap;align-items:center;gap:10px 18px;margin-top:34px;padding-top:26px;border-top:1px solid rgba(255,255,255,.12);font-size:15px;color:#9aa08a}
    .rs-ct .rs-ct__alt a,.rs-ct .rs-ct__alt a:visited{display:inline-flex;align-items:center;gap:8px;color:#fff;text-decoration:none;font-weight:600;transition:color .2s}
    .rs-ct .rs-ct__alt a:hover{color:#CAFC01}
    .rs-ct__alt svg{width:18px;height:18px;color:#CAFC01}
    .rs-ct__alt--m{display:none!important}
    .rs-ct__stage{perspective:1400px}
    .rs-ct__card{position:relative;border-radius:28px;padding:1px;background:radial-gradient(420px circle at var(--gx,50%) var(--gy,0%),rgba(202,252,1,.75),rgba(255,255,255,.14) 42%,rgba(255,255,255,.08));box-shadow:0 40px 90px rgba(0,0,0,.5);opacity:0;transform:translateY(34px) rotateX(9deg);transform-origin:50% 100%;transition:opacity .9s,transform 1s cubic-bezier(.2,.8,.2,1)}
    .rs-ct.is-in .rs-ct__card{opacity:1;transform:rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg))}
    .rs-ct.is-tilt .rs-ct__card{transition:opacity .9s,transform .14s linear}
    .rs-ct__body{position:relative;border-radius:27px;padding:34px 34px 30px;background:linear-gradient(180deg,#1a1f0c,#12160a);overflow:hidden}
    .rs-ct__body::before{content:"";position:absolute;inset:0;background:radial-gradient(520px circle at var(--gx,50%) var(--gy,0%),rgba(202,252,1,.09),rgba(202,252,1,0) 60%);pointer-events:none}
    .rs-ct__prog{position:absolute;top:0;inset-inline:0;height:3px;background:rgba(255,255,255,.07)}
    .rs-ct__prog i{display:block;height:100%;width:100%;background:linear-gradient(90deg,#eaff7a,#CAFC01);box-shadow:0 0 14px rgba(202,252,1,.8);transform-origin:100% 50%;transform:scaleX(var(--pg,0));transition:transform .5s cubic-bezier(.2,.8,.2,1)}
    .rs-ct form.rs-ct__form{position:relative;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px;margin:0;padding:0}
    .rs-ct__full{grid-column:1/-1}
    .rs-ct .rs-ct__lg{display:block;font-size:14px;font-weight:600;color:#dfe3d2;margin:0 0 10px;padding:0}
    .rs-ct__opts{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
    .rs-ct__opt{position:relative;display:block;cursor:pointer;margin:0}
    .rs-ct__opts.is-chips{display:flex;flex-wrap:wrap;gap:8px}
    .rs-ct__opts.is-chips .rs-ct__opt span{padding:10px 16px;border-radius:999px;font-size:14.5px;font-weight:500}
    .e-con.e-parent:has(.rs-form-card form.elementor-form){display:none!important}
    .rs-ct .rs-ct__opt input{position:absolute;opacity:0;width:1px;height:1px;margin:0;pointer-events:none}
    .rs-ct__opt span{display:flex;align-items:center;gap:12px;height:100%;padding:16px 16px;border-radius:16px;border:1px solid rgba(255,255,255,.14);background:rgba(255,255,255,.035);color:#fff;font-size:15.5px;font-weight:600;line-height:1.3;transition:border-color .25s,background .25s,transform .25s cubic-bezier(.2,.9,.3,1.5),box-shadow .25s}
    .rs-ct__opt span svg{flex:none;width:26px;height:26px;fill:none;stroke:rgba(255,255,255,.6);stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round;transition:stroke .25s}
    .rs-ct__opt:hover span{border-color:rgba(202,252,1,.45);transform:translateY(-2px)}
    .rs-ct__opt input:checked+span{border-color:#CAFC01;background:rgba(202,252,1,.1);box-shadow:0 0 0 4px rgba(202,252,1,.1),0 14px 28px rgba(0,0,0,.35)}
    .rs-ct__opt input:checked+span svg{stroke:#CAFC01}
    .rs-ic{overflow:visible}
    .rs-ic .d{stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset .7s cubic-bezier(.5,0,.2,1) calc(.25s + var(--i)*.12s)}
    .rs-ct.is-in .rs-ic .d{stroke-dashoffset:0}
    .rs-ic .aw,.rs-ic .dr,.rs-ic .b,.rs-ic .ar{transform-box:fill-box}
    .rs-ic .aw{transform-origin:50% 0}
    .rs-ic .dr{transform-origin:0 100%}
    .rs-ic .b{transform-origin:50% 100%}
    .rs-ic .ar{transform-origin:0 100%}
    @keyframes rs-ic-aw{0%,100%{transform:none}30%{transform:scaleY(1.35) translateY(.4px)}60%{transform:scaleY(.85)}}
    @keyframes rs-ic-dr{0%,100%{transform:none}45%{transform:scaleX(.25)}}
    @keyframes rs-ic-b{0%{transform:scaleY(.25)}65%{transform:scaleY(1.12)}100%{transform:none}}
    @keyframes rs-ic-ar{0%,100%{transform:none}50%{transform:translate(1.6px,-1.6px)}}
    .rs-ct__opt:hover .rs-ic .aw,.rs-ct__opt input:checked+span .rs-ic .aw{animation:rs-ic-aw .7s cubic-bezier(.3,.7,.3,1.3)}
    .rs-ct__opt:hover .rs-ic .dr,.rs-ct__opt input:checked+span .rs-ic .dr{animation:rs-ic-dr .8s cubic-bezier(.4,0,.2,1) .1s}
    .rs-ct__opt:hover .rs-ic .b,.rs-ct__opt input:checked+span .rs-ic .b{animation:rs-ic-b .7s cubic-bezier(.3,.7,.3,1.4) both}
    .rs-ct__opt:hover .rs-ic .b:nth-of-type(3),.rs-ct__opt input:checked+span .rs-ic .b:nth-of-type(3){animation-delay:.08s}
    .rs-ct__opt:hover .rs-ic .b:nth-of-type(4),.rs-ct__opt input:checked+span .rs-ic .b:nth-of-type(4){animation-delay:.16s}
    .rs-ct__opt:hover .rs-ic .ar,.rs-ct__opt input:checked+span .rs-ic .ar{animation:rs-ic-ar .6s cubic-bezier(.3,.7,.3,1.3) .25s}
    .rs-ct__opt input:checked+span .rs-ic{filter:drop-shadow(0 0 6px rgba(202,252,1,.45))}
    .rs-ct__opt input:focus-visible+span{outline:2px solid #CAFC01;outline-offset:3px}
    .rs-ct__f{position:relative;display:block;margin:0}
    .rs-ct .rs-ct__form .rs-ct__f input.rs-ct__i,.rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i,.rs-ct .rs-ct__form .rs-ct__f input.rs-ct__i:focus,.rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i:focus,.rs-ct .rs-ct__form .rs-ct__f input.rs-ct__i:hover,.rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i:hover{display:block;width:100%;height:60px;margin:0;padding:24px 16px 6px;border:1px solid rgba(255,255,255,.14)!important;border-radius:16px!important;outline:0!important;background:rgba(255,255,255,.035)!important;background-color:rgba(255,255,255,.035)!important;color:#fff!important;-webkit-text-fill-color:#fff;caret-color:#CAFC01;font-family:var(--tal);font-size:16px;line-height:1.4;box-shadow:none!important;transition:border-color .25s,box-shadow .25s,background-color .25s;-webkit-appearance:none;appearance:none}
    .rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i,.rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i:focus,.rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i:hover{height:112px;padding-top:28px;resize:none}
    .rs-ct .rs-ct__form .rs-ct__f input.rs-ct__i:focus,.rs-ct .rs-ct__form .rs-ct__f textarea.rs-ct__i:focus{border-color:#CAFC01!important;background-color:rgba(202,252,1,.05)!important;box-shadow:0 0 0 4px rgba(202,252,1,.12)!important}
    .rs-ct .rs-ct__form .rs-ct__f input.rs-ct__i:-webkit-autofill,.rs-ct .rs-ct__form .rs-ct__f input.rs-ct__i:-webkit-autofill:focus{-webkit-box-shadow:0 0 0 80px #171c0b inset!important;box-shadow:0 0 0 80px #171c0b inset!important;-webkit-text-fill-color:#fff!important}
    .rs-ct .rs-ct__i::placeholder{color:transparent;-webkit-text-fill-color:transparent}
    .rs-ct .rs-ct__i.is-ltr{direction:ltr;text-align:right}
    .rs-ct .rs-ct__f label.rs-ct__l{position:absolute;top:19px;inset-inline-start:17px;margin:0;padding:0;font-size:16px;font-weight:400;color:#9aa08a;pointer-events:none;transform-origin:100% 0;transition:transform .22s cubic-bezier(.2,.8,.2,1),color .22s}
    .rs-ct .rs-ct__i:focus+label.rs-ct__l,.rs-ct .rs-ct__i:not(:placeholder-shown)+label.rs-ct__l{transform:translateY(-11px) scale(.76);color:#CAFC01}
    .rs-ct__f.is-err .rs-ct__i{border-color:#ff7a66!important;box-shadow:0 0 0 4px rgba(255,122,102,.12)!important}
    .rs-ct .rs-ct__e{display:none;margin:6px 4px 0;font-size:13px;line-height:1.4;color:#ff9a8a}
    .rs-ct .is-err .rs-ct__e{display:block}
    .rs-ct__ok{position:relative;display:flex;align-items:flex-start;gap:11px;cursor:pointer;font-size:13.5px;line-height:1.5;color:#b9bea9;margin:2px 0 0}
    .rs-ct .rs-ct__ok input{position:absolute;opacity:0;width:1px;height:1px;margin:0}
    .rs-ct__ok b{flex:none;display:grid;place-items:center;width:22px;height:22px;margin-top:-1px;border-radius:7px;border:1px solid rgba(255,255,255,.3);background:rgba(255,255,255,.04);color:transparent;transition:background .2s,border-color .2s,color .2s,transform .25s cubic-bezier(.2,.9,.3,1.7)}
    .rs-ct__ok b svg{width:13px;height:13px}
    .rs-ct__ok input:checked+b{background:#CAFC01;border-color:#CAFC01;color:#101400;transform:scale(1.08)}
    .rs-ct__ok input:focus-visible+b{outline:2px solid #CAFC01;outline-offset:3px}
    .rs-ct__ok.is-err b{border-color:#ff7a66}
    .rs-ct .rs-ct__ok a,.rs-ct .rs-ct__ok a:visited{color:inherit;text-decoration:underline}
    .rs-ct .rs-ct__ok a:hover{color:#CAFC01}
    .rs-ct .rs-ct__form button.rs-ct__go,.rs-ct .rs-ct__form button.rs-ct__go:hover,.rs-ct .rs-ct__form button.rs-ct__go:focus{position:relative;display:flex;align-items:center;justify-content:center;gap:10px;width:100%;height:60px;margin:6px 0 0;padding:0 26px;border:0!important;border-radius:999px!important;background:linear-gradient(180deg,#e6ff5c,#CAFC01 55%,#b4e000)!important;color:#101400!important;font-family:var(--tal);font-weight:600;font-size:17px;cursor:pointer;box-shadow:0 5px 0 #7f9d00,0 16px 30px rgba(202,252,1,.26),inset 0 1px 0 rgba(255,255,255,.6)!important;transition:transform .15s,box-shadow .15s,opacity .2s;-webkit-appearance:none;appearance:none}
    .rs-ct .rs-ct__form button.rs-ct__go:hover{transform:translateY(-2px);box-shadow:0 7px 0 #7f9d00,0 20px 36px rgba(202,252,1,.34),inset 0 1px 0 rgba(255,255,255,.6)!important}
    .rs-ct .rs-ct__form button.rs-ct__go:active{transform:translateY(4px);box-shadow:0 1px 0 #7f9d00,0 6px 14px rgba(202,252,1,.2),inset 0 1px 0 rgba(255,255,255,.6)!important}
    .rs-ct__go svg{width:18px;height:18px;transition:transform .2s}
    .rs-ct__go:hover svg{transform:translateX(-4px)}
    .rs-ct__go .sp{display:none;width:20px;height:20px;border-radius:50%;border:2.5px solid rgba(16,20,0,.25);border-top-color:#101400;animation:rs-ct-spin .7s linear infinite}
    .rs-ct__form.is-busy .rs-ct__go{pointer-events:none;opacity:.85}
    .rs-ct__form.is-busy .rs-ct__go .sp{display:block}
    .rs-ct__form.is-busy .rs-ct__go svg{display:none}
    @keyframes rs-ct-spin{to{transform:rotate(360deg)}}
    .rs-ct .rs-ct__msg{display:none;grid-column:1/-1;margin:0;padding:12px 14px;border-radius:12px;background:rgba(255,122,102,.1);border:1px solid rgba(255,122,102,.4);color:#ffb3a6;font-size:14.5px;line-height:1.5}
    .rs-ct .rs-ct__msg.is-on{display:block}
    .rs-ct__done{display:none;position:relative;text-align:center;padding:46px 10px 40px}
    .rs-ct__body.is-done form.rs-ct__form{display:none}
    .rs-ct__body.is-done .rs-ct__done{display:block;animation:rs-ct-in .6s cubic-bezier(.2,.8,.2,1)}
    @keyframes rs-ct-in{from{opacity:0;transform:translateY(16px) scale(.97)}}
    .rs-ct__ring{position:relative;display:grid;place-items:center;width:92px;height:92px;margin:0 auto 26px;border-radius:50%;background:linear-gradient(180deg,#e6ff5c,#b4e000);color:#101400;box-shadow:0 6px 0 #7f9d00,0 24px 50px rgba(202,252,1,.35),inset 0 2px 0 rgba(255,255,255,.6)}
    .rs-ct__ring::before,.rs-ct__ring::after{content:"";position:absolute;inset:-2px;border-radius:50%;border:2px solid rgba(202,252,1,.6);opacity:0}
    .rs-ct__body.is-done .rs-ct__ring::before{animation:rs-ct-burst 1.1s ease-out .15s}
    .rs-ct__body.is-done .rs-ct__ring::after{animation:rs-ct-burst 1.1s ease-out .4s}
    @keyframes rs-ct-burst{from{opacity:.9;transform:scale(1)}to{opacity:0;transform:scale(2.1)}}
    .rs-ct__ring svg{width:44px;height:44px;fill:none;stroke:currentColor;stroke-width:3;stroke-linecap:round;stroke-linejoin:round}
    .rs-ct__ring svg path{stroke-dasharray:1;stroke-dashoffset:1}
    .rs-ct__body.is-done .rs-ct__ring svg path{animation:rs-ct-draw .55s cubic-bezier(.5,0,.2,1) .25s forwards}
    @keyframes rs-ct-draw{to{stroke-dashoffset:0}}
    .rs-ct .rs-ct__done h3{font-family:var(--nos);font-weight:900;font-size:28px;line-height:1.2;color:#fff;margin:0;padding:0}
    .rs-ct .rs-ct__done p{font-size:17px;line-height:1.7;color:#c9cdbb;margin:14px auto 0;max-width:380px}
    @media (max-width:980px){
      .rs-ct{padding:64px 0 76px}
      .rs-ct__in{grid-template-columns:1fr;gap:24px;padding:0 16px}
      .rs-ct__txt{text-align:center}
      .rs-ct .rs-ct__p{margin-inline:auto;font-size:16.5px}
      .rs-ct h2.rs-ct__h{font-size:30px}
      .rs-ct .rs-ct__p{font-size:15.5px;line-height:1.6;margin-top:14px}
      .rs-ct__pts{display:flex;flex-wrap:wrap;justify-content:center;gap:6px 14px;margin-top:16px}
      .rs-ct__pts li{gap:5px;font-size:13.5px;color:#dfe3d2}
      .rs-ct__pts li i{width:16px;height:16px;border-radius:5px;box-shadow:none}
      .rs-ct__pts li i svg{width:10px;height:10px}
      .rs-ct__txt>.rs-ct__alt{display:none}
      .rs-ct__alt--m{display:flex!important;justify-content:center;gap:8px 16px;margin-top:6px;padding-top:18px;font-size:14px}
      .rs-ct__body{padding:28px 18px 24px;border-radius:21px}
      .rs-ct__card{border-radius:22px}
      .rs-ct form.rs-ct__form{grid-template-columns:1fr}
      .rs-ct__opt span{padding:14px 12px;font-size:14.5px;gap:9px}
      .rs-ct__opt span svg{width:22px;height:22px}
    }
    @media (hover:none),(max-width:980px){
      .rs-ct__stage{perspective:none}
      .rs-ct__card{transform:translateY(24px)}
      .rs-ct.is-in .rs-ct__card,.rs-ct.is-tilt .rs-ct__card{transform:none}
    }
    @media (prefers-reduced-motion:reduce){.rs-ic .d{stroke-dashoffset:0;transition:none}.rs-ic .aw,.rs-ic .dr,.rs-ic .b,.rs-ic .ar{animation:none!important}.rs-ct .rs-ct__txt,.rs-ct .rs-ct__card{opacity:1;transform:none;transition:none}.rs-ct__go .sp{animation-duration:1.4s}}
  </style>
  <div id="form" class="rs-ct__anchor" aria-hidden="true"></div><div class="rs-ct__glow" aria-hidden="true"></div>
  <div class="rs-ct__in">
    <div class="rs-ct__txt">
      <p class="rs-ct__k">שיחת ייעוץ ראשונית</p>
      <h2 class="rs-ct__h">בואו נדבר על <em>החנות שלכם.</em></h2>
      <p class="rs-ct__p">השאירו פרטים ואחזור אליכם באופן אישי. נבדוק יחד מה באמת מתאים לעסק שלכם, בלי התחייבות.</p>
      <ul class="rs-ct__pts">
        <li><i><svg viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></i>מענה אישי ממני</li>
        <li><i><svg viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></i>בלי התחייבות</li>
        <li><i><svg viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></i>המידע נשאר חסוי</li>
      </ul>
      <div class="rs-ct__alt"><span>מעדיפים לדבר ישר?</span><a href="https://wa.me/972527460037" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.3-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2c0 1.3.9 2.5 1 2.7.1.2 1.8 2.8 4.4 3.9 1.6.7 2.3.8 3.1.6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2-.1-.1-.2-.2-.5-.3z"/></svg>שיחה בוואטסאפ</a><a href="tel:0527460037" dir="ltr">052-7460037</a></div>
    </div>
    <div class="rs-ct__stage"><div class="rs-ct__card"><div class="rs-ct__body">
      <div class="rs-ct__prog" aria-hidden="true"><i></i></div>
      <form class="rs-ct__form" novalidate>
        <div class="rs-ct__full" role="radiogroup" aria-labelledby="rs-ct-lg"><span class="rs-ct__lg" id="rs-ct-lg">מה מעניין אתכם?</span><div class="rs-ct__opts"><label class="rs-ct__opt"><input type="radio" name="rs-ct-int" value="בניית חנות ווקומרס"><span><svg class="rs-ic rs-ic--shop" viewBox="0 0 24 24" aria-hidden="true"><path class="d" pathLength="1" style="--i:0" d="M4 9.500v10h16v-10"/><path class="d" pathLength="1" style="--i:1" d="M4 9.500 5.300 4.500h13.400L20 9.500"/><path class="d aw" pathLength="1" style="--i:2" d="M4 9.500c0 1.500 1.200 2.500 2.700 2.500s2.600-1 2.600-2.500c0 1.500 1.200 2.500 2.700 2.500s2.700-1 2.700-2.500c0 1.500 1.100 2.500 2.600 2.500S20 11 20 9.500"/><path class="d dr" pathLength="1" style="--i:3" d="M10 19.500v-4.500h4v4.500"/></svg>חנות חדשה</span></label><label class="rs-ct__opt"><input type="radio" name="rs-ct-int" value="שיפור המרות לחנות"><span><svg class="rs-ic rs-ic--grow" viewBox="0 0 24 24" aria-hidden="true"><path class="d" pathLength="1" style="--i:0" d="M4 19.500h16"/><path class="d b" pathLength="1" style="--i:1" d="M6.500 16v-4"/><path class="d b" pathLength="1" style="--i:2" d="M11 16V8.500"/><path class="d b" pathLength="1" style="--i:3" d="M15.500 16v-6"/><g class="ar"><path class="d" pathLength="1" style="--i:4" d="M19 5.500l-6.500 6"/><path class="d" pathLength="1" style="--i:5" d="M14 5.500h5v5"/></g></svg>שיפור חנות קיימת</span></label></div></div>
        <div class="rs-ct__f rs-ct__full" data-f="name"><input class="rs-ct__i" id="rs-ct-name" type="text" autocomplete="name" placeholder=" "><label class="rs-ct__l" for="rs-ct-name">שם מלא</label><div class="rs-ct__e"></div></div>
        <div class="rs-ct__f" data-f="phone"><input class="rs-ct__i is-ltr" id="rs-ct-phone" type="tel" inputmode="tel" autocomplete="tel" placeholder=" " required><label class="rs-ct__l" for="rs-ct-phone">טלפון</label><div class="rs-ct__e"></div></div>
        <div class="rs-ct__f" data-f="email"><input class="rs-ct__i is-ltr" id="rs-ct-email" type="email" inputmode="email" autocomplete="email" placeholder=" " required><label class="rs-ct__l" for="rs-ct-email">מייל</label><div class="rs-ct__e"></div></div>
        <div class="rs-ct__f rs-ct__full" data-f="message"><textarea class="rs-ct__i" id="rs-ct-msg" rows="3" placeholder=" "></textarea><label class="rs-ct__l" for="rs-ct-msg">כמה מילים על החנות (לא חובה)</label><div class="rs-ct__e"></div></div>
        <div class="rs-ct__full"><label class="rs-ct__ok" data-f="field_0852e48"><input type="checkbox" id="rs-ct-ok" required><b><svg viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8.500l3.200 3.200L13 5" fill="none" stroke="currentColor" stroke-width="2.600" stroke-linecap="round" stroke-linejoin="round"/></svg></b><span>אני מאשר/ת כי קראתי את <a href="https://ranshtam.com/privacy-policy/" target="_blank" rel="noopener">מדיניות הפרטיות</a> של האתר.</span></label></div>
        <div class="rs-ct__msg" role="alert"></div>
        <div class="rs-ct__full"><button class="rs-ct__go" type="submit"><span class="rs-ct__gt">לקבלת שיחת ייעוץ ראשונית</span><svg viewBox="0 0 16 16" aria-hidden="true"><path d="M13 8H3m4-4L3 8l4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><i class="sp" aria-hidden="true"></i></button></div><div class="rs-ct__full rs-ct__alt rs-ct__alt--m"><span>מעדיפים לדבר ישר?</span><a href="https://wa.me/972527460037" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.3-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2c0 1.3.9 2.5 1 2.7.1.2 1.8 2.8 4.4 3.9 1.6.7 2.3.8 3.1.6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2-.1-.1-.2-.2-.5-.3z"/></svg>שיחה בוואטסאפ</a><a href="tel:0527460037" dir="ltr">052-7460037</a></div>
      </form>
      <div class="rs-ct__done" role="status" aria-live="polite"><div class="rs-ct__ring"><svg viewBox="0 0 24 24" aria-hidden="true"><path pathLength="1" d="M5 12.500l4.500 4.500L19 7.500"/></svg></div><h3>קיבלתי, תודה.</h3><p>אחזור אליכם באופן אישי בהקדם. אם זה דחוף, אפשר גם לכתוב לי בוואטסאפ.</p></div>
    </div></div></div>
  </div>
  <script nowprocket data-nowprocket="1">
  (function(){
    var s=document.currentScript, sec=(s?s.closest:0)?s.closest('.rs-ct'):null;
    if(!sec){var all=document.querySelectorAll('.rs-ct');sec=all[all.length-1];}
    if(!sec)return; if(sec.dataset.rsInit)return; sec.dataset.rsInit='1';
    var card=sec.querySelector('.rs-ct__card'), body=sec.querySelector('.rs-ct__body'), form=sec.querySelector('.rs-ct__form'), msg=sec.querySelector('.rs-ct__msg'), prog=sec.querySelector('.rs-ct__prog'), gt=sec.querySelector('.rs-ct__gt');
    var el={name:sec.querySelector('#rs-ct-name'),phone:sec.querySelector('#rs-ct-phone'),email:sec.querySelector('#rs-ct-email'),message:sec.querySelector('#rs-ct-msg'),ok:sec.querySelector('#rs-ct-ok')};
    var red=window.matchMedia?window.matchMedia('(prefers-reduced-motion: reduce)').matches:false, fine=window.matchMedia?window.matchMedia('(hover: hover) and (pointer: fine)').matches:false;
    if('IntersectionObserver' in window){var io=new IntersectionObserver(function(en){if(en[0].isIntersecting){sec.classList.add('is-in');io.disconnect();setTimeout(function(){sec.classList.add('is-tilt');},1100);}},{threshold:.15});io.observe(sec);}else{sec.classList.add('is-in');}
    var raf=0,px=.5,py=0;
    function paint(){raf=0;card.style.setProperty('--gx',(px*100).toFixed(1)+'%');card.style.setProperty('--gy',(py*100).toFixed(1)+'%');body.style.setProperty('--gx',(px*100).toFixed(1)+'%');body.style.setProperty('--gy',(py*100).toFixed(1)+'%');if(fine){if(!red){card.style.setProperty('--rx',((.5-py)*4).toFixed(2)+'deg');card.style.setProperty('--ry',((px-.5)*5).toFixed(2)+'deg');}}}
    card.addEventListener('pointermove',function(e){var r=card.getBoundingClientRect();px=(e.clientX-r.left)/Math.max(1,r.width);py=(e.clientY-r.top)/Math.max(1,r.height);if(!raf)raf=requestAnimationFrame(paint);},{passive:true});
    card.addEventListener('pointerleave',function(){card.style.setProperty('--rx','0deg');card.style.setProperty('--ry','0deg');},{passive:true});
    var CFG={post:'22157',form:'8d37214',q:'22157',ref:'home'};
    /* Inner pages: take over the page's own Elementor form (ids, options, texts) and retire the old block. */
    (function(){
      var oldF=document.querySelector('.rs-form-card form.elementor-form'); if(!oldF)return;
      function v(n){var i=oldF.querySelector('input[name="'+n+'"]');return i?i.value:'';}
      CFG.post=v('post_id')||CFG.post; CFG.form=v('form_id')||CFG.form; CFG.q=v('queried_id')||CFG.post; CFG.ref=v('form_fields[ref]')||'website';
      var card=oldF.closest('.rs-form-card'), wrap=card?card.closest('.e-con.e-parent'):null, sel=oldF.querySelector('select'), opts=sec.querySelector('.rs-ct__opts');
      if(sel){ var html=''; [].forEach.call(sel.options,function(o){ if(!o.value)return; var l=document.createElement('label'); l.className='rs-ct__opt'; var i=document.createElement('input'); i.type='radio'; i.name='rs-ct-int'; i.value=o.value; if(o.selected)i.setAttribute('checked','checked'); var sp=document.createElement('span'); sp.textContent=o.textContent.trim(); l.appendChild(i); l.appendChild(sp); html+=l.outerHTML; }); if(html){opts.innerHTML=html;opts.classList.add('is-chips');} }
      if(card){
        var h=card.querySelector('h2,h3,.elementor-heading-title:not(p)'), ps=card.querySelectorAll('.elementor-widget-text-editor p, .elementor-widget-heading p'), t, pre='בואו נדבר על ', H=sec.querySelector('.rs-ct__h'), P=sec.querySelector('.rs-ct__p');
        [].forEach.call(card.querySelectorAll('.elementor-heading-title'),function(e){var x=e.textContent.trim();if(x.indexOf('//')===0)return;if(!t){if(x.length>8)t=x;}});
        if(t){H.textContent='';if(t.indexOf(pre)===0){H.appendChild(document.createTextNode(pre));var em=document.createElement('em');em.textContent=t.slice(pre.length);H.appendChild(em);}else{H.textContent=t;}}
        var long=''; [].forEach.call(card.querySelectorAll('p,.elementor-widget-text-editor'),function(e){var x=e.textContent.trim();if(x.indexOf('//')===0)return;if(x===t)return;if(!long){if(x.length>40)long=x;}}); if(long)P.textContent=long;
        if(CFG.post!=='25949'){var ml=sec.querySelector('label[for="rs-ct-msg"]');if(ml)ml.textContent='כמה מילים על מה שאתם צריכים (לא חובה)';}
        if(card.id==='form')card.removeAttribute('id');
      }
      if(wrap){wrap.style.display='none';}else if(card){card.style.display='none';}
      if(location.hash==='#form'){setTimeout(function(){sec.scrollIntoView({block:'start'});},300);}
    })();
    function interest(){var r=form.querySelector('input[name="rs-ct-int"]:checked');return r?r.value:'';}
    function digits(v){return String(v||'').replace(/[^0-9+]/g,'');}
    function progress(){var n=0;if(interest())n++;if(el.name.value.trim())n++;if(digits(el.phone.value).length>8)n++;if(/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(el.email.value.trim()))n++;if(el.ok.checked)n++;prog.style.setProperty('--pg',(n/5).toFixed(2));}
    function setErr(k,t){var w=form.querySelector('[data-f="'+k+'"]');if(!w)return false;w.classList.toggle('is-err',!!t);var p=w.querySelector('.rs-ct__e');if(p)p.textContent=t||'';return true;}
    function clearAll(){['name','phone','email','message','field_0852e48'].forEach(function(k){setErr(k,'');});msg.classList.remove('is-on');msg.textContent='';}
    form.addEventListener('input',function(e){var w=e.target.closest('[data-f]');if(w)setErr(w.getAttribute('data-f'),'');progress();});
    form.addEventListener('change',progress);
    form.addEventListener('submit',function(e){
      e.preventDefault(); if(form.classList.contains('is-busy'))return; clearAll();
      var ph=digits(el.phone.value), em=el.email.value.trim(), bad=null;
      if(ph.length<9){setErr('phone','צריך מספר טלפון תקין');bad=bad||el.phone;}
      if(!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(em)){setErr('email','צריך כתובת מייל תקינה');bad=bad||el.email;}
      if(!el.ok.checked){setErr('field_0852e48','x');bad=bad||el.ok;}
      if(bad){bad.focus();return;}
      var fd=new FormData();
      fd.append('action','elementor_pro_forms_send_form');fd.append('post_id',CFG.post);fd.append('form_id',CFG.form);fd.append('queried_id',CFG.q);fd.append('referer_title',document.title);fd.append('referrer',location.href);
      fd.append('form_fields[name]',el.name.value.trim());fd.append('form_fields[email]',em);fd.append('form_fields[phone]',ph);fd.append('form_fields[interestedabout]',interest());fd.append('form_fields[message]',el.message.value.trim());fd.append('form_fields[ref]',CFG.ref);fd.append('form_fields[field_0852e48]','on');
      form.classList.add('is-busy'); var keep=gt.textContent; gt.textContent='שולח';
      function fail(t){form.classList.remove('is-busy');gt.textContent=keep;msg.textContent=t;msg.classList.add('is-on');}
      fetch('/wp-admin/admin-ajax.php',{method:'POST',body:fd,credentials:'same-origin'}).then(function(r){return r.json();}).then(function(j){
        if(j.success){form.classList.remove('is-busy');body.classList.add('is-done');prog.style.setProperty('--pg','1');sec.scrollIntoView({block:'center',behavior:red?'auto':'smooth'});var ru=((j.data||{}).data||{}).redirect_url;if(ru){setTimeout(function(){window.location.href=ru;},1400);}return;}
        var er=(j.data?j.data.errors:null)||{},any=false,map={phone:'צריך מספר טלפון תקין, ספרות בלבד',email:'צריך כתובת מייל תקינה',field_0852e48:'x'};
        Object.keys(er).forEach(function(k){if(!k)return;if(setErr(k,map[k]||er[k]))any=true;});
        fail(any?'יש שדה שצריך לתקן.':'השליחה לא הצליחה. אפשר לנסות שוב או לכתוב לי בוואטסאפ.');
      }).catch(function(){fail('השליחה לא הצליחה. אפשר לנסות שוב או לכתוב לי בוואטסאפ.');});
    });
    sec.__ct={fill:function(o){Object.keys(o).forEach(function(k){if(el[k]){if(k==='ok')el[k].checked=!!o[k];else el[k].value=o[k];}});progress();},done:function(){body.classList.add('is-done');}};
  })();
  </script>
</section>
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
