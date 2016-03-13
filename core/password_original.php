<?php

/**
 * @file
 * Example of usage the password_original service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Password\PhpassHashedPassword;
// The service interfaces.
use Drupal\Core\Password\PasswordInterface;

/**
 * The example.
 */
class Example {

  /**
   * The password_original service.
   *
   * @var \Drupal\Core\Password\PhpassHashedPassword
   */
  protected $passwordOriginal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Password\PhpassHashedPassword $password_original
   *   The password_original service.
   */
   public function __construct(PhpassHashedPassword $password_original) {
     $this->passwordOriginal = $password_original;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('password_original')
    );
  }

}
