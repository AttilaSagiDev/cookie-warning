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
     * Position config path
     */
    public const XML_PATH_POSITION = 'cookie_warning_settings/display_config/position_to_show';

    /**
     * Title config path
     */
    public const XML_PATH_COOKIE_TITLE = 'cookie_warning_settings/display_config/cookie_title';

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
     * Background color config path
     */
    public const XML_PATH_BACKGROUND_COLOR = 'cookie_warning_settings/color_config/background_color';

    /**
     * Text color config path
     */
    public const XML_PATH_TEXT_COLOR = 'cookie_warning_settings/color_config/text_color';

    /**
     * Accept button color config path
     */
    public const XML_PATH_ACCEPT_COLOR = 'cookie_warning_settings/color_config/accept_button_color';

    /**
     * Accept button text color config path
     */
    public const XML_PATH_ACCEPT_TEXT_COLOR = 'cookie_warning_settings/color_config/accept_button_text_color';

    /**
     * Decline button color config path
     */
    public const XML_PATH_DECLINE_COLOR = 'cookie_warning_settings/color_config/decline_button_color';

    /**
     * Decline button text color config path
     */
    public const XML_PATH_DECLINE_TEXT_COLOR = 'cookie_warning_settings/color_config/decline_button_text_color';

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition(): string;

    /**
     * Get cookie title
     *
     * @return string
     */
    public function getCookieTitle(): string;

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

    /**
     * Get background color
     *
     * @return string
     */
    public function getBackgroundColor(): string;

    /**
     * Get text color
     *
     * @return string
     */
    public function getTextColor(): string;

    /**
     * Get accept button color
     *
     * @return string
     */
    public function getAcceptButtonColor(): string;

    /**
     * Get accept button text color
     *
     * @return string
     */
    public function getAcceptButtonTextColor(): string;

    /**
     * Get decline button color
     *
     * @return string
     */
    public function getDeclineButtonColor(): string;

    /**
     * Get decline button text color
     *
     * @return string
     */
    public function getDeclineButtonTextColor(): string;
}
