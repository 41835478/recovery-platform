<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: simple.proto
//   Date: 2011-10-04 14:32:18

namespace tests {

  class Simple extends \DrSlump\Protobuf\Message {

    /**  @var float */
    public $double = null;
    
    /**  @var float */
    public $float = null;
    
    /**  @var int */
    public $int64 = null;
    
    /**  @var int */
    public $uint64 = null;
    
    /**  @var int */
    public $int32 = null;
    
    /**  @var int */
    public $fixed64 = null;
    
    /**  @var int */
    public $fixed32 = null;
    
    /**  @var boolean */
    public $bool = null;
    
    /**  @var string */
    public $string = null;
    
    /**  @var string */
    public $bytes = null;
    
    /**  @var int */
    public $uint32 = null;
    
    /**  @var int */
    public $sfixed32 = null;
    
    /**  @var int */
    public $sfixed64 = null;
    
    /**  @var int */
    public $sint32 = null;
    
    /**  @var int */
    public $sint64 = null;
    
/////////////////W2S_Message////////////////////////////////////
  public $sName;
  public $nFrom;
  
  /**
   * @var string $nWebId
   * @tag 2
   * @label required
   * @type \ProtocolBuffers::TYPE_UINT32
   **/
  public $nWebId;
  
  /**
   * @var string $nType
   * @tag 3
   * @label required
   * @type \ProtocolBuffers::TYPE_UINT32
   **/
  public $nType;
  
  /**
   * @var string $sUserId
   * @tag 4
   * @label required
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  public $sUserId;
  
  /**
   * @var string $sMessage
   * @tag 5
   * @label required
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  public $sMessage;
  
 

/////////////////////////////////////////////////////

 

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tests.Simple');
 
     // OPTIONAL STRING string = 1

 
	  $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "header";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

 	  /*
	  $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "sName";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 int32 = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "nFrom";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);
 	  */
	  
	  // OPTIONAL INT32 int32 = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "nWebId";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);


      // OPTIONAL INT32 int32 = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "nType";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);


      // OPTIONAL STRING  STRING = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sUserId";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);


     // OPTIONAL STRING string = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sMessage";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);



/*
      // OPTIONAL DOUBLE double = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "double";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT float = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "float";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 int64 = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "int64";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 uint64 = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "uint64";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 int32 = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "int32";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FIXED64 fixed64 = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "fixed64";
      $f->type      = \DrSlump\Protobuf::TYPE_FIXED64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FIXED32 fixed32 = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "fixed32";
      $f->type      = \DrSlump\Protobuf::TYPE_FIXED32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL bool = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "bool";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING string = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "string";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BYTES bytes = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "bytes";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 uint32 = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "uint32";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL SFIXED32 sfixed32 = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "sfixed32";
      $f->type      = \DrSlump\Protobuf::TYPE_SFIXED32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL SFIXED64 sfixed64 = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "sfixed64";
      $f->type      = \DrSlump\Protobuf::TYPE_SFIXED64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL SINT32 sint32 = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "sint32";
      $f->type      = \DrSlump\Protobuf::TYPE_SINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL SINT64 sint64 = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "sint64";
      $f->type      = \DrSlump\Protobuf::TYPE_SINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

	  **/

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <double> has a value
     *
     * @return boolean
     */
    public function hasDouble(){
      return $this->_has(1);
    }
    
    /**
     * Clear <double> value
     *
     * @return \tests\Simple
     */
    public function clearDouble(){
      return $this->_clear(1);
    }
    
    /**
     * Get <double> value
     *
     * @return float
     */
    public function getDouble(){
      return $this->_get(1);
    }
    
