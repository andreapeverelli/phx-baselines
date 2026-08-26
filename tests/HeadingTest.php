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

declare(strict_types=1);

namespace Tests;

use AndreaPeverelli\PhxCore\Palette\BaseColor;
use AndreaPeverelli\PhxCore\Palette\ColorRole;
use AndreaPeverelli\PhxCore\Settings\Setting;
use AndreaPeverelli\PhxCore\Typography\Emphasized;
use AndreaPeverelli\PhxCore\Typography\TypoRole;
use AndreaPeverelli\PhxCore\Typography\TypoSubRole;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use Monolog\Logger;
use AndreaPeverelli\PhxCore\App;
use AndreaPeverelli\PhxCore\Palette\Color;
use AndreaPeverelli\PhxCore\Typography\Typo;
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

        foreach (HeadingLevel::cases() as $level) {

            /**************************************************
             * Setup                                          *
             **************************************************/

            $heading = new Heading(
                props: new HeadingProps(
                    level: $level,
                    content: "Test {$level->name}",
                    attributes: ["id" => $id],
                    color: new Color(
                        base: BaseColor::NEUTRAL,
                        role: ColorRole::ON_SURFACE,
                    ),
                    typo: new Typo(
                        role: TypoRole::DISPLAY,
                        sub_role: TypoSubRole::LARGE,
                        emphasized: Emphasized::REGULAR,
                    ),
                ),
                app: new App(
                    logger: new Logger(""),
                    settings: Setting::loadAll(),
                ),
            );

            /**************************************************
             * Tests                                          *
             **************************************************/

            $this->assertStringContainsString(
                "<h{$level->value} id=\"$id\" class=\"neutral-on-surface-color display-large\">Test {$level->name}</h{$level->value}>",
                $heading->html,
                "Building {$level->name}",
            );

            $this->assertSame(
                [
                    <<<CSS
                    .neutral-on-surface-color {
                        color: "#201a1b";
                        color: "color(display-p3 0.12 0.10 0.11)";
                        color: "color(rec2020 0.16 0.15 0.15)";

                        @media (prefers-contrast: more) {
                            color: "#000000";
                            color: "color(display-p3 0.00 0.00 0.00)";
                            color: "color(rec2020 0.00 0.00 0.00)";
                        }	

                        @media (prefers-color-scheme: dark) {
                            color: "#ebe0e1";
                            color: "color(display-p3 0.92 0.88 0.88)";
                            color: "color(rec2020 0.91 0.89 0.89)";

                            @media (prefers-contrast: more) {
                                color: "#ffffff";
                                color: "color(display-p3 1.00 1.00 1.00)";
                                color: "color(rec2020 1.00 1.00 1.00)";
                            }
                        }
                    }
                    CSS,
                    <<<CSS
                    .display-large {
                        font-family: "phx-heading";
                        font-size: "57";
                        font-weight: "400";
                        line-height: "64";
                        letter-spacing: "0";
                    }
                    CSS,
                ],
                $heading->css,
                "Checking CSS of " . $level->name,
            );
        }
    }
}
