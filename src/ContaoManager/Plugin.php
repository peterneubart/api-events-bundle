<?php

namespace Nb\ContaoApiEventsBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Nb\ContaoApiEventsBundle\NbContaoApiEventsBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\CoreBundle\ContaoCalendarBunde;

use Contao\ManagerPlugin\Dependency\DependentPluginInterface;

use Contao\ManagerPlugin\Config\ContainerBuilder;
use Contao\ManagerPlugin\Config\ExtensionPluginInterface;
use HeimrichHannot\UtilsBundle\Container\ContainerUtil;

class Plugin implements BundlePluginInterface, DependentPluginInterface, ExtensionPluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(NbContaoApiEventsBundle::class)
                ->setLoadAfter(
                    [
                        ContaoCoreBundle::class,
                        // ContaoCalendarBunde::class,
                        ContaoApiBundle::class
                    ]
                )
        ];
    }

    public function getPackageDependencies()
    {
        return ['contao/core-bundle', 'contao/calendar-bundle'];
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionConfig($extensionName, array $extensionConfigs, ContainerBuilder $container)
    {
        return ContainerUtil::mergeConfigFile(
            'huh_api',
            $extensionName,
            $extensionConfigs,
            __DIR__.'/../Resources/config/config.yml'
        );
    }
}
