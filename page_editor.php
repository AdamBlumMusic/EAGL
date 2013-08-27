<?php include "includes/head.php"; ?>
<title>Adam Blum</title>
</head> 
<body>
<?php eagl_secure(); ?>



<article role="grid">


	<section role="gridcell">


<?php 
	$post = $_GET['post'];
	$thepagecontent = file_get_contents("$post");
	$myFile = $post;

	if ($myFile == "_eagl/core.php") {
		// eagl_alert("Hey!", "You're viewing Core. Please make sure you know what you're doing if you're editing this! Really it shouldn't need editing, but if you absolutely have to, do so carefully.");
	}

 ?>


<header class="file-edit-bar">

<i><a href='files.php' rel='back' data-icon='arroww'></a></i>
<i><?php echo $myFile; ?></i>
<i><?php eagl_getLinecount("$post"); ?> lines</i>
<i><?php echo eagl_getFilesize($myFile); ?></i>
<?php
if (isset($_POST['page_content'])) {
	$page_content = $_POST['page_content'];

	$ourFileHandle = fopen("$myFile", 'wb') or die("<i>Error: Cannot open file <code>$myFile</code>.</i>");
	fclose($ourFileHandle);

	$fh = fopen($myFile, 'w') or die("<i>Error: Cannot write file <code>$myFile</code>.</i>");
			$stringData = "$page_content";
			fputs($fh, $stringData);
			fclose($fh);
			echo "<i>Your page, '$post', was saved!</i>";
			echo "<i><a href='files.php' rel='back' data-icon='arroww'> View Changes</a></i>";
			$edit_done = "true";
		} else {
			echo "<a href='#' id='save_page' data-submit data-icon='check' ></a>";
			$edit_done = "false";
		}

?>
<form hidden><input id='save_page_button' data-submit role='button' form='page_edit_form' /></form>
</header>







</section>
<section role="gridcell">

<form action="#" method="post" id="page_edit_form">
	<textarea name="page_content" <?php if ($edit_done == "true") {echo "disabled";} ?> id="page_content" autofocus class="page-edit-text"><?php echo $thepagecontent; ?></textarea>
</form>

</section>

</article>




<?php if ($edit_done == "true") {echo "<div data-modal><a href='files.php'><i data-icon='check'></i></a></div>";} ?>











<script>
	HTMLTextAreaElement.prototype.getCaretPosition = function () { //return the caret position of the textarea
    return this.selectionStart;
};
HTMLTextAreaElement.prototype.setCaretPosition = function (position) { //change the caret position of the textarea
    this.selectionStart = position;
    this.selectionEnd = position;
    this.focus();
};
HTMLTextAreaElement.prototype.hasSelection = function () { //if the textarea has selection then return true
    if (this.selectionStart == this.selectionEnd) {
        return false;
    } else {
        return true;
    }
};
HTMLTextAreaElement.prototype.getSelectedText = function () { //return the selection text
    return this.value.substring(this.selectionStart, this.selectionEnd);
};
HTMLTextAreaElement.prototype.setSelection = function (start, end) { //change the selection area of the textarea
    this.selectionStart = start;
    this.selectionEnd = end;
    this.focus();
};

var textarea = document.getElementsByTagName('textarea')[0]; 

textarea.onkeydown = function(event) {
    
    //support tab on textarea
    if (event.keyCode == 9) { //tab was pressed
        var newCaretPosition;
        newCaretPosition = textarea.getCaretPosition() + "    ".length;
        textarea.value = textarea.value.substring(0, textarea.getCaretPosition()) + "    " + textarea.value.substring(textarea.getCaretPosition(), textarea.value.length);
        textarea.setCaretPosition(newCaretPosition);
        return false;
    }
    if(event.keyCode == 8){ //backspace
        if (textarea.value.substring(textarea.getCaretPosition() - 4, textarea.getCaretPosition()) == "    ") { //it's a tab space
            var newCaretPosition;
            newCaretPosition = textarea.getCaretPosition() - 3;
            textarea.value = textarea.value.substring(0, textarea.getCaretPosition() - 3) + textarea.value.substring(textarea.getCaretPosition(), textarea.value.length);
            textarea.setCaretPosition(newCaretPosition);
        }
    }
    if(event.keyCode == 37){ //left arrow
        var newCaretPosition;
        if (textarea.value.substring(textarea.getCaretPosition() - 4, textarea.getCaretPosition()) == "    ") { //it's a tab space
            newCaretPosition = textarea.getCaretPosition() - 3;
            textarea.setCaretPosition(newCaretPosition);
        }    
    }
    if(event.keyCode == 39){ //right arrow
        var newCaretPosition;
        if (textarea.value.substring(textarea.getCaretPosition() + 4, textarea.getCaretPosition()) == "    ") { //it's a tab space
            newCaretPosition = textarea.getCaretPosition() + 3;
            textarea.setCaretPosition(newCaretPosition);
        }
    } 
}
</script>




<script>
	$("#save_page").click(function(e){
    e.preventDefault();
        $("#page_edit_form").submit();
        return false;
});
</script>

</body>
</html>