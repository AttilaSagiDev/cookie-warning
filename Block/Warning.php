<?php
/**
 * Copyright © 2017 Magevolve Ltd.  All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Me\CookieWarning\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Me\CookieWarning\Helper\Data as DataHelper;
use Me\CookieWarning\Model\Config\Source\Position;

class Warning extends Template
{
    /**
     * @var DataHelper
     */
    private $helper;

    /**
     * @param Context $context
     * @param DataHelper $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        DataHelper $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Get extension helper
     *
     * @return DataHelper
     */
    public function getHelper()
    {
        return $this->helper;
    }

    /**
     * Get script
     *
     * @return string
     */
    public function getScript()
    {
        $script = '';
        $script .= '<script type="text/javascript">';
        $script .= 'window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "' . $this->escapeHtml($this->helper->getBackgroundColor()) . '",
                        "text": "' . $this->escapeHtml($this->helper->getBackgroundTextColor()) . '"
                    },
                    "button": {
                        "background": "' . $this->escapeHtml($this->helper->getButtonColor()) . '",
                        "text": "' . $this->escapeHtml($this->helper->getButtonTextColor()) . '"
                    }
                },
                ' . $this->getPosition() . '
                "content": {
                    "message": "' . $this->helper->getMessage() . '",
                    "dismiss": "' . $this->escapeHtml($this->helper->getButtonText()) . '",
                    "link": "' . $this->escapeHtml($this->helper->getLinkText()) . '",
                    "href": "' . $this->escapeUrl($this->getLinkUrl()) . '"
                }
            })
        });';
        $script .= '</script>';

        return $script;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        $position = $this->helper->getPosition();
        if ($position === Position::BASE) {
            $positionHtml = '';
        } elseif ($position === Position::TOP_TRUE) {
            $positionHtml = '"position": "' . $position . '",';
            $positionHtml .= '"static": true,';
        } else {
            $positionHtml = '"position": "' . $position . '",';
        }

        return $positionHtml;
    }

    public function getLinkUrl()
    {
        return $this->getUrl(
            $this->helper->getLinkUrl(),
            []
        );
    }
}
