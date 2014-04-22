CPF Profile Field
===
This is a CPF field to user profiles into moodle.

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