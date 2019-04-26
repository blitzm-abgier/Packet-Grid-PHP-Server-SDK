<?php

use PHPUnit\Framework\TestCase;
use PacketGridSDK\PacketGrid;
use OpenAPI\Client\Model\CreateClientToken;

final Class ClientTokenApiTest extends TestCase {

  public function testCreateClientToken() {

    // Arrange
    $packetGrid = new PacketGrid(
      $_ENV["TENANT_ID"],
      $_ENV["API_KEY"]
    );

    $token = new CreateClientToken();
    $token->setUserId('testId');
    
    // Act
    $response = $packetGrid->tokens->createClientToken($token);
    
    // Assert
    $this->assertNotEmpty($response->getToken());
    
  }
}