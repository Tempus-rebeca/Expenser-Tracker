<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{
    public $name;

    public function save()
    {
        // $this->validate();

        // $this->color = '#' . ltrim($this->color, '#');

        // Category::create(
        //     $this->only(['code', 'description', 'color', 'nivel'])
        // );
        // session()->flash('message', 'Matter Status has been created successfully');

        // return $this->redirect('/show-category');
    }

    public function render()
    {
        return view('livewire.category.create-category')->extends('layouts.app');
    }
}
