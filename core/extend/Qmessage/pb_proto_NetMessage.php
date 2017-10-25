<?php
/**
 * Auto generated from NetMessage.proto at 2017-09-21 06:54:46
 *
 * net_message package
 */

/**
 * Packet_Header message
 */
class Net_message_PacketHeader extends \ProtobufMessage
{
    /* Field index constants */
    const NFROM = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NFROM => array(
            'default' => 0, 
            'name' => 'nFrom',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NFROM] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nFrom' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNFrom($value)
    {
        return $this->set(self::NFROM, $value);
    }

    /**
     * Returns value of 'nFrom' property
     *
     * @return int
     */
    public function getNFrom()
    {
        return $this->get(self::NFROM);
    }
}

/**
 * Common_Connect message
 */
class Net_message_CommonConnect extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }
}

/**
 * Common_Close message
 */
class Net_message_CommonClose extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }
}

/**
 * Common_Setup message
 */
class Net_message_CommonSetup extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SID => array(
            'default' => '\"\"', 
            'name' => 'sId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSId($value)
    {
        return $this->set(self::SID, $value);
    }

    /**
     * Returns value of 'sId' property
     *
     * @return string
     */
    public function getSId()
    {
        return $this->get(self::SID);
    }
}

/**
 * Common_Setup_Rsp message
 */
class Net_message_CommonSetupRsp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NCODE = 2;
    const SPARAM_LIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NCODE => array(
            'default' => 0, 
            'name' => 'nCode',
            'required' => true,
            'type' => 5,
        ),
        self::SPARAM_LIST => array(
            'name' => 'sparam_list',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NCODE] = null;
        $this->values[self::SPARAM_LIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nCode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNCode($value)
    {
        return $this->set(self::NCODE, $value);
    }

    /**
     * Returns value of 'nCode' property
     *
     * @return int
     */
    public function getNCode()
    {
        return $this->get(self::NCODE);
    }

    /**
     * Appends value to 'sparam_list' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSparamList($value)
    {
        return $this->append(self::SPARAM_LIST, $value);
    }

    /**
     * Clears 'sparam_list' list
     *
     * @return null
     */
    public function clearSparamList()
    {
        return $this->clear(self::SPARAM_LIST);
    }

    /**
     * Returns 'sparam_list' list
     *
     * @return string[]
     */
    public function getSparamList()
    {
        return $this->get(self::SPARAM_LIST);
    }

    /**
     * Returns 'sparam_list' iterator
     *
     * @return ArrayIterator
     */
    public function getSparamListIterator()
    {
        return new \ArrayIterator($this->get(self::SPARAM_LIST));
    }

    /**
     * Returns element from 'sparam_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSparamListAt($offset)
    {
        return $this->get(self::SPARAM_LIST, $offset);
    }

    /**
     * Returns count of 'sparam_list' list
     *
     * @return int
     */
    public function getSparamListCount()
    {
        return $this->count(self::SPARAM_LIST);
    }
}

/**
 * Http_Rep message
 */
class Net_message_HttpRep extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }
}

/**
 * Common_Log message
 */
class Net_message_CommonLog extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SMODEL = 2;
    const SRECORD_ID = 3;
    const LEVEL = 4;
    const STATUS = 5;
    const SREMARK = 6;
    const NCREATE_TIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SMODEL => array(
            'name' => 'smodel',
            'required' => true,
            'type' => 7,
        ),
        self::SRECORD_ID => array(
            'name' => 'srecord_id',
            'required' => true,
            'type' => 7,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => true,
            'type' => 5,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => true,
            'type' => 5,
        ),
        self::SREMARK => array(
            'name' => 'sremark',
            'required' => true,
            'type' => 7,
        ),
        self::NCREATE_TIME => array(
            'name' => 'ncreate_time',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SMODEL] = null;
        $this->values[self::SRECORD_ID] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::SREMARK] = null;
        $this->values[self::NCREATE_TIME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'smodel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmodel($value)
    {
        return $this->set(self::SMODEL, $value);
    }

    /**
     * Returns value of 'smodel' property
     *
     * @return string
     */
    public function getSmodel()
    {
        return $this->get(self::SMODEL);
    }

    /**
     * Sets value of 'srecord_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrecordId($value)
    {
        return $this->set(self::SRECORD_ID, $value);
    }

    /**
     * Returns value of 'srecord_id' property
     *
     * @return string
     */
    public function getSrecordId()
    {
        return $this->get(self::SRECORD_ID);
    }

    /**
     * Sets value of 'level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->get(self::LEVEL);
    }

    /**
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 'sremark' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSremark($value)
    {
        return $this->set(self::SREMARK, $value);
    }

    /**
     * Returns value of 'sremark' property
     *
     * @return string
     */
    public function getSremark()
    {
        return $this->get(self::SREMARK);
    }

    /**
     * Sets value of 'ncreate_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNcreateTime($value)
    {
        return $this->set(self::NCREATE_TIME, $value);
    }

    /**
     * Returns value of 'ncreate_time' property
     *
     * @return int
     */
    public function getNcreateTime()
    {
        return $this->get(self::NCREATE_TIME);
    }
}

/**
 * Netcard message
 */
class Net_message_Netcard extends \ProtobufMessage
{
    /* Field index constants */
    const NNETCARDTYPE = 3;
    const BVMWARENETCARD = 4;
    const SUUID = 5;
    const SMACADDR = 6;
    const SIPADDR = 7;
    const SIPMASK = 8;
    const SGATEWAY = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NNETCARDTYPE => array(
            'default' => 0, 
            'name' => 'nNetcardType',
            'required' => true,
            'type' => 5,
        ),
        self::BVMWARENETCARD => array(
            'default' => 0, 
            'name' => 'bVmwareNetcard',
            'required' => true,
            'type' => 5,
        ),
        self::SUUID => array(
            'default' => '\"\"', 
            'name' => 'sUUID',
            'required' => true,
            'type' => 7,
        ),
        self::SMACADDR => array(
            'default' => '\"\"', 
            'name' => 'sMacAddr',
            'required' => true,
            'type' => 7,
        ),
        self::SIPADDR => array(
            'default' => '\"\"', 
            'name' => 'sIPAddr',
            'required' => true,
            'type' => 7,
        ),
        self::SIPMASK => array(
            'default' => '\"\"', 
            'name' => 'sIPMask',
            'required' => true,
            'type' => 7,
        ),
        self::SGATEWAY => array(
            'default' => '\"\"', 
            'name' => 'sGateWay',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NNETCARDTYPE] = null;
        $this->values[self::BVMWARENETCARD] = null;
        $this->values[self::SUUID] = null;
        $this->values[self::SMACADDR] = null;
        $this->values[self::SIPADDR] = null;
        $this->values[self::SIPMASK] = null;
        $this->values[self::SGATEWAY] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nNetcardType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNNetcardType($value)
    {
        return $this->set(self::NNETCARDTYPE, $value);
    }

    /**
     * Returns value of 'nNetcardType' property
     *
     * @return int
     */
    public function getNNetcardType()
    {
        return $this->get(self::NNETCARDTYPE);
    }

    /**
     * Sets value of 'bVmwareNetcard' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBVmwareNetcard($value)
    {
        return $this->set(self::BVMWARENETCARD, $value);
    }

    /**
     * Returns value of 'bVmwareNetcard' property
     *
     * @return int
     */
    public function getBVmwareNetcard()
    {
        return $this->get(self::BVMWARENETCARD);
    }

    /**
     * Sets value of 'sUUID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSUUID($value)
    {
        return $this->set(self::SUUID, $value);
    }

    /**
     * Returns value of 'sUUID' property
     *
     * @return string
     */
    public function getSUUID()
    {
        return $this->get(self::SUUID);
    }

    /**
     * Sets value of 'sMacAddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSMacAddr($value)
    {
        return $this->set(self::SMACADDR, $value);
    }

    /**
     * Returns value of 'sMacAddr' property
     *
     * @return string
     */
    public function getSMacAddr()
    {
        return $this->get(self::SMACADDR);
    }

    /**
     * Sets value of 'sIPAddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSIPAddr($value)
    {
        return $this->set(self::SIPADDR, $value);
    }

    /**
     * Returns value of 'sIPAddr' property
     *
     * @return string
     */
    public function getSIPAddr()
    {
        return $this->get(self::SIPADDR);
    }

    /**
     * Sets value of 'sIPMask' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSIPMask($value)
    {
        return $this->set(self::SIPMASK, $value);
    }

    /**
     * Returns value of 'sIPMask' property
     *
     * @return string
     */
    public function getSIPMask()
    {
        return $this->get(self::SIPMASK);
    }

    /**
     * Sets value of 'sGateWay' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSGateWay($value)
    {
        return $this->set(self::SGATEWAY, $value);
    }

    /**
     * Returns value of 'sGateWay' property
     *
     * @return string
     */
    public function getSGateWay()
    {
        return $this->get(self::SGATEWAY);
    }
}

/**
 * Partition message
 */
