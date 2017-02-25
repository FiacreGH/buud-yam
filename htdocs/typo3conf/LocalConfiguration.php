<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$C.SkYLweIZFuELKf70xeaJEh8qAf331',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'host' => 'localhost',
        'socket' => '',
    ],
    'EXT' => [
        'extConf' => [
            'fluidcontent' => 'a:0:{}',
            'fluidcontent_core' => 'a:0:{}',
            'fluidpages' => 'a:3:{s:8:"autoload";s:1:"1";s:8:"doktypes";s:0:"";s:33:"pagesLanguageConfigurationOverlay";s:1:"0";}',
            'flux' => 'a:4:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";s:17:"listNestedContent";s:1:"0";s:12:"handleErrors";s:1:"0";}',
            'formule' => 'a:4:{s:19:"autoload_typoscript";s:1:"1";s:23:"development_redirect_to";s:0:"";s:19:"testing_redirect_to";s:0:"";s:22:"production_redirect_to";s:0:"";}',
            'media' => 'a:10:{s:18:"default_categories";s:0:"";s:22:"load_rte_configuration";s:1:"0";s:15:"has_folder_tree";s:1:"1";s:21:"has_media_file_picker";s:1:"0";s:14:"hide_file_list";s:1:"0";s:15:"image_thumbnail";s:7:"100x100";s:10:"image_mini";s:7:"120x120";s:11:"image_small";s:7:"320x320";s:12:"image_medium";s:7:"760x760";s:11:"image_large";s:9:"1200x1200";}',
            'natural_gallery' => 'a:0:{}',
            'nc_staticfilecache' => 'a:8:{s:23:"clearCacheForAllDomains";s:1:"1";s:22:"sendCacheControlHeader";s:1:"1";s:47:"sendCacheControlHeaderRedirectAfterCacheTimeout";s:1:"0";s:27:"enableStaticFileCompression";s:1:"1";s:23:"showGenerationSignature";s:1:"0";s:9:"fileTypes";s:7:"xml,rss";s:8:"strftime";s:14:"%d-%m-%y %H:%M";s:11:"recreateURI";s:1:"0";}',
            'newsletter' => 'a:11:{s:11:"sender_name";s:4:"user";s:12:"sender_email";s:4:"user";s:18:"notification_email";s:4:"user";s:10:"fetch_path";s:0:"";s:10:"append_url";s:0:"";s:12:"path_to_lynx";s:13:"/usr/bin/lynx";s:17:"path_to_fetchmail";s:18:"/usr/bin/fetchmail";s:13:"keep_messages";s:1:"0";s:13:"attach_images";s:1:"1";s:15:"mails_per_round";s:3:"100";s:20:"unsubscribe_redirect";s:0:"";}',
            'realurl' => 'a:4:{s:10:"configFile";s:64:"typo3conf/ext/speciality/Configuration/RealUrl/Configuration.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
            'seo_basics' => 'a:1:{s:10:"xmlSitemap";s:1:"1";}',
            'speciality' => 'a:0:{}',
            'speciality_distribution' => 'a:0:{}',
            'speciality_ecodev' => 'a:0:{}',
            'tt_address' => 'a:3:{s:21:"backwardsCompatFormat";s:9:"%1$s %3$s";s:24:"storeBackwardsCompatName";s:1:"1";s:17:"readOnlyNameField";s:1:"1";}',
            'tt_news' => 'a:1:{s:18:"activateCategories";s:1:"1";}',
            'typo3_console' => 'a:0:{}',
            'vhs' => 'a:0:{}',
            'vidi' => 'a:3:{s:10:"data_types";s:53:"fe_users,fe_groups, sys_category, tt_news, tt_address";s:11:"default_pid";s:24:"1,fe_users:1,fe_groups:1";s:19:"autoload_typoscript";s:1:"1";}',
            'vidi_frontend' => 'a:2:{s:13:"content_types";s:38:"fe_groups, fe_users, sys_file, tt_news";s:19:"autoload_typoscript";s:1:"1";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'fr',
            ],
        ],
    ],
    'FE' => [
        'cHashIncludePageId' => true,
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
    ],
    'INSTALL' => [
        'wizardDone' => [
            'TYPO3\CMS\Install\Updates\AccessRightParametersUpdate' => 1,
            'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MediaceExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe' => 1,
            'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
            'TYPO3\CMS\Install\Updates\OpenidExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
            'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
            'TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
        ],
    ],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'clearCacheSystem' => false,
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => '9cbdd1b10a9d9301aaab2ce2e74f1098ba469a61d16c1126368cfaf9c85da20ca1caf74ddb537c4ab38721775e36eb0b',
        'exceptionalErrors' => 20480,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Buud Yam',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];
