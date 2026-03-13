<?php
declare(strict_types=1);

namespace MatseVH\Repeater\Block\Adminhtml\Widget\Repeater\Field;

class Hr extends AbstractField
{
    protected const SHOW_LABEL = false;

    public function renderTemplate(string $elementId): string
    {
        return sprintf(
            '<hr data-field="" style="border:0;border-top:1px solid #e3e3e3;margin:8px 0;" />'
        );
    }
}
