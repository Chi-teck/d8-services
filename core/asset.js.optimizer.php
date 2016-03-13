<?php

/**
 * @file
 * Example of usage the asset.js.optimizer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\JsOptimizer;
// The service interfaces.
use Drupal\Core\Asset\AssetOptimizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.js.optimizer service.
   *
   * @var \Drupal\Core\Asset\JsOptimizer
   */
  protected $optimizer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\JsOptimizer $optimizer
   *   The optimizer service.
   */
   public function __construct(JsOptimizer $optimizer) {
     $this->optimizer = $optimizer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.js.optimizer')
    );
  }

}
