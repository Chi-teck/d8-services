<?php

/**
 * @file
 * Example of usage the exception.test_site service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The exception.test_site service.
   *
   * @var \Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber
   */
  protected $testSite;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber $test_site
   *   The test_site service.
   */
   public function __construct(ExceptionTestSiteSubscriber $test_site) {
     $this->testSite = $test_site;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('exception.test_site')
    );
  }

}
