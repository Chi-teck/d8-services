<?php

/**
 * @file
 * Example of usage the asset.js.collection_grouper service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\JsCollectionGrouper;
// The service interfaces.
use Drupal\Core\Asset\AssetCollectionGrouperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.js.collection_grouper service.
   *
   * @var \Drupal\Core\Asset\JsCollectionGrouper
   */
  protected $collectionGrouper;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\JsCollectionGrouper $collection_grouper
   *   The collection_grouper service.
   */
   public function __construct(JsCollectionGrouper $collection_grouper) {
     $this->collectionGrouper = $collection_grouper;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.js.collection_grouper')
    );
  }

}
