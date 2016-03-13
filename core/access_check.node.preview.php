<?php

/**
 * @file
 * Example of usage the access_check.node.preview service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\Access\NodePreviewAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.node.preview service.
   *
   * @var \Drupal\node\Access\NodePreviewAccessCheck
   */
  protected $preview;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\Access\NodePreviewAccessCheck $preview
   *   The preview service.
   */
   public function __construct(NodePreviewAccessCheck $preview) {
     $this->preview = $preview;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.node.preview')
    );
  }

}
