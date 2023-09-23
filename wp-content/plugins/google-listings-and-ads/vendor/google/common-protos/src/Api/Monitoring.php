<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitoring.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Monitoring configuration of the service.
 * The example below shows how to configure monitored resources and metrics
 * for monitoring. In the example, a monitored resource and two metrics are
 * defined. The `library.googleapis.com/book/returned_count` metric is sent
 * to both producer and consumer projects, whereas the
 * `library.googleapis.com/book/num_overdue` metric is only sent to the
 * consumer project.
 *     monitored_resources:
 *     - type: library.googleapis.com/Branch
 *       display_name: "Library Branch"
 *       description: "A branch of a library."
 *       launch_stage: GA
 *       labels:
 *       - key: resource_container
 *         description: "The Cloud container (ie. project id) for the Branch."
 *       - key: location
 *         description: "The location of the library branch."
 *       - key: branch_id
 *         description: "The id of the branch."
 *     metrics:
 *     - name: library.googleapis.com/book/returned_count
 *       display_name: "Books Returned"
 *       description: "The count of books that have been returned."
 *       launch_stage: GA
 *       metric_kind: DELTA
 *       value_type: INT64
 *       unit: "1"
 *       labels:
 *       - key: customer_id
 *         description: "The id of the customer."
 *     - name: library.googleapis.com/book/num_overdue
 *       display_name: "Books Overdue"
 *       description: "The current number of overdue books."
 *       launch_stage: GA
 *       metric_kind: GAUGE
 *       value_type: INT64
 *       unit: "1"
 *       labels:
 *       - key: customer_id
 *         description: "The id of the customer."
 *     monitoring:
 *       producer_destinations:
 *       - monitored_resource: library.googleapis.com/Branch
 *         metrics:
 *         - library.googleapis.com/book/returned_count
 *       consumer_destinations:
 *       - monitored_resource: library.googleapis.com/Branch
 *         metrics:
 *         - library.googleapis.com/book/returned_count
 *         - library.googleapis.com/book/num_overdue
 *
 * Generated from protobuf message <code>google.api.Monitoring</code>
 */
class Monitoring extends \Google\Protobuf\Internal\Message
{
    /**
     * Monitoring configurations for sending metrics to the producer project.
     * There can be multiple producer destinations. A monitored resource type may
     * appear in multiple monitoring destinations if different aggregations are
     * needed for different sets of metrics associated with that monitored
     * resource type. A monitored resource and metric pair may only be used once
     * in the Monitoring configuration.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination producer_destinations = 1;</code>
     */
    private $producer_destinations;
    /**
     * Monitoring configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations. A monitored resource type may
     * appear in multiple monitoring destinations if different aggregations are
     * needed for different sets of metrics associated with that monitored
     * resource type. A monitored resource and metric pair may only be used once
     * in the Monitoring configuration.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination consumer_destinations = 2;</code>
     */
    private $consumer_destinations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Api\Monitoring\MonitoringDestination>|\Google\Protobuf\Internal\RepeatedField $producer_destinations
     *           Monitoring configurations for sending metrics to the producer project.
     *           There can be multiple producer destinations. A monitored resource type may
     *           appear in multiple monitoring destinations if different aggregations are
     *           needed for different sets of metrics associated with that monitored
     *           resource type. A monitored resource and metric pair may only be used once
     *           in the Monitoring configuration.
     *     @type array<\Google\Api\Monitoring\MonitoringDestination>|\Google\Protobuf\Internal\RepeatedField $consumer_destinations
     *           Monitoring configurations for sending metrics to the consumer project.
     *           There can be multiple consumer destinations. A monitored resource type may
     *           appear in multiple monitoring destinations if different aggregations are
     *           needed for different sets of metrics associated with that monitored
     *           resource type. A monitored resource and metric pair may only be used once
     *           in the Monitoring configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Monitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Monitoring configurations for sending metrics to the producer project.
     * There can be multiple producer destinations. A monitored resource type may
     * appear in multiple monitoring destinations if different aggregations are
     * needed for different sets of metrics associated with that monitored
     * resource type. A monitored resource and metric pair may only be used once
     * in the Monitoring configuration.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination producer_destinations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProducerDestinations()
    {
        return $this->producer_destinations;
    }

    /**
     * Monitoring configurations for sending metrics to the producer project.
     * There can be multiple producer destinations. A monitored resource type may
     * appear in multiple monitoring destinations if different aggregations are
     * needed for different sets of metrics associated with that monitored
     * resource type. A monitored resource and metric pair may only be used once
     * in the Monitoring configuration.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination producer_destinations = 1;</code>
     * @param array<\Google\Api\Monitoring\MonitoringDestination>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProducerDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Monitoring\MonitoringDestination::class);
        $this->producer_destinations = $arr;

        return $this;
    }

    /**
     * Monitoring configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations. A monitored resource type may
     * appear in multiple monitoring destinations if different aggregations are
     * needed for different sets of metrics associated with that monitored
     * resource type. A monitored resource and metric pair may only be used once
     * in the Monitoring configuration.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination consumer_destinations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumerDestinations()
    {
        return $this->consumer_destinations;
    }

    /**
     * Monitoring configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations. A monitored resource type may
     * appear in multiple monitoring destinations if different aggregations are
     * needed for different sets of metrics associated with that monitored
     * resource type. A monitored resource and metric pair may only be used once
     * in the Monitoring configuration.
     *
     * Generated from protobuf field <code>repeated .google.api.Monitoring.MonitoringDestination consumer_destinations = 2;</code>
     * @param array<\Google\Api\Monitoring\MonitoringDestination>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumerDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Monitoring\MonitoringDestination::class);
        $this->consumer_destinations = $arr;

        return $this;
    }

}

