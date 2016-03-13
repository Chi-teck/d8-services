<?php

/**
 * @file
 * Example of usage the twig.loader.filesystem service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Template\Loader\FilesystemLoader;
// The service interfaces.
use Twig_ExistsLoaderInterface;
use Twig_LoaderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The twig.loader.filesystem service.
   *
   * @var \Drupal\Core\Template\Loader\FilesystemLoader
   */
  protected $filesystem;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Template\Loader\FilesystemLoader $filesystem
   *   The filesystem service.
   */
   public function __construct(FilesystemLoader $filesystem) {
     $this->filesystem = $filesystem;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('twig.loader.filesystem')
    );
  }

}
