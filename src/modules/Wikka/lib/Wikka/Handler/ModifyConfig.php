<?php
/**
 * Copyright Wikula Team 2011
 *
 * @license GNU/GPLv3 (or at your option, any later version).
 * @package Wikka
 * @link https://github.com/phaidon/Wikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * This class provides a handler to modify the module settings.
 */
class Wikka_Handler_ModifyConfig extends Zikula_Form_AbstractHandler
{

    /**
     * Setup form.
     *
     * @param Zikula_Form_View $view Current Zikula_Form_View instance.
     *
     * @return boolean
     */
    function initialize(Zikula_Form_View $view)
    {
        $view->caching = false;
        
        $view->assign($this->getVars());

        
        $view->assign('showIndex', $this->getVar('showIndex', false));
        
        
        $syntaxHighlighters = array(
            array('value' => 'none',              'text' => $this->__('None')),
            array('value' => 'prettify',          'text' => 'Google-Code-Prettify'),
            array('value' => 'geshi',             'text' => 'GeSHi'),
            array('value' => 'syntaxhighlighter', 'text' => 'SyntaxHighlighter'),
        );
        $view->assign('syntaxHighlighters', $syntaxHighlighters);
        
        return true;
    }

    /**
     * Handle form submission.
     *
     * @param Zikula_Form_View $view  Current Zikula_Form_View instance.
     * @param array            &$args Args.
     *
     * @return boolean
     */
    function handleCommand(Zikula_Form_View $view, &$args)
    {
        if ($args['commandName'] == 'cancel') {
            $url = ModUtil::url($this->name, 'admin', 'modifyconfig');
            return $view->redirect($url);
        }

        // Security check
        if (!SecurityUtil::checkPermission('Wikka::', '::', ACCESS_ADMIN)) {
            return LogUtil::registerPermissionError();
        }

        $data = $view->getValues();

        $this->setVars($data);


        LogUtil::registerStatus($this->__('Done! Configuration has been updated'));

        return true;
    }
}