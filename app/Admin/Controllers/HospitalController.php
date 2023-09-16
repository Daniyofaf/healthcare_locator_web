<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Hospital;

class HospitalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Hospital';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hospital());

        $grid->column('h_id', __('H id'));
        $grid->column('h_name', __('H name'));
        $grid->column('Region', __('Region'));
        $grid->column('Zone', __('Zone'));
        $grid->column('Wereda', __('Wereda'));
        $grid->column('Service', __('Service'));
        $grid->column('Status', __('Status'));
        $grid->column('Latitude', __('Latitude'));
        $grid->column('Longitude', __('Longitude'));
        // $grid->column('st_id', __('St id'));
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
        $show = new Show(Hospital::findOrFail($id));

        $show->field('h_id', __('H id'));
        $show->field('h_name', __('H name'));
        $show->field('Region', __('Region'));
        $show->field('Zone', __('Zone'));
        $show->field('Wereda', __('Wereda'));
        $show->field('Service', __('Service'));
        $show->field('Status', __('Status'));
        $show->field('Latitude', __('Latitude'));
        $show->field('Longitude', __('Longitude'));
        // $show->field('st_id', __('St id'));
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
        $form = new Form(new Hospital());

        $form->text('h_name', __('H name'));
        $form->text('Region', __('Region'));
        $form->text('Zone', __('Zone'));
        $form->text('Wereda', __('Wereda'));
        $form->text('Service', __('Service'));
        $form->text('Status', __('Status'));
        $form->text('Latitude', __('Latitude'));
        $form->text('Longitude', __('Longitude'));
        // $form->text('st_id', __('St id'));

        return $form;
    }
}
