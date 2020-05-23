<?php
namespace toxid_curl\Core;
/**
 *    This file is part of TOXID Module for OXID eShop CE/PE/EE.
 *
 *    TOXID is free software: you can redistribute it and/or modify
 *    it under the terms of the MIT License.
 *
 *
 * @link      http://toxid.org
 * @link      http://marmalade.de
 * @package   core
 * @copyright (C) marmalade.de 2011
 */

class toxid_curl_oxviewconfig extends toxid_curl_oxviewconfig_parent
{
    /**
     * calls _injectTplVariable and returns parent constructor result
     */
    public function __construct()
    {
        $this->_injectTplVariable();
        return parent::__construct();
    }

    /**
     * if config variable sTplVariable is set,
     * sets template variable with getToxid() result
     * @return void
     */
    protected function _injectTplVariable()
    {
        $oConfig = \OxidEsales\Eshop\Core\Registry::getConfig();
        $sTplVariableName = $oConfig->getConfigParam('sTplVariable');
        if ($sTplVariableName) {
            $oConfig->getActiveView()->addTplParam($sTplVariableName, $this->getToxid());
        }
    }

    /**
     * returns instance of toxidCurl
     * @return toxidcurl
     */
    public function getToxid()
    {
        $toxidCurl = \OxidEsales\Eshop\Core\Registry::get(\toxid_curl\Core\toxidcurl::class);
        if (!$toxidCurl->getInitialized()) {
            $smartyParser = oxNew(\toxid_curl\Core\facades\Toxid_Curl_Smarty_Parser::class);
            $toxidCurl->init(
                $smartyParser
            );
        }
        return $toxidCurl;
    }
}
