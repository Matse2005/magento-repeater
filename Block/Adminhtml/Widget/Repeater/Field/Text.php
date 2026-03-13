<?php
declare(strict_types=1);

namespace MatseVH\Repeater\Block\Adminhtml\Widget\Repeater\Field;

class Text extends AbstractField
{
    protected const SHOW_LABEL = true;

    public function renderTemplate(string $elementId): string
    {
        return sprintf(
            '<input type="text"
            id="%s_%s_{{idx}}"
            class="input-text admin__control-text%s"
            data-field="%s"
            %s
            value="{{value}}" />',
            static::escaper()->escapeHtmlAttr($elementId),
            static::escaper()->escapeHtmlAttr($this->name),
            $this->required ? ' required-entry' : '',
            static::escaper()->escapeHtmlAttr($this->name),
            $this->required ? 'required' : '',
        );
    }
}
