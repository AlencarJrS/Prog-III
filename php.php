<?php


// Página de verificação de data e horário

include ('config.php');
include ('mail.php');


$horaemail = $_POST['time'];

        if (@$_REQUEST['botao'] == "Gravar") 
        {   
            

                if(!isset($_POST['barba']) && empty($_POST['cabelo']))
                {
                    echo "<script>
                            alert('Informe o procedimento');
                            history.back();
                        </script>";

                }else if(@$_POST['barba'] ==1 && $_POST['cabelo'] == 1){

                    if($_POST['time'] >='09:00:00' && $_POST['time'] <'16:00:00')
                    {
                        $time = date('H:i:s', strtotime('+2 hour', strtotime( $_POST['time'])));
                    }else echo "<script>
                                    alert('Horario não Disponivel !');
                                    history.back();
                                </script>";
                    

                }else if(@$_POST['barba'] == 1 || $_POST['cabelo'] == 1){
                   
                    if($_POST['time'] >='09:00:00' && $_POST['time'] < '17:00:00')
                    {
                        $time = date('H:i:s', strtotime('+60 minute', strtotime( $_POST['time'])));

                    }else echo "<script>
                                    alert('Horario não Disponivel !".$_POST['time']."');
                                    history.back();
                                </script>";
                   
                }
                  
                $consult = "SELECT COUNT(*) as total FROM info_cliente WHERE data ='".$_POST['data']."' AND time='".$_POST['time']."' AND time_fim='".$time."'";

                $result_insere = mysqli_query($con, $consult);
                
                $contagemFuncionario = mysqli_fetch_assoc($result_insere);

                if($contagemFuncionario['total'] > 2)
                {
                    echo "horario lotado";
                }else{

                    if(date('w', strtotime($_POST['data'])) == 0)
                    {
                        echo "<script>
                            alert('Atendimento de Segunda a Sexta');
                            history.back();
                        </script>";
                        
                    }else
                        {
                            echo @$insere = "INSERT into info_cliente (nome, cpf, telefone, email, barba, cabelo, data, time, time_fim) 
                            VALUES ('".$_POST['nome']."', '".$_POST['cpf']."', '".$_POST['telefone']."', '".$_POST['email']."', '".$_POST['barba']."', '".$_POST['cabelo']."', '".$_POST['data']."',CURTIME(),'".$time."')";
                            
                            $result_insere = mysqli_query($con, $insere);
                            
                            if (!$result_insere) echo $result_insere;
                            else echo "<script>
                                            alert('Cadastrado com Sucesso !');
                                            history.back();
                                        </script>";

                                        
                            //Envio de email
                            ini_set('display_errors', 1);

                            error_reporting(E_ALL);
                            
                            $from = "alencar@alencarjunior.tech";
                            
                            $to = $_POST['email'];
                            
                            $subject = "Agendamento de horário - Barbearia Lâmina Afiada";
                            
                            $message = "Agradecemos a preferência, seu horário de atendimento as {$time_fim} está confirmado, qualquer dúvida entre em contato 41 4002-8922 ou através do email: lmaafiada@gmail.com";
                            
                            $headers = "De: ". $from;
                            echo "teste";
                            mail($to, $subject, $message, $headers);
                            
                            echo "A mensagem de e-mail foi enviada.";
                            


                        }
                        
                }
          
        }



?>