<?php

/**
 * @file
 * Example of usage the redirect_leading_slashes_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The redirect_leading_slashes_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber
   */
  protected $redirectLeadingSlashesSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber $redirect_leading_slashes_subscriber
   *   The redirect_leading_slashes_subscriber service.
   */
   public function __construct(RedirectLeadingSlashesSubscriber $redirect_leading_slashes_subscriber) {
     $this->redirectLeadingSlashesSubscriber = $redirect_leading_slashes_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('redirect_leading_slashes_subscriber')
    );
  }

}
