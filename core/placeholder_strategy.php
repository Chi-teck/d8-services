<?php

/**
 * @file
 * Example of usage the placeholder_strategy service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\Placeholder\ChainedPlaceholderStrategy;
// The service interfaces.
use Drupal\Core\Render\Placeholder\PlaceholderStrategyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The placeholder_strategy service.
   *
   * @var \Drupal\Core\Render\Placeholder\ChainedPlaceholderStrategy
   */
  protected $placeholderStrategy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\Placeholder\ChainedPlaceholderStrategy $placeholder_strategy
   *   The placeholder_strategy service.
   */
   public function __construct(ChainedPlaceholderStrategy $placeholder_strategy) {
     $this->placeholderStrategy = $placeholder_strategy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('placeholder_strategy')
    );
  }

}
