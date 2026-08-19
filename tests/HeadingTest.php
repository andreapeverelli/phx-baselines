<?php

/*
 * Copyright (c) 2026 Andrea Peverelli
 * https://github.com/andreapeverelli/phx-core.git
 *
 * SPDX-License-Identifier: GPL-3.0-only
 */

/**
 * @file HeadingTest.php
 * @brief Heading component unit test.
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;

use AndreaPeverelli\PhxBaselines\Heading;
use AndreaPeverelli\PhxBaselines\HeadingLevel;
use AndreaPeverelli\PhxBaselines\HeadingProps;

final class HeadingTest extends TestCase
{
	#[Test]
	#[TestDox("Building Headings H1-H6")]
	public function headingsBuild(): void
	{
		$id = uniqid();

		foreach(HeadingLevel::cases() as $level) {
			$heading = new Heading(new HeadingProps(
				level: $level,
				content: "Test {$level->name}",
				attributes: ["id" => $id],
			));

			$this->assertStringContainsString(
				"<h{$level->value} id=\"$id\">Test {$level->name}</h{$level->value}>",
				$heading->html,
				"Building {$level->name}"
			);
		}
	}
}
