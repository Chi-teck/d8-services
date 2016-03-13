<?php

/**
 * @file
 * Example of usage the theme.negotiator.system.batch service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\Theme\BatchNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator.system.batch service.
   *
   * @var \Drupal\system\Theme\BatchNegotiator
   */
  protected $batch;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\Theme\BatchNegotiator $batch
   *   The batch service.
   */
   public function __construct(BatchNegotiator $batch) {
     $this->batch = $batch;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator.system.batch')
    );
  }

}
