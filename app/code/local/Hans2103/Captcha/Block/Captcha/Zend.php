<?php 

class Hans2103_Captcha_Block_Captcha_Zend extends Mage_Captcha_Block_Captcha_Zend
{
    /**
     * Renders captcha HTML (if required)
     *
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->getCaptchaModel()->isRequired()) {
            $this->getCaptchaModel()->setDotNoiseLevel(50);
            $this->getCaptchaModel()->setLineNoiseLevel(0);
            $this->getCaptchaModel()->setFontSize(30);
            $this->getCaptchaModel()->generate();
            return parent::_toHtml();
        }
        return '';
    }
}