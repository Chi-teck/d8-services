<?php

/**
 * @file
 * Example of usage the date.formatter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Datetime\DateFormatter;
// The service interfaces.
use Drupal\Core\Datetime\DateFormatterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The date.formatter service.
   *
   * @var \Drupal\Core\Datetime\DateFormatterInterface
   */
  protected $formatter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Datetime\DateFormatterInterface $formatter
   *   The formatter service.
   */
   public function __construct(DateFormatterInterface $formatter) {
     $this->formatter = $formatter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('date.formatter')
    );
  }

}
