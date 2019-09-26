

if ( window.location.protocol != 'https:' && !location.href.match('.test') ) {
	location.href = location.href.replace("http://", "https://");
}

