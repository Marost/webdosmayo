/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function(config) {
	var carpeta="panel@hndm";
   config.filebrowserBrowseUrl = '/'.carpeta.'/js/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = '/'.carpeta.'/js/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = '/'.carpeta.'/js/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = '/'.carpeta.'/js/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = '/'.carpeta.'/js/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = '/'.carpeta.'/js/kcfinder/upload.php?type=flash';
};
