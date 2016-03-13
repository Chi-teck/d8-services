<?php

/**
 * @file
 * Example of usage the image.factory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Image\ImageFactory;

/**
 * The example.
 */
class Example {

  /**
   * The image.factory service.
   *
   * @var \Drupal\Core\Image\ImageFactory
   */
  protected $factory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Image\ImageFactory $factory
   *   The factory service.
   */
   public function __construct(ImageFactory $factory) {
     $this->factory = $factory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('image.factory')
    );
  }

}
