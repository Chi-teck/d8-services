<?php

/**
 * @file
 * Example of usage the theme.negotiator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\ThemeNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator service.
   *
   * @var \Drupal\Core\Theme\ThemeNegotiatorInterface
   */
  protected $negotiator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\ThemeNegotiatorInterface $negotiator
   *   The negotiator service.
   */
   public function __construct(ThemeNegotiatorInterface $negotiator) {
     $this->negotiator = $negotiator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator')
    );
  }

}
