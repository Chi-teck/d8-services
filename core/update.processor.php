<?php

/**
 * @file
 * Example of usage the update.processor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\update\UpdateProcessor;
// The service interfaces.
use Drupal\update\UpdateProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The update.processor service.
   *
   * @var \Drupal\update\UpdateProcessorInterface
   */
  protected $processor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\update\UpdateProcessorInterface $processor
   *   The processor service.
   */
   public function __construct(UpdateProcessorInterface $processor) {
     $this->processor = $processor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('update.processor')
    );
  }

}
