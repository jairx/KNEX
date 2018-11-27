<?php    

    class Queries {

        private $conexao;

        public function Queries(){

            header("Access-Control-Allow-Origin: *");
            header('Content-Type: text/html; charset=UTF-8');
            $host = "mysql:host=localhost;dbname=jairneto_knex";
            $usuario = "jairneto_teamx";
            $senha = "Copa2018";
        
            try {
        
                $conexao = new PDO($host, $usuario, $senha);
        
            } catch (Exception $ex) {
        
                echo "Erro ao estabelecer conexão: ". $ex->getMessage();
        
            };

            $this->conexao = $conexao;

        }

        public function selectArea() {

            $string = "select * from AREA order by AREA asc;";
    
            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return $sql;
    
        }

        public function selectAssunto($areaSelecionada) {

            $string = "select * from ASSUNTO where ID_AREA = ".$areaSelecionada." order by ASSUNTO asc;";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return $sql;

        }

        public function insertUsuario($usuario, $senha, $nome, $cpf, $email){

            $string = "insert into USUARIO(USUARIO, SENHA, NOME, CPF, EMAIL) values('".$usuario."', '".$senha."', '".$nome."', 
            '".$cpf."', '".$email."');";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return true;

        }

        public function selectPontuacao($idUsuario){

            $string = "select PONTOS from USUARIO where ID_USUARIO = ".$idUsuario.";";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            $pontuacao = $sql->fetch();

            return $pontuacao['PONTOS'];

        }

        public function insertQuestao($pergunta, $respostaCerta, $resposta2, $resposta3, $resposta4, $resposta5, $idUsuario, $idAssunto){

            $string = "insert into QUESTAO(PERGUNTA, RESPOSTA_CERTA, RESPOSTA2, RESPOSTA3, RESPOSTA4, RESPOSTA5, ID_USUARIO, ID_ASSUNTO) 
            values ('".$pergunta."', '".$respostaCerta."', '".$resposta2."', '".$resposta3."', '".$resposta4."', '".$resposta5."', 
            ".$idUsuario.", ".$idAssunto.");";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return true;

        }

        public function selectQuestao($idAssunto){

            $string = "select * from QUESTAO where ID_ASSUNTO = ".$idAssunto." order by PERGUNTA asc;";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return $sql;

        }

        public function insertDenuncia($motivo, $explicacao, $idQuestao, $idUsuario){

            $string = "insert into DENUNCIA(MOTIVO, EXPLICACAO, ID_QUESTAO, ID_USUARIO) 
            values ('".$motivo."', '".$explicacao."', ".$idQuestao.", ".$idUsuario.");";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return true;

        }

        public function selectDenuncia($idUsuario){

            $string = "select * from DENUNCIA where ID_USUARIO = ".$idUsuario." order by ID_DENUNCIA desc;";

            $sql = $this->conexao->prepare($string);

            $sql->execute();

            return $sql;

        }

        public function selectUsuario($usuario, $senha){

            $string = "select USUARIO, SENHA from USUARIO where USUARIO = '".$usuario."' and SENHA = '".$senha."';";

            $sql = $this->conexao->prepare($string);

            try {
                $sql->execute();
            }catch (Exception $e) {
                return 0;
            }

            return $idUsuario;

        }

        public function inserePontuacao($idUsuarioResposta, $idUsuarioQuestao, $certa){

            $string1 = "select PONTOS into ".$pontosUsuarioResposta." from USUARIO where ID_USUARIO = ".$idUsuarioResposta.";";

            $sql1 = $this->conexao->prepare($string1);

            $sql1->execute();

            $string2 = "select PONTOS into ".$pontosUsuarioQuestao." from USUARIO where ID_USUARIO = ".$idUsuarioQuestao.";";

            $sql2 = $this->conexao->prepare($string2);

            $sql2->execute();

            if($certa){
                $pontosUsuarioResposta = $pontosUsuarioResposta + 1;
                $pontosUsuarioQuestao = $pontosUsuarioQuestao - 1;
            }else{
                $pontosUsuarioResposta = $pontosUsuarioResposta - 1;
                $pontosUsuarioQuestao = $pontosUsuarioQuestao + 1;
            }

            $string3 = "update USUARIO set PONTOS = ".$pontosUsuarioResposta." where ID_USUARIO = ".$idUsuarioResposta.";";

            $sql3 = $this->conexao->prepare($string3);

            $sql3->execute();

            $string4 = "update USUARIO set PONTOS = ".$pontosUsuarioQuestao." where ID_USUARIO = ".$idUsuarioQuestao.";";

            $sql4 = $this->conexao->prepare($string4);

            $sql4->execute();

            return true;

        }

    }


    // $sql->execute();

    // while($lista = $sql->fetch()){

    //     $area1->setIdArea($lista["ID_AREA"]);
    //     $area1->setArea($lista["AREA"]);

    // }

    // echo "'{$area1->getIdArea()}' . ' - ' . '{$area1->getArea()}'";