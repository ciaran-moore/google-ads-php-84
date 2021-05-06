<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/asset_types.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an image at a certain size, either original or resized.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.ImageDimension</code>
 */
class ImageDimension extends \Google\Protobuf\Internal\Message
{
    /**
     * Height of the image.
     *
     * Generated from protobuf field <code>int64 height_pixels = 4;</code>
     */
    protected $height_pixels = null;
    /**
     * Width of the image.
     *
     * Generated from protobuf field <code>int64 width_pixels = 5;</code>
     */
    protected $width_pixels = null;
    /**
     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>string url = 6;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $height_pixels
     *           Height of the image.
     *     @type int|string $width_pixels
     *           Width of the image.
     *     @type string $url
     *           A URL that returns the image with this height and width.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Height of the image.
     *
     * Generated from protobuf field <code>int64 height_pixels = 4;</code>
     * @return int|string
     */
    public function getHeightPixels()
    {
        return isset($this->height_pixels) ? $this->height_pixels : 0;
    }

    public function hasHeightPixels()
    {
        return isset($this->height_pixels);
    }

    public function clearHeightPixels()
    {
        unset($this->height_pixels);
    }

    /**
     * Height of the image.
     *
     * Generated from protobuf field <code>int64 height_pixels = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeightPixels($var)
    {
        GPBUtil::checkInt64($var);
        $this->height_pixels = $var;

        return $this;
    }

    /**
     * Width of the image.
     *
     * Generated from protobuf field <code>int64 width_pixels = 5;</code>
     * @return int|string
     */
    public function getWidthPixels()
    {
        return isset($this->width_pixels) ? $this->width_pixels : 0;
    }

    public function hasWidthPixels()
    {
        return isset($this->width_pixels);
    }

    public function clearWidthPixels()
    {
        unset($this->width_pixels);
    }

    /**
     * Width of the image.
     *
     * Generated from protobuf field <code>int64 width_pixels = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWidthPixels($var)
    {
        GPBUtil::checkInt64($var);
        $this->width_pixels = $var;

        return $this;
    }

    /**
     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>string url = 6;</code>
     * @return string
     */
    public function getUrl()
    {
        return isset($this->url) ? $this->url : '';
    }

    public function hasUrl()
    {
        return isset($this->url);
    }

    public function clearUrl()
    {
        unset($this->url);
    }

    /**
     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>string url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

