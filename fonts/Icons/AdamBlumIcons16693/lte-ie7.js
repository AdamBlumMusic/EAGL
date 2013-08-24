/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'AdamBlumIcons\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icn-download' : '&#x64;&#x6f;&#x77;&#x6e;&#x6c;&#x6f;&#x61;&#x64;',
			'icn-upload' : '&#x75;&#x70;&#x6c;&#x6f;&#x61;&#x64;',
			'icn-menu' : '&#x6d;&#x65;&#x6e;&#x75;',
			'icn-checkmark' : '&#x63;&#x68;&#x65;&#x63;&#x6b;',
			'icn-minus' : '&#x6d;&#x69;&#x6e;&#x75;&#x73;',
			'icn-plus' : '&#x70;&#x6c;&#x75;&#x73;',
			'icn-close' : '&#x63;&#x61;&#x6e;&#x63;&#x65;&#x6c;',
			'icn-play' : '&#x70;&#x6c;&#x61;&#x79;',
			'icn-pause' : '&#x70;&#x61;&#x75;&#x73;&#x65;',
			'icn-stop' : '&#x73;&#x74;&#x6f;&#x70;',
			'icn-first' : '&#x72;&#x65;&#x77;&#x69;&#x6e;&#x64;',
			'icn-last' : '&#x66;&#x61;&#x73;&#x74;&#x66;&#x6f;&#x72;&#x77;&#x61;&#x72;&#x64;',
			'icn-loop' : '&#x72;&#x65;&#x66;&#x72;&#x65;&#x73;&#x68;',
			'icn-twitter' : '&#x74;&#x77;&#x69;&#x74;&#x74;&#x65;&#x72;',
			'icn-facebook' : '&#x66;&#x61;&#x63;&#x65;&#x62;&#x6f;&#x6f;&#x6b;',
			'icn-google-plus' : '&#x67;&#x6f;&#x6f;&#x67;&#x6c;&#x65;&#x70;&#x6c;&#x75;&#x73;',
			'icn-vimeo' : '&#x76;&#x69;&#x6d;&#x65;&#x6f;',
			'icn-flickr' : '&#x66;&#x6c;&#x69;&#x63;&#x6b;&#x72;',
			'icn-dribbble' : '&#x64;&#x72;&#x69;&#x62;&#x62;&#x62;&#x6c;&#x65;',
			'icn-github' : '&#x67;&#x69;&#x74;&#x68;&#x75;&#x62;',
			'icn-apple' : '&#x61;&#x70;&#x70;&#x6c;&#x65;',
			'icn-tux' : '&#x6c;&#x69;&#x6e;&#x75;&#x78;',
			'icn-tumblr' : '&#x74;&#x75;&#x6d;&#x62;&#x6c;&#x72;',
			'icn-wordpress' : '&#x77;&#x6f;&#x72;&#x64;&#x70;&#x72;&#x65;&#x73;&#x73;',
			'icn-youtube' : '&#x79;&#x6f;&#x75;&#x74;&#x75;&#x62;&#x65;',
			'icn-android' : '&#x61;&#x6e;&#x64;&#x72;&#x6f;&#x69;&#x64;',
			'icn-windows' : '&#x77;&#x69;&#x6e;&#x64;&#x6f;&#x77;&#x73;',
			'icn-windows8' : '&#x77;&#x69;&#x6e;&#x64;&#x6f;&#x77;&#x73;&#x65;&#x69;&#x67;&#x68;&#x74;',
			'icn-soundcloud' : '&#x73;&#x6f;&#x75;&#x6e;&#x64;&#x63;&#x6c;&#x6f;&#x75;&#x64;',
			'icn-reddit' : '&#x72;&#x65;&#x64;&#x64;&#x69;&#x74;',
			'icn-paypal' : '&#x70;&#x61;&#x79;&#x70;&#x61;&#x6c;',
			'icn-stackoverflow' : '&#x73;&#x74;&#x61;&#x63;&#x6b;&#x6f;&#x76;&#x65;&#x72;&#x66;&#x6c;&#x6f;&#x77;',
			'icn-chrome' : '&#x67;&#x6f;&#x6f;&#x67;&#x6c;&#x65;&#x63;&#x68;&#x72;&#x6f;&#x6d;&#x65;',
			'icn-css3' : '&#x63;&#x73;&#x73;&#x74;&#x68;&#x72;&#x65;&#x65;',
			'icn-html5' : '&#x68;&#x74;&#x6d;&#x6c;&#x66;&#x69;&#x76;&#x65;',
			'icn-safari' : '&#x73;&#x61;&#x66;&#x61;&#x72;&#x69;',
			'icn-opera' : '&#x6f;&#x70;&#x65;&#x72;&#x61;',
			'icn-IE' : '&#x69;&#x6e;&#x74;&#x65;&#x72;&#x6e;&#x65;&#x74;&#x65;&#x78;&#x70;&#x6c;&#x6f;&#x72;&#x65;&#x72;',
			'icn-firefox' : '&#x66;&#x69;&#x72;&#x65;&#x66;&#x6f;&#x78;',
			'icn-file-zip' : '&#x7a;&#x69;&#x70;&#x66;&#x69;&#x6c;&#x65;',
			'icn-file-powerpoint' : '&#x63;&#x68;&#x61;&#x72;&#x74;&#x66;&#x69;&#x6c;&#x65;',
			'icn-file-xml' : '&#x68;&#x74;&#x6d;&#x6c;&#x66;&#x69;&#x6c;&#x65;',
			'icn-file-css' : '&#x63;&#x73;&#x73;&#x66;&#x69;&#x6c;&#x65;',
			'icn-file-excel' : '&#x65;&#x78;&#x63;&#x65;&#x6c;&#x66;&#x69;&#x6c;&#x65;',
			'icn-file-word' : '&#x77;&#x6f;&#x72;&#x64;&#x66;&#x69;&#x6c;&#x65;',
			'icn-file-pdf' : '&#x70;&#x64;&#x66;&#x66;&#x69;&#x6c;&#x65;',
			'icn-libreoffice' : '&#x66;&#x69;&#x6c;&#x65;',
			'icn-google-drive' : '&#x67;&#x6f;&#x6f;&#x67;&#x6c;&#x65;&#x64;&#x72;&#x69;&#x76;&#x65;',
			'icn-code' : '&#x63;&#x6f;&#x64;&#x65;',
			'icn-star' : '&#x73;&#x74;&#x61;&#x72;',
			'icn-heart' : '&#x68;&#x65;&#x61;&#x72;&#x74;',
			'icn-attachment' : '&#x61;&#x74;&#x74;&#x61;&#x63;&#x68;&#x6d;&#x65;&#x6e;&#x74;',
			'icn-cloud' : '&#x63;&#x6c;&#x6f;&#x75;&#x64;',
			'icn-cloud-download' : '&#x63;&#x6c;&#x6f;&#x75;&#x64;&#x64;&#x6f;&#x77;&#x6e;',
			'icn-cloud-upload' : '&#x63;&#x6c;&#x6f;&#x75;&#x64;&#x75;&#x70;',
			'icn-bookmark' : '&#x62;&#x6f;&#x6f;&#x6b;&#x6d;&#x61;&#x72;&#x6b;',
			'icn-spinner' : '&#x73;&#x70;&#x69;&#x6e;&#x6e;&#x65;&#x72;',
			'icn-dropbox' : '&#x64;&#x72;&#x6f;&#x70;&#x62;&#x6f;&#x78;',
			'icn-bubbles' : '&#x63;&#x68;&#x61;&#x74;',
			'icn-tag' : '&#x74;&#x61;&#x67;',
			'icn-cart' : '&#x63;&#x61;&#x72;&#x74;',
			'icn-phone' : '&#x70;&#x68;&#x6f;&#x6e;&#x65;',
			'icn-clock' : '&#x63;&#x6c;&#x6f;&#x63;&#x6b;',
			'icn-arrow-up-right' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x6e;&#x65;',
			'icn-arrow-right' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x65;',
			'icn-arrow-down-right' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x73;&#x65;',
			'icn-arrow-down' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x73;',
			'icn-arrow-down-left' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x73;&#x77;',
			'icn-arrow-left' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x77;',
			'icn-arrow-up' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x6e;',
			'icn-arrow-up-left' : '&#x61;&#x72;&#x72;&#x6f;&#x77;&#x6e;&#x77;',
			'icn-arrow-right-2' : '&#x72;&#x69;&#x67;&#x68;&#x74;',
			'icn-arrow-up-2' : '&#x75;&#x70;',
			'icn-arrow-down-2' : '&#x64;&#x6f;&#x77;&#x6e;',
			'icn-arrow-left-2' : '&#x6c;&#x65;&#x66;&#x74;',
			'icn-undo' : '&#x75;&#x6e;&#x64;&#x6f;',
			'icn-redo' : '&#x72;&#x65;&#x64;&#x6f;',
			'icn-list' : '&#x75;&#x6c;',
			'icn-numbered-list' : '&#x6f;&#x6c;',
			'icn-indent-decrease' : '&#x69;&#x6e;&#x64;&#x65;&#x6e;&#x74;&#x6c;&#x65;&#x66;&#x74;',
			'icn-indent-increase' : '&#x69;&#x6e;&#x64;&#x65;&#x6e;&#x74;&#x72;&#x69;&#x67;&#x68;&#x74;',
			'icn-paragraph-left' : '&#x6c;&#x65;&#x66;&#x74;&#x61;&#x6c;&#x69;&#x67;&#x6e;',
			'icn-paragraph-center' : '&#x63;&#x65;&#x6e;&#x74;&#x65;&#x72;',
			'icn-paragraph-right' : '&#x72;&#x69;&#x67;&#x68;&#x74;&#x61;&#x6c;&#x69;&#x67;&#x6e;',
			'icn-paragraph-justify' : '&#x6a;&#x75;&#x73;&#x74;&#x69;&#x66;&#x79;',
			'icn-pilcrow' : '&#x70;&#x69;&#x6c;&#x63;&#x72;&#x6f;&#x77;',
			'icn-bold' : '&#x62;&#x6f;&#x6c;&#x64;',
			'icn-underline' : '&#x75;&#x6e;&#x64;&#x65;&#x72;&#x6c;&#x69;&#x6e;&#x65;',
			'icn-italic' : '&#x69;&#x74;&#x61;&#x6c;&#x69;&#x63;',
			'icn-strikethrough' : '&#x73;&#x74;&#x72;&#x69;&#x6b;&#x65;&#x74;&#x68;&#x72;&#x6f;&#x75;&#x67;&#x68;',
			'icn-font' : '&#x66;&#x6f;&#x6e;&#x74;',
			'icn-text-height' : '&#x68;&#x65;&#x69;&#x67;&#x68;&#x74;',
			'icn-text-width' : '&#x77;&#x69;&#x64;&#x74;&#x68;'
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
		c = c.match(/icn-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};