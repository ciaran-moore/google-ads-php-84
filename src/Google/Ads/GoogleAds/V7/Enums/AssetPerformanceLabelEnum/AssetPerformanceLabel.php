<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/asset_performance_label.proto

namespace Google\Ads\GoogleAds\V7\Enums\AssetPerformanceLabelEnum;

use UnexpectedValueException;

/**
 * Enum describing the possible performance labels of an asset, usually
 * computed in the context of a linkage.
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel</code>
 */
class AssetPerformanceLabel
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * This asset does not yet have any performance informantion. This may be
     * because it is still under review.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    const PENDING = 2;
    /**
     * The asset has started getting impressions but the stats are not
     * statistically significant enough to get an asset performance label.
     *
     * Generated from protobuf enum <code>LEARNING = 3;</code>
     */
    const LEARNING = 3;
    /**
     * Worst performing assets.
     *
     * Generated from protobuf enum <code>LOW = 4;</code>
     */
    const LOW = 4;
    /**
     * Good performing assets.
     *
     * Generated from protobuf enum <code>GOOD = 5;</code>
     */
    const GOOD = 5;
    /**
     * Best performing assets.
     *
     * Generated from protobuf enum <code>BEST = 6;</code>
     */
    const BEST = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PENDING => 'PENDING',
        self::LEARNING => 'LEARNING',
        self::LOW => 'LOW',
        self::GOOD => 'GOOD',
        self::BEST => 'BEST',
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
class_alias(AssetPerformanceLabel::class, \Google\Ads\GoogleAds\V7\Enums\AssetPerformanceLabelEnum_AssetPerformanceLabel::class);

