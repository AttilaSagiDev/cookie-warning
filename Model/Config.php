<?php
/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

declare(strict_types=1);

namespace Space\CookieWarning\Model;

use Space\CookieWarning\Api\Data\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config implements ConfigInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * Constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get cookie title
     *
     * @return string
     */
    public function getCookieTitle(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get cookie message
     *
     * @return string
     */
    public function getCookieMessage(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get accept button text
     *
     * @return string
     */
    public function getAcceptButtonText(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ACCEPT_BUTTON_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get decline button text
     *
     * @return string
     */
    public function getDeclineButtonText(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DECLINE_BUTTON_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get link text
     *
     * @return string
     */
    public function getLinkText(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_LINK_TEXT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get link url
     *
     * @return string
     */
    public function getLinkUrl(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_LINK_URL,
            ScopeInterface::SCOPE_STORE
        );
    }
}
