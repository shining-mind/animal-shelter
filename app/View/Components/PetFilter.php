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
        $rules = static::getFilterValues();
        $this->rows[] = $this->createRow(
            'type',
            $rules['type'],
            $request->get('type', 'all')
        );
        $this->rows[] = $this->createRow(
            'sex',
            $rules['sex'],
            $request->get('sex', 'any')
        );
        $this->rows[] = $this->createRow(
            'age',
            $rules['age'],
            $request->get('age', 'any')
        );
    }

    public static function getFilterValues(): array
    {
        return [
            'type' => ['all', 'dog', 'cat', 'other'],
            'sex' => ['any', 'male', 'female'],
            'age' => ['any', 'junior', 'young', 'senior'],
        ];
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
