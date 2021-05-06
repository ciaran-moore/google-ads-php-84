<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/customer_user_access_invitation_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CustomerUserAccessInvitation.MutateCustomerUserAccessInvitation][]
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.MutateCustomerUserAccessInvitationRequest</code>
 */
class MutateCustomerUserAccessInvitationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer whose access invitation is being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The operation to perform on the access invitation
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.services.CustomerUserAccessInvitationOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer whose access invitation is being modified.
     *     @type \Google\Ads\GoogleAds\V7\Services\CustomerUserAccessInvitationOperation $operation
     *           Required. The operation to perform on the access invitation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\CustomerUserAccessInvitationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer whose access invitation is being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer whose access invitation is being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The operation to perform on the access invitation
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.services.CustomerUserAccessInvitationOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V7\Services\CustomerUserAccessInvitationOperation|null
     */
    public function getOperation()
    {
        return isset($this->operation) ? $this->operation : null;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Required. The operation to perform on the access invitation
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.services.CustomerUserAccessInvitationOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V7\Services\CustomerUserAccessInvitationOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Services\CustomerUserAccessInvitationOperation::class);
        $this->operation = $var;

        return $this;
    }

}

