<?php


namespace Workstation\SampleModule\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc }
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('workstation_sample_item'),
            [
                'name' => 'Sample Item 1'
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('workstation_sample_item'),
            [
                'name' => 'Sample Item 2'
            ]
        );


        $setup->endSetup();
    }
}
