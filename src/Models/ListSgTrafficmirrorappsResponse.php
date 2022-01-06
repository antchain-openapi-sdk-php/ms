<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\MS\Models;

use AlibabaCloud\Tea\Model;

class ListSgTrafficmirrorappsResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 起始索引
    /**
     * @var int
     */
    public $startIndex;

    // 页大小
    /**
     * @var int
     */
    public $pageSize;

    // 总条数
    /**
     * @var int
     */
    public $totalSize;

    // 当前页
    /**
     * @var string
     */
    public $currentPage;

    // [{"appName": "xxx", "ruleNum": 2}]
    /**
     * @var FaultInjectRuleAppNameModel[]
     */
    public $appNames;
    protected $_name = [
        'reqMsgId'    => 'req_msg_id',
        'resultCode'  => 'result_code',
        'resultMsg'   => 'result_msg',
        'startIndex'  => 'start_index',
        'pageSize'    => 'page_size',
        'totalSize'   => 'total_size',
        'currentPage' => 'current_page',
        'appNames'    => 'app_names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->startIndex) {
            $res['start_index'] = $this->startIndex;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }
        if (null !== $this->currentPage) {
            $res['current_page'] = $this->currentPage;
        }
        if (null !== $this->appNames) {
            $res['app_names'] = [];
            if (null !== $this->appNames && \is_array($this->appNames)) {
                $n = 0;
                foreach ($this->appNames as $item) {
                    $res['app_names'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSgTrafficmirrorappsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['start_index'])) {
            $model->startIndex = $map['start_index'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }
        if (isset($map['current_page'])) {
            $model->currentPage = $map['current_page'];
        }
        if (isset($map['app_names'])) {
            if (!empty($map['app_names'])) {
                $model->appNames = [];
                $n               = 0;
                foreach ($map['app_names'] as $item) {
                    $model->appNames[$n++] = null !== $item ? FaultInjectRuleAppNameModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
