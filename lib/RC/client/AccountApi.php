<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

//namespace SwaggerClient;
namespace RC\client;

class AccountApi {

  function __construct($apiClient = null) {
    $this->apiClient = $apiClient;
  }

  /**
   * @var ApiClient
   */
  private $apiClient;

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * Create Account
   *
   * @param `Options` $options Options object
   *
   * @struct Options {
   *     @type CreateAccountRequest  'body'  JSON body (required)
   * }
   *
   * @return \RC\client\models\GetAccountInfoResponse
   */
   //public function accountPost($body) {
   public function accountPost($options) {

      if (empty($options)) $options = [];

      
      // verify the required parameter 'body' is set
      $this->apiClient->validateParameter($options, 'body', 'accountPost');
      

      // parse inputs
      $resourcePath = "/v1.0/account";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();

      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

      

      

      

      

      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'GetAccountInfoResponse');
      return $responseObject;

  }
  
  /**
   * Get Account Info
   *
   * @param `Options` $options Options object
   *
   * @struct Options {
   *     @type string  'account_id'  Internal identifier of a RingCentral account or tilde (~) to indicate the account logged-in within the current session (required)
   * }
   *
   * @return \RC\client\models\GetAccountInfoResponse
   */
   //public function account($account_id) {
   public function account($options) {

      if (empty($options)) $options = [];

      
      // verify the required parameter 'account_id' is set
      $this->apiClient->validateParameter($options, 'account_id', 'account');
      

      // parse inputs
      $resourcePath = "/v1.0/account/{accountId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();

      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

      

      

      $resourcePath = $this->apiClient->parsePathParam($resourcePath, $options, 'account_id', 'accountId');
      

      

      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'GetAccountInfoResponse');
      return $responseObject;

  }
  

}