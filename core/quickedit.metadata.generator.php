<?php

/**
 * @file
 * Example of usage the quickedit.metadata.generator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\quickedit\MetadataGenerator;
// The service interfaces.
use Drupal\quickedit\MetadataGeneratorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The quickedit.metadata.generator service.
   *
   * @var \Drupal\quickedit\MetadataGeneratorInterface
   */
  protected $generator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\quickedit\MetadataGeneratorInterface $generator
   *   The generator service.
   */
   public function __construct(MetadataGeneratorInterface $generator) {
     $this->generator = $generator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('quickedit.metadata.generator')
    );
  }

}
