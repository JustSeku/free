<?php
    /**
     * This example will do a basic search for residential "for sale" property.
     */
 
    $DaftAPI = new SoapClient(
        "http://api.daft.ie/v2/wsdl.xml"
        , array('features' => SOAP_SINGLE_ELEMENT_ARRAYS)
    );
 
    $parameters = array(
        'api_key'   =>  "4039260_invalid_example_key_87b7c7c267fa"
        , 'query'   =>  array('bedrooms' => 2)
    );
 
    $response = $DaftAPI->search_sale($parameters);
    $results = $response->results;
 
    foreach($results->ads as $ad)
    {
        printf(
            '<a href="%s">%s</a><br />'
            , $ad->daft_url
            , $ad->full_address
        );
    }
 
 ?>
