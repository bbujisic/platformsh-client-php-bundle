<?php
/**
 * Created by PhpStorm.
 * User: dpanzella
 * Date: 7/12/17
 * Time: 9:15 PM
 */

namespace DanielPanzella\PlatformClientBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('platform_client');

		$rootNode
			->children()
				->scalarNode('api_token')
					->defaultValue(NULL)
				->end()
				->scalarNode('api_token_type')
					->defaultValue(NULL)
				->end()
			->end();

		return $treeBuilder;
	}

}