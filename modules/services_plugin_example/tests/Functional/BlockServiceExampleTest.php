<?php

declare(strict_types=1);

namespace Drupal\Tests\services_plugin_example\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test class for the services_plugin_example module.
 */
class BlockServiceExampleTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['services_plugin_example', 'block'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp():void {
    parent::setUp();

    $this->drupalPlaceBlock('block_service_example');
  }

  /**
   * Tests the service example block appears on the homepage.
   */
  public function testExampleBlockAppearsOnPage() {
    $this->drupalGet('/');
    $this->assertSession()->pageTextContains('Your generated password is:');
  }

}
