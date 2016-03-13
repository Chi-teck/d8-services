<?php

/**
 * @file
 * Example of usage the image.toolkit.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ImageToolkit\ImageToolkitManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The image.toolkit.manager service.
   *
   * @var \Drupal\Core\ImageToolkit\ImageToolkitManager
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ImageToolkit\ImageToolkitManager $manager
   *   The manager service.
   */
   public function __construct(ImageToolkitManager $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('image.toolkit.manager')
    );
  }

}
