<?php

/**
 * @file
 * Example of usage the asset.js.collection_renderer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\JsCollectionRenderer;
// The service interfaces.
use Drupal\Core\Asset\AssetCollectionRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.js.collection_renderer service.
   *
   * @var \Drupal\Core\Asset\JsCollectionRenderer
   */
  protected $collectionRenderer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\JsCollectionRenderer $collection_renderer
   *   The collection_renderer service.
   */
   public function __construct(JsCollectionRenderer $collection_renderer) {
     $this->collectionRenderer = $collection_renderer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.js.collection_renderer')
    );
  }

}
