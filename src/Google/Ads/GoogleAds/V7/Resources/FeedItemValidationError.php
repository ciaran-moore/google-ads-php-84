<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V7\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stores a validation error and the set of offending feed attributes which
 * together are responsible for causing a feed item validation error.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.FeedItemValidationError</code>
 */
class FeedItemValidationError extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Error code indicating what validation error was triggered. The description
     * of the error can be found in the 'description' field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.errors.FeedItemValidationErrorEnum.FeedItemValidationError validation_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $validation_error = 0;
    /**
     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = null;
    /**
     * Output only. Set of feed attributes in the feed item flagged during validation. If
     * empty, no specific feed attributes can be associated with the error
     * (e.g. error across the entire feed item).
     *
     * Generated from protobuf field <code>repeated int64 feed_attribute_ids = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $feed_attribute_ids;
    /**
     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>string extra_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $extra_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $validation_error
     *           Output only. Error code indicating what validation error was triggered. The description
     *           of the error can be found in the 'description' field.
     *     @type string $description
     *           Output only. The description of the validation error.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $feed_attribute_ids
     *           Output only. Set of feed attributes in the feed item flagged during validation. If
     *           empty, no specific feed attributes can be associated with the error
     *           (e.g. error across the entire feed item).
     *     @type string $extra_info
     *           Output only. Any extra information related to this error which is not captured by
     *           validation_error and feed_attribute_id (e.g. placeholder field IDs when
     *           feed_attribute_id is not mapped). Note that extra_info is not localized.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Error code indicating what validation error was triggered. The description
     * of the error can be found in the 'description' field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.errors.FeedItemValidationErrorEnum.FeedItemValidationError validation_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getValidationError()
    {
        return $this->validation_error;
    }

    /**
     * Output only. Error code indicating what validation error was triggered. The description
     * of the error can be found in the 'description' field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.errors.FeedItemValidationErrorEnum.FeedItemValidationError validation_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setValidationError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Errors\FeedItemValidationErrorEnum\FeedItemValidationError::class);
        $this->validation_error = $var;

        return $this;
    }

    /**
     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Set of feed attributes in the feed item flagged during validation. If
     * empty, no specific feed attributes can be associated with the error
     * (e.g. error across the entire feed item).
     *
     * Generated from protobuf field <code>repeated int64 feed_attribute_ids = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeedAttributeIds()
    {
        return $this->feed_attribute_ids;
    }

    /**
     * Output only. Set of feed attributes in the feed item flagged during validation. If
     * empty, no specific feed attributes can be associated with the error
     * (e.g. error across the entire feed item).
     *
     * Generated from protobuf field <code>repeated int64 feed_attribute_ids = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeedAttributeIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->feed_attribute_ids = $arr;

        return $this;
    }

    /**
     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>string extra_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getExtraInfo()
    {
        return isset($this->extra_info) ? $this->extra_info : '';
    }

    public function hasExtraInfo()
    {
        return isset($this->extra_info);
    }

    public function clearExtraInfo()
    {
        unset($this->extra_info);
    }

    /**
     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>string extra_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setExtraInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->extra_info = $var;

        return $this;
    }

}

