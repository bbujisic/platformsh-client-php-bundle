<?php

namespace bbujisic\PlatformClientBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('platform_client');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('api_token')
                    ->defaultValue(null)
                ->end()
                ->scalarNode('api_token_type')
                    ->defaultValue(null)
                ->end()
            ->end();

        return $treeBuilder;
    }

}
