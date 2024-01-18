<?

public $oclave1, $oct1, $onombre_ct1, $odomicilio_ct1, $ocolonia_ct1, $olocalidad_ct1, $omunicipio_ct1, $osector_ct1, $ozona_ct1, $otelefono_ct1, $ocorreo_ct1, $odirector_ct1, $osupervisor_ct1, $ojefe_sector_ct1, $oclave2, $oct2, $onombre_ct2, $odomicilio_ct2, $ocolonia_ct2, $olocalidad_ct2, $omunicipio_ct2, $osector_ct2, $ozona_ct2, $otelefono_ct2, $ocorreo_ct2, $odirector_ct2, $osupervisor_ct2, $ojefe_sector_ct2;

    public function saveCentros($id_user)
    {    
        $datosCentros = DatosCentros::where('id_user','=',$id_user)->first();

        if($datosCentros)
        {
                $this->validate([
                    'oclave1'  => 'required',
                    'oct1'  => 'required',
                    'onombre_ct1'  => 'required',
                    'odomicilio_ct1'  => 'required',
                    'ocolonia_ct1'  => 'required',
                    'ocp_ct1'  => 'required',
                    'olocalidad_ct1'  => 'required',
                    'omunicipio_ct1'  => 'required',
                    'osector_ct1'  => 'required',
                    'ozona_ct1'  => 'required',
                    'otelefono_ct1'  => 'required',
                    'ocorreo_ct1'  => 'required',
                    'odirector_ct1'  => 'required',
                    'osupervisor_ct1'  => 'required',
                    'ojefe_sector_ct1'  => 'required',
                ], $message=[
                    'oclave1.required'          => 'Clave presupuestal como en talón de pago',
                    'oct1.required'             => 'Ingrese la clave del C.T.',
                    'onombre_ct1.required'      => 'Ingresa el nombre del C.T.',
                    'odomicilio_ct1.required'   => 'Ingresa el domicilio (calle y número)',
                    'ocolonia_ct1.required'     => 'Ingresa la colonia',
                    'ocp_ct1.required'          => 'Ingresa el C.P.',
                    'olocalidad_ct1.required'   => 'Ingresa la localidad',
                    'omunicipio_ct1.required'   => 'Ingresa el municipio',
                    'osector_ct1.required'      => 'Ingresa el sector escolar',
                    'ozona_ct1.required'        => 'Ingresa la zona escolar',
                    'otelefono_ct1.required'    => 'Ingresa algún télefono ',
                    'ocorreo_ct1.required'      => 'Ingresa algún correo',
                    'odirector_ct1.required'    => 'Ingresa el nombre del director(a)',
                    'osupervisor_ct1.required'  => 'Ingresa el nombre del supervisor(a)',
                    'ojefe_sector_ct1.required' => 'Ingresa el nombre del jefe(a)',
                ]);

                $datCentros = DB::table('e12centros_trabajo') ->where('id_user', '=', $id_user );
                $datCentros->update([
                    'oclave1'           => $this->oclave1,
                    'oct1'              => $this->oct1,
                    'onombre_ct1'       => $this->onombre_ct1,
                    'odomicilio_ct1'    => $this->odomicilio_ct1,
                    'ocolonia_ct1'      => $this->ocolonia_ct1,
                    'ocp_ct1'           => $this->ocp_ct1,
                    'olocalidad_ct1'    => $this->olocalidad_ct1,
                    'omunicipio_ct1'    => $this->omunicipio_ct1,
                    'osector_ct1'       => $this->osector_ct1,
                    'ozona_ct1'         => $this->ozona_ct1,
                    'otelefono_ct1'     => $this->otelefono_ct1,
                    'ocorreo_ct1'       => $this->ocorreo_ct1,
                    'odirector_ct1'     => $this->odirector_ct1,
                    'osupervisor_ct1'   => $this->osupervisor_ct1,
                    'ojefe_sector_ct1'  => $this->ojefe_sector_ct1,
                    'oclave1'           => $this->oclave1,
                    'oct2'              => $this->oct2,
                    'onombre_ct2'       => $this->onombre_ct2,
                    'odomicilio_ct2'    => $this->odomicilio_ct2,
                    'ocolonia_ct2'      => $this->ocolonia_ct2,
                    'olocalidad_ct2'    => $this->olocalidad_ct2,
                    'omunicipio_ct2'    => $this->omunicipio_ct2,
                    'osector_ct2'       => $this->osector_ct2,
                    'ozona_ct2'         => $this->ozona_ct2,
                    'otelefono_ct2'     => $this->otelefono_ct2,
                    'ocorreo_ct2'       => $this->ocorreo_ct2,
                    'odirector_ct2'     => $this->odirector_ct2,
                    'osupervisor_ct2'   => $this->osupervisor_ct2,
                    'ojefe_sector_ct2'  => $this->ojefe_sector_ct2,
                ]);

        }else{
                $this->validate([
                    'oclave1'  => 'required',
                    'oct1'  => 'required',
                    'onombre_ct1'  => 'required',
                    'odomicilio_ct1'  => 'required',
                    'ocolonia_ct1'  => 'required',
                    'ocp_ct1'  => 'required',
                    'olocalidad_ct1'  => 'required',
                    'omunicipio_ct1'  => 'required',
                    'osector_ct1'  => 'required',
                    'ozona_ct1'  => 'required',
                    'otelefono_ct1'  => 'required',
                    'ocorreo_ct1'  => 'required',
                    'odirector_ct1'  => 'required',
                    'osupervisor_ct1'  => 'required',
                    'ojefe_sector_ct1'  => 'required',
                ], $message=[
                    'oclave1.required'          => 'Clave presupuestal como en talón de pago',
                    'oct1.required'             => 'Ingrese la clave del C.T.',
                    'onombre_ct1.required'      => 'Ingresa el nombre del C.T.',
                    'odomicilio_ct1.required'   => 'Ingresa el domicilio (calle y número)',
                    'ocolonia_ct1.required'     => 'Ingresa la colonia',
                    'ocp_ct1,required'          => 'Increse el C.P.',
                    'olocalidad_ct1.required'   => 'Ingresa la localidad',
                    'omunicipio_ct1.required'   => 'Ingresa el municipio',
                    'osector_ct1.required'      => 'Ingresa el sector escolar',
                    'ozona_ct1.required'        => 'Ingresa la zona escolar',
                    'otelefono_ct1.required'    => 'Ingresa algún télefono ',
                    'ocorreo_ct1.required'      => 'Ingresa algún correo',
                    'odirector_ct1.required'    => 'Ingresa el nombre del director(a)',
                    'osupervisor_ct1.required'  => 'Ingresa el nombre del supervisor(a)',
                    'ojefe_sector_ct1.required' => 'Ingresa el nombre del jefe(a)',
                ]);

                DatosCentros::create([
                    'id_user'            => 1,
                    'oclave1'           => $this->oclave1,
                    'oct1'              => $this->oct1,
                    'onombre_ct1'       => $this->onombre_ct1,
                    'odomicilio_ct1'    => $this->odomicilio_ct1,
                    'ocolonia_ct1'      => $this->ocolonia_ct1,
                    'ocp_ct1'           => $this->ocp_ct1,
                    'olocalidad_ct1'    => $this->olocalidad_ct1,
                    'omunicipio_ct1'    => $this->omunicipio_ct1,
                    'osector_ct1'       => $this->osector_ct1,
                    'ozona_ct1'         => $this->ozona_ct1,
                    'otelefono_ct1'     => $this->otelefono_ct1,
                    'ocorreo_ct1'       => $this->ocorreo_ct1,
                    'odirector_ct1'     => $this->odirector_ct1,
                    'osupervisor_ct1'   => $this->osupervisor_ct1,
                    'ojefe_sector_ct1'  => $this->ojefe_sector_ct1,
                    'oclave2'           => $this->oclave2,
                    'oct2'              => $this->oct2,
                    'onombre_ct2'       => $this->onombre_ct2,
                    'odomicilio_ct2'    => $this->odomicilio_ct2,
                    'ocolonia_ct2'      => $this->ocolonia_ct2,
                    'ocp_ct2'           => $this->ocp_ct2,
                    'olocalidad_ct2'    => $this->olocalidad_ct2,
                    'omunicipio_ct2'    => $this->omunicipio_ct2,
                    'osector_ct2'       => $this->osector_ct2,
                    'ozona_ct2'         => $this->ozona_ct2,
                    'otelefono_ct2'     => $this->otelefono_ct2,
                    'ocorreo_ct2'       => $this->ocorreo_ct2,
                    'odirector_ct2'     => $this->odirector_ct2,
                    'osupervisor_ct2'   => $this->osupervisor_ct2,
                    'ojefe_sector_ct2'  => $this->ojefe_sector_ct2,
                    'oban_fin'          => '1',
                ]);
        }

   }


   public function editCentros($id_user)
   {
            $datoCentros_ = DatosCentros::where('id_user','=',$id_user)->first();

            $datosCentros = DatosCentros::find($datosCentros_->id);
            
            $this->oclave1          = $datosCentros->oclave1;
            $this->oct1             = $datosCentros->oct1;
            $this->onombre_ct1      = $datosCentros->onombre_ct1;
            $this->odomicilio_ct1   = $datosCentros->odomicilio_ct1;
            $this->ocolonia_ct1     = $datosCentros->ocolonia_ct1;
            $this->olocalidad_ct1   = $datosCentros->olocalidad_ct1;
            $this->omunicipio_ct1   = $datosCentros->omunicipio_ct1;
            $this->osector_ct1      = $datosCentros->osector_ct1;
            $this->ozona_ct1        = $datosCentros->ozona_ct1;
            $this->otelefono_ct1    = $datosCentros->otelefono_ct1;
            $this->ocorreo_ct1      = $datosCentros->ocorreo_ct1;
            $this->odirector_ct1    = $datosCentros->odirector_ct1;
            $this->osupervisor_ct1  = $datosCentros->osupervisor_ct1;
            $this->ojefe_sector_ct1 = $datosCentros->ojefe_sector_ct1;
            $this->oclave2          = $datosCentros->oclave2;
            $this->oct2             = $datosCentros->oct2;
            $this->onombre_ct2      = $datosCentros->onombre_ct2;
            $this->odomicilio_ct2   = $datosCentros->odomicilio_ct2;
            $this->ocolonia_ct2     = $datosCentros->ocolonia_ct2;
            $this->olocalidad_ct2   = $datosCentros->olocalidad_ct2;
            $this->omunicipio_ct2   = $datosCentros->omunicipio_ct2;
            $this->osector_ct2      = $datosCentros->osector_ct2;
            $this->ozona_ct2        = $datosCentros->ozona_ct2;
            $this->otelefono_ct2    = $datosCentros->otelefono_ct2;
            $this->ocorreo_ct2      = $datosCentros->ocorreo_ct2;
            $this->odirector_ct2    = $datosCentros->odirector_ct2;
            $this->osupervisor_ct2  = $datosCentros->osupervisor_ct2;
            $this->ojefe_sector_ct2 = $datosCentros->ojefe_sector_ct2;

            $users = DB::table('e12etapas_avance')->where('id_user', '=', $id_user );
            $users->update([
                        'opersonales_open' => 0,
                        'oescolares_open'  => 0,
                        'olaborales_open'  => 0,
                        'oprograma_open'   => 1,
                    ]);

        return view('livewire.registro-posgrado-component');
   }