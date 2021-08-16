<?php


namespace Workstation\Demoapi\Api;


//use Workstation\Demoapi\Api\Data\ItemInterface;

interface ItemRepositoryInterface
{
    /**
     * @return \Workstation\Demoapi\Api\Data\ItemInterface
     */
    public function getList();

}
