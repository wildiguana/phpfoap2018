<html>
    
</html>

if($contrasena1 != $contrasena2){
                    $errors=("<li>Las contraseñas no coinciden.</li>");
                }else{
                    if(strlen($contrasena1) < 6 || strlen($contrasena1) > 8){
                        $errors = $errors . "<li>La contraseña debe tener entre 6 y 8 caracteres</li>";
                    }
                    if (!preg_match('/[a-z]/',$contrasena1)){
                        $errors = $errors . "<li>La contraseña debe tener al menos una letra minúscula</li>";
                    }
                    if (!preg_match('/[A-Z]/',$contrasena1)){
                        $errors = $errors . "<li>La contraseña debe tener al menos una letra mayúscula</li>";
                    }
                    if (!preg_match('/[0-9]/',$contrasena1)){
                        $errors = $errors . "<li>La contraseña debe tener al menos un caracter numérico</li>";
                    }
                    if (!preg_match('/[#~$%!]/',$contrasena1)){
                        $errors = $errors . "<li>La contraseña debe tener al menos un caracter de estos '#~$%!'</li>";
                    }
                    $errors=valida_contrasena($contrasena1,$errors);
                    if (empty($errors)){
                        header('Location:ejercicio5_loginOK.php');
                    }
                }
            } 
        }
        function valida_contrasena($contrasena,$errors){
            if(strlen($contrasena) < 6 || strlen($contrasena) > 8){
                $errors = $errors . "<li>La contraseña debe tener entre 6 y 8 caracteres</li>";
            }
            if (!preg_match('/[a-z]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos una letra minúscula</li>";
            }
            if (!preg_match('/[A-Z]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos una letra mayúscula</li>";
            }
            if (!preg_match('/[0-9]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos un caracter numérico</li>";
            }
            if (!preg_match('/[#~$%!]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos un caracter de estos '#~$%!'</li>";
            }
            return $errors;
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);