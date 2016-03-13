<?php

/**
 * @file
 * Example of usage the block.page_display_variant_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The block.page_display_variant_subscriber service.
   *
   * @var \Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber
   */
  protected $pageDisplayVariantSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber $page_display_variant_subscriber
   *   The page_display_variant_subscriber service.
   */
   public function __construct(BlockPageDisplayVariantSubscriber $page_display_variant_subscriber) {
     $this->pageDisplayVariantSubscriber = $page_display_variant_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('block.page_display_variant_subscriber')
    );
  }

}
