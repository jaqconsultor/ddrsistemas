<?php

namespace App\Http\Livewire\Category;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ListCategories extends AdminComponent
{
	use WithFileUploads;

	public $state = [];

	public $category;

	public $showEditModal = false;

	public $categoryIdBeingRemoved = null;

	public $searchTerm = null;

    protected $queryString = ['searchTerm' => ['except' => '']];

	public $photo;

    public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

	public function addNew()
	{
		$this->reset();

		$this->showEditModal = false;

		$this->dispatchBrowserEvent('show-form');
	}

	public function createCategory()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
		])->validate();

		Category::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Category added successfully!']);
	}

	public function edit(Category $category)
	{
		$this->reset();

		$this->showEditModal = true;

		$this->category = $category;

		$this->state = $category->toArray();

		$this->dispatchBrowserEvent('show-form');
	}

	public function updateCategory()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
		])->validate();

		$this->category->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Category updated successfully!']);
	}

	public function confirmCategoryRemoval($categoryId)
	{
		$this->categoryIdBeingRemoved = $categoryId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deleteCategory()
	{
		$category = Category::findOrFail($this->categoryIdBeingRemoved);

		$category->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Category deleted successfully!']);
	}

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
    	$categorys = Category::query()
    		->where('name', 'like', '%'.$this->searchTerm.'%')
    		->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(10);

        return view('livewire.category.list-categories', [
        	'categorys' => $categorys,
        ]);
    }
}
