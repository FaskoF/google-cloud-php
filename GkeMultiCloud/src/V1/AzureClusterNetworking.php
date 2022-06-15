<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ClusterNetworking contains cluster-wide networking configuration.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureClusterNetworking</code>
 */
class AzureClusterNetworking extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Azure Resource Manager (ARM) ID of the VNet associated with your
     * cluster.
     * All components in the cluster (i.e. control plane and node pools) run on a
     * single VNet.
     * Example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.Network/virtualNetworks/<vnet-id>`
     * This field cannot be changed after creation.
     *
     * Generated from protobuf field <code>string virtual_network_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $virtual_network_id = '';
    /**
     * Required. The IP address range of the pods in this cluster, in CIDR
     * notation (e.g. `10.96.0.0/14`).
     * All pods in the cluster get assigned a unique IPv4 address from these
     * ranges. Only a single range is supported.
     * This field cannot be changed after creation.
     *
     * Generated from protobuf field <code>repeated string pod_address_cidr_blocks = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $pod_address_cidr_blocks;
    /**
     * Required. The IP address range for services in this cluster, in CIDR
     * notation (e.g. `10.96.0.0/14`).
     * All services in the cluster get assigned a unique IPv4 address from these
     * ranges. Only a single range is supported.
     * This field cannot be changed after creating a cluster.
     *
     * Generated from protobuf field <code>repeated string service_address_cidr_blocks = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_address_cidr_blocks;
    /**
     * Optional. The ARM ID of the subnet where Kubernetes private service type load
     * balancers are deployed. When unspecified, it defaults to
     * AzureControlPlane.subnet_id.
     * Example:
     * "/subscriptions/d00494d6-6f3c-4280-bbb2-899e163d1d30/resourceGroups/anthos_cluster_gkeust4/providers/Microsoft.Network/virtualNetworks/gke-vnet-gkeust4/subnets/subnetid456"
     *
     * Generated from protobuf field <code>string service_load_balancer_subnet_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $service_load_balancer_subnet_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $virtual_network_id
     *           Required. The Azure Resource Manager (ARM) ID of the VNet associated with your
     *           cluster.
     *           All components in the cluster (i.e. control plane and node pools) run on a
     *           single VNet.
     *           Example:
     *           `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.Network/virtualNetworks/<vnet-id>`
     *           This field cannot be changed after creation.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $pod_address_cidr_blocks
     *           Required. The IP address range of the pods in this cluster, in CIDR
     *           notation (e.g. `10.96.0.0/14`).
     *           All pods in the cluster get assigned a unique IPv4 address from these
     *           ranges. Only a single range is supported.
     *           This field cannot be changed after creation.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $service_address_cidr_blocks
     *           Required. The IP address range for services in this cluster, in CIDR
     *           notation (e.g. `10.96.0.0/14`).
     *           All services in the cluster get assigned a unique IPv4 address from these
     *           ranges. Only a single range is supported.
     *           This field cannot be changed after creating a cluster.
     *     @type string $service_load_balancer_subnet_id
     *           Optional. The ARM ID of the subnet where Kubernetes private service type load
     *           balancers are deployed. When unspecified, it defaults to
     *           AzureControlPlane.subnet_id.
     *           Example:
     *           "/subscriptions/d00494d6-6f3c-4280-bbb2-899e163d1d30/resourceGroups/anthos_cluster_gkeust4/providers/Microsoft.Network/virtualNetworks/gke-vnet-gkeust4/subnets/subnetid456"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Azure Resource Manager (ARM) ID of the VNet associated with your
     * cluster.
     * All components in the cluster (i.e. control plane and node pools) run on a
     * single VNet.
     * Example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.Network/virtualNetworks/<vnet-id>`
     * This field cannot be changed after creation.
     *
     * Generated from protobuf field <code>string virtual_network_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVirtualNetworkId()
    {
        return $this->virtual_network_id;
    }

    /**
     * Required. The Azure Resource Manager (ARM) ID of the VNet associated with your
     * cluster.
     * All components in the cluster (i.e. control plane and node pools) run on a
     * single VNet.
     * Example:
     * `/subscriptions/<subscription-id>/resourceGroups/<resource-group-id>/providers/Microsoft.Network/virtualNetworks/<vnet-id>`
     * This field cannot be changed after creation.
     *
     * Generated from protobuf field <code>string virtual_network_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVirtualNetworkId($var)
    {
        GPBUtil::checkString($var, True);
        $this->virtual_network_id = $var;

        return $this;
    }

    /**
     * Required. The IP address range of the pods in this cluster, in CIDR
     * notation (e.g. `10.96.0.0/14`).
     * All pods in the cluster get assigned a unique IPv4 address from these
     * ranges. Only a single range is supported.
     * This field cannot be changed after creation.
     *
     * Generated from protobuf field <code>repeated string pod_address_cidr_blocks = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPodAddressCidrBlocks()
    {
        return $this->pod_address_cidr_blocks;
    }

    /**
     * Required. The IP address range of the pods in this cluster, in CIDR
     * notation (e.g. `10.96.0.0/14`).
     * All pods in the cluster get assigned a unique IPv4 address from these
     * ranges. Only a single range is supported.
     * This field cannot be changed after creation.
     *
     * Generated from protobuf field <code>repeated string pod_address_cidr_blocks = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPodAddressCidrBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pod_address_cidr_blocks = $arr;

        return $this;
    }

    /**
     * Required. The IP address range for services in this cluster, in CIDR
     * notation (e.g. `10.96.0.0/14`).
     * All services in the cluster get assigned a unique IPv4 address from these
     * ranges. Only a single range is supported.
     * This field cannot be changed after creating a cluster.
     *
     * Generated from protobuf field <code>repeated string service_address_cidr_blocks = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAddressCidrBlocks()
    {
        return $this->service_address_cidr_blocks;
    }

    /**
     * Required. The IP address range for services in this cluster, in CIDR
     * notation (e.g. `10.96.0.0/14`).
     * All services in the cluster get assigned a unique IPv4 address from these
     * ranges. Only a single range is supported.
     * This field cannot be changed after creating a cluster.
     *
     * Generated from protobuf field <code>repeated string service_address_cidr_blocks = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAddressCidrBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->service_address_cidr_blocks = $arr;

        return $this;
    }

    /**
     * Optional. The ARM ID of the subnet where Kubernetes private service type load
     * balancers are deployed. When unspecified, it defaults to
     * AzureControlPlane.subnet_id.
     * Example:
     * "/subscriptions/d00494d6-6f3c-4280-bbb2-899e163d1d30/resourceGroups/anthos_cluster_gkeust4/providers/Microsoft.Network/virtualNetworks/gke-vnet-gkeust4/subnets/subnetid456"
     *
     * Generated from protobuf field <code>string service_load_balancer_subnet_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceLoadBalancerSubnetId()
    {
        return $this->service_load_balancer_subnet_id;
    }

    /**
     * Optional. The ARM ID of the subnet where Kubernetes private service type load
     * balancers are deployed. When unspecified, it defaults to
     * AzureControlPlane.subnet_id.
     * Example:
     * "/subscriptions/d00494d6-6f3c-4280-bbb2-899e163d1d30/resourceGroups/anthos_cluster_gkeust4/providers/Microsoft.Network/virtualNetworks/gke-vnet-gkeust4/subnets/subnetid456"
     *
     * Generated from protobuf field <code>string service_load_balancer_subnet_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceLoadBalancerSubnetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_load_balancer_subnet_id = $var;

        return $this;
    }

}

