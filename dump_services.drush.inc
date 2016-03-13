<?php

/**
 * @file
 * Dump services drush command.
 */

/**
 * Implements hook_drush_command().
 */
function dump_services_drush_command() {

  $items['dump-services'] = [
    'description' => 'Dumps Drupal 8 services.',
    'arguments' => array(
      'directory' => 'Directory to save data',
    ),
    'required-arguments' => TRUE,
    'bootstrap' => DRUSH_BOOTSTRAP_DRUPAL_FULL,
  ];

  return $items;
}

/**
 * Callback function for dump_services_dump_services command.
 */
function drush_dump_services($directory) {

  if (!is_dir($directory)) {
    return drush_set_error(dt('Target directory @directory does not exists.', ['@dir' => $directory]));
  }

  $template = <<< TEMPLATE
<?php

/**
 * @file
 * Example of usage the {{ service_id }} service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use {{ class }};
{% if interfaces %}
// The service interfaces.
{% endif %}
{% for interface in interfaces %}
use {{ interface }};
{% endfor %}

/**
 * The example.
 */
class Example {

  /**
   * The {{ service_id }} service.
   *
   * @var \{{ suggested_interface }}
   */
  protected \${{ variable_camel_name }};

  /**
   * Constructs a new class instance.
   *
   * @param \{{ suggested_interface }} \${{ variable_snake_name }}
   *   The {{ variable_snake_name }} service.
   */
   public function __construct({{ suggested_interface_short }} \${{ variable_snake_name }}) {
     \$this->{{ variable_camel_name }} = \${{ variable_snake_name }};
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface \$container) {
    return new static(
      \$container->get('{{ service_id }}')
    );
  }

}

TEMPLATE;

  /** @var \Drupal\Core\DependencyInjection\ContainerBuilder $container */
  $container = \Drupal::getContainer();

  /** @var \Drupal\Core\Render\Renderer $renderer */
  $renderer = \Drupal::service('renderer');

  $dumped = 0;
  foreach ($container->getServiceIds() as $service_id) {
    $service = $container->get($service_id);

    if (is_object($service)) {
      $class = get_class($service);

      $reflector = new ReflectionClass($class);

      // Don't dump services from contributed modules.
      if (strpos($reflector->getFileName(), DRUPAL_ROOT . '/core') !== 0) {
        continue;
      }

      $interfaces = $reflector->getInterfaces();

      $suggested_interface = isset($interfaces[$class . 'Interface']) ?
        $class . 'Interface' : $class;

      $service_id_items = explode('.', $service_id);
      $variable_snake_name = array_pop($service_id_items);

      $variable_camel_name = preg_replace(
        '/[^a-z0-9]/i',
        '',
        lcfirst(ucwords(str_replace('_', ' ', $variable_snake_name)))
      );

      $context = [
        'service_id' => $service_id,
        'class' => $class,
        'suggested_interface_short' => (new ReflectionClass($suggested_interface))->getShortName(),
        'variable_camel_name' => $variable_camel_name,
        'variable_snake_name' => $variable_snake_name,
        'interfaces' => array_keys($interfaces),
        'suggested_interface' => $suggested_interface,
      ];

      $data = [
        '#type' => 'inline_template',
        '#template' => $template,
        '#context' => $context,
      ];

      $file_name = "$directory/$service_id.php";
      if (file_exists($file_name)) {
        drush_print(dt('Skipped @service_id.', ['@service_id' => $service_id]));
      }
      else {
        file_put_contents("$directory/$service_id.php", $renderer->renderRoot($data));
        drush_print(dt('Dumped @service_id.', ['@service_id' => $service_id]));
        $dumped++;
      }

    }

  }

  drush_print('==================');
  drush_print(dt('Total dumped: @dumped', ['@dumped' => $dumped]));

}
