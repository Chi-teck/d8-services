<?php

/**
 * @file
 * Example of usage the asset.js.collection_optimizer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\JsCollectionOptimizer;
// The service interfaces.
use Drupal\Core\Asset\AssetCollectionOptimizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.js.collection_optimizer service.
   *
   * @var \Drupal\Core\Asset\JsCollectionOptimizer
   */
  protected $collectionOptimizer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\JsCollectionOptimizer $collection_optimizer
   *   The collection_optimizer service.
   */
   public function __construct(JsCollectionOptimizer $collection_optimizer) {
     $this->collectionOptimizer = $collection_optimizer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.js.collection_optimizer')
    );
  }

}
