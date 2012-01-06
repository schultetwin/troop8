<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "9T5WMolxbzKr8R52aEsunbsLFb4TKMbyuw3m3EpoEmJv9_Q9DzJRuuUsXlXCFnNs7DPRGoo1n949WmbsZR090tL8_vYTNUmKySfV5HEK1ZqYyrtTgSVPzoriI6tUI1DXrVGS1bPVrRf4_AJEMqr6OvK0F9WczsMI2xevHEkT0WWnp_LOFGc8bP0Q9jivMGhLhsxAA4ANAHaGse1GKHhArsccGxAHu3GfP51NN4yBbrKv8_f5dLxBxcIq17ZF0KPf") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing index.htm</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="https://www34.a2hosting.com:2083/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://troop8.org/">
    <input type="hidden" name="basedir" value="/home/bobgeier/public_html/">
    <input type="hidden" name="udir" value="/home/bobgeier/public_html">
    <input type="hidden" name="ufile" value="index.htm">
    <input type="hidden" name="dir" value="%2fhome%2fbobgeier%2fpublic_html">
    <input type="hidden" name="file" value="index.htm">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="https://www34.a2hosting.com:2083/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://troop8.org/">
    <input type="hidden" name="basedir" value="/home/bobgeier/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fbobgeier%2fpublic_html">
        <input type="hidden" name="file" value="index.htm">
    <input type="hidden" name="udir" value="/home/bobgeier/public_html">
    <input type="hidden" name="ufile" value="index.htm">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://troop8.org/";

$editor->loadValueFromFile('/home/bobgeier/public_html/index.htm');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/bobgeier/public_html/';
$editor->mediaURL = 'http://troop8.org/';
$editor->imageDir = '/home/bobgeier/public_html/';
$editor->imageURL = 'http://troop8.org/';
$editor->documentDir = '/home/bobgeier/public_html/';
$editor->documentURL = 'http://troop8.org/';
$editor->emoticonDir = '/home/bobgeier/public_html/.smileys/';
$editor->emoticonURL = 'http://troop8.org/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://troop8.org/.wysiwygPro_preview_fd491768bbe8b2f208d6e5d82758228a.php?randomId=9T5WMolxbzKr8R52aEsunbsLFb4TKMbyuw3m3EpoEmJv9_Q9DzJRuuUsXlXCFnNs7DPRGoo1n949WmbsZR090tL8_vYTNUmKySfV5HEK1ZqYyrtTgSVPzoriI6tUI1DXrVGS1bPVrRf4_AJEMqr6OvK0F9WczsMI2xevHEkT0WWnp_LOFGc8bP0Q9jivMGhLhsxAA4ANAHaGse1GKHhArsccGxAHu3GfP51NN4yBbrKv8_f5dLxBxcIq17ZF0KPf';
// print the editor to the browser:
$editor->htmlCharset = 'us-ascii';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
