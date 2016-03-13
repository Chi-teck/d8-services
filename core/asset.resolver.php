<?php

/**
 * @file
 * Example of usage the asset.resolver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\AssetResolver;
// The service interfaces.
use Drupal\Core\Asset\AssetResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The asset.resolver service.
   *
   * @var \Drupal\Core\Asset\AssetResolverInterface
   */
  protected $resolver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\AssetResolverInterface $resolver
   *   The resolver service.
   */
   public function __construct(AssetResolverInterface $resolver) {
     $this->resolver = $resolver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('asset.resolver')
    );
  }

}
