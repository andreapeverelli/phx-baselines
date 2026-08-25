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

/** @phpstan-import-type RawAttributes from \AndreaPeverelli\PhxCore\Props */
final class HeadingProps extends Props
{
    /** @param RawAttributes $attributes */
    public function __construct(
        public readonly string $content,
        public readonly HeadingLevel $level = HeadingLevel::H1,
        array $attributes = [],
    ) {
        $this->attributes = $attributes;
    }
}
