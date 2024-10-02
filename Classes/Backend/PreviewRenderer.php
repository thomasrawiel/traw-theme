<?php

namespace TRAW\TrawTheme\Backend;

use TYPO3\CMS\Backend\Preview\StandardContentPreviewRenderer;
use TYPO3\CMS\Backend\View\BackendLayout\Grid\GridColumnItem;

class PreviewRenderer extends StandardContentPreviewRenderer
{
    public function renderPageModulePreviewFooter(GridColumnItem $item): string
    {
        $info = [];
        $record = $item->getRecord();
        $table = $item->getTable();
        $fieldList = [];
        $startTimeField = (string)($GLOBALS['TCA'][$table]['ctrl']['enablecolumns']['starttime'] ?? '');
        if ($startTimeField !== '') {
            $fieldList[] = $startTimeField;
        }
        $endTimeField = (string)($GLOBALS['TCA'][$table]['ctrl']['enablecolumns']['endtime'] ?? '');
        if ($endTimeField !== '') {
            $fieldList[] = $endTimeField;
        }
        $feGroupField = (string)($GLOBALS['TCA'][$table]['ctrl']['enablecolumns']['fe_group'] ?? '');
        if ($feGroupField !== '') {
            $fieldList[] = $feGroupField;
        }
        if ($table === 'tt_content') {
            if (is_array($GLOBALS['TCA'][$table]['columns']['space_before_class'] ?? null)) {
                $fieldList[] = 'space_before_class';
            }
            if (is_array($GLOBALS['TCA'][$table]['columns']['space_after_class'] ?? null)) {
                $fieldList[] = 'space_after_class';
            }
            if (is_array($GLOBALS['TCA'][$table]['columns']['test_field'] ?? null)) {
                $fieldList[] = 'test_field';
            }

        }
        if ($fieldList === []) {
            return '';
        }
        $this->getProcessedValue($item, implode(',', $fieldList), $info);

        if (!empty($GLOBALS['TCA'][$table]['ctrl']['descriptionColumn']) && !empty($record[$GLOBALS['TCA'][$table]['ctrl']['descriptionColumn']])) {
            $info[] = htmlspecialchars($record[$GLOBALS['TCA'][$table]['ctrl']['descriptionColumn']]);
        }

        if ($info !== []) {
            return implode('<br>', $info);
        }
        return '';
    }
}