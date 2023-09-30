<?php
/*
    Criação da classe Usuario com o CRUD
*/
class UsuarioDAO{
    
    public function create(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (                   
                        nome,sobrenome,idade,cep,rua,estado,cidade,numero,cpf,genero,complemento)
                    VALUES (
                        :nome,:sobrenome,:idade,:cep,:rua,:estado,:cidade,:numero,:cpf,:genero,:complemento)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":cep", $usuario->getCep());
            $p_sql->bindValue(":rua", $usuario->getRua());
            $p_sql->bindValue(":estado", $usuario->getEstado());
            $p_sql->bindValue(":cidade", $usuario->getCidade());
            $p_sql->bindValue(":numero", $usuario->getNumero());
            $p_sql->bindValue(":cpf", $usuario->getCpf());
            $p_sql->bindValue(":genero", $usuario->getGenero());
            $p_sql->bindValue(":complemento", $usuario->getComplemento());
            
            
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir usuario <br>" . $e . '<br>';
        }
    }

        public function read() {
        try {
            $sql = "SELECT * FROM usuario order by nome asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
     
    public function update(Usuario $usuario) {
        try {
            $sql = "UPDATE usuario set
                
                nome=:nome,
                sobrenome=:sobrenome,
                idade=:idade,
                cep=:cep,
                rua=:rua,
                estado=:estado,
                cidade=:cidade,
                numero=:numero,
                cpf=:cpf,
                genero=:genero,
                complemento=:complemento,          
                                                                       
                  WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":cep", $usuario->getCep());
            $p_sql->bindValue(":rua", $usuario->getRua());
            $p_sql->bindValue(":estado", $usuario->getEstado());
            $p_sql->bindValue(":cidade", $usuario->getCidade());
            $p_sql->bindValue(":numero", $usuario->getNumero());
            $p_sql->bindValue(":cpf", $usuario->getCpf());
            $p_sql->bindValue(":genero", $usuario->getGenero());
            $p_sql->bindValue(":complemento", $usuario->getComplemento());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Usuario $usuario) {
        try {
            $sql = "DELETE FROM usuario WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }


    

    private function listaUsuarios($row) {
        $usuario = new Usuario();
        $usuario->setId($row['id']);
        $usuario->setNome($row['nome']);
        $usuario->setSobrenome($row['sobrenome']);
        $usuario->setIdade($row['idade']);
        $usuario->setCep($row['cep']);
        $usuario->setRua($row['rua']);
        $usuario->setEstado($row['estado']);
        $usuario->setCidade($row['cidade']);
        $usuario->setNumero($row['numero']);
        $usuario->setCpf($row['cpf']);
        $usuario->setGenero($row['genero']);
        $usuario->setComplemento($row['complemento']);

        return $usuario;
    }
 }
 ?>