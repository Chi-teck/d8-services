<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.node_preview service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\ParamConverter\NodePreviewConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.node_preview service.
   *
   * @var \Drupal\node\ParamConverter\NodePreviewConverter
   */
  protected $nodePreview;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\ParamConverter\NodePreviewConverter $node_preview
   *   The node_preview service.
   */
   public function __construct(NodePreviewConverter $node_preview) {
     $this->nodePreview = $node_preview;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.node_preview')
    );
  }

}
