<?php

/**
 * @file
 * Example of usage the content_translation.overview_access service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\content_translation\Access\ContentTranslationOverviewAccess;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_translation.overview_access service.
   *
   * @var \Drupal\content_translation\Access\ContentTranslationOverviewAccess
   */
  protected $overviewAccess;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\content_translation\Access\ContentTranslationOverviewAccess $overview_access
   *   The overview_access service.
   */
   public function __construct(ContentTranslationOverviewAccess $overview_access) {
     $this->overviewAccess = $overview_access;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_translation.overview_access')
    );
  }

}
