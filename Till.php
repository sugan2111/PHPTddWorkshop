<?php

class Till
{
    private $total = 0;

    private $bakedBeans = 0;
    private $spaghettiHoops = 0;
    public function getTotal()
    {
        $this->total += 75 * $this->bakedBeans + 80 * $this->spaghettiHoops;

        if($this->bakedBeans >= 2)
        {
            $offers = floor($this->bakedBeans/2);
            $this->total -= $offers * 75;
        }

        if($this->spaghettiHoops >=3)
        {
            $offers = floor($this->spaghettiHoops/3);
            $this->total -= $offers * 40;
        }

        return $this->total;
    }

    public function scanItem(string $item)
    {
        if($item == "Baked Beans") {
            $this->bakedBeans++;
        }else if ($item == "Spaghetti Hoops") {
            $this->spaghettiHoops++;
        }


    }

}