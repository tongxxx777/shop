<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Banner;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

use App\Enums\BannerIsShow;

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
            $grid->model()->orderBy('order');

            $grid->column('id')->sortable();
            $grid->column('image')->image();
            $grid->column('order')->orderable()->sortable();
            $grid->column('is_show')->switch()->sortable();
            $grid->column('created_at')->sortable();
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
            $show->field('image')->image();
            $show->field('order');
            $show->field('is_show')->using(BannerIsShow::asSelectArray())->label();
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
            $form->image('image')->move('banner/images')->uniqueName()->autoUpload()->required();
            $form->switch('is_show')->default(BannerIsShow::YES);
        });
    }
}
