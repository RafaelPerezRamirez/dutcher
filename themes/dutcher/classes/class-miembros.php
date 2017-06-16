<?php
    namespace Narvaez;
    Class Miembros{
        public $ID                  = 0 ;
        public $Nombre              = '';
        public $Puesto              = '';
        public $Informacion         = '';
        public $Foto_principal      = '';
        public $Pais                = '';
        public $Linkedin            = '';

        function __construct( $id = 0 ){
            $this->ID               = $id;
            $meta                   = get_post_meta( $this->ID );
            $this->Nombre           = get_the_title( $this->ID );
            $this->Puesto           = isset( $meta[ 'info_puesto' ] ) ? reset( $meta[ 'info_puesto' ] ) : '';
            $this->Informacion      = isset( $meta[ 'info_informacion' ] ) ? reset( $meta[ 'info_informacion' ] ) : '';
            $this->Foto_principal   = isset( $meta[ 'info_foto_principal' ] ) ? _processed_value( reset( $meta[ 'info_foto_principal' ] ), 'image_media' ) : '';
            $this->Pais             = isset( $meta[ 'info_pais' ] ) ? reset( $meta[ 'info_pais' ] ) : '';
            $this->Linkedin         = isset( $meta[ 'info_linkedin' ] ) ? reset( $meta[ 'info_linkedin' ] ) : '';
        }
    }
?>
