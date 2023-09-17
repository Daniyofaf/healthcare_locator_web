<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Clinic;

class ClinicController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Clinic';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Clinic());

        $grid->column('c_id', __('C id'));
        $grid->column('c_name', __('C name'));
        $grid->column('Region', __('Region'));
        $grid->column('Zone', __('Zone'));
        $grid->column('Wereda', __('Wereda'));
        $grid->column('Latitude', __('Latitude'));
        $grid->column('Longitude', __('Longitude'));
        $grid->column('Service', __('Service'));
        // $grid->column('Status', __('Status'));
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
        $show = new Show(Clinic::findOrFail($id));

        $show->field('c_id', __('C id'));
        $show->field('c_name', __('Clinic Name'));
        $show->field('Region', __('Region/City'));
        $show->field('Zone', __('Zone/Sub-City'));
        $show->field('Wereda', __('Wereda/Unique-Area'));
        $show->field('Latitude', __('Latitude'));
        $show->field('Longitude', __('Longitude'));
        $show->field('Service', __('Service'));
        // $show->field('Status', __('Status'));
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
        $form = new Form(new Clinic());

        $form->text('c_name', __('Clinic Name'));
        $form->text('Region', __('Region/City'));
        $form->text('Zone', __('Zone/Sub-City'));
        $form->text('Wereda', __('Wereda/Unique Area'));
        $form->text('Latitude', __('Latitude'));
        $form->text('Longitude', __('Longitude'));
        $form->text('Service', __('Service'));
        // $form->text('Status', __('Status'));

        return $form;
    }
}