class Net_message_Partition extends \ProtobufMessage
{
    /* Field index constants */
    const NHARDDISKINDEX = 1;
    const NPARTITIONINDEX = 2;
    const NHASSYSTEM = 3;
    const SVOLUMENAME = 4;
    const SDRIVERLETTER = 5;
    const SDRIVERTYPE = 6;
    const SDEVICENAME = 7;
    const SVOLUMELABEL = 8;
    const SFILESYSTEM = 9;
    const NFREESIZE = 10;
    const NTOTALSIZE = 11;
    const NSTARTSECTOR = 12;
    const NTOTALSECTOR = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NHARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'nHarddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::NPARTITIONINDEX => array(
            'default' => 0, 
            'name' => 'nPartitionIndex',
            'required' => true,
            'type' => 5,
        ),
        self::NHASSYSTEM => array(
            'default' => 0, 
            'name' => 'nHasSystem',
            'required' => true,
            'type' => 5,
        ),
        self::SVOLUMENAME => array(
            'default' => '\"\"', 
            'name' => 'sVolumeName',
            'required' => true,
            'type' => 7,
        ),
        self::SDRIVERLETTER => array(
            'default' => '\"\"', 
            'name' => 'sDriverLetter',
            'required' => true,
            'type' => 7,
        ),
        self::SDRIVERTYPE => array(
            'default' => '\"\"', 
            'name' => 'sDriverType',
            'required' => true,
            'type' => 7,
        ),
        self::SDEVICENAME => array(
            'default' => '\"\"', 
            'name' => 'sDeviceName',
            'required' => true,
            'type' => 7,
        ),
        self::SVOLUMELABEL => array(
            'default' => '\"\"', 
            'name' => 'sVolumeLabel',
            'required' => true,
            'type' => 7,
        ),
        self::SFILESYSTEM => array(
            'default' => '\"\"', 
            'name' => 'sFileSystem',
            'required' => true,
            'type' => 7,
        ),
        self::NFREESIZE => array(
            'default' => 0, 
            'name' => 'nFreeSize',
            'required' => true,
            'type' => 5,
        ),
        self::NTOTALSIZE => array(
            'default' => 0, 
            'name' => 'nTotalSize',
            'required' => true,
            'type' => 5,
        ),
        self::NSTARTSECTOR => array(
            'default' => 0, 
            'name' => 'nStartSector',
            'required' => true,
            'type' => 5,
        ),
        self::NTOTALSECTOR => array(
            'default' => 0, 
            'name' => 'nTotalSector',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NHARDDISKINDEX] = null;
        $this->values[self::NPARTITIONINDEX] = null;
        $this->values[self::NHASSYSTEM] = null;
        $this->values[self::SVOLUMENAME] = null;
        $this->values[self::SDRIVERLETTER] = null;
        $this->values[self::SDRIVERTYPE] = null;
        $this->values[self::SDEVICENAME] = null;
        $this->values[self::SVOLUMELABEL] = null;
        $this->values[self::SFILESYSTEM] = null;
        $this->values[self::NFREESIZE] = null;
        $this->values[self::NTOTALSIZE] = null;
        $this->values[self::NSTARTSECTOR] = null;
        $this->values[self::NTOTALSECTOR] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nHarddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNHarddiskIndex($value)
    {
        return $this->set(self::NHARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'nHarddiskIndex' property
     *
     * @return int
     */
    public function getNHarddiskIndex()
    {
        return $this->get(self::NHARDDISKINDEX);
    }

    /**
     * Sets value of 'nPartitionIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPartitionIndex($value)
    {
        return $this->set(self::NPARTITIONINDEX, $value);
    }

    /**
     * Returns value of 'nPartitionIndex' property
     *
     * @return int
     */
    public function getNPartitionIndex()
    {
        return $this->get(self::NPARTITIONINDEX);
    }

    /**
     * Sets value of 'nHasSystem' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNHasSystem($value)
    {
        return $this->set(self::NHASSYSTEM, $value);
    }

    /**
     * Returns value of 'nHasSystem' property
     *
     * @return int
     */
    public function getNHasSystem()
    {
        return $this->get(self::NHASSYSTEM);
    }

    /**
     * Sets value of 'sVolumeName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSVolumeName($value)
    {
        return $this->set(self::SVOLUMENAME, $value);
    }

    /**
     * Returns value of 'sVolumeName' property
     *
     * @return string
     */
    public function getSVolumeName()
    {
        return $this->get(self::SVOLUMENAME);
    }

    /**
     * Sets value of 'sDriverLetter' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDriverLetter($value)
    {
        return $this->set(self::SDRIVERLETTER, $value);
    }

    /**
     * Returns value of 'sDriverLetter' property
     *
     * @return string
     */
    public function getSDriverLetter()
    {
        return $this->get(self::SDRIVERLETTER);
    }

    /**
     * Sets value of 'sDriverType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDriverType($value)
    {
        return $this->set(self::SDRIVERTYPE, $value);
    }

    /**
     * Returns value of 'sDriverType' property
     *
     * @return string
     */
    public function getSDriverType()
    {
        return $this->get(self::SDRIVERTYPE);
    }

    /**
     * Sets value of 'sDeviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDeviceName($value)
    {
        return $this->set(self::SDEVICENAME, $value);
    }

    /**
     * Returns value of 'sDeviceName' property
     *
     * @return string
     */
    public function getSDeviceName()
    {
        return $this->get(self::SDEVICENAME);
    }

    /**
     * Sets value of 'sVolumeLabel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSVolumeLabel($value)
    {
        return $this->set(self::SVOLUMELABEL, $value);
    }

    /**
     * Returns value of 'sVolumeLabel' property
     *
     * @return string
     */
    public function getSVolumeLabel()
    {
        return $this->get(self::SVOLUMELABEL);
    }

    /**
     * Sets value of 'sFileSystem' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSFileSystem($value)
    {
        return $this->set(self::SFILESYSTEM, $value);
    }

    /**
     * Returns value of 'sFileSystem' property
     *
     * @return string
     */
    public function getSFileSystem()
    {
        return $this->get(self::SFILESYSTEM);
    }

    /**
     * Sets value of 'nFreeSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNFreeSize($value)
    {
        return $this->set(self::NFREESIZE, $value);
    }

    /**
     * Returns value of 'nFreeSize' property
     *
     * @return int
     */
    public function getNFreeSize()
    {
        return $this->get(self::NFREESIZE);
    }

    /**
     * Sets value of 'nTotalSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTotalSize($value)
    {
        return $this->set(self::NTOTALSIZE, $value);
    }

    /**
     * Returns value of 'nTotalSize' property
     *
     * @return int
     */
    public function getNTotalSize()
    {
        return $this->get(self::NTOTALSIZE);
    }

    /**
     * Sets value of 'nStartSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNStartSector($value)
    {
        return $this->set(self::NSTARTSECTOR, $value);
    }

    /**
     * Returns value of 'nStartSector' property
     *
     * @return int
     */
    public function getNStartSector()
    {
        return $this->get(self::NSTARTSECTOR);
    }

    /**
     * Sets value of 'nTotalSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTotalSector($value)
    {
        return $this->set(self::NTOTALSECTOR, $value);
    }

    /**
     * Returns value of 'nTotalSector' property
     *
     * @return int
     */
    public function getNTotalSector()
    {
        return $this->get(self::NTOTALSECTOR);
    }
}

/**
 * Harddisk message
 */
class Net_message_Harddisk extends \ProtobufMessage
{
    /* Field index constants */
    const NHARDDISKINDEX = 1;
    const SPHYSICALNAME = 2;
    const SALIASNAME = 3;
    const NTOTALSIZE = 4;
    const SSERIALNUMBER = 5;
    const NDISKTYPE = 6;
    const VPARTITIONS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NHARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'nHarddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::SPHYSICALNAME => array(
            'default' => '\"\"', 
            'name' => 'sPhysicalName',
            'required' => true,
            'type' => 7,
        ),
        self::SALIASNAME => array(
            'default' => '\"\"', 
            'name' => 'sAliasName',
            'required' => true,
            'type' => 7,
        ),
        self::NTOTALSIZE => array(
            'default' => 0, 
            'name' => 'nTotalSize',
            'required' => true,
            'type' => 5,
        ),
        self::SSERIALNUMBER => array(
            'default' => '\"\"', 
            'name' => 'sSerialNumber',
            'required' => true,
            'type' => 7,
        ),
        self::NDISKTYPE => array(
            'name' => 'nDiskType',
            'required' => true,
            'type' => 5,
        ),
        self::VPARTITIONS => array(
            'name' => 'vPartitions',
            'repeated' => true,
            'type' => 'Net_message_Partition'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NHARDDISKINDEX] = null;
        $this->values[self::SPHYSICALNAME] = null;
        $this->values[self::SALIASNAME] = null;
        $this->values[self::NTOTALSIZE] = null;
        $this->values[self::SSERIALNUMBER] = null;
        $this->values[self::NDISKTYPE] = null;
        $this->values[self::VPARTITIONS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nHarddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNHarddiskIndex($value)
    {
        return $this->set(self::NHARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'nHarddiskIndex' property
     *
     * @return int
     */
    public function getNHarddiskIndex()
    {
        return $this->get(self::NHARDDISKINDEX);
    }

    /**
     * Sets value of 'sPhysicalName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSPhysicalName($value)
    {
        return $this->set(self::SPHYSICALNAME, $value);
    }

    /**
     * Returns value of 'sPhysicalName' property
     *
     * @return string
     */
    public function getSPhysicalName()
    {
        return $this->get(self::SPHYSICALNAME);
    }

    /**
     * Sets value of 'sAliasName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSAliasName($value)
    {
        return $this->set(self::SALIASNAME, $value);
    }

    /**
     * Returns value of 'sAliasName' property
     *
     * @return string
     */
    public function getSAliasName()
    {
        return $this->get(self::SALIASNAME);
    }

    /**
     * Sets value of 'nTotalSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTotalSize($value)
    {
        return $this->set(self::NTOTALSIZE, $value);
    }

    /**
     * Returns value of 'nTotalSize' property
     *
     * @return int
     */
    public function getNTotalSize()
    {
        return $this->get(self::NTOTALSIZE);
    }

    /**
     * Sets value of 'sSerialNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSSerialNumber($value)
    {
        return $this->set(self::SSERIALNUMBER, $value);
    }

    /**
     * Returns value of 'sSerialNumber' property
     *
     * @return string
     */
    public function getSSerialNumber()
    {
        return $this->get(self::SSERIALNUMBER);
    }

    /**
     * Sets value of 'nDiskType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNDiskType($value)
    {
        return $this->set(self::NDISKTYPE, $value);
    }

    /**
     * Returns value of 'nDiskType' property
     *
     * @return int
     */
    public function getNDiskType()
    {
        return $this->get(self::NDISKTYPE);
    }

    /**
     * Appends value to 'vPartitions' list
     *
     * @param Net_message_Partition $value Value to append
     *
     * @return null
     */
    public function appendVPartitions(Net_message_Partition $value)
    {
        return $this->append(self::VPARTITIONS, $value);
    }

    /**
     * Clears 'vPartitions' list
     *
     * @return null
     */
    public function clearVPartitions()
    {
        return $this->clear(self::VPARTITIONS);
    }

    /**
     * Returns 'vPartitions' list
     *
     * @return Net_message_Partition[]
     */
    public function getVPartitions()
    {
        return $this->get(self::VPARTITIONS);
    }

    /**
     * Returns 'vPartitions' iterator
     *
     * @return ArrayIterator
     */
    public function getVPartitionsIterator()
    {
        return new \ArrayIterator($this->get(self::VPARTITIONS));
    }

    /**
     * Returns element from 'vPartitions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_Partition
     */
    public function getVPartitionsAt($offset)
    {
        return $this->get(self::VPARTITIONS, $offset);
    }

    /**
     * Returns count of 'vPartitions' list
     *
     * @return int
     */
    public function getVPartitionsCount()
    {
        return $this->count(self::VPARTITIONS);
    }
}

/**
 * Device message
 */
class Net_message_Device extends \ProtobufMessage
{
    /* Field index constants */
    const SDEVICEID = 1;
    const SSYSTEMVERSION = 2;
    const SWORKGROUP = 3;
    const SCOMPUTERNAME = 4;
    const SUSERNAME = 5;
    const SMACADDR = 6;
    const SIPADDR = 7;
    const NCPUNUM = 9;
    const NMEMORY = 10;
    const NETCARDLIST = 11;
    const VHARDDISKS = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SDEVICEID => array(
            'default' => '\"\"', 
            'name' => 'sDeviceID',
            'required' => true,
            'type' => 7,
        ),
        self::SSYSTEMVERSION => array(
            'default' => '\"\"', 
            'name' => 'sSystemVersion',
            'required' => true,
            'type' => 7,
        ),
        self::SWORKGROUP => array(
            'default' => '\"\"', 
            'name' => 'sWorkGroup',
            'required' => true,
            'type' => 7,
        ),
        self::SCOMPUTERNAME => array(
            'default' => '\"\"', 
            'name' => 'sComputerName',
            'required' => true,
            'type' => 7,
        ),
        self::SUSERNAME => array(
            'default' => '\"\"', 
            'name' => 'sUserName',
            'required' => true,
            'type' => 7,
        ),
        self::SMACADDR => array(
            'default' => '\"\"', 
            'name' => 'sMacAddr',
            'required' => true,
            'type' => 7,
        ),
        self::SIPADDR => array(
            'default' => '\"\"', 
            'name' => 'sIPAddr',
            'required' => true,
            'type' => 7,
        ),
        self::NCPUNUM => array(
            'default' => 0, 
            'name' => 'nCpuNum',
            'required' => true,
            'type' => 5,
        ),
        self::NMEMORY => array(
            'default' => 0, 
            'name' => 'nMemory',
            'required' => true,
            'type' => 5,
        ),
        self::NETCARDLIST => array(
            'name' => 'netcardList',
            'repeated' => true,
            'type' => 'Net_message_Netcard'
        ),
        self::VHARDDISKS => array(
            'name' => 'vHarddisks',
            'repeated' => true,
            'type' => 'Net_message_Harddisk'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::SDEVICEID] = null;
        $this->values[self::SSYSTEMVERSION] = null;
        $this->values[self::SWORKGROUP] = null;
        $this->values[self::SCOMPUTERNAME] = null;
        $this->values[self::SUSERNAME] = null;
        $this->values[self::SMACADDR] = null;
        $this->values[self::SIPADDR] = null;
        $this->values[self::NCPUNUM] = null;
        $this->values[self::NMEMORY] = null;
        $this->values[self::NETCARDLIST] = array();
        $this->values[self::VHARDDISKS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'sDeviceID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDeviceID($value)
    {
        return $this->set(self::SDEVICEID, $value);
    }

    /**
     * Returns value of 'sDeviceID' property
     *
     * @return string
     */
    public function getSDeviceID()
    {
        return $this->get(self::SDEVICEID);
    }

    /**
     * Sets value of 'sSystemVersion' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSSystemVersion($value)
    {
        return $this->set(self::SSYSTEMVERSION, $value);
    }

    /**
     * Returns value of 'sSystemVersion' property
     *
     * @return string
     */
    public function getSSystemVersion()
    {
        return $this->get(self::SSYSTEMVERSION);
    }

    /**
     * Sets value of 'sWorkGroup' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSWorkGroup($value)
    {
        return $this->set(self::SWORKGROUP, $value);
    }

    /**
     * Returns value of 'sWorkGroup' property
     *
     * @return string
     */
    public function getSWorkGroup()
    {
        return $this->get(self::SWORKGROUP);
    }

    /**
     * Sets value of 'sComputerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSComputerName($value)
    {
        return $this->set(self::SCOMPUTERNAME, $value);
    }

    /**
     * Returns value of 'sComputerName' property
     *
     * @return string
     */
    public function getSComputerName()
    {
        return $this->get(self::SCOMPUTERNAME);
    }

    /**
     * Sets value of 'sUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSUserName($value)
    {
        return $this->set(self::SUSERNAME, $value);
    }

    /**
     * Returns value of 'sUserName' property
     *
     * @return string
     */
    public function getSUserName()
    {
        return $this->get(self::SUSERNAME);
    }

    /**
     * Sets value of 'sMacAddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSMacAddr($value)
    {
        return $this->set(self::SMACADDR, $value);
    }

    /**
     * Returns value of 'sMacAddr' property
     *
     * @return string
     */
    public function getSMacAddr()
    {
        return $this->get(self::SMACADDR);
    }

    /**
     * Sets value of 'sIPAddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSIPAddr($value)
    {
        return $this->set(self::SIPADDR, $value);
    }

    /**
     * Returns value of 'sIPAddr' property
     *
     * @return string
     */
    public function getSIPAddr()
    {
        return $this->get(self::SIPADDR);
    }

    /**
     * Sets value of 'nCpuNum' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNCpuNum($value)
    {
        return $this->set(self::NCPUNUM, $value);
    }

    /**
     * Returns value of 'nCpuNum' property
     *
     * @return int
     */
    public function getNCpuNum()
    {
        return $this->get(self::NCPUNUM);
    }

    /**
     * Sets value of 'nMemory' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNMemory($value)
    {
        return $this->set(self::NMEMORY, $value);
    }

    /**
     * Returns value of 'nMemory' property
     *
     * @return int
     */
    public function getNMemory()
    {
        return $this->get(self::NMEMORY);
    }

    /**
     * Appends value to 'netcardList' list
     *
     * @param Net_message_Netcard $value Value to append
     *
     * @return null
     */
    public function appendNetcardList(Net_message_Netcard $value)
    {
        return $this->append(self::NETCARDLIST, $value);
    }

    /**
     * Clears 'netcardList' list
     *
     * @return null
     */
    public function clearNetcardList()
    {
        return $this->clear(self::NETCARDLIST);
    }

    /**
     * Returns 'netcardList' list
     *
     * @return Net_message_Netcard[]
     */
    public function getNetcardList()
    {
        return $this->get(self::NETCARDLIST);
    }

    /**
     * Returns 'netcardList' iterator
     *
     * @return ArrayIterator
     */
    public function getNetcardListIterator()
    {
        return new \ArrayIterator($this->get(self::NETCARDLIST));
    }

    /**
     * Returns element from 'netcardList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_Netcard
     */
    public function getNetcardListAt($offset)
    {
        return $this->get(self::NETCARDLIST, $offset);
    }

    /**
     * Returns count of 'netcardList' list
     *
     * @return int
     */
    public function getNetcardListCount()
    {
        return $this->count(self::NETCARDLIST);
    }

    /**
     * Appends value to 'vHarddisks' list
     *
     * @param Net_message_Harddisk $value Value to append
     *
     * @return null
     */
    public function appendVHarddisks(Net_message_Harddisk $value)
    {
        return $this->append(self::VHARDDISKS, $value);
    }

    /**
     * Clears 'vHarddisks' list
     *
     * @return null
     */
    public function clearVHarddisks()
    {
        return $this->clear(self::VHARDDISKS);
    }

    /**
     * Returns 'vHarddisks' list
     *
     * @return Net_message_Harddisk[]
     */
    public function getVHarddisks()
    {
        return $this->get(self::VHARDDISKS);
    }

    /**
     * Returns 'vHarddisks' iterator
     *
     * @return ArrayIterator
     */
    public function getVHarddisksIterator()
    {
        return new \ArrayIterator($this->get(self::VHARDDISKS));
    }

    /**
     * Returns element from 'vHarddisks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_Harddisk
     */
    public function getVHarddisksAt($offset)
    {
        return $this->get(self::VHARDDISKS, $offset);
    }

    /**
     * Returns count of 'vHarddisks' list
     *
     * @return int
     */
    public function getVHarddisksCount()
    {
        return $this->count(self::VHARDDISKS);
    }
}

/**
 * Module message
 */
class Net_message_Module extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const VERSION = 2;
    const CREATEDATE = 3;
    const STATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::VERSION => array(
            'default' => '\"\"', 
            'name' => 'version',
            'required' => true,
            'type' => 7,
        ),
        self::CREATEDATE => array(
            'default' => '\"\"', 
            'name' => 'createDate',
            'required' => true,
            'type' => 7,
        ),
        self::STATUS => array(
            'default' => 0, 
            'name' => 'status',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::VERSION] = null;
        $this->values[self::CREATEDATE] = null;
        $this->values[self::STATUS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->get(self::VERSION);
    }

    /**
     * Sets value of 'createDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreateDate($value)
    {
        return $this->set(self::CREATEDATE, $value);
    }

    /**
     * Returns value of 'createDate' property
     *
     * @return string
     */
    public function getCreateDate()
    {
        return $this->get(self::CREATEDATE);
    }

    /**
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->get(self::STATUS);
    }
}

/**
 * A2M_Register_Agent message
 */
class Net_message_A2MRegisterAgent extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const AGENTID = 2;
    const DEVICEATTRIBUE = 3;
    const DEVICE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::AGENTID => array(
            'default' => '\"\"', 
            'name' => 'agentId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEATTRIBUE => array(
            'default' => 0, 
            'name' => 'deviceAttribue',
            'required' => true,
            'type' => 5,
        ),
        self::DEVICE => array(
            'name' => 'device',
            'required' => true,
            'type' => 'Net_message_Device'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::AGENTID] = null;
        $this->values[self::DEVICEATTRIBUE] = null;
        $this->values[self::DEVICE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'agentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAgentId($value)
    {
        return $this->set(self::AGENTID, $value);
    }

    /**
     * Returns value of 'agentId' property
     *
     * @return string
     */
    public function getAgentId()
    {
        return $this->get(self::AGENTID);
    }

    /**
     * Sets value of 'deviceAttribue' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDeviceAttribue($value)
    {
        return $this->set(self::DEVICEATTRIBUE, $value);
    }

    /**
     * Returns value of 'deviceAttribue' property
     *
     * @return int
     */
    public function getDeviceAttribue()
    {
        return $this->get(self::DEVICEATTRIBUE);
    }

    /**
     * Sets value of 'device' property
     *
     * @param Net_message_Device $value Property value
     *
     * @return null
     */
    public function setDevice(Net_message_Device $value)
    {
        return $this->set(self::DEVICE, $value);
    }

    /**
     * Returns value of 'device' property
     *
     * @return Net_message_Device
     */
    public function getDevice()
    {
        return $this->get(self::DEVICE);
    }
}

/**
 * M2A_Register_Agent_Ack message
 */
class Net_message_M2ARegisterAgentAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * M2A_Install_Module message
 */
class Net_message_M2AInstallModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NAMELIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NAMELIST => array(
            'name' => 'nameList',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NAMELIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Appends value to 'nameList' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendNameList($value)
    {
        return $this->append(self::NAMELIST, $value);
    }

    /**
     * Clears 'nameList' list
     *
     * @return null
     */
    public function clearNameList()
    {
        return $this->clear(self::NAMELIST);
    }

    /**
     * Returns 'nameList' list
     *
     * @return string[]
     */
    public function getNameList()
    {
        return $this->get(self::NAMELIST);
    }

    /**
     * Returns 'nameList' iterator
     *
     * @return ArrayIterator
     */
    public function getNameListIterator()
    {
        return new \ArrayIterator($this->get(self::NAMELIST));
    }

    /**
     * Returns element from 'nameList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getNameListAt($offset)
    {
        return $this->get(self::NAMELIST, $offset);
    }

    /**
     * Returns count of 'nameList' list
     *
     * @return int
     */
    public function getNameListCount()
    {
        return $this->count(self::NAMELIST);
    }
}

/**
 * A2M_Install_Module_Ack message
 */
class Net_message_A2MInstallModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const DEVICEUNIQUEID = 3;
    const MODULELIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::MODULELIST => array(
            'name' => 'moduleList',
            'repeated' => true,
            'type' => 'Net_message_Module'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::MODULELIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Appends value to 'moduleList' list
     *
     * @param Net_message_Module $value Value to append
     *
     * @return null
     */
    public function appendModuleList(Net_message_Module $value)
    {
        return $this->append(self::MODULELIST, $value);
    }

    /**
     * Clears 'moduleList' list
     *
     * @return null
     */
    public function clearModuleList()
    {
        return $this->clear(self::MODULELIST);
    }

    /**
     * Returns 'moduleList' list
     *
     * @return Net_message_Module[]
     */
    public function getModuleList()
    {
        return $this->get(self::MODULELIST);
    }

    /**
     * Returns 'moduleList' iterator
     *
     * @return ArrayIterator
     */
    public function getModuleListIterator()
    {
        return new \ArrayIterator($this->get(self::MODULELIST));
    }

    /**
     * Returns element from 'moduleList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_Module
     */
    public function getModuleListAt($offset)
    {
        return $this->get(self::MODULELIST, $offset);
    }

    /**
     * Returns count of 'moduleList' list
     *
     * @return int
     */
    public function getModuleListCount()
    {
        return $this->count(self::MODULELIST);
    }
}

/**
 * M2A_Update_Module message
 */
class Net_message_M2AUpdateModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * A2M_Update_Module_Ack message
 */
class Net_message_A2MUpdateModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const MODULE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::MODULE => array(
            'name' => 'module',
            'required' => true,
            'type' => 'Net_message_Module'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::MODULE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'module' property
     *
     * @param Net_message_Module $value Property value
     *
     * @return null
     */
    public function setModule(Net_message_Module $value)
    {
        return $this->set(self::MODULE, $value);
    }

    /**
     * Returns value of 'module' property
     *
     * @return Net_message_Module
     */
    public function getModule()
    {
        return $this->get(self::MODULE);
    }
}

/**
 * M2A_Remove_Module message
 */
class Net_message_M2ARemoveModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * A2M_Remove_Module_Ack message
 */
class Net_message_A2MRemoveModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const NAME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2A_Start_Module message
 */
class Net_message_M2AStartModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * A2M_Start_Module_Ack message
 */
class Net_message_A2MStartModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const NAME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2A_Stop_Module message
 */
class Net_message_M2AStopModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * A2M_Stop_Module_Ack message
 */
class Net_message_A2MStopModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const NAME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2A_Restart_Module message
 */
class Net_message_M2ARestartModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * A2M_Restart_Module_Ack message
 */
class Net_message_A2MRestartModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const NAME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2A_Update_Libvirt_Computer_Info message
 */
class Net_message_M2AUpdateLibvirtComputerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const COMPUTERID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::COMPUTERID => array(
            'default' => 0, 
            'name' => 'computerId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::COMPUTERID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'computerId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setComputerId($value)
    {
        return $this->set(self::COMPUTERID, $value);
    }

    /**
     * Returns value of 'computerId' property
     *
     * @return int
     */
    public function getComputerId()
    {
        return $this->get(self::COMPUTERID);
    }
}

/**
 * A2M_Update_Libvirt_Computer_Info_Ack message
 */
class Net_message_A2MUpdateLibvirtComputerInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const COMPUTERID = 4;
    const COMPUTERINFO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::COMPUTERID => array(
            'default' => 0, 
            'name' => 'computerId',
            'required' => true,
            'type' => 5,
        ),
        self::COMPUTERINFO => array(
            'default' => '\"\"', 
            'name' => 'computerInfo',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::COMPUTERID] = null;
        $this->values[self::COMPUTERINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'computerId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setComputerId($value)
    {
        return $this->set(self::COMPUTERID, $value);
    }

    /**
     * Returns value of 'computerId' property
     *
     * @return int
     */
    public function getComputerId()
    {
        return $this->get(self::COMPUTERID);
    }

    /**
     * Sets value of 'computerInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComputerInfo($value)
    {
        return $this->set(self::COMPUTERINFO, $value);
    }

    /**
     * Returns value of 'computerInfo' property
     *
     * @return string
     */
    public function getComputerInfo()
    {
        return $this->get(self::COMPUTERINFO);
    }
}

/**
 * M2A_Check_License_Info message
 */
class Net_message_M2ACheckLicenseInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const ISVAILD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::ISVAILD => array(
            'default' => 0, 
            'name' => 'isVaild',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::ISVAILD] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'isVaild' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsVaild($value)
    {
        return $this->set(self::ISVAILD, $value);
    }

    /**
     * Returns value of 'isVaild' property
     *
     * @return int
     */
    public function getIsVaild()
    {
        return $this->get(self::ISVAILD);
    }
}

/**
 * A2M_Check_License_Info_Ack message
 */
class Net_message_A2MCheckLicenseInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const AGENTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::AGENTID => array(
            'default' => '\"\"', 
            'name' => 'agentId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::AGENTID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'agentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAgentId($value)
    {
        return $this->set(self::AGENTID, $value);
    }

    /**
     * Returns value of 'agentId' property
     *
     * @return string
     */
    public function getAgentId()
    {
        return $this->get(self::AGENTID);
    }
}

/**
 * W2M_Update_Module message
 */
class Net_message_W2MUpdateModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2W_Update_Module_Ack message
 */
class Net_message_M2WUpdateModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Remove_Module message
 */
class Net_message_W2MRemoveModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2W_Remove_Module_Ack message
 */
class Net_message_M2WRemoveModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Start_Module message
 */
class Net_message_W2MStartModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2W_Start_Module_Ack message
 */
class Net_message_M2WStartModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Stop_Module message
 */
class Net_message_W2MStopModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2W_Stop_Module_Ack message
 */
class Net_message_M2WStopModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Restart_Module message
 */
class Net_message_W2MRestartModule extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const NAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::NAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }
}

/**
 * M2W_Restart_Module_Ack message
 */
class Net_message_M2WRestartModuleAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Add_Cdp message
 */
class Net_message_W2MAddCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Add_Cdp_Ack message
 */
class Net_message_M2WAddCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Force_Add_Cdp message
 */
class Net_message_W2MForceAddCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Force_Add_Cdp_Ack message
 */
class Net_message_M2WForceAddCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Modify_Cdp message
 */
class Net_message_W2MModifyCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Modify_Cdp_Ack message
 */
class Net_message_M2WModifyCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Delete_Cdp message
 */
class Net_message_W2MDeleteCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Delete_Cdp_Ack message
 */
class Net_message_M2WDeleteCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Start_Cdp message
 */
class Net_message_W2MStartCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Start_Cdp_Ack message
 */
class Net_message_M2WStartCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Pause_Cdp message
 */
class Net_message_W2MPauseCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Pause_Cdp_Ack message
 */
class Net_message_M2WPauseCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Stop_Cdp message
 */
class Net_message_W2MStopCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2W_Stop_Cdp_Ack message
 */
class Net_message_M2WStopCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Create_Snap message
 */
class Net_message_W2MCreateSnap extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }
}

/**
 * M2W_Create_Snap_Ack message
 */
class Net_message_M2WCreateSnapAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Merge_Snap message
 */
class Net_message_W2MMergeSnap extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }
}

/**
 * M2W_Merge_Snap_Ack message
 */
class Net_message_M2WMergeSnapAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Update_Cloning_Info message
 */
class Net_message_W2MUpdateCloningInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }
}

/**
 * M2W_Update_Cloning_Info_Ack message
 */
class Net_message_M2WUpdateCloningInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const PROGRESS = 3;
    const SPEED = 4;
    const NTIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::PROGRESS => array(
            'default' => 0, 
            'name' => 'progress',
            'required' => true,
            'type' => 5,
        ),
        self::SPEED => array(
            'default' => 0, 
            'name' => 'speed',
            'required' => true,
            'type' => 5,
        ),
        self::NTIME => array(
            'default' => 0, 
            'name' => 'ntime',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::PROGRESS] = null;
        $this->values[self::SPEED] = null;
        $this->values[self::NTIME] = 0;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'progress' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setProgress($value)
    {
        return $this->set(self::PROGRESS, $value);
    }

    /**
     * Returns value of 'progress' property
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->get(self::PROGRESS);
    }

    /**
     * Sets value of 'speed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSpeed($value)
    {
        return $this->set(self::SPEED, $value);
    }

    /**
     * Returns value of 'speed' property
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->get(self::SPEED);
    }

    /**
     * Sets value of 'ntime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNtime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'ntime' property
     *
     * @return int
     */
    public function getNtime()
    {
        return $this->get(self::NTIME);
    }
}

/**
 * Recovering_Info message
 */
class Net_message_RecoveringInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PROGRESS = 1;
    const SPEED = 2;
    const ELAPSEDTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROGRESS => array(
            'default' => 0, 
            'name' => 'progress',
            'required' => true,
            'type' => 5,
        ),
        self::SPEED => array(
            'default' => 0, 
            'name' => 'speed',
            'required' => true,
            'type' => 5,
        ),
        self::ELAPSEDTIME => array(
            'default' => 0, 
            'name' => 'elapsedTime',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PROGRESS] = null;
        $this->values[self::SPEED] = null;
        $this->values[self::ELAPSEDTIME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'progress' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setProgress($value)
    {
        return $this->set(self::PROGRESS, $value);
    }

    /**
     * Returns value of 'progress' property
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->get(self::PROGRESS);
    }

    /**
     * Sets value of 'speed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSpeed($value)
    {
        return $this->set(self::SPEED, $value);
    }

    /**
     * Returns value of 'speed' property
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->get(self::SPEED);
    }

    /**
     * Sets value of 'elapsedTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setElapsedTime($value)
    {
        return $this->set(self::ELAPSEDTIME, $value);
    }

    /**
     * Returns value of 'elapsedTime' property
     *
     * @return int
     */
    public function getElapsedTime()
    {
        return $this->get(self::ELAPSEDTIME);
    }
}

/**
 * Migrating_Info message
 */
class Net_message_MigratingInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PROGRESS = 1;
    const SPEED = 2;
    const ELAPSEDTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROGRESS => array(
            'default' => 0, 
            'name' => 'progress',
            'required' => true,
            'type' => 5,
        ),
        self::SPEED => array(
            'default' => 0, 
            'name' => 'speed',
            'required' => true,
            'type' => 5,
        ),
        self::ELAPSEDTIME => array(
            'default' => 0, 
            'name' => 'elapsedTime',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PROGRESS] = null;
        $this->values[self::SPEED] = null;
        $this->values[self::ELAPSEDTIME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'progress' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setProgress($value)
    {
        return $this->set(self::PROGRESS, $value);
    }

    /**
     * Returns value of 'progress' property
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->get(self::PROGRESS);
    }

    /**
     * Sets value of 'speed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSpeed($value)
    {
        return $this->set(self::SPEED, $value);
    }

    /**
     * Returns value of 'speed' property
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->get(self::SPEED);
    }

    /**
     * Sets value of 'elapsedTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setElapsedTime($value)
    {
        return $this->set(self::ELAPSEDTIME, $value);
    }

    /**
     * Returns value of 'elapsedTime' property
     *
     * @return int
     */
    public function getElapsedTime()
    {
        return $this->get(self::ELAPSEDTIME);
    }
}

/**
 * W2M_Start_Recover message
 */
class Net_message_W2MStartRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const RECOVERTASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::RECOVERTASKID => array(
            'default' => 0, 
            'name' => 'recoverTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::RECOVERTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'recoverTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecoverTaskId($value)
    {
        return $this->set(self::RECOVERTASKID, $value);
    }

    /**
     * Returns value of 'recoverTaskId' property
     *
     * @return int
     */
    public function getRecoverTaskId()
    {
        return $this->get(self::RECOVERTASKID);
    }
}

/**
 * M2W_Start_Recover_Ack message
 */
class Net_message_M2WStartRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Get_Recovering_Info message
 */
class Net_message_W2MGetRecoveringInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const RECOVERTASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::RECOVERTASKID => array(
            'default' => 0, 
            'name' => 'recoverTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::RECOVERTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'recoverTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecoverTaskId($value)
    {
        return $this->set(self::RECOVERTASKID, $value);
    }

    /**
     * Returns value of 'recoverTaskId' property
     *
     * @return int
     */
    public function getRecoverTaskId()
    {
        return $this->get(self::RECOVERTASKID);
    }
}

/**
 * M2W_Get_Recovering_Info_Ack message
 */
class Net_message_M2WGetRecoveringInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const RECOVERINGINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::RECOVERINGINFO => array(
            'name' => 'recoveringInfo',
            'required' => true,
            'type' => 'Net_message_RecoveringInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::RECOVERINGINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'recoveringInfo' property
     *
     * @param Net_message_RecoveringInfo $value Property value
     *
     * @return null
     */
    public function setRecoveringInfo(Net_message_RecoveringInfo $value)
    {
        return $this->set(self::RECOVERINGINFO, $value);
    }

    /**
     * Returns value of 'recoveringInfo' property
     *
     * @return Net_message_RecoveringInfo
     */
    public function getRecoveringInfo()
    {
        return $this->get(self::RECOVERINGINFO);
    }
}

/**
 * W2M_Start_Migrate message
 */
class Net_message_W2MStartMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const TASKID = 2;
    const MOVETASKID = 3;
    const SOURCEUNIQUEID = 4;
    const TARGETUNIQUEID = 5;
    const SELECTEDPARTITIONS = 6;
    const HARDDISKVERSUS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::TASKID => array(
            'default' => 0, 
            'name' => 'taskId',
            'required' => true,
            'type' => 5,
        ),
        self::MOVETASKID => array(
            'default' => 0, 
            'name' => 'moveTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::SOURCEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'sourceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::TARGETUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'targetUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::SELECTEDPARTITIONS => array(
            'default' => '\"\"', 
            'name' => 'selectedPartitions',
            'required' => true,
            'type' => 7,
        ),
        self::HARDDISKVERSUS => array(
            'default' => '\"\"', 
            'name' => 'harddiskVersus',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::TASKID] = null;
        $this->values[self::MOVETASKID] = null;
        $this->values[self::SOURCEUNIQUEID] = null;
        $this->values[self::TARGETUNIQUEID] = null;
        $this->values[self::SELECTEDPARTITIONS] = null;
        $this->values[self::HARDDISKVERSUS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'taskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTaskId($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'taskId' property
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->get(self::TASKID);
    }

    /**
     * Sets value of 'moveTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMoveTaskId($value)
    {
        return $this->set(self::MOVETASKID, $value);
    }

    /**
     * Returns value of 'moveTaskId' property
     *
     * @return int
     */
    public function getMoveTaskId()
    {
        return $this->get(self::MOVETASKID);
    }

    /**
     * Sets value of 'sourceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceUniqueId($value)
    {
        return $this->set(self::SOURCEUNIQUEID, $value);
    }

    /**
     * Returns value of 'sourceUniqueId' property
     *
     * @return string
     */
    public function getSourceUniqueId()
    {
        return $this->get(self::SOURCEUNIQUEID);
    }

    /**
     * Sets value of 'targetUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTargetUniqueId($value)
    {
        return $this->set(self::TARGETUNIQUEID, $value);
    }

    /**
     * Returns value of 'targetUniqueId' property
     *
     * @return string
     */
    public function getTargetUniqueId()
    {
        return $this->get(self::TARGETUNIQUEID);
    }

    /**
     * Sets value of 'selectedPartitions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSelectedPartitions($value)
    {
        return $this->set(self::SELECTEDPARTITIONS, $value);
    }

    /**
     * Returns value of 'selectedPartitions' property
     *
     * @return string
     */
    public function getSelectedPartitions()
    {
        return $this->get(self::SELECTEDPARTITIONS);
    }

    /**
     * Sets value of 'harddiskVersus' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHarddiskVersus($value)
    {
        return $this->set(self::HARDDISKVERSUS, $value);
    }

    /**
     * Returns value of 'harddiskVersus' property
     *
     * @return string
     */
    public function getHarddiskVersus()
    {
        return $this->get(self::HARDDISKVERSUS);
    }
}

