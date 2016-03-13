<?php

/**
 * @file
 * Example of usage the dynamic_page_cache_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\dynamic_page_cache\EventSubscriber\DynamicPageCacheSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The dynamic_page_cache_subscriber service.
   *
   * @var \Drupal\dynamic_page_cache\EventSubscriber\DynamicPageCacheSubscriber
   */
  protected $dynamicPageCacheSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\dynamic_page_cache\EventSubscriber\DynamicPageCacheSubscriber $dynamic_page_cache_subscriber
   *   The dynamic_page_cache_subscriber service.
   */
   public function __construct(DynamicPageCacheSubscriber $dynamic_page_cache_subscriber) {
     $this->dynamicPageCacheSubscriber = $dynamic_page_cache_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dynamic_page_cache_subscriber')
    );
  }

}
