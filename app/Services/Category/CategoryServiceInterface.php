<?php
namespace App\Services\Category;
use App\Services\Base\BaseServiceInterface;

interface CategoryServiceInterface extends BaseServiceInterface{
    public function syncCategory($category,array $categoryIds);
}
