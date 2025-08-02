<?php

declare(strict_types=1);

namespace Drupal\services_controller_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\DateFormatterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller to demonstrate the use of the create() method.
 */
class ControllerExample extends ControllerBase {

  /**
   * The date formatter service.
   *
   * @var \Drupal\Core\Datetime\DateFormatterInterface
   */
  protected DateFormatterInterface $dateFormatter;

  /**
   * {@inheritDoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = new static();
    $instance->dateFormatter = $container->get('date.formatter');
    return $instance;
  }

  /**
   * Callback for the route 'services_controller_example'.
   */
  public function respond() {
    return [
      '#markup' => '<p>' . $this->dateFormatter->format('1234567890') . '</p>',
    ];
  }

}
