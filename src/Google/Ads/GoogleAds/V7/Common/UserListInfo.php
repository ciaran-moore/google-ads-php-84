<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/criteria.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A User List criterion. Represents a user list that is defined by the
 * advertiser to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.UserListInfo</code>
 */
class UserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The User List resource name.
     *
     * Generated from protobuf field <code>string user_list = 2;</code>
     */
    protected $user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_list
     *           The User List resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The User List resource name.
     *
     * Generated from protobuf field <code>string user_list = 2;</code>
     * @return string
     */
    public function getUserList()
    {
        return isset($this->user_list) ? $this->user_list : '';
    }

    public function hasUserList()
    {
        return isset($this->user_list);
    }

    public function clearUserList()
    {
        unset($this->user_list);
    }

    /**
     * The User List resource name.
     *
     * Generated from protobuf field <code>string user_list = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserList($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_list = $var;

        return $this;
    }

}

