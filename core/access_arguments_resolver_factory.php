<?php

/**
 * @file
 * Example of usage the access_arguments_resolver_factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;
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
  protected $argumentsResolverFactory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\AccessArgumentsResolverFactoryInterface $arguments_resolver_factory
   *   The access arguments resolver.
   */
   public function __construct(AccessArgumentsResolverFactoryInterface $arguments_resolver_factory) {
     $this->argumentsResolverFactory = $arguments_resolver_factory;
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
