<?php

/**
 * @file
 * Example of usage the path_processor_decode service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PathProcessor\PathProcessorDecode;
// The service interfaces.
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_processor_decode service.
   *
   * @var \Drupal\Core\PathProcessor\PathProcessorDecode
   */
  protected $pathProcessorDecode;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PathProcessor\PathProcessorDecode $path_processor_decode
   *   The path_processor_decode service.
   */
   public function __construct(PathProcessorDecode $path_processor_decode) {
     $this->pathProcessorDecode = $path_processor_decode;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_processor_decode')
    );
  }

}
