<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Tests\Model;

use XApi\Model\StateDocument;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StateDocumentTest extends AbstractDocumentTest
{
    protected function createDocument()
    {
        return new StateDocument();
    }
}
