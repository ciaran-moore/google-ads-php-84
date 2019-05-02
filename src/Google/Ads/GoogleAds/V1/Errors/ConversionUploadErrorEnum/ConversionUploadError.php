<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/conversion_upload_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\ConversionUploadErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible conversion upload errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.ConversionUploadErrorEnum.ConversionUploadError</code>
 */
class ConversionUploadError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The request contained more than 2000 conversions.
     *
     * Generated from protobuf enum <code>TOO_MANY_CONVERSIONS_IN_REQUEST = 2;</code>
     */
    const TOO_MANY_CONVERSIONS_IN_REQUEST = 2;
    /**
     * The specified gclid could not be decoded.
     *
     * Generated from protobuf enum <code>UNPARSEABLE_GCLID = 3;</code>
     */
    const UNPARSEABLE_GCLID = 3;
    /**
     * The specified conversion_date_time is before the event time
     * associated with the given gclid.
     *
     * Generated from protobuf enum <code>CONVERSION_PRECEDES_GCLID = 4;</code>
     */
    const CONVERSION_PRECEDES_GCLID = 4;
    /**
     * The click associated with the given gclid is either too old to be
     * imported or occurred outside of the click through lookback window for the
     * specified conversion action.
     *
     * Generated from protobuf enum <code>EXPIRED_GCLID = 5;</code>
     */
    const EXPIRED_GCLID = 5;
    /**
     * The click associated with the given gclid occurred too recently. Please
     * try uploading again after 24 hours have passed since the click occurred.
     *
     * Generated from protobuf enum <code>TOO_RECENT_GCLID = 6;</code>
     */
    const TOO_RECENT_GCLID = 6;
    /**
     * The click associated with the given gclid could not be found in the
     * system. This can happen if Google Click IDs are collected for non Google
     * Ads clicks.
     *
     * Generated from protobuf enum <code>GCLID_NOT_FOUND = 7;</code>
     */
    const GCLID_NOT_FOUND = 7;
    /**
     * The click associated with the given gclid is owned by a customer
     * account that the uploading customer does not manage.
     *
     * Generated from protobuf enum <code>UNAUTHORIZED_CUSTOMER = 8;</code>
     */
    const UNAUTHORIZED_CUSTOMER = 8;
    /**
     * No upload eligible conversion action that matches the provided
     * information can be found for the customer.
     *
     * Generated from protobuf enum <code>INVALID_CONVERSION_ACTION = 9;</code>
     */
    const INVALID_CONVERSION_ACTION = 9;
    /**
     * The specified conversion action was created too recently.
     * Please try the upload again after 4-6 hours have passed since the
     * conversion action was created.
     *
     * Generated from protobuf enum <code>TOO_RECENT_CONVERSION_ACTION = 10;</code>
     */
    const TOO_RECENT_CONVERSION_ACTION = 10;
    /**
     * The click associated with the given gclid does not contain conversion
     * tracking information.
     *
     * Generated from protobuf enum <code>CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME = 11;</code>
     */
    const CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME = 11;
    /**
     * The specified conversion action does not use an external attribution
     * model, but external_attribution_data was set.
     *
     * Generated from protobuf enum <code>EXTERNAL_ATTRIBUTION_DATA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 12;</code>
     */
    const EXTERNAL_ATTRIBUTION_DATA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 12;
    /**
     * The specified conversion action uses an external attribution model, but
     * external_attribution_data or one of its contained fields was not set.
     * Both external_attribution_credit and external_attribution_model must be
     * set for externally attributed conversion actions.
     *
     * Generated from protobuf enum <code>EXTERNAL_ATTRIBUTION_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 13;</code>
     */
    const EXTERNAL_ATTRIBUTION_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 13;
    /**
     * Order IDs are not supported for conversion actions which use an external
     * attribution model.
     *
     * Generated from protobuf enum <code>ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 14;</code>
     */
    const ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 14;
    /**
     * A conversion with the same order id and conversion action combination
     * already exists in our system.
     *
     * Generated from protobuf enum <code>ORDER_ID_ALREADY_IN_USE = 15;</code>
     */
    const ORDER_ID_ALREADY_IN_USE = 15;
    /**
     * The request contained two or more conversions with the same order id and
     * conversion action combination.
     *
     * Generated from protobuf enum <code>DUPLICATE_ORDER_ID = 16;</code>
     */
    const DUPLICATE_ORDER_ID = 16;
    /**
     * The call occurred too recently. Please try uploading again after 24 hours
     * have passed since the call occurred.
     *
     * Generated from protobuf enum <code>TOO_RECENT_CALL = 17;</code>
     */
    const TOO_RECENT_CALL = 17;
    /**
     * The click that initiated the call is too old for this conversion to be
     * imported.
     *
     * Generated from protobuf enum <code>EXPIRED_CALL = 18;</code>
     */
    const EXPIRED_CALL = 18;
    /**
     * The call or the click leading to the call was not found.
     *
     * Generated from protobuf enum <code>CALL_NOT_FOUND = 19;</code>
     */
    const CALL_NOT_FOUND = 19;
    /**
     * The specified conversion_date_time is before the call_start_date_time.
     *
     * Generated from protobuf enum <code>CONVERSION_PRECEDES_CALL = 20;</code>
     */
    const CONVERSION_PRECEDES_CALL = 20;
    /**
     * The click associated with the call does not contain conversion tracking
     * information.
     *
     * Generated from protobuf enum <code>CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME = 21;</code>
     */
    const CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME = 21;
    /**
     * The caller’s phone number cannot be parsed. It should be formatted either
     * as E.164 "+16502531234", International "+64 3-331 6005" or US national
     * number "6502531234".
     *
     * Generated from protobuf enum <code>UNPARSEABLE_CALLERS_PHONE_NUMBER = 22;</code>
     */
    const UNPARSEABLE_CALLERS_PHONE_NUMBER = 22;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TOO_MANY_CONVERSIONS_IN_REQUEST => 'TOO_MANY_CONVERSIONS_IN_REQUEST',
        self::UNPARSEABLE_GCLID => 'UNPARSEABLE_GCLID',
        self::CONVERSION_PRECEDES_GCLID => 'CONVERSION_PRECEDES_GCLID',
        self::EXPIRED_GCLID => 'EXPIRED_GCLID',
        self::TOO_RECENT_GCLID => 'TOO_RECENT_GCLID',
        self::GCLID_NOT_FOUND => 'GCLID_NOT_FOUND',
        self::UNAUTHORIZED_CUSTOMER => 'UNAUTHORIZED_CUSTOMER',
        self::INVALID_CONVERSION_ACTION => 'INVALID_CONVERSION_ACTION',
        self::TOO_RECENT_CONVERSION_ACTION => 'TOO_RECENT_CONVERSION_ACTION',
        self::CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME => 'CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME',
        self::EXTERNAL_ATTRIBUTION_DATA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION => 'EXTERNAL_ATTRIBUTION_DATA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION',
        self::EXTERNAL_ATTRIBUTION_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION => 'EXTERNAL_ATTRIBUTION_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION',
        self::ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION => 'ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION',
        self::ORDER_ID_ALREADY_IN_USE => 'ORDER_ID_ALREADY_IN_USE',
        self::DUPLICATE_ORDER_ID => 'DUPLICATE_ORDER_ID',
        self::TOO_RECENT_CALL => 'TOO_RECENT_CALL',
        self::EXPIRED_CALL => 'EXPIRED_CALL',
        self::CALL_NOT_FOUND => 'CALL_NOT_FOUND',
        self::CONVERSION_PRECEDES_CALL => 'CONVERSION_PRECEDES_CALL',
        self::CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME => 'CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME',
        self::UNPARSEABLE_CALLERS_PHONE_NUMBER => 'UNPARSEABLE_CALLERS_PHONE_NUMBER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionUploadError::class, \Google\Ads\GoogleAds\V1\Errors\ConversionUploadErrorEnum_ConversionUploadError::class);
