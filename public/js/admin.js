$(function() {
	$('#post-body').summernote({
		height: 200,
		minHeight: null,             // set minimum height of editor
		maxHeight: null
	});
	$(' #post-add .note-height, #post-add .note-table, #post-add .note-fontname, #post-add .note-color').remove();
});