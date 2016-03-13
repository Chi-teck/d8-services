<?php

/**
 * @file
 * Example of usage the cache_context.user.is_super_user service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\IsSuperUserCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.user.is_super_user service.
   *
   * @var \Drupal\Core\Cache\Context\IsSuperUserCacheContext
   */
  protected $isSuperUser;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\IsSuperUserCacheContext $is_super_user
   *   The is_super_user service.
   */
   public function __construct(IsSuperUserCacheContext $is_super_user) {
     $this->isSuperUser = $is_super_user;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.user.is_super_user')
    );
  }

}
