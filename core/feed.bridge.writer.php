<?php

/**
 * @file
 * Example of usage the feed.bridge.writer service.
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
   * The feed.bridge.writer service.
   *
   * @var \Drupal\Component\Bridge\ZfExtensionManagerSfContainer
   */
  protected $writer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Component\Bridge\ZfExtensionManagerSfContainer $writer
   *   The writer service.
   */
   public function __construct(ZfExtensionManagerSfContainer $writer) {
     $this->writer = $writer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('feed.bridge.writer')
    );
  }

}
