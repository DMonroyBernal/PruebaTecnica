insert into Equipo(nombreEquipo) values 
('incubadora1'), ('incubadora2'), ('incubadora3'), 
('Autoclave1'),('Autoclave2'), ('Autoclave3'), 
('Cabina1'), ('Cabina2'), ('Cabina3');

insert into Grupo(nombreGrupo) values
('incubadora'), ('incubadora'), ('incubadora'), 
('autoclave'),('autoclave'), ('autoclave'),
('cabina'), ('cabina'), ('cabina');

SELECT * FROM Equipo join Grupo