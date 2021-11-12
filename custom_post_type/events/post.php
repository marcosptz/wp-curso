<?php

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'group_4',
        'title' => 'Data do Evento',
        'fields' => array(
            array(
                'key' => 'data-evento',
                'label' => 'Calendário',
                'name' => 'data-evento',
                'type' => 'date_time_picker',
                'description' => 'Selecione a data do evento a ser marcado na Agenda.'
            ),
            array(
                'key' => 'descricao-evento',
                'label' => 'Descrição do Evento',
                'name' => 'descricao-evento',
                'type' => 'textarea',
                'description' => 'Informe a descrição do evento a ser marcado na Agenda.'
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'agenda',
                ),
            ),
        ),
        'style' => 'default',
    ));
}
