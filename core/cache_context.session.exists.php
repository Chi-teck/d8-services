<?php

/**
 * @file
 * Example of usage the cache_context.session.exists service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\SessionExistsCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.session.exists service.
   *
   * @var \Drupal\Core\Cache\Context\SessionExistsCacheContext
   */
  protected $exists;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\SessionExistsCacheContext $exists
   *   The exists service.
   */
   public function __construct(SessionExistsCacheContext $exists) {
     $this->exists = $exists;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.session.exists')
    );
  }

}
