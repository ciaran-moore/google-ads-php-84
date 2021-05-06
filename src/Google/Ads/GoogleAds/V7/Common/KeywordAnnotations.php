<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/keyword_plan_common.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Annotations for the Keyword plan keywords.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.KeywordAnnotations</code>
 */
class KeywordAnnotations extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of concepts for the keyword.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.KeywordConcept concepts = 1;</code>
     */
    private $concepts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V7\Common\KeywordConcept[]|\Google\Protobuf\Internal\RepeatedField $concepts
     *           The list of concepts for the keyword.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\KeywordPlanCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of concepts for the keyword.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.KeywordConcept concepts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConcepts()
    {
        return $this->concepts;
    }

    /**
     * The list of concepts for the keyword.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.KeywordConcept concepts = 1;</code>
     * @param \Google\Ads\GoogleAds\V7\Common\KeywordConcept[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConcepts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V7\Common\KeywordConcept::class);
        $this->concepts = $arr;

        return $this;
    }

}

