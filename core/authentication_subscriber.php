<?php

/**
 * @file
 * Example of usage the authentication_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\AuthenticationSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The authentication_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\AuthenticationSubscriber
   */
  protected $authenticationSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\AuthenticationSubscriber $authentication_subscriber
   *   The authentication_subscriber service.
   */
   public function __construct(AuthenticationSubscriber $authentication_subscriber) {
     $this->authenticationSubscriber = $authentication_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('authentication_subscriber')
    );
  }

}