    /**
     * Set <double> value
     *
     * @param float $value
     * @return \tests\Simple
     */
    public function setDouble( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <float> has a value
     *
     * @return boolean
     */
    public function hasFloat(){
      return $this->_has(2);
    }
    
    /**
     * Clear <float> value
     *
     * @return \tests\Simple
     */
    public function clearFloat(){
      return $this->_clear(2);
    }
    
    /**
     * Get <float> value
     *
     * @return float
     */
    public function getFloat(){
      return $this->_get(2);
    }
    
    /**
     * Set <float> value
     *
     * @param float $value
     * @return \tests\Simple
     */
    public function setFloat( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <int64> has a value
     *
     * @return boolean
     */
    public function hasInt64(){
      return $this->_has(3);
    }
    
    /**
     * Clear <int64> value
     *
     * @return \tests\Simple
     */
    public function clearInt64(){
      return $this->_clear(3);
    }
    
    /**
     * Get <int64> value
     *
     * @return int
     */
    public function getInt64(){
      return $this->_get(3);
    }
    
    /**
     * Set <int64> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setInt64( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <uint64> has a value
     *
     * @return boolean
     */
    public function hasUint64(){
      return $this->_has(4);
    }
    
    /**
     * Clear <uint64> value
     *
     * @return \tests\Simple
     */
    public function clearUint64(){
      return $this->_clear(4);
    }
    
    /**
     * Get <uint64> value
     *
     * @return int
     */
    public function getUint64(){
      return $this->_get(4);
    }
    
    /**
     * Set <uint64> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setUint64( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <int32> has a value
     *
     * @return boolean
     */
    public function hasInt32(){
      return $this->_has(5);
    }
    
    /**
     * Clear <int32> value
     *
     * @return \tests\Simple
     */
    public function clearInt32(){
      return $this->_clear(5);
    }
    
    /**
     * Get <int32> value
     *
     * @return int
     */
    public function getInt32(){
      return $this->_get(5);
    }
    
    /**
     * Set <int32> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setInt32( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <fixed64> has a value
     *
     * @return boolean
     */
    public function hasFixed64(){
      return $this->_has(6);
    }
    
    /**
     * Clear <fixed64> value
     *
     * @return \tests\Simple
     */
    public function clearFixed64(){
      return $this->_clear(6);
    }
    
    /**
     * Get <fixed64> value
     *
     * @return int
     */
    public function getFixed64(){
      return $this->_get(6);
    }
    
    /**
     * Set <fixed64> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setFixed64( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <fixed32> has a value
     *
     * @return boolean
     */
    public function hasFixed32(){
      return $this->_has(7);
    }
    
    /**
     * Clear <fixed32> value
     *
     * @return \tests\Simple
     */
    public function clearFixed32(){
      return $this->_clear(7);
    }
    
    /**
     * Get <fixed32> value
     *
     * @return int
     */
    public function getFixed32(){
      return $this->_get(7);
    }
    
    /**
     * Set <fixed32> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setFixed32( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <bool> has a value
     *
     * @return boolean
     */
    public function hasBool(){
      return $this->_has(8);
    }
    
    /**
     * Clear <bool> value
     *
     * @return \tests\Simple
     */
    public function clearBool(){
      return $this->_clear(8);
    }
    
    /**
     * Get <bool> value
     *
     * @return boolean
     */
    public function getBool(){
      return $this->_get(8);
    }
    
    /**
     * Set <bool> value
     *
     * @param boolean $value
     * @return \tests\Simple
     */
    public function setBool( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <string> has a value
     *
     * @return boolean
     */
    public function hasString(){
      return $this->_has(9);
    }
    
    /**
     * Clear <string> value
     *
     * @return \tests\Simple
     */
    public function clearString(){
      return $this->_clear(9);
    }
    
    /**
     * Get <string> value
     *
     * @return string
     */
    public function getString(){
      return $this->_get(9);
    }
    
    /**
     * Set <string> value
     *
     * @param string $value
     * @return \tests\Simple
     */
    public function setString( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <bytes> has a value
     *
     * @return boolean
     */
    public function hasBytes(){
      return $this->_has(12);
    }
    
    /**
     * Clear <bytes> value
     *
     * @return \tests\Simple
     */
    public function clearBytes(){
      return $this->_clear(12);
    }
    
    /**
     * Get <bytes> value
     *
     * @return string
     */
    public function getBytes(){
      return $this->_get(12);
    }
    
    /**
     * Set <bytes> value
     *
     * @param string $value
     * @return \tests\Simple
     */
    public function setBytes( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <uint32> has a value
     *
     * @return boolean
     */
    public function hasUint32(){
      return $this->_has(13);
    }
    
    /**
     * Clear <uint32> value
     *
     * @return \tests\Simple
     */
    public function clearUint32(){
      return $this->_clear(13);
    }
    
    /**
     * Get <uint32> value
     *
     * @return int
     */
    public function getUint32(){
      return $this->_get(13);
    }
    
    /**
     * Set <uint32> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setUint32( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <sfixed32> has a value
     *
     * @return boolean
     */
    public function hasSfixed32(){
      return $this->_has(15);
    }
    
    /**
     * Clear <sfixed32> value
     *
     * @return \tests\Simple
     */
    public function clearSfixed32(){
      return $this->_clear(15);
    }
    
    /**
     * Get <sfixed32> value
     *
     * @return int
     */
    public function getSfixed32(){
      return $this->_get(15);
    }
    
    /**
     * Set <sfixed32> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setSfixed32( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <sfixed64> has a value
     *
     * @return boolean
     */
    public function hasSfixed64(){
      return $this->_has(16);
    }
    
    /**
     * Clear <sfixed64> value
     *
     * @return \tests\Simple
     */
    public function clearSfixed64(){
      return $this->_clear(16);
    }
    
    /**
     * Get <sfixed64> value
     *
     * @return int
     */
    public function getSfixed64(){
      return $this->_get(16);
    }
    
    /**
     * Set <sfixed64> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setSfixed64( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <sint32> has a value
     *
     * @return boolean
     */
    public function hasSint32(){
      return $this->_has(17);
    }
    
    /**
     * Clear <sint32> value
     *
     * @return \tests\Simple
     */
    public function clearSint32(){
      return $this->_clear(17);
    }
    
    /**
     * Get <sint32> value
     *
     * @return int
     */
    public function getSint32(){
      return $this->_get(17);
    }
    
    /**
     * Set <sint32> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setSint32( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <sint64> has a value
     *
     * @return boolean
     */
    public function hasSint64(){
      return $this->_has(18);
    }
    
    /**
     * Clear <sint64> value
     *
     * @return \tests\Simple
     */
    public function clearSint64(){
      return $this->_clear(18);
    }
    
    /**
     * Get <sint64> value
     *
     * @return int
     */
    public function getSint64(){
      return $this->_get(18);
    }
    
    /**
     * Set <sint64> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setSint64( $value){
      return $this->_set(18, $value);
    }
  }
}

