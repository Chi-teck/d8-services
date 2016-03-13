<?php

/**
 * @file
 * Example of usage the plugin.manager.condition service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Condition\ConditionManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Executable\ExecutableManagerInterface;
use Drupal\Component\Plugin\CategorizingPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.condition service.
   *
   * @var \Drupal\Core\Condition\ConditionManager
   */
  protected $condition;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Condition\ConditionManager $condition
   *   The condition service.
   */
   public function __construct(ConditionManager $condition) {
     $this->condition = $condition;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.condition')
    );
  }

}
