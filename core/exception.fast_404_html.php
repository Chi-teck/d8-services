<?php

/**
 * @file
 * Example of usage the exception.fast_404_html service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.fast_404_html service.
   *
   * @var \Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber
   */
  protected $fast404Html;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber $fast_404_html
   *   The fast_404_html service.
   */
   public function __construct(Fast404ExceptionHtmlSubscriber $fast_404_html) {
     $this->fast404Html = $fast_404_html;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.fast_404_html')
    );
  }

}
