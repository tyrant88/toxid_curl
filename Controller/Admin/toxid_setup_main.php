<?php
namespace toxid_curl\Controller\Admin;
class toxid_setup_main extends \OxidEsales\Eshop\Application\Controller\Admin\AdminController
{
    const CONFIG_MODULE_NAME = 'module:toxid_curl';
    protected $_sThisTemplate = 'toxid_setup_main.tpl';

    public function render()
    {
        $oConf = \OxidEsales\Eshop\Core\Registry::getConfig();

        $this->_aViewData['aToxidCurlSource']              = $oConf->getShopConfVar('aToxidCurlSource');
        $this->_aViewData['aToxidCurlSourceSsl']           = $oConf->getShopConfVar('aToxidCurlSourceSsl');
        $this->_aViewData['aToxidSearchUrl']               = $oConf->getShopConfVar('aToxidSearchUrl');
        $this->_aViewData['aToxidCurlUrlParams']           = $oConf->getShopConfVar('aToxidCurlUrlParams');
        $this->_aViewData['aToxidCurlSeoSnippets']         = $oConf->getShopConfVar('aToxidCurlSeoSnippets');
        $this->_aViewData['toxidDontRewriteRelUrls']       = $oConf->getShopConfVar('toxidDontRewriteRelUrls');
        $this->_aViewData['toxidDontRewriteFileExtension'] = $oConf->getShopConfVar('toxidDontRewriteFileExtension');
        $this->_aViewData['toxidRewriteUrlEncoded']        = $oConf->getShopConfVar('toxidRewriteUrlEncoded');
        $this->_aViewData['toxidDontRewriteUrls']          = $oConf->getShopConfVar('toxidDontRewriteUrls');
        $this->_aViewData['bToxidDontPassPostVarsToCms']   = $oConf->getShopConfVar('bToxidDontPassPostVarsToCms');
        $this->_aViewData['bToxidRedirect301ToStartpage']  = $oConf->getShopConfVar('bToxidRedirect301ToStartpage');
        $this->_aViewData['toxidCacheTtl']                 = $oConf->getShopConfVar('toxidCacheTtl');
        $this->_aViewData['toxidError404Link']             = $oConf->getShopConfVar('toxidError404Link');
        $this->_aViewData['aToxidNotFoundUrl']             = $oConf->getShopConfVar('aToxidNotFoundUrl');
        $this->_aViewData['aToxidCurlUrlAdminParams']      = $oConf->getShopConfVar('aToxidCurlUrlAdminParams');
        $this->_aViewData['toxidAllowedCmsRequestParams']  = $oConf->getShopConfVar('toxidAllowedCmsRequestParams');
        $this->_aViewData['toxidDontVerifySSLCert']        = $oConf->getShopConfVar('toxidDontVerifySSLCert');

        return parent::render();
    }

    /**
     * Saves the settings
     *
     * @return void
     */
    public function save()
    {
        $oConf   = \OxidEsales\Eshop\Core\Registry::getConfig();
        $aParams = $oConf->getRequestParameter("editval");
        $sShopId = $oConf->getShopId();

        $oConf->saveShopConfVar('arr', 'aToxidCurlSource', $aParams['aToxidCurlSource'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('arr', 'aToxidCurlSourceSsl', $aParams['aToxidCurlSourceSsl'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('arr', 'aToxidSearchUrl', $aParams['aToxidSearchUrl'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('arr', 'aToxidCurlUrlParams', $aParams['aToxidCurlUrlParams'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('arr', 'aToxidCurlSeoSnippets', $aParams['aToxidCurlSeoSnippets'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('str', 'toxidDontRewriteRelUrls', $aParams['toxidDontRewriteRelUrls'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('str', 'toxidDontRewriteFileExtension', $aParams['toxidDontRewriteFileExtension'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('str', 'toxidCacheTtl', $aParams['toxidCacheTtl'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('str', 'toxidError404Link', $aParams['toxidError404Link'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('arr', 'aToxidNotFoundUrl', $aParams['aToxidNotFoundUrl'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('bool', 'toxidRewriteUrlEncoded', $aParams['toxidRewriteUrlEncoded'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('bool', 'toxidDontRewriteUrls', $aParams['toxidDontRewriteUrls'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('bool', 'bToxidDontPassPostVarsToCms', $aParams['bToxidDontPassPostVarsToCms'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('bool', 'bToxidRedirect301ToStartpage', $aParams['bToxidRedirect301ToStartpage'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('arr', 'aToxidCurlUrlAdminParams', $aParams['aToxidCurlUrlAdminParams'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('str', 'toxidAllowedCmsRequestParams', $aParams['toxidAllowedCmsRequestParams'], $sShopId, self::CONFIG_MODULE_NAME);
        $oConf->saveShopConfVar('bool', 'toxidDontVerifySSLCert', $aParams['toxidDontVerifySSLCert'], $sShopId, self::CONFIG_MODULE_NAME);
    }
}
