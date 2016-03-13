<?php

/**
 * @file
 * Example of usage the block.repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\block\BlockRepository;
// The service interfaces.
use Drupal\block\BlockRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The block.repository service.
   *
   * @var \Drupal\block\BlockRepositoryInterface
   */
  protected $repository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\block\BlockRepositoryInterface $repository
   *   The repository service.
   */
   public function __construct(BlockRepositoryInterface $repository) {
     $this->repository = $repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('block.repository')
    );
  }

}
