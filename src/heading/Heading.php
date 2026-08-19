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

namespace AndreaPeverelli\PhxBaselines;

use AndreaPeverelli\PhxCore\Component;

final class Heading extends Component
{
	public function __construct(HeadingProps $props)
	{
		["default" => $default_props] = $this->setup(
			props: $props,
			template: file_get_contexts(__DIR__ . "/heading.mustache"),
		);

		$this->context = new HeadingContext(
			level: $default_props->level->value,
			attributes: $this->getAttributes(),
			content: $default_props->content,
		);

		$this->build();
	}
}
