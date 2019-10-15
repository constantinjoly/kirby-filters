<?php

return function ($kirby, $pages, $page) {

  $allitems = page('artists')->children()->listed();
  
  $items = page('artists')->children()->listed();
 
  // add the Type filter  
  if($type = param('type')) { 
    $type = urldecode(param('type'));
    $items = $items->filterBy('typ', $type, ',');
  }
  // add the Support filter  
  if($support = param('support')) {
    $support = urldecode(param('support'));
    $items = $items->filterBy('sup', $support, ',');
  }
    // add the Year filter    
  if($year = param('year')) {
    $year = urldecode(param('year')); 
    $items = $items->filterBy('yea', $year, ',');
  }
    // add the Label filter    
  if($label = param('label')) {
    $label = urldecode(param('label')); 
    $items = $items->filterBy('lab', $label, ',');
  }
    // add the Country filter   
  if($country = param('country')) {
    $country = urldecode(param('country'));     
    $items = $items->filterBy('cou', $country, ',');
  }
    // add the world region filter    
  if($worldregion = param('worldregion')) {
    $worldregion = urldecode(param('worldregion'));
    $items = $items->filterBy('wr', $worldregion, ',');
  }
  
  
 
  //If $items is used, groups all results filters
  // fetch all types
  $types = $allitems->pluck('typ', ',', true); 
  // fetch all Supports
  $supports = $allitems->pluck('sup', ',', true);
  // fetch all Years
  $years = $allitems->pluck('yea', ',', true); 
  // fetch all Labels
  $labels = $allitems->pluck('lab', ',', true);
  // fetch all countries
  $countries = $allitems->pluck('cou', ',', true); 
  // fetch all region filter
  $worldregions = $allitems->pluck('wr', ',', true); 


  // $items      = $items->paginate(20);
  // $pagination = $items->pagination();  

return compact('type', 'types', 'support', 'supports', 'year', 'years', 'label', 'labels', 'country', 'countries', 'worldregion', 'worldregions', 'items', 'allitems');


};