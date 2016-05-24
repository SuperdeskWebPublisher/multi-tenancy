<?php

/**
 * This file is part of the Superdesk Web Publisher MultiTenancy Component.
 *
 * Copyright 2016 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2016 Sourcefabric z.ú.
 * @license http://www.superdesk.org/license
 */

namespace spec\SWP\Component\MultiTenancy\Factory;

use PhpSpec\ObjectBehavior;
use SWP\Component\MultiTenancy\Factory\TenantFactory;
use SWP\Component\MultiTenancy\Factory\TenantFactoryInterface;
use SWP\Component\MultiTenancy\Model\Tenant;

/**
 * @mixin TenantFactory
 */
class TenantFactorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(Tenant::class);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TenantFactory::class);
    }

    function it_implements_tenant_factory_interface()
    {
        $this->shouldImplement(TenantFactoryInterface::class);
    }

    function it_creates_a_new_empty_tenant()
    {
        $this->create()->shouldHaveType(new Tenant());
    }
}
