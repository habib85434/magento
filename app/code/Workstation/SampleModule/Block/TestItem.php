<?php


namespace Workstation\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Workstation\SampleModule\Model\ResourceModel\ItemTest\CollectionFactory;

class TestItem extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        \Workstation\SampleModule\Model\ResourceModel\ItemTest\CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function store()
    {
        return 'okkk';

    }
}
