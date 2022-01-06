<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\MS\Models;

use AlibabaCloud\Tea\Model;

class DisableSgAuthrulegroupsbatchRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 鉴权规则id集合，多个用逗号隔开
    /**
     * @var string
     */
    public $authRuleIds;

    // 租户实例id
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'authRuleIds'       => 'auth_rule_ids',
        'instanceId'        => 'instance_id',
    ];

    public function validate()
    {
        Model::validateRequired('authRuleIds', $this->authRuleIds, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->authRuleIds) {
            $res['auth_rule_ids'] = $this->authRuleIds;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableSgAuthrulegroupsbatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['auth_rule_ids'])) {
            $model->authRuleIds = $map['auth_rule_ids'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        return $model;
    }
}
