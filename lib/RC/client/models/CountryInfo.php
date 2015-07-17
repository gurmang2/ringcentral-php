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
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

//namespace SwaggerClient\models;
namespace RC\client\models;

use \ArrayAccess;

class CountryInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'string',
      'uri' => 'string',
      'calling_code' => 'string',
      'iso_code' => 'string'
  );

  static $attributeMap = array(
      'id' => 'id',
      'uri' => 'uri',
      'calling_code' => 'callingCode',
      'iso_code' => 'isoCode'
  );

  
  /**
  * Internal identifier of a home country
  * @var string
  */
  public $id;
  /**
  * Home country URI
  * @var string
  */
  public $uri;
  /**
  * Home country calling code defined by ITU-T recommendations E.123 and E.164, see Calling Codes
  * @var string
  */
  public $calling_code;
  /**
  * Home country code according to the ISO standard, see ISO 3166
  * @var string
  */
  public $iso_code;

  public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->uri = $data["uri"];
    $this->calling_code = $data["calling_code"];
    $this->iso_code = $data["iso_code"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}