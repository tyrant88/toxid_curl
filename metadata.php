<?php
/**
 * OXID_Module_TOXID
 *
 * PHP version 5
 *
 * @category TOXID
 * @package  TOXID
 * @author   Joscha Krug <support@marmalade.de>
 * @license  MIT License http://www.opensource.org/licenses/mit-license.html
 * @version  2.0
 * @link     http://toxid.org
 * @link     https://github.com/jkrug/TOXID-cURL
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

$aModule = array(
    'id'          => 'toxid_curl',
    'title'       => 'marmalade :: TOXID cURL',
    'description' => array(
        'de'    => 'Integriert CMS-Inhalte in OXID eShop',
        'en'    => 'Renders pages form CMS and navigation in OXID.',
    ),
    'email'         => 'support@marmalade.de',
    'url'           => 'http://www.marmalade.de',
    'thumbnail'     => 'toxid.jpg',
    'version'       => '3.0.0',
    'author'        => 'marmalade GmbH :: Joscha Krug',
    'extend' => [
        \OxidEsales\Eshop\Core\SeoDecoder::class             => \toxid_curl\core\toxid_curl_oxseodecoder::class,
        \OxidEsales\Eshop\Core\UtilsView::class             => \toxid_curl\core\toxid_curl_oxutilsview::class,
        \OxidEsales\Eshop\Core\ViewConfig::class             => \toxid_curl\core\toxid_curl_oxviewconfig::class
    ],
    'controllers' => [
        'toxid_curl'        => \toxid_curl\Controller\toxid_curl::class,
        'toxid_setup'       => \toxid_curl\Controller\Admin\toxid_setup::class,
        'toxid_setup_list'  => \toxid_curl\Controller\Admin\toxid_setup_list::class,
        'toxid_setup_main'  => \toxid_curl\Controller\Admin\toxid_setup_main::class,
    ],
    'templates' => [
        'toxid_curl.tpl'            => 'toxid_curl/views/azure/toxid_curl.tpl',
        'product.tpl'               => 'toxid_curl/views/azure/product.tpl',
        'toxid_setup_main.tpl'      => 'toxid_curl/views/admin/tpl/toxid_setup_main.tpl',
        'toxid_content_widget.tpl'  => 'toxid_curl/views/widgets/toxid_content_widget.tpl',
    ],
    'blocks' => [
        [
            'template' => '_formparams.tpl',
            'block'=>'admin_formparams',
            'file'=>'/views/admin/blocks/_formparams_admin_formparams.tpl'
        ],
    ],
    'settings' => [
        [
            'group' => 'toxid_config_not_here',
            'name'  => 'noConfigHere',
        ],
    ],
    'events' => [
        'onActivate'    => '\toxid_curl\core\toxid_curl_events::onActivate',
        'onDeactivate'  => '\toxid_curl\core\toxid_curl_events::onDeactivate'
    ],
    'smartyPluginDirectories' => [
        'Core/Smarty/Plugin'
    ],
);
