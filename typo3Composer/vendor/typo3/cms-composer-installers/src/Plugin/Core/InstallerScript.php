<?php
declare(strict_types=1);
namespace TYPO3\CMS\Composer\Plugin\Core;

/*
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Composer\Script\Event;

/**
 * Contract for script that is run during composer build time
 */
interface InstallerScript
{
    /**
     * @param Event $event
     * @return bool True on success, false on failure
     */
    public function run(Event $event): bool;
}
