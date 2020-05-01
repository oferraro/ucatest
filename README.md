
----- Installation -----
composer install
npm install


----- Data of the App -----
It was created with Postgres running in Docker (port 54320):

    docker run --name some-postgres -e POSTGRES_PASSWORD=mysecretpassword  -p 54320:5432 -d postgres

----- TODO -----
- ABM para los cursos.
- Inscripción de alumnos a cursos.
- ABM para los alumnos.
- Api REST para consulta de alumnos inscriptos y cursos

- Front-end.
- Seguridad
- Api REST mejoras.
- Patrones

Entregar:
- documentación,
- modelo de datos
