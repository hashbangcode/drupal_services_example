<?php

declare(strict_types=1);

namespace Drupal\Tests\services_lazy_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the SingleArgument service.
 */
class SingleArgumentTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_lazy_example',
  ];

  /**
   * Test that the generated password is 12 characters long.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_lazy_example\SingleArgument $service */
    $service = \Drupal::service('services_lazy_example.single_argument');

    $this->assertStringContainsString('ProxyClass', $service::class);

    $this->assertTrue(strlen($service->generate12CharacterPassword()) === 12);
  }

}
