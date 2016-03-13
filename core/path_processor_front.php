<?php

/**
 * @file
 * Example of usage the path_processor_front service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PathProcessor\PathProcessorFront;
// The service interfaces.
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;
use Drupal\Core\PathProcessor\OutboundPathProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_processor_front service.
   *
   * @var \Drupal\Core\PathProcessor\PathProcessorFront
   */
  protected $pathProcessorFront;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PathProcessor\PathProcessorFront $path_processor_front
   *   The path_processor_front service.
   */
   public function __construct(PathProcessorFront $path_processor_front) {
     $this->pathProcessorFront = $path_processor_front;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_processor_front')
    );
  }

}
