load(file = "LogisticModel.rda")
test <- read.csv("Test2.csv",stringsAsFactors=FALSE,encoding="UTF-8",header=TRUE)

#Corregir error que ocurre con las F en el genero.
if(test$Genero[1] == F) 
	test$Genero[1] = as.character("F")

#Ajustar el dataset para la prediccion.
test$Genero <- as.factor(test$Genero)
test$Union.padres <- as.factor(test$Union.padres)

#Predicción de la nueva observación.
glm.probs <- predict(logistic,newdata=test)

x=glm.probs[1]
p=exp(x)/(exp(x)+1)

#Probabilidad de ser talento.
cat(p,"\n")


