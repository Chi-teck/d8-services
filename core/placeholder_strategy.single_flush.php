<?php

/**
 * @file
 * Example of usage the placeholder_strategy.single_flush service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\Placeholder\SingleFlushStrategy;
// The service interfaces.
use Drupal\Core\Render\Placeholder\PlaceholderStrategyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The placeholder_strategy.single_flush service.
   *
   * @var \Drupal\Core\Render\Placeholder\SingleFlushStrategy
   */
  protected $singleFlush;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\Placeholder\SingleFlushStrategy $single_flush
   *   The single_flush service.
   */
   public function __construct(SingleFlushStrategy $single_flush) {
     $this->singleFlush = $single_flush;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('placeholder_strategy.single_flush')
    );
  }

}
