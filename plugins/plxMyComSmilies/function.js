<!--//
function addSmiley(smiley) {
	var formfield = document.getElementsByName('content')['0'];
	// IE support
	if (document.selection && document.selection.createRange) {
		formfield.focus();
		sel = document.selection.createRange();
		sel.text = smiley + sel.text;
		formfield.focus();
	}
	// Moz support
	else if (formfield.selectionStart || formfield.selectionStart == '0') {
		var startPos = formfield.selectionStart;
		var endPos = formfield.selectionEnd;
		var restoreTop = formfield.scrollTop;
		formfield.value = formfield.value.substring(0, startPos) + smiley + formfield.value.substring(endPos, formfield.value.length);
		formfield.selectionStart = formfield.selectionEnd = endPos + smiley.length;
		if (restoreTop > 0) formfield.scrollTop = restoreTop;
		formfield.focus();
	}
	// Fallback support for other browsers
	else {
		formfield.value += smiley;
		formfield.focus();
	}
	return;
}
-->