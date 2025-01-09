<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/shareable_preview_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ShareablePreviewService.GenerateShareablePreviews][google.ads.googleads.v17.services.ShareablePreviewService.GenerateShareablePreviews].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.GenerateShareablePreviewsResponse</code>
 */
class GenerateShareablePreviewsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of generate shareable preview results.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.ShareablePreviewOrError responses = 1;</code>
     */
    private $responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V17\Services\ShareablePreviewOrError>|\Google\Protobuf\Internal\RepeatedField $responses
     *           List of generate shareable preview results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ShareablePreviewService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of generate shareable preview results.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.ShareablePreviewOrError responses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * List of generate shareable preview results.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.ShareablePreviewOrError responses = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V17\Services\ShareablePreviewOrError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\ShareablePreviewOrError::class);
        $this->responses = $arr;

        return $this;
    }

}
