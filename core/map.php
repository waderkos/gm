<?php

//Map generator 

// Functon created one sector for map
function create_sector($id_row, $id_colum) {
  return '<div id="sector_' . $id_row . '_' . $id_colum . '" class="sector" cy="' . $id_row . '" cx="' . $id_colum . '" >' . $id_row . ' | ' . $id_colum . '</div>';
}

// Function created one row for map
function create_row($id, $width, $pos='even') {
  $row = '';
  for ($i=1; $i<=$width; $i++){
    $row .= create_sector($id, $i);
  }
  return '<div class="row ' . $pos . '">' . $row . '</div>';
}

// Function created map
function create_map($x, $y) {
  $map = '';
  for ($i=1; $i<=$y; $i++) { 
    $pos = $i%2 == 0 ? 'odd' : 'even';
    $map .= create_row($i, $x, $pos);
  }
  return '<div class="map">' . $map . '</div>';
}

// Function for render maps
function render_map($map) {
  print($map);
}

function render_neighbors($x,$y) {
  print ('<div class="neighbors"><p style="color:red"><b>'.$x.' | '.$y.'</b></p>');
  foreach (select_neighbors($x,$y) as $key => $value) {
    print($key . ' - ' . $value['x'] . ' | ' . $value['y'] . '<br>');
  }
  print('</div>');
}

// Function selected neighbors for sector and return array;
function select_neighbors($x,$y, $pos='all'){
  $neighbors = array();
  $sectors = array();
  if($x>0 && $y>0){
    $neighbors[1] = array('x'=> $x, 'y'=>$y+1);
    if($y-1>0) {
      $neighbors[2] = array('x'=> $x, 'y'=>$y-1);
    }
    $neighbors[3] = array('x'=> $x+2, 'y'=>$y);
    if($x-2>0) {
      $neighbors[4] = array('x'=> $x-2, 'y'=>$y);
    }
    if ($x%2 == 0) {
      if($x-1>0) {
        $neighbors[5] = array('x'=> $x-1, 'y'=>$y);
        $neighbors[6] = array('x'=> $x-1, 'y'=>$y+1);
      }
      $neighbors[7] = array('x'=> $x+1, 'y'=>$y);
      $neighbors[8] = array('x'=> $x+1, 'y'=>$y+1);
    }
    else {
      if($x-1>0) {
        if($y-1>0) {
          $neighbors[5] = array('x'=> $x-1, 'y'=>$y-1);
        }
        $neighbors[6] = array('x'=> $x-1, 'y'=>$y);
      }
      if($y-1>0) {
        $neighbors[7] = array('x'=> $x+1, 'y'=>$y-1);
      }
      $neighbors[8] = array('x'=> $x+1, 'y'=>$y);
    }
  }

  if($pos=='all') {
    $sectors = $neighbors;
  }
  if($pos=='bottom') {
    $sectors[1] =  
  }
  return $sectors
}