<?php

namespace TRAW\TrawTheme\Domain\Model;

class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address
{
    /**
     * productGroups
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TRAW\TrawTheme\Domain\Model\ProductGroup>
     */
    protected $productGroups = null;

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->productGroups = $this->productGroups ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a productGroup
     *
     * @param \TRAW\TrawTheme\Domain\Model\ProductGroup $productGroup
     * @return void
     */
    public function addProductGroup(\TRAW\TrawTheme\Domain\Model\ProductGroup $productGroup)
    {
        $this->productGroups->attach($productGroup);
    }

    /**
     * Removes a productGroup
     *
     * @param \TRAW\TrawTheme\Domain\Model\productGroup $productGroupToRemove The productGroup to be removed
     * @return void
     */
    public function removeProductGroup(\TRAW\TrawTheme\Domain\Model\ProductGroup $productGroupToRemove)
    {
        $this->productGroups->detach($productGroupToRemove);
    }

    /**
     * Returns the productGroups
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TRAW\TrawTheme\Domain\Model\ProductGroup> $productGroups
     */
    public function getProductGroups()
    {
        return $this->productGroups;
    }

    /**
     * Sets the productGroups
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TRAW\TrawTheme\Domain\Model\ProductGroup> $productGroups
     * @return void
     */
    public function setProductGroups(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $productGroups)
    {
        $this->productGroups = $productGroups;
    }
}