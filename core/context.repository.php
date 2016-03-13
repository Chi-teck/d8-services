<?php

/**
 * @file
 * Example of usage the context.repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Plugin\Context\LazyContextRepository;
// The service interfaces.
use Drupal\Core\Plugin\Context\ContextRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The context.repository service.
   *
   * @var \Drupal\Core\Plugin\Context\LazyContextRepository
   */
  protected $repository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Plugin\Context\LazyContextRepository $repository
   *   The repository service.
   */
   public function __construct(LazyContextRepository $repository) {
     $this->repository = $repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('context.repository')
    );
  }

}
