<?php
/**
 * This file is part of the prooph/event-store-client.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace Prooph\EventStoreClient\Internal;

use Amp\Promise;
use Prooph\EventStoreClient\EndPoint;

/** @internal */
interface EndPointDiscoverer
{
    /**
     * @param EndPoint|null $failedTcpEndPoint The recently failed endpoint
     * @return Promise<NodeEndPoints>
     */
    public function discoverAsync(?EndPoint $failedTcpEndPoint): Promise;
}
