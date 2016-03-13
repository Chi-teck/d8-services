<?php

/**
 * @file
 * Example of usage the page_cache_response_policy service.
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
   * The page_cache_response_policy service.
   *
   * @var \Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy
   */
  protected $pageCacheResponsePolicy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\PageCache\ChainResponsePolicy $page_cache_response_policy
   *   The page_cache_response_policy service.
   */
   public function __construct(ChainResponsePolicy $page_cache_response_policy) {
     $this->pageCacheResponsePolicy = $page_cache_response_policy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('page_cache_response_policy')
    );
  }

}
