<?php

namespace Smart\Breadcrumbs\Block;

class Breadcrumbs extends \Magento\Catalog\Block\Breadcrumbs
{

    protected function _prepareLayout()
    {
        if ($breadcrumbsBlock = $this->getLayout()->getBlock('breadcrumbs')) {
            $breadcrumbsBlock->addCrumb(
                'home',
                [
                    'label' => __('Home'),
                    'title' => __('Go to Home Page'),
                    'link' => $this->_storeManager->getStore()->getBaseUrl()
                ]
            );

            //$breadcrumbsBlock->setTemplate('WaPoNe_HelloWorld::bread.phtml');

            //Loging to mylog.log
            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/mylog.log');
            $logger = new \Zend\Log\Logger();
            $logger->addWriter($writer);



            $title = [];
            $path = $this->_catalogData->getBreadcrumbPath();

            foreach ($path as $name => $breadcrumb) {
                //Add a '!' at the end of a breadcrumb
                $breadcrumb['label'] = $breadcrumb['label'].'!';
                $breadcrumbsBlock->addCrumb($name, $breadcrumb);
                //Set the page title to show a '!' at the end
                $title[] = $breadcrumb['label'].'!';


                //Loging to mylog.log
                $logger->info($title);
            }

            $this->pageConfig->getTitle()->set(join($this->getTitleSeparator(), array_reverse($title)));
        }

    }
}