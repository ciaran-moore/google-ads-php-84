<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/offline_user_data_job_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [OfflineUserDataJobService.AddOfflineUserDataJobOperations][google.ads.googleads.v7.services.OfflineUserDataJobService.AddOfflineUserDataJobOperations].
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.AddOfflineUserDataJobOperationsRequest</code>
 */
class AddOfflineUserDataJobOperationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the OfflineUserDataJob.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * True to enable partial failure for the offline user data job.
     *
     * Generated from protobuf field <code>bool enable_partial_failure = 4;</code>
     */
    protected $enable_partial_failure = null;
    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.services.OfflineUserDataJobOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operations;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     */
    protected $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Required. The resource name of the OfflineUserDataJob.
     *     @type bool $enable_partial_failure
     *           True to enable partial failure for the offline user data job.
     *     @type \Google\Ads\GoogleAds\V7\Services\OfflineUserDataJobOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           Required. The list of operations to be done.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\OfflineUserDataJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the OfflineUserDataJob.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The resource name of the OfflineUserDataJob.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * True to enable partial failure for the offline user data job.
     *
     * Generated from protobuf field <code>bool enable_partial_failure = 4;</code>
     * @return bool
     */
    public function getEnablePartialFailure()
    {
        return isset($this->enable_partial_failure) ? $this->enable_partial_failure : false;
    }

    public function hasEnablePartialFailure()
    {
        return isset($this->enable_partial_failure);
    }

    public function clearEnablePartialFailure()
    {
        unset($this->enable_partial_failure);
    }

    /**
     * True to enable partial failure for the offline user data job.
     *
     * Generated from protobuf field <code>bool enable_partial_failure = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePartialFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_partial_failure = $var;

        return $this;
    }

    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.services.OfflineUserDataJobOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.services.OfflineUserDataJobOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V7\Services\OfflineUserDataJobOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V7\Services\OfflineUserDataJobOperation::class);
        $this->operations = $arr;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

