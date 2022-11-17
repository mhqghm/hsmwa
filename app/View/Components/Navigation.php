<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public array $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = [
            [
                'title' => 'Welcome',
                'url' => '/',
            ],
            [
                'title' => 'Cities',
                'url' => '/cities',
            ],
            [
                'title' => 'Categories',
                'url' => '/categories'
            ]
            ,
            [
                'title' => 'Make review',
                'url' => '/reviews'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        foreach ($this->menu as $key => $item) {
            $this->menu[$key]['active'] = request()->getRequestUri() === $item['url'];
        }

        return view('components.navigation');
    }
}
