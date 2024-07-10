<?php
/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

declare(strict_types=1);

namespace Space\CookieWarning\Block\Adminhtml\Config\Source;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Backend\Block\Template;

class ColorPicker extends Field
{
    /**
     * [_getElementHtml used to get color from color picker]
     *
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        $html = $element->getElementHtml();
        $value = $element->getData('value');
        $block = $this->_layout->createBlock(Template::class)
            ->setData(
                [
                    'htmlId' => $element->getHtmlId(),
                    'value' => $value
                ]
            )->setTemplate('Space_CookieWarning::system/config/color-picker.phtml');
        $html .= $block->toHtml();

        return $html;
    }
}
