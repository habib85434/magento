<?php


namespace Workstation\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Workstation\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Article extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Workstation\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
