<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return [
    'ctrl' => [
        'title' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:members',
        'label' => 'last_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY uid ASC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('speciality') . 'Resources/Public/Images/tx_speciality_member.png',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,last_name,first_name,gender,country,city,phone,mobile_phone,email,organisation,address,occupation,member'
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'last_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:last_name',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'first_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:first_name',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'gender' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:gender',
            'config' => [
                'type' => 'radio',
                'items' => [
                    [
                        'LLL:EXT:speciality/Resources/Private/Language/locallang.xlf:gender_m', 'Mr'
                    ],
                    [
                        'LLL:EXT:speciality/Resources/Private/Language/locallang.xlf:gender_f', 'Mme'
                    ]
                ]
            ]
        ],
        'country' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:country',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'city' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:city',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'phone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:phone',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'mobile_phone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:mobile_phone',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:email',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'organisation' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:organisation',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:address',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'occupation' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:occupation',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'eval' => 'trim',
                'max' => '255',
            ]
        ],
        'member' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:speciality/Resources/Private/Language/tx_speciality_member.xlf:member',
            'config' => [
                'type' => 'radio',
                'items' => [
                    [
                        'LLL:EXT:speciality/Resources/Private/Language/locallang.xlf:option0', 'CHF 50'
                    ],
                    [
                        'LLL:EXT:speciality/Resources/Private/Language/locallang.xlf:option1', 'CHF 70'
                    ],
                    [
                        'LLL:EXT:speciality/Resources/Private/Language/locallang.xlf:option2', 'CHF 100'
                    ],
                    [
                        'LLL:EXT:speciality/Resources/Private/Language/locallang.xlf:option3', 'CHF 200'
                    ],
                ]
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'hidden,last_name,first_name,gender,country,city,phone,mobile_phone,email,organisation,address,occupation,member']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];