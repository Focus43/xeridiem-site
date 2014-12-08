<?php defined('C5_EXECUTE') or die("Access Denied.");
	
	
	/**
	 * Button Link block.
     * @note: this block is customized to use FontAwesome icons, and depends on the .scss
     * file in the TOJ package to parse the available icon names.
	 */
	class ImageAndContentBlockController extends BlockController {

        const MAX_IMAGE_WIDTH  = 1200,
              MAX_IMAGE_HEIGHT = 800;

		protected $btTable 									= 'btImageAndContent';
		protected $btInterfaceWidth 						= '550';
		protected $btInterfaceHeight						= '400';
		protected $btCacheBlockRecord 						= true;
		protected $btCacheBlockOutput 						= true;
		protected $btCacheBlockOutputOnPost 				= true;
		protected $btCacheBlockOutputForRegisteredUsers 	= true;
		protected $btCacheBlockOutputLifetime 				= CACHE_LIFETIME;
		
        // database fields
        public $fileID, $content;
        
        
		public function getBlockTypeDescription(){
			return t("Image and Content Block");
		}
		
		
		public function getBlockTypeName(){
			return t("Image And Content");
		}
        
        
        public function add(){ $this->edit(); }
        public function edit(){
            $this->set('assetHelper', Loader::helper('concrete/asset_library'));
        }
		
        
		public function view(){
            $this->set('content', $this->getContent());
            $this->set('resizedImageObj', $this->getResized());
		}


        /** @return string */
        public function getContent() {
            $content = Loader::helper('content')->translateFrom($this->content);
            return $content;
        }


        /** @return string */
        public function getSearchableContent(){
            return $this->content;
        }


        /** @return string */
        public function getContentEditMode() {
            $content = Loader::helper('content')->translateFromEditMode($this->content);
            return $content;
        }


        /** @return stdObject | null */
        private function getResized(){
            if( $this->_resizedObj === null ){
                $imageHelper = Loader::helper('image');
                $this->_resizedObj = $imageHelper->getThumbnail($this->fileObject(), self::MAX_IMAGE_WIDTH, self::MAX_IMAGE_HEIGHT, true);
            }
            return $this->_resizedObj;
        }
        
        
        /** @return File */
        public function fileObject(){
            if( $this->_fileObject === null ){
                $this->_fileObject = File::getByID( $this->fileID );
            }
            return $this->_fileObject;
        }


        /** @param array $args @return void */
		public function save( $args ){
            $args['content'] = Loader::helper('content')->translateTo($args['content']);
            parent::save($args);
		}
		
	}