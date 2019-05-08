<?php

namespace Bronevik\HotelsConnector\Element;

class SearchOrdersRequest extends BaseRequest
{
    /**
     * @var SearchOrderCriterion[]
     */
    public $searchCriteria = [];

    /**
     * @return bool
     */
    public function hasSearchCriteria()
    {
        return count($this->searchCriteria) > 0;
    }

    /**
     * @return SearchOrderCriterion[]
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param SearchOrderCriterion $searchCriteria
     */
    public function addSearchCriteria($searchCriteria)
    {
        $this->searchCriteria[] = $searchCriteria;
    }
}
