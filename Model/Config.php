<?php
/**
 * @author Mauricio Paz Pacheco
 * @copyright Copyright © 2020 Mpaz. All rights reserved.
 * @package Mpaz_ProgressBar
 */

namespace Mpaz\ProgressBar\Model;

use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;

class Config implements ConfigInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @param string $type
     *
     * @return string
     */
    public function getThemeFileName($type = '') {
        return $this->_scopeConfig->getValue(
            'mpaz_modules/mpaz_pace/frontend_pace_theme',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @param string $type
     *
     * @return string
     */
    public function getCustomCSS($type = '') {
        return $this->_scopeConfig->getValue(
            'mpaz_modules/mpaz_pace/frontend_custom_css',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return bool
     */
    public function isFrontendEnabled() {
        return $this->_scopeConfig->isSetFlag(
            'mpaz_modules/mpaz_pace/frontend_enable',
            ScopeInterface::SCOPE_STORE
        );
    }
}