/**
 * M2W_Start_Migrate_Ack message
 */
class Net_message_M2WStartMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Get_Migrating_Info message
 */
class Net_message_W2MGetMigratingInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const MOVETASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::MOVETASKID => array(
            'default' => 0, 
            'name' => 'moveTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::MOVETASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'moveTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMoveTaskId($value)
    {
        return $this->set(self::MOVETASKID, $value);
    }

    /**
     * Returns value of 'moveTaskId' property
     *
     * @return int
     */
    public function getMoveTaskId()
    {
        return $this->get(self::MOVETASKID);
    }
}

/**
 * M2W_Get_Migrating_Info_Ack message
 */
class Net_message_M2WGetMigratingInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const MIGRATINGINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::MIGRATINGINFO => array(
            'name' => 'migratingInfo',
            'required' => true,
            'type' => 'Net_message_MigratingInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::MIGRATINGINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'migratingInfo' property
     *
     * @param Net_message_MigratingInfo $value Property value
     *
     * @return null
     */
    public function setMigratingInfo(Net_message_MigratingInfo $value)
    {
        return $this->set(self::MIGRATINGINFO, $value);
    }

    /**
     * Returns value of 'migratingInfo' property
     *
     * @return Net_message_MigratingInfo
     */
    public function getMigratingInfo()
    {
        return $this->get(self::MIGRATINGINFO);
    }
}

/**
 * W2M_Create_Small_Snap message
 */
class Net_message_W2MCreateSmallSnap extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NID => array(
            'name' => 'nId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNId($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nId' property
     *
     * @return int
     */
    public function getNId()
    {
        return $this->get(self::NID);
    }
}

/**
 * M2W_Create_Small_Snap_Ack message
 */
class Net_message_M2WCreateSmallSnapAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Create_Ahdr_File message
 */
class Net_message_W2MCreateAhdrFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SSTORAGEID = 2;
    const SPATH = 3;
    const NSYSTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SSTORAGEID => array(
            'name' => 'sStorageId',
            'required' => true,
            'type' => 7,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
        self::NSYSTYPE => array(
            'name' => 'nSysType',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SSTORAGEID] = null;
        $this->values[self::SPATH] = null;
        $this->values[self::NSYSTYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sStorageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSStorageId($value)
    {
        return $this->set(self::SSTORAGEID, $value);
    }

    /**
     * Returns value of 'sStorageId' property
     *
     * @return string
     */
    public function getSStorageId()
    {
        return $this->get(self::SSTORAGEID);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Sets value of 'nSysType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSysType($value)
    {
        return $this->set(self::NSYSTYPE, $value);
    }

    /**
     * Returns value of 'nSysType' property
     *
     * @return int
     */
    public function getNSysType()
    {
        return $this->get(self::NSYSTYPE);
    }
}

/**
 * M2W_Create_Ahdr_File_Ack message
 */
class Net_message_M2WCreateAhdrFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Delete_Ahdr_File message
 */
class Net_message_W2MDeleteAhdrFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SSTORAGEID = 2;
    const SPATH = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SSTORAGEID => array(
            'name' => 'sStorageId',
            'required' => true,
            'type' => 7,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SSTORAGEID] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sStorageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSStorageId($value)
    {
        return $this->set(self::SSTORAGEID, $value);
    }

    /**
     * Returns value of 'sStorageId' property
     *
     * @return string
     */
    public function getSStorageId()
    {
        return $this->get(self::SSTORAGEID);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * M2W_Delete_Ahdr_File_Ack message
 */
class Net_message_M2WDeleteAhdrFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Stop_Migrate message
 */
class Net_message_W2MStopMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const MIGRATETASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::MIGRATETASKID => array(
            'default' => 0, 
            'name' => 'migrateTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::MIGRATETASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'migrateTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMigrateTaskId($value)
    {
        return $this->set(self::MIGRATETASKID, $value);
    }

    /**
     * Returns value of 'migrateTaskId' property
     *
     * @return int
     */
    public function getMigrateTaskId()
    {
        return $this->get(self::MIGRATETASKID);
    }
}

/**
 * M2W_Stop_Migrate_Ack message
 */
class Net_message_M2WStopMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Stop_Recover message
 */
class Net_message_W2MStopRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const RECOVERTASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::RECOVERTASKID => array(
            'default' => 0, 
            'name' => 'recoverTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::RECOVERTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'recoverTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecoverTaskId($value)
    {
        return $this->set(self::RECOVERTASKID, $value);
    }

    /**
     * Returns value of 'recoverTaskId' property
     *
     * @return int
     */
    public function getRecoverTaskId()
    {
        return $this->get(self::RECOVERTASKID);
    }
}

/**
 * M2W_Stop_Recover_Ack message
 */
class Net_message_M2WStopRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Add_Libvirt_Computer message
 */
class Net_message_W2MAddLibvirtComputer extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const COMPUTERID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::COMPUTERID => array(
            'default' => 0, 
            'name' => 'computerId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::COMPUTERID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'computerId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setComputerId($value)
    {
        return $this->set(self::COMPUTERID, $value);
    }

    /**
     * Returns value of 'computerId' property
     *
     * @return int
     */
    public function getComputerId()
    {
        return $this->get(self::COMPUTERID);
    }
}

/**
 * M2W_Add_Libvirt_Computer_Ack message
 */
class Net_message_M2WAddLibvirtComputerAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Update_Libvirt_Computer_Info message
 */
class Net_message_W2MUpdateLibvirtComputerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const COMPUTERID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::COMPUTERID => array(
            'default' => 0, 
            'name' => 'computerId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::COMPUTERID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'computerId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setComputerId($value)
    {
        return $this->set(self::COMPUTERID, $value);
    }

    /**
     * Returns value of 'computerId' property
     *
     * @return int
     */
    public function getComputerId()
    {
        return $this->get(self::COMPUTERID);
    }
}

/**
 * M2W_Update_Libvirt_Computer_Info_Ack message
 */
class Net_message_M2WUpdateLibvirtComputerInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Remote_Host message
 */
class Net_message_W2MRemoteHost extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;
    const SIPS = 3;
    const NTYPE = 4;
    const SUNID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::SIPS => array(
            'name' => 'sips',
            'required' => true,
            'type' => 7,
        ),
        self::NTYPE => array(
            'name' => 'ntype',
            'required' => true,
            'type' => 5,
        ),
        self::SUNID => array(
            'name' => 'sUnId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::SIPS] = null;
        $this->values[self::NTYPE] = null;
        $this->values[self::SUNID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Sets value of 'sips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSips($value)
    {
        return $this->set(self::SIPS, $value);
    }

    /**
     * Returns value of 'sips' property
     *
     * @return string
     */
    public function getSips()
    {
        return $this->get(self::SIPS);
    }

    /**
     * Sets value of 'ntype' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNtype($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'ntype' property
     *
     * @return int
     */
    public function getNtype()
    {
        return $this->get(self::NTYPE);
    }

    /**
     * Sets value of 'sUnId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSUnId($value)
    {
        return $this->set(self::SUNID, $value);
    }

    /**
     * Returns value of 'sUnId' property
     *
     * @return string
     */
    public function getSUnId()
    {
        return $this->get(self::SUNID);
    }
}

/**
 * M2W_Remote_Host_Ack message
 */
class Net_message_M2WRemoteHostAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Delete_Dir message
 */
class Net_message_W2MDeleteDir extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }
}

/**
 * M2W_Delete_Dir_Ack message
 */
class Net_message_M2WDeleteDirAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * M2S_Delete_Dir message
 */
class Net_message_M2SDeleteDir extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * M2S_Remote_Host message
 */
class Net_message_M2SRemoteHost extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;
    const SIPS = 3;
    const SHOST_IP = 4;
    const SHOST_INFO = 5;
    const SHOST_MACADDR = 6;
    const FILE_LIST = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'ntaskid',
            'required' => true,
            'type' => 5,
        ),
        self::SIPS => array(
            'name' => 'sips',
            'required' => true,
            'type' => 7,
        ),
        self::SHOST_IP => array(
            'name' => 'shost_ip',
            'required' => true,
            'type' => 7,
        ),
        self::SHOST_INFO => array(
            'name' => 'shost_info',
            'required' => true,
            'type' => 7,
        ),
        self::SHOST_MACADDR => array(
            'name' => 'shost_macaddr',
            'required' => true,
            'type' => 7,
        ),
        self::FILE_LIST => array(
            'name' => 'file_list',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::SIPS] = null;
        $this->values[self::SHOST_IP] = null;
        $this->values[self::SHOST_INFO] = null;
        $this->values[self::SHOST_MACADDR] = null;
        $this->values[self::FILE_LIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'ntaskid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNtaskid($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'ntaskid' property
     *
     * @return int
     */
    public function getNtaskid()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Sets value of 'sips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSips($value)
    {
        return $this->set(self::SIPS, $value);
    }

    /**
     * Returns value of 'sips' property
     *
     * @return string
     */
    public function getSips()
    {
        return $this->get(self::SIPS);
    }

    /**
     * Sets value of 'shost_ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShostIp($value)
    {
        return $this->set(self::SHOST_IP, $value);
    }

    /**
     * Returns value of 'shost_ip' property
     *
     * @return string
     */
    public function getShostIp()
    {
        return $this->get(self::SHOST_IP);
    }

    /**
     * Sets value of 'shost_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShostInfo($value)
    {
        return $this->set(self::SHOST_INFO, $value);
    }

    /**
     * Returns value of 'shost_info' property
     *
     * @return string
     */
    public function getShostInfo()
    {
        return $this->get(self::SHOST_INFO);
    }

    /**
     * Sets value of 'shost_macaddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShostMacaddr($value)
    {
        return $this->set(self::SHOST_MACADDR, $value);
    }

    /**
     * Returns value of 'shost_macaddr' property
     *
     * @return string
     */
    public function getShostMacaddr()
    {
        return $this->get(self::SHOST_MACADDR);
    }

    /**
     * Appends value to 'file_list' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendFileList($value)
    {
        return $this->append(self::FILE_LIST, $value);
    }

    /**
     * Clears 'file_list' list
     *
     * @return null
     */
    public function clearFileList()
    {
        return $this->clear(self::FILE_LIST);
    }

    /**
     * Returns 'file_list' list
     *
     * @return string[]
     */
    public function getFileList()
    {
        return $this->get(self::FILE_LIST);
    }

    /**
     * Returns 'file_list' iterator
     *
     * @return ArrayIterator
     */
    public function getFileListIterator()
    {
        return new \ArrayIterator($this->get(self::FILE_LIST));
    }

    /**
     * Returns element from 'file_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getFileListAt($offset)
    {
        return $this->get(self::FILE_LIST, $offset);
    }

    /**
     * Returns count of 'file_list' list
     *
     * @return int
     */
    public function getFileListCount()
    {
        return $this->count(self::FILE_LIST);
    }
}

/**
 * S2M_Remote_Host_Ack message
 */
class Net_message_S2MRemoteHostAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Config_Auto_Exercise_Strategy message
 */
class Net_message_W2MConfigAutoExerciseStrategy extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const ISSTRATEGYUSED = 2;
    const ISNEWSTRATEGY = 3;
    const VHOSTSOURCEIP = 4;
    const WEEKDAY = 5;
    const TIME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::ISSTRATEGYUSED => array(
            'default' => 0, 
            'name' => 'isStrategyUsed',
            'required' => true,
            'type' => 5,
        ),
        self::ISNEWSTRATEGY => array(
            'default' => 0, 
            'name' => 'isNewStrategy',
            'required' => true,
            'type' => 5,
        ),
        self::VHOSTSOURCEIP => array(
            'default' => '\"\"', 
            'name' => 'vHostSourceIP',
            'required' => true,
            'type' => 7,
        ),
        self::WEEKDAY => array(
            'default' => 0, 
            'name' => 'weekday',
            'required' => true,
            'type' => 5,
        ),
        self::TIME => array(
            'default' => 0, 
            'name' => 'time',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::ISSTRATEGYUSED] = null;
        $this->values[self::ISNEWSTRATEGY] = null;
        $this->values[self::VHOSTSOURCEIP] = null;
        $this->values[self::WEEKDAY] = null;
        $this->values[self::TIME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'isStrategyUsed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsStrategyUsed($value)
    {
        return $this->set(self::ISSTRATEGYUSED, $value);
    }

    /**
     * Returns value of 'isStrategyUsed' property
     *
     * @return int
     */
    public function getIsStrategyUsed()
    {
        return $this->get(self::ISSTRATEGYUSED);
    }

    /**
     * Sets value of 'isNewStrategy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsNewStrategy($value)
    {
        return $this->set(self::ISNEWSTRATEGY, $value);
    }

    /**
     * Returns value of 'isNewStrategy' property
     *
     * @return int
     */
    public function getIsNewStrategy()
    {
        return $this->get(self::ISNEWSTRATEGY);
    }

    /**
     * Sets value of 'vHostSourceIP' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVHostSourceIP($value)
    {
        return $this->set(self::VHOSTSOURCEIP, $value);
    }

    /**
     * Returns value of 'vHostSourceIP' property
     *
     * @return string
     */
    public function getVHostSourceIP()
    {
        return $this->get(self::VHOSTSOURCEIP);
    }

    /**
     * Sets value of 'weekday' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setWeekday($value)
    {
        return $this->set(self::WEEKDAY, $value);
    }

    /**
     * Returns value of 'weekday' property
     *
     * @return int
     */
    public function getWeekday()
    {
        return $this->get(self::WEEKDAY);
    }

    /**
     * Sets value of 'time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return int
     */
    public function getTime()
    {
        return $this->get(self::TIME);
    }
}

/**
 * M2W_Config_Auto_Exercise_Strategy_Ack message
 */
class Net_message_M2WConfigAutoExerciseStrategyAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Create_Vhost_Finished message
 */
class Net_message_W2MCreateVhostFinished extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const VHOSTID = 2;
    const VHOSTNAME = 3;
    const VHOSTSOURCEIP = 4;
    const VHOSTSNAPID = 5;
    const VHOSTSTATUS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::VHOSTID => array(
            'default' => 0, 
            'name' => 'vHostId',
            'required' => true,
            'type' => 5,
        ),
        self::VHOSTNAME => array(
            'default' => '\"\"', 
            'name' => 'vHostName',
            'required' => true,
            'type' => 7,
        ),
        self::VHOSTSOURCEIP => array(
            'default' => '\"\"', 
            'name' => 'vHostSourceIP',
            'required' => true,
            'type' => 7,
        ),
        self::VHOSTSNAPID => array(
            'default' => 0, 
            'name' => 'vHostSnapId',
            'required' => true,
            'type' => 5,
        ),
        self::VHOSTSTATUS => array(
            'default' => 0, 
            'name' => 'vHostStatus',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::VHOSTID] = null;
        $this->values[self::VHOSTNAME] = null;
        $this->values[self::VHOSTSOURCEIP] = null;
        $this->values[self::VHOSTSNAPID] = null;
        $this->values[self::VHOSTSTATUS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'vHostId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVHostId($value)
    {
        return $this->set(self::VHOSTID, $value);
    }

    /**
     * Returns value of 'vHostId' property
     *
     * @return int
     */
    public function getVHostId()
    {
        return $this->get(self::VHOSTID);
    }

    /**
     * Sets value of 'vHostName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVHostName($value)
    {
        return $this->set(self::VHOSTNAME, $value);
    }

    /**
     * Returns value of 'vHostName' property
     *
     * @return string
     */
    public function getVHostName()
    {
        return $this->get(self::VHOSTNAME);
    }

    /**
     * Sets value of 'vHostSourceIP' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVHostSourceIP($value)
    {
        return $this->set(self::VHOSTSOURCEIP, $value);
    }

    /**
     * Returns value of 'vHostSourceIP' property
     *
     * @return string
     */
    public function getVHostSourceIP()
    {
        return $this->get(self::VHOSTSOURCEIP);
    }

    /**
     * Sets value of 'vHostSnapId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVHostSnapId($value)
    {
        return $this->set(self::VHOSTSNAPID, $value);
    }

    /**
     * Returns value of 'vHostSnapId' property
     *
     * @return int
     */
    public function getVHostSnapId()
    {
        return $this->get(self::VHOSTSNAPID);
    }

    /**
     * Sets value of 'vHostStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVHostStatus($value)
    {
        return $this->set(self::VHOSTSTATUS, $value);
    }

    /**
     * Returns value of 'vHostStatus' property
     *
     * @return int
     */
    public function getVHostStatus()
    {
        return $this->get(self::VHOSTSTATUS);
    }
}

/**
 * M2W_Create_Vhost_Finished_Ack message
 */
class Net_message_M2WCreateVhostFinishedAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * W2M_Destroy_Vhost_Finished message
 */
class Net_message_W2MDestroyVhostFinished extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const VHOSTNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::VHOSTNAME => array(
            'default' => '\"\"', 
            'name' => 'vHostName',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::VHOSTNAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'vHostName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVHostName($value)
    {
        return $this->set(self::VHOSTNAME, $value);
    }

    /**
     * Returns value of 'vHostName' property
     *
     * @return string
     */
    public function getVHostName()
    {
        return $this->get(self::VHOSTNAME);
    }
}

/**
 * M2W_Destroy_Vhost_Finished_Ack message
 */
class Net_message_M2WDestroyVhostFinishedAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * Cdp_Task_Info message
 */
class Net_message_CdpTaskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TASKID = 1;
    const TASKSTATUS = 2;
    const ENGINESTATUS = 3;
    const CREATETIME = 4;
    const SYSTEMDESC = 5;
    const SYNCHRTIME = 6;
    const STOPTIME = 7;
    const BACKUPSPEED = 8;
    const SNAPNUM = 9;
    const SNAPTIME = 10;
    const SNAPMERGETIME = 11;
    const SNAPPOINTPATH = 12;
    const STORAGESERVERINFO = 13;
    const TIMERSERVERINFO = 14;
    const NTIMEMARK = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TASKID => array(
            'default' => 0, 
            'name' => 'taskId',
            'required' => true,
            'type' => 5,
        ),
        self::TASKSTATUS => array(
            'default' => 0, 
            'name' => 'taskStatus',
            'required' => true,
            'type' => 5,
        ),
        self::ENGINESTATUS => array(
            'default' => 0, 
            'name' => 'engineStatus',
            'required' => true,
            'type' => 5,
        ),
        self::CREATETIME => array(
            'default' => 0, 
            'name' => 'createTime',
            'required' => true,
            'type' => 5,
        ),
        self::SYSTEMDESC => array(
            'default' => '\"\"', 
            'name' => 'systemDesc',
            'required' => true,
            'type' => 7,
        ),
        self::SYNCHRTIME => array(
            'default' => 0, 
            'name' => 'synchrTime',
            'required' => true,
            'type' => 5,
        ),
        self::STOPTIME => array(
            'default' => '\"\"', 
            'name' => 'stopTime',
            'required' => true,
            'type' => 7,
        ),
        self::BACKUPSPEED => array(
            'default' => 0, 
            'name' => 'backupSpeed',
            'required' => true,
            'type' => 5,
        ),
        self::SNAPNUM => array(
            'default' => 0, 
            'name' => 'snapNum',
            'required' => true,
            'type' => 5,
        ),
        self::SNAPTIME => array(
            'default' => 0, 
            'name' => 'snapTime',
            'required' => true,
            'type' => 5,
        ),
        self::SNAPMERGETIME => array(
            'default' => 0, 
            'name' => 'snapMergeTime',
            'required' => true,
            'type' => 5,
        ),
        self::SNAPPOINTPATH => array(
            'default' => '\"\"', 
            'name' => 'snappointPath',
            'required' => true,
            'type' => 7,
        ),
        self::STORAGESERVERINFO => array(
            'default' => '\"\"', 
            'name' => 'storageServerInfo',
            'required' => true,
            'type' => 7,
        ),
        self::TIMERSERVERINFO => array(
            'default' => '\"\"', 
            'name' => 'timerServerInfo',
            'required' => true,
            'type' => 7,
        ),
        self::NTIMEMARK => array(
            'default' => 0, 
            'name' => 'nTimeMark',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TASKID] = null;
        $this->values[self::TASKSTATUS] = null;
        $this->values[self::ENGINESTATUS] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::SYSTEMDESC] = null;
        $this->values[self::SYNCHRTIME] = null;
        $this->values[self::STOPTIME] = null;
        $this->values[self::BACKUPSPEED] = null;
        $this->values[self::SNAPNUM] = null;
        $this->values[self::SNAPTIME] = null;
        $this->values[self::SNAPMERGETIME] = null;
        $this->values[self::SNAPPOINTPATH] = null;
        $this->values[self::STORAGESERVERINFO] = null;
        $this->values[self::TIMERSERVERINFO] = null;
        $this->values[self::NTIMEMARK] = 0;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'taskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTaskId($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'taskId' property
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->get(self::TASKID);
    }

    /**
     * Sets value of 'taskStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTaskStatus($value)
    {
        return $this->set(self::TASKSTATUS, $value);
    }

    /**
     * Returns value of 'taskStatus' property
     *
     * @return int
     */
    public function getTaskStatus()
    {
        return $this->get(self::TASKSTATUS);
    }

    /**
     * Sets value of 'engineStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEngineStatus($value)
    {
        return $this->set(self::ENGINESTATUS, $value);
    }

    /**
     * Returns value of 'engineStatus' property
     *
     * @return int
     */
    public function getEngineStatus()
    {
        return $this->get(self::ENGINESTATUS);
    }

    /**
     * Sets value of 'createTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->get(self::CREATETIME);
    }

    /**
     * Sets value of 'systemDesc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSystemDesc($value)
    {
        return $this->set(self::SYSTEMDESC, $value);
    }

    /**
     * Returns value of 'systemDesc' property
     *
     * @return string
     */
    public function getSystemDesc()
    {
        return $this->get(self::SYSTEMDESC);
    }

    /**
     * Sets value of 'synchrTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSynchrTime($value)
    {
        return $this->set(self::SYNCHRTIME, $value);
    }

    /**
     * Returns value of 'synchrTime' property
     *
     * @return int
     */
    public function getSynchrTime()
    {
        return $this->get(self::SYNCHRTIME);
    }

    /**
     * Sets value of 'stopTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStopTime($value)
    {
        return $this->set(self::STOPTIME, $value);
    }

    /**
     * Returns value of 'stopTime' property
     *
     * @return string
     */
    public function getStopTime()
    {
        return $this->get(self::STOPTIME);
    }

    /**
     * Sets value of 'backupSpeed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBackupSpeed($value)
    {
        return $this->set(self::BACKUPSPEED, $value);
    }

    /**
     * Returns value of 'backupSpeed' property
     *
     * @return int
     */
    public function getBackupSpeed()
    {
        return $this->get(self::BACKUPSPEED);
    }

    /**
     * Sets value of 'snapNum' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSnapNum($value)
    {
        return $this->set(self::SNAPNUM, $value);
    }

    /**
     * Returns value of 'snapNum' property
     *
     * @return int
     */
    public function getSnapNum()
    {
        return $this->get(self::SNAPNUM);
    }

    /**
     * Sets value of 'snapTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSnapTime($value)
    {
        return $this->set(self::SNAPTIME, $value);
    }

    /**
     * Returns value of 'snapTime' property
     *
     * @return int
     */
    public function getSnapTime()
    {
        return $this->get(self::SNAPTIME);
    }

    /**
     * Sets value of 'snapMergeTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSnapMergeTime($value)
    {
        return $this->set(self::SNAPMERGETIME, $value);
    }

    /**
     * Returns value of 'snapMergeTime' property
     *
     * @return int
     */
    public function getSnapMergeTime()
    {
        return $this->get(self::SNAPMERGETIME);
    }

    /**
     * Sets value of 'snappointPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSnappointPath($value)
    {
        return $this->set(self::SNAPPOINTPATH, $value);
    }

    /**
     * Returns value of 'snappointPath' property
     *
     * @return string
     */
    public function getSnappointPath()
    {
        return $this->get(self::SNAPPOINTPATH);
    }

    /**
     * Sets value of 'storageServerInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorageServerInfo($value)
    {
        return $this->set(self::STORAGESERVERINFO, $value);
    }

    /**
     * Returns value of 'storageServerInfo' property
     *
     * @return string
     */
    public function getStorageServerInfo()
    {
        return $this->get(self::STORAGESERVERINFO);
    }

    /**
     * Sets value of 'timerServerInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimerServerInfo($value)
    {
        return $this->set(self::TIMERSERVERINFO, $value);
    }

    /**
     * Returns value of 'timerServerInfo' property
     *
     * @return string
     */
    public function getTimerServerInfo()
    {
        return $this->get(self::TIMERSERVERINFO);
    }

    /**
     * Sets value of 'nTimeMark' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTimeMark($value)
    {
        return $this->set(self::NTIMEMARK, $value);
    }

    /**
     * Returns value of 'nTimeMark' property
     *
     * @return int
     */
    public function getNTimeMark()
    {
        return $this->get(self::NTIMEMARK);
    }
}

