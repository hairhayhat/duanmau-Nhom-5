<?php

class CategoryAdminController{
    public function listCategories()
    {
        $list_Categories = (new CategoryAdminModel())->listCategoriesAdmin();
        view('../views/admin/categories/list-categories',['data'=>$list_Categories]);
    }
}