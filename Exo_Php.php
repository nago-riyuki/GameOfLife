<?php
function createGrid(){
    for ($i = 1; $i <= 10; ++$i) {
      $height = [];
      for ($j = 1; $j <= 10; ++$j) {
        $height[$j] = 0;
      }
      $this->grid[$i] = $height;
    }
  }

  function Game() {
    $newGrid = [];

    foreach ($this->grid as $widthId => $width) {
      $newGrid[$widthId] = [];
      foreach ($width as $heightId => $height) {
        $count = $this->countAdjacentCells($widthId, $heightId);

        if ($height == 1) {
          if ($count < 2 || $count > 3) {
            $height = 0;
          }
         else {
            $height = 1;
          }
        }
        else {
          if ($count == 3) {
            $height = 1;
          }
        }

        $newGrid[$widthId][$heightId] = $height;
      }
    }
    $this->grid = $newGrid;
    unset($newGrid);
  }
<?php