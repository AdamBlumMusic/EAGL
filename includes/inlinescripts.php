	<script>
		jQuery("article[role='article'] h1").fitText(0.8, { minFontSize: '60px', maxFontSize: '400px' });
		jQuery("article[role='article'] h2").fitText(1, { minFontSize: '30px', maxFontSize: '300px' });
	</script>

<!--[if lt IE 9]>
	<script>
		(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
	</script>
<![endif]-->

	<script>
		$("article[role='article'] h3").each(noWidows);
		$("article[role='article'] h2").each(noWidows);
		$("article[role='group'] h3 a").each(noWidows);
	</script>

