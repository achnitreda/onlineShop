<?php 

    class Pages extends Controller {
        public function __construct(){
        }
        
        /*>>>>>>>>>>>>>>>>>>>>*/
        #<--->   index    <--->#
        /*<<<<<<<<<<<<<<<<<<<<*/
        public function index(){
            $data = [
                "title1"=>'Home Page'
            ];
            $this->view('pages.index', $data);
        }

        /*>>>>>>>>>>>>>>>>>>>>*/
        #<--->   contact    <--->#
        /*<<<<<<<<<<<<<<<<<<<<*/
        public function contact(){
            $data = [
                "title1"=>'Contact Us'
            ];
            $this->view('pages.contact', $data);  // $data is passed to the view  as an array

        }

    }