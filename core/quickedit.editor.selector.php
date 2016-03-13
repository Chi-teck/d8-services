<?php

/**
 * @file
 * Example of usage the quickedit.editor.selector service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\quickedit\EditorSelector;
// The service interfaces.
use Drupal\quickedit\EditorSelectorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The quickedit.editor.selector service.
   *
   * @var \Drupal\quickedit\EditorSelectorInterface
   */
  protected $selector;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\quickedit\EditorSelectorInterface $selector
   *   The selector service.
   */
   public function __construct(EditorSelectorInterface $selector) {
     $this->selector = $selector;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('quickedit.editor.selector')
    );
  }

}
