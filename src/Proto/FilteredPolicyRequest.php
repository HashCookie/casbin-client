<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: casbin.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.FilteredPolicyRequest</code>
 */
class FilteredPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 enforcerHandler = 1;</code>
     */
    private $enforcerHandler = 0;
    /**
     * Generated from protobuf field <code>string pType = 2;</code>
     */
    private $pType = '';
    /**
     * Generated from protobuf field <code>int32 fieldIndex = 3;</code>
     */
    private $fieldIndex = 0;
    /**
     * Generated from protobuf field <code>repeated string fieldValues = 4;</code>
     */
    private $fieldValues;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $enforcerHandler
     *     @type string $pType
     *     @type int $fieldIndex
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $fieldValues
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Casbin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 enforcerHandler = 1;</code>
     * @return int
     */
    public function getEnforcerHandler()
    {
        return $this->enforcerHandler;
    }

    /**
     * Generated from protobuf field <code>int32 enforcerHandler = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEnforcerHandler($var)
    {
        GPBUtil::checkInt32($var);
        $this->enforcerHandler = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pType = 2;</code>
     * @return string
     */
    public function getPType()
    {
        return $this->pType;
    }

    /**
     * Generated from protobuf field <code>string pType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPType($var)
    {
        GPBUtil::checkString($var, True);
        $this->pType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 fieldIndex = 3;</code>
     * @return int
     */
    public function getFieldIndex()
    {
        return $this->fieldIndex;
    }

    /**
     * Generated from protobuf field <code>int32 fieldIndex = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFieldIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->fieldIndex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string fieldValues = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldValues()
    {
        return $this->fieldValues;
    }

    /**
     * Generated from protobuf field <code>repeated string fieldValues = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fieldValues = $arr;

        return $this;
    }

}

