<?php

/**
 * @file
 * Example of usage the search.search_page_repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\search\SearchPageRepository;
// The service interfaces.
use Drupal\search\SearchPageRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The search.search_page_repository service.
   *
   * @var \Drupal\search\SearchPageRepositoryInterface
   */
  protected $searchPageRepository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\search\SearchPageRepositoryInterface $search_page_repository
   *   The search_page_repository service.
   */
   public function __construct(SearchPageRepositoryInterface $search_page_repository) {
     $this->searchPageRepository = $search_page_repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('search.search_page_repository')
    );
  }

}
