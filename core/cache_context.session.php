<?php

/**
 * @file
 * Example of usage the cache_context.session service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\SessionCacheContext;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.session service.
   *
   * @var \Drupal\Core\Cache\Context\SessionCacheContext
   */
  protected $session;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\SessionCacheContext $session
   *   The session service.
   */
   public function __construct(SessionCacheContext $session) {
     $this->session = $session;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.session')
    );
  }

}
