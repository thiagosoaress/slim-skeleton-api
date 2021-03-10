# Slim Skeleton API

Projeto com arquitetura para a construção rápida de uma API Rest com PHP e Slim Framework.


**Iniciar o projeto**

Executar o comando do composer logo abaixo para baixar as dependências

```bash
php composer.phar install
```

**Arquivo environment.php**

Este arquivo está na raiz do projeto, nele deve ser configurado 
a variável de ambiente para a conexão do banco de produção e 
do banco de desenvolvimento.

Aqui definimos qual ambiente será usado em nossa **API.**

Valores aceito: `production` ou `development`
```php
putenv('AMBIENTE=development');
```
