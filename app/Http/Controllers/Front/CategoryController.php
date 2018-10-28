<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\CategoryRepository;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Shop\Products\Product;
use App\Shop\Products\Transformations\ProductTransformable;

class CategoryController extends Controller
{
    use ProductTransformable;

    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * CategoryController constructor.
     *
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * Find the category via the slug
     *
     * @param string $slug
     * @return \App\Shop\Categories\Category
     */
    public function getCategory(string $slug)
    {
        $category = $this->categoryRepo->findCategoryBySlug(['slug' => $slug]);

        $repo = new CategoryRepository($category);

        $products = $repo->findProducts()->transform(function (Product $product) {
            return $this->transformProduct($product);
        })->where('status', 1)->all();

        return view('front.categories.category', [
            'category' => $category,
            'products' => $repo->paginateArrayResults($products, 20)
        ]);
    }
    /**
     * Find the category via the slug
     *
     * @param string $slug
     * @return \App\Shop\Categories\Category
     */
    public function getCategoryProducts(string $slug)
    {
        $category = $this->categoryRepo->findCategoryBySlug(['slug' => $slug]);

        $repo = new CategoryRepository($category);

        $products = $repo->findProducts()->transform(function (Product $product) {
            return $this->transformProduct($product);
        })->where('status', 1)->all();

        return view('front.categories.category-images', [
            'category' => $category,
            'products' => $repo->paginateArrayResults($products, 20)
        ]);
    }

}
