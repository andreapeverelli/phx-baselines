<?php

/*
 * Copyright (c) 2026 Andrea Peverelli
 * https://github.com/andreapeverelli/phx-core.git
 *
 * SPDX-License-Identifier: GPL-3.0-only
 */

/**
 * @file HeadingContext.php
 * @brief Heading component context data for mustache rendering.
 */

declare(strict_types=1);

namespace AndreaPeverelli\PhxBaselines;

/** @phpstan-import-type Attributes from \AndreaPeverelli\PhxCore\Component */
final readonly class HeadingContext
{
    /** @param Attributes $attributes */
    public function __construct(
        public private(set) int $level,
        public private(set) array $attributes,
        public private(set) string $content,
    ) {}
}
