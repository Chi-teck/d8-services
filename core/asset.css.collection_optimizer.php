<?php

/**
 * @file
 * Example of usage the asset.css.collection_optimizer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\CssCollectionOptimizer;
// The service interfaces.
use Drupal\Core\Asset\AssetCollectionOptimizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.css.collection_optimizer service.
   *
   * @var \Drupal\Core\Asset\CssCollectionOptimizer
   */
  protected $collectionOptimizer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\CssCollectionOptimizer $collection_optimizer
   *   The collection_optimizer service.
   */
   public function __construct(CssCollectionOptimizer $collection_optimizer) {
     $this->collectionOptimizer = $collection_optimizer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.css.collection_optimizer')
    );
  }

}
