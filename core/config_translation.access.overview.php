<?php

/**
 * @file
 * Example of usage the config_translation.access.overview service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\config_translation\Access\ConfigTranslationOverviewAccess;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config_translation.access.overview service.
   *
   * @var \Drupal\config_translation\Access\ConfigTranslationOverviewAccess
   */
  protected $overview;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\config_translation\Access\ConfigTranslationOverviewAccess $overview
   *   The overview service.
   */
   public function __construct(ConfigTranslationOverviewAccess $overview) {
     $this->overview = $overview;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config_translation.access.overview')
    );
  }

}
