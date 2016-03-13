<?php

/**
 * @file
 * Example of usage the uuid service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Component\Uuid\Php;
// The service interfaces.
use Drupal\Component\Uuid\UuidInterface;

/**
 * The example.
 */
class Example {

  /**
   * The uuid service.
   *
   * @var \Drupal\Component\Uuid\Php
   */
  protected $uuid;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\Uuid\Php $uuid
   *   The uuid service.
   */
   public function __construct(Php $uuid) {
     $this->uuid = $uuid;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('uuid')
    );
  }

}
