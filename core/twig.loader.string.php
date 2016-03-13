<?php

/**
 * @file
 * Example of usage the twig.loader.string service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Template\Loader\StringLoader;
// The service interfaces.
use Twig_LoaderInterface;
use Twig_ExistsLoaderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The twig.loader.string service.
   *
   * @var \Drupal\Core\Template\Loader\StringLoader
   */
  protected $string;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Template\Loader\StringLoader $string
   *   The string service.
   */
   public function __construct(StringLoader $string) {
     $this->string = $string;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('twig.loader.string')
    );
  }

}
