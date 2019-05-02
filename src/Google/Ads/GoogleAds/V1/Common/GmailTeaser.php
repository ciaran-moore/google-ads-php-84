<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Gmail teaser data. The teaser is a small header that acts as an invitation
 * to view the rest of the ad (the body).
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.GmailTeaser</code>
 */
class GmailTeaser extends \Google\Protobuf\Internal\Message
{
    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     */
    private $headline = null;
    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     */
    private $description = null;
    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     */
    private $business_name = null;
    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     */
    private $logo_image = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $headline
     *           Headline of the teaser.
     *     @type \Google\Protobuf\StringValue $description
     *           Description of the teaser.
     *     @type \Google\Protobuf\StringValue $business_name
     *           Business name of the advertiser.
     *     @type \Google\Protobuf\StringValue $logo_image
     *           The MediaFile resource name of the logo image. Valid image types are GIF,
     *           JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     *           be 1:1 (+-1%).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Returns the unboxed value from <code>getHeadline()</code>

     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return string|null
     */
    public function getHeadlineValue()
    {
        $wrapper = $this->getHeadline();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlineValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setHeadline($wrappedVar);
    }

    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return string|null
     */
    public function getDescriptionValue()
    {
        $wrapper = $this->getDescription();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setDescription($wrappedVar);
    }

    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Returns the unboxed value from <code>getBusinessName()</code>

     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @return string|null
     */
    public function getBusinessNameValue()
    {
        $wrapper = $this->getBusinessName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBusinessNameValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setBusinessName($wrappedVar);
    }

    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLogoImage()
    {
        return $this->logo_image;
    }

    /**
     * Returns the unboxed value from <code>getLogoImage()</code>

     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @return string|null
     */
    public function getLogoImageValue()
    {
        $wrapper = $this->getLogoImage();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLogoImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->logo_image = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLogoImageValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setLogoImage($wrappedVar);
    }

}
