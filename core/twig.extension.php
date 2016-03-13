<?php

/**
 * @file
 * Example of usage the twig.extension service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Template\TwigExtension;
// The service interfaces.
use Twig_ExtensionInterface;

/**
 * The example.
 */
class Example {

  /**
   * The twig.extension service.
   *
   * @var \Drupal\Core\Template\TwigExtension
   */
  protected $extension;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Template\TwigExtension $extension
   *   The extension service.
   */
   public function __construct(TwigExtension $extension) {
     $this->extension = $extension;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('twig.extension')
    );
  }

}
