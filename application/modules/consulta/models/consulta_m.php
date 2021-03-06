<?php (defined('BASEPATH')) or exit('No direct script access allowed');


class consulta_m extends CI_Model
{
    public $table = 'TEACHER';
    public $primary_key = 'IDPROFESSOR';

    public function __construct()
    {
        //Carrega o banco de dados
        $this->load->database();

        //Seta timezone do brasil no MYSQL
        $this->db->simple_query("SET time_zone= '+3:00'");
        $this->db->simple_query("SET lc_time_names= 'pt_BR'");

        $this->db->query("SET SESSION group_concat_max_len = 1000000");
    }

   public function get($query)
    {
        if($query == 1){
            $this->db->select('m.nome, m.populacaototal, c.populacao, (c.populacao*100)/m.populacaototal as percentual, c.quantempresa')
                     ->from('municipio as m')
                     ->join('coleta_seletiva c', 'm.id_municipio=c.id_municipio')
                     ->where('c.coleta_seletiva', 1)
                     ->order_by('m.nome', 'ASC');
        }else if($query == 2){
            $query = $this->db->query('
                select nome
                from municipio
                where id_municipio in
                (
                    select id_municipio
                    from municipio
                    union
                    select id_municipio
                    from coleta_seletiva
                )
                ORDER BY nome ASC
            ');

            return $query->result();
        }else if($query == 3){
            $this->db->select('nome')
                     ->from('municipio')
                     ->join('coleta_seletiva', 'municipio.id_municipio = coleta_seletiva.id_municipio', 'LEFT')
                     ->order_by('nome', 'ASC');
        } else if($query == 4){
            $this->db->select('nome')
                     ->from('municipio')
                     ->where('id_municipio in
                             (SELECT DISTINCT 
                                id_municipio 
                            FROM municipio
                                INNER JOIN catadores as C USING(id_municipio)
                                INNER JOIN frente_trabalho_temporario as FTT USING(id_municipio)
                                INNER JOIN trabalhadores_remunerados as TR USING(id_municipio)
                            WHERE 
                                C.ano = 2015 AND 
                                FTT.ano = 2015 AND 
                                TR.ano = 2015)
                             ')
                     ->order_by('nome', 'ASC');
                     
        }

        $result = $this->db->get()->result();
        return $result;
    }

    public function insert($data)
    {
        $this->db->trans_start();

        $this->db->insert(
            $this->table,
            $data
        );

        $id = $this->db->insert_id();

        $this->db->trans_complete();

        return $this->db->trans_status();
    }

    public function update($id, $data)
    {
        $sqls = array();
        $update = array();

        // Pega dados atuais
        $current = $this->get( array('id' => $id));

        $this->update_single_file($data, $update, $delete_images, $current);

        $update['status'] = !empty($data['status']) ? 1 : 0;
        $update['updated'] = date('Y-m-d H:i:s');

        $this->db->trans_start();

        if (!empty($update)) {
            $this->db->where(array($this->primary_key => $id))
                               ->update($this->table, $update);
        }

        $this->db->trans_complete();

        // Confere se possui imagens cadastradas e deleta caso tudo ocorreu certo
        $this->delete_single_file($delete_images);

        return $this->db->trans_status();
    }

}
