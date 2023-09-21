<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Location;

class LocationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Location';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Location());

        $grid->column('l_id', __('L id'));
        // $grid->column('h_id', __('H id'));
        // $grid->column('c_id', __('C id'));
        // $grid->column('sh_id', __('Sh id'));
        // $grid->column('sc_id', __('Sc id'));
        $grid->column('region', __('Region'));
        $grid->column('zone', __('Zone'));
        $grid->column('wereda', __('Wereda'));
        $grid->column('latitude', __('Latitude'));
        $grid->column('longitude', __('Longitude'));
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
        $show = new Show(Location::findOrFail($id));

        $show->field('l_id', __('L id'));
        // $show->field('h_id', __('H id'));
        // $show->field('c_id', __('C id'));
        // $show->field('sh_id', __('Sh id'));
        // $show->field('sc_id', __('Sc id'));
        $show->field('region', __('Region'));
        $show->field('zone', __('Zone'));
        $show->field('wereda', __('Wereda'));
        $show->field('latitude', __('Latitude'));
        $show->field('longitude', __('Longitude'));
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
        $form = new Form(new Location());

        // $form->number('h_id', __('H id'));
        // $form->number('c_id', __('C id'));
        // $form->number('sh_id', __('Sh id'));
        // $form->number('sc_id', __('Sc id'));
        $form->text('region', __('Region'));
        $form->text('zone', __('Zone'));
        $form->text('wereda', __('Wereda'));
        // $form->text('latitude', __('Latitude'));
        // $form->text('longitude', __('Longitude'));
        $form->map('Latitude', 'Longitude', 'Location')->default([
            'lat' => 9.005401,
            'lng' => 38.763611,
        ]);

        return $form;
    }
}
