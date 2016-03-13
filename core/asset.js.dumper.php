<?php

/**
 * @file
 * Example of usage the asset.js.dumper service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\AssetDumper;
// The service interfaces.
use Drupal\Core\Asset\AssetDumperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.js.dumper service.
   *
   * @var \Drupal\Core\Asset\AssetDumperInterface
   */
  protected $dumper;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\AssetDumperInterface $dumper
   *   The dumper service.
   */
   public function __construct(AssetDumperInterface $dumper) {
     $this->dumper = $dumper;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.js.dumper')
    );
  }

}
