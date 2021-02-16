<?php

namespace App\Admin\Controllers;

use App\LookbookText;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LookbookTextController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LookbookText';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LookbookText());

        $grid->column('id', __('Id'));
        $grid->column('text', __('Text'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(LookbookText::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('text', __('Text'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new LookbookText());

        $form->ckeditor('text', __('Text'));

        return $form;
    }
}
