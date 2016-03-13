<?php

/**
 * @file
 * Example of usage the theme.negotiator.ajax_base_page service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\AjaxBasePageNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator.ajax_base_page service.
   *
   * @var \Drupal\Core\Theme\AjaxBasePageNegotiator
   */
  protected $ajaxBasePage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\AjaxBasePageNegotiator $ajax_base_page
   *   The ajax_base_page service.
   */
   public function __construct(AjaxBasePageNegotiator $ajax_base_page) {
     $this->ajaxBasePage = $ajax_base_page;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator.ajax_base_page')
    );
  }

}
