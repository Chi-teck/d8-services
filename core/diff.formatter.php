<?php

/**
 * @file
 * Example of usage the diff.formatter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Diff\DiffFormatter;

/**
 * The example.
 */
class Example {

  /**
   * The diff.formatter service.
   *
   * @var \Drupal\Core\Diff\DiffFormatter
   */
  protected $formatter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Diff\DiffFormatter $formatter
   *   The formatter service.
   */
   public function __construct(DiffFormatter $formatter) {
     $this->formatter = $formatter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('diff.formatter')
    );
  }

}
