<?php

declare(strict_types=1);

namespace MatseVH\Repeater\Api;

interface RepeaterConfigInterface
{
    /**
     * Return all field definitions for this repeater.
     * @return \MatseVH\Repeater\Block\Adminhtml\Widget\Repeater\Field\AbstractField[]
     */
    public function getFields(): array;

    /**
     * Unique identifier used as the widget parameter name.
     */
    public function getName(): string;

    /**
     * Human-readable label shown in the widget form.
     */
    public function getLabel(): string;
}
