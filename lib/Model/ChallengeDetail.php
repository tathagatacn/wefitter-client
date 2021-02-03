<?php
/**
 * ChallengeDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  WeFitter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WeFitter API
 *
 * This is the WeFitter API
 *
 * OpenAPI spec version: v1.1
 * Contact: hello@wefitter.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WeFitter\Client\Model;

use \ArrayAccess;
use \WeFitter\Client\ObjectSerializer;

/**
 * ChallengeDetail Class Doc Comment
 *
 * @category Class
 * @package  WeFitter\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChallengeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChallengeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
'public_id' => 'string',
'title' => 'string',
'slogan' => 'string',
'start' => '\DateTime',
'end' => '\DateTime',
'type' => 'string',
'goal' => 'string',
'goal_value' => 'int',
'goal_type' => 'string',
'visibility' => 'string',
'num_members' => 'string',
'description' => 'string',
'calculation_method' => 'string',
'goal_progress' => 'float',
'enrollment_method' => 'string',
'members' => '\WeFitter\Client\Model\ProfileListWithEnrolledTeam[]',
'repetition' => 'string',
'avatar' => 'string',
'data_source' => 'string',
'activity_types' => '\WeFitter\Client\Model\ChallengeActivityType[]',
'total_calories' => 'float',
'total_distance' => 'float',
'total_steps' => 'float',
'total_points' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => 'uri',
'public_id' => 'uuid',
'title' => null,
'slogan' => null,
'start' => 'date-time',
'end' => 'date-time',
'type' => null,
'goal' => null,
'goal_value' => null,
'goal_type' => null,
'visibility' => null,
'num_members' => null,
'description' => null,
'calculation_method' => null,
'goal_progress' => null,
'enrollment_method' => null,
'members' => null,
'repetition' => null,
'avatar' => 'uri',
'data_source' => null,
'activity_types' => null,
'total_calories' => null,
'total_distance' => null,
'total_steps' => null,
'total_points' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
'public_id' => 'public_id',
'title' => 'title',
'slogan' => 'slogan',
'start' => 'start',
'end' => 'end',
'type' => 'type',
'goal' => 'goal',
'goal_value' => 'goal_value',
'goal_type' => 'goal_type',
'visibility' => 'visibility',
'num_members' => 'num_members',
'description' => 'description',
'calculation_method' => 'calculation_method',
'goal_progress' => 'goal_progress',
'enrollment_method' => 'enrollment_method',
'members' => 'members',
'repetition' => 'repetition',
'avatar' => 'avatar',
'data_source' => 'data_source',
'activity_types' => 'activity_types',
'total_calories' => 'total_calories',
'total_distance' => 'total_distance',
'total_steps' => 'total_steps',
'total_points' => 'total_points'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
'public_id' => 'setPublicId',
'title' => 'setTitle',
'slogan' => 'setSlogan',
'start' => 'setStart',
'end' => 'setEnd',
'type' => 'setType',
'goal' => 'setGoal',
'goal_value' => 'setGoalValue',
'goal_type' => 'setGoalType',
'visibility' => 'setVisibility',
'num_members' => 'setNumMembers',
'description' => 'setDescription',
'calculation_method' => 'setCalculationMethod',
'goal_progress' => 'setGoalProgress',
'enrollment_method' => 'setEnrollmentMethod',
'members' => 'setMembers',
'repetition' => 'setRepetition',
'avatar' => 'setAvatar',
'data_source' => 'setDataSource',
'activity_types' => 'setActivityTypes',
'total_calories' => 'setTotalCalories',
'total_distance' => 'setTotalDistance',
'total_steps' => 'setTotalSteps',
'total_points' => 'setTotalPoints'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
'public_id' => 'getPublicId',
'title' => 'getTitle',
'slogan' => 'getSlogan',
'start' => 'getStart',
'end' => 'getEnd',
'type' => 'getType',
'goal' => 'getGoal',
'goal_value' => 'getGoalValue',
'goal_type' => 'getGoalType',
'visibility' => 'getVisibility',
'num_members' => 'getNumMembers',
'description' => 'getDescription',
'calculation_method' => 'getCalculationMethod',
'goal_progress' => 'getGoalProgress',
'enrollment_method' => 'getEnrollmentMethod',
'members' => 'getMembers',
'repetition' => 'getRepetition',
'avatar' => 'getAvatar',
'data_source' => 'getDataSource',
'activity_types' => 'getActivityTypes',
'total_calories' => 'getTotalCalories',
'total_distance' => 'getTotalDistance',
'total_steps' => 'getTotalSteps',
'total_points' => 'getTotalPoints'    ];

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
        return self::$swaggerModelName;
    }

    const TYPE_INDIVIDUAL = 'INDIVIDUAL';
const TYPE_GROUP = 'GROUP';
const TYPE_TEAM = 'TEAM';
const GOAL_DAILY = 'DAILY';
const GOAL_TOTAL = 'TOTAL';
const GOAL_WEEKLY = 'WEEKLY';
const GOAL_MONTHLY = 'MONTHLY';
const GOAL_TYPE_POINTS = 'POINTS';
const GOAL_TYPE_DISTANCE = 'DISTANCE';
const GOAL_TYPE_CALORIES = 'CALORIES';
const GOAL_TYPE_DURATION = 'DURATION';
const GOAL_TYPE_STEPS = 'STEPS';
const VISIBILITY__PUBLIC = 'PUBLIC';
const VISIBILITY__PRIVATE = 'PRIVATE';
const CALCULATION_METHOD_SUM = 'SUM';
const CALCULATION_METHOD_AVERAGE = 'AVERAGE';
const ENROLLMENT_METHOD_AUTOMATIC = 'AUTOMATIC';
const ENROLLMENT_METHOD_MANUAL = 'MANUAL';
const REPETITION_NONE = 'NONE';
const REPETITION_STREAK = 'STREAK';
const REPETITION_STICKTOIT = 'STICKTOIT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
self::TYPE_GROUP,
self::TYPE_TEAM,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGoalAllowableValues()
    {
        return [
            self::GOAL_DAILY,
self::GOAL_TOTAL,
self::GOAL_WEEKLY,
self::GOAL_MONTHLY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGoalTypeAllowableValues()
    {
        return [
            self::GOAL_TYPE_POINTS,
self::GOAL_TYPE_DISTANCE,
self::GOAL_TYPE_CALORIES,
self::GOAL_TYPE_DURATION,
self::GOAL_TYPE_STEPS,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PUBLIC,
self::VISIBILITY__PRIVATE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationMethodAllowableValues()
    {
        return [
            self::CALCULATION_METHOD_SUM,
self::CALCULATION_METHOD_AVERAGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnrollmentMethodAllowableValues()
    {
        return [
            self::ENROLLMENT_METHOD_AUTOMATIC,
self::ENROLLMENT_METHOD_MANUAL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepetitionAllowableValues()
    {
        return [
            self::REPETITION_NONE,
self::REPETITION_STREAK,
self::REPETITION_STICKTOIT,        ];
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['slogan'] = isset($data['slogan']) ? $data['slogan'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['goal'] = isset($data['goal']) ? $data['goal'] : null;
        $this->container['goal_value'] = isset($data['goal_value']) ? $data['goal_value'] : null;
        $this->container['goal_type'] = isset($data['goal_type']) ? $data['goal_type'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['num_members'] = isset($data['num_members']) ? $data['num_members'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['calculation_method'] = isset($data['calculation_method']) ? $data['calculation_method'] : null;
        $this->container['goal_progress'] = isset($data['goal_progress']) ? $data['goal_progress'] : null;
        $this->container['enrollment_method'] = isset($data['enrollment_method']) ? $data['enrollment_method'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['repetition'] = isset($data['repetition']) ? $data['repetition'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['activity_types'] = isset($data['activity_types']) ? $data['activity_types'] : null;
        $this->container['total_calories'] = isset($data['total_calories']) ? $data['total_calories'] : null;
        $this->container['total_distance'] = isset($data['total_distance']) ? $data['total_distance'] : null;
        $this->container['total_steps'] = isset($data['total_steps']) ? $data['total_steps'] : null;
        $this->container['total_points'] = isset($data['total_points']) ? $data['total_points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['goal'] === null) {
            $invalidProperties[] = "'goal' can't be null";
        }
        $allowedValues = $this->getGoalAllowableValues();
        if (!is_null($this->container['goal']) && !in_array($this->container['goal'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'goal', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['goal_type'] === null) {
            $invalidProperties[] = "'goal_type' can't be null";
        }
        $allowedValues = $this->getGoalTypeAllowableValues();
        if (!is_null($this->container['goal_type']) && !in_array($this->container['goal_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'goal_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['visibility'] === null) {
            $invalidProperties[] = "'visibility' can't be null";
        }
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['calculation_method'] === null) {
            $invalidProperties[] = "'calculation_method' can't be null";
        }
        $allowedValues = $this->getCalculationMethodAllowableValues();
        if (!is_null($this->container['calculation_method']) && !in_array($this->container['calculation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calculation_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['enrollment_method'] === null) {
            $invalidProperties[] = "'enrollment_method' can't be null";
        }
        $allowedValues = $this->getEnrollmentMethodAllowableValues();
        if (!is_null($this->container['enrollment_method']) && !in_array($this->container['enrollment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'enrollment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['repetition'] === null) {
            $invalidProperties[] = "'repetition' can't be null";
        }
        $allowedValues = $this->getRepetitionAllowableValues();
        if (!is_null($this->container['repetition']) && !in_array($this->container['repetition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'repetition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets public_id
     *
     * @return string
     */
    public function getPublicId()
    {
        return $this->container['public_id'];
    }

    /**
     * Sets public_id
     *
     * @param string $public_id public_id
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->container['slogan'];
    }

    /**
     * Sets slogan
     *
     * @param string $slogan slogan
     *
     * @return $this
     */
    public function setSlogan($slogan)
    {
        $this->container['slogan'] = $slogan;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets goal
     *
     * @return string
     */
    public function getGoal()
    {
        return $this->container['goal'];
    }

    /**
     * Sets goal
     *
     * @param string $goal goal
     *
     * @return $this
     */
    public function setGoal($goal)
    {
        $allowedValues = $this->getGoalAllowableValues();
        if (!in_array($goal, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'goal', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['goal'] = $goal;

        return $this;
    }

    /**
     * Gets goal_value
     *
     * @return int
     */
    public function getGoalValue()
    {
        return $this->container['goal_value'];
    }

    /**
     * Sets goal_value
     *
     * @param int $goal_value goal_value
     *
     * @return $this
     */
    public function setGoalValue($goal_value)
    {
        $this->container['goal_value'] = $goal_value;

        return $this;
    }

    /**
     * Gets goal_type
     *
     * @return string
     */
    public function getGoalType()
    {
        return $this->container['goal_type'];
    }

    /**
     * Sets goal_type
     *
     * @param string $goal_type goal_type
     *
     * @return $this
     */
    public function setGoalType($goal_type)
    {
        $allowedValues = $this->getGoalTypeAllowableValues();
        if (!in_array($goal_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'goal_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['goal_type'] = $goal_type;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string $visibility visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!in_array($visibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets num_members
     *
     * @return string
     */
    public function getNumMembers()
    {
        return $this->container['num_members'];
    }

    /**
     * Sets num_members
     *
     * @param string $num_members num_members
     *
     * @return $this
     */
    public function setNumMembers($num_members)
    {
        $this->container['num_members'] = $num_members;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets calculation_method
     *
     * @return string
     */
    public function getCalculationMethod()
    {
        return $this->container['calculation_method'];
    }

    /**
     * Sets calculation_method
     *
     * @param string $calculation_method calculation_method
     *
     * @return $this
     */
    public function setCalculationMethod($calculation_method)
    {
        $allowedValues = $this->getCalculationMethodAllowableValues();
        if (!in_array($calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calculation_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['calculation_method'] = $calculation_method;

        return $this;
    }

    /**
     * Gets goal_progress
     *
     * @return float
     */
    public function getGoalProgress()
    {
        return $this->container['goal_progress'];
    }

    /**
     * Sets goal_progress
     *
     * @param float $goal_progress Progress towards the goal, from perspective of profile whose bearer is used for authentication: can be an individual/team/global score. When goal is duration, this is the duration in seconds. When an admin token is used, returns 0.0.
     *
     * @return $this
     */
    public function setGoalProgress($goal_progress)
    {
        $this->container['goal_progress'] = $goal_progress;

        return $this;
    }

    /**
     * Gets enrollment_method
     *
     * @return string
     */
    public function getEnrollmentMethod()
    {
        return $this->container['enrollment_method'];
    }

    /**
     * Sets enrollment_method
     *
     * @param string $enrollment_method enrollment_method
     *
     * @return $this
     */
    public function setEnrollmentMethod($enrollment_method)
    {
        $allowedValues = $this->getEnrollmentMethodAllowableValues();
        if (!in_array($enrollment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'enrollment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['enrollment_method'] = $enrollment_method;

        return $this;
    }

    /**
     * Gets members
     *
     * @return \WeFitter\Client\Model\ProfileListWithEnrolledTeam[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param \WeFitter\Client\Model\ProfileListWithEnrolledTeam[] $members List of all profiles participating in this challenge
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets repetition
     *
     * @return string
     */
    public function getRepetition()
    {
        return $this->container['repetition'];
    }

    /**
     * Sets repetition
     *
     * @param string $repetition repetition
     *
     * @return $this
     */
    public function setRepetition($repetition)
    {
        $allowedValues = $this->getRepetitionAllowableValues();
        if (!in_array($repetition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repetition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repetition'] = $repetition;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar avatar
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param string $data_source data_source
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets activity_types
     *
     * @return \WeFitter\Client\Model\ChallengeActivityType[]
     */
    public function getActivityTypes()
    {
        return $this->container['activity_types'];
    }

    /**
     * Sets activity_types
     *
     * @param \WeFitter\Client\Model\ChallengeActivityType[] $activity_types activity_types
     *
     * @return $this
     */
    public function setActivityTypes($activity_types)
    {
        $this->container['activity_types'] = $activity_types;

        return $this;
    }

    /**
     * Gets total_calories
     *
     * @return float
     */
    public function getTotalCalories()
    {
        return $this->container['total_calories'];
    }

    /**
     * Sets total_calories
     *
     * @param float $total_calories total_calories
     *
     * @return $this
     */
    public function setTotalCalories($total_calories)
    {
        $this->container['total_calories'] = $total_calories;

        return $this;
    }

    /**
     * Gets total_distance
     *
     * @return float
     */
    public function getTotalDistance()
    {
        return $this->container['total_distance'];
    }

    /**
     * Sets total_distance
     *
     * @param float $total_distance total_distance
     *
     * @return $this
     */
    public function setTotalDistance($total_distance)
    {
        $this->container['total_distance'] = $total_distance;

        return $this;
    }

    /**
     * Gets total_steps
     *
     * @return float
     */
    public function getTotalSteps()
    {
        return $this->container['total_steps'];
    }

    /**
     * Sets total_steps
     *
     * @param float $total_steps total_steps
     *
     * @return $this
     */
    public function setTotalSteps($total_steps)
    {
        $this->container['total_steps'] = $total_steps;

        return $this;
    }

    /**
     * Gets total_points
     *
     * @return float
     */
    public function getTotalPoints()
    {
        return $this->container['total_points'];
    }

    /**
     * Sets total_points
     *
     * @param float $total_points total_points
     *
     * @return $this
     */
    public function setTotalPoints($total_points)
    {
        $this->container['total_points'] = $total_points;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
