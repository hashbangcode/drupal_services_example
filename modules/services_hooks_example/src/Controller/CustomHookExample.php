<?php

declare(strict_types=1);

namespace Drupal\services_hooks_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\services_hooks_example\CustomHookInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller that lists out the items found in the example_get_items hook.
 */
class CustomHookExample extends ControllerBase {

  use StringTranslationTrait;

  /**
   * The custom hook service.
   *
   * @var \Drupal\services_hooks_example\CustomHookInterface
   */
  protected CustomHookInterface $customHook;

  /**
   * {@inheritDoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = new static();
    $instance->customHook = $container->get('services_hooks_example.custom_hook');
    return $instance;
  }

  /**
   * Callback for the route 'services_hooks_example'.
   */
  public function listItems() {
    // Call the getItems() method in the services_hooks_example.custom_hook
    // service, which will invoke the hook_example_get_items hook and return
    // a list of items.
    $items = $this->customHook->getItems();

    $build = [];

    $build['list_of_items'] = [
      '#theme' => 'item_list',
      '#title' => $this->t('Some items'),
      '#items' => $items,
      '#type' => 'ul',
      '#empty' => $this->t('No items found.'),
    ];

    return $build;
  }

}
