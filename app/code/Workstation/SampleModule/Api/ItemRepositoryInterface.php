<?php

namespace Workstation\SampleModule\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Workstation\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList();
}
