<?php
/**
 * File containing the Legacy\LegacyCreateObjectStateGroupSlot class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

namespace eZ\Publish\Core\MVC\Legacy\SignalSlot;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * A legacy slot handling CreateObjectStateGroupSignal.
 */
class LegacyCreateObjectStateGroupSlot extends AbstractLegacyObjectStateSlot
{
    /**
     * Receive the given $signal and react on it.
     *
     * @param \eZ\Publish\Core\SignalSlot\Signal $signal
     */
    public function receive(Signal $signal)
    {
        if (!$signal instanceof Signal\ObjectStateService\CreateObjectStateGroupSignal) {
            return;
        }

        parent::receive($signal);
    }
}
