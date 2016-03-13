<?php

/**
 * @file
 * Example of usage the user_permissions_hash_generator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\PermissionsHashGenerator;
// The service interfaces.
use Drupal\Core\Session\PermissionsHashGeneratorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user_permissions_hash_generator service.
   *
   * @var \Drupal\Core\Session\PermissionsHashGeneratorInterface
   */
  protected $userPermissionsHashGenerator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\PermissionsHashGeneratorInterface $user_permissions_hash_generator
   *   The user_permissions_hash_generator service.
   */
   public function __construct(PermissionsHashGeneratorInterface $user_permissions_hash_generator) {
     $this->userPermissionsHashGenerator = $user_permissions_hash_generator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user_permissions_hash_generator')
    );
  }

}
