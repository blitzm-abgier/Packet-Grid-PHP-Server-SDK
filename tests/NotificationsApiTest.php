<?php

use PHPUnit\Framework\TestCase;
use OpenAPI\Client\Model\TransportEnum;
use OpenAPI\Client\Model\SendNotification;
use OpenAPI\Client\Model\Recipient;
use OpenAPI\Client\Configuration;
use PacketGridSDK\PacketGrid;

final Class NotificationsApiTest extends TestCase {

  public function testSendNotification() {

    // Arrange
    $packetGrid = new PacketGrid(
      $_ENV["TENANT_ID"],
      $_ENV["API_KEY"]
    );

    $recipient = new Recipient();
    $recipient->setUsername('usesdflkjsdklfrname');

    $notification = new SendNotification();
    $notification->setRecipients([$recipient]);
    $notification->setTitle('Title');
    $notification->setDetail('Detail');
    $notification->setPayload(["key" => "val"]);
    $notification->setTransports([
      TransportEnum::EMAIL,
      TransportEnum::FCM,
      TransportEnum::SMS,
    ]);

    // Act
    $response = $packetGrid->notifications->send($notification);
    
    // Assert
    $this->assertEquals(
      $response->getNotification()->getTitle(),
      'Title'
    );
    $this->assertEquals(
      $response->getNotification()->getDetail(),
      'Detail'
    );
    $this->assertEquals(
      $response->getNotification()->getPayload(),
      ["key" => 'val']
    );
  }
}