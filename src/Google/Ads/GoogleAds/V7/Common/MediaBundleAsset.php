<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/asset_types.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A MediaBundle asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.MediaBundleAsset</code>
 */
class MediaBundleAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     *           depends on the ad field where it will be used. For more information on the
     *           format, see the documentation of the ad field where you plan on using the
     *           MediaBundleAsset. This field is mutate only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : '';
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
     * depends on the ad field where it will be used. For more information on the
     * format, see the documentation of the ad field where you plan on using the
     * MediaBundleAsset. This field is mutate only.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

