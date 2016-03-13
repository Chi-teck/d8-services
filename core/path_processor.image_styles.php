<?php

/**
 * @file
 * Example of usage the path_processor.image_styles service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\image\PathProcessor\PathProcessorImageStyles;
// The service interfaces.
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_processor.image_styles service.
   *
   * @var \Drupal\image\PathProcessor\PathProcessorImageStyles
   */
  protected $imageStyles;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\image\PathProcessor\PathProcessorImageStyles $image_styles
   *   The image_styles service.
   */
   public function __construct(PathProcessorImageStyles $image_styles) {
     $this->imageStyles = $image_styles;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_processor.image_styles')
    );
  }

}
