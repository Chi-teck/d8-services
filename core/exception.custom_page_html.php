<?php

/**
 * @file
 * Example of usage the exception.custom_page_html service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.custom_page_html service.
   *
   * @var \Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber
   */
  protected $customPageHtml;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber $custom_page_html
   *   The custom_page_html service.
   */
   public function __construct(CustomPageExceptionHtmlSubscriber $custom_page_html) {
     $this->customPageHtml = $custom_page_html;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.custom_page_html')
    );
  }

}
