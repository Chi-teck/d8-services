<?php

/**
 * @file
 * Example of usage the stream_wrapper.temporary service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StreamWrapper\TemporaryStream;
// The service interfaces.
use Drupal\Core\StreamWrapper\PhpStreamWrapperInterface;
use Drupal\Core\StreamWrapper\StreamWrapperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The stream_wrapper.temporary service.
   *
   * @var \Drupal\Core\StreamWrapper\TemporaryStream
   */
  protected $temporary;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StreamWrapper\TemporaryStream $temporary
   *   The temporary service.
   */
   public function __construct(TemporaryStream $temporary) {
     $this->temporary = $temporary;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('stream_wrapper.temporary')
    );
  }

}
