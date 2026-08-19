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

namespace AndreaPeverelli\PhxBaselines;

final class HeadingContext
{
	public function __construct(
		public int $level,
		public array $attributes,
		public string $content,
	) {}
}
