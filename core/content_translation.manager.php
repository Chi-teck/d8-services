<?php

/**
 * @file
 * Example of usage the content_translation.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\content_translation\ContentTranslationManager;
// The service interfaces.
use Drupal\content_translation\ContentTranslationManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_translation.manager service.
   *
   * @var \Drupal\content_translation\ContentTranslationManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\content_translation\ContentTranslationManagerInterface $manager
   *   The manager service.
   */
   public function __construct(ContentTranslationManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_translation.manager')
    );
  }

}
