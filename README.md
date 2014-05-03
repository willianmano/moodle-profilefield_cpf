CPF Profile Field
===
This is a CPF field to user profiles into moodle.

The Cadastro de Pessoas Físicas (CPF) – Portuguese for Natural Persons Register – is a number attributed by the Brazilian revenue agency (Receita Federal – Federal Revenue) to both Brazilians and resident aliens who pay taxes or take part, directly or indirectly, in activities that provide revenue for any of the dozens of different types of taxes existing in Brazil.

More about CPF: http://en.wikipedia.org/wiki/Cadastro_de_Pessoas_F%C3%ADsicas

For Everyone
---
This plugin was made to add possibility to add CPF field in the user profile form.

Moodle documentation about profilefields -> http://docs.moodle.org/26/en/User_profile_fields

I recommend to insert a mask plugin to the CPF field. I did as follows:

- Added the Jquery masked Input plugin -> http://digitalbush.com/projects/masked-input-plugin/
- Added the follow code relative to the masked field into the selected theme file:
> jQuery("#profilefield_cpf").mask("999.999.999-99");

Para Brasileiros
---
Como CPF é um padrão brasileiro, a explicação será em português. :)
Este plugin foi criado para possibilitar a inclusão do campo cpf nos formulários de criação de novos usuários e também na alteração dos dados do usuário.

Documentação de como utilizar os profilefields -> http://docs.moodle.org/26/en/User_profile_fields

Recomendo inserir um plugin de máscara para o campo CPF. Eu fiz da seguinte forma:
- Adicionei o plugin Jquery masked Input -> http://digitalbush.com/projects/masked-input-plugin/
- Adicionei o seguinte código referente à mascara do campo no tema utilizado:
> jQuery("#profilefield_cpf").mask("999.999.999-99");

Installation
---

As usual:

* Download the source code (zip or git clone)
* Uncompress to user/profile/field/cpf
* Go to **Notifications**

License
---

It is released as GPL v3.

Authors:
* Willian Mano - http://willianmano.net

Copyright 2014 onwards Willian Mano (http://willianmano.net)