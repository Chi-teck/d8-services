<?php

/**
 * @file
 * Example of usage the twig.loader.theme_registry service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Template\Loader\ThemeRegistryLoader;
// The service interfaces.
use Twig_ExistsLoaderInterface;
use Twig_LoaderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The twig.loader.theme_registry service.
   *
   * @var \Drupal\Core\Template\Loader\ThemeRegistryLoader
   */
  protected $themeRegistry;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Template\Loader\ThemeRegistryLoader $theme_registry
   *   The theme_registry service.
   */
   public function __construct(ThemeRegistryLoader $theme_registry) {
     $this->themeRegistry = $theme_registry;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('twig.loader.theme_registry')
    );
  }

}
