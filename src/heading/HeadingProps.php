<?php

/*
 * Copyright (c) 2026 Andrea Peverelli
 * https://github.com/andreapeverelli/phx-core.git
 *
 * SPDX-License-Identifier: GPL-3.0-only
 */

/**
 * @file HeadingProps.php
 * @brief Heading component props.
 */

declare(strict_types=1);

namespace AndreaPeverelli\PhxBaselines;

use AndreaPeverelli\PhxCore\Props;
use AndreaPeverelli\PhxCore\Palette\Color;
use AndreaPeverelli\PhxCore\Typography\Typo;

/** @phpstan-import-type PropsAttributes from \AndreaPeverelli\PhxCore\Props */
final class HeadingProps extends Props
{
    /** @param PropsAttributes $attributes */
    public function __construct(
        public readonly string $content,
        public readonly Color $color,
        public readonly Typo $typo,
        public readonly HeadingLevel $level = HeadingLevel::H1,
        array $attributes = [],
    ) {
        $this->attributes = $attributes;
    }
}
