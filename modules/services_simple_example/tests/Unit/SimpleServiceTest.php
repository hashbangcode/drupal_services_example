<?php

declare(strict_types=1);

namespace Drupal\Tests\services_simple_example\Unit;

use Drupal\services_simple_example\SimpleService;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the SimpleService service.
 */
class SimpleServiceTest extends UnitTestCase {

  /**
   * Test that the getArray method returns an array.
   */
  public function testSimpleService() {
    $simpleService = new SimpleService();
    $this->assertEquals([], $simpleService->getArray());
  }

}
