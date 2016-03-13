<?php

/**
 * @file
 * Example of usage the cache_context.user service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\UserCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.user service.
   *
   * @var \Drupal\Core\Cache\Context\UserCacheContext
   */
  protected $user;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\UserCacheContext $user
   *   The user service.
   */
   public function __construct(UserCacheContext $user) {
     $this->user = $user;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.user')
    );
  }

}
