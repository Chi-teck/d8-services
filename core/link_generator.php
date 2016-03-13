<?php

/**
 * @file
 * Example of usage the link_generator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Utility\LinkGenerator;
// The service interfaces.
use Drupal\Core\Utility\LinkGeneratorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The link_generator service.
   *
   * @var \Drupal\Core\Utility\LinkGeneratorInterface
   */
  protected $linkGenerator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Utility\LinkGeneratorInterface $link_generator
   *   The link_generator service.
   */
   public function __construct(LinkGeneratorInterface $link_generator) {
     $this->linkGenerator = $link_generator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('link_generator')
    );
  }

}
