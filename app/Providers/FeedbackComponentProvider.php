<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade as Form;
use Collective\Html\HtmlFacade as Html;

class FeedbackComponentProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('input_under_label', 'components.form.form-group-generic-1-input', ['name', 'title','type' => null]);
        Form::component('select_under_label', 'components.form.form-group-generic-1-select', ['name', 'title','data']);
        Form::component('textarea_under_label', 'components.form.form-group-generic-1-textarea', ['name', 'title']);
        Form::component('ratings', 'components.html.ratings', ['name', 'title']);
        Form::component('submit_generic', 'components.form.form-group-generic-1-submit', ['title']);
        Form::component('star_label','components.form.form-star-label',['class' => null,'for' => null,'title' => null]);
        Form::component('form_errors','components.form.form-errors',[]);
        Form::component('form_success','components.form.form-success',[]);
        Form::component('login_form','components.form.login-form',[]);

        Html::component('cover_heading','components.html.cover-heading-h1',['title','id' => null]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
