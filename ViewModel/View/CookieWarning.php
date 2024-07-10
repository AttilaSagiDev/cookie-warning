<?php
/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

declare(strict_types=1);

namespace Space\CookieWarning\ViewModel\View;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Space\CookieWarning\Api\Data\ConfigInterface;

class CookieWarning implements ArgumentInterface
{
    /**
     * @var ConfigInterface
     */
    private ConfigInterface $config;

    /**
     * Constructor
     *
     * @param ConfigInterface $config
     */
    public function __construct(
        ConfigInterface $config
    ) {
        $this->config = $config;
    }

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->config->isEnabled();
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->config->getPosition();
    }

    /**
     * Get cookie message
     *
     * @return string
     */
    public function getCookieMessage(): string
    {
        return $this->config->getCookieMessage();
    }

    /**
     * Get accept button text
     *
     * @return string
     */
    public function getAcceptButtonText(): string
    {
        return $this->config->getAcceptButtonText();
    }

    /**
     * Get decline button text
     *
     * @return string
     */
    public function getDeclineButtonText(): string
    {
        return $this->config->getDeclineButtonText();
    }

    /**
     * Get link text
     *
     * @return string
     */
    public function getLinkText(): string
    {
        return $this->config->getLinkText();
    }

    /**
     * Get link url
     *
     * @return string
     */
    public function getLinkUrl(): string
    {
        return $this->config->getLinkUrl();
    }
}
