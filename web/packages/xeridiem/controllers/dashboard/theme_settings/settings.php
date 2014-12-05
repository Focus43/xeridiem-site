<?php

    class DashboardThemeSettingsSettingsController extends Controller {

        public function on_start(){
            $this->set('formHelper', Loader::helper('form'));
        }


        public function view(){
            $this->set('pkgConfig', XeridiemPackage::getPackageConfigObj());
        }


        public function success(){
            $this->set('message', 'Settings Saved!');
            $this->view();
        }


        public function save(){
            /** @var Config $config */
            $config = XeridiemPackage::getPackageConfigObj();

            // Loop through data and save it
            foreach($_REQUEST AS $key => $value){
                $config->save($key, $value);
            }

            $this->redirect(View::url('dashboard/theme_settings/settings/success'));
        }

    }