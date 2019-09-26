

if ( window.location.protocol != 'https:' && location.href.match('.test')===0 ) {
	location.href = location.href.replace("http://", "https://");
}

