<?php
namespace Pulsestorm\HelloWorldMVVM\Controller\Hello;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class World extends \Magento\Framework\App\Action\Action
{
    /*
     * You can use this function to check if the controller works
     * Go to link: http://magento2.dev/hellow_mvvm/hello/world or http://magento2.dev/index.php/hello_mvvm/hello/world
     *
     * public function execute()
    {
        echo '<p>You Did It!</p>';
        var_dump(__METHOD__);
    }*/

    protected $pageFactory;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }


    public function execute()
    {
        var_dump(__METHOD__);
        $page_object = $this->pageFactory->create();
        return $page_object;
    }

}