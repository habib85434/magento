<?php


namespace Workstation\SampleModule\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Psr\Log\LoggerInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc }
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.10', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('workstation_sample_item'),
                'description',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item description'
                ]
            );

            $setup->getConnection()->addColumn(
                $setup->getTable('workstation_sample_item'),
                'long_description',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item long_description'
                ]
            );

        }

        if (version_compare($context->getVersion(), '1.0.11', '<')) {
            $this->logger->debug('CREATED NEW TABLE');
            $table2 = $setup->getConnection()->newTable(
                $setup->getTable('workstation_sample_item_test')
            )->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Item ID'
            )->addColumn(
                'description',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Item name'
            );
            $setup->getConnection()->createTable($table2);
        }

        $setup->endSetup();
    }
}
