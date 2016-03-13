<?php

/**
 * @file
 * Example of usage the cache_context.user.roles service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\UserRolesCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CalculatedCacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.user.roles service.
   *
   * @var \Drupal\Core\Cache\Context\UserRolesCacheContext
   */
  protected $roles;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\UserRolesCacheContext $roles
   *   The roles service.
   */
   public function __construct(UserRolesCacheContext $roles) {
     $this->roles = $roles;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.user.roles')
    );
  }

}
