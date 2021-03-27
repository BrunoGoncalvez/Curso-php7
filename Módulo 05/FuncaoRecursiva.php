<?php

    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'Subordinados' => array(               
                array( //Inicio: Diretor Comercial
                    'nome_cargo'=>'Diretor Comercial',
                    'Subordinados'=>array(
                        array(
                            'nome_cargo'=>'Gerente de vendas'
                        )
                    )
                ), //Termino: Diretor Comercial
                
                array( //Inicio: Diretor Financeiro
                    'nome_cargo'=>'Diretor Finaceiro',
                    'Subordinados'=>array(

                        array( //Inicio: Gerente de Contas
                            'nome_cargo'=>'Gerente de contas a pagar',

                            'Subordinados'=>array( //Inicio: Supervisor Financeiro
                                array(
                                    'nome_cargo'=>'Supervisor Financeiro'
                                )
                            )// Termino: Supervisor Financeiro

                        ), //Termino: gerente de Contas

                        array( // Inicio: Gerente de Compras
                            'nome_cargo'=>'Gerente de Compras',
                            'Subordinados'=>array(

                                array( // Inicio: Supervisor de Suprimetos
                                    'nome_cargo'=>"Supervisor de Suprimentos",
                                    'Subordinados'=>array(
                                        array(
                                            'nome_cargo'=>'Funcionário' 
                                        )
                                    )
                                ) //Termino: Supervisor de Suprimentos

                            )
                        ) // Termno: Gerente de Compras

                    )
                ) //Termino: Diretor Financeiro
            )
        )
    );

    function exibe($cargos){

        $html = '<ul>';

        foreach($cargos as $cargo){

            $html .= "<li>";
            $html .= $cargo['nome_cargo'];

            if(isset($cargo['Subordinados']) && count($cargo['Subordinados']) > 0){
                $html .= exibe($cargo['Subordinados']);
            }

            $html .= "</li>";

        }

        $html .= '</ul>';

        return $html;
    }

    echo exibe($hierarquia);

?>