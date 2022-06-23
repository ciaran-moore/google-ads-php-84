<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Product video specific data.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.ProductVideo</code>
 */
class ProductVideo extends \Google\Protobuf\Internal\Message
{
    /**
     * The MediaFile resource name of a video which must be hosted on YouTube.
     *
     * Generated from protobuf field <code>optional string product_video = 2;</code>
     */
    protected $product_video = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $product_video
     *           The MediaFile resource name of a video which must be hosted on YouTube.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The MediaFile resource name of a video which must be hosted on YouTube.
     *
     * Generated from protobuf field <code>optional string product_video = 2;</code>
     * @return string
     */
    public function getProductVideo()
    {
        return isset($this->product_video) ? $this->product_video : '';
    }

    public function hasProductVideo()
    {
        return isset($this->product_video);
    }

    public function clearProductVideo()
    {
        unset($this->product_video);
    }

    /**
     * The MediaFile resource name of a video which must be hosted on YouTube.
     *
     * Generated from protobuf field <code>optional string product_video = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProductVideo($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_video = $var;

        return $this;
    }

}
