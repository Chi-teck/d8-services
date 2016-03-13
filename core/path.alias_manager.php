<?php

/**
 * @file
 * Example of usage the path.alias_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Path\AliasManager;
// The service interfaces.
use Drupal\Core\Path\AliasManagerInterface;
use Drupal\Core\CacheDecorator\CacheDecoratorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path.alias_manager service.
   *
   * @var \Drupal\Core\Path\AliasManagerInterface
   */
  protected $aliasManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Path\AliasManagerInterface $alias_manager
   *   The alias_manager service.
   */
   public function __construct(AliasManagerInterface $alias_manager) {
     $this->aliasManager = $alias_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.alias_manager')
    );
  }

}
