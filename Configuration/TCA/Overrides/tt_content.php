<?php

######################################
##### Bootstrap Grid Element 6/6 #####
######################################
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
    'bootstrap-2cols-container',
    '2 Column 6-6',
    'A 2 Column 6-6 Container',
    'EXT:container_bootstrap/Resources/Public/Icons/bootstrap-2cols-container.svg',
    [
        [
            ['name' => 'left side', 'colPos' => 201],
            ['name' => 'right side', 'colPos' => 202]
        ]
    ]
);

$GLOBALS['TCA']['tt_content']['types']['bootstrap-2cols-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';

######################################
##### Bootstrap Grid Element 3/9 #####
######################################
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
    'bootstrap-2cols-3-9-container',
    '2 Column 3-9',
    'A 2 Column 3-9 Container',
    'EXT:container_bootstrap/Resources/Public/Icons/bootstrap-2cols-container.svg',
    [
        [
            ['name' => 'left side', 'colPos' => 201, 'colspan' => 3],
            ['name' => 'right side', 'colPos' => 202, 'colspan' => 9]
        ]
    ]
);

$GLOBALS['TCA']['tt_content']['types']['bootstrap-2cols-3-9-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';
######################################
##### Bootstrap Grid Element 3/9 #####
######################################
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
    'bootstrap-2cols-9-3-container',
    '2 Column 9-3',
    'A 2 Column 9-3 Container',
    'EXT:container_bootstrap/Resources/Public/Icons/bootstrap-2cols-container.svg',
    [
        [
            ['name' => 'left side', 'colPos' => 201, 'colspan' => 9],
            ['name' => 'right side', 'colPos' => 202, 'colspan' => 3]
        ]
    ]
);

$GLOBALS['TCA']['tt_content']['types']['bootstrap-2cols-9-3-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';
