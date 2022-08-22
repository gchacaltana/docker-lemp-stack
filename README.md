# Docker LEMP Stack

Configuración de contenedores docker para crear un entorno LEMP Stack.

# Requisitos

* Docker 20.10.17
* Docker-compose 1.25.0

## Ejecución

* Descargar e ingresar a repositorio.

```bash
git clone git@github.com:gchacaltana/docker-lemp-stack.git
```

```bash
cd docker-lemp-stack.git
```

* Asegurar que docker esté ejecutandose.

```bash
service docker status

# Resultado: Docker is running
```

* Levantamos contenedores

```bash
docker-compose up -d

# Resultado:
# Creating mysql-data ... done
# Creating app-src    ... done
# Creating mysql-lemp ... done
# Creating php-lemp   ... done
# Creating nginx-lemp ... done
```

* Verificamos los contenedores creados

```bash
docker ps
```

* Verificamos aplicación ingresaando la siguiente url en el navegador: http://localhost:8080

