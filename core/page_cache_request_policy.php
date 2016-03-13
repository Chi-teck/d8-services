<?php

/**
 * @file
 * Example of usage the page_cache_request_policy service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PageCache\DefaultRequestPolicy;
// The service interfaces.
use Drupal\Core\PageCache\RequestPolicyInterface;
use Drupal\Core\PageCache\ChainRequestPolicyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The page_cache_request_policy service.
   *
   * @var \Drupal\Core\PageCache\DefaultRequestPolicy
   */
  protected $pageCacheRequestPolicy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PageCache\DefaultRequestPolicy $page_cache_request_policy
   *   The page_cache_request_policy service.
   */
   public function __construct(DefaultRequestPolicy $page_cache_request_policy) {
     $this->pageCacheRequestPolicy = $page_cache_request_policy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('page_cache_request_policy')
    );
  }

}
