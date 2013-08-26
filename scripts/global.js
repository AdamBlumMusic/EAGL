	$(document).ready(function() {
		$('pre').each(function(i, e) {hljs.highlightBlock(e)});
	});

function noWidows() {
	var wordArray = $(this).text().split(" ");
	if (wordArray.length > 1) {
		wordArray[wordArray.length-2] += " " + wordArray[wordArray.length-1];
		wordArray.pop();
		$(this).html(wordArray.join(" "));
	}
};