/**
 * Cdp_Partition_Info message
 */
class Net_message_CdpPartitionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NHARDDISKINDEX = 1;
    const NPARTITIONINDEX = 2;
    const NHASSYSTEM = 3;
    const SVOLUMENAME = 4;
    const SDRIVERLETTER = 5;
    const SDRIVERTYPE = 6;
    const SDEVICENAME = 7;
    const SVOLUMELABEL = 8;
    const SFILESYSTEM = 9;
    const NFREESIZE = 10;
    const NTOTALSIZE = 11;
    const BYNEEDBACKUP = 12;
    const BYNEEDCHECK = 13;
    const BYRUNSTATE = 14;
    const NLASTBACKUPENDPOS = 15;
    const NSTARTSECTOR = 16;
    const NTOTALSECTOR = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NHARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'nHarddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::NPARTITIONINDEX => array(
            'default' => 0, 
            'name' => 'nPartitionIndex',
            'required' => true,
            'type' => 5,
        ),
        self::NHASSYSTEM => array(
            'default' => 0, 
            'name' => 'nHasSystem',
            'required' => true,
            'type' => 5,
        ),
        self::SVOLUMENAME => array(
            'default' => '\"\"', 
            'name' => 'sVolumeName',
            'required' => true,
            'type' => 7,
        ),
        self::SDRIVERLETTER => array(
            'default' => '\"\"', 
            'name' => 'sDriverLetter',
            'required' => true,
            'type' => 7,
        ),
        self::SDRIVERTYPE => array(
            'default' => '\"\"', 
            'name' => 'sDriverType',
            'required' => true,
            'type' => 7,
        ),
        self::SDEVICENAME => array(
            'default' => '\"\"', 
            'name' => 'sDeviceName',
            'required' => true,
            'type' => 7,
        ),
        self::SVOLUMELABEL => array(
            'default' => '\"\"', 
            'name' => 'sVolumeLabel',
            'required' => true,
            'type' => 7,
        ),
        self::SFILESYSTEM => array(
            'default' => '\"\"', 
            'name' => 'sFileSystem',
            'required' => true,
            'type' => 7,
        ),
        self::NFREESIZE => array(
            'default' => 0, 
            'name' => 'nFreeSize',
            'required' => true,
            'type' => 5,
        ),
        self::NTOTALSIZE => array(
            'default' => 0, 
            'name' => 'nTotalSize',
            'required' => true,
            'type' => 5,
        ),
        self::BYNEEDBACKUP => array(
            'default' => 0, 
            'name' => 'byNeedBackup',
            'required' => true,
            'type' => 5,
        ),
        self::BYNEEDCHECK => array(
            'default' => 0, 
            'name' => 'byNeedCheck',
            'required' => true,
            'type' => 5,
        ),
        self::BYRUNSTATE => array(
            'default' => 0, 
            'name' => 'byRunState',
            'required' => true,
            'type' => 5,
        ),
        self::NLASTBACKUPENDPOS => array(
            'default' => 0, 
            'name' => 'nLastBackupEndPos',
            'required' => true,
            'type' => 5,
        ),
        self::NSTARTSECTOR => array(
            'default' => 0, 
            'name' => 'nStartSector',
            'required' => true,
            'type' => 5,
        ),
        self::NTOTALSECTOR => array(
            'default' => 0, 
            'name' => 'nTotalSector',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NHARDDISKINDEX] = null;
        $this->values[self::NPARTITIONINDEX] = null;
        $this->values[self::NHASSYSTEM] = null;
        $this->values[self::SVOLUMENAME] = null;
        $this->values[self::SDRIVERLETTER] = null;
        $this->values[self::SDRIVERTYPE] = null;
        $this->values[self::SDEVICENAME] = null;
        $this->values[self::SVOLUMELABEL] = null;
        $this->values[self::SFILESYSTEM] = null;
        $this->values[self::NFREESIZE] = null;
        $this->values[self::NTOTALSIZE] = null;
        $this->values[self::BYNEEDBACKUP] = null;
        $this->values[self::BYNEEDCHECK] = null;
        $this->values[self::BYRUNSTATE] = null;
        $this->values[self::NLASTBACKUPENDPOS] = null;
        $this->values[self::NSTARTSECTOR] = null;
        $this->values[self::NTOTALSECTOR] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nHarddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNHarddiskIndex($value)
    {
        return $this->set(self::NHARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'nHarddiskIndex' property
     *
     * @return int
     */
    public function getNHarddiskIndex()
    {
        return $this->get(self::NHARDDISKINDEX);
    }

    /**
     * Sets value of 'nPartitionIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPartitionIndex($value)
    {
        return $this->set(self::NPARTITIONINDEX, $value);
    }

    /**
     * Returns value of 'nPartitionIndex' property
     *
     * @return int
     */
    public function getNPartitionIndex()
    {
        return $this->get(self::NPARTITIONINDEX);
    }

    /**
     * Sets value of 'nHasSystem' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNHasSystem($value)
    {
        return $this->set(self::NHASSYSTEM, $value);
    }

    /**
     * Returns value of 'nHasSystem' property
     *
     * @return int
     */
    public function getNHasSystem()
    {
        return $this->get(self::NHASSYSTEM);
    }

    /**
     * Sets value of 'sVolumeName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSVolumeName($value)
    {
        return $this->set(self::SVOLUMENAME, $value);
    }

    /**
     * Returns value of 'sVolumeName' property
     *
     * @return string
     */
    public function getSVolumeName()
    {
        return $this->get(self::SVOLUMENAME);
    }

    /**
     * Sets value of 'sDriverLetter' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDriverLetter($value)
    {
        return $this->set(self::SDRIVERLETTER, $value);
    }

    /**
     * Returns value of 'sDriverLetter' property
     *
     * @return string
     */
    public function getSDriverLetter()
    {
        return $this->get(self::SDRIVERLETTER);
    }

    /**
     * Sets value of 'sDriverType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDriverType($value)
    {
        return $this->set(self::SDRIVERTYPE, $value);
    }

    /**
     * Returns value of 'sDriverType' property
     *
     * @return string
     */
    public function getSDriverType()
    {
        return $this->get(self::SDRIVERTYPE);
    }

    /**
     * Sets value of 'sDeviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSDeviceName($value)
    {
        return $this->set(self::SDEVICENAME, $value);
    }

    /**
     * Returns value of 'sDeviceName' property
     *
     * @return string
     */
    public function getSDeviceName()
    {
        return $this->get(self::SDEVICENAME);
    }

    /**
     * Sets value of 'sVolumeLabel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSVolumeLabel($value)
    {
        return $this->set(self::SVOLUMELABEL, $value);
    }

    /**
     * Returns value of 'sVolumeLabel' property
     *
     * @return string
     */
    public function getSVolumeLabel()
    {
        return $this->get(self::SVOLUMELABEL);
    }

    /**
     * Sets value of 'sFileSystem' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSFileSystem($value)
    {
        return $this->set(self::SFILESYSTEM, $value);
    }

    /**
     * Returns value of 'sFileSystem' property
     *
     * @return string
     */
    public function getSFileSystem()
    {
        return $this->get(self::SFILESYSTEM);
    }

    /**
     * Sets value of 'nFreeSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNFreeSize($value)
    {
        return $this->set(self::NFREESIZE, $value);
    }

    /**
     * Returns value of 'nFreeSize' property
     *
     * @return int
     */
    public function getNFreeSize()
    {
        return $this->get(self::NFREESIZE);
    }

    /**
     * Sets value of 'nTotalSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTotalSize($value)
    {
        return $this->set(self::NTOTALSIZE, $value);
    }

    /**
     * Returns value of 'nTotalSize' property
     *
     * @return int
     */
    public function getNTotalSize()
    {
        return $this->get(self::NTOTALSIZE);
    }

    /**
     * Sets value of 'byNeedBackup' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setByNeedBackup($value)
    {
        return $this->set(self::BYNEEDBACKUP, $value);
    }

    /**
     * Returns value of 'byNeedBackup' property
     *
     * @return int
     */
    public function getByNeedBackup()
    {
        return $this->get(self::BYNEEDBACKUP);
    }

    /**
     * Sets value of 'byNeedCheck' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setByNeedCheck($value)
    {
        return $this->set(self::BYNEEDCHECK, $value);
    }

    /**
     * Returns value of 'byNeedCheck' property
     *
     * @return int
     */
    public function getByNeedCheck()
    {
        return $this->get(self::BYNEEDCHECK);
    }

    /**
     * Sets value of 'byRunState' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setByRunState($value)
    {
        return $this->set(self::BYRUNSTATE, $value);
    }

    /**
     * Returns value of 'byRunState' property
     *
     * @return int
     */
    public function getByRunState()
    {
        return $this->get(self::BYRUNSTATE);
    }

    /**
     * Sets value of 'nLastBackupEndPos' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNLastBackupEndPos($value)
    {
        return $this->set(self::NLASTBACKUPENDPOS, $value);
    }

    /**
     * Returns value of 'nLastBackupEndPos' property
     *
     * @return int
     */
    public function getNLastBackupEndPos()
    {
        return $this->get(self::NLASTBACKUPENDPOS);
    }

    /**
     * Sets value of 'nStartSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNStartSector($value)
    {
        return $this->set(self::NSTARTSECTOR, $value);
    }

    /**
     * Returns value of 'nStartSector' property
     *
     * @return int
     */
    public function getNStartSector()
    {
        return $this->get(self::NSTARTSECTOR);
    }

    /**
     * Sets value of 'nTotalSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTotalSector($value)
    {
        return $this->set(self::NTOTALSECTOR, $value);
    }

    /**
     * Returns value of 'nTotalSector' property
     *
     * @return int
     */
    public function getNTotalSector()
    {
        return $this->get(self::NTOTALSECTOR);
    }
}

/**
 * Cdp_Vmdk_Info message
 */
class Net_message_CdpVmdkInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TASKID = 1;
    const HARDDISKINDEX = 2;
    const STORAGEID = 3;
    const VMDKFILENAME = 4;
    const VMDKFILEPATH = 5;
    const VMDKHAVEOS = 6;
    const VMDKFILESIZE = 7;
    const VMDKCREATETIME = 8;
    const VMDKUPDATETIME = 9;
    const VMDKFATHERNAME = 10;
    const VMDKTYPE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TASKID => array(
            'default' => 0, 
            'name' => 'taskId',
            'required' => true,
            'type' => 5,
        ),
        self::HARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'harddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::STORAGEID => array(
            'default' => '\"\"', 
            'name' => 'storageId',
            'required' => true,
            'type' => 7,
        ),
        self::VMDKFILENAME => array(
            'default' => '\"\"', 
            'name' => 'vmdkFileName',
            'required' => true,
            'type' => 7,
        ),
        self::VMDKFILEPATH => array(
            'default' => '\"\"', 
            'name' => 'vmdkFilePath',
            'required' => true,
            'type' => 7,
        ),
        self::VMDKHAVEOS => array(
            'default' => 0, 
            'name' => 'vmdkHaveOs',
            'required' => true,
            'type' => 5,
        ),
        self::VMDKFILESIZE => array(
            'default' => 0, 
            'name' => 'vmdkFileSize',
            'required' => true,
            'type' => 5,
        ),
        self::VMDKCREATETIME => array(
            'default' => 0, 
            'name' => 'vmdkCreateTime',
            'required' => true,
            'type' => 5,
        ),
        self::VMDKUPDATETIME => array(
            'default' => 0, 
            'name' => 'vmdkUpdateTime',
            'required' => true,
            'type' => 5,
        ),
        self::VMDKFATHERNAME => array(
            'default' => '\"\"', 
            'name' => 'vmdkFatherName',
            'required' => true,
            'type' => 7,
        ),
        self::VMDKTYPE => array(
            'default' => 0, 
            'name' => 'vmdkType',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TASKID] = null;
        $this->values[self::HARDDISKINDEX] = null;
        $this->values[self::STORAGEID] = null;
        $this->values[self::VMDKFILENAME] = null;
        $this->values[self::VMDKFILEPATH] = null;
        $this->values[self::VMDKHAVEOS] = null;
        $this->values[self::VMDKFILESIZE] = null;
        $this->values[self::VMDKCREATETIME] = null;
        $this->values[self::VMDKUPDATETIME] = null;
        $this->values[self::VMDKFATHERNAME] = null;
        $this->values[self::VMDKTYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'taskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTaskId($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'taskId' property
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->get(self::TASKID);
    }

    /**
     * Sets value of 'harddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHarddiskIndex($value)
    {
        return $this->set(self::HARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'harddiskIndex' property
     *
     * @return int
     */
    public function getHarddiskIndex()
    {
        return $this->get(self::HARDDISKINDEX);
    }

    /**
     * Sets value of 'storageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorageId($value)
    {
        return $this->set(self::STORAGEID, $value);
    }

    /**
     * Returns value of 'storageId' property
     *
     * @return string
     */
    public function getStorageId()
    {
        return $this->get(self::STORAGEID);
    }

    /**
     * Sets value of 'vmdkFileName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVmdkFileName($value)
    {
        return $this->set(self::VMDKFILENAME, $value);
    }

    /**
     * Returns value of 'vmdkFileName' property
     *
     * @return string
     */
    public function getVmdkFileName()
    {
        return $this->get(self::VMDKFILENAME);
    }

    /**
     * Sets value of 'vmdkFilePath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVmdkFilePath($value)
    {
        return $this->set(self::VMDKFILEPATH, $value);
    }

    /**
     * Returns value of 'vmdkFilePath' property
     *
     * @return string
     */
    public function getVmdkFilePath()
    {
        return $this->get(self::VMDKFILEPATH);
    }

    /**
     * Sets value of 'vmdkHaveOs' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVmdkHaveOs($value)
    {
        return $this->set(self::VMDKHAVEOS, $value);
    }

    /**
     * Returns value of 'vmdkHaveOs' property
     *
     * @return int
     */
    public function getVmdkHaveOs()
    {
        return $this->get(self::VMDKHAVEOS);
    }

    /**
     * Sets value of 'vmdkFileSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVmdkFileSize($value)
    {
        return $this->set(self::VMDKFILESIZE, $value);
    }

    /**
     * Returns value of 'vmdkFileSize' property
     *
     * @return int
     */
    public function getVmdkFileSize()
    {
        return $this->get(self::VMDKFILESIZE);
    }

    /**
     * Sets value of 'vmdkCreateTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVmdkCreateTime($value)
    {
        return $this->set(self::VMDKCREATETIME, $value);
    }

    /**
     * Returns value of 'vmdkCreateTime' property
     *
     * @return int
     */
    public function getVmdkCreateTime()
    {
        return $this->get(self::VMDKCREATETIME);
    }

    /**
     * Sets value of 'vmdkUpdateTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVmdkUpdateTime($value)
    {
        return $this->set(self::VMDKUPDATETIME, $value);
    }

    /**
     * Returns value of 'vmdkUpdateTime' property
     *
     * @return int
     */
    public function getVmdkUpdateTime()
    {
        return $this->get(self::VMDKUPDATETIME);
    }

    /**
     * Sets value of 'vmdkFatherName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVmdkFatherName($value)
    {
        return $this->set(self::VMDKFATHERNAME, $value);
    }

    /**
     * Returns value of 'vmdkFatherName' property
     *
     * @return string
     */
    public function getVmdkFatherName()
    {
        return $this->get(self::VMDKFATHERNAME);
    }

    /**
     * Sets value of 'vmdkType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVmdkType($value)
    {
        return $this->set(self::VMDKTYPE, $value);
    }

    /**
     * Returns value of 'vmdkType' property
     *
     * @return int
     */
    public function getVmdkType()
    {
        return $this->get(self::VMDKTYPE);
    }
}

/**
 * Cdp_Harddisk_Info message
 */
