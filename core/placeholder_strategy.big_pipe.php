<?php

/**
 * @file
 * Example of usage the placeholder_strategy.big_pipe service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\big_pipe\Render\Placeholder\BigPipeStrategy;
// The service interfaces.
use Drupal\Core\Render\Placeholder\PlaceholderStrategyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The placeholder_strategy.big_pipe service.
   *
   * @var \Drupal\big_pipe\Render\Placeholder\BigPipeStrategy
   */
  protected $bigPipe;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\big_pipe\Render\Placeholder\BigPipeStrategy $big_pipe
   *   The big_pipe service.
   */
   public function __construct(BigPipeStrategy $big_pipe) {
     $this->bigPipe = $big_pipe;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('placeholder_strategy.big_pipe')
    );
  }

}
