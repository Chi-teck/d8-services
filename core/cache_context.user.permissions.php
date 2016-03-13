<?php

/**
 * @file
 * Example of usage the cache_context.user.permissions service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\AccountPermissionsCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.user.permissions service.
   *
   * @var \Drupal\Core\Cache\Context\AccountPermissionsCacheContext
   */
  protected $permissions;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\AccountPermissionsCacheContext $permissions
   *   The permissions service.
   */
   public function __construct(AccountPermissionsCacheContext $permissions) {
     $this->permissions = $permissions;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.user.permissions')
    );
  }

}
