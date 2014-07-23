/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'PictoPro-Outline\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-outline-wizard-wand' : '&#xe000;',
			'icon-outline-wireframe-three-columns' : '&#xe001;',
			'icon-outline-wireframe-matrix' : '&#xe002;',
			'icon-outline-wireframe-lines' : '&#xe003;',
			'icon-outline-wireframe-horizontal-vertical-columns' : '&#xe004;',
			'icon-outline-wine-cup' : '&#xe005;',
			'icon-outline-wine-bottles' : '&#xe006;',
			'icon-outline-wine-bottle-cup' : '&#xe007;',
			'icon-outline-wifi' : '&#xe008;',
			'icon-outline-web-camera' : '&#xe009;',
			'icon-outline-watches' : '&#xe00a;',
			'icon-outline-warning' : '&#xe00b;',
			'icon-outline-warehouse' : '&#xe00c;',
			'icon-outline-wallet' : '&#xe00d;',
			'icon-outline-volume-slider' : '&#xe00e;',
			'icon-outline-usb' : '&#xe00f;',
			'icon-outline-up-down-arrow' : '&#xe010;',
			'icon-outline-unlock' : '&#xe011;',
			'icon-outline-umbrella-rain' : '&#xe012;',
			'icon-outline-umbrella' : '&#xe013;',
			'icon-outline-twitter' : '&#xe014;',
			'icon-outline-trurn-off' : '&#xe015;',
			'icon-outline-truck' : '&#xe016;',
			'icon-outline-trhee-leafy' : '&#xe017;',
			'icon-outline-tree-conifer' : '&#xe018;',
			'icon-outline-train' : '&#xe019;',
			'icon-outline-thumb-up' : '&#xe01a;',
			'icon-outline-thumb-down' : '&#xe01b;',
			'icon-outline-thermometer-low' : '&#xe01c;',
			'icon-outline-thermometer-high' : '&#xe01d;',
			'icon-outline-test-tube' : '&#xe01e;',
			'icon-outline-television' : '&#xe01f;',
			'icon-outline-technology-screen-size' : '&#xe020;',
			'icon-outline-technology-screen-resolution' : '&#xe021;',
			'icon-outline-technology-processor' : '&#xe022;',
			'icon-outline-technology-memory' : '&#xe023;',
			'icon-outline-technology-internal-memory' : '&#xe024;',
			'icon-outline-teapot' : '&#xe025;',
			'icon-outline-tag' : '&#xe026;',
			'icon-outline-sun-thin' : '&#xe027;',
			'icon-outline-sun-cloud-thin' : '&#xe028;',
			'icon-outline-sun-cloud' : '&#xe029;',
			'icon-outline-sun' : '&#xe02a;',
			'icon-outline-stop-watch' : '&#xe02b;',
			'icon-outline-steering-wheel' : '&#xe02c;',
			'icon-outline-star-plus' : '&#xe02d;',
			'icon-outline-star-minus' : '&#xe02e;',
			'icon-outline-star' : '&#xe02f;',
			'icon-outline-stamp' : '&#xe030;',
			'icon-outline-speaker-sound' : '&#xe031;',
			'icon-outline-speaker-mute' : '&#xe032;',
			'icon-outline-speaker' : '&#xe033;',
			'icon-outline-socket' : '&#xe034;',
			'icon-outline-snowflake' : '&#xe035;',
			'icon-outline-smile-sad' : '&#xe036;',
			'icon-outline-smile-laugh' : '&#xe037;',
			'icon-outline-smile-happy' : '&#xe038;',
			'icon-outline-smartphone-qwerty' : '&#xe039;',
			'icon-outline-smartphone' : '&#xe03a;',
			'icon-outline-school-ring' : '&#xe03b;',
			'icon-outline-shower' : '&#xe03c;',
			'icon-outline-shirt' : '&#xe03d;',
			'icon-outline-ship' : '&#xe03e;',
			'icon-outline-shield' : '&#xe03f;',
			'icon-outline-share' : '&#xe040;',
			'icon-outline-script' : '&#xe041;',
			'icon-outline-scissors' : '&#xe042;',
			'icon-outline-rss' : '&#xe043;',
			'icon-outline-rows' : '&#xe044;',
			'icon-outline-right-arrow-small' : '&#xe045;',
			'icon-outline-right-arrow-circle' : '&#xe046;',
			'icon-outline-right-arrow' : '&#xe047;',
			'icon-outline-ribbon' : '&#xe048;',
			'icon-outline-retina' : '&#xe049;',
			'icon-outline-refresh' : '&#xe04a;',
			'icon-outline-recycle-bin' : '&#xe04b;',
			'icon-outline-rectangle-up-arrow' : '&#xe04c;',
			'icon-outline-rays' : '&#xe04d;',
			'icon-outline-radio-button-unchecked' : '&#xe04e;',
			'icon-outline-radio-button-checked' : '&#xe04f;',
			'icon-outline-radio' : '&#xe050;',
			'icon-outline-quotes' : '&#xe051;',
			'icon-outline-question-mark' : '&#xe052;',
			'icon-outline-quatrefoil' : '&#xe053;',
			'icon-outline-puzzle-plus' : '&#xe054;',
			'icon-outline-puzzle' : '&#xe055;',
			'icon-outline-pushchair' : '&#xe056;',
			'icon-outline-profile-tick' : '&#xe057;',
			'icon-outline-profile-rays' : '&#xe058;',
			'icon-outline-profile-plus' : '&#xe059;',
			'icon-outline-profile-minus' : '&#xe05a;',
			'icon-outline-profile-male' : '&#xe05b;',
			'icon-outline-profile-checkbox' : '&#xe05c;',
			'icon-outline-profile-female' : '&#xe05d;',
			'icon-outline-profile-cross' : '&#xe05e;',
			'icon-outline-printer' : '&#xe05f;',
			'icon-outline-pointer-plus' : '&#xe060;',
			'icon-outline-pointer-pin' : '&#xe061;',
			'icon-outline-pointer-minus' : '&#xe062;',
			'icon-outline-pointer' : '&#xe063;',
			'icon-outline-plus' : '&#xe064;',
			'icon-outline-plug' : '&#xe065;',
			'icon-outline-play-circle' : '&#xe066;',
			'icon-outline-pin' : '&#xe067;',
			'icon-outline-piggy-bank' : '&#xe068;',
			'icon-outline-photo-camera' : '&#xe069;',
			'icon-outline-phone-circle' : '&#xe06a;',
			'icon-outline-percent' : '&#xe06b;',
			'icon-outline-pen-tip' : '&#xe06c;',
			'icon-outline-pencil-ruler' : '&#xe06d;',
			'icon-outline-pencil' : '&#xe06e;',
			'icon-outline-pen' : '&#xe06f;',
			'icon-outline-pants' : '&#xe070;',
			'icon-outline-paint-brush' : '&#xe071;',
			'icon-outline-pacman' : '&#xe072;',
			'icon-outline-order' : '&#xe073;',
			'icon-outline-orange-slice' : '&#xe074;',
			'icon-outline-note-simple' : '&#xe075;',
			'icon-outline-note-double' : '&#xe076;',
			'icon-outline-notebook' : '&#xe077;',
			'icon-outline-new-window' : '&#xe078;',
			'icon-outline-newspaper' : '&#xe079;',
			'icon-outline-network' : '&#xe07a;',
			'icon-outline-music-player' : '&#xe07b;',
			'icon-outline-movie-disk' : '&#xe07c;',
			'icon-outline-mouse' : '&#xe07d;',
			'icon-outline-mountains' : '&#xe07e;',
			'icon-outline-mobile-phone' : '&#xe07f;',
			'icon-outline-minus' : '&#xe080;',
			'icon-outline-microphone-stand' : '&#xe081;',
			'icon-outline-microphone' : '&#xe082;',
			'icon-outline-message-two-bubbles' : '&#xe083;',
			'icon-outline-message-bubble-text' : '&#xe084;',
			'icon-outline-message-bubbles-rounded' : '&#xe085;',
			'icon-outline-message-bubbles' : '&#xe086;',
			'icon-outline-message-bubble-rounded' : '&#xe087;',
			'icon-outline-message-bubble-plus' : '&#xe088;',
			'icon-outline-message-bubble-minus' : '&#xe089;',
			'icon-outline-message-bubble-cloud' : '&#xe08a;',
			'icon-outline-message-bubble' : '&#xe08b;',
			'icon-outline-megaphone' : '&#xe08c;',
			'icon-outline-mark-tick' : '&#xe08d;',
			'icon-outline-mark-male' : '&#xe08e;',
			'icon-outline-mark-female' : '&#xe08f;',
			'icon-outline-mark-cross' : '&#xe090;',
			'icon-outline-map-pointer' : '&#xe091;',
			'icon-outline-map' : '&#xe092;',
			'icon-outline-mail-open' : '&#xe093;',
			'icon-outline-mail' : '&#xe094;',
			'icon-outline-magnifier-plus' : '&#xe095;',
			'icon-outline-magnifier-minus' : '&#xe096;',
			'icon-outline-magnifier-circle' : '&#xe097;',
			'icon-outline-magnifier' : '&#xe098;',
			'icon-outline-luggage' : '&#xe099;',
			'icon-outline-loop-tape' : '&#xe09a;',
			'icon-outline-loop' : '&#xe09b;',
			'icon-outline-lock' : '&#xe09c;',
			'icon-outline-link' : '&#xe09d;',
			'icon-outline-light-bulb-rays' : '&#xe09e;',
			'icon-outline-light-bulb' : '&#xe09f;',
			'icon-outline-left-arrow-small' : '&#xe0a0;',
			'icon-outline-left-arrow-circle' : '&#xe0a1;',
			'icon-outline-left-arrow' : '&#xe0a2;',
			'icon-outline-leaf' : '&#xe0a3;',
			'icon-outline-lcd' : '&#xe0a4;',
			'icon-outline-knob-volume' : '&#xe0a5;',
			'icon-outline-knob' : '&#xe0a6;',
			'icon-outline-key-old' : '&#xe0a7;',
			'icon-outline-keyboard' : '&#xe0a8;',
			'icon-outline-key' : '&#xe0a9;',
			'icon-outline-information-sign' : '&#xe0aa;',
			'icon-outline-information' : '&#xe0ab;',
			'icon-outline-infinitive' : '&#xe0ac;',
			'icon-outline-inbox' : '&#xe0ad;',
			'icon-outline-image' : '&#xe0ae;',
			'icon-outline-id-card' : '&#xe0af;',
			'icon-outline-chef-hat' : '&#xe0b0;',
			'icon-outline-checkbox-unchecked' : '&#xe0b1;',
			'icon-outline-checkbox-checked' : '&#xe0b2;',
			'icon-outline-house' : '&#xe0b3;',
			'icon-outline-high-definition' : '&#xe0b4;',
			'icon-outline-heart-rounded' : '&#xe0b5;',
			'icon-outline-heart-plus' : '&#xe0b6;',
			'icon-outline-heart-minus' : '&#xe0b7;',
			'icon-outline-heart' : '&#xe0b8;',
			'icon-outline-headphones-microphone' : '&#xe0b9;',
			'icon-outline-headphones' : '&#xe0ba;',
			'icon-outline-hat' : '&#xe0bb;',
			'icon-outline-guitar' : '&#xe0bc;',
			'icon-outline-group-two' : '&#xe0bd;',
			'icon-outline-group-three' : '&#xe0be;',
			'icon-outline-graph-uptrend' : '&#xe0bf;',
			'icon-outline-graph-random' : '&#xe0c0;',
			'icon-outline-graph-downtrend' : '&#xe0c1;',
			'icon-outline-graph-cake-quarter' : '&#xe0c2;',
			'icon-outline-graph-cake' : '&#xe0c3;',
			'icon-outline-globe' : '&#xe0c4;',
			'icon-outline-glasses-stripes' : '&#xe0c5;',
			'icon-outline-glasses-old' : '&#xe0c6;',
			'icon-outline-glasses' : '&#xe0c7;',
			'icon-outline-gamepad' : '&#xe0c8;',
			'icon-outline-full-screen' : '&#xe0c9;',
			'icon-outline-four-rectangle' : '&#xe0ca;',
			'icon-outline-folder-zipp' : '&#xe0cb;',
			'icon-outline-folder-up-arrow' : '&#xe0cc;',
			'icon-outline-folder-ribbon' : '&#xe0cd;',
			'icon-outline-folder-plus' : '&#xe0ce;',
			'icon-outline-folder-open' : '&#xe0cf;',
			'icon-outline-folder-minus' : '&#xe0d0;',
			'icon-outline-folder-locker' : '&#xe0d1;',
			'icon-outline-folder-down-arrow' : '&#xe0d2;',
			'icon-outline-folder-document-arrows' : '&#xe0d3;',
			'icon-outline-folder-document' : '&#xe0d4;',
			'icon-outline-folder' : '&#xe0d5;',
			'icon-outline-floppy-disc' : '&#xe0d6;',
			'icon-outline-float-wheel' : '&#xe0d7;',
			'icon-outline-flash-power' : '&#xe0d8;',
			'icon-outline-flash' : '&#xe0d9;',
			'icon-outline-flame' : '&#xe0da;',
			'icon-outline-flag' : '&#xe0db;',
			'icon-outline-first-aid' : '&#xe0dc;',
			'icon-outline-filter' : '&#xe0dd;',
			'icon-outline-film' : '&#xe0de;',
			'icon-outline-file-xls' : '&#xe0df;',
			'icon-outline-file-text' : '&#xe0e0;',
			'icon-outline-file-scrap' : '&#xe0e1;',
			'icon-outline-file-right-arrow' : '&#xe0e2;',
			'icon-outline-file-plus' : '&#xe0e3;',
			'icon-outline-file-pencil' : '&#xe0e4;',
			'icon-outline-file-pdf' : '&#xe0e5;',
			'icon-outline-file-odf' : '&#xe0e6;',
			'icon-outline-file-minus' : '&#xe0e7;',
			'icon-outline-file-left-arrow' : '&#xe0e8;',
			'icon-outline-file-heart' : '&#xe0e9;',
			'icon-outline-file-doc' : '&#xe0ea;',
			'icon-outline-file-cross' : '&#xe0eb;',
			'icon-outline-file-copy' : '&#xe0ec;',
			'icon-outline-file' : '&#xe0ed;',
			'icon-outline-facebook' : '&#xe0ee;',
			'icon-outline-eye-dropper' : '&#xe0ef;',
			'icon-outline-eye' : '&#xe0f0;',
			'icon-outline-exclamation-mark' : '&#xe0f1;',
			'icon-outline-equalizer' : '&#xe0f2;',
			'icon-outline-eco-light-bulb' : '&#xe0f3;',
			'icon-outline-drums' : '&#xe0f4;',
			'icon-outline-drop' : '&#xe0f5;',
			'icon-outline-drink' : '&#xe0f6;',
			'icon-outline-drag-area' : '&#xe0f7;',
			'icon-outline-download' : '&#xe0f8;',
			'icon-outline-door-out' : '&#xe0f9;',
			'icon-outline-door-in' : '&#xe0fa;',
			'icon-outline-divider' : '&#xe0fb;',
			'icon-outline-disabled' : '&#xe0fc;',
			'icon-outline-director-chair' : '&#xe0fd;',
			'icon-outline-directional-board' : '&#xe0fe;',
			'icon-outline-dashboard' : '&#xe0ff;',
			'icon-outline-cursor-type' : '&#xe100;',
			'icon-outline-cursor-scale-up' : '&#xe101;',
			'icon-outline-cursor-scale-down' : '&#xe102;',
			'icon-outline-cursor-scale-45-right' : '&#xe103;',
			'icon-outline-cursor-scale-45-left' : '&#xe104;',
			'icon-outline-cursor-move' : '&#xe105;',
			'icon-outline-cursor-hand' : '&#xe106;',
			'icon-outline-cursor' : '&#xe107;',
			'icon-outline-currency-euro' : '&#xe108;',
			'icon-outline-currency-dollar' : '&#xe109;',
			'icon-outline-cup-coffee' : '&#xe10a;',
			'icon-outline-crosshair' : '&#xe10b;',
			'icon-outline-credit-card' : '&#xe10c;',
			'icon-outline-copyright' : '&#xe10d;',
			'icon-outline-control-stop' : '&#xe10e;',
			'icon-outline-control-rewind' : '&#xe10f;',
			'icon-outline-control-previous' : '&#xe110;',
			'icon-outline-control-play' : '&#xe111;',
			'icon-outline-control-pause' : '&#xe112;',
			'icon-outline-control-next' : '&#xe113;',
			'icon-outline-control-forward' : '&#xe114;',
			'icon-outline-computer-case' : '&#xe115;',
			'icon-outline-compass' : '&#xe116;',
			'icon-outline-compact-disc' : '&#xe117;',
			'icon-outline-command' : '&#xe118;',
			'icon-outline-collage-hat' : '&#xe119;',
			'icon-outline-coins' : '&#xe11a;',
			'icon-outline-cog-wheel' : '&#xe11b;',
			'icon-outline-code-end' : '&#xe11c;',
			'icon-outline-code-begin' : '&#xe11d;',
			'icon-outline-cloud-up-arrow' : '&#xe11e;',
			'icon-outline-clouds-thin' : '&#xe11f;',
			'icon-outline-clouds-rain-thin' : '&#xe120;',
			'icon-outline-clouds-flash-thin' : '&#xe121;',
			'icon-outline-cloud-music' : '&#xe122;',
			'icon-outline-cloud-down-arrow' : '&#xe123;',
			'icon-outline-cloud' : '&#xe124;',
			'icon-outline-clock-sand' : '&#xe125;',
			'icon-outline-clock' : '&#xe126;',
			'icon-outline-clipboard' : '&#xe127;',
			'icon-outline-circle-tick' : '&#xe128;',
			'icon-outline-circle-plus-small' : '&#xe129;',
			'icon-outline-circle-plus' : '&#xe12a;',
			'icon-outline-circle-minus-small' : '&#xe12b;',
			'icon-outline-circle-minus' : '&#xe12c;',
			'icon-outline-circle-information' : '&#xe12d;',
			'icon-outline-circle-cross-small' : '&#xe12e;',
			'icon-outline-circle-cross' : '&#xe12f;',
			'icon-outline-center-position' : '&#xe130;',
			'icon-outline-cart-up-arrow' : '&#xe131;',
			'icon-outline-cart-plus' : '&#xe132;',
			'icon-outline-cart-minus' : '&#xe133;',
			'icon-outline-cart-down-arrow' : '&#xe134;',
			'icon-outline-cart' : '&#xe135;',
			'icon-outline-card-green' : '&#xe136;',
			'icon-outline-car' : '&#xe137;',
			'icon-outline-cap-winner' : '&#xe138;',
			'icon-outline-capsule' : '&#xe139;',
			'icon-outline-camera' : '&#xe13a;',
			'icon-outline-calendar-month' : '&#xe13b;',
			'icon-outline-calendar-day' : '&#xe13c;',
			'icon-outline-calculator' : '&#xe13d;',
			'icon-outline-cake' : '&#xe13e;',
			'icon-outline-bus' : '&#xe13f;',
			'icon-outline-box-plus' : '&#xe140;',
			'icon-outline-box-pin' : '&#xe141;',
			'icon-outline-box-closed' : '&#xe142;',
			'icon-outline-box-arrows-left-right' : '&#xe143;',
			'icon-outline-box-arrow-down' : '&#xe144;',
			'icon-outline-box' : '&#xe145;',
			'icon-outline-book-2' : '&#xe146;',
			'icon-outline-book' : '&#xe147;',
			'icon-outline-bone' : '&#xe148;',
			'icon-outline-bluetooth' : '&#xe149;',
			'icon-outline-bird-fly' : '&#xe14a;',
			'icon-outline-bird' : '&#xe14b;',
			'icon-outline-bell' : '&#xe14c;',
			'icon-outline-bed' : '&#xe14d;',
			'icon-outline-battery-half' : '&#xe14e;',
			'icon-outline-battery-full' : '&#xe14f;',
			'icon-outline-bank' : '&#xe150;',
			'icon-outline-badge-star' : '&#xe151;',
			'icon-outline-badge-sale' : '&#xe152;',
			'icon-outline-badge-ribbon' : '&#xe153;',
			'icon-outline-badge' : '&#xe154;',
			'icon-outline-backspace' : '&#xe155;',
			'icon-outline-assembly-key-screwdriver' : '&#xe156;',
			'icon-outline-assembly-key' : '&#xe157;',
			'icon-outline-apple' : '&#xe158;',
			'icon-outline-alternative' : '&#xe159;',
			'icon-outline-alarm-clock' : '&#xe15a;',
			'icon-outline-air-plane' : '&#xe15b;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};