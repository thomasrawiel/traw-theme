<?php

namespace TRAW\TrawTheme\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ProductGroup extends AbstractEntity
{
    protected string $label = '';

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }


}