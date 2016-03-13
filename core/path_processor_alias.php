<?php

/**
 * @file
 * Example of usage the path_processor_alias service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PathProcessor\PathProcessorAlias;
// The service interfaces.
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;
use Drupal\Core\PathProcessor\OutboundPathProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path_processor_alias service.
   *
   * @var \Drupal\Core\PathProcessor\PathProcessorAlias
   */
  protected $pathProcessorAlias;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PathProcessor\PathProcessorAlias $path_processor_alias
   *   The path_processor_alias service.
   */
   public function __construct(PathProcessorAlias $path_processor_alias) {
     $this->pathProcessorAlias = $path_processor_alias;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path_processor_alias')
    );
  }

}
