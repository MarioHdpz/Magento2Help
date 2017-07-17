<?php

namespace Pengo\Help\Controller\HowItWorks;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $pageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\HTTP\ClientFactory $clientFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {

        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set(__("Help"));

        $page->getLayout()->getBlock('help.view')
            ->setSectionTitle(__("How it works?"));

        return $page;
    }
}
