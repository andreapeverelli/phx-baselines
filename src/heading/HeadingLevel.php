<?php

/*
 * Copyright (c) 2026 Andrea Peverelli
 * https://github.com/andreapeverelli/phx-core.git
 *
 * SPDX-License-Identifier: GPL-3.0-only
 */

/**
 * @file HeadingLevel.php
 * @brief Heading supported levels.
 */

declare(strict_types=1);

namespace AndreaPeverelli\PhxBaselines;

enum HeadingLevel: int
{
    case H1 = 1;
    case H2 = 2;
    case H3 = 3;
    case H4 = 4;
    case H5 = 5;
    case H6 = 6;
}
