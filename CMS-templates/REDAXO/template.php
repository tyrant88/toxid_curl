<?php
header('Content-Type: application/xml');
header('Content-Encoding: text/html; charset=utf-8');
echo '<?xml version="1.0"?>'."\n";

class toxid {
 function prepareContent($params) {
     global $REX;
     $content = $params['subject'];
     $content = str_replace('href="/','href="'.$REX['SERVER'].'',$content);
     $content = str_replace('action="/','action="/cms/',$content);
     return $content;
 }
}
rex_register_extension('OUTPUT_FILTER',array('toxid','prepareContent'));

?>
<cms>
<metadata>
    <title><![CDATA[ <?php echo seo42::getTitle(); ?> ]]></title>
    <description><![CDATA[ <?php echo seo42::getDescription(); ?> ]]></description>
    <keywords><![CDATA[ <?php echo seo42::getKeywords(); ?> ]]></keywords>
</metadata>
<banner><![CDATA[ REX_TEMPLATE[id=6] ]]></banner>
<navigation>
 <![CDATA[
<?php $nav = rex_navigation::factory();
 echo '<div id="navigation" class="clearfix nav-main menu">'. $nav->get(20, 3, true, true) .'</div>'; ?>
]]>
</navigation>
<content>
<![CDATA[ REX_ARTICLE[ctype=1] ]]>
</content>
<footer> <![CDATA[
<div class="container">REX_TEMPLATE[id=2]</div>
<hr />
<div class="container">
        REX_ARTICLE[id=19]
</div>
]]>
</footer>
</cms>

