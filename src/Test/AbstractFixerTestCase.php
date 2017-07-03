<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpCsFixer\Test;

use PhpCsFixer\Tests\Test\AbstractFixerTestCase as BaseAbstractFixerTestCase;

/**
 * @TODO 3.0 While removing, `gecko-packages/gecko-php-unit` shall be moved from `require` to `require-dev` and removed from `.composer-require-checker.json`.
 * @TODO 3.0 While removing, remove from `.composer-require-checker.json`.
 * @TODO 3.0 While removing, remove loading `tests/Test` from `autoload` section of `composer.json`.
 *
 * @deprecated since v2.4
 */
abstract class AbstractFixerTestCase extends BaseAbstractFixerTestCase
{
    public function __construct()
    {
        @trigger_error(
            sprintf(
                'The "%s" class is deprecated. You should stop using it, as it will be removed in 3.0 version.',
                __CLASS__
            ),
            E_USER_DEPRECATED
        );
    }
}
