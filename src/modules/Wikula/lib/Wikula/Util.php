<?php
/**
 * Copyright Wikula Team 2011
 *
 * @license GNU/GPLv3 (or at your option, any later version).
 * @package Wikula
 * @link https://github.com/phaidon/Wikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * Provides some common functions.
 */
class Wikula_Util extends Zikula_AbstractVersion
{
    
    /**
     * Wikula Default Module Settings
     * 
     * @return array An associated array with key=>value pairs of the default module settings
     */
    public static function getDefaultVars()
    {
        $dom = ZLanguage::getModuleDomain('Wikula');
        
        $defaults = array(
            'root_page'               => __('HomePage', $dom),
            //'savewarning'           => (bool)$wikulainit['savewarning'],
            //'excludefromhistory'    => $wikulainit['root_page'],
            'modulestylesheet'        => 'style.css',
            'hideeditbar'             => false,
            'hidehistory'             => 20,
            'itemsperpage'            => 25,
            'langinstall'             => ZLanguage::getLanguageCode(),
            'double_doublequote_html' => 'safe',
            'subscription'            => false,
            'mandatorycomment'        => false,
            'single_page_permissions' => false,
            'ajaxsearch'              => true,
            'fulltextsearch'          => true,
            'discussion_is_available' => false,
        );
    
        return $defaults;
    }

}
