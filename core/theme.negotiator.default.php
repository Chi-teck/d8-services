<?php

/**
 * @file
 * Example of usage the theme.negotiator.default service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\DefaultNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator.default service.
   *
   * @var \Drupal\Core\Theme\DefaultNegotiator
   */
  protected $default;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\DefaultNegotiator $default
   *   The default service.
   */
   public function __construct(DefaultNegotiator $default) {
     $this->default = $default;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator.default')
    );
  }

}
