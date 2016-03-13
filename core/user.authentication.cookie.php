<?php

/**
 * @file
 * Example of usage the user.authentication.cookie service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\Authentication\Provider\Cookie;
// The service interfaces.
use Drupal\Core\Authentication\AuthenticationProviderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user.authentication.cookie service.
   *
   * @var \Drupal\user\Authentication\Provider\Cookie
   */
  protected $cookie;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\Authentication\Provider\Cookie $cookie
   *   The cookie service.
   */
   public function __construct(Cookie $cookie) {
     $this->cookie = $cookie;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.authentication.cookie')
    );
  }

}
