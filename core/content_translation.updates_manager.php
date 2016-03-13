<?php

/**
 * @file
 * Example of usage the content_translation.updates_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\content_translation\ContentTranslationUpdatesManager;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_translation.updates_manager service.
   *
   * @var \Drupal\content_translation\ContentTranslationUpdatesManager
   */
  protected $updatesManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\content_translation\ContentTranslationUpdatesManager $updates_manager
   *   The updates_manager service.
   */
   public function __construct(ContentTranslationUpdatesManager $updates_manager) {
     $this->updatesManager = $updates_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_translation.updates_manager')
    );
  }

}
