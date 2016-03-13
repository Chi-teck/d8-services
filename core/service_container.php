<?php

/**
 * @file
 * Example of usage the service_container service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\DependencyInjection\Container;
// The service interfaces.
use Symfony\Component\DependencyInjection\ResettableContainerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\IntrospectableContainerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The service_container service.
   *
   * @var \Drupal\Core\DependencyInjection\Container
   */
  protected $serviceContainer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\DependencyInjection\Container $service_container
   *   The service_container service.
   */
   public function __construct(Container $service_container) {
     $this->serviceContainer = $service_container;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('service_container')
    );
  }

}
