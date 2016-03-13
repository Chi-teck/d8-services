<?php

/**
 * @file
 * Example of usage the access_arguments_resolver_factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\AccessArgumentsResolverFactory;
// The service interfaces.
use Drupal\Core\Access\AccessArgumentsResolverFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_arguments_resolver_factory service.
   *
   * @var \Drupal\Core\Access\AccessArgumentsResolverFactoryInterface
   */
  protected $accessArgumentsResolverFactory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\AccessArgumentsResolverFactoryInterface $access_arguments_resolver_factory
   *   The access_arguments_resolver_factory service.
   */
   public function __construct(AccessArgumentsResolverFactoryInterface $access_arguments_resolver_factory) {
     $this->accessArgumentsResolverFactory = $access_arguments_resolver_factory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_arguments_resolver_factory')
    );
  }

}
