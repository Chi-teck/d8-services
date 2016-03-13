<?php

/**
 * @file
 * Example of usage the asset.css.optimizer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\CssOptimizer;
// The service interfaces.
use Drupal\Core\Asset\AssetOptimizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.css.optimizer service.
   *
   * @var \Drupal\Core\Asset\CssOptimizer
   */
  protected $optimizer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\CssOptimizer $optimizer
   *   The optimizer service.
   */
   public function __construct(CssOptimizer $optimizer) {
     $this->optimizer = $optimizer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.css.optimizer')
    );
  }

}
