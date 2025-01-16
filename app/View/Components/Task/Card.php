<?php

namespace App\View\Components\Task;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $title;
    public function __construct($title, $id)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function render(): View|Closure|string
    {
        return view('components.task.card');
    }
}
