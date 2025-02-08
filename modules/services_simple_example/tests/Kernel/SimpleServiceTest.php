<?php

namespace Drupal\Tests\services_simple_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the SimpleService service.
 */
class SimpleServiceTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_simple_example',
  ];

  /**
   * Test that the getArray method returns an array.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_simple_example\SimpleService $simpleService */
    $simpleService = \Drupal::service('services_simple_example.simple_service');
    $this->assertEquals([], $simpleService->getArray());
  }

}
