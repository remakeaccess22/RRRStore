<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ReusableTable extends Component
{
    public $title;
    public $columns;
    public $data;
    public $actions;
    public $createRoute;

    public function __construct($title, $columns, $data, $actions = [], $createRoute = null)
    {
        $this->title = $title;
        $this->columns = $columns;
        $this->data = $data;
        $this->actions = $actions;
        $this->createRoute = $createRoute;
    }

    public function render()
    {
        return view('components.reusable-table', [
            'title' => $this->title,
            'columns' => $this->columns,
            'data' => $this->data,
            'actions' => $this->actions,
            'createRoute' => $this->createRoute,
        ]);
    }
}
