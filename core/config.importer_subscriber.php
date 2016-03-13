<?php

/**
 * @file
 * Example of usage the config.importer_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\Importer\FinalMissingContentSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.importer_subscriber service.
   *
   * @var \Drupal\Core\Config\Importer\FinalMissingContentSubscriber
   */
  protected $importerSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\Importer\FinalMissingContentSubscriber $importer_subscriber
   *   The importer_subscriber service.
   */
   public function __construct(FinalMissingContentSubscriber $importer_subscriber) {
     $this->importerSubscriber = $importer_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.importer_subscriber')
    );
  }

}
