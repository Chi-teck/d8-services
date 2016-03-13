<?php

/**
 * @file
 * Example of usage the asset.css.collection_renderer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\CssCollectionRenderer;
// The service interfaces.
use Drupal\Core\Asset\AssetCollectionRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.css.collection_renderer service.
   *
   * @var \Drupal\Core\Asset\CssCollectionRenderer
   */
  protected $collectionRenderer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\CssCollectionRenderer $collection_renderer
   *   The collection_renderer service.
   */
   public function __construct(CssCollectionRenderer $collection_renderer) {
     $this->collectionRenderer = $collection_renderer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.css.collection_renderer')
    );
  }

}
