<?php

/*
 * This file is part of the Superdesk Web Publisher MultiTenancy Component.
 *
 * Copyright 2015 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2015 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Component\MultiTenancy\Provider;

use SWP\Component\MultiTenancy\Model\TenantInterface;

interface TenantProviderInterface
{
    public function getAvailableTenants(): array;

    public function findOneByCode(string $tenantCode): ?TenantInterface;
}
