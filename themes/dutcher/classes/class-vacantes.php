<?php
    namespace Narvaez;
    Class Vacantes{
        public $ID                  = 0 ;
        public $Nombre              = '';
        public $Perfil              = '';
        public $Ubicacion           = '';
        public $Linkgmaps           = '';
        public $Horario             = '';
        public $Sueldo              = '';
        public $Actividades         = '';
        public $Sector              = '';
        public $Empresa             = '';
        public $Mailenvio           = '';

        function __construct( $id = 0 ){
            $this->ID               = $id;
            $meta                   = get_post_meta( $this->ID );
            $this->Nombre           = get_the_title( $this->ID );
            $this->Perfil           = isset( $meta[ 'info_perfil' ] ) ? reset( $meta[ 'info_perfil' ] ) : '';
            $this->Ubicacion        = isset( $meta[ 'info_ubicacion' ] ) ? reset( $meta[ 'info_ubicacion' ] ) : '';
            $this->Linkgmaps        = isset( $meta[ 'info_linkgmaps' ] ) ? reset( $meta[ 'info_linkgmaps' ] ) : '';
            $this->Horario          = isset( $meta[ 'info_horario' ] ) ? reset( $meta[ 'info_horario' ] ) : '';
            $this->Sueldo           = isset( $meta[ 'info_sueldo' ] ) ? reset( $meta[ 'info_sueldo' ] ) : '';
            $this->Actividades      = isset( $meta[ 'info_actividades' ] ) ? reset( $meta[ 'info_actividades' ] ) : '';
            $Sectorid               = isset( $meta[ 'info_sector' ] ) ? reset( $meta[ 'info_sector' ] ) : '';
            $this->Sector           = get_the_title( $Sectorid );
            $this->Empresa          = isset( $meta[ 'info_empresa' ] ) ? reset( $meta[ 'info_empresa' ] ) : '';
            $this->Mailenvio        = isset( $meta[ 'info_mail_envio' ] ) ? reset( $meta[ 'info_mail_envio' ] ) : '';
        }
    }
?>
