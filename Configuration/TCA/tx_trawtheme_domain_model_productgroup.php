<?php

$LLL = 'LLL:EXT:lin_jobs/Resources/Private/Language/Models/locallang_tx_linjobs_domain_model_country.xlf:';
$readOnly = true;

return [
    'ctrl' => [
        'title' => 'product group',
        'label' => 'label',
        'searchFields' => 'label,code',
        'default_sortby' => 'label ASC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'types' => [
        [
            'showitem' => '--palette--;;general,--palette--;;paletteHidden',
        ],
    ],
    'palettes' => [
        'general' => [
            'label' => 'palette.general',
            'showitem' => 'label',
        ],
        'paletteHidden' => [
            'showitem' => '
                hidden
            ',
        ],
    ],
    'columns' => [
        'uid' => [
            'exclude' => 0,
            'label' => 'uid',
            'config' => [
                'type' => 'input',
            ],
        ],
        'pid' => [
            'exclude' => 0,
            'label' => 'pid',
            'config' => [
                'type' => 'input',
            ],
        ],
        'hidden' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 1,
            ],
        ],
        'label' => [
            'exclude' => 0,
            'label' => $LLL . 'country.label',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'path_segment' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
            'config' => [
                'type' => 'slug',
                'size' => 50,
                'generatorOptions' => [
                    'fields' => ['label'],
                    'prefixParentPageSlug' => false,
                    'replacements' => [
                        '/' => '-',
                    ],
                ],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
                'default' => '',
            ],
        ],
    ],
];
