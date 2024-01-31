<?php
/**
 * Copyright © 2017 Magevolve Ltd.  All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Me\CookieWarning\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{
    /**
     * Position values
     *
     * @var string
     */
    const BASE = '';
    const TOP = 'top';
    const TOP_TRUE = 'top_true';
    const BOTTOM_LEFT = 'bottom-left';
    const BOTTOM_RIGHT = 'bottom-right';

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::BASE, 'label' => __('Banner bottom')],
            ['value' => self::TOP, 'label' => __('Banner Top')],
            ['value' => self::TOP_TRUE, 'label' => __('Banner top (pushdown)')],
            ['value' => self::BOTTOM_LEFT, 'label' => __('Floating left')],
            ['value' => self::BOTTOM_RIGHT, 'label' => __('Floating right')]
        ];
    }
}
