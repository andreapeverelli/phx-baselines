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

namespace AndreaPeverelli\PhxBaselines;

final class HeadingProps
{
	public function __construct(
		public HeadingLevel $level = HeadingLevel::H1,
		public array $attributes = [],
		public string $content = "",
	) {
		$this->attributes["id"] ??= uniqid();
	}
}
