<?php

class Stable
{
    /**
     * $animals : keep how much animals in the stable right now;
     */
    public array $animals;


    public function __construct()
    {
        $this->add_many_cows_and_chikens(10, 20);
    }


    /**
     * Add many animals in the stable;
     * @param cows how much cows do you need ?
     * @param chikens how much chikens do you need ?
     */
    protected function add_many_cows_and_chikens(int $cows, int $chickens)
    {
        for ($i = 0; $i < $cows; $i++) {
            $cow = new Cow();
            $this->add_animal($cow);
        }
        for ($i = 0; $i < $chickens; $i++) {
            $chicken = new Chicken();
            $this->add_animal($chicken);
        }
    }


    public function add_animal($animal)
    {
        $this->animals[] = $animal;
    }


    public function get_all_animals(): array
    {
        return $this->animals;
    }


    /**
     * Call method `get_product` for each animals that in this stable,
     * and retutn sum of milk and eggs.
     * @return string
     */
    public function get_products_sum(): string
    {
        $milk = 0;
        $eggs = 0;

        foreach ($this->get_all_animals() as $key => $animal) {
            if ($animal->type == "Cow") {
                $milk += $animal->get_product();
            } elseif ($animal->type == "Chicken") {
                $eggs += $animal->get_product();
            } else {
                echo "ERORR UNKNOW ANIMAL. DONT'T FORGET TO ADD IT IN `IF STATEMENT`";
            }
        }

        return "Total Milk: $milk <br>Total Eggs: $eggs";
    }
}
