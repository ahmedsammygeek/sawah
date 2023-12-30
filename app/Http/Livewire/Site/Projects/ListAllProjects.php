<?php

namespace App\Http\Livewire\Site\Projects;

use Livewire\Component;
use App\Models\Category;
use App\Models\Area;
use App\Models\Project;
use Livewire\WithPagination;
class ListAllProjects extends Component
{   
        use WithPagination;

    public $areas;
    public $categories;
    public $search;
    public $categories_ids = [];
    public $areas_ids = [];

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->areas = Area::all();
        $this->categories = Category::all();
    }

    public function resetFilters()
    {
        $this->search = null;
        $this->categories_ids = [];
        $this->areas_ids = [];
    }


    public function updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        $projects = Project::query()
        ->when($this->search , function($query){
            $query->where('name->ar' , 'LIKE' , '%'.$this->search.'%' );
        })
        ->when($this->areas_ids , function($query){
            $query->whereIn('area_id' , $this->areas_ids );
        })
        ->when($this->categories_ids , function($query){
            $query->whereIn('category_id' , $this->categories_ids );
        })
        ->latest()->paginate(2);
        return view('livewire.site.projects.list-all-projects' , compact('projects') );
    }
}
