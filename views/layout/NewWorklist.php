<?php

class NewWorklistLayout extends Layout {	
    public $stylesheets = array(
        'css/legacy/common.css',
        'css/legacy/smoothness/lm.ui.css',
        'css/legacy/smoothness/white-theme.lm.ui.css',
        'css/bootstrap/css/bootstrap.min.css',
        'css/bootstrap/css/datepicker.css',
        'css/bootstrap/css/bootstrap-select.min.css',
        'css/font-awesome/css/font-awesome.min.css',
        'css/chosen/chosen.min.css',
        'css/newworklist.css',
        'css/menu.css',
        'css/footer.css'
    );

    public $scripts = array(
        'js/jquery/jquery-1.7.1.min.js',
        'js/jquery/jquery.class.js',
        'js/jquery/jquery-ui-1.8.12.min.js',
        'js/jquery/jquery.watermark.min.js',
        'js/jquery/jquery.livevalidation.js',
        'js/jquery/jquery.scrollTo-min.js',
        'js/jquery/jquery.combobox.js',
        'js/jquery/jquery.autogrow.js',
        'js/jquery/jquery.tooltip.min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/bootstrap/bootstrap-datepicker.js',
        'js/bootstrap/bootstrap-select.min.js',
        'js/autosize/jquery.autosize.min.js',
        'js/chosen/chosen.jquery.min.js',
        'js/mustache/mustache.js',
        'js/typeahead.js/typeahead.bundle.js',
        'js/common.js',
        'js/utils.js',
        'js/userstats.js',
        'js/budget.js',
        'js/newworklist.js'
    );

    public function __construct() {
        $this->currentYear = date('Y', strtotime(Model::now()));
        parent::__construct();
    }
}
