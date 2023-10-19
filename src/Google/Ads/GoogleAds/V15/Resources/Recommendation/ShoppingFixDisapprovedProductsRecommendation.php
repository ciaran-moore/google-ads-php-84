<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V15\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The shopping recommendation to fix disapproved products in a Shopping
 * Campaign Inventory.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.Recommendation.ShoppingFixDisapprovedProductsRecommendation</code>
 */
class ShoppingFixDisapprovedProductsRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The details of the Merchant Center account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.Recommendation.MerchantInfo merchant = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $merchant = null;
    /**
     * Output only. The feed label for the campaign.
     *
     * Generated from protobuf field <code>string feed_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_label = '';
    /**
     * Output only. The number of products of the campaign.
     *
     * Generated from protobuf field <code>int64 products_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $products_count = 0;
    /**
     * Output only. The numbers of products of the campaign that are
     * disapproved.
     *
     * Generated from protobuf field <code>int64 disapproved_products_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $disapproved_products_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V15\Resources\Recommendation\MerchantInfo $merchant
     *           Output only. The details of the Merchant Center account.
     *     @type string $feed_label
     *           Output only. The feed label for the campaign.
     *     @type int|string $products_count
     *           Output only. The number of products of the campaign.
     *     @type int|string $disapproved_products_count
     *           Output only. The numbers of products of the campaign that are
     *           disapproved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The details of the Merchant Center account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.Recommendation.MerchantInfo merchant = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V15\Resources\Recommendation\MerchantInfo|null
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    public function hasMerchant()
    {
        return isset($this->merchant);
    }

    public function clearMerchant()
    {
        unset($this->merchant);
    }

    /**
     * Output only. The details of the Merchant Center account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.Recommendation.MerchantInfo merchant = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V15\Resources\Recommendation\MerchantInfo $var
     * @return $this
     */
    public function setMerchant($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Resources\Recommendation\MerchantInfo::class);
        $this->merchant = $var;

        return $this;
    }

    /**
     * Output only. The feed label for the campaign.
     *
     * Generated from protobuf field <code>string feed_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFeedLabel()
    {
        return $this->feed_label;
    }

    /**
     * Output only. The feed label for the campaign.
     *
     * Generated from protobuf field <code>string feed_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFeedLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed_label = $var;

        return $this;
    }

    /**
     * Output only. The number of products of the campaign.
     *
     * Generated from protobuf field <code>int64 products_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getProductsCount()
    {
        return $this->products_count;
    }

    /**
     * Output only. The number of products of the campaign.
     *
     * Generated from protobuf field <code>int64 products_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setProductsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->products_count = $var;

        return $this;
    }

    /**
     * Output only. The numbers of products of the campaign that are
     * disapproved.
     *
     * Generated from protobuf field <code>int64 disapproved_products_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getDisapprovedProductsCount()
    {
        return $this->disapproved_products_count;
    }

    /**
     * Output only. The numbers of products of the campaign that are
     * disapproved.
     *
     * Generated from protobuf field <code>int64 disapproved_products_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDisapprovedProductsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->disapproved_products_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShoppingFixDisapprovedProductsRecommendation::class, \Google\Ads\GoogleAds\V15\Resources\Recommendation_ShoppingFixDisapprovedProductsRecommendation::class);
