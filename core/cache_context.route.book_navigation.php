<?php

/**
 * @file
 * Example of usage the cache_context.route.book_navigation service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\Cache\BookNavigationCacheContext;
// The service interfaces.
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.route.book_navigation service.
   *
   * @var \Drupal\book\Cache\BookNavigationCacheContext
   */
  protected $bookNavigation;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\Cache\BookNavigationCacheContext $book_navigation
   *   The book_navigation service.
   */
   public function __construct(BookNavigationCacheContext $book_navigation) {
     $this->bookNavigation = $book_navigation;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.route.book_navigation')
    );
  }

}
