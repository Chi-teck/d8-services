<?php

/**
 * @file
 * Example of usage the password service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\MigratePassword;
// The service interfaces.
use Drupal\Core\Password\PasswordInterface;

/**
 * The example.
 */
class Example {

  /**
   * The password service.
   *
   * @var \Drupal\user\MigratePassword
   */
  protected $password;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\MigratePassword $password
   *   The password service.
   */
   public function __construct(MigratePassword $password) {
     $this->password = $password;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('password')
    );
  }

}
