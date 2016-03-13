<?php

/**
 * @file
 * Example of usage the content_translation.synchronizer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\content_translation\FieldTranslationSynchronizer;
// The service interfaces.
use Drupal\content_translation\FieldTranslationSynchronizerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_translation.synchronizer service.
   *
   * @var \Drupal\content_translation\FieldTranslationSynchronizerInterface
   */
  protected $synchronizer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\content_translation\FieldTranslationSynchronizerInterface $synchronizer
   *   The synchronizer service.
   */
   public function __construct(FieldTranslationSynchronizerInterface $synchronizer) {
     $this->synchronizer = $synchronizer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_translation.synchronizer')
    );
  }

}
