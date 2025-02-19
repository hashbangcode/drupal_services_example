<?php

declare(strict_types=1);

namespace Drupal\services_hooks_example\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\node\NodeInterface;

/**
 * Module hooks for interacting with node entities.
 */
class NodeHooks {

  /**
   * Constructs a new AutoconfiguredService.
   *
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger.
   */
  public function __construct(protected MessengerInterface $messenger) {
  }

  /**
   * Implements hook_ENTITY_TYPE_insert() for node entities.
   */
  #[Hook('node_insert')]
  public function nodeInsert(NodeInterface $node) {
    $this->messenger->addStatus('Services Hooks Example: Node ' . $node->getTitle() . ' created.');
  }

  /**
   * Implements hook_ENTITY_TYPE_update() for node entities.
   */
  #[Hook('node_update')]
  public function nodeUpdate(NodeInterface $node) {
    $this->messenger->addStatus('Services Hooks Example: Node ' . $node->getTitle() . ' updated.');
  }

}
