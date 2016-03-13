<?php

/**
 * @file
 * Example of usage the unrouted_url_assembler service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Utility\UnroutedUrlAssembler;
// The service interfaces.
use Drupal\Core\Utility\UnroutedUrlAssemblerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The unrouted_url_assembler service.
   *
   * @var \Drupal\Core\Utility\UnroutedUrlAssemblerInterface
   */
  protected $unroutedUrlAssembler;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Utility\UnroutedUrlAssemblerInterface $unrouted_url_assembler
   *   The unrouted_url_assembler service.
   */
   public function __construct(UnroutedUrlAssemblerInterface $unrouted_url_assembler) {
     $this->unroutedUrlAssembler = $unrouted_url_assembler;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('unrouted_url_assembler')
    );
  }

}
