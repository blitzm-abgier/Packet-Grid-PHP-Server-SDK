# OpenAPI\Client\NotificationsApi

All URIs are relative to *http://http:/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**send**](NotificationsApi.md#send) | **POST** /notifications/send/ | 


# **send**
> \OpenAPI\Client\Model\DispatchReport send($command, $idempotency_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command = new \OpenAPI\Client\Model\SendNotification(); // \OpenAPI\Client\Model\SendNotification | 
$idempotency_key = 'idempotency_key_example'; // string | This header can optionally be provided to ensure duplicate requests are ignored. The value of this header must be key (string) that uniquely identifies the API request. If the service receives a request with a duplicate Idempotency-Key value it will return a cached response to ensure that any side effects the request might have are not duplicated. Idempotency-Keys are cached for 24 hours. API Clients are advised to make use of Idempotency-Keys for API requests that implement failure-retries.

try {
    $result = $apiInstance->send($command, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command** | [**\OpenAPI\Client\Model\SendNotification**](../Model/SendNotification.md)|  |
 **idempotency_key** | **string**| This header can optionally be provided to ensure duplicate requests are ignored. The value of this header must be key (string) that uniquely identifies the API request. If the service receives a request with a duplicate Idempotency-Key value it will return a cached response to ensure that any side effects the request might have are not duplicated. Idempotency-Keys are cached for 24 hours. API Clients are advised to make use of Idempotency-Keys for API requests that implement failure-retries. | [optional]

### Return type

[**\OpenAPI\Client\Model\DispatchReport**](../Model/DispatchReport.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

