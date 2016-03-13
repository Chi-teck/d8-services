<?php

/**
 * @file
 * Example of usage the authentication_collector service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Authentication\AuthenticationCollector;
// The service interfaces.
use Drupal\Core\Authentication\AuthenticationCollectorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The authentication_collector service.
   *
   * @var \Drupal\Core\Authentication\AuthenticationCollectorInterface
   */
  protected $authenticationCollector;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Authentication\AuthenticationCollectorInterface $authentication_collector
   *   The authentication_collector service.
   */
   public function __construct(AuthenticationCollectorInterface $authentication_collector) {
     $this->authenticationCollector = $authentication_collector;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('authentication_collector')
    );
  }

}
