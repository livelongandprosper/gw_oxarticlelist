<?php
	class gw_oxarticlelist extends gw_oxarticlelist_parent {
		
		/**
		 * _getCategorySelect function.
		 * 
		 * @access protected
		 * @param mixed $sFields
		 * @param mixed $sCatId
		 * @param mixed $aSessionFilter
		 * @return void
		 */
		protected function _getCategorySelect( $sFields, $sCatId, $aSessionFilter ) {
	        $sArticleTable = getViewName( 'oxarticles' );
	        $sO2CView      = getViewName( 'oxobject2category' );

			// order by oxtitle be default
	        if ( !$this->_sCustomSorting ) {
	            $this->_sCustomSorting = $sArticleTable.".oxtitle ";
	        }

			return parent::_getCategorySelect( $sFields, $sCatId, $aSessionFilter );
		}
	}	
?>