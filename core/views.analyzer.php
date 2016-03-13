<?php

/**
 * @file
 * Example of usage the views.analyzer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\Analyzer;

/**
 * The example.
 */
class Example {

  /**
   * The views.analyzer service.
   *
   * @var \Drupal\views\Analyzer
   */
  protected $analyzer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\Analyzer $analyzer
   *   The analyzer service.
   */
   public function __construct(Analyzer $analyzer) {
     $this->analyzer = $analyzer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.analyzer')
    );
  }

}
