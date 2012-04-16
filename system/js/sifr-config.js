var arial = { src: '/templates/system/swf/arial.swf' };

sIFR.activate(arial);

sIFR.replace(arial, {
	selector: '.page-a #content p',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 10,
	css: {
		'.sIFR-root': {
			'color': '#5C5E60'
		}
	}
});

sIFR.replace(arial, {
	selector: '.summary-e p',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 0,
	css: {
		'.sIFR-root': {
			'font-size': '16px',
			'color': '#FFFFFF'
		}
	}
});

sIFR.replace(arial, {
	selector: 'h1.fda',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 10,
	css: {
		'.sIFR-root': {
			'font-size': '37px',
			'leading': '-10'
		}
	}
});

sIFR.replace(arial, {
	selector: '.summary-b h1',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 10,
	css: {
		'.sIFR-root': {
			'font-size': '37px',
			'leading': '-10'
		},
		'em': {
			'font-size': '20px',
			'font-style': 'normal',
			'leading': '0',
			'margin-left': '2',
			'display': 'block'
		}
	}
});

sIFR.replace(arial, {
	selector: 'p.quote',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 20,
	css: {
		'.sIFR-root': {
			'font-size': '17px',
			'display':'block'
		}
	}
});

sIFR.replace(arial, {
	selector: 'p.cite cite',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 20,
	css: {
		'.sIFR-root': {
			'font-size': '10px'
		},
		'em': {
			'font-style': 'normal'
		}
	}
});


sIFR.replace(arial, {
	selector: 'h1.lowercase',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 10,
	css: {
		'.sIFR-root': {
			'text-transform': 'none',
			'leading': '-10'
		},
		'em': {
			'font-style': 'normal',
			'display': 'block'
		}
	}
});


sIFR.replace(arial, {
	selector: 'h1, .page-a h2',
	wmode: "transparent",		ratios: [8, 1.3, 12, 1.27, 16, 1.21, 17, 1.2, 18, 1.19, 24, 1.18, 26, 1.16, 27, 1.17, 35, 1.16, 44, 1.15, 50, 1.14, 51, 1.15, 72, 1.14, 75, 1.13, 77, 1.14, 1.13],
	thickness: 10,
	css: {
		'.sIFR-root': {
			'text-transform': 'uppercase',
			'leading': '-10'
		},
		'em': {
			'font-style': 'normal',
			'display': 'block'
		}
	}
});
