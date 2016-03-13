<?php

/**
 * @file
 * Example of usage the user_last_access_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\EventSubscriber\UserRequestSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user_last_access_subscriber service.
   *
   * @var \Drupal\user\EventSubscriber\UserRequestSubscriber
   */
  protected $userLastAccessSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\EventSubscriber\UserRequestSubscriber $user_last_access_subscriber
   *   The user_last_access_subscriber service.
   */
   public function __construct(UserRequestSubscriber $user_last_access_subscriber) {
     $this->userLastAccessSubscriber = $user_last_access_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user_last_access_subscriber')
    );
  }

}
