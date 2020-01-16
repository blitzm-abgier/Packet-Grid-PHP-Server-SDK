# Packet Grid PHP Server SDK

## Setup
When you want to use the SDK you have to make sure to pass your Packet Grid tenant id and Packet Grid api key in the PacketGrid constructor. The third field is optional, if set to true then you will be using the production Packet Grid environment. If left empty or set as false, then the SDK will default to your Packet Grid sandbox environment.

It is recommend that you store this variables in an environment file away rather than in your source code.
```php
/**
  * $tenant_id Your Packet Grid tenant id
  * $api_key Your Packet Grid API key
  * $is_production Use the production 
  */
$packetGrid = new PacketGrid($tenant_id, $api_key, $is_production);
```

## Creating a Client Token
```php
// Instantiate the Packet Grid SDK
$packetGrid = new PacketGrid($tenant_id, $api_key, $is_production);

$tokenRequest = new CreateClientToken();
$tokenRequest->setUserId('yourUniqueUserId');

$response = $packetGrid->tokens->createClientToken($tokenRequest);
$token = $response->getToken();
```

## Sending a Notification
```php
// Instantiate the Packet Grid SDK
$packetGrid = new PacketGrid($tenant_id, $api_key, $is_production);

// Create our notification object
$notification = new SendNotification();

// Set the notification recipients
$recipient = new Recipient();
$recipient->setUsername('username');
$recipient->setEmail('user@gmail.com');
$recipient->setPhone('+61434882753'); // If you have a mobile number like 0434882753, format it as +61434882753 (removing the 0)

$notification->setRecipients([
  $recipient
]);

// Set the notification text
$notification->setTitle('Notification Title');
$notification->setDetail('Notification details...');

// Set the payload, which is optional
$notification->setPayload([
  'anyKey' => 'anyValue'
]);

// Set the desired transport channels
$notification->setTransports([
  TransportEnum::EMAIL,
  TransportEnum::FCM,
  TransportEnum::SMS,
]);

// Dispatch our notification
$packetGrid->notifications->send($notification);
```
