# Acesso a Todos

### Instalar PHP
yum install php ou apt-get install php

### Rodar o projeto
> cd /path/to/projectfolder
>> php artisan serve
>>> Laravel development server started on http://localhost:8000/

### Responde as seguintes Requisições HTTP
#### Obter infomações de um determinado local
> GET /infolocal/:id

#### Atualizar informações sobre um determinado local
> PUT /infolocal/:id
>> Corpo: { “acessibilidade”:[“1”, “2”] }