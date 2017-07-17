<?php

namespace Pengo\Help\Setup;

use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface {

    /**
     * @var BlockFactory
     */
    private $blockFactory;

    public function __construct(
        BlockFactory $blockFactory
    ) {

        $this->blockFactory = $blockFactory;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $stores = array(0);
        foreach ($stores as $store){
            $block = $this->blockFactory->create();
            $block->setTitle('How it Works');
            $block->setIdentifier('how_it_works');
            $block->setStoreId(array($store));
            $block->setIsActive(1);
            $block->setContent('Edit CMS block: how_it_works');
            $block->save();
        }

        foreach ($stores as $store){
            $block = $this->blockFactory->create();
            $block->setTitle('Frequently Asked Questions');
            $block->setIdentifier('faq');
            $block->setStoreId(array($store));
            $block->setIsActive(1);
            $block->setContent('Edit CMS block: faq');
            $block->save();
        }

        foreach ($stores as $store){
            $block = $this->blockFactory->create();
            $block->setTitle('Zipcode and Locations with service');
            $block->setIdentifier('locations');
            $block->setStoreId(array($store));
            $block->setIsActive(1);
            $block->setContent('Edit CMS block: locations');
            $block->save();
        }

    }

}
