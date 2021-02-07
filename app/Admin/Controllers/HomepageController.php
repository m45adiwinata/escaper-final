<?php

namespace App\Admin\Controllers;

use App\Homepage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HomepageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Homepage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Homepage());

        $grid->column('id', __('Id'));
        $grid->column('background', __('Background'))->image();
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Homepage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->avatar()->image('background', __('Background'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Homepage());

        $form->image('background', __('Background'))->move('images/background/homepage')->removable();
        $states = [
            'on'  => ['value' => 1, 'text' => 'On', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Off', 'color' => 'info'],
        ];
        $form->switch('status', 'Status')->states($states);

        return $form;
    }
}
