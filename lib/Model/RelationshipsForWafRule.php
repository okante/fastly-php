<?php
/**
 * RelationshipsForWafRule
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * RelationshipsForWafRule Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RelationshipsForWafRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'relationships_for_waf_rule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'waf_tags' => '\Fastly\Model\RelationshipWafTagsWafTags',
        'waf_rule_revisions' => '\Fastly\Model\RelationshipWafRuleRevisionWafRuleRevisions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'waf_tags' => null,
        'waf_rule_revisions' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'waf_tags' => 'waf_tags',
        'waf_rule_revisions' => 'waf_rule_revisions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'waf_tags' => 'setWafTags',
        'waf_rule_revisions' => 'setWafRuleRevisions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'waf_tags' => 'getWafTags',
        'waf_rule_revisions' => 'getWafRuleRevisions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$fastlyModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['waf_tags'] = $data['waf_tags'] ?? null;
        $this->container['waf_rule_revisions'] = $data['waf_rule_revisions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets waf_tags
     *
     * @return \Fastly\Model\RelationshipWafTagsWafTags|null
     */
    public function getWafTags()
    {
        return $this->container['waf_tags'];
    }

    /**
     * Sets waf_tags
     *
     * @param \Fastly\Model\RelationshipWafTagsWafTags|null $waf_tags waf_tags
     *
     * @return self
     */
    public function setWafTags($waf_tags)
    {
        $this->container['waf_tags'] = $waf_tags;

        return $this;
    }

    /**
     * Gets waf_rule_revisions
     *
     * @return \Fastly\Model\RelationshipWafRuleRevisionWafRuleRevisions|null
     */
    public function getWafRuleRevisions()
    {
        return $this->container['waf_rule_revisions'];
    }

    /**
     * Sets waf_rule_revisions
     *
     * @param \Fastly\Model\RelationshipWafRuleRevisionWafRuleRevisions|null $waf_rule_revisions waf_rule_revisions
     *
     * @return self
     */
    public function setWafRuleRevisions($waf_rule_revisions)
    {
        $this->container['waf_rule_revisions'] = $waf_rule_revisions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

