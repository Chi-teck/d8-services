<?php

/**
 * @file
 * Example of usage the http_middleware.page_cache service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\page_cache\StackMiddleware\PageCache;
// The service interfaces.
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * The example.
 */
class Example {

  /**
   * The http_middleware.page_cache service.
   *
   * @var \Drupal\page_cache\StackMiddleware\PageCache
   */
  protected $pageCache;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\page_cache\StackMiddleware\PageCache $page_cache
   *   The page_cache service.
   */
   public function __construct(PageCache $page_cache) {
     $this->pageCache = $page_cache;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_middleware.page_cache')
    );
  }

}
