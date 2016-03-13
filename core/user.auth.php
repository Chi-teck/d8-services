<?php

/**
 * @file
 * Example of usage the user.auth service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\UserAuth;
// The service interfaces.
use Drupal\user\UserAuthInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user.auth service.
   *
   * @var \Drupal\user\UserAuthInterface
   */
  protected $auth;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\UserAuthInterface $auth
   *   The auth service.
   */
   public function __construct(UserAuthInterface $auth) {
     $this->auth = $auth;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.auth')
    );
  }

}
