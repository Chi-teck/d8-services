<?php

/**
 * @file
 * Example of usage the dynamic_page_cache_request_policy service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\dynamic_page_cache\PageCache\RequestPolicy\DefaultRequestPolicy;
// The service interfaces.
use Drupal\Core\PageCache\RequestPolicyInterface;
use Drupal\Core\PageCache\ChainRequestPolicyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The dynamic_page_cache_request_policy service.
   *
   * @var \Drupal\dynamic_page_cache\PageCache\RequestPolicy\DefaultRequestPolicy
   */
  protected $dynamicPageCacheRequestPolicy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\dynamic_page_cache\PageCache\RequestPolicy\DefaultRequestPolicy $dynamic_page_cache_request_policy
   *   The dynamic_page_cache_request_policy service.
   */
   public function __construct(DefaultRequestPolicy $dynamic_page_cache_request_policy) {
     $this->dynamicPageCacheRequestPolicy = $dynamic_page_cache_request_policy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dynamic_page_cache_request_policy')
    );
  }

}
