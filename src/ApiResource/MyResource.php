<?php

namespace Nb\ContaoApiEventsBundle\ApiResource;

use Contao\CoreBundle\Framework\FrameworkAwareTrait;
use HeimrichHannot\ApiBundle\Security\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Request;

class MyResource implements ResourceInterface
{
    use FrameworkAwareTrait;
    use ContainerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function create(Request $request, UserInterface $user): ?array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, Request $request, UserInterface $user): ?array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function list(Request $request, UserInterface $user): ?array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function show($id, Request $request, UserInterface $user): ?array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id, Request $request, UserInterface $user): ?array
    {
        return [];
    }
}
