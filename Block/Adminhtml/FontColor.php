<?php
/**
 * Copyright © 2017 Magevolve Ltd.  All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Me\CookieWarning\Block\Adminhtml;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;

class FontColor extends Field
{
    /**
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Retrieve element HTML markup
     *
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = $element->getElementHtml();
        $value = $element->getData('value');

        $html .= '<script type="text/javascript">
        require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
            $(document).ready(function () {
                var $el = $("#' . $element->getHtmlId() . '");
                $el.css("backgroundColor", "' . $value . '");
                $el.css("cursor", "pointer");
                $el.ColorPicker({
                    color: "' . $value . '",
                    onChange: function (hsb, hex, rgb) {
                        $el.css("backgroundColor", "#" + hex).val("#" + hex);
                    }
                });
            });
        });
        </script>';
        return $html;
    }
}
