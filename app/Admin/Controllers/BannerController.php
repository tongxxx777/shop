<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Banner;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BannerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Banner(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('image');
            $grid->column('order');
            $grid->column('is_show');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Banner(), function (Show $show) {
            $show->field('id');
            $show->field('image');
            $show->field('order');
            $show->field('is_show');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Banner(), function (Form $form) {
            $form->display('id');
            $form->text('image');
            $form->text('order');
            $form->text('is_show');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
