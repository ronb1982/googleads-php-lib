<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateMobileApplicationsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\MobileApplication[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\MobileApplication[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\MobileApplication[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\MobileApplication[] $rval
     * @return \Google\AdsApi\AdManager\v201808\updateMobileApplicationsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
