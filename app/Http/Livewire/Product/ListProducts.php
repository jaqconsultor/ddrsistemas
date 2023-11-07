<?php

namespace App\Http\Livewire\Product;

use App\Http\Livewire\Admin\AdminComponent;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ListProducts extends AdminComponent
{
	use WithFileUploads;

	public $state = [];

	public $product;

	public $showEditModal = false;

	public $productIdBeingRemoved = null;

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

	public function createProduct()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
            'slug' => 'required',
            'details' => 'nullable',
            'price' => 'required',
            'shipping_cost' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|not_in:0',
            'brand_id' => 'required|not_in:0',
		])->validate();

        Product::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Product added successfully!']);
	}

	public function edit(Product $product)
	{
		$this->reset();

		$this->showEditModal = true;

		$this->product = $product;

		$this->state = $product->toArray();

		$this->dispatchBrowserEvent('show-form');
	}

	public function updateProduct()
	{
		$validatedData = Validator::make($this->state, [
			'name' => 'required',
            'slug' => 'required',
            'details' => 'nullable',
            'price' => 'required',
            'shipping_cost' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|not_in:0',
            'brand_id' => 'required|not_in:0',
		])->validate();

		$this->product->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Product updated successfully!']);
	}

	public function confirmProductRemoval($productId)
	{
		$this->productIdBeingRemoved = $productId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deleteProduct()
	{
		$product = Product::findOrFail($this->productIdBeingRemoved);

		$product->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Product deleted successfully!']);
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
        $categorys = Category::all();
        $brands = Brand::all();

    	$products = Product::query()
    		->where('name', 'like', '%'.$this->searchTerm.'%')
    		->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(10);

        return view('livewire.product.list-products', [
        	'products' => $products,
            'categorys' => $categorys,
            'brands' => $brands,
        ]);
    }
}
