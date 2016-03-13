<?php

/**
 * @file
 * Example of usage the basic_auth.authentication.basic_auth service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\basic_auth\Authentication\Provider\BasicAuth;
// The service interfaces.
use Drupal\Core\Authentication\AuthenticationProviderInterface;
use Drupal\Core\Authentication\AuthenticationProviderChallengeInterface;

/**
 * The example.
 */
class Example {

  /**
   * The basic_auth.authentication.basic_auth service.
   *
   * @var \Drupal\basic_auth\Authentication\Provider\BasicAuth
   */
  protected $basicAuth;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\basic_auth\Authentication\Provider\BasicAuth $basic_auth
   *   The basic_auth service.
   */
   public function __construct(BasicAuth $basic_auth) {
     $this->basicAuth = $basic_auth;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('basic_auth.authentication.basic_auth')
    );
  }

}
