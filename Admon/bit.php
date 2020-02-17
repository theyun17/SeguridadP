 public function login($usuario, $password, $empresa)
 {
     $bitacora = new bitacora();
     $result = array();
     try {
         $result = $this->dame_query("select * from usuario where login='{$usuario}' and clave='{$password}'");
         if ($result['suceed'] == 'true' && count($result['data']) > 0) {
             $autorizado = $this->dame_query("select usuario_empresa_rol.*, tipo_usuario.nombre 'tipo_usuario' , empresa.nombre 'empresa' \n                    from usuario_empresa_rol\n                    inner join tipo_usuario on usuario_empresa_rol.tipo_usuario_id = tipo_usuario.id\n                    inner join empresa on usuario_empresa_rol.empresa_id = empresa.id\n                        where usuario_id='{$result['data'][0]['id']}' and empresa_id='{$empresa}'");
             if ($autorizado['suceed'] && count($autorizado['data']) > 0) {
                 session_start();
                 $_SESSION['usuario'] = $result['data'][0];
                 $_SESSION['usuario']['empresa_id'] = $autorizado['data'][0]['empresa_id'];
                 $_SESSION['usuario']['empresa'] = $autorizado['data'][0]['empresa'];
                 $_SESSION['usuario']['tipo_usuario'] = $autorizado['data'][0]['tipo_usuario'];
                 $_SESSION['status'] = 'logueado';
                 $bitacora->log($result['data'][0]['id'], "inicio sesion");
                 header("location:" . ROOT . "/sistema/usuario/");
                 return $result;
             } else {
                 $bitacora->log($result['data'][0]['id'], "intento fallido de inicio de sesión para empresa:{$empresa} por {$usuario}");
                 $result['suceed'] = false;
                 $result['error'] = "Usuario no autorizado para esta empresa";
                 return $result;
             }
         } else {
             $bitacora->log("1", "intento fallido de inicio de sesión= usuario: {$usuario}, password: {$password}");
             $result['suceed'] = false;
             $result['error'] = "Login y/o clave inválidos";
             return $result;
         }
     } catch (Exception $exc) {
         trigger_error($exc->getTraceAsString(), E_USER_NOTICE);
         $result['suceed'] = false;
         $result['error'] = "Error desconocido. Contacte al administrador del sistema.";
         return $result;
     }
 }