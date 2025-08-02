<?php

declare(strict_types=1);

namespace Drupal\Tests\services_hook_example\Kernel;

use Drupal\Core\Messenger\MessengerInterface;
use Drupal\KernelTests\KernelTestBase;
use Drupal\node\Entity\Node;
use Drupal\Tests\node\Traits\NodeCreationTrait;

/**
 * Kernel tests for the NodeHooks service.
 */
class NodeHooksTest extends KernelTestBase {

  use NodeCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_hooks_example',
    'node',
    'user',
  ];

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();
    $this->installEntitySchema('user');
    $this->installEntitySchema('node');
  }

  /**
   * Test that a status is created when the nodeInsert hook is called.
   */
  public function testNodeHookServiceInsert() {
    // Create a test node, but do not save it.
    $node = Node::create([
      'title' => 'qwerty',
      'type' => 'page',
    ]);
    // Set the nid value, which is what the save action would have done.
    $node->set('nid', 1);

    // Get and invoke our node_insert hook from the service class.
    /** @var \Drupal\services_hooks_example\Hook\NodeHooks $nodeHookService */
    $nodeHookService = \Drupal::service('services_hooks_example.node_hooks');
    $nodeHookService->nodeInsert($node);

    // Test that the messenger was populated correctly.
    $messenger = \Drupal::service('messenger');
    $this->assertCount(1, $messenger->messagesByType(MessengerInterface::TYPE_STATUS));
    $this->assertEquals('Services Hooks Example: Node qwerty created.', $messenger->messagesByType(MessengerInterface::TYPE_STATUS)[0]);
  }

}
