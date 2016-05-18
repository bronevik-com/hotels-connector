<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrdersRequest extends BaseRequest
{
    /**
     * Type: tns:SearchOrderCriterion
     * 
     * @var \Bronevik\HotelsConnector\Element\SearchOrderCriterion[]
     */
    public $searchCriteria = [];

    /**
     * 
     * @return bool
     */
    public function hasSearchCriteria()
    {
        return count($this->searchCriteria) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\SearchOrderCriterion[]
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\SearchOrderCriterion $searchCriteria 
     */
    public function addSearchCriteria($searchCriteria)
    {
        $this->searchCriteria[] = $searchCriteria;
    }
}

