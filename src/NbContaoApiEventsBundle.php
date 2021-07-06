<?php

declare(strict_types=1);

namespace Nb\ContaoApiEventsBundle;

// use Nb\ContaoApiEventsBundle\DependencyInjection\NbContaoApiEventsExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NbContaoApiEventsBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        // return new NbContaoApiEventsExtension();
    }
}
