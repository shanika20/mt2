<?php

namespace Smart\Copyright\Block\Html;

class Footer extends \Magento\Theme\Block\Html\Footer
{
    /**
     * Retrieve copyright information
     *
     * @return string
     */
  /*  public function getCopyright()
    {
        if (!$this->_copyright) {
            $this->_copyright = $this->_scopeConfig->getValue(
                'design/footer/copyright',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }

        $this->_copyright = $this->_copyright.'<span>Customized copyright!</span>';
        return __($this->_copyright);
    }*/

}