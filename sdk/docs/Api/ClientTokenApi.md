# OpenAPI\Client\ClientTokenApi

All URIs are relative to *http://http:/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientToken**](ClientTokenApi.md#createClientToken) | **POST** /client-tokens/ | create a client token for a mobile device


# **createClientToken**
> \OpenAPI\Client\Model\ClientToken createClientToken($body)

create a client token for a mobile device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CreateClientToken(); // \OpenAPI\Client\Model\CreateClientToken | the account id from the client side

try {
    $result = $apiInstance->createClientToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientTokenApi->createClientToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\CreateClientToken**](../Model/CreateClientToken.md)| the account id from the client side |

### Return type

[**\OpenAPI\Client\Model\ClientToken**](../Model/ClientToken.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

