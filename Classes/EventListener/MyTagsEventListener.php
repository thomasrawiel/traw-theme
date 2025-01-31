<?php

namespace TRAW\TrawTheme\EventListener;

use TRAW\SupHeader\Events\AllowedTagsEvent;

class MyTagsEventListener
{
    public function __invoke(AllowedTagsEvent $event)
    {
        //add a single html tag
        $event->addAllowedTag('abbr');

        //remove a single html tag
        $event->removeAllowedTag('br');
    }
}