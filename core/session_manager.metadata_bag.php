<?php

/**
 * @file
 * Example of usage the session_manager.metadata_bag service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\MetadataBag;
// The service interfaces.
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;

/**
 * The example.
 */
class Example {

  /**
   * The session_manager.metadata_bag service.
   *
   * @var \Drupal\Core\Session\MetadataBag
   */
  protected $metadataBag;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\MetadataBag $metadata_bag
   *   The metadata_bag service.
   */
   public function __construct(MetadataBag $metadata_bag) {
     $this->metadataBag = $metadata_bag;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('session_manager.metadata_bag')
    );
  }

}
