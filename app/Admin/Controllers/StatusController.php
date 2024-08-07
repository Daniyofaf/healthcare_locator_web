<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Status;

class StatusController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Status';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Status());

        $grid->column('st_id', __('St id'));
        // $grid->column('st_name', __('St name'));
        $grid->column('st_name', __('St name'))->display(function () {
            // Get the "Status Name" value from the "column" attribute
            $statusName = $this->st_name;
            return $statusName;
        });

        $grid->column('st_description', __('St description'));
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
        $show = new Show(Status::findOrFail($id));

        $show->field('st_id', __('St id'));
        // $show->field('st_name', __('St name'));
        $show->field('st_name', __('St name'))->as(function () use ($show) {
            // Get the "Status Name" value from the "column" attribute
            $statusName = $show->getModel()->st_name;
            return $statusName;
        });

        $show->field('st_description', __('St description'));
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
        $form = new Form(new Status());

        // $form->text('st_name', __('St name'));
        $form->select('st_name','Status Name')->options([ 'Active','Diactive']);


        $form->text('st_description', __('St description'));

        return $form;
    }
}
