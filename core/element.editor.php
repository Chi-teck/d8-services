<?php

/**
 * @file
 * Example of usage the element.editor service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\editor\Element;

/**
 * The example.
 */
class Example {

  /**
   * The element.editor service.
   *
   * @var \Drupal\editor\Element
   */
  protected $editor;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\editor\Element $editor
   *   The editor service.
   */
   public function __construct(Element $editor) {
     $this->editor = $editor;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('element.editor')
    );
  }

}
