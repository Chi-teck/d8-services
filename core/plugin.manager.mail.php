<?php

/**
 * @file
 * Example of usage the plugin.manager.mail service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Mail\MailManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Core\Mail\MailManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.mail service.
   *
   * @var \Drupal\Core\Mail\MailManagerInterface
   */
  protected $mail;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Mail\MailManagerInterface $mail
   *   The mail service.
   */
   public function __construct(MailManagerInterface $mail) {
     $this->mail = $mail;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.mail')
    );
  }

}
