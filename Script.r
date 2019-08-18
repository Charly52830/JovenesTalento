#Script para crear el modelo y guardarlo en un archivo .rda

dataset <- read.csv("Dataset.csv",stringsAsFactors=FALSE,encoding="UTF-8",header=TRUE)

#Ajustar el dataset para el entrenamiento.
dataset$Clase <- as.factor(dataset$Clase)
dataset$Genero <- as.factor(dataset$Genero)
dataset$Union.padres <- as.factor(dataset$Union.padres)

#Creación del modelo.
logistic <- glm( Clase ~ 
				 Union.padres + 
				 Presion.familiar + 
				 Ambiente.escolar + 
				 Promedio + 
				 Genero + 
				 Libros + 
				 Apoyo.academico + 
				 Edad.padre + 
				 Relacion.esfuerzo.exito, 
				 data=dataset, family="binomial")

#Guardar el modelo
save(logistic,file="LogisticModel.rda")

