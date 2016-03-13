<?php

/**
 * @file
 * Example of usage the exception.default_html service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.default_html service.
   *
   * @var \Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber
   */
  protected $defaultHtml;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber $default_html
   *   The default_html service.
   */
   public function __construct(DefaultExceptionHtmlSubscriber $default_html) {
     $this->defaultHtml = $default_html;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.default_html')
    );
  }

}
