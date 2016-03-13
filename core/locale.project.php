<?php

/**
 * @file
 * Example of usage the locale.project service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\LocaleProjectStorage;
// The service interfaces.
use Drupal\locale\LocaleProjectStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The locale.project service.
   *
   * @var \Drupal\locale\LocaleProjectStorageInterface
   */
  protected $project;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\LocaleProjectStorageInterface $project
   *   The project service.
   */
   public function __construct(LocaleProjectStorageInterface $project) {
     $this->project = $project;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('locale.project')
    );
  }

}
