<?php

/**
 * @file
 * Example of usage the feed.bridge.reader service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Component\Bridge\ZfExtensionManagerSfContainer;
// The service interfaces.
use Zend\Feed\Reader\ExtensionManagerInterface;
use Zend\Feed\Writer\ExtensionManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The feed.bridge.reader service.
   *
   * @var \Drupal\Component\Bridge\ZfExtensionManagerSfContainer
   */
  protected $reader;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\Bridge\ZfExtensionManagerSfContainer $reader
   *   The reader service.
   */
   public function __construct(ZfExtensionManagerSfContainer $reader) {
     $this->reader = $reader;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('feed.bridge.reader')
    );
  }

}
