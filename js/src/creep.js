!function(f,t,e,n){f.extend(f.fn,{creep:function(o){return o=f.extend({},f.fn.creep.options,o),this.each(function(){var r=f(this);r.click(function(t){var e=r.attr("href"),n=e.replace("#","");if(e.match("#")&&"#"!==e&&!e.match("http"))return t.preventDefault(),c(n,o),!1})})},creepTo:function(o){return o=f.extend({},f.fn.creep.options,o),this.each(function(){var r=f(this);r.click(function(t){var e=r.attr("href"),n=e.replace("#","");if(e.match("#")&&"#"!==e&&!e.match("http"))return t.preventDefault(),c(n,o),!1})})}});var c=function(t,e){var n=f("a[name='"+t+"']");void 0===n.offset()&&(n=f("#"+t)),void 0!==n.offset()&&(f("html, body").animate({scrollTop:n.offset().top+e.offset},e.speed),history.pushState&&history.pushState(null,null,"#"+t))};f.fn.creep.options={offset:0,speed:1e3}}(jQuery,window,document);

// on load
$(document).ready(function(){
	$("a").creep();
});
