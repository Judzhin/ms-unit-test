<?php

/**
 * Class Model_Stats
 */
class Model_Stats
{
    protected $countries = array();

    /**
     * @param $country
     */
    public function AddCountry($country)
    {
        if (array_key_exists($country, $this->countries))
            $this->countries[$country]++;
        else
            $this->countries[$country] = 1;
    }

    /**
     * @return array
     */
    public function GetCountries()
    {
        return array_keys($this->countries);
    }
}
