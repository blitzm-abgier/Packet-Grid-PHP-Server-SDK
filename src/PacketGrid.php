<?php

namespace PacketGridSDK;

use OpenAPI\Client\Api\NotificationsApi;
use OpenAPI\Client\Api\ClientTokenApi;
use OpenAPI\Client\Configuration;
use PacketGridSDK\CustomHeaderSelector;

const HOST_PRODUCTION = 'https://api.packetgrid.io/api';
const HOST_SANDBOX = 'https://sandbox.api.packetgrid.io/api';

class PacketGrid {

  /**
   * @var NotificationsApi
   */
  public $notifications;

  /**
   * @var ClientTokenApi
   */
  public $tokens;

  /**
   * Constructor
   *
   * @param string $tenant_id Your Packet Grid tenant id
   * @param string $api_key Your Packet Grid API key
   * @param boolean $is_production Use the production 
   */
  function __construct(
    $tenant_id,
    $api_key,
    $is_production = false
  ) {

    // Set Host Environment
    $configuration = new Configuration();
    if ($is_production === true) {
      $configuration->setHost(HOST_PRODUCTION);
    } else {
      $configuration->setHost(HOST_SANDBOX);
    }

    // Set Tenant
    $headerSelector = new CustomHeaderSelector($tenant_id);

    // Set API Key
    $configuration->setApiKey("Authorization", "Token ".$api_key);
    
    // Instance the API libraries with the configuration
    $this->notifications = new NotificationsApi(null, $configuration, $headerSelector);
    $this->tokens = new ClientTokenApi(null, $configuration, $headerSelector);
  }
}
