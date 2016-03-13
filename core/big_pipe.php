<?php

/**
 * @file
 * Example of usage the big_pipe service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\big_pipe\Render\BigPipe;
// The service interfaces.
use Drupal\big_pipe\Render\BigPipeInterface;

/**
 * The example.
 */
class Example {

  /**
   * The big_pipe service.
   *
   * @var \Drupal\big_pipe\Render\BigPipeInterface
   */
  protected $bigPipe;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\big_pipe\Render\BigPipeInterface $big_pipe
   *   The big_pipe service.
   */
   public function __construct(BigPipeInterface $big_pipe) {
     $this->bigPipe = $big_pipe;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('big_pipe')
    );
  }

}
