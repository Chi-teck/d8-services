<?php

/**
 * @file
 * Example of usage the password_migrate service.
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
   * The password_migrate service.
   *
   * @var \Drupal\user\MigratePassword
   */
  protected $passwordMigrate;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\MigratePassword $password_migrate
   *   The password_migrate service.
   */
   public function __construct(MigratePassword $password_migrate) {
     $this->passwordMigrate = $password_migrate;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('password_migrate')
    );
  }

}
