<?php
/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

declare(strict_types=1);

namespace Space\CookieWarning\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Position implements OptionSourceInterface
{
    /**
     * Show cookie warning in content top
     */
    public const SHOW_ON_TOP = 'top';

    /**
     * Show cookie warning in sidebar
     */
    public const SHOW_ON_BOTTOM = 'bottom';

    /**
     * Return array of options as value-label pairs
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => self::SHOW_ON_TOP,
                'label' => __('Top')
            ],
            [
                'value' => self::SHOW_ON_BOTTOM,
                'label' => __('Bottom')
            ]
        ];
    }
}
