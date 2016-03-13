<?php

/**
 * @file
 * Example of usage the url_generator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\MetadataBubblingUrlGenerator;
// The service interfaces.
use Drupal\Core\Routing\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Cmf\Component\Routing\VersatileGeneratorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The url_generator service.
   *
   * @var \Drupal\Core\Render\MetadataBubblingUrlGenerator
   */
  protected $urlGenerator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\MetadataBubblingUrlGenerator $url_generator
   *   The url_generator service.
   */
   public function __construct(MetadataBubblingUrlGenerator $url_generator) {
     $this->urlGenerator = $url_generator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('url_generator')
    );
  }

}
