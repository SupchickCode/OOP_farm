<?php

class Stable
{
    public array $animals;

    /**
     * В тестовом задани в хлеву уже есть 20 кур и 10 коров.
     * Это метод добавит их в хлев.
     */
    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $cow = new Cow();
            $this->add_animal($cow);
        }
        for ($i = 0; $i < 20; $i++) {
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
    public function get_all_products(): string
    {
        $milk = 0;
        $eggs = 0;

        foreach ($this->get_all_animals() as $key => $animal) {
            if ($animal->type == "Cow") {
                $milk += $animal->get_product();
            } elseif ($animal->type == "Chicken") {
                $eggs += $animal->get_product();
            }
        }

        return "Total Milk: $milk <br>Total Eggs: $eggs";
    }
}
