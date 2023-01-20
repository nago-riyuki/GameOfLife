<?php

class GameOfLife
{
    function __construct(){
    }
    public static function GameOfLife()
    {
        $local_this = new GameOfLife();
        return $local_this;
    }
    public static function main(&$args)
    {
        $M = 10;
        $N = 10;
        $grid = array(
            array(
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 1, 1, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 0, 1, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 1, 1, 0, 0, 0, 0, 0
            ), array(
                0, 0, 1, 1, 0, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 0, 0, 1, 0, 0, 0, 0
            ), array(
                0, 0, 0, 0, 1, 0, 0, 0, 0, 0
            ), array(
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0
            )
        );
        echo "Original Generation","\n";
        for ($i = 0; $i < $M; $i++)
        {
            for ($j = 0; $j < $N; $j++)
            {
                if ($grid[$i][$j] == 0)
                {
                    echo ".";
                }
                else 
                {
                    echo "*";
                }
            }
            print("\n");
        }
        print("\n");
        GameOfLife::nextGeneration($grid, $M, $N);
    }
    static function nextGeneration(&$grid, $M, $N)
    {
        $future = array_fill(0,$M,array_fill(0,$N,0));
        for ($l = 0; $l < $M; $l++)
        {
            for ($m = 0; $m < $N; $m++)
            {
                $aliveNeighbours = 0;
                for ($i = -1; $i <= 1; $i++)
                {
                    for ($j = -1; $j <= 1; $j++)
                    {
                        if (($l + $i >= 0 && $l + $i < $M) && ($m + $j >= 0 && $m + $j < $N))
                        {
                            $aliveNeighbours += $grid[$l + $i][$m + $j];
                        }
                    }
                }
                $aliveNeighbours -= $grid[$l][$m];
                if (($grid[$l][$m] == 1) && ($aliveNeighbours < 2))
                {
                    $future[$l][$m] = 0;
                }
                else if (($grid[$l][$m] == 1) && ($aliveNeighbours > 3))
                {
                    $future[$l][$m] = 0;
                }
                else if (($grid[$l][$m] == 0) && ($aliveNeighbours == 3))
                {
                    $future[$l][$m] = 1;
                }
                else 
                {
                    $future[$l][$m] = $grid[$l][$m];
                }
            }
        }
        echo "Next Generation","\n";
        for ($i = 0; $i < $M; $i++)
        {
            for ($j = 0; $j < $N; $j++)
            {
                if ($future[$i][$j] == 0)
                {
                    echo ".";
                }
                else 
                {
                    echo "*";
                }
            }
            print("\n");
        }
    }
}
GameOfLife::main($argv);
<?php