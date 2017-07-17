<?php
/**
 * Created by PhpStorm.
 * User: dpanzella
 * Date: 7/12/17
 * Time: 9:16 PM
 */

namespace DanielPanzella\PlatformClientBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class PlatformClientExtension extends Extension {

	public function load( array $configs, ContainerBuilder $container )
	{
		$loader = new YamlFileLoader(
			$container,
			new FileLocator(__DIR__.'/../Resources/config')
		);
		$loader->load('services.yml');

		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);

		$platformClientServiceConfiguration = [
			"api_token" => $config['api_token'],
			"api_token_type" => $config['api_token_type']
		];

		$definition = $container->getDefinition('Platformsh\Client\Connection\Connector');
		$definition->replaceArgument(0, $platformClientServiceConfiguration);



	}

}