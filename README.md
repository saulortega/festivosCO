# festivosCO
Una función PHP que retorna un array con las fechas de todos los festivos de Colombia

## Uso

Llamar a la función festivos(), sin ningún parámetro, retornará un array con los festivos del año actual. Se le puede pasar el año del cual obtener los festivos:

festivos():
```
Array
(
    [Año nuevo] => 2015-01-01
    [Reyes magos] => 2015-01-12
    [Día de San José] => 2015-03-23
    [Domingo de ramos] => 2015-03-29
    [Jueves santo] => 2015-04-02
    [Viernes santo] => 2015-04-03
    [Domingo de resurrección] => 2015-04-05
    [Día del trabajo] => 2015-05-01
    [Ascensión del señor] => 2015-05-18
    [Corpus Christi] => 2015-06-08
    [Sagrado corazón de Jesús] => 2015-06-15
    [San Pedro y San Pablo] => 2015-06-29
    [Día de la independencia] => 2015-07-20
    [Batalla de Boyacá] => 2015-08-07
    [Asunción de la virgen María] => 2015-08-17
    [Día de la raza] => 2015-10-12
    [Todos los santos] => 2015-11-02
    [Independencia de Cartagena] => 2015-11-16
    [Inmaculada concepción] => 2015-12-08
    [Navidad] => 2015-12-25
)
```

festivos(2020):
```
Array
(
    [Año nuevo] => 2020-01-01
    [Reyes magos] => 2020-01-06
    [Día de San José] => 2020-03-23
    [Domingo de ramos] => 2020-04-05
    [Jueves santo] => 2020-04-09
    [Viernes santo] => 2020-04-10
    [Domingo de resurrección] => 2020-04-12
    [Día del trabajo] => 2020-05-01
    [Ascensión del señor] => 2020-05-25
    [Corpus Christi] => 2020-06-15
    [Sagrado corazón de Jesús] => 2020-06-22
    [San Pedro y San Pablo] => 2020-06-29
    [Día de la independencia] => 2020-07-20
    [Batalla de Boyacá] => 2020-08-07
    [Asunción de la virgen María] => 2020-08-17
    [Día de la raza] => 2020-10-12
    [Todos los santos] => 2020-11-02
    [Independencia de Cartagena] => 2020-11-16
    [Inmaculada concepción] => 2020-12-08
    [Navidad] => 2020-12-25
)
```
