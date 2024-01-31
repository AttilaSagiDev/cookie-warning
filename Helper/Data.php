<?php
/**
 * Copyright © 2017 Magevolve Ltd.  All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Me\CookieWarning\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    /**
     * Store config is extension enabled
     */
    const XML_PATH_ENABLED = 'warning/basic/active';

    /**
     * Store config warning position
     */
    const XML_PATH_POSITION = 'warning/display/position';

    /**
     * Store config warning message
     */
    const XML_PATH_MESSAGE = 'warning/display/message';

    /**
     * Store config dismiss button text
     */
    const XML_PATH_BUTTON_TEXT = 'warning/display/button_text';

    /**
     * Store config policy link text
     */
    const XML_PATH_LINK_TEXT = 'warning/display/link_text';

    /**
     * Store config policy link url
     */
    const XML_PATH_LINK_URL = 'warning/display/link_url';

    /**
     * Store config background color
     */
    const XML_PATH_BACKGROUND_COLOR = 'warning/colors/background';

    /**
     * Store config background text color
     */
    const XML_PATH_BACKGROUND_TEXT_COLOR = 'warning/colors/background_text';

    /**
     * Store config button background color
     */
    const XML_PATH_BUTTON_BACKGROUND_COLOR = 'warning/colors/button_background';

    /**
     * Store config button background color
     */
    const XML_PATH_BUTTON_TEXT_COLOR = 'warning/colors/button_text';

    /**
     * Check if extension enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get warning position
     *
     * @return string
     */
    public function getPosition()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get warning message
     *
     * @return string
     */
    public function getMessage()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get button text
     *
     * @return string
     */
    public function getButtonText()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_BUTTON_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get link text
     *
     * @return string
     */
    public function getLinkText()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_LINK_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get link url
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_LINK_URL,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get warning background color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get warning background text color
     *
     * @return string
     */
    public function getBackgroundTextColor()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_BACKGROUND_TEXT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get warning button color
     *
     * @return string
     */
    public function getButtonColor()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_BUTTON_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get warning button text color
     *
     * @return string
     */
    public function getButtonTextColor()
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_BUTTON_TEXT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }
}
