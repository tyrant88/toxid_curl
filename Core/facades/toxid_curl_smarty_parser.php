<?php
namespace toxid_curl\Core\facades;

class Toxid_Curl_Smarty_Parser
{
    public function parse($content)
    {
        return \OxidEsales\Eshop\Core\Registry::getUtilsView()->parseThroughSmarty($content, md5($content), null, true);
    }
}


