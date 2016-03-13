<?php

/**
 * @file
 * Example of usage the controller_resolver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Controller\ControllerResolver;
// The service interfaces.
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Drupal\Core\Controller\ControllerResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The controller_resolver service.
   *
   * @var \Drupal\Core\Controller\ControllerResolverInterface
   */
  protected $controllerResolver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Controller\ControllerResolverInterface $controller_resolver
   *   The controller_resolver service.
   */
   public function __construct(ControllerResolverInterface $controller_resolver) {
     $this->controllerResolver = $controller_resolver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('controller_resolver')
    );
  }

}
