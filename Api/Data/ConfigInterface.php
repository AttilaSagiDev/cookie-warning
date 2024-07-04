<?php
/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

declare(strict_types=1);

namespace Space\CookieWarning\Api\Data;

interface ConfigInterface
{
    /**
     * Enabled config path
     */
    public const XML_PATH_ENABLED = 'cookie_warning_settings/base_config/enabled';

    /**
     * Message config path
     */
    public const XML_PATH_COOKIE_MESSAGE = 'cookie_warning_settings/display_config/cookie_message';

    /**
     * Accept button text config path
     */
    public const XML_PATH_ACCEPT_BUTTON_TEXT = 'cookie_warning_settings/display_config/accept_button_text';

    /**
     * Decline button text config path
     */
    public const XML_PATH_DECLINE_BUTTON_TEXT = 'cookie_warning_settings/display_config/decline_button_text';

    /**
     * Link text config path
     */
    public const XML_PATH_LINK_TEXT = 'cookie_warning_settings/display_config/link_text';

    /**
     * Link url config path
     */
    public const XML_PATH_LINK_URL = 'cookie_warning_settings/display_config/link_url';

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Get cookie message
     *
     * @return string
     */
    public function getCookieMessage(): string;

    /**
     * Get accept button text
     *
     * @return string
     */
    public function getAcceptButtonText(): string;

    /**
     * Get decline button text
     *
     * @return string
     */
    public function getDeclineButtonText(): string;

    /**
     * Get link text
     *
     * @return string
     */
    public function getLinkText(): string;

    /**
     * Get link url
     *
     * @return string
     */
    public function getLinkUrl(): string;
}
