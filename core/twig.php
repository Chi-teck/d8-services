<?php

/**
 * @file
 * Example of usage the twig service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Template\TwigEnvironment;

/**
 * The example.
 */
class Example {

  /**
   * The twig service.
   *
   * @var \Drupal\Core\Template\TwigEnvironment
   */
  protected $twig;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Template\TwigEnvironment $twig
   *   The twig service.
   */
   public function __construct(TwigEnvironment $twig) {
     $this->twig = $twig;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('twig')
    );
  }

}
