<?php

/**
 * @file
 * Example of usage the anonymous_user_response_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The anonymous_user_response_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber
   */
  protected $anonymousUserResponseSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber $anonymous_user_response_subscriber
   *   The anonymous_user_response_subscriber service.
   */
   public function __construct(AnonymousUserResponseSubscriber $anonymous_user_response_subscriber) {
     $this->anonymousUserResponseSubscriber = $anonymous_user_response_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('anonymous_user_response_subscriber')
    );
  }

}
