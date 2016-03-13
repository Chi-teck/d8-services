<?php

/**
 * @file
 * Example of usage the authentication service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Authentication\AuthenticationManager;
// The service interfaces.
use Drupal\Core\Authentication\AuthenticationProviderInterface;
use Drupal\Core\Authentication\AuthenticationProviderFilterInterface;
use Drupal\Core\Authentication\AuthenticationProviderChallengeInterface;

/**
 * The example.
 */
class Example {

  /**
   * The authentication service.
   *
   * @var \Drupal\Core\Authentication\AuthenticationManager
   */
  protected $authentication;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Authentication\AuthenticationManager $authentication
   *   The authentication service.
   */
   public function __construct(AuthenticationManager $authentication) {
     $this->authentication = $authentication;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('authentication')
    );
  }

}
