<?php

class profile_define_cpf extends profile_define_base {
    public function define_form_specific($form) {
        // Default data.
        $form->addElement('text', 'defaultdata', get_string('profiledefaultdata', 'admin'));
        $form->setType('defaultdata', PARAM_TEXT);
    }
}