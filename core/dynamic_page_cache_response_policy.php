<?php

/**
 * @file
 * Example of usage the dynamic_page_cache_response_policy service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy;
// The service interfaces.
use Drupal\Core\PageCache\ChainResponsePolicyInterface;
use Drupal\Core\PageCache\ResponsePolicyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The dynamic_page_cache_response_policy service.
   *
   * @var \Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy
   */
  protected $dynamicPageCacheResponsePolicy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy $dynamic_page_cache_response_policy
   *   The dynamic_page_cache_response_policy service.
   */
   public function __construct(ChainResponsePolicy $dynamic_page_cache_response_policy) {
     $this->dynamicPageCacheResponsePolicy = $dynamic_page_cache_response_policy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dynamic_page_cache_response_policy')
    );
  }

}
