<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Hospital;
use App\Models\Service;

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
        $grid->column('h_name', __('Hospital Name'));
        $grid->column('Region', __('Region/City'));
        $grid->column('Zone', __('Zone/Sub-City'));
        $grid->column('Wereda', __('Wereda/Unique Area'));
        // $grid->column('Service', __('Service'));
        $grid->column('Service', __('Service'))->display(function ($services) {
            // Ensure $services is an array
            if (is_array($services)) {
                // Return only the service names, separated by commas
                return implode(', ', $services);
            }

            return $services;
        });

        // $grid->column('Status', __('Status'));
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
        $show->field('h_name', __('Hospital Name'));
        $show->field('Region', __('Region/City'));
        $show->field('Zone', __('Zone/Sub-City'));
        $show->field('Wereda', __('Wereda/Unique Area'));
        // $show->field('Service', __('Service'));
        // Get the "Service" array
        $serviceArray = $show->getModel()->Service;

        // Format the "Service" array for display
        $formattedServices = implode(', ', $serviceArray);

        $show->field('Service', __('Service'))->as(function () use ($formattedServices) {
            return $formattedServices;
        });

        // $show->field('Status', __('Status'));
        $show->field('Latitude', __('Latitude'));
        $show->field('Longitude', __('Longitude'));
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

        $form->text('h_name', __('Hospital Name'));
          // $form->text('Service', __('Service'));
        // Fetch the services from the 'services' table
        //    $services = Service::pluck('s-name', 's_id');

        //    $form->select('Service', __('Service'))->options($services);
        $services = Service::pluck('s-name', 's-name');
        $form->multipleSelect('Service', __('Service'))->options($services);    //->addClass('multiple-select2');

        $form->text('Region', __('Region/City'));
        $form->text('Zone', __('Zone/Sub-City'));
        $form->text('Wereda', __('Wereda/Unique Area'));
      


        // $form->text('Status', __('Status'));
        // $form->text('Latitude', __('Latitude'));
        // $form->text('Longitude', __('Longitude'));

        $form->map('Latitude', 'Longitude', 'Location')->default([
            'lat' => 9.005401,
            'lng' => 38.763611,
        ]);


        


        // $form->text('st_id', __('St id'));

        return $form;
    }
}
