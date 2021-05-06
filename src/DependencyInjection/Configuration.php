<?php

declare(strict_types=1);

namespace Praetorian\RefreshTokenManagerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('praetorian_refresh_token_manager_bundle');
        return $treeBuilder;
    }
}
