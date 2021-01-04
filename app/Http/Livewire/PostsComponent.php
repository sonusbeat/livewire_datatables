<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $sortBy = 'id';
    public $ascSort = true;
    public $search;
    public $perPage = 4;
    public $selected = [];

    public function deletePosts()
    {
        Post::destroy($this->selected);
        $this->selected = [];
    }

    public function sortBy($field)
    {
        $this->ascSort = $this->ascSort ? false : true;
        $this->sortBy = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.posts-component', [
            "posts" => Post::search($this->search)
                        ->orderBy($this->sortBy, $this->ascSort ? 'asc' : 'desc')
                        ->paginate($this->perPage)
        ]);
    }
}
