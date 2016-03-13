<?php

/**
 * @file
 * Example of usage the stream_wrapper.public service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\StreamWrapper\PublicStream;
// The service interfaces.
use Drupal\Core\StreamWrapper\PhpStreamWrapperInterface;
use Drupal\Core\StreamWrapper\StreamWrapperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The stream_wrapper.public service.
   *
   * @var \Drupal\Core\StreamWrapper\PublicStream
   */
  protected $public;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\StreamWrapper\PublicStream $public
   *   The public service.
   */
   public function __construct(PublicStream $public) {
     $this->public = $public;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('stream_wrapper.public')
    );
  }

}
