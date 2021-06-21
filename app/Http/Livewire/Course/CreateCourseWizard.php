<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;

class CreateCourseWizard extends Component
{
    public $step=0;

    protected $queryString = [
        'step' => ['except' => 0],
    ];

    public function render()
    {
        return view('livewire.course.create-course-wizard')
        ->layout('layouts.guest');
    }

    public function nextPage()
    {
        $this->step++;
    }
}
