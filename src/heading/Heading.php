<?php

/*
 * Copyright (c) 2026 Andrea Peverelli
 * https://github.com/andreapeverelli/phx-core.git
 *
 * SPDX-License-Identifier: GPL-3.0-only
 */

/**
 * @file Heading.php
 * @brief Heading component2 implementation.
 */

declare(strict_types=1);

namespace AndreaPeverelli\PhxBaselines;

use AndreaPeverelli\PhxCore\App;
use AndreaPeverelli\PhxCore\Component;
use AndreaPeverelli\PhxCore\Css\CssProperty;

final class Heading extends Component
{
    final protected static function getName(): string
    {
        return "baseline-heading";
    }

    final protected static function getTemplatePath(): string
    {
        return __DIR__ . "/heading.mustache";
    }

    public function __construct(HeadingProps $props, App $app)
    {
        ["default" => $default_props] = $this->setup(props: $props, app: $app);

        $this->addColor(color: $default_props->color, css_property: CssProperty::COLOR);
        $this->addTypo(typo: $default_props->typo, content: $default_props->content);

        $this->context = new HeadingContext(
            level: $default_props->level->value,
            attributes: $this->getAttributes(),
            content: $default_props->content,
        );

        $this->build();
    }
}
