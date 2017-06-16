<?php
    namespace Narvaez;
    Class Candidatos{
        public $ID                  = 0 ;
        public $Nombre              = '';
        public $Email               = '';
        public $Direccion           = '';
        public $Ciudad              = '';
        public $Telefono            = '';
        public $Cp                  = '';
        public $Pais                = '';
        public $Sector              = '';
        public $Posicion            = '';
        public $Experiencia         = '';
        public $Curriculum          = '';

        function __construct( $id = 0 ){
            $this->ID               = $id;
            $meta                   = get_post_meta( $this->ID );
            $this->Nombre           = get_the_title( $this->ID );
            $this->Email            = isset( $meta[ 'info_email' ] ) ? reset( $meta[ 'info_email' ] ) : '';
            $this->Direccion        = isset( $meta[ 'info_direccion' ] ) ? reset( $meta[ 'info_direccion' ] ) : '';
            $this->Ciudad           = isset( $meta[ 'info_ciudad' ] ) ? reset( $meta[ 'info_ciudad' ] ) : '';
            $this->Telefono         = isset( $meta[ 'info_telefono' ] ) ? reset( $meta[ 'info_telefono' ] ) : '';
            $this->Cp               = isset( $meta[ 'info_cp' ] ) ? reset( $meta[ 'info_cp' ] ) : '';
            $this->Pais             = isset( $meta[ 'info_pais' ] ) ? reset( $meta[ 'info_pais' ] ) : '';
            $this->Sector           = isset( $meta[ 'info_sector' ] ) ? reset( $meta[ 'info_sector' ] ) : '';
            $this->Posicion         = isset( $meta[ 'info_posicion' ] ) ? reset( $meta[ 'info_posicion' ] ) : '';
            $this->Experiencia      = isset( $meta[ 'info_experiencia' ] ) ? reset( $meta[ 'info_experiencia' ] ) : '';
            $this->Curriculum       = isset( $meta[ 'info_cv' ] ) ? reset( $meta[ 'info_cv' ] ) : '';
        }
    }
?>
