<?php

declare(strict_types=1);

namespace Drupal\Tests\services_hooks_example\Unit;

use Drupal\Core\Messenger\MessengerInterface;
use Drupal\node\Entity\Node;
use Drupal\services_hooks_example\Hook\NodeHooks;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the NodeHooks service.
 */
class NodeHooksTest extends UnitTestCase {

  /**
   * Test that a status is created when the nodeInsert hook is called.
   */
  public function testNodeServiceHookInsert() {
    // We create a mock of the node as we don't want to invoke the insert hook
    // until we are ready to do so.
    $node = $this->createMock(Node::class);

    // Create a mock of the messenger service and ensure that the addStatus
    // method is invoked once.
    $messenger = $this->createMock(MessengerInterface::class);
    $messenger->expects($this->once())->method('addStatus');

    $nodeHooksService = new NodeHooks($messenger);
    $nodeHooksService->nodeInsert($node);
  }

}
