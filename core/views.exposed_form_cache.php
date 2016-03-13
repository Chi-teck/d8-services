<?php

/**
 * @file
 * Example of usage the views.exposed_form_cache service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\ExposedFormCache;

/**
 * The example.
 */
class Example {

  /**
   * The views.exposed_form_cache service.
   *
   * @var \Drupal\views\ExposedFormCache
   */
  protected $exposedFormCache;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\ExposedFormCache $exposed_form_cache
   *   The exposed_form_cache service.
   */
   public function __construct(ExposedFormCache $exposed_form_cache) {
     $this->exposedFormCache = $exposed_form_cache;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.exposed_form_cache')
    );
  }

}
