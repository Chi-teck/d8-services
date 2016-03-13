<?php

/**
 * @file
 * Example of usage the stream_wrapper_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StreamWrapper\StreamWrapperManager;
// The service interfaces.
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Drupal\Core\StreamWrapper\StreamWrapperManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The stream_wrapper_manager service.
   *
   * @var \Drupal\Core\StreamWrapper\StreamWrapperManagerInterface
   */
  protected $streamWrapperManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StreamWrapper\StreamWrapperManagerInterface $stream_wrapper_manager
   *   The stream_wrapper_manager service.
   */
   public function __construct(StreamWrapperManagerInterface $stream_wrapper_manager) {
     $this->streamWrapperManager = $stream_wrapper_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('stream_wrapper_manager')
    );
  }

}
