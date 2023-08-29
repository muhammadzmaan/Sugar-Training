<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\ChromePolicy\Resource;

use Google\Service\ChromePolicy\GoogleChromePolicyV1DefineCertificateRequest;
use Google\Service\ChromePolicy\GoogleChromePolicyV1DefineCertificateResponse;
use Google\Service\ChromePolicy\GoogleChromePolicyV1DefineNetworkRequest;
use Google\Service\ChromePolicy\GoogleChromePolicyV1DefineNetworkResponse;
use Google\Service\ChromePolicy\GoogleChromePolicyV1RemoveCertificateRequest;
use Google\Service\ChromePolicy\GoogleChromePolicyV1RemoveCertificateResponse;
use Google\Service\ChromePolicy\GoogleChromePolicyV1RemoveNetworkRequest;
use Google\Service\ChromePolicy\GoogleChromePolicyV1RemoveNetworkResponse;

/**
 * The "networks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromepolicyService = new Google\Service\ChromePolicy(...);
 *   $networks = $chromepolicyService->networks;
 *  </code>
 */
class CustomersPoliciesNetworks extends \Google\Service\Resource
{
  /**
   * Creates a certificate at a specified OU for a customer.
   * (networks.defineCertificate)
   *
   * @param string $customer Required. The customer for which the certificate will
   * apply.
   * @param GoogleChromePolicyV1DefineCertificateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromePolicyV1DefineCertificateResponse
   */
  public function defineCertificate($customer, GoogleChromePolicyV1DefineCertificateRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('defineCertificate', [$params], GoogleChromePolicyV1DefineCertificateResponse::class);
  }
  /**
   * Define a new network. (networks.defineNetwork)
   *
   * @param string $customer Required. The customer who will own this new network.
   * @param GoogleChromePolicyV1DefineNetworkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromePolicyV1DefineNetworkResponse
   */
  public function defineNetwork($customer, GoogleChromePolicyV1DefineNetworkRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('defineNetwork', [$params], GoogleChromePolicyV1DefineNetworkResponse::class);
  }
  /**
   * Remove an existing certificate by guid. (networks.removeCertificate)
   *
   * @param string $customer Required. The customer whose certificate will be
   * removed.
   * @param GoogleChromePolicyV1RemoveCertificateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromePolicyV1RemoveCertificateResponse
   */
  public function removeCertificate($customer, GoogleChromePolicyV1RemoveCertificateRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('removeCertificate', [$params], GoogleChromePolicyV1RemoveCertificateResponse::class);
  }
  /**
   * Remove an existing network by guid. (networks.removeNetwork)
   *
   * @param string $customer Required. The customer whose network will be removed.
   * @param GoogleChromePolicyV1RemoveNetworkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromePolicyV1RemoveNetworkResponse
   */
  public function removeNetwork($customer, GoogleChromePolicyV1RemoveNetworkRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('removeNetwork', [$params], GoogleChromePolicyV1RemoveNetworkResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersPoliciesNetworks::class, 'Google_Service_ChromePolicy_Resource_CustomersPoliciesNetworks');
