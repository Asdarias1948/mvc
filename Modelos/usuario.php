<?php



class Usuario{

    private $pdo;

   private $id_user;
   private $nom_apelli;
   private $cedula;
   private $telefono;
   private $correo;
   private $cargo;
   private $clave;
   private $id_roll;
   private $permiso;
  
            public function __construct() {
                $this->pdo = bd::Conectar();
            }
            //--------------------------------------------------------------------//
                        public function getUsu_id_user(): int {
                            return $this->id_user;
                        }

                        public function setUsu_id_user(int $id_user) {
                            $this->id_user = $id_user;
                        }
            //--------------------------------------------------------------------//
                        public function getUsu_nom_apelli(): string {
                            return $this->nom_apelli;
                        }

                        public function setUsu_nom_apelli(string $nom_apelli) {
                            $this->nom_apelli = $nom_apelli;
                        }
            //--------------------------------------------------------------------//

            //--------------------------------------------------------------------//
                        public function getUsu_cedula(): int {
                            return $this->cedula;
                        }

                        public function setUsu_cedula(int $cedula) {
                            $this->cedula = $cedula;
                        }
            //--------------------------------------------------------------------//


           
            //--------------------------------------------------------------------//
                        public function getUsu_telefono(): int {
                            return $this->telefono;
                        }

                        public function setUsu_telefono(int $telefono) {
                            $this->telefono = $telefono;
                        }
            //--------------------------------------------------------------------//

           //--------------------------------------------------------------------//
                     public function getUsu_correo(): string {
                        return $this->correo;
                    }

                    public function setUsu_correo(string $correo) {
                        $this->correo = $correo;
                    }
        //--------------------------------------------------------------------//                

       //--------------------------------------------------------------------//
             
                public function getUsu_cargo(): string {
                    return $this->cargo;
                }

                public function setUsu_cargo(string $cargo) {
                    $this->cargo = $cargo;
                }

      //--------------------------------------------------------------------//                
      
     //--------------------------------------------------------------------//
             
            public function getUsu_clave(): string {
                return $this->clave;
            }

            public function setUsu_clave(string $clave) {
                $this->clave = $clave;
            }

  //--------------------------------------------------------------------// 

                 //--------------------------------------------------------------------//
             
                 public function getUsu_id_roll(): int {
                    return $this->id_roll;
                }
    
                public function setUsu_id_roll(int $id_roll) {
                    $this->id_roll = $id_roll;
                }
    
      //--------------------------------------------------------------------// 

                    //--------------------------------------------------------------------//
             
                    public function getUsu_permiso(): string {
                        return $this->permiso;
                    }
        
                    public function setUsu_permiso(string $permiso) {
                        $this->permiso = $permiso;
                    }
        
          //--------------------------------------------------------------------// 
          
          
                     //--------------------------------------------------------------------//
             public function Cantidad_U(){
                try{
                    $consultar = $this->pdo->prepare("SELECT SUM(id_user) as Cantidad FROM users;");
                    $consultar->execute();
                    return $consultar->fetch(PDO::FETCH_OBJ);
                }catch(Exception $e){
                    die($e->getMessage());
                }
             }
        




             public function Listar(){
                try{
                    $consultar = $this->pdo->prepare("SELECT * FROM users;");
                    $consultar->execute();
                    return $consultar->fetchAll(PDO::FETCH_OBJ);
                }catch(Exception $e){
                    die($e->getMessage());
                }
             }
        
          //--------------------------------------------------------------------// 
                        








    }

