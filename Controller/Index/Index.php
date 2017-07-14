<?php

/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Pengo\Help\Controller\Index;

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

        //$from   = $this->getRequest()->getParam('from', 'USD');
        \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->debug('hola crayola');
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set(__("Help"));
        
        $page->getLayout()->getBlock('help.view');
          //->setFromCurrency($from)
          //->setToCurrency($to)
          //->setAmount($amount)
          //->setResultAmount($result);

        return $page;
    }
}
