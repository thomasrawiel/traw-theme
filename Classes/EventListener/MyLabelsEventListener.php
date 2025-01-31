<?php

namespace TRAW\TrawTheme\EventListener;

use TRAW\SupHeader\Events\LabelFileEvent;

class MyLabelsEventListener
{
    public function __invoke(LabelFileEvent $event)
    {
        $event->removeLabelFile('EXT:sup_header/Resources/Private/Language/locallang.xlf');
    }
}