<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/payments_account.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Resources;

class PaymentsAccount
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v7/resources/payments_account.proto!google.ads.googleads.v7.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
PaymentsAccountG
resource_name (	B0�A�A*
(googleads.googleapis.com/PaymentsAccount%
payments_account_id (	B�AH �
name	 (	B�AH�
currency_code
 (	B�AH�%
payments_profile_id (	B�AH�/
secondary_payments_profile_id (	B�AH�O
paying_manager_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH�:m�Aj
(googleads.googleapis.com/PaymentsAccount>customers/{customer_id}/paymentsAccounts/{payments_account_id}B
_payments_account_idB
_nameB
_currency_codeB
_payments_profile_idB 
_secondary_payments_profile_idB
_paying_manager_customerB�
%com.google.ads.googleads.v7.resourcesBPaymentsAccountProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

