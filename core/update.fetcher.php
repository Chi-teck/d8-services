<?php

/**
 * @file
 * Example of usage the update.fetcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\update\UpdateFetcher;
// The service interfaces.
use Drupal\update\UpdateFetcherInterface;

/**
 * The example.
 */
class Example {

  /**
   * The update.fetcher service.
   *
   * @var \Drupal\update\UpdateFetcherInterface
   */
  protected $fetcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\update\UpdateFetcherInterface $fetcher
   *   The fetcher service.
   */
   public function __construct(UpdateFetcherInterface $fetcher) {
     $this->fetcher = $fetcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('update.fetcher')
    );
  }

}