class Net_message_CdpHarddiskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NHARDDISKINDEX = 1;
    const SPHYSICALNAME = 2;
    const SALIASNAME = 3;
    const NTOTALSIZE = 4;
    const SSERIALNUMBER = 5;
    const BYNEEDBACKUP = 6;
    const CDPPARTITIONLIST = 7;
    const CDPVMDKLIST = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NHARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'nHarddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::SPHYSICALNAME => array(
            'default' => '\"\"', 
            'name' => 'sPhysicalName',
            'required' => true,
            'type' => 7,
        ),
        self::SALIASNAME => array(
            'default' => '\"\"', 
            'name' => 'sAliasName',
            'required' => true,
            'type' => 7,
        ),
        self::NTOTALSIZE => array(
            'default' => 0, 
            'name' => 'nTotalSize',
            'required' => true,
            'type' => 5,
        ),
        self::SSERIALNUMBER => array(
            'default' => '\"\"', 
            'name' => 'sSerialNumber',
            'required' => true,
            'type' => 7,
        ),
        self::BYNEEDBACKUP => array(
            'default' => 0, 
            'name' => 'byNeedBackup',
            'required' => true,
            'type' => 5,
        ),
        self::CDPPARTITIONLIST => array(
            'name' => 'cdpPartitionList',
            'repeated' => true,
            'type' => 'Net_message_CdpPartitionInfo'
        ),
        self::CDPVMDKLIST => array(
            'name' => 'cdpVmdkList',
            'repeated' => true,
            'type' => 'Net_message_CdpVmdkInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NHARDDISKINDEX] = null;
        $this->values[self::SPHYSICALNAME] = null;
        $this->values[self::SALIASNAME] = null;
        $this->values[self::NTOTALSIZE] = null;
        $this->values[self::SSERIALNUMBER] = null;
        $this->values[self::BYNEEDBACKUP] = null;
        $this->values[self::CDPPARTITIONLIST] = array();
        $this->values[self::CDPVMDKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nHarddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNHarddiskIndex($value)
    {
        return $this->set(self::NHARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'nHarddiskIndex' property
     *
     * @return int
     */
    public function getNHarddiskIndex()
    {
        return $this->get(self::NHARDDISKINDEX);
    }

    /**
     * Sets value of 'sPhysicalName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSPhysicalName($value)
    {
        return $this->set(self::SPHYSICALNAME, $value);
    }

    /**
     * Returns value of 'sPhysicalName' property
     *
     * @return string
     */
    public function getSPhysicalName()
    {
        return $this->get(self::SPHYSICALNAME);
    }

    /**
     * Sets value of 'sAliasName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSAliasName($value)
    {
        return $this->set(self::SALIASNAME, $value);
    }

    /**
     * Returns value of 'sAliasName' property
     *
     * @return string
     */
    public function getSAliasName()
    {
        return $this->get(self::SALIASNAME);
    }

    /**
     * Sets value of 'nTotalSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTotalSize($value)
    {
        return $this->set(self::NTOTALSIZE, $value);
    }

    /**
     * Returns value of 'nTotalSize' property
     *
     * @return int
     */
    public function getNTotalSize()
    {
        return $this->get(self::NTOTALSIZE);
    }

    /**
     * Sets value of 'sSerialNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSSerialNumber($value)
    {
        return $this->set(self::SSERIALNUMBER, $value);
    }

    /**
     * Returns value of 'sSerialNumber' property
     *
     * @return string
     */
    public function getSSerialNumber()
    {
        return $this->get(self::SSERIALNUMBER);
    }

    /**
     * Sets value of 'byNeedBackup' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setByNeedBackup($value)
    {
        return $this->set(self::BYNEEDBACKUP, $value);
    }

    /**
     * Returns value of 'byNeedBackup' property
     *
     * @return int
     */
    public function getByNeedBackup()
    {
        return $this->get(self::BYNEEDBACKUP);
    }

    /**
     * Appends value to 'cdpPartitionList' list
     *
     * @param Net_message_CdpPartitionInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpPartitionList(Net_message_CdpPartitionInfo $value)
    {
        return $this->append(self::CDPPARTITIONLIST, $value);
    }

    /**
     * Clears 'cdpPartitionList' list
     *
     * @return null
     */
    public function clearCdpPartitionList()
    {
        return $this->clear(self::CDPPARTITIONLIST);
    }

    /**
     * Returns 'cdpPartitionList' list
     *
     * @return Net_message_CdpPartitionInfo[]
     */
    public function getCdpPartitionList()
    {
        return $this->get(self::CDPPARTITIONLIST);
    }

    /**
     * Returns 'cdpPartitionList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpPartitionListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPPARTITIONLIST));
    }

    /**
     * Returns element from 'cdpPartitionList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpPartitionInfo
     */
    public function getCdpPartitionListAt($offset)
    {
        return $this->get(self::CDPPARTITIONLIST, $offset);
    }

    /**
     * Returns count of 'cdpPartitionList' list
     *
     * @return int
     */
    public function getCdpPartitionListCount()
    {
        return $this->count(self::CDPPARTITIONLIST);
    }

    /**
     * Appends value to 'cdpVmdkList' list
     *
     * @param Net_message_CdpVmdkInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpVmdkList(Net_message_CdpVmdkInfo $value)
    {
        return $this->append(self::CDPVMDKLIST, $value);
    }

    /**
     * Clears 'cdpVmdkList' list
     *
     * @return null
     */
    public function clearCdpVmdkList()
    {
        return $this->clear(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' list
     *
     * @return Net_message_CdpVmdkInfo[]
     */
    public function getCdpVmdkList()
    {
        return $this->get(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpVmdkListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPVMDKLIST));
    }

    /**
     * Returns element from 'cdpVmdkList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpVmdkInfo
     */
    public function getCdpVmdkListAt($offset)
    {
        return $this->get(self::CDPVMDKLIST, $offset);
    }

    /**
     * Returns count of 'cdpVmdkList' list
     *
     * @return int
     */
    public function getCdpVmdkListCount()
    {
        return $this->count(self::CDPVMDKLIST);
    }
}

/**
 * M2C_Add_Cdp message
 */
class Net_message_M2CAddCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASK = 3;
    const CDPHARDDISKLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASK => array(
            'name' => 'cdpTask',
            'required' => true,
            'type' => 'Net_message_CdpTaskInfo'
        ),
        self::CDPHARDDISKLIST => array(
            'name' => 'cdpHarddiskList',
            'repeated' => true,
            'type' => 'Net_message_CdpHarddiskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASK] = null;
        $this->values[self::CDPHARDDISKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTask' property
     *
     * @param Net_message_CdpTaskInfo $value Property value
     *
     * @return null
     */
    public function setCdpTask(Net_message_CdpTaskInfo $value)
    {
        return $this->set(self::CDPTASK, $value);
    }

    /**
     * Returns value of 'cdpTask' property
     *
     * @return Net_message_CdpTaskInfo
     */
    public function getCdpTask()
    {
        return $this->get(self::CDPTASK);
    }

    /**
     * Appends value to 'cdpHarddiskList' list
     *
     * @param Net_message_CdpHarddiskInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpHarddiskList(Net_message_CdpHarddiskInfo $value)
    {
        return $this->append(self::CDPHARDDISKLIST, $value);
    }

    /**
     * Clears 'cdpHarddiskList' list
     *
     * @return null
     */
    public function clearCdpHarddiskList()
    {
        return $this->clear(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' list
     *
     * @return Net_message_CdpHarddiskInfo[]
     */
    public function getCdpHarddiskList()
    {
        return $this->get(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpHarddiskListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPHARDDISKLIST));
    }

    /**
     * Returns element from 'cdpHarddiskList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpHarddiskInfo
     */
    public function getCdpHarddiskListAt($offset)
    {
        return $this->get(self::CDPHARDDISKLIST, $offset);
    }

    /**
     * Returns count of 'cdpHarddiskList' list
     *
     * @return int
     */
    public function getCdpHarddiskListCount()
    {
        return $this->count(self::CDPHARDDISKLIST);
    }
}

/**
 * C2M_Add_Cdp_Ack message
 */
class Net_message_C2MAddCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Force_Add_Cdp message
 */
class Net_message_M2CForceAddCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASK = 3;
    const CDPHARDDISKLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASK => array(
            'name' => 'cdpTask',
            'required' => true,
            'type' => 'Net_message_CdpTaskInfo'
        ),
        self::CDPHARDDISKLIST => array(
            'name' => 'cdpHarddiskList',
            'repeated' => true,
            'type' => 'Net_message_CdpHarddiskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASK] = null;
        $this->values[self::CDPHARDDISKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTask' property
     *
     * @param Net_message_CdpTaskInfo $value Property value
     *
     * @return null
     */
    public function setCdpTask(Net_message_CdpTaskInfo $value)
    {
        return $this->set(self::CDPTASK, $value);
    }

    /**
     * Returns value of 'cdpTask' property
     *
     * @return Net_message_CdpTaskInfo
     */
    public function getCdpTask()
    {
        return $this->get(self::CDPTASK);
    }

    /**
     * Appends value to 'cdpHarddiskList' list
     *
     * @param Net_message_CdpHarddiskInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpHarddiskList(Net_message_CdpHarddiskInfo $value)
    {
        return $this->append(self::CDPHARDDISKLIST, $value);
    }

    /**
     * Clears 'cdpHarddiskList' list
     *
     * @return null
     */
    public function clearCdpHarddiskList()
    {
        return $this->clear(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' list
     *
     * @return Net_message_CdpHarddiskInfo[]
     */
    public function getCdpHarddiskList()
    {
        return $this->get(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpHarddiskListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPHARDDISKLIST));
    }

    /**
     * Returns element from 'cdpHarddiskList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpHarddiskInfo
     */
    public function getCdpHarddiskListAt($offset)
    {
        return $this->get(self::CDPHARDDISKLIST, $offset);
    }

    /**
     * Returns count of 'cdpHarddiskList' list
     *
     * @return int
     */
    public function getCdpHarddiskListCount()
    {
        return $this->count(self::CDPHARDDISKLIST);
    }
}

/**
 * C2M_Force_Add_Cdp_Ack message
 */
class Net_message_C2MForceAddCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Modify_Cdp message
 */
class Net_message_M2CModifyCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASK = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASK => array(
            'name' => 'cdpTask',
            'required' => true,
            'type' => 'Net_message_CdpTaskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASK] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTask' property
     *
     * @param Net_message_CdpTaskInfo $value Property value
     *
     * @return null
     */
    public function setCdpTask(Net_message_CdpTaskInfo $value)
    {
        return $this->set(self::CDPTASK, $value);
    }

    /**
     * Returns value of 'cdpTask' property
     *
     * @return Net_message_CdpTaskInfo
     */
    public function getCdpTask()
    {
        return $this->get(self::CDPTASK);
    }
}

/**
 * C2M_Modify_Cdp_Ack message
 */
class Net_message_C2MModifyCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Delete_Cdp message
 */
class Net_message_M2CDeleteCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * C2M_Delete_Cdp_Ack message
 */
class Net_message_C2MDeleteCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Start_Cdp message
 */
class Net_message_M2CStartCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * C2M_Start_Cdp_Ack message
 */
class Net_message_C2MStartCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const CDPTASKID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2C_Pause_Cdp message
 */
class Net_message_M2CPauseCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * C2M_Pause_Cdp_Ack message
 */
class Net_message_C2MPauseCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const CDPTASKID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2C_Stop_Cdp message
 */
class Net_message_M2CStopCdp extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const CDPTASKID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * C2M_Stop_Cdp_Ack message
 */
class Net_message_C2MStopCdpAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const DEVICEUNIQUEID = 4;
    const CDPTASKID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CDPTASKID => array(
            'default' => 0, 
            'name' => 'cdpTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CDPTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'cdpTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCdpTaskId($value)
    {
        return $this->set(self::CDPTASKID, $value);
    }

    /**
     * Returns value of 'cdpTaskId' property
     *
     * @return int
     */
    public function getCdpTaskId()
    {
        return $this->get(self::CDPTASKID);
    }
}

/**
 * M2C_Create_Snap message
 */
class Net_message_M2CCreateSnap extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * C2M_Create_Snap_Ack message
 */
class Net_message_C2MCreateSnapAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Merge_Snap message
 */
class Net_message_M2CMergeSnap extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * C2M_Merge_Snap_Ack message
 */
class Net_message_C2MMergeSnapAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Update_Cloning_Info message
 */
class Net_message_M2CUpdateCloningInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * C2M_Update_Cloning_Info_Ack message
 */
class Net_message_C2MUpdateCloningInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const PROGRESS = 4;
    const SPEED = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::PROGRESS => array(
            'default' => 0, 
            'name' => 'progress',
            'required' => true,
            'type' => 5,
        ),
        self::SPEED => array(
            'default' => 0, 
            'name' => 'speed',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::PROGRESS] = null;
        $this->values[self::SPEED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'progress' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setProgress($value)
    {
        return $this->set(self::PROGRESS, $value);
    }

    /**
     * Returns value of 'progress' property
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->get(self::PROGRESS);
    }

    /**
     * Sets value of 'speed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSpeed($value)
    {
        return $this->set(self::SPEED, $value);
    }

    /**
     * Returns value of 'speed' property
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->get(self::SPEED);
    }
}

/**
 * C2M_Get_Current_Cdp_Task_Info message
 */
class Net_message_C2MGetCurrentCdpTaskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }
}

/**
 * M2C_Get_Current_Cdp_Task_Info_Ack message
 */
class Net_message_M2CGetCurrentCdpTaskInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const CDPTASK = 3;
    const CDPHARDDISKLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::CDPTASK => array(
            'name' => 'cdpTask',
            'required' => false,
            'type' => 'Net_message_CdpTaskInfo'
        ),
        self::CDPHARDDISKLIST => array(
            'name' => 'cdpHarddiskList',
            'repeated' => true,
            'type' => 'Net_message_CdpHarddiskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::CDPTASK] = null;
        $this->values[self::CDPHARDDISKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'cdpTask' property
     *
     * @param Net_message_CdpTaskInfo $value Property value
     *
     * @return null
     */
    public function setCdpTask(Net_message_CdpTaskInfo $value)
    {
        return $this->set(self::CDPTASK, $value);
    }

    /**
     * Returns value of 'cdpTask' property
     *
     * @return Net_message_CdpTaskInfo
     */
    public function getCdpTask()
    {
        return $this->get(self::CDPTASK);
    }

    /**
     * Appends value to 'cdpHarddiskList' list
     *
     * @param Net_message_CdpHarddiskInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpHarddiskList(Net_message_CdpHarddiskInfo $value)
    {
        return $this->append(self::CDPHARDDISKLIST, $value);
    }

    /**
     * Clears 'cdpHarddiskList' list
     *
     * @return null
     */
    public function clearCdpHarddiskList()
    {
        return $this->clear(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' list
     *
     * @return Net_message_CdpHarddiskInfo[]
     */
    public function getCdpHarddiskList()
    {
        return $this->get(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpHarddiskListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPHARDDISKLIST));
    }

    /**
     * Returns element from 'cdpHarddiskList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpHarddiskInfo
     */
    public function getCdpHarddiskListAt($offset)
    {
        return $this->get(self::CDPHARDDISKLIST, $offset);
    }

    /**
     * Returns count of 'cdpHarddiskList' list
     *
     * @return int
     */
    public function getCdpHarddiskListCount()
    {
        return $this->count(self::CDPHARDDISKLIST);
    }
}

/**
 * Work_Partition_Info message
 */
class Net_message_WorkPartitionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NTASK_ID = 1;
    const NDISKID = 2;
    const NPARTITIONID = 3;
    const NSTATUS = 4;
    const NSTARTSECTOR = 5;
    const NENDSECTOR = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTASK_ID => array(
            'default' => 0, 
            'name' => 'nTask_id',
            'required' => true,
            'type' => 5,
        ),
        self::NDISKID => array(
            'default' => 0, 
            'name' => 'nDiskId',
            'required' => true,
            'type' => 5,
        ),
        self::NPARTITIONID => array(
            'default' => 0, 
            'name' => 'nPartitionId',
            'required' => true,
            'type' => 5,
        ),
        self::NSTATUS => array(
            'default' => 0, 
            'name' => 'nStatus',
            'required' => true,
            'type' => 5,
        ),
        self::NSTARTSECTOR => array(
            'default' => 0, 
            'name' => 'nStartSector',
            'required' => false,
            'type' => 5,
        ),
        self::NENDSECTOR => array(
            'default' => 0, 
            'name' => 'nEndSector',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NTASK_ID] = null;
        $this->values[self::NDISKID] = null;
        $this->values[self::NPARTITIONID] = null;
        $this->values[self::NSTATUS] = null;
        $this->values[self::NSTARTSECTOR] = 0;
        $this->values[self::NENDSECTOR] = 0;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nTask_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASK_ID, $value);
    }

    /**
     * Returns value of 'nTask_id' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASK_ID);
    }

    /**
     * Sets value of 'nDiskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNDiskId($value)
    {
        return $this->set(self::NDISKID, $value);
    }

    /**
     * Returns value of 'nDiskId' property
     *
     * @return int
     */
    public function getNDiskId()
    {
        return $this->get(self::NDISKID);
    }

    /**
     * Sets value of 'nPartitionId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPartitionId($value)
    {
        return $this->set(self::NPARTITIONID, $value);
    }

    /**
     * Returns value of 'nPartitionId' property
     *
     * @return int
     */
    public function getNPartitionId()
    {
        return $this->get(self::NPARTITIONID);
    }

    /**
     * Sets value of 'nStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNStatus($value)
    {
        return $this->set(self::NSTATUS, $value);
    }

    /**
     * Returns value of 'nStatus' property
     *
     * @return int
     */
    public function getNStatus()
    {
        return $this->get(self::NSTATUS);
    }

    /**
     * Sets value of 'nStartSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNStartSector($value)
    {
        return $this->set(self::NSTARTSECTOR, $value);
    }

    /**
     * Returns value of 'nStartSector' property
     *
     * @return int
     */
    public function getNStartSector()
    {
        return $this->get(self::NSTARTSECTOR);
    }

    /**
     * Sets value of 'nEndSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNEndSector($value)
    {
        return $this->set(self::NENDSECTOR, $value);
    }

    /**
     * Returns value of 'nEndSector' property
     *
     * @return int
     */
    public function getNEndSector()
    {
        return $this->get(self::NENDSECTOR);
    }
}

/**
 * C2M_Update_Work_Partition_Info message
 */
class Net_message_C2MUpdateWorkPartitionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::INFO => array(
            'name' => 'info',
            'required' => true,
            'type' => 'Net_message_WorkPartitionInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::INFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'info' property
     *
     * @param Net_message_WorkPartitionInfo $value Property value
     *
     * @return null
     */
    public function setInfo(Net_message_WorkPartitionInfo $value)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return Net_message_WorkPartitionInfo
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }
}

/**
 * Move_Config message
 */
class Net_message_MoveConfig extends \ProtobufMessage
{
    /* Field index constants */
    const MOVEHOST = 1;
    const MOVEPORT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MOVEHOST => array(
            'default' => '\"\"', 
            'name' => 'moveHost',
            'required' => true,
            'type' => 7,
        ),
        self::MOVEPORT => array(
            'default' => 0, 
            'name' => 'movePort',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::MOVEHOST] = null;
        $this->values[self::MOVEPORT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'moveHost' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMoveHost($value)
    {
        return $this->set(self::MOVEHOST, $value);
    }

    /**
     * Returns value of 'moveHost' property
     *
     * @return string
     */
    public function getMoveHost()
    {
        return $this->get(self::MOVEHOST);
    }

    /**
     * Sets value of 'movePort' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMovePort($value)
    {
        return $this->set(self::MOVEPORT, $value);
    }

    /**
     * Returns value of 'movePort' property
     *
     * @return int
     */
    public function getMovePort()
    {
        return $this->get(self::MOVEPORT);
    }
}

/**
 * P2C_Start_Migrate message
 */
class Net_message_P2CStartMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const TASKID = 3;
    const SELECTEDPARTITIONS = 4;
    const HARDDISKVERSUS = 5;
    const MOVECONFIG = 6;
    const CDPTASK = 7;
    const CDPHARDDISKLIST = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::TASKID => array(
            'default' => 0, 
            'name' => 'taskId',
            'required' => true,
            'type' => 5,
        ),
        self::SELECTEDPARTITIONS => array(
            'default' => '\"\"', 
            'name' => 'selectedPartitions',
            'required' => true,
            'type' => 7,
        ),
        self::HARDDISKVERSUS => array(
            'default' => '\"\"', 
            'name' => 'harddiskVersus',
            'required' => true,
            'type' => 7,
        ),
        self::MOVECONFIG => array(
            'name' => 'moveConfig',
            'required' => true,
            'type' => 'Net_message_MoveConfig'
        ),
        self::CDPTASK => array(
            'name' => 'cdpTask',
            'required' => true,
            'type' => 'Net_message_CdpTaskInfo'
        ),
        self::CDPHARDDISKLIST => array(
            'name' => 'cdpHarddiskList',
            'repeated' => true,
            'type' => 'Net_message_CdpHarddiskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::TASKID] = null;
        $this->values[self::SELECTEDPARTITIONS] = null;
        $this->values[self::HARDDISKVERSUS] = null;
        $this->values[self::MOVECONFIG] = null;
        $this->values[self::CDPTASK] = null;
        $this->values[self::CDPHARDDISKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'taskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTaskId($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'taskId' property
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->get(self::TASKID);
    }

    /**
     * Sets value of 'selectedPartitions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSelectedPartitions($value)
    {
        return $this->set(self::SELECTEDPARTITIONS, $value);
    }

    /**
     * Returns value of 'selectedPartitions' property
     *
     * @return string
     */
    public function getSelectedPartitions()
    {
        return $this->get(self::SELECTEDPARTITIONS);
    }

    /**
     * Sets value of 'harddiskVersus' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHarddiskVersus($value)
    {
        return $this->set(self::HARDDISKVERSUS, $value);
    }

    /**
     * Returns value of 'harddiskVersus' property
     *
     * @return string
     */
    public function getHarddiskVersus()
    {
        return $this->get(self::HARDDISKVERSUS);
    }

    /**
     * Sets value of 'moveConfig' property
     *
     * @param Net_message_MoveConfig $value Property value
     *
     * @return null
     */
    public function setMoveConfig(Net_message_MoveConfig $value)
    {
        return $this->set(self::MOVECONFIG, $value);
    }

    /**
     * Returns value of 'moveConfig' property
     *
     * @return Net_message_MoveConfig
     */
    public function getMoveConfig()
    {
        return $this->get(self::MOVECONFIG);
    }

    /**
     * Sets value of 'cdpTask' property
     *
     * @param Net_message_CdpTaskInfo $value Property value
     *
     * @return null
     */
    public function setCdpTask(Net_message_CdpTaskInfo $value)
    {
        return $this->set(self::CDPTASK, $value);
    }

    /**
     * Returns value of 'cdpTask' property
     *
     * @return Net_message_CdpTaskInfo
     */
    public function getCdpTask()
    {
        return $this->get(self::CDPTASK);
    }

    /**
     * Appends value to 'cdpHarddiskList' list
     *
     * @param Net_message_CdpHarddiskInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpHarddiskList(Net_message_CdpHarddiskInfo $value)
    {
        return $this->append(self::CDPHARDDISKLIST, $value);
    }

    /**
     * Clears 'cdpHarddiskList' list
     *
     * @return null
     */
    public function clearCdpHarddiskList()
    {
        return $this->clear(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' list
     *
     * @return Net_message_CdpHarddiskInfo[]
     */
    public function getCdpHarddiskList()
    {
        return $this->get(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpHarddiskListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPHARDDISKLIST));
    }

    /**
     * Returns element from 'cdpHarddiskList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpHarddiskInfo
     */
    public function getCdpHarddiskListAt($offset)
    {
        return $this->get(self::CDPHARDDISKLIST, $offset);
    }

    /**
     * Returns count of 'cdpHarddiskList' list
     *
     * @return int
     */
    public function getCdpHarddiskListCount()
    {
        return $this->count(self::CDPHARDDISKLIST);
    }
}

/**
 * C2P_Start_Migrate_Ack message
 */
class Net_message_C2PStartMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const MOVETASKID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::MOVETASKID => array(
            'default' => 0, 
            'name' => 'moveTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::MOVETASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'moveTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMoveTaskId($value)
    {
        return $this->set(self::MOVETASKID, $value);
    }

    /**
     * Returns value of 'moveTaskId' property
     *
     * @return int
     */
    public function getMoveTaskId()
    {
        return $this->get(self::MOVETASKID);
    }
}

/**
 * P2C_Get_Migrating_Info message
 */
class Net_message_P2CGetMigratingInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * C2P_Get_Migrating_Info_Ack message
 */
class Net_message_C2PGetMigratingInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const MIGRATINGINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::MIGRATINGINFO => array(
            'name' => 'MigratingInfo',
            'required' => true,
            'type' => 'Net_message_MigratingInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::MIGRATINGINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'MigratingInfo' property
     *
     * @param Net_message_MigratingInfo $value Property value
     *
     * @return null
     */
    public function setMigratingInfo(Net_message_MigratingInfo $value)
    {
        return $this->set(self::MIGRATINGINFO, $value);
    }

    /**
     * Returns value of 'MigratingInfo' property
     *
     * @return Net_message_MigratingInfo
     */
    public function getMigratingInfo()
    {
        return $this->get(self::MIGRATINGINFO);
    }
}

/**
 * Storage_Path_Info message
 */
class Net_message_StoragePathInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const SPATH = 2;
    const NTYPE = 3;
    const NUSEDSIZE = 4;
    const NSTATUS = 5;
    const NISPRIMARY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'default' => '\"\"', 
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::SPATH => array(
            'default' => '\"\"', 
            'name' => 'sPath',
            'required' => true,
            'type' => 7,
        ),
        self::NTYPE => array(
            'default' => 0, 
            'name' => 'nType',
            'required' => true,
            'type' => 5,
        ),
        self::NUSEDSIZE => array(
            'default' => 0, 
            'name' => 'nUsedSize',
            'required' => true,
            'type' => 5,
        ),
        self::NSTATUS => array(
            'default' => 0, 
            'name' => 'nStatus',
            'required' => true,
            'type' => 5,
        ),
        self::NISPRIMARY => array(
            'default' => 0, 
            'name' => 'nIsPrimary',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::SPATH] = null;
        $this->values[self::NTYPE] = null;
        $this->values[self::NUSEDSIZE] = null;
        $this->values[self::NSTATUS] = null;
        $this->values[self::NISPRIMARY] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'sPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSPath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'sPath' property
     *
     * @return string
     */
    public function getSPath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Sets value of 'nType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return int
     */
    public function getNType()
    {
        return $this->get(self::NTYPE);
    }

    /**
     * Sets value of 'nUsedSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNUsedSize($value)
    {
        return $this->set(self::NUSEDSIZE, $value);
    }

    /**
     * Returns value of 'nUsedSize' property
     *
     * @return int
     */
    public function getNUsedSize()
    {
        return $this->get(self::NUSEDSIZE);
    }

    /**
     * Sets value of 'nStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNStatus($value)
    {
        return $this->set(self::NSTATUS, $value);
    }

    /**
     * Returns value of 'nStatus' property
     *
     * @return int
     */
    public function getNStatus()
    {
        return $this->get(self::NSTATUS);
    }

    /**
     * Sets value of 'nIsPrimary' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNIsPrimary($value)
    {
        return $this->set(self::NISPRIMARY, $value);
    }

    /**
     * Returns value of 'nIsPrimary' property
     *
     * @return int
     */
    public function getNIsPrimary()
    {
        return $this->get(self::NISPRIMARY);
    }
}

/**
 * Storage_Info message
 */
class Net_message_StorageInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SUNIQUEID = 1;
    const SNAME = 2;
    const NTYPE = 3;
    const NSIZE = 4;
    const NUSEDSIZE = 5;
    const NISPRIMARY = 6;
    const STATUS = 7;
    const CONFIG = 8;
    const DATA = 9;
    const PATH_LIST = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'sUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::SNAME => array(
            'default' => '\"\"', 
            'name' => 'sName',
            'required' => true,
            'type' => 7,
        ),
        self::NTYPE => array(
            'default' => 0, 
            'name' => 'nType',
            'required' => true,
            'type' => 5,
        ),
        self::NSIZE => array(
            'default' => 0, 
            'name' => 'nSize',
            'required' => true,
            'type' => 5,
        ),
        self::NUSEDSIZE => array(
            'default' => 0, 
            'name' => 'nUsedSize',
            'required' => true,
            'type' => 5,
        ),
        self::NISPRIMARY => array(
            'default' => 0, 
            'name' => 'nIsPrimary',
            'required' => true,
            'type' => 5,
        ),
        self::STATUS => array(
            'default' => 0, 
            'name' => 'status',
            'required' => true,
            'type' => 5,
        ),
        self::CONFIG => array(
            'default' => '\"\"', 
            'name' => 'config',
            'required' => true,
            'type' => 7,
        ),
        self::DATA => array(
            'default' => '\"\"', 
            'name' => 'data',
            'required' => true,
            'type' => 7,
        ),
        self::PATH_LIST => array(
            'name' => 'path_list',
            'repeated' => true,
            'type' => 'Net_message_StoragePathInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::SUNIQUEID] = null;
        $this->values[self::SNAME] = null;
        $this->values[self::NTYPE] = null;
        $this->values[self::NSIZE] = null;
        $this->values[self::NUSEDSIZE] = null;
        $this->values[self::NISPRIMARY] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::CONFIG] = null;
        $this->values[self::DATA] = null;
        $this->values[self::PATH_LIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'sUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSUniqueId($value)
    {
        return $this->set(self::SUNIQUEID, $value);
    }

    /**
     * Returns value of 'sUniqueId' property
     *
     * @return string
     */
    public function getSUniqueId()
    {
        return $this->get(self::SUNIQUEID);
    }

    /**
     * Sets value of 'sName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSName($value)
    {
        return $this->set(self::SNAME, $value);
    }

    /**
     * Returns value of 'sName' property
     *
     * @return string
     */
    public function getSName()
    {
        return $this->get(self::SNAME);
    }

    /**
     * Sets value of 'nType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return int
     */
    public function getNType()
    {
        return $this->get(self::NTYPE);
    }

    /**
     * Sets value of 'nSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSize($value)
    {
        return $this->set(self::NSIZE, $value);
    }

    /**
     * Returns value of 'nSize' property
     *
     * @return int
     */
    public function getNSize()
    {
        return $this->get(self::NSIZE);
    }

    /**
     * Sets value of 'nUsedSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNUsedSize($value)
    {
        return $this->set(self::NUSEDSIZE, $value);
    }

    /**
     * Returns value of 'nUsedSize' property
     *
     * @return int
     */
    public function getNUsedSize()
    {
        return $this->get(self::NUSEDSIZE);
    }

    /**
     * Sets value of 'nIsPrimary' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNIsPrimary($value)
    {
        return $this->set(self::NISPRIMARY, $value);
    }

    /**
     * Returns value of 'nIsPrimary' property
     *
     * @return int
     */
    public function getNIsPrimary()
    {
        return $this->get(self::NISPRIMARY);
    }

    /**
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 'config' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConfig($value)
    {
        return $this->set(self::CONFIG, $value);
    }

    /**
     * Returns value of 'config' property
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->get(self::CONFIG);
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Appends value to 'path_list' list
     *
     * @param Net_message_StoragePathInfo $value Value to append
     *
     * @return null
     */
    public function appendPathList(Net_message_StoragePathInfo $value)
    {
        return $this->append(self::PATH_LIST, $value);
    }

    /**
     * Clears 'path_list' list
     *
     * @return null
     */
    public function clearPathList()
    {
        return $this->clear(self::PATH_LIST);
    }

    /**
     * Returns 'path_list' list
     *
     * @return Net_message_StoragePathInfo[]
     */
    public function getPathList()
    {
        return $this->get(self::PATH_LIST);
    }

    /**
     * Returns 'path_list' iterator
     *
     * @return ArrayIterator
     */
    public function getPathListIterator()
    {
        return new \ArrayIterator($this->get(self::PATH_LIST));
    }

    /**
     * Returns element from 'path_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_StoragePathInfo
     */
    public function getPathListAt($offset)
    {
        return $this->get(self::PATH_LIST, $offset);
    }

    /**
     * Returns count of 'path_list' list
     *
     * @return int
     */
    public function getPathListCount()
    {
        return $this->count(self::PATH_LIST);
    }
}

/**
 * S2M_Register_Storage message
 */
class Net_message_S2MRegisterStorage extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const STORAGEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::STORAGEINFO => array(
            'name' => 'storageInfo',
            'required' => true,
            'type' => 'Net_message_StorageInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::STORAGEINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'storageInfo' property
     *
     * @param Net_message_StorageInfo $value Property value
     *
     * @return null
     */
    public function setStorageInfo(Net_message_StorageInfo $value)
    {
        return $this->set(self::STORAGEINFO, $value);
    }

    /**
     * Returns value of 'storageInfo' property
     *
     * @return Net_message_StorageInfo
     */
    public function getStorageInfo()
    {
        return $this->get(self::STORAGEINFO);
    }
}

/**
 * M2S_Register_Storage_Ack message
 */
class Net_message_M2SRegisterStorageAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * Cdp_Current_Task_Info message
 */
class Net_message_CdpCurrentTaskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DEVICEUNIQUEID = 1;
    const TASKSTATUS = 2;
    const ENGINESTATUS = 3;
    const CDPHARDDISKLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::TASKSTATUS => array(
            'default' => 0, 
            'name' => 'taskStatus',
            'required' => true,
            'type' => 5,
        ),
        self::ENGINESTATUS => array(
            'default' => 0, 
            'name' => 'engineStatus',
            'required' => true,
            'type' => 5,
        ),
        self::CDPHARDDISKLIST => array(
            'name' => 'cdpHarddiskList',
            'repeated' => true,
            'type' => 'Net_message_CdpHarddiskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::TASKSTATUS] = null;
        $this->values[self::ENGINESTATUS] = null;
        $this->values[self::CDPHARDDISKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'taskStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTaskStatus($value)
    {
        return $this->set(self::TASKSTATUS, $value);
    }

    /**
     * Returns value of 'taskStatus' property
     *
     * @return int
     */
    public function getTaskStatus()
    {
        return $this->get(self::TASKSTATUS);
    }

    /**
     * Sets value of 'engineStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEngineStatus($value)
    {
        return $this->set(self::ENGINESTATUS, $value);
    }

    /**
     * Returns value of 'engineStatus' property
     *
     * @return int
     */
    public function getEngineStatus()
    {
        return $this->get(self::ENGINESTATUS);
    }

    /**
     * Appends value to 'cdpHarddiskList' list
     *
     * @param Net_message_CdpHarddiskInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpHarddiskList(Net_message_CdpHarddiskInfo $value)
    {
        return $this->append(self::CDPHARDDISKLIST, $value);
    }

    /**
     * Clears 'cdpHarddiskList' list
     *
     * @return null
     */
    public function clearCdpHarddiskList()
    {
        return $this->clear(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' list
     *
     * @return Net_message_CdpHarddiskInfo[]
     */
    public function getCdpHarddiskList()
    {
        return $this->get(self::CDPHARDDISKLIST);
    }

    /**
     * Returns 'cdpHarddiskList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpHarddiskListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPHARDDISKLIST));
    }

    /**
     * Returns element from 'cdpHarddiskList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpHarddiskInfo
     */
    public function getCdpHarddiskListAt($offset)
    {
        return $this->get(self::CDPHARDDISKLIST, $offset);
    }

    /**
     * Returns count of 'cdpHarddiskList' list
     *
     * @return int
     */
    public function getCdpHarddiskListCount()
    {
        return $this->count(self::CDPHARDDISKLIST);
    }
}

/**
 * S2M_Update_Cdp_Current_Task_Info message
 */
class Net_message_S2MUpdateCdpCurrentTaskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const TASK_INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::TASK_INFO => array(
            'name' => 'task_info',
            'required' => true,
            'type' => 'Net_message_CdpCurrentTaskInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::TASK_INFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'task_info' property
     *
     * @param Net_message_CdpCurrentTaskInfo $value Property value
     *
     * @return null
     */
    public function setTaskInfo(Net_message_CdpCurrentTaskInfo $value)
    {
        return $this->set(self::TASK_INFO, $value);
    }

    /**
     * Returns value of 'task_info' property
     *
     * @return Net_message_CdpCurrentTaskInfo
     */
    public function getTaskInfo()
    {
        return $this->get(self::TASK_INFO);
    }
}

/**
 * M2S_Update_Cdp_Current_Task_Info_Ack message
 */
class Net_message_M2SUpdateCdpCurrentTaskInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * File_Size message
 */
class Net_message_FileSize extends \ProtobufMessage
{
    /* Field index constants */
    const SPATH = 1;
    const NSIZE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
        self::NSIZE => array(
            'name' => 'nSize',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::SPATH] = null;
        $this->values[self::NSIZE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Sets value of 'nSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSize($value)
    {
        return $this->set(self::NSIZE, $value);
    }

    /**
     * Returns value of 'nSize' property
     *
     * @return int
     */
    public function getNSize()
    {
        return $this->get(self::NSIZE);
    }
}

/**
 * M2S_Create_Small_Snap message
 */
class Net_message_M2SCreateSmallSnap extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NSMALLID = 2;
    const NTASKID = 3;
    const NTIME = 4;
    const SPATH = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NSMALLID => array(
            'name' => 'nSmallId',
            'required' => true,
            'type' => 5,
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::NTIME => array(
            'name' => 'nTime',
            'required' => true,
            'type' => 5,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
            'type' => 'Net_message_FileSize'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NSMALLID] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::NTIME] = null;
        $this->values[self::SPATH] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nSmallId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSmallId($value)
    {
        return $this->set(self::NSMALLID, $value);
    }

    /**
     * Returns value of 'nSmallId' property
     *
     * @return int
     */
    public function getNSmallId()
    {
        return $this->get(self::NSMALLID);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return int
     */
    public function getNTime()
    {
        return $this->get(self::NTIME);
    }

    /**
     * Appends value to 'spath' list
     *
     * @param Net_message_FileSize $value Value to append
     *
     * @return null
     */
    public function appendSpath(Net_message_FileSize $value)
    {
        return $this->append(self::SPATH, $value);
    }

    /**
     * Clears 'spath' list
     *
     * @return null
     */
    public function clearSpath()
    {
        return $this->clear(self::SPATH);
    }

    /**
     * Returns 'spath' list
     *
     * @return Net_message_FileSize[]
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Returns 'spath' iterator
     *
     * @return ArrayIterator
     */
    public function getSpathIterator()
    {
        return new \ArrayIterator($this->get(self::SPATH));
    }

    /**
     * Returns element from 'spath' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_FileSize
     */
    public function getSpathAt($offset)
    {
        return $this->get(self::SPATH, $offset);
    }

    /**
     * Returns count of 'spath' list
     *
     * @return int
     */
    public function getSpathCount()
    {
        return $this->count(self::SPATH);
    }
}

/**
 * S2M_Create_Small_Snap_Ack message
 */
class Net_message_S2MCreateSmallSnapAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NSMALLID = 2;
    const NTASKID = 3;
    const NTIME = 4;
    const CODE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NSMALLID => array(
            'name' => 'nSmallId',
            'required' => true,
            'type' => 5,
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::NTIME => array(
            'name' => 'nTime',
            'required' => true,
            'type' => 5,
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NSMALLID] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::NTIME] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nSmallId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSmallId($value)
    {
        return $this->set(self::NSMALLID, $value);
    }

    /**
     * Returns value of 'nSmallId' property
     *
     * @return int
     */
    public function getNSmallId()
    {
        return $this->get(self::NSMALLID);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return int
     */
    public function getNTime()
    {
        return $this->get(self::NTIME);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * S2M_Vmdk_Info message
 */
class Net_message_S2MVmdkInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;
    const CDPVMDKLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::CDPVMDKLIST => array(
            'name' => 'cdpVmdkList',
            'repeated' => true,
            'type' => 'Net_message_CdpVmdkInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::CDPVMDKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Appends value to 'cdpVmdkList' list
     *
     * @param Net_message_CdpVmdkInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpVmdkList(Net_message_CdpVmdkInfo $value)
    {
        return $this->append(self::CDPVMDKLIST, $value);
    }

    /**
     * Clears 'cdpVmdkList' list
     *
     * @return null
     */
    public function clearCdpVmdkList()
    {
        return $this->clear(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' list
     *
     * @return Net_message_CdpVmdkInfo[]
     */
    public function getCdpVmdkList()
    {
        return $this->get(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpVmdkListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPVMDKLIST));
    }

    /**
     * Returns element from 'cdpVmdkList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpVmdkInfo
     */
    public function getCdpVmdkListAt($offset)
    {
        return $this->get(self::CDPVMDKLIST, $offset);
    }

    /**
     * Returns count of 'cdpVmdkList' list
     *
     * @return int
     */
    public function getCdpVmdkListCount()
    {
        return $this->count(self::CDPVMDKLIST);
    }
}

/**
 * M2S_Delete_Ahdr_File message
 */
class Net_message_M2SDeleteAhdrFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SSTORAGEID = 2;
    const SPATH = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SSTORAGEID => array(
            'name' => 'sStorageId',
            'required' => true,
            'type' => 7,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SSTORAGEID] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sStorageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSStorageId($value)
    {
        return $this->set(self::SSTORAGEID, $value);
    }

    /**
     * Returns value of 'sStorageId' property
     *
     * @return string
     */
    public function getSStorageId()
    {
        return $this->get(self::SSTORAGEID);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * S2M_Delete_Ahdr_File_Ack message
 */
class Net_message_S2MDeleteAhdrFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * M2S_Create_Ahdr_File message
 */
class Net_message_M2SCreateAhdrFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SSTORAGEID = 2;
    const SPATH = 3;
    const NSYSTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SSTORAGEID => array(
            'name' => 'sStorageId',
            'required' => true,
            'type' => 7,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
        self::NSYSTYPE => array(
            'name' => 'nSysType',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SSTORAGEID] = null;
        $this->values[self::SPATH] = null;
        $this->values[self::NSYSTYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sStorageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSStorageId($value)
    {
        return $this->set(self::SSTORAGEID, $value);
    }

    /**
     * Returns value of 'sStorageId' property
     *
     * @return string
     */
    public function getSStorageId()
    {
        return $this->get(self::SSTORAGEID);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Sets value of 'nSysType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSysType($value)
    {
        return $this->set(self::NSYSTYPE, $value);
    }

    /**
     * Returns value of 'nSysType' property
     *
     * @return int
     */
    public function getNSysType()
    {
        return $this->get(self::NSYSTYPE);
    }
}

/**
 * S2M_Create_Ahdr_File_Ack message
 */
class Net_message_S2MCreateAhdrFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * S2M_Merge_Ack message
 */
class Net_message_S2MMergeAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * M2S_Delete_Merger_Record message
 */
class Net_message_M2SDeleteMergerRecord extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SPATH => array(
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * C2S_OPen_Vmdk message
 */
class Net_message_C2SOPenVmdk extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const FILEPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::FILEPATH => array(
            'default' => '\"\"', 
            'name' => 'filePath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::FILEPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'filePath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFilePath($value)
    {
        return $this->set(self::FILEPATH, $value);
    }

    /**
     * Returns value of 'filePath' property
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->get(self::FILEPATH);
    }
}

/**
 * S2C_OPen_Vmdk_Ack message
 */
class Net_message_S2COPenVmdkAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * Sector_Data message
 */
class Net_message_SectorData extends \ProtobufMessage
{
    /* Field index constants */
    const STARTOFFSET = 1;
    const SECTORTOWRITE = 2;
    const DATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STARTOFFSET => array(
            'default' => 0, 
            'name' => 'startOffset',
            'required' => true,
            'type' => 5,
        ),
        self::SECTORTOWRITE => array(
            'default' => 0, 
            'name' => 'sectorToWrite',
            'required' => true,
            'type' => 5,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::STARTOFFSET] = null;
        $this->values[self::SECTORTOWRITE] = null;
        $this->values[self::DATA] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'startOffset' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStartOffset($value)
    {
        return $this->set(self::STARTOFFSET, $value);
    }

    /**
     * Returns value of 'startOffset' property
     *
     * @return int
     */
    public function getStartOffset()
    {
        return $this->get(self::STARTOFFSET);
    }

    /**
     * Sets value of 'sectorToWrite' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectorToWrite($value)
    {
        return $this->set(self::SECTORTOWRITE, $value);
    }

    /**
     * Returns value of 'sectorToWrite' property
     *
     * @return int
     */
    public function getSectorToWrite()
    {
        return $this->get(self::SECTORTOWRITE);
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }
}

/**
 * C2S_Write_Vmdk message
 */
class Net_message_C2SWriteVmdk extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WRITETYPE = 2;
    const DATA_LIST = 3;
    const NSEQUE = 4;
    const BZIP = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WRITETYPE => array(
            'default' => 0, 
            'name' => 'writeType',
            'required' => true,
            'type' => 5,
        ),
        self::DATA_LIST => array(
            'name' => 'data_list',
            'repeated' => true,
            'type' => 'Net_message_SectorData'
        ),
        self::NSEQUE => array(
            'name' => 'nSeque',
            'required' => false,
            'type' => 5,
        ),
        self::BZIP => array(
            'name' => 'bzip',
            'required' => false,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WRITETYPE] = null;
        $this->values[self::DATA_LIST] = array();
        $this->values[self::NSEQUE] = null;
        $this->values[self::BZIP] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'writeType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setWriteType($value)
    {
        return $this->set(self::WRITETYPE, $value);
    }

    /**
     * Returns value of 'writeType' property
     *
     * @return int
     */
    public function getWriteType()
    {
        return $this->get(self::WRITETYPE);
    }

    /**
     * Appends value to 'data_list' list
     *
     * @param Net_message_SectorData $value Value to append
     *
     * @return null
     */
    public function appendDataList(Net_message_SectorData $value)
    {
        return $this->append(self::DATA_LIST, $value);
    }

    /**
     * Clears 'data_list' list
     *
     * @return null
     */
    public function clearDataList()
    {
        return $this->clear(self::DATA_LIST);
    }

    /**
     * Returns 'data_list' list
     *
     * @return Net_message_SectorData[]
     */
    public function getDataList()
    {
        return $this->get(self::DATA_LIST);
    }

    /**
     * Returns 'data_list' iterator
     *
     * @return ArrayIterator
     */
    public function getDataListIterator()
    {
        return new \ArrayIterator($this->get(self::DATA_LIST));
    }

    /**
     * Returns element from 'data_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_SectorData
     */
    public function getDataListAt($offset)
    {
        return $this->get(self::DATA_LIST, $offset);
    }

    /**
     * Returns count of 'data_list' list
     *
     * @return int
     */
    public function getDataListCount()
    {
        return $this->count(self::DATA_LIST);
    }

    /**
     * Sets value of 'nSeque' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSeque($value)
    {
        return $this->set(self::NSEQUE, $value);
    }

    /**
     * Returns value of 'nSeque' property
     *
     * @return int
     */
    public function getNSeque()
    {
        return $this->get(self::NSEQUE);
    }

    /**
     * Sets value of 'bzip' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setBzip($value)
    {
        return $this->set(self::BZIP, $value);
    }

    /**
     * Returns value of 'bzip' property
     *
     * @return bool
     */
    public function getBzip()
    {
        return $this->get(self::BZIP);
    }
}

/**
 * S2C_Write_Vmdk_Ack message
 */
class Net_message_S2CWriteVmdkAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * C2S_Close_Vmdk message
 */
class Net_message_C2SCloseVmdk extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }
}

/**
 * S2C_Close_Vmdk_Ack message
 */
class Net_message_S2CCloseVmdkAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * C2S_Get_DataServer_Info message
 */
class Net_message_C2SGetDataServerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SUSERID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SUSERID => array(
            'default' => '\"\"', 
            'name' => 'sUserid',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SUSERID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sUserid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSUserid($value)
    {
        return $this->set(self::SUSERID, $value);
    }

    /**
     * Returns value of 'sUserid' property
     *
     * @return string
     */
    public function getSUserid()
    {
        return $this->get(self::SUSERID);
    }
}

/**
 * S2C_Get_DataServer_Info_Ack message
 */
class Net_message_S2CGetDataServerInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SADDR = 2;
    const NPORT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SADDR => array(
            'default' => '\"\"', 
            'name' => 'sAddr',
            'required' => true,
            'type' => 7,
        ),
        self::NPORT => array(
            'default' => 0, 
            'name' => 'nPort',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SADDR] = null;
        $this->values[self::NPORT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sAddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSAddr($value)
    {
        return $this->set(self::SADDR, $value);
    }

    /**
     * Returns value of 'sAddr' property
     *
     * @return string
     */
    public function getSAddr()
    {
        return $this->get(self::SADDR);
    }

    /**
     * Sets value of 'nPort' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPort($value)
    {
        return $this->set(self::NPORT, $value);
    }

    /**
     * Returns value of 'nPort' property
     *
     * @return int
     */
    public function getNPort()
    {
        return $this->get(self::NPORT);
    }
}

/**
 * Check_Vmdk_Info message
 */
class Net_message_CheckVmdkInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SPATH = 1;
    const NCYLINDERS = 2;
    const NTRACKSPERCYLINDER = 3;
    const NSECTORSPERTRACK = 4;
    const NBYTESPERSECTOR = 5;
    const NSECTOR = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SPATH => array(
            'default' => '\"\"', 
            'name' => 'spath',
            'required' => true,
            'type' => 7,
        ),
        self::NCYLINDERS => array(
            'default' => 0, 
            'name' => 'nCylinders',
            'required' => false,
            'type' => 5,
        ),
        self::NTRACKSPERCYLINDER => array(
            'default' => 0, 
            'name' => 'nTracksPerCylinder',
            'required' => false,
            'type' => 5,
        ),
        self::NSECTORSPERTRACK => array(
            'default' => 0, 
            'name' => 'nSectorsPerTrack',
            'required' => false,
            'type' => 5,
        ),
        self::NBYTESPERSECTOR => array(
            'default' => 0, 
            'name' => 'nBytesPerSector',
            'required' => false,
            'type' => 5,
        ),
        self::NSECTOR => array(
            'default' => 0, 
            'name' => 'nSector',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::SPATH] = null;
        $this->values[self::NCYLINDERS] = 0;
        $this->values[self::NTRACKSPERCYLINDER] = 0;
        $this->values[self::NSECTORSPERTRACK] = 0;
        $this->values[self::NBYTESPERSECTOR] = 0;
        $this->values[self::NSECTOR] = 0;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'spath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'spath' property
     *
     * @return string
     */
    public function getSpath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Sets value of 'nCylinders' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNCylinders($value)
    {
        return $this->set(self::NCYLINDERS, $value);
    }

    /**
     * Returns value of 'nCylinders' property
     *
     * @return int
     */
    public function getNCylinders()
    {
        return $this->get(self::NCYLINDERS);
    }

    /**
     * Sets value of 'nTracksPerCylinder' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTracksPerCylinder($value)
    {
        return $this->set(self::NTRACKSPERCYLINDER, $value);
    }

    /**
     * Returns value of 'nTracksPerCylinder' property
     *
     * @return int
     */
    public function getNTracksPerCylinder()
    {
        return $this->get(self::NTRACKSPERCYLINDER);
    }

    /**
     * Sets value of 'nSectorsPerTrack' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSectorsPerTrack($value)
    {
        return $this->set(self::NSECTORSPERTRACK, $value);
    }

    /**
     * Returns value of 'nSectorsPerTrack' property
     *
     * @return int
     */
    public function getNSectorsPerTrack()
    {
        return $this->get(self::NSECTORSPERTRACK);
    }

    /**
     * Sets value of 'nBytesPerSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNBytesPerSector($value)
    {
        return $this->set(self::NBYTESPERSECTOR, $value);
    }

    /**
     * Returns value of 'nBytesPerSector' property
     *
     * @return int
     */
    public function getNBytesPerSector()
    {
        return $this->get(self::NBYTESPERSECTOR);
    }

    /**
     * Sets value of 'nSector' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSector($value)
    {
        return $this->set(self::NSECTOR, $value);
    }

    /**
     * Returns value of 'nSector' property
     *
     * @return int
     */
    public function getNSector()
    {
        return $this->get(self::NSECTOR);
    }
}

/**
 * C2S_CheckVmdkFile message
 */
class Net_message_C2SCheckVmdkFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTYPE = 2;
    const PATH_LIST = 3;
    const NOSTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTYPE => array(
            'default' => 0, 
            'name' => 'nType',
            'required' => true,
            'type' => 5,
        ),
        self::PATH_LIST => array(
            'name' => 'path_list',
            'repeated' => true,
            'type' => 'Net_message_CheckVmdkInfo'
        ),
        self::NOSTYPE => array(
            'name' => 'nOsType',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTYPE] = null;
        $this->values[self::PATH_LIST] = array();
        $this->values[self::NOSTYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return int
     */
    public function getNType()
    {
        return $this->get(self::NTYPE);
    }

    /**
     * Appends value to 'path_list' list
     *
     * @param Net_message_CheckVmdkInfo $value Value to append
     *
     * @return null
     */
    public function appendPathList(Net_message_CheckVmdkInfo $value)
    {
        return $this->append(self::PATH_LIST, $value);
    }

    /**
     * Clears 'path_list' list
     *
     * @return null
     */
    public function clearPathList()
    {
        return $this->clear(self::PATH_LIST);
    }

    /**
     * Returns 'path_list' list
     *
     * @return Net_message_CheckVmdkInfo[]
     */
    public function getPathList()
    {
        return $this->get(self::PATH_LIST);
    }

    /**
     * Returns 'path_list' iterator
     *
     * @return ArrayIterator
     */
    public function getPathListIterator()
    {
        return new \ArrayIterator($this->get(self::PATH_LIST));
    }

    /**
     * Returns element from 'path_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CheckVmdkInfo
     */
    public function getPathListAt($offset)
    {
        return $this->get(self::PATH_LIST, $offset);
    }

    /**
     * Returns count of 'path_list' list
     *
     * @return int
     */
    public function getPathListCount()
    {
        return $this->count(self::PATH_LIST);
    }

    /**
     * Sets value of 'nOsType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNOsType($value)
    {
        return $this->set(self::NOSTYPE, $value);
    }

    /**
     * Returns value of 'nOsType' property
     *
     * @return int
     */
    public function getNOsType()
    {
        return $this->get(self::NOSTYPE);
    }
}

/**
 * S2C_CheckVmdkFile_Ack message
 */
class Net_message_S2CCheckVmdkFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const PATH_LIST = 2;
    const CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::PATH_LIST => array(
            'name' => 'path_list',
            'repeated' => true,
            'type' => 7,
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::PATH_LIST] = array();
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Appends value to 'path_list' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPathList($value)
    {
        return $this->append(self::PATH_LIST, $value);
    }

    /**
     * Clears 'path_list' list
     *
     * @return null
     */
    public function clearPathList()
    {
        return $this->clear(self::PATH_LIST);
    }

    /**
     * Returns 'path_list' list
     *
     * @return string[]
     */
    public function getPathList()
    {
        return $this->get(self::PATH_LIST);
    }

    /**
     * Returns 'path_list' iterator
     *
     * @return ArrayIterator
     */
    public function getPathListIterator()
    {
        return new \ArrayIterator($this->get(self::PATH_LIST));
    }

    /**
     * Returns element from 'path_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPathListAt($offset)
    {
        return $this->get(self::PATH_LIST, $offset);
    }

    /**
     * Returns count of 'path_list' list
     *
     * @return int
     */
    public function getPathListCount()
    {
        return $this->count(self::PATH_LIST);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * C2S_Update_Cdp_Current_Task_Info message
 */
class Net_message_C2SUpdateCdpCurrentTaskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const TASK_INFO = 2;
    const NSEQUE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::TASK_INFO => array(
            'name' => 'task_info',
            'required' => true,
            'type' => 'Net_message_CdpCurrentTaskInfo'
        ),
        self::NSEQUE => array(
            'name' => 'nSeque',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::TASK_INFO] = null;
        $this->values[self::NSEQUE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'task_info' property
     *
     * @param Net_message_CdpCurrentTaskInfo $value Property value
     *
     * @return null
     */
    public function setTaskInfo(Net_message_CdpCurrentTaskInfo $value)
    {
        return $this->set(self::TASK_INFO, $value);
    }

    /**
     * Returns value of 'task_info' property
     *
     * @return Net_message_CdpCurrentTaskInfo
     */
    public function getTaskInfo()
    {
        return $this->get(self::TASK_INFO);
    }

    /**
     * Sets value of 'nSeque' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSeque($value)
    {
        return $this->set(self::NSEQUE, $value);
    }

    /**
     * Returns value of 'nSeque' property
     *
     * @return int
     */
    public function getNSeque()
    {
        return $this->get(self::NSEQUE);
    }
}

/**
 * S2C_Update_Cdp_Current_Task_Info_Ack message
 */
class Net_message_S2CUpdateCdpCurrentTaskInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * C2S_Vmdk_Info message
 */
class Net_message_C2SVmdkInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;
    const CDPVMDKLIST = 3;
    const SIPS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::CDPVMDKLIST => array(
            'name' => 'cdpVmdkList',
            'repeated' => true,
            'type' => 'Net_message_CdpVmdkInfo'
        ),
        self::SIPS => array(
            'name' => 'sIps',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::CDPVMDKLIST] = array();
        $this->values[self::SIPS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Appends value to 'cdpVmdkList' list
     *
     * @param Net_message_CdpVmdkInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpVmdkList(Net_message_CdpVmdkInfo $value)
    {
        return $this->append(self::CDPVMDKLIST, $value);
    }

    /**
     * Clears 'cdpVmdkList' list
     *
     * @return null
     */
    public function clearCdpVmdkList()
    {
        return $this->clear(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' list
     *
     * @return Net_message_CdpVmdkInfo[]
     */
    public function getCdpVmdkList()
    {
        return $this->get(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpVmdkListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPVMDKLIST));
    }

    /**
     * Returns element from 'cdpVmdkList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpVmdkInfo
     */
    public function getCdpVmdkListAt($offset)
    {
        return $this->get(self::CDPVMDKLIST, $offset);
    }

    /**
     * Returns count of 'cdpVmdkList' list
     *
     * @return int
     */
    public function getCdpVmdkListCount()
    {
        return $this->count(self::CDPVMDKLIST);
    }

    /**
     * Sets value of 'sIps' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSIps($value)
    {
        return $this->set(self::SIPS, $value);
    }

    /**
     * Returns value of 'sIps' property
     *
     * @return string
     */
    public function getSIps()
    {
        return $this->get(self::SIPS);
    }
}

/**
 * S2C_Vmdk_Info message
 */
class Net_message_S2CVmdkInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CDPVMDKLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CDPVMDKLIST => array(
            'name' => 'cdpVmdkList',
            'repeated' => true,
            'type' => 'Net_message_CdpVmdkInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CDPVMDKLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Appends value to 'cdpVmdkList' list
     *
     * @param Net_message_CdpVmdkInfo $value Value to append
     *
     * @return null
     */
    public function appendCdpVmdkList(Net_message_CdpVmdkInfo $value)
    {
        return $this->append(self::CDPVMDKLIST, $value);
    }

    /**
     * Clears 'cdpVmdkList' list
     *
     * @return null
     */
    public function clearCdpVmdkList()
    {
        return $this->clear(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' list
     *
     * @return Net_message_CdpVmdkInfo[]
     */
    public function getCdpVmdkList()
    {
        return $this->get(self::CDPVMDKLIST);
    }

    /**
     * Returns 'cdpVmdkList' iterator
     *
     * @return ArrayIterator
     */
    public function getCdpVmdkListIterator()
    {
        return new \ArrayIterator($this->get(self::CDPVMDKLIST));
    }

    /**
     * Returns element from 'cdpVmdkList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_CdpVmdkInfo
     */
    public function getCdpVmdkListAt($offset)
    {
        return $this->get(self::CDPVMDKLIST, $offset);
    }

    /**
     * Returns count of 'cdpVmdkList' list
     *
     * @return int
     */
    public function getCdpVmdkListCount()
    {
        return $this->count(self::CDPVMDKLIST);
    }
}

/**
 * C2S_Update_Cdp_Task_Status message
 */
class Net_message_C2SUpdateCdpTaskStatus extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;
    const NDISKID = 3;
    const NPARTID = 4;
    const NPOS = 5;
    const NSEQ = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::NDISKID => array(
            'name' => 'nDiskId',
            'required' => true,
            'type' => 5,
        ),
        self::NPARTID => array(
            'name' => 'nPartId',
            'required' => true,
            'type' => 5,
        ),
        self::NPOS => array(
            'name' => 'nPos',
            'required' => true,
            'type' => 5,
        ),
        self::NSEQ => array(
            'name' => 'nSeq',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::NDISKID] = null;
        $this->values[self::NPARTID] = null;
        $this->values[self::NPOS] = null;
        $this->values[self::NSEQ] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Sets value of 'nDiskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNDiskId($value)
    {
        return $this->set(self::NDISKID, $value);
    }

    /**
     * Returns value of 'nDiskId' property
     *
     * @return int
     */
    public function getNDiskId()
    {
        return $this->get(self::NDISKID);
    }

    /**
     * Sets value of 'nPartId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPartId($value)
    {
        return $this->set(self::NPARTID, $value);
    }

    /**
     * Returns value of 'nPartId' property
     *
     * @return int
     */
    public function getNPartId()
    {
        return $this->get(self::NPARTID);
    }

    /**
     * Sets value of 'nPos' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPos($value)
    {
        return $this->set(self::NPOS, $value);
    }

    /**
     * Returns value of 'nPos' property
     *
     * @return int
     */
    public function getNPos()
    {
        return $this->get(self::NPOS);
    }

    /**
     * Sets value of 'nSeq' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSeq($value)
    {
        return $this->set(self::NSEQ, $value);
    }

    /**
     * Returns value of 'nSeq' property
     *
     * @return int
     */
    public function getNSeq()
    {
        return $this->get(self::NSEQ);
    }
}

/**
 * S2M_Update_Cdp_Task_Status message
 */
class Net_message_S2MUpdateCdpTaskStatus extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NTASKID = 2;
    const NDISKID = 3;
    const NPARTID = 4;
    const NPOS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NTASKID => array(
            'name' => 'nTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::NDISKID => array(
            'name' => 'nDiskId',
            'required' => true,
            'type' => 5,
        ),
        self::NPARTID => array(
            'name' => 'nPartId',
            'required' => true,
            'type' => 5,
        ),
        self::NPOS => array(
            'name' => 'nPos',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NTASKID] = null;
        $this->values[self::NDISKID] = null;
        $this->values[self::NPARTID] = null;
        $this->values[self::NPOS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNTaskId($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskId' property
     *
     * @return int
     */
    public function getNTaskId()
    {
        return $this->get(self::NTASKID);
    }

    /**
     * Sets value of 'nDiskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNDiskId($value)
    {
        return $this->set(self::NDISKID, $value);
    }

    /**
     * Returns value of 'nDiskId' property
     *
     * @return int
     */
    public function getNDiskId()
    {
        return $this->get(self::NDISKID);
    }

    /**
     * Sets value of 'nPartId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPartId($value)
    {
        return $this->set(self::NPARTID, $value);
    }

    /**
     * Returns value of 'nPartId' property
     *
     * @return int
     */
    public function getNPartId()
    {
        return $this->get(self::NPARTID);
    }

    /**
     * Sets value of 'nPos' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNPos($value)
    {
        return $this->set(self::NPOS, $value);
    }

    /**
     * Returns value of 'nPos' property
     *
     * @return int
     */
    public function getNPos()
    {
        return $this->get(self::NPOS);
    }
}

/**
 * Timer_Server_Config message
 */
class Net_message_TimerServerConfig extends \ProtobufMessage
{
    /* Field index constants */
    const IPADDR = 1;
    const PORT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IPADDR => array(
            'default' => '\"\"', 
            'name' => 'ipaddr',
            'required' => true,
            'type' => 7,
        ),
        self::PORT => array(
            'default' => 0, 
            'name' => 'port',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::IPADDR] = null;
        $this->values[self::PORT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'ipaddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIpaddr($value)
    {
        return $this->set(self::IPADDR, $value);
    }

    /**
     * Returns value of 'ipaddr' property
     *
     * @return string
     */
    public function getIpaddr()
    {
        return $this->get(self::IPADDR);
    }

    /**
     * Sets value of 'port' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPort($value)
    {
        return $this->set(self::PORT, $value);
    }

    /**
     * Returns value of 'port' property
     *
     * @return int
     */
    public function getPort()
    {
        return $this->get(self::PORT);
    }
}

/**
 * T2M_Register_Timer message
 */
class Net_message_T2MRegisterTimer extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const TIMERSERVERCONFIG = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::TIMERSERVERCONFIG => array(
            'name' => 'timerServerConfig',
            'required' => true,
            'type' => 'Net_message_TimerServerConfig'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::TIMERSERVERCONFIG] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'timerServerConfig' property
     *
     * @param Net_message_TimerServerConfig $value Property value
     *
     * @return null
     */
    public function setTimerServerConfig(Net_message_TimerServerConfig $value)
    {
        return $this->set(self::TIMERSERVERCONFIG, $value);
    }

    /**
     * Returns value of 'timerServerConfig' property
     *
     * @return Net_message_TimerServerConfig
     */
    public function getTimerServerConfig()
    {
        return $this->get(self::TIMERSERVERCONFIG);
    }
}

/**
 * M2T_Register_Timer_Ack message
 */
class Net_message_M2TRegisterTimerAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * P2T_Config_Timer message
 */
class Net_message_P2TConfigTimer extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const TIMERINFO = 2;
    const VHOSTSOURCEIP = 3;
    const ISUSED = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::TIMERINFO => array(
            'name' => 'timerInfo',
            'repeated' => true,
            'type' => 'Net_message_TimerInfo'
        ),
        self::VHOSTSOURCEIP => array(
            'default' => '\"\"', 
            'name' => 'vhostSourceIP',
            'required' => true,
            'type' => 7,
        ),
        self::ISUSED => array(
            'default' => 0, 
            'name' => 'isUsed',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::TIMERINFO] = array();
        $this->values[self::VHOSTSOURCEIP] = null;
        $this->values[self::ISUSED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Appends value to 'timerInfo' list
     *
     * @param Net_message_TimerInfo $value Value to append
     *
     * @return null
     */
    public function appendTimerInfo(Net_message_TimerInfo $value)
    {
        return $this->append(self::TIMERINFO, $value);
    }

    /**
     * Clears 'timerInfo' list
     *
     * @return null
     */
    public function clearTimerInfo()
    {
        return $this->clear(self::TIMERINFO);
    }

    /**
     * Returns 'timerInfo' list
     *
     * @return Net_message_TimerInfo[]
     */
    public function getTimerInfo()
    {
        return $this->get(self::TIMERINFO);
    }

    /**
     * Returns 'timerInfo' iterator
     *
     * @return ArrayIterator
     */
    public function getTimerInfoIterator()
    {
        return new \ArrayIterator($this->get(self::TIMERINFO));
    }

    /**
     * Returns element from 'timerInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_TimerInfo
     */
    public function getTimerInfoAt($offset)
    {
        return $this->get(self::TIMERINFO, $offset);
    }

    /**
     * Returns count of 'timerInfo' list
     *
     * @return int
     */
    public function getTimerInfoCount()
    {
        return $this->count(self::TIMERINFO);
    }

    /**
     * Sets value of 'vhostSourceIP' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVhostSourceIP($value)
    {
        return $this->set(self::VHOSTSOURCEIP, $value);
    }

    /**
     * Returns value of 'vhostSourceIP' property
     *
     * @return string
     */
    public function getVhostSourceIP()
    {
        return $this->get(self::VHOSTSOURCEIP);
    }

    /**
     * Sets value of 'isUsed' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsUsed($value)
    {
        return $this->set(self::ISUSED, $value);
    }

    /**
     * Returns value of 'isUsed' property
     *
     * @return int
     */
    public function getIsUsed()
    {
        return $this->get(self::ISUSED);
    }
}

/**
 * T2P_Config_Timer_Ack message
 */
class Net_message_T2PConfigTimerAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * T2P_Timer_Notify message
 */
class Net_message_T2PTimerNotify extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const ACTIONTYPE = 2;
    const VHOSTSOURCEIP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::ACTIONTYPE => array(
            'default' => 0, 
            'name' => 'actionType',
            'required' => true,
            'type' => 5,
        ),
        self::VHOSTSOURCEIP => array(
            'default' => '\"\"', 
            'name' => 'vhostSourceIP',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::ACTIONTYPE] = null;
        $this->values[self::VHOSTSOURCEIP] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'actionType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setActionType($value)
    {
        return $this->set(self::ACTIONTYPE, $value);
    }

    /**
     * Returns value of 'actionType' property
     *
     * @return int
     */
    public function getActionType()
    {
        return $this->get(self::ACTIONTYPE);
    }

    /**
     * Sets value of 'vhostSourceIP' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVhostSourceIP($value)
    {
        return $this->set(self::VHOSTSOURCEIP, $value);
    }

    /**
     * Returns value of 'vhostSourceIP' property
     *
     * @return string
     */
    public function getVhostSourceIP()
    {
        return $this->get(self::VHOSTSOURCEIP);
    }
}

/**
 * P2T_Timer_Notify_Ack message
 */
class Net_message_P2TTimerNotifyAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * Timer_Info message
 */
class Net_message_TimerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ACTIONTYPE = 1;
    const WORKTYPE = 2;
    const MONTHFORMAT = 3;
    const DAYFORMAT = 4;
    const WEEKDAYFORMAT = 5;
    const STARTTIME = 6;
    const STOPTIME = 7;
    const TIMEINTERVAL = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTIONTYPE => array(
            'default' => 0, 
            'name' => 'actionType',
            'required' => true,
            'type' => 5,
        ),
        self::WORKTYPE => array(
            'default' => 0, 
            'name' => 'workType',
            'required' => true,
            'type' => 5,
        ),
        self::MONTHFORMAT => array(
            'default' => '\"\"', 
            'name' => 'monthFormat',
            'required' => true,
            'type' => 7,
        ),
        self::DAYFORMAT => array(
            'default' => '\"\"', 
            'name' => 'dayFormat',
            'required' => true,
            'type' => 7,
        ),
        self::WEEKDAYFORMAT => array(
            'default' => '\"\"', 
            'name' => 'weekdayFormat',
            'required' => true,
            'type' => 7,
        ),
        self::STARTTIME => array(
            'default' => '\"\"', 
            'name' => 'startTime',
            'required' => true,
            'type' => 7,
        ),
        self::STOPTIME => array(
            'default' => '\"\"', 
            'name' => 'stopTime',
            'required' => true,
            'type' => 7,
        ),
        self::TIMEINTERVAL => array(
            'default' => 0, 
            'name' => 'timeInterval',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::ACTIONTYPE] = null;
        $this->values[self::WORKTYPE] = null;
        $this->values[self::MONTHFORMAT] = null;
        $this->values[self::DAYFORMAT] = null;
        $this->values[self::WEEKDAYFORMAT] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::STOPTIME] = null;
        $this->values[self::TIMEINTERVAL] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'actionType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setActionType($value)
    {
        return $this->set(self::ACTIONTYPE, $value);
    }

    /**
     * Returns value of 'actionType' property
     *
     * @return int
     */
    public function getActionType()
    {
        return $this->get(self::ACTIONTYPE);
    }

    /**
     * Sets value of 'workType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setWorkType($value)
    {
        return $this->set(self::WORKTYPE, $value);
    }

    /**
     * Returns value of 'workType' property
     *
     * @return int
     */
    public function getWorkType()
    {
        return $this->get(self::WORKTYPE);
    }

    /**
     * Sets value of 'monthFormat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMonthFormat($value)
    {
        return $this->set(self::MONTHFORMAT, $value);
    }

    /**
     * Returns value of 'monthFormat' property
     *
     * @return string
     */
    public function getMonthFormat()
    {
        return $this->get(self::MONTHFORMAT);
    }

    /**
     * Sets value of 'dayFormat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDayFormat($value)
    {
        return $this->set(self::DAYFORMAT, $value);
    }

    /**
     * Returns value of 'dayFormat' property
     *
     * @return string
     */
    public function getDayFormat()
    {
        return $this->get(self::DAYFORMAT);
    }

    /**
     * Sets value of 'weekdayFormat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeekdayFormat($value)
    {
        return $this->set(self::WEEKDAYFORMAT, $value);
    }

    /**
     * Returns value of 'weekdayFormat' property
     *
     * @return string
     */
    public function getWeekdayFormat()
    {
        return $this->get(self::WEEKDAYFORMAT);
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value)
    {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->get(self::STARTTIME);
    }

    /**
     * Sets value of 'stopTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStopTime($value)
    {
        return $this->set(self::STOPTIME, $value);
    }

    /**
     * Returns value of 'stopTime' property
     *
     * @return string
     */
    public function getStopTime()
    {
        return $this->get(self::STOPTIME);
    }

    /**
     * Sets value of 'timeInterval' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTimeInterval($value)
    {
        return $this->set(self::TIMEINTERVAL, $value);
    }

    /**
     * Returns value of 'timeInterval' property
     *
     * @return int
     */
    public function getTimeInterval()
    {
        return $this->get(self::TIMEINTERVAL);
    }
}

/**
 * C2T_Config_Timer message
 */
class Net_message_C2TConfigTimer extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const TIMERINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::TIMERINFO => array(
            'name' => 'timerInfo',
            'repeated' => true,
            'type' => 'Net_message_TimerInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::TIMERINFO] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Appends value to 'timerInfo' list
     *
     * @param Net_message_TimerInfo $value Value to append
     *
     * @return null
     */
    public function appendTimerInfo(Net_message_TimerInfo $value)
    {
        return $this->append(self::TIMERINFO, $value);
    }

    /**
     * Clears 'timerInfo' list
     *
     * @return null
     */
    public function clearTimerInfo()
    {
        return $this->clear(self::TIMERINFO);
    }

    /**
     * Returns 'timerInfo' list
     *
     * @return Net_message_TimerInfo[]
     */
    public function getTimerInfo()
    {
        return $this->get(self::TIMERINFO);
    }

    /**
     * Returns 'timerInfo' iterator
     *
     * @return ArrayIterator
     */
    public function getTimerInfoIterator()
    {
        return new \ArrayIterator($this->get(self::TIMERINFO));
    }

    /**
     * Returns element from 'timerInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_TimerInfo
     */
    public function getTimerInfoAt($offset)
    {
        return $this->get(self::TIMERINFO, $offset);
    }

    /**
     * Returns count of 'timerInfo' list
     *
     * @return int
     */
    public function getTimerInfoCount()
    {
        return $this->count(self::TIMERINFO);
    }
}

/**
 * T2C_Config_Timer_Ack message
 */
class Net_message_T2CConfigTimerAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * T2C_Timer_Notify message
 */
class Net_message_T2CTimerNotify extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const ACTIONTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::ACTIONTYPE => array(
            'default' => 0, 
            'name' => 'actionType',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::ACTIONTYPE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'actionType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setActionType($value)
    {
        return $this->set(self::ACTIONTYPE, $value);
    }

    /**
     * Returns value of 'actionType' property
     *
     * @return int
     */
    public function getActionType()
    {
        return $this->get(self::ACTIONTYPE);
    }
}

/**
 * C2T_Timer_Notify_Ack message
 */
class Net_message_C2TTimerNotifyAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;
    const CODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * M2P_Register_Move message
 */
class Net_message_M2PRegisterMove extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const MOVEID = 2;
    const MOVECONFIG = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::MOVEID => array(
            'default' => '\"\"', 
            'name' => 'moveId',
            'required' => true,
            'type' => 7,
        ),
        self::MOVECONFIG => array(
            'name' => 'moveConfig',
            'required' => true,
            'type' => 'Net_message_MoveConfig'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::MOVEID] = null;
        $this->values[self::MOVECONFIG] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'moveId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMoveId($value)
    {
        return $this->set(self::MOVEID, $value);
    }

    /**
     * Returns value of 'moveId' property
     *
     * @return string
     */
    public function getMoveId()
    {
        return $this->get(self::MOVEID);
    }

    /**
     * Sets value of 'moveConfig' property
     *
     * @param Net_message_MoveConfig $value Property value
     *
     * @return null
     */
    public function setMoveConfig(Net_message_MoveConfig $value)
    {
        return $this->set(self::MOVECONFIG, $value);
    }

    /**
     * Returns value of 'moveConfig' property
     *
     * @return Net_message_MoveConfig
     */
    public function getMoveConfig()
    {
        return $this->get(self::MOVECONFIG);
    }
}

/**
 * P2M_Register_Move_Ack message
 */
class Net_message_P2MRegisterMoveAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * File_Info message
 */
class Net_message_FileInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FILE_PATH = 1;
    const FILE_SIZE = 2;
    const FILE_OFFSET = 3;
    const HARDDISK_INDEX = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FILE_PATH => array(
            'default' => '\"\"', 
            'name' => 'file_path',
            'required' => true,
            'type' => 7,
        ),
        self::FILE_SIZE => array(
            'default' => 0, 
            'name' => 'file_size',
            'required' => true,
            'type' => 5,
        ),
        self::FILE_OFFSET => array(
            'default' => 0, 
            'name' => 'file_offset',
            'required' => true,
            'type' => 5,
        ),
        self::HARDDISK_INDEX => array(
            'default' => 0, 
            'name' => 'harddisk_index',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::FILE_PATH] = null;
        $this->values[self::FILE_SIZE] = null;
        $this->values[self::FILE_OFFSET] = null;
        $this->values[self::HARDDISK_INDEX] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'file_path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFilePath($value)
    {
        return $this->set(self::FILE_PATH, $value);
    }

    /**
     * Returns value of 'file_path' property
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->get(self::FILE_PATH);
    }

    /**
     * Sets value of 'file_size' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFileSize($value)
    {
        return $this->set(self::FILE_SIZE, $value);
    }

    /**
     * Returns value of 'file_size' property
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->get(self::FILE_SIZE);
    }

    /**
     * Sets value of 'file_offset' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFileOffset($value)
    {
        return $this->set(self::FILE_OFFSET, $value);
    }

    /**
     * Returns value of 'file_offset' property
     *
     * @return int
     */
    public function getFileOffset()
    {
        return $this->get(self::FILE_OFFSET);
    }

    /**
     * Sets value of 'harddisk_index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHarddiskIndex($value)
    {
        return $this->set(self::HARDDISK_INDEX, $value);
    }

    /**
     * Returns value of 'harddisk_index' property
     *
     * @return int
     */
    public function getHarddiskIndex()
    {
        return $this->get(self::HARDDISK_INDEX);
    }
}

/**
 * P2M_Start_Recover message
 */
class Net_message_P2MStartRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const RECOVERTASKID = 3;
    const STORAGEINFO = 4;
    const FILEINFO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::RECOVERTASKID => array(
            'default' => 0, 
            'name' => 'recoverTaskid',
            'required' => true,
            'type' => 5,
        ),
        self::STORAGEINFO => array(
            'default' => '\"\"', 
            'name' => 'storageInfo',
            'required' => true,
            'type' => 7,
        ),
        self::FILEINFO => array(
            'name' => 'fileInfo',
            'repeated' => true,
            'type' => 'Net_message_FileInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::RECOVERTASKID] = null;
        $this->values[self::STORAGEINFO] = null;
        $this->values[self::FILEINFO] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'recoverTaskid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecoverTaskid($value)
    {
        return $this->set(self::RECOVERTASKID, $value);
    }

    /**
     * Returns value of 'recoverTaskid' property
     *
     * @return int
     */
    public function getRecoverTaskid()
    {
        return $this->get(self::RECOVERTASKID);
    }

    /**
     * Sets value of 'storageInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorageInfo($value)
    {
        return $this->set(self::STORAGEINFO, $value);
    }

    /**
     * Returns value of 'storageInfo' property
     *
     * @return string
     */
    public function getStorageInfo()
    {
        return $this->get(self::STORAGEINFO);
    }

    /**
     * Appends value to 'fileInfo' list
     *
     * @param Net_message_FileInfo $value Value to append
     *
     * @return null
     */
    public function appendFileInfo(Net_message_FileInfo $value)
    {
        return $this->append(self::FILEINFO, $value);
    }

    /**
     * Clears 'fileInfo' list
     *
     * @return null
     */
    public function clearFileInfo()
    {
        return $this->clear(self::FILEINFO);
    }

    /**
     * Returns 'fileInfo' list
     *
     * @return Net_message_FileInfo[]
     */
    public function getFileInfo()
    {
        return $this->get(self::FILEINFO);
    }

    /**
     * Returns 'fileInfo' iterator
     *
     * @return ArrayIterator
     */
    public function getFileInfoIterator()
    {
        return new \ArrayIterator($this->get(self::FILEINFO));
    }

    /**
     * Returns element from 'fileInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_FileInfo
     */
    public function getFileInfoAt($offset)
    {
        return $this->get(self::FILEINFO, $offset);
    }

    /**
     * Returns count of 'fileInfo' list
     *
     * @return int
     */
    public function getFileInfoCount()
    {
        return $this->count(self::FILEINFO);
    }
}

/**
 * M2P_Start_Recover_Ack message
 */
class Net_message_M2PStartRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * P2M_Get_Recovering_Info message
 */
class Net_message_P2MGetRecoveringInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2P_Get_Recovering_Info_Ack message
 */
class Net_message_M2PGetRecoveringInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const RECOVERINGINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::RECOVERINGINFO => array(
            'name' => 'recoveringInfo',
            'required' => true,
            'type' => 'Net_message_RecoveringInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::RECOVERINGINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'recoveringInfo' property
     *
     * @param Net_message_RecoveringInfo $value Property value
     *
     * @return null
     */
    public function setRecoveringInfo(Net_message_RecoveringInfo $value)
    {
        return $this->set(self::RECOVERINGINFO, $value);
    }

    /**
     * Returns value of 'recoveringInfo' property
     *
     * @return Net_message_RecoveringInfo
     */
    public function getRecoveringInfo()
    {
        return $this->get(self::RECOVERINGINFO);
    }
}

/**
 * P2M_Get_Migrating_Info message
 */
class Net_message_P2MGetMigratingInfo extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const MOVEID = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::MOVEID => array(
            'default' => '\"\"', 
            'name' => 'moveId',
            'required' => true,
            'type' => 7,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::MOVEID] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'moveId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMoveId($value)
    {
        return $this->set(self::MOVEID, $value);
    }

    /**
     * Returns value of 'moveId' property
     *
     * @return string
     */
    public function getMoveId()
    {
        return $this->get(self::MOVEID);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2P_Get_Migrating_Info_Ack message
 */
class Net_message_M2PGetMigratingInfoAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;
    const MIGRATINGINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::MIGRATINGINFO => array(
            'name' => 'MigratingInfo',
            'required' => true,
            'type' => 'Net_message_MigratingInfo'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::MIGRATINGINFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'MigratingInfo' property
     *
     * @param Net_message_MigratingInfo $value Property value
     *
     * @return null
     */
    public function setMigratingInfo(Net_message_MigratingInfo $value)
    {
        return $this->set(self::MIGRATINGINFO, $value);
    }

    /**
     * Returns value of 'MigratingInfo' property
     *
     * @return Net_message_MigratingInfo
     */
    public function getMigratingInfo()
    {
        return $this->get(self::MIGRATINGINFO);
    }
}

/**
 * P2M_Start_Migrate message
 */
class Net_message_P2MStartMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const MOVETASKID = 3;
    const HARDDISKVERSUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::MOVETASKID => array(
            'default' => 0, 
            'name' => 'moveTaskId',
            'required' => true,
            'type' => 5,
        ),
        self::HARDDISKVERSUS => array(
            'default' => '\"\"', 
            'name' => 'harddiskVersus',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::MOVETASKID] = null;
        $this->values[self::HARDDISKVERSUS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'moveTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMoveTaskId($value)
    {
        return $this->set(self::MOVETASKID, $value);
    }

    /**
     * Returns value of 'moveTaskId' property
     *
     * @return int
     */
    public function getMoveTaskId()
    {
        return $this->get(self::MOVETASKID);
    }

    /**
     * Sets value of 'harddiskVersus' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHarddiskVersus($value)
    {
        return $this->set(self::HARDDISKVERSUS, $value);
    }

    /**
     * Returns value of 'harddiskVersus' property
     *
     * @return string
     */
    public function getHarddiskVersus()
    {
        return $this->get(self::HARDDISKVERSUS);
    }
}

/**
 * M2P_Start_Migrate_Ack message
 */
class Net_message_M2PStartMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2P_Finish_Recover message
 */
class Net_message_M2PFinishRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const RECOVERTASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::RECOVERTASKID => array(
            'default' => 0, 
            'name' => 'recoverTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::RECOVERTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'recoverTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecoverTaskId($value)
    {
        return $this->set(self::RECOVERTASKID, $value);
    }

    /**
     * Returns value of 'recoverTaskId' property
     *
     * @return int
     */
    public function getRecoverTaskId()
    {
        return $this->get(self::RECOVERTASKID);
    }
}

/**
 * P2M_Finish_Recover_Ack message
 */
class Net_message_P2MFinishRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * M2P_Finish_Migrate message
 */
class Net_message_M2PFinishMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const MOVETASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::MOVETASKID => array(
            'default' => 0, 
            'name' => 'moveTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::MOVETASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'moveTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMoveTaskId($value)
    {
        return $this->set(self::MOVETASKID, $value);
    }

    /**
     * Returns value of 'moveTaskId' property
     *
     * @return int
     */
    public function getMoveTaskId()
    {
        return $this->get(self::MOVETASKID);
    }
}

/**
 * P2M_Finish_Migrate_Ack message
 */
class Net_message_P2MFinishMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * P2M_Stop_Migrate message
 */
class Net_message_P2MStopMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const MIGRATETASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::MIGRATETASKID => array(
            'default' => 0, 
            'name' => 'migrateTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::MIGRATETASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'migrateTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMigrateTaskId($value)
    {
        return $this->set(self::MIGRATETASKID, $value);
    }

    /**
     * Returns value of 'migrateTaskId' property
     *
     * @return int
     */
    public function getMigrateTaskId()
    {
        return $this->get(self::MIGRATETASKID);
    }
}

/**
 * M2P_Stop_Migrate_Ack message
 */
class Net_message_M2PStopMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * P2M_Stop_Recover message
 */
class Net_message_P2MStopRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const RECOVERTASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::RECOVERTASKID => array(
            'default' => 0, 
            'name' => 'recoverTaskId',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::RECOVERTASKID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'recoverTaskId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecoverTaskId($value)
    {
        return $this->set(self::RECOVERTASKID, $value);
    }

    /**
     * Returns value of 'recoverTaskId' property
     *
     * @return int
     */
    public function getRecoverTaskId()
    {
        return $this->get(self::RECOVERTASKID);
    }
}

/**
 * M2P_Stop_Recover_Ack message
 */
class Net_message_M2PStopRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * Sector message
 */
class Net_message_Sector extends \ProtobufMessage
{
    /* Field index constants */
    const STARTOFFSET = 1;
    const SECTORDATASIZE = 2;
    const SECTORDATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STARTOFFSET => array(
            'default' => 0, 
            'name' => 'startOffset',
            'required' => true,
            'type' => 5,
        ),
        self::SECTORDATASIZE => array(
            'default' => 0, 
            'name' => 'sectorDataSize',
            'required' => true,
            'type' => 5,
        ),
        self::SECTORDATA => array(
            'name' => 'sectorData',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::STARTOFFSET] = null;
        $this->values[self::SECTORDATASIZE] = null;
        $this->values[self::SECTORDATA] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'startOffset' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStartOffset($value)
    {
        return $this->set(self::STARTOFFSET, $value);
    }

    /**
     * Returns value of 'startOffset' property
     *
     * @return int
     */
    public function getStartOffset()
    {
        return $this->get(self::STARTOFFSET);
    }

    /**
     * Sets value of 'sectorDataSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSectorDataSize($value)
    {
        return $this->set(self::SECTORDATASIZE, $value);
    }

    /**
     * Returns value of 'sectorDataSize' property
     *
     * @return int
     */
    public function getSectorDataSize()
    {
        return $this->get(self::SECTORDATASIZE);
    }

    /**
     * Sets value of 'sectorData' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSectorData($value)
    {
        return $this->set(self::SECTORDATA, $value);
    }

    /**
     * Returns value of 'sectorData' property
     *
     * @return string
     */
    public function getSectorData()
    {
        return $this->get(self::SECTORDATA);
    }
}

/**
 * M2S_Start_Recover message
 */
class Net_message_M2SStartRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 2;
    const FILE_PATH = 3;
    const FILE_SIZE = 4;
    const FILE_OFFSET = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
        self::FILE_PATH => array(
            'default' => '\"\"', 
            'name' => 'file_path',
            'required' => true,
            'type' => 7,
        ),
        self::FILE_SIZE => array(
            'default' => 0, 
            'name' => 'file_size',
            'required' => true,
            'type' => 5,
        ),
        self::FILE_OFFSET => array(
            'default' => 0, 
            'name' => 'file_offset',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
        $this->values[self::FILE_PATH] = null;
        $this->values[self::FILE_SIZE] = null;
        $this->values[self::FILE_OFFSET] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }

    /**
     * Sets value of 'file_path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFilePath($value)
    {
        return $this->set(self::FILE_PATH, $value);
    }

    /**
     * Returns value of 'file_path' property
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->get(self::FILE_PATH);
    }

    /**
     * Sets value of 'file_size' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFileSize($value)
    {
        return $this->set(self::FILE_SIZE, $value);
    }

    /**
     * Returns value of 'file_size' property
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->get(self::FILE_SIZE);
    }

    /**
     * Sets value of 'file_offset' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFileOffset($value)
    {
        return $this->set(self::FILE_OFFSET, $value);
    }

    /**
     * Returns value of 'file_offset' property
     *
     * @return int
     */
    public function getFileOffset()
    {
        return $this->get(self::FILE_OFFSET);
    }
}

/**
 * S2M_Start_Recover_Ack message
 */
class Net_message_S2MStartRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * S2M_Recover_Sector message
 */
class Net_message_S2MRecoverSector extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const HARDDISKINDEX = 2;
    const SECTORLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::HARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'harddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::SECTORLIST => array(
            'name' => 'sectorList',
            'repeated' => true,
            'type' => 'Net_message_SectorData'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::HARDDISKINDEX] = null;
        $this->values[self::SECTORLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'harddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHarddiskIndex($value)
    {
        return $this->set(self::HARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'harddiskIndex' property
     *
     * @return int
     */
    public function getHarddiskIndex()
    {
        return $this->get(self::HARDDISKINDEX);
    }

    /**
     * Appends value to 'sectorList' list
     *
     * @param Net_message_SectorData $value Value to append
     *
     * @return null
     */
    public function appendSectorList(Net_message_SectorData $value)
    {
        return $this->append(self::SECTORLIST, $value);
    }

    /**
     * Clears 'sectorList' list
     *
     * @return null
     */
    public function clearSectorList()
    {
        return $this->clear(self::SECTORLIST);
    }

    /**
     * Returns 'sectorList' list
     *
     * @return Net_message_SectorData[]
     */
    public function getSectorList()
    {
        return $this->get(self::SECTORLIST);
    }

    /**
     * Returns 'sectorList' iterator
     *
     * @return ArrayIterator
     */
    public function getSectorListIterator()
    {
        return new \ArrayIterator($this->get(self::SECTORLIST));
    }

    /**
     * Returns element from 'sectorList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_SectorData
     */
    public function getSectorListAt($offset)
    {
        return $this->get(self::SECTORLIST, $offset);
    }

    /**
     * Returns count of 'sectorList' list
     *
     * @return int
     */
    public function getSectorListCount()
    {
        return $this->count(self::SECTORLIST);
    }
}

/**
 * M2S_Recover_Sector_Ack message
 */
class Net_message_M2SRecoverSectorAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * S2M_Finish_Recover message
 */
class Net_message_S2MFinishRecover extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }
}

/**
 * M2S_Finish_Recover_Ack message
 */
class Net_message_M2SFinishRecoverAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * C2M_Start_Migrate message
 */
class Net_message_C2MStartMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * M2C_Start_Migrate_Ack message
 */
class Net_message_M2CStartMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;
    const WEBID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
        self::WEBID => array(
            'default' => '\"\"', 
            'name' => 'webId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
        $this->values[self::WEBID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'webId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWebId($value)
    {
        return $this->set(self::WEBID, $value);
    }

    /**
     * Returns value of 'webId' property
     *
     * @return string
     */
    public function getWebId()
    {
        return $this->get(self::WEBID);
    }
}

/**
 * C2M_Migrate_Sector message
 */
class Net_message_C2MMigrateSector extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const HARDDISKINDEX = 2;
    const SECTORLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::HARDDISKINDEX => array(
            'default' => 0, 
            'name' => 'harddiskIndex',
            'required' => true,
            'type' => 5,
        ),
        self::SECTORLIST => array(
            'name' => 'sectorList',
            'repeated' => true,
            'type' => 'Net_message_Sector'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::HARDDISKINDEX] = null;
        $this->values[self::SECTORLIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'harddiskIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHarddiskIndex($value)
    {
        return $this->set(self::HARDDISKINDEX, $value);
    }

    /**
     * Returns value of 'harddiskIndex' property
     *
     * @return int
     */
    public function getHarddiskIndex()
    {
        return $this->get(self::HARDDISKINDEX);
    }

    /**
     * Appends value to 'sectorList' list
     *
     * @param Net_message_Sector $value Value to append
     *
     * @return null
     */
    public function appendSectorList(Net_message_Sector $value)
    {
        return $this->append(self::SECTORLIST, $value);
    }

    /**
     * Clears 'sectorList' list
     *
     * @return null
     */
    public function clearSectorList()
    {
        return $this->clear(self::SECTORLIST);
    }

    /**
     * Returns 'sectorList' list
     *
     * @return Net_message_Sector[]
     */
    public function getSectorList()
    {
        return $this->get(self::SECTORLIST);
    }

    /**
     * Returns 'sectorList' iterator
     *
     * @return ArrayIterator
     */
    public function getSectorListIterator()
    {
        return new \ArrayIterator($this->get(self::SECTORLIST));
    }

    /**
     * Returns element from 'sectorList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Net_message_Sector
     */
    public function getSectorListAt($offset)
    {
        return $this->get(self::SECTORLIST, $offset);
    }

    /**
     * Returns count of 'sectorList' list
     *
     * @return int
     */
    public function getSectorListCount()
    {
        return $this->count(self::SECTORLIST);
    }
}

/**
 * M2C_Migrate_Sector_Ack message
 */
class Net_message_M2CMigrateSectorAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * C2M_Finish_Migrate message
 */
class Net_message_C2MFinishMigrate extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const DEVICEUNIQUEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::DEVICEUNIQUEID => array(
            'default' => '\"\"', 
            'name' => 'deviceUniqueId',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::DEVICEUNIQUEID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'deviceUniqueId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceUniqueId($value)
    {
        return $this->set(self::DEVICEUNIQUEID, $value);
    }

    /**
     * Returns value of 'deviceUniqueId' property
     *
     * @return string
     */
    public function getDeviceUniqueId()
    {
        return $this->get(self::DEVICEUNIQUEID);
    }
}

/**
 * M2C_Finish_Migrate_Ack message
 */
class Net_message_M2CFinishMigrateAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::CODE => array(
            'default' => 0, 
            'name' => 'code',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::CODE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }
}

/**
 * S2D_Open_File message
 */
class Net_message_S2DOpenFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SPATH => array(
            'name' => 'sPath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSPath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'sPath' property
     *
     * @return string
     */
    public function getSPath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * D2S_Open_File_Ack message
 */
class Net_message_D2SOpenFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NSIZE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NSIZE => array(
            'default' => 0, 
            'name' => 'nSize',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NSIZE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSize($value)
    {
        return $this->set(self::NSIZE, $value);
    }

    /**
     * Returns value of 'nSize' property
     *
     * @return int
     */
    public function getNSize()
    {
        return $this->get(self::NSIZE);
    }
}

/**
 * S2D_Write_File message
 */
class Net_message_S2DWriteFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const NSTARTPOS = 2;
    const DATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::NSTARTPOS => array(
            'name' => 'nStartPos',
            'required' => true,
            'type' => 5,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::NSTARTPOS] = null;
        $this->values[self::DATA] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'nStartPos' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNStartPos($value)
    {
        return $this->set(self::NSTARTPOS, $value);
    }

    /**
     * Returns value of 'nStartPos' property
     *
     * @return int
     */
    public function getNStartPos()
    {
        return $this->get(self::NSTARTPOS);
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }
}

/**
 * D2S_Write_File_Ack message
 */
class Net_message_D2SWriteFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }
}

/**
 * S2D_Close_File message
 */
class Net_message_S2DCloseFile extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SPATH => array(
            'name' => 'sPath',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SPATH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSPath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'sPath' property
     *
     * @return string
     */
    public function getSPath()
    {
        return $this->get(self::SPATH);
    }
}

/**
 * D2S_Close_File_Ack message
 */
class Net_message_D2SCloseFileAck extends \ProtobufMessage
{
    /* Field index constants */
    const HEADER = 1;
    const SPATH = 2;
    const NSIZE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HEADER => array(
            'name' => 'header',
            'required' => true,
            'type' => 'Net_message_PacketHeader'
        ),
        self::SPATH => array(
            'name' => 'sPath',
            'required' => true,
            'type' => 7,
        ),
        self::NSIZE => array(
            'name' => 'nSize',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HEADER] = null;
        $this->values[self::SPATH] = null;
        $this->values[self::NSIZE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'header' property
     *
     * @param Net_message_PacketHeader $value Property value
     *
     * @return null
     */
    public function setHeader(Net_message_PacketHeader $value)
    {
        return $this->set(self::HEADER, $value);
    }

    /**
     * Returns value of 'header' property
     *
     * @return Net_message_PacketHeader
     */
    public function getHeader()
    {
        return $this->get(self::HEADER);
    }

    /**
     * Sets value of 'sPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSPath($value)
    {
        return $this->set(self::SPATH, $value);
    }

    /**
     * Returns value of 'sPath' property
     *
     * @return string
     */
    public function getSPath()
    {
        return $this->get(self::SPATH);
    }

    /**
     * Sets value of 'nSize' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNSize($value)
    {
        return $this->set(self::NSIZE, $value);
    }

    /**
     * Returns value of 'nSize' property
     *
     * @return int
     */
    public function getNSize()
    {
        return $this->get(self::NSIZE);
    }
}
