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
     * Get cookie lifetime in days
     *
     * @return int
     */
    public function getCookieLifetime(): int
    {
        return (int)$this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_LIFETIME,
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
     * Check if show decline button
     *
     * @return bool
     */
    public function isShowDeclineButton(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_SHOW_DECLINE_BUTTON,
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

    /**
     * Get background color
     *
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_BACKGROUND_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get text color
     *
     * @return string
     */
    public function getTextColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_TEXT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get link color
     *
     * @return string
     */
    public function getLinkColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_LINK_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get accept button color
     *
     * @return string
     */
    public function getAcceptButtonColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ACCEPT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get accept button text color
     *
     * @return string
     */
    public function getAcceptButtonTextColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ACCEPT_TEXT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get decline button color
     *
     * @return string
     */
    public function getDeclineButtonColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DECLINE_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get decline button text color
     *
     * @return string
     */
    public function getDeclineButtonTextColor(): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DECLINE_TEXT_COLOR,
            ScopeInterface::SCOPE_STORE
        );
    }
}
