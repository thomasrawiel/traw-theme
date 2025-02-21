<?php

namespace TRAW\TrawTheme\Configuration;

class Container
{
    public static function getContainerConfiguration():array {
        return [
            'row-50-50' => [
                'label' => '50% container',
                'description' => '2 equally wide columns',
                'columnConfiguration' => [
                    [
                        ['name' => 'Left column', 'colPos' => 100],
                        ['name' => 'Right column', 'colPos' => 101],
                    ],
                ],
                'icon' => 'EXT:container/Resources/Public/Icons/container-2col.svg',
                'registerInNewContentElementWizard' => true,
                'group' => 'container',
                'header' => true,
            ],
            'row-33-33-33' => [
                'label' => '33% container',
                'description' => '3 equally wide columns',
                'columnConfiguration' => [
                    [
                        ['name' => 'Left column', 'colPos' => 100],
                        ['name' =>'Center column', 'colPos' => 101],
                        ['name' => 'Right column', 'colPos' => 102],
                    ],
                ],
                'icon' => 'EXT:container/Resources/Public/Icons/container-3col.svg',
                'registerInNewContentElementWizard' => true,
                'group' => 'container',
                'header' => true,
            ],
        ];
    }
}