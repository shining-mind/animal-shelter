<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PetFilter extends Component
{
    public string $action;

    public array $rows = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $action = '')
    {
        $this->action = $action;
        $request = request();
        $this->rows[] = $this->createRow(
            'type',
            ['all', 'dogs', 'cats', 'other'],
            $request->get('type', 'all')
        );
        $this->rows[] = $this->createRow(
            'sex',
            ['any', 'male', 'female'],
            $request->get('sex', 'any')
        );
        $this->rows[] = $this->createRow(
            'age',
            ['any', 'junior', 'young', 'senior'],
            $request->get('age', 'any')
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.pet-filter');
    }

    /**
     * @param string $name
     * @param string[] $options
     * @param string $current_value
     * @return object
     */
    protected function createRow($name, $options, $current_value)
    {
        $row = (object) [
            'name' => $name,
            'items' => []
        ];
        foreach ($options as $value) {
            $row->items[] = (object) [
                'value' => $value,
                'checked' => $value === $current_value
            ];
        }
        return $row;
    }
}
