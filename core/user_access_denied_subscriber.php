<?php

/**
 * @file
 * Example of usage the user_access_denied_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\EventSubscriber\AccessDeniedSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user_access_denied_subscriber service.
   *
   * @var \Drupal\user\EventSubscriber\AccessDeniedSubscriber
   */
  protected $userAccessDeniedSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\EventSubscriber\AccessDeniedSubscriber $user_access_denied_subscriber
   *   The user_access_denied_subscriber service.
   */
   public function __construct(AccessDeniedSubscriber $user_access_denied_subscriber) {
     $this->userAccessDeniedSubscriber = $user_access_denied_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user_access_denied_subscriber')
    );
  }

}
