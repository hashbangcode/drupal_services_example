<?php

declare(strict_types=1);

namespace Drupal\services_plugin_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\UncacheableDependencyTrait;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * A block showing service injection.
 *
 * @Block(
 *  id = "block_service_example",
 *  label = "Services Plugin Example: Block",
 *  admin_label = @Translation("Services Plugin Example: Block")
 * )
 */
class BlockServiceExample extends BlockBase implements ContainerFactoryPluginInterface {

  use UncacheableDependencyTrait;

  /**
   * The password generator service.
   *
   * @var \Drupal\Core\Password\PasswordGeneratorInterface
   */
  protected $passwordGenerator;

  /**
   * {@inheritDoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = new static($configuration, $plugin_id, $plugin_definition);

    $instance->passwordGenerator = $container->get('password_generator');

    return $instance;
  }

  /**
   * {@inheritDoc}
   */
  public function build() {

    $build['user'] = [
      '#markup' => $this->t('Your generated password is: @password', ['@password' => $this->passwordGenerator->generate()]),
    ];

    return $build;
  }

}
