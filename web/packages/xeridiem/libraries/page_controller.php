<?php defined('C5_EXECUTE') or die("Access Denied.");

    class XeridiemPageController extends Controller {

        protected $supportsPageCache = true;

        /** @property $_includeThemeAssets bool */
        protected $_includeThemeAssets = false;

        /** @property $_canEdit bool : Set in on_start method */
        protected $_canEdit = false;

        /** @property $_isEditMode bool : Set in on_start method */
        protected $_isEditMode = false;

        /**
         * Base controller's view method.
         * @return void
         */
        public function view(){
            if( $this->_includeThemeAssets === true ){
                $this->attachThemeAssets( $this );
            }
        }


        /**
         * @return void
         */
        public function on_start(){
            $this->_canEdit     = $this->pagePermissionObject()->canWrite();
            $this->_isEditMode  = $this->getCollectionObject()->isEditMode();

            $this->set('canEdit', $this->_canEdit);
            $this->set('isEditMode', $this->_isEditMode);

            $classes = array();
            if( $this->_canEdit ){ array_push($classes, 'cms-admin'); }
            if( $this->_isEditMode ){ array_push($classes, 'cms-editing'); }
            $this->set('cmsClasses', join(' ', $classes));

            $this->set('templateHandle', sprintf('pg-%s', $this->getCollectionObject()->getCollectionTypeHandle()));
        }


        /**
         * Include css/js assets in page output.
         * @param $pageController Controller : Forces the page controller to be injected!
         * @return void
         */
        public function attachThemeAssets( Controller $pageController ){
            // Google Translate
            $pageController->addHeaderItem('<meta name="google-translate-customization" content="a255e74df2c21dd0-bea35df3c8a1613a-ge87fa1e052319e1a-c" />');
            // CSS
            $pageController->addHeaderItem('<link href="http://fonts.googleapis.com/css?family=Titillium+Web:200,200italic,400,700,400italic,700italic" rel="stylesheet" type="text/css">');
            $pageController->addHeaderItem( $this->getHelper('html')->css('core.css', XeridiemPackage::PACKAGE_HANDLE) );
            $pageController->addHeaderItem( $this->getHelper('html')->css('app.css', XeridiemPackage::PACKAGE_HANDLE) );
            // JS
            $pageController->addFooterItem( $this->getHelper('html')->javascript('core.js', XeridiemPackage::PACKAGE_HANDLE) );
            $pageController->addFooterItem( $this->getHelper('html')->javascript('app.js', XeridiemPackage::PACKAGE_HANDLE) );
        }


        /**
         * Memoize helpers (beware, once loaded its always the same instance).
         * @param string $handle Handle of the helper to load
         * @param bool | Package $pkg Package to get the helper from
         * @return ...Helper class of some sort
         */
        public function getHelper( $handle, $pkg = false ){
            $helper = '_helper_' . preg_replace("/[^a-zA-Z0-9]+/", "", $handle);
            if( $this->{$helper} === null ){
                $this->{$helper} = Loader::helper($handle, $pkg);
            }
            return $this->{$helper};
        }


        /**
         * Get the Concrete5 permission object for the given page.
         * @return Permissions
         */
        protected function pagePermissionObject(){
            if( $this->_pagePermissionObj === null ){
                $this->_pagePermissionObj = new Permissions( $this->getCollectionObject() );
            }
            return $this->_pagePermissionObj;
        }

    }