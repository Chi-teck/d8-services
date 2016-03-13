<?php

/**
 * @file
 * Example of usage the serialization.phpserialize service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Component\Serialization\PhpSerialize;
// The service interfaces.
use Drupal\Component\Serialization\SerializationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The serialization.phpserialize service.
   *
   * @var \Drupal\Component\Serialization\PhpSerialize
   */
  protected $phpserialize;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\Serialization\PhpSerialize $phpserialize
   *   The phpserialize service.
   */
   public function __construct(PhpSerialize $phpserialize) {
     $this->phpserialize = $phpserialize;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('serialization.phpserialize')
    );
  }

}
