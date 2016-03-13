<?php

/**
 * @file
 * Example of usage the path_processor_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PathProcessor\PathProcessorManager;
// The service interfaces.
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;
use Drupal\Core\PathProcessor\OutboundPathProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_processor_manager service.
   *
   * @var \Drupal\Core\PathProcessor\PathProcessorManager
   */
  protected $pathProcessorManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PathProcessor\PathProcessorManager $path_processor_manager
   *   The path_processor_manager service.
   */
   public function __construct(PathProcessorManager $path_processor_manager) {
     $this->pathProcessorManager = $path_processor_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_processor_manager')
    );
  }

}
