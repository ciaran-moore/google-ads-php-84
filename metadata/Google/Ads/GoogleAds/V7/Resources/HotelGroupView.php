<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/hotel_group_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Resources;

class HotelGroupView
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
�
8google/ads/googleads/v7/resources/hotel_group_view.proto!google.ads.googleads.v7.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
HotelGroupViewF
resource_name (	B/�A�A)
\'googleads.googleapis.com/HotelGroupView:r�Ao
\'googleads.googleapis.com/HotelGroupViewDcustomers/{customer_id}/hotelGroupViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v7.resourcesBHotelGroupViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

