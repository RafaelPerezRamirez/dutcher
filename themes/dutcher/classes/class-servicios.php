<?php
    namespace Narvaez;
    Class Servicios{
        public $ID                  = 0 ;
        public $Nombre              = '';
        public $Icono               = '';
        public $Informacion         = '';
        public $Subsector           = array();

        function __construct( $id = 0 ){
            $this->ID               = $id;
            $meta                   = get_post_meta( $this->ID );
            $this->Nombre           = get_the_title( $this->ID );
            $this->Icono            = isset( $meta[ 'info_icono' ] ) ? _processed_value( reset( $meta[ 'info_icono' ] ), 'image_media' ) : '';
            $this->Informacion      = isset( $meta[ 'info_informacion' ] ) ? reset( $meta[ 'info_informacion' ] ) : '';
            $this->Subsector        = $meta['info_subsector'];
        }
    }
?>
